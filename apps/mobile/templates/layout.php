<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh" lang="zh">
 <head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
   <!--  <meta name="viewport" content="width=device-width, initial-scale=1" />-->
  <title><?php include_slot('title') ?></title>
   <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" type="text/css"/>
  <link rel="stylesheet" type="text/css" media="screen" href="/css/article.css"/>
  <link rel="stylesheet" type="text/css" media="screen" href="/css/bootstrap.css"/>
  <link rel="stylesheet" type="text/css" media="screen" href="/css/bootstrap.min.css"/>
  <link rel="stylesheet" type="text/css" media="screen" href="/css/font-awesome.css"/>
  <link rel="stylesheet" href="http://cache.amap.com/lbs/static/main1119.css"/>
  <script type="text/javascript" src="/js/bootstrap.min.js"></script>
  <style type="text/css">
        #panel {
          position: absolute;
          background-color: white;
          max-height: 90%;
          overflow-y: auto;
          top: 10px;
          right: 10px;
          width: 200px;
        }
  </style>
  <script type="text/javascript" src="http://webapi.amap.com/maps?v=1.4.6&amp;key=您申请的key值"></script>
  <script type="text/javascript" src="http://cache.amap.com/lbs/static/addToolbar.js"></script>
  <script src="https://cdn.bootcss.com/jquery/2.1.1/jquery.min.js"></script>
  <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
   <!-- Styles -->
 </head>
 <body>
  <div id="container" class="container-fluid">
    <div id="container" class="container-fluid">
    <div class="row no-gutters border-0 float-right"><div class="mr-3"><?php include_component('sfCooperationLanguage', 'language') ?></div></div>
    <h1 class="text-danger text-center"><strong>COOPERATION LIVE</strong></h1>
    <?php echo $sf_content ?>
    <div class="w-100 mb-5" style="height: 18rem;">
      <div class="bg-danger text-white text-right" onclick="window.scrollTo(0,0);"><h3><strong>top</strong></h3></div>
      <div class="w-100>
        Copyright <span class="fa fa-copyright"></span> <?php echo __('©2018 版权所有') ?>
        <strong><a href="//www.cooperationlive.com/" target="_blank"><?php echo __('电脑版') ?></a></strong>&nbsp;
        <strong><a href="//www.cooperationlive.com/" target="_blank">cooperationlive.com</a></strong> <?php echo __('备案号：辽ICP备18003786号-2') ?>
      </div>
    </div>
  <div class="row fixed-bottom bg-danger py-5">
   <div class="col w-20 text-white align-self-center text-center" id="navItem_1" onclick="calling()">
    <span class="fa fa-phone fa-5x"></span>
    <div class="text-white" id="describeName_1">
     <?php echo __('电话咨询') ?>
    </div>
   </div>
   <div class="col w-20 text-white align-self-center text-center" id="navItem_2" onclick="consultation()">
    <span class="fa fa-envelope fa-5x"></span>
    <div class="text-white" id="describeName_2">
     <?php echo __('信息咨询') ?>
    </div>
   </div>
   <div class="col w-20 text-white align-self-center text-center" id="navItem_3" onclick="openQQ()">
    <span class="fa fa-qq fa-5x"></span>
    <div class="text-white" id="describeName_3">
     <?php echo __('QQ客服') ?>
    </div>
   </div>
   <div class="col w-20 text-white align-self-center text-center" id="navItem_4" onclick="showMap()">
    <span class="fa fa-map-marker fa-5x"></span>
    <div class="text-white" id="describeName_4">
     <?php echo __('在线地图') ?>
    </div>
   </div>
   <div class="col w-20 text-white align-self-center text-center" id="navItem_5" onclick="addComment()">
    <span class="fa fa-comment fa-5x"></span>
    <div class="text-white" id="describeName_5">
     <?php echo __('在线留言') ?>
    </div>
   </div>
  </div>
  </div>
  <div id="panel"></div>
 </body>
   <script>
            function calling() {
                location.href = "tel:";
            }

            function consultation() {


                location.href = "sms:";
            }

            function openQQ() {
                alert("请输入QQ号码");
            }

            function showMap() {
                // $('#container').hide();
                var map = new AMap.Map("container", {
                    resizeEnable: true,
                    zoom: 12 //地图显示的缩放级别
                });
                var search, center = [116.39946, 39.907629];
                var searchOptions = {
                    map: map,
                    panel: 'panel',
                    keywords: '',
                    pageSize: 5,
                    orderBy: '_id:ASC'
                };
                //加载CloudDataSearch服务插件
                AMap.service(["AMap.CloudDataSearch"], function () {
                    search = new AMap.CloudDataSearch('532b9b3ee4b08ebff7d535b4', searchOptions);
                    search.searchNearBy(center, 10000);
                });
            }

            function addComment() {
                location.href = "http://m.cooperationlive.com";
            }
   </script>
</html>