<?php
include("admin/include/site_db.php");
if (!isset($_POST['location_id']) ||
  !isset($_POST['car_id']) ||
  !isset($_POST['departure_date']) ||
  !isset($_POST['arrival_date'])
) {
   echo "<b>Eksik veri gönderildi, ana sayfaya yönlendiriliyorsunuz.</b>";
    echo '<script> setTimeout(function() {location.replace("./")}, 2000); </script>';    
    exit;
}

?> <!DOCTYPE html>
<html lang="tr">
  <head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title>Ek Özellikler - Akdoğan Rent A Car</title>
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

      <div class="section-title-page area-bg area-bg_dark area-bg_op_60 section-title-page_mod-b">
        <div class="area-bg__inner">
          <div class="container text-center">
            <h1 class="b-title-page">Ek Özellikler</h1>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index">Anasayfa</a></li>
                <li class="breadcrumb-item active" aria-current="page">Ek Özellikler</li>
              </ol>
            </nav>
            <!-- end .breadcrumb-->
            
          </div>
        </div>
      </div>
      <!-- end .b-title-page-->
      
      <div class="l-main-content">
        <div class="ui-decor ui-decor_mirror bg-primary"></div>
        <div class="container">
          <main>
            <div class="b-booking-group">
              <div class="container">
                <div class="row">
                  <div class="col-lg-4">
                    <div class="b-booking-nav">
					
				 
						<a class="b-booking-nav__item " id="go_step_one" href="#">
                        <div class="b-booking-nav__header">Aşama 1</div>
                        <div class="b-booking-nav__main"><i class="ic fas fa-cubes"></i><span class="b-booking-nav__title">Araç</span><span class="b-booking-nav__info">Tarih ve Lokasyon Seçiniz</span></div></a>
						 			<a class="b-booking-nav__item active preventDefault" href="#">
                        <div class="b-booking-nav__header">Aşama 2</div>
                        <div class="b-booking-nav__main"><i class="ic fas fa-cubes"></i><span class="b-booking-nav__title">Ek Özellikler</span><span class="b-booking-nav__info">Ek Özellikleri Seçiniz</span></div></a>
						 	
							<a class="b-booking-nav__item preventDefault" href="#">
                        <div class="b-booking-nav__header">Aşama 3</div>
                        <div class="b-booking-nav__main"><i class="ic fas fa-cubes"></i><span class="b-booking-nav__title">Sürücü Bilgileri</span><span class="b-booking-nav__info">Sürücü Bilgilerini Giriniz</span></div></a>
						  
						  </div>
                  </div>
                  <div class="col-lg-8">
                    <form class="b-booking-main">
                    
					<div class="b-booking-main__section pb-1">
                        <h2 class="b-booking-main__title">Ek Özellikler</h2>
                      
					
<?php
        if($db->veriSaydir("ekozellikler", array(), array()) > 0) {
        $bilgi= $db->VeriOkuCoklu("ekozellikler", array(), array(), "row", "ASC");
        $bilgial= $db->bilgial;
        foreach($bilgial as $rows){
        ?>

		   <div class="b-booking-price">
                          <div class="custom-control custom-checkbox">
                            <input class="custom-control-input feature_checkbox" data-price="<?=$rows->fiyat;?>" name="features[]" value="<?=$rows->id;?>" id="customCheck<?=$rows->id;?>" type="checkbox"  >
                            <label class="custom-control-label row" for="customCheck<?=$rows->id;?>"><span class="b-booking-price__inner col-sm">
							<span class="b-booking-price__title"><?=$rows->isim;?><span class="b-booking-price__day">(<?=$rows->sure;?>)</span></span>
							<span class="b-booking-price__info"><?=$rows->aciklama;?></span></span>
							<span class="col-sm-auto">
							<span style="        font-size: 28px;" class="b-booking-price__price text-primary"> <?=$rows->fiyat;?> ₺ </span>
							</span></label>
                          </div>
                        </div>
                         <?php }} ?>
						 
						 

						 
						 <div class="b-booking-price">
                          <div class="custom-control ">
                            <input class="custom-control-input" >
                            <label class="row" for="customCheck1"><span class="b-booking-price__inner col-sm">
							<span class="b-booking-price__title">Toplam Tutar:</span>
							 </span>
							<span class="col-sm-auto">
							<span id="total" style="    font-size: 37px;" class="b-booking-price__price text-primary">₺</span>
							/günlük</span></label>
                          </div>
                        </div>
						
						<div class="text-right"> 
                          <button class="btn btn-secondary mt-5">İleri <i class="fas fa-chevron-right"></i></button>
                        </div>
                       
					 </div> 
				    </form>
                  </div>
                </div>
              </div>
            </div>
            <!-- end .b-booking-->
            
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

   $(document).ready(function() {
    $('.feature_checkbox').on('change', function() {
      var total = 0;

      $('.feature_checkbox').each(function(i) {
        if (this.checked) {          
          var price = $(this).data('price');
          total += Number(price);
        }
      })

      $('#total').html(total.toFixed(2) + ' ₺');
    })

    $('.feature_checkbox').change();

    $('form').on('submit', function(e) {
      e.preventDefault();

      var featuresInputs = '';
      $('.feature_checkbox').each(function(i) {
        if (this.checked) {          
          var id = $(this).val();
          featuresInputs += '<input type="hidden" name="features[]" value="' + id + '" />';
        }
      });

      var url = './surucu-bilgileri';
      var form = $('<form action="' + url + '" method="post">' +
        '<input type="hidden" name="location_id" value="<?= $_POST['location_id']; ?>" />' +
        '<input type="hidden" name="departure_date" value="<?= $_POST['departure_date']; ?>" />' +
        '<input type="hidden" name="departure_time" value="<?= $_POST['departure_time']; ?>" />' +
        '<input type="hidden" name="arrival_date" value="<?= $_POST['arrival_date']; ?>" />' +
        '<input type="hidden" name="arrival_time" value="<?= $_POST['arrival_time']; ?>" />' +
        '<input type="hidden" name="car_id" value="<?= $_POST['car_id']; ?>" />' +
        featuresInputs +
        '</form>');
      $('body').append(form);
      form.submit();
    });

    $('.preventDefault').click(function(e){
        e.preventDefault();
      })

    $('#go_step_one').click(function(e) {
      e.preventDefault();

      var url = './rezervasyon';
      var form = $('<form action="' + url + '" method="post">' +
        '<input type="hidden" name="location_id" value="<?= $_POST['location_id']; ?>" />' +
        '<input type="hidden" name="departure_date" value="<?= $_POST['departure_date']; ?>" />' +
        '<input type="hidden" name="departure_time" value="<?= $_POST['departure_time']; ?>" />' +
        '<input type="hidden" name="arrival_date" value="<?= $_POST['arrival_date']; ?>" />' +
        '<input type="hidden" name="arrival_time" value="<?= $_POST['arrival_time']; ?>" />' +
        '<input type="hidden" name="car_id" value="<?= $_POST['car_id']; ?>" />' +
        '</form>');
      $('body').append(form);
      form.submit();
    })
   })
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/54978811" style="position:absolute; left:-9999px;" alt=""></div></noscript>
<!-- /Yandex.Metrika counter -->
      
  </body>
</html>