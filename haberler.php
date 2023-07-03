<?php include("admin/include/site_db.php"); ?> <!DOCTYPE html>
<html lang="tr">
  <head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title>Haberler - Akdoğan Rent A Car</title>
      <meta content="" name="description">
      <meta content="" name="keywords">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta content="telephone=no" name="format-detection">
      <meta name="HandheldFriendly" content="true">
      <link rel="stylesheet" href="assets\css\master.css">
     
      <?php include("favo.php")?><!--[if lt IE 9 ]>
<script src="/assets/js/separate-js/html5shiv-3.7.2.min.js" type="text/javascript"></script><meta content="no" http-equiv="imagetoolbar">
<![endif]-->
  </head>
  <body class="page">
      <!-- Loader-->
      <div id="page-preloader"><span class="spinner border-t_second_b border-t_prim_a"></span></div>
      <!-- Loader end-->
    <div class="l-theme animated-css" data-header="sticky" data-header-top="200" data-canvas="container">
        <?php include("ust.php")?>

      <div class="section-title-page area-bg area-bg_dark area-bg_op_60">
        <div class="area-bg__inner">
          <div class="container text-center">
            <h1 class="b-title-page">Haberler</h1>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index">Anasayfa</a></li>
                <li class="breadcrumb-item active" aria-current="page">Haberler</li>
              </ol>
            </nav>
            <!-- end .breadcrumb-->
            
          </div>
        </div>
      </div>
      <!-- end .b-title-page-->
      
      <div class="l-main-content">
        <div class="ui-decor ui-decor_mirror ui-decor_sm-h bg-primary"></div>
        <div class="container">
          <main class="b-post-group">
            <div class="js-scroll-content">
              
			  <?php
        if($db->veriSaydir("blog", array(), array()) > 0) {
        $bilgi= $db->VeriOkuCoklu("blog", array(), array(), "row", "ASC");
        $bilgial= $db->bilgial;
        foreach($bilgial as $rows){
        ?>
			
			
				<section class="b-post b-post-2 row">
                <div class="entry-media col-lg-6"><a class="js-zoom-images" href="upload/<?=$rows->resim;?>"><img class="img-scale" src="upload/<?=$rows->resim;?>" alt="<?=$rows->isim;?>"></a></div>
                <div class="entry-main col-lg-6">
                  <div class="entry-header">
                    <h2 class="entry-title"><a href="haber-<?=$rows->url;?>.html"><?=$rows->isim;?></a></h2>
                  </div>
                  <div class="entry-meta">
                     <time class="entry-meta__item" datetime="2019-01-31"><?=$rows->tarih;?></time>
                    <br><span class="entry-meta__item">
                       Yazan: 
                      <a class="entry-meta__link text-primary" href="haber-<?=$rows->url;?>.html">Akdoğan Rent A Car</a></span>
                  </div>
                  <div class="entry-content"><?=substr($rows->aciklama,0,250);?></div>
                  <div class="entry-footer"><a class="btn text-primary" href="haber-<?=$rows->url;?>.html">Devamını Oku</a></div>
                </div>
              </section>
              <!-- end .b-post-->
        <?php }} ?>



	  </main>
        </div>
      </div>
              <?php include("alt.php")?>
 </div>
    <!-- end layout-theme-->
    
    
    <!-- ++++++++++++-->
    <!-- MAIN SCRIPTS-->
    <!-- ++++++++++++-->
    <script src="assets\libs\jquery-3.3.1.min.js"></script>
    <script src="assets\libs\jquery-migrate-1.4.1.min.js"></script>
    <!-- Bootstrap-->
    <script src="assets\plugins\popever\popper.min.js"></script>
    <script src="assets\libs\bootstrap-4.1.3\js\bootstrap.min.js"></script>
    <!---->
    <!-- Color scheme-->
    <script src="assets\plugins\switcher\js\dmss.js"></script>
    <!-- Select customization & Color scheme-->
    <script src="assets\libs\bootstrap-select.min.js"></script>
    <!-- Pop-up window-->
    <script src="assets\plugins\magnific-popup\jquery.magnific-popup.min.js"></script>
    <!-- Headers scripts-->
    <script src="assets\plugins\headers\slidebar.js"></script>
    <script src="assets\plugins\headers\header.js"></script>
    <!-- Mail scripts-->
    <script src="assets\plugins\jqBootstrapValidation.js"></script>
    <script src="assets\plugins\contact_me.js"></script>
    <!-- Progress numbers-->
    <script src="assets\plugins\rendro-easy-pie-chart\jquery.easypiechart.min.js"></script>
    <script src="assets\plugins\rendro-easy-pie-chart\jquery.waypoints.min.js"></script>
    <!-- Animations-->
    <script src="assets\plugins\scrollreveal\scrollreveal.min.js"></script>
    <!-- Scale images-->
    <script src="assets\plugins\ofi.min.js"></script>
    <!-- User customization-->
    <script src="assets\js\custom.js"></script>
      
      <!-- Yandex.Metrika counter -->
<script type="text/javascript">
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(54978811, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/54978811" style="position:absolute; left:-9999px;" alt=""></div></noscript>
<!-- /Yandex.Metrika counter -->
      
  </body>
</html>