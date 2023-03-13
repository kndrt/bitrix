<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title><? $APPLICATION->ShowTitle(); ?></title>
  <? $APPLICATION->ShowHead();  ?>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <? $APPLICATION->SetAdditionalCSS("https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500"); ?>
  <? $APPLICATION->SetAdditionalCSS('/local/templates/home/fonts/icomoon/style.css'); ?>
  <? $APPLICATION->SetAdditionalCSS('/local/templates/home/css/bootstrap.min.css'); ?>
  <? $APPLICATION->SetAdditionalCSS('/local/templates/home/css/magnific-popup.css'); ?>
  <? $APPLICATION->SetAdditionalCSS('/local/templates/home/css/jquery-ui.css'); ?>
  <? $APPLICATION->SetAdditionalCSS('/local/templates/home/css/owl.carousel.min.css'); ?>
  <? $APPLICATION->SetAdditionalCSS('/local/templates/home/css/owl.theme.default.min.css'); ?>
  <? $APPLICATION->SetAdditionalCSS('/local/templates/home/css/bootstrap-datepicker.css'); ?>
  <? $APPLICATION->SetAdditionalCSS('/local/templates/home/css/mediaelementplayer.css'); ?>
  <? $APPLICATION->SetAdditionalCSS('/local/templates/home/css/animate.css'); ?>
  <? $APPLICATION->SetAdditionalCSS('/local/templates/home/fonts/flaticon/font/flaticon.css'); ?>
  <? $APPLICATION->SetAdditionalCSS('/local/templates/home/css/fl-bigmug-line.css'); ?>
  <? $APPLICATION->SetAdditionalCSS('/local/templates/home/css/aos.css'); ?>
  <? $APPLICATION->SetAdditionalCSS('/local/templates/home/css/style.css'); ?>

</head>

<body>
  <? $APPLICATION->ShowPanel(); ?>

  <div class="site-loader"></div>

  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->

    <div class="border-bottom bg-white top-bar">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-6 col-md-6">
            <p class="mb-0">
              <? $APPLICATION->IncludeComponent(
                "bitrix:main.include",
                "",
                array(
                  "AREA_FILE_SHOW" => "file",
                  "PATH" => "/include/phone.php",
                  "EDIT_TEMPLATE" => ""
                )
              ); ?>


              <? $APPLICATION->IncludeComponent(
                "bitrix:main.include",
                "",
                array(
                  "AREA_FILE_SHOW" => "file",
                  "PATH" => "/include/email.php",
                  "EDIT_TEMPLATE" => ""
                )
              ); ?>

            </p>
          </div>
          <div class="col-6 col-md-6 text-right">
            <? $APPLICATION->IncludeComponent(
              "bitrix:main.include",
              "",
              array(
                "AREA_FILE_SHOW" => "file",
                "PATH" => "/include/social_media.php",
                "EDIT_TEMPLATE" => ""
              )
            ); ?>
          </div>
        </div>
      </div>
    </div>
    <div class="site-navbar">
      <div class="container py-1">
        <div class="row align-items-center">
          <div class="col-8 col-md-8 col-lg-4">
            <h1 class="">
              <? $APPLICATION->IncludeComponent(
                "bitrix:main.include",
                "",
                array(
                  "AREA_FILE_SHOW" => "file",
                  "PATH" => "/include/logo.php",
                  "EDIT_TEMPLATE" => ""
                )
              ); ?>
            </h1>
          </div>
          <div class="col-4 col-md-4 col-lg-8">
            <nav class="site-navigation text-right text-md-right" role="navigation">

              <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>
              <? $APPLICATION->IncludeComponent(
                "bitrix:menu",
                "header_menu",
                array(
                  "ALLOW_MULTI_SELECT" => "N",
                  "CHILD_MENU_TYPE" => "left",
                  "DELAY" => "N",
                  "MAX_LEVEL" => "3",
                  "MENU_CACHE_GET_VARS" => array(),
                  "MENU_CACHE_TIME" => "3600",
                  "MENU_CACHE_TYPE" => "A",
                  "MENU_CACHE_USE_GROUPS" => "Y",
                  "ROOT_MENU_TYPE" => "top",
                  "CACHE_SELECTED_ITEMS" => "N",
                  "USE_EXT" => "N",
                  "COMPONENT_TEMPLATE" => "horizontal_multilevel",
                ),
                false
              ); ?>

            </nav>
          </div>


        </div>

      </div>


    </div>
  </div>