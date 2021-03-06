<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile($_SERVER["DOCUMENT_ROOT"]."/bitrix/templates/".SITE_TEMPLATE_ID."/header.php");
CJSCore::Init(array("fx"));
$curPage = $APPLICATION->GetCurPage(true);
$theme = COption::GetOptionString("main", "wizard_eshop_bootstrap_theme_id", "blue", SITE_ID);
?>
<!DOCTYPE html>
<html xml:lang="<?=LANGUAGE_ID?>" lang="<?=LANGUAGE_ID?>">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, width=device-width">
    <link rel="shortcut icon" type="image/x-icon" href="<?=SITE_DIR?>favicon.ico" />
    <?$APPLICATION->ShowHead();?>
    <?
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/colors.css", true);
    $APPLICATION->SetAdditionalCSS("/bitrix/css/main/bootstrap.css");
    $APPLICATION->SetAdditionalCSS("/bitrix/css/main/font-awesome.css");
    CJSCore::Init(array("jquery2"));
    $APPLICATION->AddHeadScript("/bitrix/templates/eshop_bootstrap_yellow/b2b.js");
    ?>
    <title><?$APPLICATION->ShowTitle()?></title>
</head>
<body class="bx-background-image bx-theme-<?=$theme?>" <?=$APPLICATION->ShowProperty("backgroundImage")?>>
<div id="panel"><?$APPLICATION->ShowPanel();?></div>
<?$APPLICATION->IncludeComponent("bitrix:eshop.banner", "", array(

),
    false,
    array(
        "ACTIVE_COMPONENT" => "N"
    )
);?>
<div class="bx-wrapper" id="bx_eshop_wrap">
    <header class="bx-header">
        <div class="bx-header-section">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                    <div class="bx-logo">
                        <a class="bx-logo-block hidden-xs" href="<?=SITE_DIR?>">
                            <?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/company_logo.php"), false);?>
                        </a>
                        <a class="bx-logo-block hidden-lg hidden-md hidden-sm text-center" href="<?=SITE_DIR?>">
                            <?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/company_logo_mobile.php"), false);?>
                        </a>
                    </div>
                </div>



            </div>
            <div class="row">
                <div class="col-md-12 hidden-xs">
                    <?$APPLICATION->IncludeComponent("bitrix:menu", "top_menu", Array(
                        "ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
                        "MENU_CACHE_TYPE" => "A",	// Тип кеширования
                        "MENU_CACHE_TIME" => "36000000",	// Время кеширования (сек.)
                        "MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
                        "MENU_THEME" => "site",	// Тема меню
                        "CACHE_SELECTED_ITEMS" => "N",
                        "MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
                        "MAX_LEVEL" => "3",	// Уровень вложенности меню
                        "CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
                        "USE_EXT" => "Y",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
                        "DELAY" => "N",	// Откладывать выполнение шаблона меню
                        "ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
                        "COMPONENT_TEMPLATE" => "catalog_horizontal"
                    ),
                        false
                    );?>
                </div>
            </div>
            <!--            --><?//if ($curPage != SITE_DIR."index.php"):?>
            <!--                <div class="row">-->
            <!--                    <div class="col-lg-12">-->
            <!--                        --><?//$APPLICATION->IncludeComponent("bitrix:search.title", "visual", array(
            //                            "NUM_CATEGORIES" => "1",
            //                            "TOP_COUNT" => "5",
            //                            "CHECK_DATES" => "N",
            //                            "SHOW_OTHERS" => "N",
            //                            "PAGE" => SITE_DIR."catalog/",
            //                            "CATEGORY_0_TITLE" => GetMessage("SEARCH_GOODS") ,
            //                            "CATEGORY_0" => array(
            //                                0 => "iblock_catalog",
            //                            ),
            //                            "CATEGORY_0_iblock_catalog" => array(
            //                                0 => "all",
            //                            ),
            //                            "CATEGORY_OTHERS_TITLE" => GetMessage("SEARCH_OTHER"),
            //                            "SHOW_INPUT" => "Y",
            //                            "INPUT_ID" => "title-search-input",
            //                            "CONTAINER_ID" => "search",
            //                            "PRICE_CODE" => array(
            //                                0 => "BASE",
            //                            ),
            //                            "SHOW_PREVIEW" => "Y",
            //                            "PREVIEW_WIDTH" => "75",
            //                            "PREVIEW_HEIGHT" => "75",
            //                            "CONVERT_CURRENCY" => "Y"
            //                        ),
            //                            false
            //                        );?>
            <!--                    </div>-->
            <!--                </div>-->
            <!--            --><?//endif?>

            <?if ($curPage != SITE_DIR."index.php"):?>
                <div class="row">
                    <div class="col-lg-12" id="navigation">
                        <?$APPLICATION->IncludeComponent("bitrix:breadcrumb", "", array(
                            "START_FROM" => "0",
                            "PATH" => "",
                            "SITE_ID" => "-"
                        ),
                            false,
                            Array('HIDE_ICONS' => 'Y')
                        );?>
                    </div>
                </div>
                <h1 class="bx-title dbg_title" id="pagetitle"><?=$APPLICATION->ShowTitle(false);?></h1>
            <?endif?>
        </div>
    </header>

    <div class="workarea">
        <div class="bx-content-seection">
            <div class="">
                <?$needSidebar = preg_match("~^".SITE_DIR."(catalog|personal\/cart|personal\/order\/make)/~", $curPage);?>
                <div class="bx-content <?=($needSidebar ? "col-xs-10" : "col-xs-10")?>" style="padding: 0">