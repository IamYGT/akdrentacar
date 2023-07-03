<?php include("admin/include/site_db.php"); ?> <!DOCTYPE html>
<html lang="tr">
  <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title>Anasayfa - Akdoğan Rent A Car</title>
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

      <div class="b-main-slider slider-pro" id="main-slider" data-slider-width="100%" data-slider-height="920px" data-slider-arrows="false" data-slider-buttons="false">
      
<?php
        if($db->veriSaydir("slayt", array(), array()) > 0) {
        $bilgi= $db->VeriOkuCoklu("slayt", array(), array(), "row", "ASC");
        $bilgial= $db->bilgial;
        foreach($bilgial as $rows){
        ?>
 
  <div class="sp-slides">
           <div class="b-main-slider__slide sp-slide text-center"><img class="sp-image" src="upload/<?=$rows->resim;?>" alt="<?=$rows->baslik1;?>">
            <div class="container">
              <div class="sp-layer" data-width="100%" data-show-transition="left" data-hide-transition="left" data-show-duration="800" data-show-delay="400" data-hide-delay="400">
                <div class="b-main-slider__slogan b-main-slider__slogan_2"><?=$rows->baslik1;?></div>
                <div class="b-main-slider__title b-main-slider__title_2"><?=$rows->baslik2;?></div>
                <div class="b-main-slider__label text-secondary"><a href="<?=$rows->buton_adres;?>"> <?=$rows->buton_baslik;?> </a></div>
              </div>
              <div class="b-main-slider__wrap-figure sp-layer d-none d-sm-block" data-width="100%" data-show-transition="down" data-hide-transition="top" data-show-duration="1500" data-show-delay="800" data-hide-delay="400">
<img class="b-main-slider__figure-2 mx-auto img-fluid" style="    width: 640px;" src="upload/<?=$rows->araba_resim;?>" alt="foto"></div>
				<div class="b-main-slider__wrap-figure sp-layer" data-width="100%" data-show-transition="down" data-hide-transition="top" data-show-duration="1500" data-show-delay="800" data-hide-delay="400"> 
			</div>
		   </div>
          </div>
        </div>
         <?php }} ?>


      </div>
      <!-- end .b-main-slider-->
      <section style="    padding-top: 0;
    padding-bottom: 103px;
    margin-top: -108px;
    padding-bottom: 0;
" class="section-default">
        <div class="container">
		  <form id="searchForm" class="b-main-filter__form"> 
              <div class="b-main-filter-content tab-content" id="findTabContent">
                <div class="tab-pane fade show active" id="content-allCar">
                  <div class="row align-items-end no-gutters">
                    <div class="b-main-filter__main col-lg">
                      <div class="b-main-filter__inner row no-gutters">
                        <div   class="b-main-filter__item col-md-4">
                          <div class="b-main-filter__label">Alış ve Dönüş Lokasyonu</div>
                          <div class="b-main-filter__selector">
                            <select class="selectpicker" name="location" data-width="100%" data-style="ui-select">
                              <?php
                                if($db->veriSaydir("lokasyonlar", array(), array()) > 0) {
                                  $bilgi= $db->VeriOkuCoklu("lokasyonlar", array(), array(), "title", "ASC");
                                  $bilgial= $db->bilgial;
                                  foreach($bilgial as $row){
                                ?>
                                <option value="<?= $row->id; ?>"><?= $row->title; ?></option>
                              <?php }} ?>
                             </select>
                          </div>
                        </div>
                        <div class="b-main-filter__item col-md-4">
                          <div class="b-main-filter__label">Alış Tarihi ve Saati</div>
                          <div class="b-main-filter__selector">
        <fieldset>
                  <div class="input-group date form_datetime " id="departure_date" data-date=" " data-date-format="dd MM yyyy - hh:ii" data-link-field="dtp_input1">
                    <input name="departure_date" style="    border: 1px solid #f4f4f4;     padding: 0.375rem 12px;        font: 600 15px ;    color: #222;    border-radius: 2px;background-color: #fff;
" class="form-control" size="16" type="text" value="" placeholder="Tarih ve saat seçiniz." readonly>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
                 </div>
				<input type="hidden" id="dtp_input1" value="" /> 
 		 </fieldset>
                          </div>
                        </div>
                        <div class="b-main-filter__item col-md-4">
                          <div class="b-main-filter__label">Dönüş Tarihi ve Saati</div>
                          <div class="b-main-filter__selector">
        <fieldset>
                  <div class="input-group date form_datetime" id="arrival_date" data-date=" " data-date-format="dd MM yyyy - hh:ii" data-link-field="dtp_input1">
                    <input name="arrival_date" style="    border: 1px solid #f4f4f4;     padding: 0.375rem 12px;        font: 600 15px ;    color: #222;    border-radius: 2px;background-color: #fff;
" class="form-control" size="16" type="text" value="" placeholder="Tarih ve saat seçiniz." readonly>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
                 </div>
				<input type="hidden" id="dtp_input1" value="" /> 
 		 </fieldset>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-auto">
                      <button class="b-main-filter__btn btn btn-secondary">ARA</button>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="content-newCars">
                  <div class="row align-items-end no-gutters">
                    <div class="b-main-filter__main col-lg">
                      <div class="b-main-filter__inner row no-gutters">
                        <div class="well">
  <div id="datetimepicker1" class="input-append date">
    <input data-format="dd/MM/yyyy hh:mm:ss" type="text"></input>
    <span class="add-on">
      <i data-time-icon="icon-time" data-date-icon="icon-calendar">
      </i>
    </span>
  </div>
</div>

                      </div>
                    </div>
                    <div class="col-lg-auto">
                      <button class="b-main-filter__btn btn btn-secondary">ARA</button>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="content-usedCars">
                  <div class="row align-items-end no-gutters">
                    <div class="b-main-filter__main col-lg">
                      <div class="b-main-filter__inner row no-gutters">
                        <div class="b-main-filter__item col-md-4">
                          <div class="b-main-filter__label">Select Make</div>
                          <div class="b-main-filter__selector">
                            <select class="selectpicker" data-width="100%" data-style="ui-select">
                              <option>Audi</option>
                              <option>BMV</option>
                              <option>Opel</option>
                            </select>
                          </div>
                        </div>
                        <div class="b-main-filter__item col-md-4">
                          <div class="b-main-filter__label">Select a Model</div>
                          <div class="b-main-filter__selector">
                            <select class="selectpicker" data-width="100%" data-style="ui-select">
                              <option>Model 1</option>
                              <option>Model 2</option>
                              <option>Model 3</option>
                            </select>
                          </div>
                        </div>
                        <div class="b-main-filter__item col-md-4">
                          <div class="b-main-filter__label">Price Range</div>
                          <div class="b-main-filter__selector">
                            <select class="selectpicker" data-width="100%" data-style="ui-select">
                              <option>Max $5000</option>
                              <option>Max $15000</option>
                              <option>Max $25000</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-auto">
                      <button class="b-main-filter__btn btn btn-secondary">Search</button>
                    </div>
                  </div>
                </div>
              </div>
            </form>
   
    
         </div>
      </section>

  <div  style="    padding-top: 75px;" class="b-services">
         <div class="container">
          <div class="row flex-lg-row-reverse">
            <div class="col-lg-6">
              <div class="b-services-nav nav" id="servicesTab" role="tablist"><a class="b-services-nav__link col-md-6 mt-4 nav-link active" id="services1-tab" data-toggle="tab" href="#services1" role="tab" aria-controls="services1" aria-selected="true">
                  <div class="b-services-nav__inner"><i class="ic flaticon-insurance"></i>
                    <div class="b-services-nav__title">Süper Sigorta</div>
                  </div></a><a class="b-services-nav__link col-md-6 nav-link" id="services2-tab" data-toggle="tab" href="#services2" role="tab" aria-controls="services2" aria-selected="false">
                  <div class="b-services-nav__inner"><i class="ic flaticon-snowflake"></i>
                    <div class="b-services-nav__title">Kar Zinciri</div>
                  </div></a><a class="b-services-nav__link col-md-6 mt-4 nav-link" id="services3-tab" data-toggle="tab" href="#services3" role="tab" aria-controls="services3" aria-selected="false">
                  <div class="b-services-nav__inner"><i style="    margin-left: 20px;" class="ic flaticon-chair"></i>
                    <div class="b-services-nav__title">Bebek Koltuğu</div>
                  </div></a><a class="b-services-nav__link col-md-6 nav-link" id="services4-tab" data-toggle="tab" href="#services4" role="tab" aria-controls="services4" aria-selected="false">
                  <div class="b-services-nav__inner"><i class="ic flaticon-driver"></i>
                    <div class="b-services-nav__title">Ek Sürücü</div>
                  </div></a></div>
            </div>
            <div class="col-lg-6">
              <div class="b-services-content tab-content" id="servicesTabContent">
                <section class="b-services-content__section tab-pane fade show active" id="services1" role="tabpanel" aria-labelledby="services1-tab">
                  <div class="text-center d-inline-block">
                    <div class="ui-title-logo">AKDOĞAN</div>
                    <h2 class="ui-title mb-3">Süper Sigorta</h2>
                  </div>
                  <div class="b-services-content__main">
                      <p>
Rent A car araca hususi olarak kasko yapılması ve aracın kazaya karışıp hasarlanması durumunda yapılan incelemeler ile aracın kiralama olarak kullanıldığı tespit edilirse sigortacının hasar ödeme yükümlülüğü ortadan kalkar. 
Bu nedenle kasko yapılması sırasında doğru beyan çok önemlidir.<br>
Çarpma – çarpışma - Yanma - Deprem –sel - İhtiyari mali mesuliyet - Terör - Hırsızlık - Pert olma - Yol yardım hizmetleri - Hukuksal koruma Ferdi kaza gibi teminatları sunar.<br>
Bu teminatlarda olası avantajları ise kaza durumunda tüketicilerin maddi manevi kayıplarını önler.<br>

Yasal yükümlülükleri ortadan kaldırır yine hasar durumunda devreye sigorta şirketi girerek hem kiralama yapan şirketi hem de kiracıyı teminat altına alır.</p>
                    <div class="b-phone"><i class="ic icon-call-end"></i> Rezervasyon için:<a class="b-phone__number" href="tel:+<?=$db->ayarlar("value" , "tel");?>"><?=$db->ayarlar("value" , "tel");?></a></div>
                    <!-- end .b-phone-->
                    
                  </div>
                </section>
                <section class="b-services-content__section tab-pane fade" id="services2" role="tabpanel" aria-labelledby="services2-tab">
                  <div class="text-center d-inline-block">
                    <div class="ui-title-logo">AKDOĞAN</div>
                    <h2 class="ui-title mb-3">Kar Zinciri</h2>
                  </div>
                  <div class="b-services-content__main">
                    <p>Şayet kışın aracın yürümesi ile ilgili her türlü teknik çözüm tükendiyse, bu noktada tek çözüm kar zinciridir. Kar zinciri karlı ve buzlu yollarda araçla ilerlemenizi sağlar. Belli dağlık bölgelerde kar zinciri takmak şart olup bu bilgi tabelalarla aktarılmaktadır.<br> Güvenlik ve rahatlık artışı, kış lastiği kullanmanın iki temel avantajıdır. Bir yandan, bunlar zincir kullanımına karşı tek etkili ve yasal alternatiftir. Diğer taraftan, yağmur ve buzlanma gibi bazı meteorolojik olayların beraberinde getirdiği riskleri ve tehlikeyi azaltırlar. 

<br>Güvenlik ve rahatlık artışı, kış lastiği kullanmanın iki temel avantajıdır. Bir yandan, bunlar zincir kullanımına karşı tek etkili ve yasal alternatiftir. Diğer taraftan, yağmur ve buzlanma gibi bazı meteorolojik olayların beraberinde getirdiği riskleri ve tehlikeyi azaltırlar. 

</p>
                     <div class="b-phone"><i class="ic icon-call-end"></i> Rezervasyon için:<a class="b-phone__number" href="tel:+<?=$db->ayarlar("value" , "tel");?>"><?=$db->ayarlar("value" , "tel");?></a></div>
                    <!-- end .b-phone-->
                    
                  </div>
                </section>
                <section class="b-services-content__section tab-pane fade" id="services3" role="tabpanel" aria-labelledby="services3-tab">
                  <div class="text-center d-inline-block">
                    <div class="ui-title-logo">AKDOĞAN</div>
                    <h2 class="ui-title mb-3">Bebek Koltuğu</h2>
                  </div>
                  <div class="b-services-content__main">
                    <p>Araçlarda olması gereken araç koltuğunu kullanımını fazla önemsemeyen bir topluma sahibimiz. Ama araçlarda bulunan araç koltuğu çocuklarımızın sağlığı için çok önemlidir, çünkü seyahat sırasında araç koltuğuna oturan çocukların zarar görme oranı %90’ına kadar düşmektedir. Bebek koltuğu kullanımının önemi anlamak için araçlarda kullanımına dikkat etmeliyiz ki araçlarda seyahat ya da kısa mesafe gezilerinde çocuklarımızı ön koltuk yerine araçlarımızda arka koltuklarda bulunan çocuk koltuğuna oturarak olacak ufak kazalar ya da büyük kazalarda çocuklarınızın kaza sırasında camdan fırlama ya da sarsılma, sıkışma gibi kazalardan çocuğunuz etkilenmemektedir. <br>Araç koltuğu çocuklarımızın sağlıklı seyahat etmeleri için biçilmiş kaftan olmaktadır. Araç koltuğu arama sabit olduğundan bebeğiniz ya da çocuğunuz koltukta hiçbir sorun yaşamadan seyahat edebilir.

</p>
                     <div class="b-phone"><i class="ic icon-call-end"></i> Rezervasyon için:<a class="b-phone__number" href="tel:+<?=$db->ayarlar("value" , "tel");?>"><?=$db->ayarlar("value" , "tel");?></a></div>
                    <!-- end .b-phone-->
                    
                  </div>
                </section>
                <section class="b-services-content__section tab-pane fade" id="services4" role="tabpanel" aria-labelledby="services4-tab">
                  <div class="text-center d-inline-block">
                    <div class="ui-title-logo">AKDOĞAN</div>
                    <h2 class="ui-title mb-3">Ek Sürücü</h2>
                  </div>
                  <div class="b-services-content__main">
                     <p>Kiralanan herhangi bir araç birden fazla kişi tarafından kullanılabilir. İkinci ya da ek sürücünün kiralama öncesinde mutlaka bildirilmiş olması ve kiralama kontratına işlenmesi gerekir.Bu sayede ek sürücü de kasko sigortası kapsamına alınmış olur. Ek sürücünün de dogal olarak ana sürücü için belirtilen yaş ve ehliyet kriterlerine uyması gerekir.</p>
                     <div class="b-phone"><i class="ic icon-call-end"></i> Rezervasyon için:<a class="b-phone__number" href="tel:+<?=$db->ayarlar("value" , "tel");?>"><?=$db->ayarlar("value" , "tel");?></a></div>
                    <!-- end .b-phone-->
                    
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- end .b-services-->
      
      <section class="section-goods">
        <div class="section-default section-goods__inner bg-dark">
          <div class="ui-decor ui-decor_mirror ui-decor_center"></div>
          <div class="container">
            <div class="text-center">
              <div class="ui-title-logo ui-title-logo_dark">AKDOĞAN</div>
              <h2 class="ui-title ui-title_light text-uppercase">Araçlarımız</h2>
              
            </div>
          </div>
        </div>
        <div class="container">
          <div class="section-goods__list">
            <div class="row">
             <?php
        if($db->veriSaydir("araba_category", array(), array()) > 0) {
        $bilgi= $db->VeriOkuCoklu("araba_category", array(), array(), "row", "ASC",8);
        $bilgial= $db->bilgial;
        foreach($bilgial as $rows){
        ?>
			<div class="col-xl-3 col-md-6">
                <div class="b-goods"><a  style="    height: 168px;" class="b-goods__img" href="arac-<?=$rows->url;?>.html"><img class="img-scale" src="upload/<?=$rows->resim;?>" alt="<?=$rows->isim;?>"></a>
                  <div class="b-goods__main">
                    <div class="row no-gutters">
                      <div class="col"><a style="text-align:center;" class="b-goods__title" href="arac-<?=$rows->url;?>.html"><?=$rows->isim;?></a>
                       </div>
                      
                    </div>
                    <div class="b-goods-descrip row no-gutters">
                      <div class="b-goods-descrip__item col">
                        <div class="b-goods-descrip__inner">
                          <div class="b-goods-descrip__wrap"><i class="ic flaticon-speedometer"></i><span class="b-goods-descrip__info"> <?=$rows->km;?></span>
                           </div>
                        </div>
                      </div>
                      <div class="b-goods-descrip__item col">
                        <div class="b-goods-descrip__inner">
                          <div class="b-goods-descrip__wrap"><i class="ic flaticon-fuel-station-pump"></i><span class="b-goods-descrip__info"> <?=$rows->yakit;?></span>
                           </div>
                        </div>
                      </div>
                      <div class="b-goods-descrip__item col">
                        <div class="b-goods-descrip__inner">
                          <div class="b-goods-descrip__wrap"><i class="ic flaticon-gearshift"></i><span class="b-goods-descrip__info"> <?=$rows->vites;?></span>
                           </div>
                        </div>
                      </div>
                 
                    </div>
                     
                  </div>
                </div>
              </div>
             <?php }} ?>
			 </div>
            <div class="text-center mt-3"><a class="btn btn-secondary" href="araclarimiz">Diğer Araçlarımız</a></div>
          </div>
        </div>
      </section>
            <?php include("sayac.php") ?>

    <?php include("musteriler.php") ?>
 
     
      <div class="section-bnr-2">
        <div class="row no-gutters justify-content-center">
          <div class="col-lg-6">
            <section class="b-bnr-2 b-bnr-2_first">
              <div class="b-bnr-2__inner bg-primary"><a class="btn-arr btn-arr_left" href="kiralama-sartlari"></a>
                <h2 class="b-bnr-2__title">Kiralama<br>  Şartları</h2>
                <div class="b-bnr-2__info">Araç Kiralamadan önce lütfen şartlarımızı okuyunuz.</div>
              </div><img class="b-bnr-2__figure img-fluid" src="assets\media\content\b-bnr\figure-1.png" alt="foto">
            </section>
          </div>
          <div class="col-lg-6">
            <section class="b-bnr-2 b-bnr-2_last">
              <div class="b-bnr-2__inner bg-dark-2"><a class="btn-arr btn-arr_right" href="sigorta-sozlesmesi"></a>
                <h2 class="b-bnr-2__title">Sigorta<br>  Sözleşmesi</h2>
                <div class="b-bnr-2__info">Araç Kiralamadan önce lütfen sözleşmemizi okuyunuz.</div>
              </div><img class="b-bnr-2__figure img-fluid" src="assets\media\content\b-bnr\figure-2.png" alt="foto">
            </section>
          </div>
        </div>
      </div>
      
 <section class="section-article section-default">
        <div class="container">
          <div class="text-center d-inline-block">
            <div class="ui-title-logo">FİRMAMIZDAN</div>
            <h2 class="ui-title">HABERLER</h2>
          </div>
          <div class="pt-2 row">

             
<?php
        if($db->veriSaydir("blog", array(), array()) > 0) {
        $bilgi= $db->VeriOkuCoklu("blog", array(), array(), "row", "ASC",3);
        $bilgial= $db->bilgial;
        foreach($bilgial as $rows){
        ?>
 
<div class="col-xl-4">
              <section class="b-post b-post-3">
                <div class="entry-meta">
                  <time class="entry-meta__item" datetime="2019-01-31"><?=$rows->tarih;?></time>
        
                </div>
                <div class="entry-media"><a class="js-zoom-images" href="upload/<?=$rows->resim;?>"><img class="img-scale" src="upload/<?=$rows->resim;?>" alt="<?=$rows->isim;?>"></a></div>
                <div class="entry-main">
                  <div class="entry-header">
                    <h2 class="entry-title"><a href="haber-<?=$rows->url;?>.html"><?=$rows->isim;?></a></h2>
                  </div>
                  <div class="entry-content"><?=substr($rows->aciklama,0,125);?></div>
                </div>
              </section>
              <!-- end .b-post-->
              
            </div>
              
  <?php }} ?>

 </div>
          <div class="text-center mt-3"><a class="btn btn-secondary" href="haberler">Diğer Haberlerimiz</a></div>
        </div>
      </section>
      <section class="section-bnr section-default bg-primary">
        <div class="container">
          <div class="row">
            <div class="col-xl-10 offset-xl-1">
              <div class="b-bnr text-center">
                <h2 class="b-bnr__title">Sorularınız mı var? İletişime geçin!</h2>
                <p>Telefon numaramızdan bize 7/24 ulaşabilir veya eposta adresimiz ile iletişime geçebilirsiniz.</p>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-10 offset-lg-1">
              <div class="b-bnr-contacts row align-items-center">
                <div class="col-md-6">
                  <div class="b-bnr-contacts__item"><i  style="color:#fff;"  class="ic fas fa-phone-square text-secondary"></i>
                    Telefon
                    <br>
                    <a class="b-bnr-contacts__link" href="tel:<?=$db->ayarlar("value" , "tel");?>"><?=$db->ayarlar("value" , "tel");?></a>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="b-bnr-contacts__item"><i style="color:#fff;" class="ic far fa-envelope text-secondary"></i>
                    E-posta
                    <br>
                    <a class="b-bnr-contacts__link" href="mailto:<?=$db->ayarlar("value" , "mail");?>"><?=$db->ayarlar("value" , "mail");?></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
	     

      <!-- end .b-bnr-->
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
    <!---->    <script src="assets\plugins\tarih\js\bootstrap-datetimepicker.js"></script>
    <script src="assets\plugins\tarih\js\bootstrap-datetimepicker.min.js"></script>
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
    <!-- Main slider-->
    <script src="assets\plugins\slider-pro\jquery.sliderPro.min.js"></script>
    <!-- Sliders-->
    <script src="assets\plugins\slick\slick.js"></script>
    <!-- Slider number-->
    <script src="assets\plugins\noUiSlider\wNumb.js"></script>
    <script src="assets\plugins\noUiSlider\nouislider.min.js"></script>

    <!-- moment -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>

    <!-- User customization-->
    <script src="assets\js\custom.js"></script>

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

        $('#departure_date').on('changeDate', function() {
          var departureDate = $('#departure_date').data("datetimepicker").getUTCDate();
          var newStartDateForArrival = moment.utc(departureDate).add(1, 'days').format("YYYY-MM-DD");

          $('#arrival_date').data("datetimepicker").setStartDate(newStartDateForArrival);
        })

        $('#searchForm').on('submit', function(e) {
          e.preventDefault();

          if (!$('input[name="departure_date"]').val() || !$('input[name="arrival_date"]').val()) {
            alert('Lütfen tarih seçimi yapınız.')
            return;
          }

          var locationId = $('select[name="location"]').val();

          var departureDate = $('#departure_date').data("datetimepicker").getUTCDate();
          var preparedDepartureDate = moment.utc(departureDate).format("DD-MM-YYYY");
          var preparedDepartureTime = moment.utc(departureDate).format("HH:mm");

          var arrivalDate = $('#arrival_date').data("datetimepicker").getUTCDate();
          var preparedArrivalDate = moment.utc(arrivalDate).format("DD-MM-YYYY");
          var preparedArrivalTime = moment.utc(arrivalDate).format("HH:mm");

          var url = './araclarimiz';
          var form = $('<form action="' + url + '" method="post">' +
            '<input type="hidden" name="location_id" value="' + locationId + '" />' +
            '<input type="hidden" name="departure_date" value="' + preparedDepartureDate + '" />' +
            '<input type="hidden" name="departure_time" value="' + preparedDepartureTime + '" />' +
            '<input type="hidden" name="arrival_date" value="' + preparedArrivalDate + '" />' +
            '<input type="hidden" name="arrival_time" value="' + preparedArrivalTime + '" />' +
            '</form>');
          $('body').append(form);
          form.submit();
        });
      });
       
</script>

     
<!-- /Yandex.Metrika counter -->
      
      
  </body>
</html>