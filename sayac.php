     <div class="section-progress bg-dark mt-5">
            <div class="container-fluid">
              <div class="section-progress__inner">
                <div class="section-progress__img"><img class="img-scale" src="assets\media\content\b-progress\fig-1.png" alt="photo"></div>
                <div class="b-progress-list">
                  <div class="row">
                    <div class="b-progress-list__item col-md-6"><span class="b-progress-list__percent js-chart" data-percent="<?=$db->ayarlar("value" , "mutlu");?>"><span class="js-percent"></span></span><span class="b-progress-list__name">Mutlu Müşteri</span></div>
                    <div class="b-progress-list__item col-md-6 text-right"><span class="b-progress-list__percent js-chart" data-percent="<?=$db->ayarlar("value" , "arac");?>"><span class="js-percent"></span>+</span><span class="b-progress-list__name">Araç Sayısı</span></div>
                    <div class="b-progress-list__item col-md-6"><span class="b-progress-list__percent js-chart" data-percent="<?=$db->ayarlar("value" , "km");?>"><span class="js-percent"></span>+</span><span class="b-progress-list__name">Yapılan KM</span></div>
                    <div class="b-progress-list__item col-md-6 text-right"><span class="b-progress-list__percent js-chart" data-percent="<?=$db->ayarlar("value" , "tecrube");?>"><span class="js-percent"></span></span><span class="b-progress-list__name">Yıllık Tecrübe</span></div>
                  </div>
                </div>
                <div class="section-progress__img ml-4"><img class="img-scale" src="assets\media\content\b-progress\fig-2.png" alt="photo"></div>
              </div>
            </div>
          </div>