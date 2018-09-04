<div class="media">
  <div class="media-body w-70">
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
  </div>
  <div class="w-30"><?php include_partial('sfCooperationMain/newsList') ?></div>
</div>

<div class="media">
  <div class="media-body w-20"><?php include_partial('sfCooperationMain/filmList')?></div>
  <div class="media-body w-40"><?php include_partial('sfCooperationMain/brandList')?></div>
  <div class="media-body w-40"><?php include_partial('sfCooperationMain/topicList')?></div>
</div>

<table class="container-fluid">
<tbody>
<tr>
  <td class="w-30">
    <div class="panel">
      <div class="panel-body">
        <img title=""  alt="" src="/styles/AD0IlIzuBRACGAAg8p-IwgUo2bWT9gcw7AI45wE.jpg" />
      </div>
      <div class="panel-footer bg-white border-0">
        <div class="card border-0">
          <div class="card-title"><strong class="text-success"><?php echo __('一站式影视制作服务') ?></strong></div>
          <div class="card-body"><span class="text-info"><?php echo __('从前期策划到执行拍摄，从影片剪辑到三维特效从创意到画面，从文字到配乐策划团队、拍摄团队、后期团队，新视文化掌控所有核心战斗力这一切，只为了让您的影片更具性价比，让您享受一站式影视创作服务。阿我们热爱我们的行业，这是我们的生活方式之一') ?></span>	</div>
        </div>
      </div>
    </div>
  </td>
  <td class="w-30"><?php include_partial('sfCooperationMain/sample') ?></td>
  <td class="w-40"></td>
</tr>
</tbody>
</table>
<div>
  <div class="row no-gutters"><div class="col text-left text-danger"><strong><?php echo __('案例欣赏') ?></strong></div></div>
  <hr class="bg-danger">
  <?php include_partial('sfCooperationMain/caseList') ?>
</div>
