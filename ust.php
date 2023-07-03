 
      <div data-off-canvas="mobile-slidebar left overlay">

        <ul class="navbar-nav">
		
							<li class="nav-item"><a class="nav-link" href="index">Anasayfa</a></li>

                    <li class="nav-item"><a class="nav-link" href="kurumsal">Kurumsal</a></li>
                   
					<li class="nav-item"><a class="nav-link" href="araclarimiz">Araçlarımız</a></li>
					
					<li class="nav-item"><a class="nav-link" href="transfer">Transfer</a></li>

					<li class="nav-item"><a class="nav-link" href="haberler">Haberler</a></li>

					<li class="nav-item"><a class="nav-link" href="iletisim">İletişim</a></li>


                   </ul>

      </div>
   
        
      <header class="header">
       
        <div class="header-main">
          <div class="container-fluid">
            <div class="row align-items-center justify-content-between">
              <div class="col-auto"><a class="navbar-brand navbar-brand_light scroll" href="index">
			  <img class="normal-logo img-fluid" src="assets\media\general\logo-light.png" alt="logo"></a>
			  <a class="navbar-brand navbar-brand_dark scroll" href="index">
			  <img class="normal-logo img-fluid" src="assets\media\general\logo-dark.png" alt="logo"></a></div>
              <div class="col-auto d-xl-none">
                <!-- Mobile Trigger Start-->
                <button class="menu-mobile-button js-toggle-mobile-slidebar toggle-menu-button"><i class="toggle-menu-button-icon"><span></span><span></span><span></span><span></span><span></span><span></span></i></button>
                <!-- Mobile Trigger End-->
              </div>
              <div class="col-xl d-none d-xl-block">
                <nav class="navbar navbar-expand-lg justify-content-end" id="nav">
                  <ul class="yamm main-menu navbar-nav">
				  
					<li class="nav-item"><a class="nav-link" href="index">Anasayfa</a></li>

                    <li class="nav-item"><a class="nav-link" href="kurumsal">Kurumsal</a></li>
                   
					<li class="nav-item"><a class="nav-link" href="araclarimiz">Araçlarımız</a></li>
					
					<li class="nav-item"><a class="nav-link" href="transfer">Transfer</a></li>

					<li class="nav-item"><a class="nav-link" href="kiralama-sartlari">Kiralama Şartları</a></li>

					<li class="nav-item"><a class="nav-link" href="akd-filo">AKD Filo</a></li>
					
                  </ul>
                    <a class="header-main__link" href="https://wa.me/<?=$db->ayarlar("value" , "whatsapp");?>"><i class="ic fab fa-whatsapp"></i></a>
                    <a class="header-main__link" href="<?=$db->ayarlar("value" , "facebook");?>"><i class="ic fab fa-facebook-f"></i></a>
                    <a class="header-main__link" href="<?=$db->ayarlar("value" , "instagram");?>"><i class="ic fab fa-instagram"></i></a>
  					
                <a href="iletisim">  <button class="header-main__btn btn btn-secondary">Bize Ulaşın</button> </a>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </header>
      <!-- end .header-->
      