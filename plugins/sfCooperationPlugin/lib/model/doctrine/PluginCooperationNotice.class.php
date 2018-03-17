<?php

/**
 * PluginCooperationNotice
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class PluginCooperationNotice extends BaseCooperationNotice
{
    public function __toString()
    {
        return sprintf('%s at %s (%s)', $this->getPosition(), $this->getCompany(), $this->getLocation());
    }

    public function asArray($host)
    {
        return array(
      'category'     => $this->getCooperationCategory()->getName(),
      'type'         => $this->getType(),
      'company'      => $this->getCompany(),
      'logo'         => $this->getLogo() ? 'http://'.$host.'/uploads/notices/'.$this->getLogo() : null,
      'url'          => $this->getUrl(),
      'position'     => $this->getPosition(),
      'location'     => $this->getLocation(),
      'description'  => $this->getDescription(),
      'how_to_apply' => $this->getHowToApply(),
      'created_at'   => $this->getCreatedAt(),
      'expires_at'   => $this->getExpiresAt()
        );
    }

    public function expiresSoon()
    {
        return $this->getDaysBeforeExpires() < 5;
    }

    public function extend($force = false)
    {
        if (!$force && !$this->expiresSoon())
        {
            return false;
        }

        $this->setExpiresAt(date('Y-m-d', time() + 86400 * sfConfig::get('app_active_days')));
        $this->save();

        return true;
    }

    public function getActiveNotices()
    {
        $q = $this->createQuery('j')
        ->where('j.expires_at > ?', date('Y-m-d H:i:s', time()))
        ->orderBy('j.expires_at DESC');

        return $q->execute();
    }

    public function getCompanySlug()
    {
        return Cooperation::slugify($this->getCompany());
    }

    public function getDaysBeforeExpires()
    {
        return ceil(($this->getDateTimeObject('expires_at')->format('U') - time()) / 86400);
    }

    public function getLocationSlug()
    {
        return Cooperation::slugify($this->getLocation());
    }

    public function getPositionSlug()
    {
        return Cooperation::slugify($this->getPosition());
    }

    public function getTypeName()
    {
        $types = Doctrine_Core::getTable('CooperationNotice')->getTypes();
        return $this->getType() ? $types[$this->getType()] : '';
    }

    public function isExpired()
    {
        return $this->getDaysBeforeExpires() < 0;
    }

    public function publish()
    {
        $this->setIsActivated(true);
        $this->save();
    }

    public function save(Doctrine_Connection $conn = null)
    {
        if ($this->isNew() && !$this->getExpiresAt())
        {
            $this->setCreatedAt(date('Y-m-d H:i:s', time()));
            $now = $this->getCreatedAt() ? $this->getDateTimeObject('created_at')->format('U') : time();
            $this->setExpiresAt(date('Y-m-d H:i:s', $now + 86400 * sfConfig::get('app_active_days')));
        }
        $this->setUpdatedAt(date('Y-m-d H:i:s', time()));

        if (!$this->getToken())
        {
            $this->setToken(sha1($this->getEmail().rand(11111, 99999)));
        }

        $conn = $conn ? $conn : $this->getTable()->getConnection();
        $conn->beginTransaction();
        try
        {
            $ret = parent::save($conn);

            $this->updateLuceneIndex();

            $conn->commit();

            return $ret;
        }
        catch (Exception $e)
        {
            $conn->rollBack();
            throw $e;
        }
    }

    public function delete(Doctrine_Connection $conn = null)
    {
        $index = CooperationNoticeTable::getLuceneIndex();

        foreach ($index->find('pk:'.$this->getId()) as $hit)
        {
            $index->delete($hit->id);
        }

        return parent::delete($conn);
    }

    public function updateLuceneIndex()
    {
        $index = CooperationNoticeTable::getLuceneIndex();

        // remove existing entries
        foreach ($index->find('pk:'.$this->getId()) as $hit)
        {
            $index->delete($hit->id);
        }

        // don't index expired and non-activated notices
        if ($this->isExpired() || !$this->getIsActivated())
        {
            return;
        }

        $doc = new Zend_Search_Lucene_Document();

        // store notice primary key to identify it in the search results
        $doc->addField(Zend_Search_Lucene_Field::Keyword('pk', $this->getId()));

        // index notice fields
        $doc->addField(Zend_Search_Lucene_Field::UnStored('position', $this->getPosition(), 'utf-8'));
        $doc->addField(Zend_Search_Lucene_Field::UnStored('company', $this->getCompany(), 'utf-8'));
        $doc->addField(Zend_Search_Lucene_Field::UnStored('location', $this->getLocation(), 'utf-8'));
        $doc->addField(Zend_Search_Lucene_Field::UnStored('description', $this->getDescription(), 'utf-8'));

        // add notice to the index
        $index->addDocument($doc);
        $index->commit();
    }
    
}