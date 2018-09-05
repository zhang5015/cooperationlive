<div id="myCarousel" class="carousel slide">
    <!-- 轮播（Carousel）指标 -->
    <ol class="carousel-indicators">
     <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
     <li data-target="#myCarousel" data-slide-to="1"></li>
     <li data-target="#myCarousel" data-slide-to="2"></li>
     <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>
    <!-- 轮播（Carousel）项目 -->
    <div class="carousel-inner">
     <div class="item active">
      <img src="/images/720x580/CAT_AAAAAA_720x580.jpg" alt="First slide" />
     </div>
     <div class="item">
      <img src="/images/720x580/CAT_AAAAAB_720x580.jpg" alt="Second slide" />
     </div>
     <div class="item">
      <img src="/images/720x580/CAT_AAAAAC_720x580.jpg" alt="Third slide" />
     </div>
     <div class="item">
      <img src="/images/720x580/CAT_AAAAAD_720x580.jpg" alt="Four slide" />
     </div>
    </div>
    <!-- 轮播（Carousel）导航 -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
</div>
    <table class="w-100 border-white mt-3">
     <tr class="text-center">
      <td class="text-center bg-dark " rowspan="2">
       <a class="text-white" href="http://m.cooperationlive.com" target="_self"><p class="fa fa-home before fa-5x"></p> <p><?php echo __('首页') ?></p></a>
      </td>
      <td class="text-center bg-dark ">
       <a class="text-white" href="http://m.cooperationlive.com" target="_self"><p class="fa fa-pencil before fa-3x"></p> <p><?php echo __('品牌策划') ?></p></a>
      </td>
      </tr>
      <tr class="text-center">
      <td class="text-center bg-dark ">
       <a class="text-white" href="http://m.cooperationlive.com" target="_self"> <p class="fa fa-file-video-o before fa-3x"></p> <p><?php echo __('媒体资源') ?></p> </a>
      </td>
      </tr>
      <tr class="text-center">
      <td class="text-center bg-dark ">
       <a class="text-white" href="http://m.cooperationlive.com" target="_self"> <p class="fa fa-user before fa-3x"></p> <p><?php echo __('关于我们') ?></p></a>
      </td>
      <td class="text-center bg-dark ">
       <a class="text-white" href="http://m.cooperationlive.com" target="_self"> <p class="fa fa-newspaper-o before fa-3x"></p> <p><?php echo __('新闻动态') ?></p></a>
      </td>
      </tr>
      <tr class="text-center">
      <td class="text-center bg-dark ">
       <a class="text-white" href="http://m.cooperationlive.com" target="_self"> <p class="fa fa-commenting before fa-3x"></p> <p><?php echo __('留言板') ?></p></a>
      </td>
      <td class="text-center bg-dark ">
       <a class="text-white" href="http://m.cooperationlive.com" target="_self"> <p class="fa fa-coffee before fa-3x"></p> <p><?php echo __('咖啡屋') ?></p></a>
      </td>
      </tr>
     </table>
		<?php include_partial('sfCooperationMobile/newsList')?>

    <div class="w-100 bg-dark text-center">
			<h1 class="text-white">影视</h1>
      <h1 class="text-white">Film &amp; TV</h1>
    </div>
    <?php include_partial('sfCooperationMobile/filmList')?>

    <div class="w-100 bg-dark text-center">
			<h1 class="text-white">品牌策划</h1>
      <h1 class="text-white">Brand Planning</h1>
    </div>
		<?php include_partial('sfCooperationMobile/brandList')?>

    <div class="w-100 bg-dark text-center">
			<h1 class="text-white">专题</h1>
      <h1 class="text-white">Topic</h1>
    </div>
		<?php include_partial('sfCooperationMobile/topicList')?>
		<?php include_partial('sfCooperationMobile/noticeList') ?>
    <div class="w-100 bg-dark text-center">
			<h1 class="text-white">案例欣赏</h1>
      <h1 class="text-white">Case appreciation</h1>
    </div>
		<?php include_partial('sfCooperationMobile/caseList') ?>