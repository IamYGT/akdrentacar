<?php include("admin/include/site_db.php"); ?> <!DOCTYPE html>
<html lang="tr">
  <head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title><?=$db->VeriOkuTek("araba_category", "isim", "url", $_GET["url"]);?> - Akdoğan Rent A Car</title>
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
            <h1 class="b-title-page"><?=$db->VeriOkuTek("araba_category", "isim", "url", $_GET["url"]);?></h1>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index">Anasayfa</a></li>
                <li class="breadcrumb-item"><a href="araclarimiz">Araçlarımız</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?=$db->VeriOkuTek("araba_category", "isim", "url", $_GET["url"]);?></li>
              </ol>
            </nav>
            <!-- end .breadcrumb-->
            
          </div>
        </div>
      </div>
      <!-- end .b-title-page-->
      
      <div class="l-main-content">
        <div class="ui-decor ui-decor_sm-h ui-decor_mirror bg-primary"></div>
        <div class="container">
          <section class="b-goods-f">
            <div class="row">
              <div class="col-lg-8">
                <div class="ui-subtitle">Akdoğan Rent A Car</div>
                <h2 class="ui-title text-uppercase"><?=$db->VeriOkuTek("araba_category", "isim", "url", $_GET["url"]);?></h2>
                <div class="b-goods-f__slider">
                  <div class="ui-slider-main js-slider-for">
				  				<?php 
				                $cat_id = $db->VeriOkuTek("araba_category", "id", "url", $_GET["url"]);
if($db->veriSaydir("araba_items", array(), array()) > 0) {
$bilgi= $db->VeriOkuCoklu("araba_items", array("cat_id"), array($cat_id), "row", "ASC");
$bilgial= $db->bilgial;
foreach($bilgial as $rows){
?>
 
 				  <img class="img-scale" src="upload/<?=$rows->resim;?>" alt="Gaziantep Rent A Car"/>
				     <?php }} ?>
				  </div>
                  <div class="ui-slider-nav js-slider-nav">
			<?php 
				                $cat_id = $db->VeriOkuTek("araba_category", "id", "url", $_GET["url"]);
if($db->veriSaydir("araba_items", array(), array()) > 0) {
$bilgi= $db->VeriOkuCoklu("araba_items", array("cat_id"), array($cat_id), "row", "ASC");
$bilgial= $db->bilgial;
foreach($bilgial as $rows){
?>
 
 				  <img class="img-scale" src="upload/<?=$rows->resim;?>" alt="Gaziantep Rent A Car"/>
				     <?php }} ?>
				  </div>
                </div>
                 <h2 class="b-goods-f__title">Araç Özellikleri</h2>
                <div class="row">
                  <div class="col-md-6">
                    <dl class="b-goods-f__descr row">
                      <dt class="b-goods-f__descr-title col-md-5">Marka</dt>
                      <dd class="b-goods-f__descr-info col-md-7"><?=$db->VeriOkuTek("araba_category", "marka", "url", $_GET["url"]);?></dd>
                      <dt class="b-goods-f__descr-title col-md-5">Model</dt>
                      <dd class="b-goods-f__descr-info col-md-7"><?=$db->VeriOkuTek("araba_category", "model", "url", $_GET["url"]);?></dd>
                      <dt class="b-goods-f__descr-title col-md-5">Motor Gücü</dt>
                      <dd class="b-goods-f__descr-info col-md-7"><?=$db->VeriOkuTek("araba_category", "motor", "url", $_GET["url"]);?></dd>
                      <dt class="b-goods-f__descr-title col-md-5">Yıl</dt>
                      <dd class="b-goods-f__descr-info col-md-7"><?=$db->VeriOkuTek("araba_category", "aracyil", "url", $_GET["url"]);?></dd>
                      <dt class="b-goods-f__descr-title col-md-5">Kasa Tipi</dt>
                      <dd class="b-goods-f__descr-info col-md-7"><?=$db->VeriOkuTek("araba_category", "kasatipi", "url", $_GET["url"]);?></dd>
                     </dl>
                  </div>
                  <div class="col-md-6">
                    <dl class="b-goods-f__descr row">
                      <dt class="b-goods-f__descr-title col-md-5">Renk</dt>
                      <dd class="b-goods-f__descr-info col-md-7"><?=$db->VeriOkuTek("araba_category", "renk", "url", $_GET["url"]);?></dd>
                      <dt class="b-goods-f__descr-title col-md-5">Km</dt>
                      <dd class="b-goods-f__descr-info col-md-7"><?=$db->VeriOkuTek("araba_category", "km", "url", $_GET["url"]);?></dd>
                      <dt class="b-goods-f__descr-title col-md-5">Vites</dt>
                      <dd class="b-goods-f__descr-info col-md-7"><?=$db->VeriOkuTek("araba_category", "vites", "url", $_GET["url"]);?></dd>
                      <dt class="b-goods-f__descr-title col-md-5">Kaç Kişilik</dt>
                      <dd class="b-goods-f__descr-info col-md-7"><?=$db->VeriOkuTek("araba_category", "kackisi", "url", $_GET["url"]);?></dd>
                      <dt class="b-goods-f__descr-title col-md-5">Yakıt</dt>
                      <dd class="b-goods-f__descr-info col-md-7"><?=$db->VeriOkuTek("araba_category", "yakit", "url", $_GET["url"]);?></dd>
                     </dl>
                  </div>
                </div>
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                  <li class="nav-item"><a class="nav-link active" id="aciklama-tab" data-toggle="tab" href="#aciklama" role="tab" aria-controls="aciklama" aria-selected="true">Açıklama</a></li>
                 </ul>
                <div class="tab-content" id="myTabContent">
                  <div class="tab-pane fade show active" id="aciklama" role="tabpanel" aria-labelledby="aciklama-tab">
                  <?=$db->VeriOkuTek("araba_category", "aciklama", "url", $_GET["url"]);?>
                  </div>
                  </div>
              </div>
              <div class="col-lg-4">
                <aside class="l-sidebar">
				
				 <div class="b-seller">
                    <div class="b-seller__header bg-primary">
                      <div class="b-seller__img"><img class="img-scale" src="assets/media/content/b-seller/1.jpg" alt="Akdoğan Rent A Car"/></div>
                      <div class="b-seller__title">
                        <div class="b-seller__name">Akdoğan</div>
                        <div class="b-seller__category">Rent A Car</div>
                      </div>
                    </div>
                    <div class="b-seller__main"><i class="b-seller__ic flaticon-phone-call text-primary"></i>
                      <div class="b-seller__contact"><span class="d-block">Telefon</span><a class="b-seller__phone" href="tel:<?=$db->ayarlar("value" , "tel");?>"><?=$db->ayarlar("value" , "tel");?></a></div>
                      <ul class="b-seller-soc list-unstyled">
                        <li class="b-seller-soc__item"><a class="b-seller-soc__link" href="<?=$db->ayarlar("value" , "facebook");?>" target="_blank"><i class="ic fab fa-facebook-f"></i></a></li>
                        <li class="b-seller-soc__item"><a class="b-seller-soc__link" href="https://wa.me/<?=$db->ayarlar("value" , "whatsapp");?>" target="_blank"><i class="ic fab fa-whatsapp"></i></a></li>
                        <li class="b-seller-soc__item"><a class="b-seller-soc__link" href="<?=$db->ayarlar("value" , "instagram");?>" target="_blank"><i class="ic fab fa-instagram"></i></a></li>
                       </ul>
                    </div>
                  </div>
                  <!-- end .b-seller-->
                  <div class="b-goods__wrap-bnrs"> </div>
                 
                  <div class="b-goods-f-price">
                    <div class="b-goods-f-price__header bg-secondary">1 Günlük <span class="b-goods-f-price__main"><?=$db->VeriOkuTek("araba_category", "gun", "url", $_GET["url"]);?> ₺</span></div>
                    <div style="background-color: #ffffff; color: #b19a68;" class="b-goods-f-price__header bg-secondary">1 Haftalık <span style="    color: #b19a68;" class="b-goods-f-price__main"><?=$db->VeriOkuTek("araba_category", "hafta", "url", $_GET["url"]);?> ₺</span></div>
                    <div style="    background-color: #222222;" class="b-goods-f-price__header bg-secondary">1 Aylık <span class="b-goods-f-price__main"><?=$db->VeriOkuTek("araba_category", "ay", "url", $_GET["url"]);?> ₺</span></div>
                    <form method="POST" action="./rezervasyon">
                    <input type="hidden" name="car_id" value="<?=$db->VeriOkuTek("araba_category", "id", "url", $_GET["url"]);?>">
                   <button type="submit" style="width: 100%; background-color: #b19a68;    margin-top: 5px;    font-weight: 600;" class="b-goods-f-price__header btn bg-secondary"> <i class="fas fa-check"></i> REZERVASYON YAP</div>
                 </form>
                    
                  </div>
                  
                 </aside>
              </div>
            </div>
          </section>
          <!-- end .b-goods-f-->
          
        </div>
      </div>
        <?php include("alt.php")?> 
		
		</div>

    <script src="assets/libs/jquery-3.3.1.min.js" ></script>
    <script src="assets/libs/jquery-migrate-1.4.1.min.js"></script>
    <!-- Bootstrap-->
    <script src="assets/plugins/popever/popper.min.js" ></script>
    <script src="assets/libs/bootstrap-4.1.3/js/bootstrap.min.js" ></script>
    <!---->
    <!-- Color scheme-->
    <script src="assets/plugins/switcher/js/dmss.js"></script>
    <!-- Select customization & Color scheme-->
    <script src="assets/libs/bootstrap-select.min.js"></script>
    <!-- Pop-up window-->
    <script src="assets/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
    <!-- Headers scripts-->
    <script src="assets/plugins/headers/slidebar.js"></script>
    <script src="assets/plugins/headers/header.js"></script>
    <!-- Mail scripts-->
    <script src="assets/plugins/jqBootstrapValidation.js"></script>
    <!-- Progress numbers-->
    <script src="assets/plugins/rendro-easy-pie-chart/jquery.easypiechart.min.js"></script>
    <script src="assets/plugins/rendro-easy-pie-chart/jquery.waypoints.min.js"></script>
    <!-- Animations-->
    <script src="assets/plugins/scrollreveal/scrollreveal.min.js"></script>
    <!-- Scale images-->
    <script src="assets/plugins/ofi.min.js"></script>
    <script src="assets/plugins/slick/slick.js"></script>
    <!-- User customization-->
    <script src="assets/js/custom.js"></script>
      
      
      <!-- Yandex.Metrika counter -->
<script type="text/javascript" >
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
<noscript><div><img src="https://mc.yandex.ru/watch/54978811" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
      
  </body>
</html>