<?php
// lib/task/CooperationCleanupTask.class.php
class CooperationCleanupTask extends sfBaseTask
{
    protected function configure()
    {
        $this->addOptions(array(
        new sfCommandOption('application', null, sfCommandOption::PARAMETER_REQUIRED, 'The application', 'frontend'),
        new sfCommandOption('env', null, sfCommandOption::PARAMETER_REQUIRED, 'The environement', 'prod'),
        new sfCommandOption('days', null, sfCommandOption::PARAMETER_REQUIRED, '', 90),
        ));

        $this->namespace = 'cooperation';
        $this->name = 'cleanup';
        $this->briefDescription = 'Cleanup Cooperation database';

        $this->detailedDescription = <<<EOF
The [cooperation:cleanup|INFO] task cleans up the Cooperation database:
 
  [./symfony cooperation:cleanup --env=prod --days=90|INFO]
EOF;
    }

    //  protected function execute($arguments = array(), $options = array())
    //  {
    //    $databaseManager = new sfDatabaseManager($this->configuration);
        //
    //    $nb = Doctrine_Core::getTable('CooperationNotice')->cleanup($options['days']);
    //    $this->logSection('doctrine', sprintf('Removed %d stale notices', $nb));
    //  }

    protected function execute($arguments = array(), $options = array())
    {
        $databaseManager = new sfDatabaseManager($this->configuration);

        // cleanup Lucene index
        $index = CooperationNoticeTable::getLuceneIndex();

        $q = Doctrine_Query::create()
        ->from('CooperationNotice j')
        ->where('j.expires_at < ?', date('Y-m-d'));

        $notices = $q->execute();
        foreach ($notices as $notice)
        {
            if ($hit = $index->find('pk:'.$notice->getId()))
            {
                $index->delete($hit->id);
            }
        }

        $index->optimize();

        $this->logSection('lucene', 'Cleaned up and optimized the notice index');

        // Remove stale notices
        $nb = Doctrine_Core::getTable('CooperationNotice')->cleanup($options['days']);

        $this->logSection('doctrine', sprintf('Removed %d stale notices', $nb));
    }
}