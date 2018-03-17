<?php

/**
 * article actions.
 *
 * @package    cooperation
 * @subpackage article
 * @author     Your name here
 * @version    1.0
 */
class articleActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->cooperation_articles = Doctrine_Core::getTable('CooperationArticle')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->cooperation_article = Doctrine_Core::getTable('CooperationArticle')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->cooperation_article);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new CooperationArticleForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new CooperationArticleForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($cooperation_article = Doctrine_Core::getTable('CooperationArticle')->find(array($request->getParameter('id'))), sprintf('Object cooperation_article does not exist (%s).', $request->getParameter('id')));
    $this->form = new CooperationArticleForm($cooperation_article);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($cooperation_article = Doctrine_Core::getTable('CooperationArticle')->find(array($request->getParameter('id'))), sprintf('Object cooperation_article does not exist (%s).', $request->getParameter('id')));
    $this->form = new CooperationArticleForm($cooperation_article);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($cooperation_article = Doctrine_Core::getTable('CooperationArticle')->find(array($request->getParameter('id'))), sprintf('Object cooperation_article does not exist (%s).', $request->getParameter('id')));
    $cooperation_article->delete();

    $this->redirect('article/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $cooperation_article = $form->save();

      $this->redirect('article/edit?id='.$cooperation_article->getId());
    }
  }
}
