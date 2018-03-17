<?php
// auto-generated by sfViewConfigHandler
// date: 2018/03/15 13:05:59
$response = $this->context->getResponse();


  $templateName = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_template', $this->actionName);
  $this->setTemplate($templateName.$this->viewName.$this->getExtension());



  if (null !== $layout = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_layout'))
  {
    $this->setDecoratorTemplate(false === $layout ? false : $layout.$this->getExtension());
  }
  else if (null === $this->getDecoratorTemplate() && !$this->context->getRequest()->isXmlHttpRequest())
  {
    $this->setDecoratorTemplate('' == 'layout' ? false : 'layout'.$this->getExtension());
  }
  $response->addHttpMeta('content-type', 'text/html', false);

  $response->addStylesheet('base2.css', '', array ());
  $response->addStylesheet('fkTheme.css', '', array ());
  $response->addStylesheet('detail2.css', '', array ());
  $response->addStylesheet('newSearchBoxStyle.css', '', array ());
  $response->addStylesheet('poshytipAndmCustomScrollbar.css', '', array ());
  $response->addStylesheet('jzcusstyle.css', '', array ());
  $response->addStylesheet('video-js.css', '', array ());
  $response->addStylesheet('video.css', '', array ());
  $response->addStylesheet('datepicker.css', '', array ());
  $response->addStylesheet('faiFloatPanel.css', '', array ());
  $response->addStylesheet('fontsIco.css', '', array ());
  $response->addJavascript('2052.js', '', array ());
  $response->addJavascript('faiFloatPanel_bindEvent.js', '', array ());
  $response->addJavascript('faiFloatPanel.js', '', array ());
  $response->addJavascript('imageEffect.js', '', array ());
  $response->addJavascript('photoSlide.js', '', array ());
  $response->addJavascript('bookingSubmitPanel.js', '', array ());
  $response->addJavascript('video.js', '', array ());
  $response->addJavascript('hawkEye.js', '', array ());
  $response->addJavascript('jzUtils.js', '', array ());
  $response->addJavascript('jquery-1.4.2.min.js', '', array ());
  $response->addJavascript('search.js', '', array ());
  $response->addJavascript('jquery-core.js', '', array ());
  $response->addJavascript('jquery-mousewheel.js', '', array ());
  $response->addJavascript('fai.js', '', array ());
  $response->addJavascript('jquery-ui-core.js', '', array ());
  $response->addJavascript('site.js', '', array ());


