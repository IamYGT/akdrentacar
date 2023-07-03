     <footer class="footer">
          <div class="footer__figure"><img class="img-fluid" src="assets\media\content\footer\figure-1.png" alt="foto"></div>
          <div class="footer__decor"></div>
          <div class="container">
            <div class="row">
              <div class="col-lg-3 col-md-6">
                <div class="footer-section"><a class="footer__logo" href="index"><img class="img-fluid" src="assets\media\general\logo-light.png" alt="Akdoğan Rent A Car"></a>
                  <div class="footer-info"><?=$db->ayarlar("value" , "kisaaciklama");?></div>
                </div>
              
              </div>
              <div class="col-lg-3 col-md-6">
                <section class="footer-section pl-4">
                  <h3 class="footer-section__title">Çalışma Saatleri</h3>
                 <?=$db->ayarlar("value" , "cal");?>

                </section>
              </div>
              <div class="col-lg-3 col-md-6">
                <section class="footer-section footer-section_link pl-4">
                  <h3 class="footer-section__title">Hızlı Menü</h3>
                  <ul class="footer-list list-unstyled">
                    <li><a href="index">Anasayfa</a></li>
                    <li><a href="kurumsal">Kurumsal</a></li>
                    <li><a href="araclarimiz">Araçlarımız</a></li>
                    <li><a href="transfer">Transfer</a></li>
                    <li><a href="haberler">Haberler</a></li>
                    <li><a href="kiralama-sartlari">Kiralama Şartları</a></li>
                    <li><a href="sigorta-sozlesmesi">Sigorta Sözleşmesi</a></li>
                    <li><a href="iletisim">İletişim</a></li>
                  </ul>
                </section>
              </div>
              <div class="col-lg-3 col-md-6">
                <section class="footer-section">
                  <h3 class="footer-section__title">İletişim</h3>
                  <div class="footer-contacts">
                    <div class="footer-contacts__item"><i class="ic icon-location-pin"></i><?=$db->ayarlar("value" , "adres");?></div>
                    <div class="footer-contacts__item"><i class="ic icon-envelope"></i><a href="mailto:<?=$db->ayarlar("value" , "mail");?>"><?=$db->ayarlar("value" , "mail");?></a></div>
                    <div class="footer-contacts__item"><i class="ic icon-earphones-alt"></i> Telefon:
                      
                      <a class="footer-contacts__phone" href="tel:+17553028549"><?=$db->ayarlar("value" , "tel");?></a>
                    </div>
                  </div>
                  <ul class="footer-soc list-unstyled">
                    <li class="footer-soc__item"><a class="footer-soc__link" href="https://wa.me/<?=$db->ayarlar("value" , "whatsapp");?>" target="_blank"><i class="ic fab fa-whatsapp"></i></a></li>
                     <li class="footer-soc__item"><a class="footer-soc__link" href="<?=$db->ayarlar("value" , "facebook");?>" target="_blank"><i class="ic fab fa-facebook-f"></i></a></li>
                    <li class="footer-soc__item"><a class="footer-soc__link" href="<?=$db->ayarlar("value" , "instagram");?>" target="_blank"><i class="ic fab fa-instagram"></i></a></li>
                   </ul><a class="btn btn-white" href="iletisim">İletişim</a>
                </section>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container"> 2019 Akdoğan Rent A Car  ©  All rights reserved. <br> <a rel="dofollow" href="https://www.memsidea.com"> Memsidea Company Group </a> </div>
          </div>
        </footer>
        <!-- .footer-->