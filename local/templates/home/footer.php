

  <footer class="site-footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
        <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/include/footer_about.php"
	)
);?>




        </div>
        <div class="col-lg-4 mb-5 mb-lg-0">
          <div class="row mb-5">
            <div class="col-md-12">
              <h3 class="footer-heading mb-4">Navigations</h3>
            </div>
            <div class="col-md-6 col-lg-6">
              <ul class="list-unstyled">
                <li><a href="#">Home</a></li>
                <li><a href="#">Buy</a></li>
                <li><a href="#">Rent</a></li>
                <li><a href="#">Properties</a></li>
              </ul>
            </div>
            <div class="col-md-6 col-lg-6">
              <ul class="list-unstyled">
                <li><a href="#">About Us</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Contact Us</a></li>
                <li><a href="#">Terms</a></li>
              </ul>
            </div>
          </div>


        </div>

        <div class="col-lg-4 mb-5 mb-lg-0">
        <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/include/footer_social_media.php"
	)
);?>


        </div>

      </div>
      <div class="row pt-5 mt-5 text-center">
        <div class="col-md-12">
          <p>
          <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/include/footer_colorlib.php"
	)
);?>

           
          </p>
        </div>

      </div>
    </div>
  </footer>

  </div>
  <?$APPLICATION->AddHeadScript('/local/templates/home/js/jquery-3.3.1.min.js');?>
  <?$APPLICATION->AddHeadScript('/local/templates/home/js/jquery-migrate-3.0.1.min.js');?>
  <?$APPLICATION->AddHeadScript('/local/templates/home/js/jquery-ui.js');?>
  <?$APPLICATION->AddHeadScript('/local/templates/home/js/popper.min.js');?>
  <?$APPLICATION->AddHeadScript('/local/templates/home/js/bootstrap.min.js');?>
  <?$APPLICATION->AddHeadScript('/local/templates/home/js/owl.carousel.min.js');?>
  <?$APPLICATION->AddHeadScript('/local/templates/home/js/mediaelement-and-player.min.js');?>
  <?$APPLICATION->AddHeadScript('/local/templates/home/js/jquery.stellar.min.js');?>
  <?$APPLICATION->AddHeadScript('/local/templates/home/js/jquery.countdown.min.js');?>
  <?$APPLICATION->AddHeadScript('/local/templates/home/js/jquery.magnific-popup.min.js');?>
  <?$APPLICATION->AddHeadScript('/local/templates/home/js/bootstrap-datepicker.min.js');?>
  <?$APPLICATION->AddHeadScript('/local/templates/home/js/aos.js');?>
  <?$APPLICATION->AddHeadScript('/local/templates/home/js/main.js');?>

</body>

</html>