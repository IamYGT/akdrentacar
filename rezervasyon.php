<?php include("admin/include/site_db.php"); ?> <!DOCTYPE html>

<?php
  if (!isset($_POST['car_id']))
  {
    echo "<b>Eksik veri gönderildi, ana sayfaya yönlendiriliyorsunuz.</b>";
    echo '<script> setTimeout(function() {location.replace("./")}, 2000); </script>';    
    exit;
  }

  $car = $db->getById("araba_category", $_POST['car_id']);


?>
<html lang="tr">
  <head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title>Rezervasyon - Akdoğan Rent A Car</title>
      <meta content="" name="description">
      <meta content="" name="keywords">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta content="telephone=no" name="format-detection">
      <meta name="HandheldFriendly" content="true">
      <link rel="stylesheet" href="assets\css\master.css">
	        <link rel="stylesheet" href="assets\plugins\tarih\css\bootstrap-datetimepicker.min.css">
      <link rel="stylesheet" href="assets\plugins\tarih\css\bootstrap-datetimepicker.css">
     
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
            <h1 class="b-title-page">Rezervasyon</h1>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index">Anasayfa</a></li>
                <li class="breadcrumb-item active" aria-current="page">Rezervasyon</li>
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
				
				  <div class="col-lg-12">
                    
					<div class="b-booking-main__section pb-1">
                        <h2 class="b-booking-main__title">Rezervasyon</h2>
                      
					  <form class="b-main-filter__form"> 
              <div class="b-main-filter-content tab-content" id="findTabContent">
                <div class="tab-pane fade show active" id="content-allCar">
                  <div class="row align-items-end no-gutters">
                    <div class="b-main-filter__main col-lg">
                      <div class="b-main-filter__inner row no-gutters">
                        <div class="b-main-filter__item col-md-4">
                          <div class="b-main-filter__label">Alış ve Dönüş Lokasyonu</div>
                          <div class="b-main-filter__selector">
                            <div class="dropdown bootstrap-select" style="width: 100%;">
                              <select name="location" class="selectpicker" data-width="100%" data-style="ui-select" tabindex="-98">
                                <?php
                                  if($db->veriSaydir("lokasyonlar", array(), array()) > 0) {
                                    $bilgi= $db->VeriOkuCoklu("lokasyonlar", array(), array(), "title", "ASC");
                                    $bilgial= $db->bilgial;
                                    foreach($bilgial as $row){
                                  ?>
                                  <option value="<?= $row->id; ?>"><?= $row->title; ?></option>
                                <?php }} ?>
                             </select>
							 
							 
						 <div class="dropdown-menu " role="combobox"><div class="inner show" role="listbox" aria-expanded="false" tabindex="-1"><ul class="dropdown-menu inner show"></ul></div></div></div>
                          </div>
                        </div>
                        <div class="b-main-filter__item col-md-4">
                          <div class="b-main-filter__label">Alış Tarihi ve Saati</div>
                          <div class="b-main-filter__selector">
                            
        <fieldset>
                  <div class="input-group date form_datetime " id="departure_date" data-date="" data-date-format="dd MM yyyy - hh:ii" data-link-field="dtp_input1">
                    <input name="departure_date" style="    border: 1px solid #f4f4f4;     padding: 0.375rem 12px;        font: 600 15px Montserrat;    color: #222;    border-radius: 2px;background-color: #fff;
" class="form-control" size="16" type="text" value="" placeholder="Tarih ve saat seçiniz." readonly="">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
                 </div>
 		 </fieldset>
    
                          </div>
                        </div>
                        <div class="b-main-filter__item col-md-4">
                          <div class="b-main-filter__label">Dönüş Tarihi ve Saati</div>
                          <div class="b-main-filter__selector">
        <fieldset>
                  <div id="arrival_date" class="input-group date form_datetime " data-date="" data-date-format="dd MM yyyy - hh:ii" data-link-field="dtp_input1">
                    <input name="arrival_date" style="    border: 1px solid #f4f4f4;     padding: 0.375rem 12px;        font: 600 15px Montserrat;    color: #222;    border-radius: 2px;background-color: #fff;
" class="form-control" size="16" type="text" value="" placeholder="Tarih ve saat seçiniz." readonly="">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
                 </div>
				<input type="hidden" id="dtp_input1" value=""> 
 		 </fieldset>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                
               </div>
			  
					
 
                       
					 </div> 
                  </div>
               
			   
                  <div class="col-lg-4">
                    <div class="b-booking-nav">
					
				 
						<a class="b-booking-nav__item active preventDefault" href="#">
                        <div class="b-booking-nav__header">Aşama 1</div>
                        <div class="b-booking-nav__main"><i class="ic fas fa-cubes"></i><span class="b-booking-nav__title">Araç</span><span class="b-booking-nav__info">Tarih ve Lokasyon Seçiniz</span></div></a>
						 			<a class="b-booking-nav__item preventDefault" href="#">
                        <div class="b-booking-nav__header">Aşama 2</div>
                        <div class="b-booking-nav__main"><i class="ic fas fa-cubes"></i><span class="b-booking-nav__title">Ek Özellikler</span><span class="b-booking-nav__info">Ek Özellikleri Seçiniz</span></div></a>
						 	
							<a class="b-booking-nav__item preventDefault" href="#">
                        <div class="b-booking-nav__header">Aşama 3</div>
                        <div class="b-booking-nav__main"><i class="ic fas fa-cubes"></i><span class="b-booking-nav__title">Sürücü Bilgileri</span><span class="b-booking-nav__info">Sürücü Bilgilerini Giriniz</span></div></a>
						  
						  
						  </div>
                  </div>     
				  
				  <div class="col-lg-8">
                   <div class="b-goods-group row">
               
			   <div class="col-12">
                  <div class="b-goods b-goods_list"><a class="b-goods__img" href="#"><img class="img-scale" src="upload/<?= $car->resim ?>" alt="photo"> </a>
                    <div class="b-goods__main">
                      <div class="row no-gutters">
                        <div class="col"><a class="b-goods__title" href="#"><?= $car->isim ?></a>
                         </div>
                         
                      </div>
                      <div style="    margin-top: -13px;" class="b-goods-descrip row no-gutters">
                        <div class="b-goods-descrip__item col">
                          <div class="b-goods-descrip__inner">
                            <div class="b-goods-descrip__wrap"><i class="ic flaticon-speedometer"></i> <span class="b-goods-descrip__info"> 316,500</span>
                              <div class="b-goods-descrip__full-info"><span class="b-goods-descrip__title"><?= $car->km ?></span><span class="b-goods-descrip__text">316,500</span></div>
                            </div>
                          </div>
                        </div>
                        <div class="b-goods-descrip__item col">
                          <div class="b-goods-descrip__inner">
                            <div class="b-goods-descrip__wrap"><i class="ic flaticon-fuel-station-pump"></i> <span class="b-goods-descrip__info"> Benzin</span>
                              <div class="b-goods-descrip__full-info"><span class="b-goods-descrip__title">YAKIT</span><span class="b-goods-descrip__text"><?= $car->yakit ?></span></div>
                            </div>
                          </div>
                        </div>
                        <div class="b-goods-descrip__item col">
                          <div class="b-goods-descrip__inner">
                            <div class="b-goods-descrip__wrap"><i class="ic flaticon-gearshift"></i> <span class="b-goods-descrip__info"> Otomatik</span>
                              <div class="b-goods-descrip__full-info"><span class="b-goods-descrip__title">VİTES</span><span class="b-goods-descrip__text"><?= $car->vites ?></span></div>
                            </div>
                          </div>
                        </div>
                        <div class="b-goods-descrip__item b-goods-descrip__item_list col">
                          <div class="b-goods-descrip__inner">
                            <div class="b-goods-descrip__wrap"><i class="ic flaticon-calendar"></i>
                              <div class="b-goods-descrip__full-info"><span class="b-goods-descrip__title">YIL</span><span class="b-goods-descrip__text"><?= $car->aracyil; ?></span></div>
                            </div>
                          </div>
                        </div>
                      </div>
                       
                    </div>
                  </div>
                
					
						<div class="text-right"> 
                          <button type="submit" class="btn btn-secondary mt-5">İleri <i class="fas fa-chevron-right"></i></button>
                        </div>
                        </form>
                       
				</div>
           

		   </div>
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
      
    <!---->    <script src="assets\plugins\tarih\js\bootstrap-datetimepicker.js"></script>
    <script src="assets\plugins\tarih\js\bootstrap-datetimepicker.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
    $('.form_datetime').datetimepicker({
        language:  'tr',
        weekStart: 1,
        todayBtn:  1,
      	autoclose: 1,
      	todayHighlight: 1,
      	startView: 2,
      	forceParse: 0,
        showMeridian: 1,
        startDate: moment().format('YYYY-MM-DD')
    });

    var initials = {
      carId: '<?= $_POST['car_id']; ?>',
      locationId: '<?= $_POST['location_id']; ?>',
      departureDate: '<?= $_POST['departure_date']; ?>',
      departureTime: '<?= $_POST['departure_time']; ?>',
      arrivalDate: '<?= $_POST['arrival_date']; ?>',
      arrivalTime: '<?= $_POST['arrival_time']; ?>',
    };

    if (initials.locationId) {
      $('select[name="location"]').val(initials.locationId).change();
    }

    if (initials.departureDate) {
      $('#departure_date').datetimepicker('update', new Date(moment(initials.departureDate + ' ' + initials.departureTime, "DD-MM-YYYY HH:mm")));
    }

    if (initials.arrivalDate) {
      $('#arrival_date').datetimepicker('update', new Date(moment(initials.arrivalDate + ' ' + initials.arrivalTime, "DD-MM-YYYY HH:mm")));
    }

    $('#departure_date').on('changeDate', function() {
      var departureDate = $('#departure_date').data("datetimepicker").getUTCDate();
      var newStartDateForArrival = moment.utc(departureDate).add(1, 'days').format("YYYY-MM-DD");

      $('#arrival_date').data("datetimepicker").setStartDate(newStartDateForArrival);
    })

    $('form').on('submit', function(e) {
      e.preventDefault();

      if (!$('input[name="departure_date"]').val() || !$('input[name="arrival_date"]').val()) {
        alert('Lütfen yukarıdan tarih seçimi yapınız.')
        return;
      }

      var locationId = $('select[name="location"]').val();

      var departureDate = $('#departure_date').data("datetimepicker").getUTCDate();
      var preparedDepartureDate = moment.utc(departureDate).format("DD-MM-YYYY");
      var preparedDepartureTime = moment.utc(departureDate).format("HH:mm");

      var arrivalDate = $('#arrival_date').data("datetimepicker").getUTCDate();
      var preparedArrivalDate = moment.utc(arrivalDate).format("DD-MM-YYYY");
      var preparedArrivalTime = moment.utc(arrivalDate).format("HH:mm");

      var url = './ek-ozellikler';
      var form = $('<form action="' + url + '" method="post">' +
        '<input type="hidden" name="location_id" value="' + locationId + '" />' +
        '<input type="hidden" name="departure_date" value="' + preparedDepartureDate + '" />' +
        '<input type="hidden" name="departure_time" value="' + preparedDepartureTime + '" />' +
        '<input type="hidden" name="arrival_date" value="' + preparedArrivalDate + '" />' +
        '<input type="hidden" name="arrival_time" value="' + preparedArrivalTime + '" />' +
        '<input type="hidden" name="car_id" value="' + <?= $car->id; ?> + '" />' +
        '</form>');
      $('body').append(form);
      form.submit();
    });

    $('.preventDefault').click(function(e){
        e.preventDefault();
      })

  })

 
	 
</script>

      
  </body>
</html>