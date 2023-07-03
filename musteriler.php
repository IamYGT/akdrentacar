
<section class="section-reviews area-bg area-bg_dark area-bg_op_90">
            <div class="area-bg__inner section-default">
              <div class="container text-center">
                <h2 class="ui-title-logo">Müşteri Yorumları...</h2>
                <div class="row">
                  <div class="col-md-8 offset-md-2">
                    <div class="b-reviews-slider js-slider" data-slick="{&quot;slidesToShow&quot;: 1, &quot;slidesToScroll&quot;: 1, &quot;autoplay&quot;: false, &quot;dots&quot;: false, &quot;arrows&quot;: false}">
                     
<?php
        if($db->veriSaydir("nedenildi", array(), array()) > 0) {
        $bilgi= $db->VeriOkuCoklu("nedenildi", array(), array(), "row", "ASC");
        $bilgial= $db->bilgial;
        foreach($bilgial as $rows){
        ?>
 
			<blockquote class="b-reviews">
                        <div class="b-reviews__text"><?=$rows->aciklama;?></div>
                        <div class="b-reviews__footer">
                          <div class="b-reviews__name"><?=$rows->ad;?></div>
                          <div class="b-reviews__category"><?=$rows->unvan;?></div>
                        </div>
                      </blockquote>
                      <!-- end .b-reviews-->
              <?php }} ?>


                    </div>
                  </div>
                </div>
              </div>
              <div class="ui-decor ui-decor_down"></div>
            </div>
          </section>
        