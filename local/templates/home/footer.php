<footer class="site-footer">
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <? $APPLICATION->IncludeComponent(
          "bitrix:main.include",
          "",
          array(
            "AREA_FILE_SHOW" => "file",
            "EDIT_TEMPLATE" => "",
            "PATH" => "/include/footer_about.php"
          )
        ); ?>




      </div>
      <div class="col-lg-4 mb-5 mb-lg-0">
        <div class="row mb-5">
          <div class="col-md-12">
            <h3 class="footer-heading mb-4">Навигация</h3>
          </div>
          <? $APPLICATION->IncludeComponent(
            "bitrix:menu",
            "footer_menu",
            array(
              "ALLOW_MULTI_SELECT" => "N",  // Разрешить несколько активных пунктов одновременно
              "CACHE_SELECTED_ITEMS" => "N",
              "CHILD_MENU_TYPE" => "left",  // Тип меню для остальных уровней
              "COMPONENT_TEMPLATE" => ".default",
              "DELAY" => "N",  // Откладывать выполнение шаблона меню
              "MAX_LEVEL" => "1",  // Уровень вложенности меню
              "MENU_CACHE_GET_VARS" => "",  // Значимые переменные запроса
              "MENU_CACHE_TIME" => "3600",  // Время кеширования (сек.)
              "MENU_CACHE_TYPE" => "A",  // Тип кеширования
              "MENU_CACHE_USE_GROUPS" => "Y",  // Учитывать права доступа
              "ROOT_MENU_TYPE" => "top",  // Тип меню для первого уровня
              "USE_EXT" => "N",  // Подключать файлы с именами вида .тип_меню.menu_ext.php
            ),
            false
          ); ?>

        </div>


      </div>

      <div class="col-lg-4 mb-5 mb-lg-0">
        <? $APPLICATION->IncludeComponent(
          "bitrix:main.include",
          "",
          array(
            "AREA_FILE_SHOW" => "file",
            "EDIT_TEMPLATE" => "",
            "PATH" => "/include/footer_social_media.php"
          )
        ); ?>


      </div>

    </div>
    <div class="row pt-5 mt-5 text-center">
      <div class="col-md-12">
        <p>
          <? $APPLICATION->IncludeComponent(
            "bitrix:main.include",
            "",
            array(
              "AREA_FILE_SHOW" => "file",
              "EDIT_TEMPLATE" => "",
              "PATH" => "/include/footer_colorlib.php"
            )
          ); ?>


        </p>
      </div>

    </div>
  </div>
</footer>

</div>
<? $APPLICATION->AddHeadScript('/local/templates/home/js/jquery-3.3.1.min.js'); ?>
<? $APPLICATION->AddHeadScript('/local/templates/home/js/jquery-migrate-3.0.1.min.js'); ?>
<? $APPLICATION->AddHeadScript('/local/templates/home/js/jquery-ui.js'); ?>
<? $APPLICATION->AddHeadScript('/local/templates/home/js/popper.min.js'); ?>
<? $APPLICATION->AddHeadScript('/local/templates/home/js/bootstrap.min.js'); ?>
<? $APPLICATION->AddHeadScript('/local/templates/home/js/owl.carousel.min.js'); ?>
<? $APPLICATION->AddHeadScript('/local/templates/home/js/mediaelement-and-player.min.js'); ?>
<? $APPLICATION->AddHeadScript('/local/templates/home/js/jquery.stellar.min.js'); ?>
<? $APPLICATION->AddHeadScript('/local/templates/home/js/jquery.countdown.min.js'); ?>
<? $APPLICATION->AddHeadScript('/local/templates/home/js/jquery.magnific-popup.min.js'); ?>
<? $APPLICATION->AddHeadScript('/local/templates/home/js/bootstrap-datepicker.min.js'); ?>
<? $APPLICATION->AddHeadScript('/local/templates/home/js/aos.js'); ?>
<? $APPLICATION->AddHeadScript('/local/templates/home/js/main.js'); ?>

</body>

</html>