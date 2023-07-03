<?php

  if (!isset($_POST['location_id']) ||
    !isset($_POST['car_id']) ||
    !isset($_POST['departure_date']) ||
    !isset($_POST['arrival_date'])
  ) {
   echo "<b>Eksik veri gönderildi, ana sayfaya yönlendiriliyorsunuz.</b>";
    echo '<script> setTimeout(function() {location.replace("./")}, 2000); </script>';    
    exit;
  }

  include("admin/include/site_db.php");

  $location = $db->getById("lokasyonlar", $_POST['location_id']);
  $departure = new DateTime($_POST['departure_date']);
  $arrival = new DateTime($_POST['arrival_date']);
  $dayCount = $arrival->diff($departure)->format("%a");
  $car = $db->getById("araba_category", $_POST['car_id']);

  $featuresTotal = 0.00;
  if (isset($_POST['features'])) {
    $features = $db->getByIds('ekozellikler', $_POST['features']);

    foreach ($features as $feature) {
      $featuresTotal += $feature->fiyat;
    }

    $featuresTotal = $featuresTotal * $dayCount;
  }


  $totalPrice = 0;
  if ($dayCount < 7) {
    $totalPrice = number_format(($car->gun * $dayCount) + $featuresTotal, 2, '.', '');
  } elseif ($dayCount >= 7 && $dayCount < 30) {
    $dayExceptWeeks = $dayCount % 7;
    $weekCount = intval($dayCount / 7);

    $totalPrice = number_format(($weekCount * $car->hafta) + ($dayExceptWeeks * $car->gun) + $featuresTotal, 2, '.', '');
  } elseif ($dayCount >= 30) {
    $monthCount = intval($dayCount / 30);
    $dayExceptMonths = $dayCount - ($monthCount * 30);
    $weekCount = intval($dayExceptMonths / 7);
    $dayExceptMonthsAndWeeks = $dayExceptMonths % 7;

    $totalPrice = number_format(
      ($weekCount * $car->hafta) +
      ($monthCount * $car->ay) +
      ($dayExceptMonthsAndWeeks * $car->gun) +
      $featuresTotal,
    2, '.', '');
  }
?><!DOCTYPE html>
<html lang="tr">
  <head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title>Sürücü Bilgileri - Akdoğan Rent A Car</title>
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
            <h1 class="b-title-page">Sürücü Bilgileri</h1>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index">Anasayfa</a></li>
                <li class="breadcrumb-item active" aria-current="page">Sürücü Bilgileri</li>
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
						 			<a class="b-booking-nav__item " id="go_ek_ozellikler" href="#">
                        <div class="b-booking-nav__header">Aşama 2</div>
                        <div class="b-booking-nav__main"><i class="ic fas fa-cubes"></i><span class="b-booking-nav__title">Ek Özellikler</span><span class="b-booking-nav__info">Ek Özellikleri Seçiniz</span></div></a>
						 	
							<a class="b-booking-nav__item active preventDefault" href="#">
                        <div class="b-booking-nav__header">Aşama 3</div>
                        <div class="b-booking-nav__main"><i class="ic fas fa-cubes"></i><span class="b-booking-nav__title">Sürücü Bilgileri</span><span class="b-booking-nav__info">Sürücü Bilgilerini Giriniz</span></div></a>
						  
						  
						  </div>
                  </div>
                  <div class="col-lg-8">
                    <form class="b-booking-main">
                    
				  <div class="b-booking-main__section">
                        <h2 class="b-booking-main__title">Sürücü Bilgileri</h2>
                        <div class="row mb-4">
                          <div class="col-md-6">
                            <div class="b-booking-total">
                              <div class="b-booking-total__main">
                                <div class="b-booking-total__title"><?= $_POST['departure_date'] ?> - <?= $_POST['departure_time'] ?></div>
                                <div class="b-booking-total__info">Alış Tarihi</div>
                              </div>
                              <div class="ic pe-7s-date"></div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="b-booking-total">
                              <div class="b-booking-total__main">
                                <div class="b-booking-total__title"><?= $_POST['arrival_date'] ?> - <?= $_POST['arrival_time'] ?></div>
                                <div class="b-booking-total__info">Dönüş Tarihi</div>
                              </div>
                              <div class="ic pe-7s-clock"></div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="b-booking-total">
                              <div class="b-booking-total__main">
                                <div class="b-booking-total__title">Alış Yeri</div>
                                <div class="b-booking-total__info"><?= $location->title; ?></div>
                              </div>
                              <div class="ic pe-7s-wristwatch"></div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="b-booking-total">
                              <div class="b-booking-total__main">
                                <div class="b-booking-total__title"><?= $featuresTotal ?>₺</div>
                                <div class="b-booking-total__info">Ek Özellikler</div>
                              </div>
                              <div class="ic pe-7s-cart"></div>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="b-booking-total">
                              <div class="b-booking-total__main">
                                <div class="b-booking-total__title"><?= $totalPrice ?>₺</div>
                                <div class="b-booking-total__info">Toplam Tutar</div>
                              </div>
                              <div class="ic pe-7s-cart"></div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label class="form-label">İsim Soyisim *</label>
                              <input class="form-control" required name="name" type="text">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label class="form-label">T.C Kimlik No *</label>
                              <input class="form-control tc" required name="tc" type="text">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label class="form-label">Doğum Tarihi*</label>
                              <input class="form-control date" required name="birthday" type="text">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label class="form-label">Telefon *</label>
                              <input class="form-control phone" required name="phone" required type="text">
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="form-label">Eposta *</label>
                          <input class="form-control" required name="email" required type="email">
                        </div>
                        <div class="form-group">
                          <label class="form-label">Mesaj</label>
                          <textarea class="form-control" required name="message" rows="5"></textarea>
                        </div>
                        <div class="text-center"> 
                          <button type="submit" class="btn btn-secondary ">Onayla</button>
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

    <!-- mask plugin -->
    <script src="assets\js\jquery.mask.js"></script>

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

   $(document).ready(function(){
      $('.date').mask('00/00/0000', {placeholder: "__/__/____"});
      $('.phone').mask('(500) 000 00 00', {placeholder: "(5XX) XXX XX XX"});
      $('.tc').mask('00000000000');

      $('form').on('submit', function(e) {
        e.preventDefault();

        var features = <?= json_encode($features) ?>;

        $.ajax({
          url: "ajax.php",
          type: "post",
          data: {
            reservation: true,
            car_id: '<?= $_POST['car_id']; ?>',
            car_title: '<?= $car->isim; ?>',
            location_id: '<?= $location->id ?>',
            location_title: '<?= $location->title ?>',
            price: '<?= $totalPrice ?>',
            departure_date: '<?= $_POST['departure_date'] ?>',
            departure_time: '<?= $_POST['departure_time'] ?>',
            arrival_date: '<?= $_POST['arrival_date'] ?>',
            arrival_time: '<?= $_POST['arrival_time'] ?>',
            features: features,
            name: $('input[name="name"]').val(),
            tc: $('input[name="tc"]').val(),
            phone: $('input[name="phone"]').val(),
            birthday: $('input[name="birthday"]').val(),
            email: $('input[name="email"]').val(),
            message: $('textarea[name="message"]').val(),
          },
          success: function (response) {
            var res = JSON.parse(response);
            if (res.success == true) {
              alert('Randevu talebiniz başarıyla alındı. En kısa sürede sizinle iletişime geçeceğiz.')
              window.location.href = "./";
            } else {
              alert('Randevu talebiniz alınırken sorun çıktı, lütfen tekrar deneyin.')
            }
          },
          error: function(jqXHR, textStatus, errorThrown) {
              alert('Bağlantı hatası!')
          }
        });
      })

      $('#go_ek_ozellikler').click(function(e) {
        e.preventDefault();

        var url = './ek-ozellikler';
        var form = $('<form action="' + url + '" method="post">' +
          '<input type="hidden" name="location_id" value="<?= $location->id ?>" />' +
          '<input type="hidden" name="departure_date" value="<?= $_POST['departure_date'] ?>" />' +
          '<input type="hidden" name="departure_time" value="<?= $_POST['departure_time'] ?>" />' +
          '<input type="hidden" name="arrival_date" value="<?= $_POST['arrival_date'] ?>" />' +
          '<input type="hidden" name="arrival_time" value="<?= $_POST['arrival_time'] ?>" />' +
          '<input type="hidden" name="car_id" value="<?= $car->id ?>" />' +
          '</form>');
        $('body').append(form);
        form.submit();
      })

      $('.preventDefault').click(function(e){
        e.preventDefault();
      })

      $('#go_step_one').click(function(e) {
        e.preventDefault();

        var url = './rezervasyon';
        var form = $('<form action="' + url + '" method="post">' +
          '<input type="hidden" name="location_id" value="<?= $location->id; ?>" />' +
          '<input type="hidden" name="departure_date" value="<?= $_POST['departure_date']; ?>" />' +
          '<input type="hidden" name="departure_time" value="<?= $_POST['departure_time']; ?>" />' +
          '<input type="hidden" name="arrival_date" value="<?= $_POST['arrival_date']; ?>" />' +
          '<input type="hidden" name="arrival_time" value="<?= $_POST['arrival_time']; ?>" />' +
          '<input type="hidden" name="car_id" value="<?= $car->id; ?>" />' +
          '</form>');
        $('body').append(form);
        form.submit();
      })
    });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/54978811" style="position:absolute; left:-9999px;" alt=""></div></noscript>
<!-- /Yandex.Metrika counter -->
      
  </body>
</html>