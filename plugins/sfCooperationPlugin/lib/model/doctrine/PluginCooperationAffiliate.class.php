<?php

/**
 * CooperationAffiliate
 *
 * This class has been auto-generated by the Doctrine ORM Framework
 *
 * @package    cooperation
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class PluginCooperationAffiliate extends BaseCooperationAffiliate
{
    public function __toString()
    {
        return $this->getUrl();
    }


    public function activate()
    {
        $this->setIsActive(true);

        return $this->save();
    }

    public function deactivate()
    {
        $this->setIsActive(false);

        return $this->save();
    }

    //    public function save(Doctrine_Connection $conn = null)
    //    {
    //        if ($this->isNew())
    //        {
    //            $this->setCreatedAt(date('Y-m-d H:i:s', time()));
    //        }
    //        $this->setUpdatedAt(date('Y-m-d H:i:s', time()));
    //
    //        if (!$this->getToken())
    //        {
    //            $this->setToken(sha1($this->getEmail().rand(11111, 99999)));
    //        }
    //        return parent::save($conn);
    //    }

    public function save(Doctrine_Connection $conn = null)
    {
        if (!$this->getToken())
        {
            $this->setToken(sha1($object->getEmail().rand(11111, 99999)));
        }

        parent::save($conn);
    }


    public function getActiveNotices()
    {
        $q = Doctrine_Query::create()
        ->select('j.*')
        ->from('CooperationNotice j')
        ->leftJoin('j.CooperationCategory c')
        ->leftJoin('c.CooperationAffiliates a')
        ->where('a.id = ?', $this->getId());

        $q = Doctrine_Core::getTable('CooperationNotice')->addActiveNoticesQuery($q);

        return $q->execute();
    }

}