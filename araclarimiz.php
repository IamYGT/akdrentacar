<?php include("admin/include/site_db.php"); ?> <!DOCTYPE html>
<html lang="tr">
  <head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title>Araçlarımız - Akdoğan Rent A Car</title>
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
            <h1 class="b-title-page">Araçlarımız</h1>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index">Anasayfa</a></li>
                <li class="breadcrumb-item active" aria-current="page">Araçlarımız</li>
              </ol>
            </nav>
            <!-- end .breadcrumb-->
            
          </div>
        </div>
      </div>
      <!-- end .b-title-page-->
      
      <div style="    padding-top: 61px;" class="l-main-content l-main-content_pt_0">
      <div class="container"> 
          <div class="b-goods-group-2 row">
           
		   
		   <?php
        if($db->veriSaydir("araba_category", array(), array()) > 0) {
        $bilgi= $db->VeriOkuCoklu("araba_category", array(), array(), "row", "ASC");
        $bilgial= $db->bilgial;
        foreach($bilgial as $rows){
        ?>

 <div class="col-xl-4 col-md-6">
      <input type="hidden" name="car_id" value="<?= $rows->id; ?>">
              <div class="b-goods-flip">
                 <div class="flip-container">
                  <div class="flipper">
                    <div class="flip__front">
                      <div class="b-goods-flip__img"><a href="arac-<?=$rows->url;?>.html"> <img class="img-scale" src="upload/<?=$rows->resim;?>" alt="<?=$rows->isim;?>"> </a></div>
                      <div class="b-goods-flip__main">
                        <div class="b-goods-flip__header row no-gutters align-items-center">
                          <div class="col"><a style="text-align:center;" class="b-goods-flip__title" href="arac-<?=$rows->url;?>.html"><?=$rows->isim;?></a></div>
                        
                        </div>
                        <div class="b-goods-flip-descrip">
                          <div class="b-goods-flip-descrip__item"><i class="ic flaticon-speedometer"></i>
                            <div class="b-goods-flip-descrip__main"><span class="b-goods-flip-descrip__title">KM</span><span class="b-goods-flip-descrip__text"><?=$rows->km;?></span></div>
                          </div>
                          <div class="b-goods-flip-descrip__item"><i class="ic flaticon-fuel-station-pump"></i>
                            <div class="b-goods-flip-descrip__main"><span class="b-goods-flip-descrip__title">Yakıt</span><span class="b-goods-flip-descrip__text"><?=$rows->yakit;?></span></div>
                          </div>
                          <div class="b-goods-flip-descrip__item"><i class="ic flaticon-gearshift"></i>
                            <div class="b-goods-flip-descrip__main"><span class="b-goods-flip-descrip__title">Vites</span><span class="b-goods-flip-descrip__text"><?=$rows->vites;?></span></div>
                          </div>
                        </div>
						
						<div class="b-goods-f-price">
                    <div class="b-goods-f-price__header bg-secondary">1 Günlük<span class="b-goods-f-price__main"><?=$rows->gun;?>₺</span></div>
                    <div style="    background-color: #ffffff;    color: #b19a68;" class="b-goods-f-price__header bg-secondary">1 Haftalık<span style="    color: #b19a68;" class="b-goods-f-price__main"><?=$rows->hafta;?>₺</span></div>
                    <div style="    background-color: #222222;" class="b-goods-f-price__header bg-secondary">1 Aylık<span class="b-goods-f-price__main"><?=$rows->ay;?>₺</span></div>
                                        <button data-car_id="<?=$rows->id;?>" style="width: 100%; background-color: #b19a68;        font-weight: 600; font-size: 13px" class="b-goods-f-price__header btn bg-secondary reservationButton"> <i class="fas fa-check"></i> REZERVASYON YAP</button>

                  </div>
				  
                      </div>
                    </div> 
                  </div>
                </div>
              </div>
			</div>
          <?php }} ?>


		  </div>
         
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
    <!-- Progress numbers-->
    <script src="assets\plugins\rendro-easy-pie-chart\jquery.easypiechart.min.js"></script>
    <script src="assets\plugins\rendro-easy-pie-chart\jquery.waypoints.min.js"></script>
    <!-- Animations-->
    <script src="assets\plugins\scrollreveal\scrollreveal.min.js"></script>
    <!-- Scale images-->
    <script src="assets\plugins\ofi.min.js"></script>
    <!-- Slider number-->
    <script src="assets\plugins\noUiSlider\wNumb.js"></script>
    <script src="assets\plugins\noUiSlider\nouislider.min.js"></script>
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

  $(document).ready(function() {
    $('.reservationButton').on('click', function(e) {
      e.preventDefault();

      var carId = $(this).data('car_id');
      var locationId = '<?= $_POST['location_id']; ?>';

      var departureDate = '<?= $_POST['departure_date']; ?>';
      var departureTime = '<?= $_POST['departure_time']; ?>';

      var arrivalDate = '<?= $_POST['arrival_date']; ?>';
      var arrivalTime = '<?= $_POST['arrival_time']; ?>';

      var inputs = '';
      if (locationId && departureDate && departureTime && arrivalDate && arrivalTime) {
        inputs += '<input type="hidden" name="location_id" value="' + locationId + '" />' +
        '<input type="hidden" name="departure_date" value="' + departureDate + '" />' +
        '<input type="hidden" name="departure_time" value="' + departureTime + '" />' +
        '<input type="hidden" name="arrival_date" value="' + arrivalDate + '" />' +
        '<input type="hidden" name="arrival_time" value="' + arrivalTime + '" />';
      }

      var url = './rezervasyon';
      var form = $('<form action="' + url + '" method="post">' +
        '<input type="hidden" name="car_id" value="' + carId + '" />' +
        inputs +
        '</form>');
      $('body').append(form);
      form.submit();
    });
  });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/54978811" style="position:absolute; left:-9999px;" alt=""></div></noscript>
<!-- /Yandex.Metrika counter -->
      
  </body>
</html>