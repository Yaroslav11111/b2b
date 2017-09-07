<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
                </div>

                <div class="sidebar">
                    <div class="info-block">
                        <?$APPLICATION->IncludeComponent(
	"bitrix:search.title", 
	"search_b2b", 
	array(
		"CATEGORY_0" => array(
			0 => "iblock_catalog",
			1 => "iblock_offers",
		),
		"CATEGORY_0_TITLE" => GetMessage("SEARCH_GOODS"),
		"CATEGORY_0_iblock_catalog" => array(
			0 => "2",
			1 => "all",
		),
		"CATEGORY_OTHERS_TITLE" => GetMessage("SEARCH_OTHER"),
		"CHECK_DATES" => "Y",
		"CONTAINER_ID" => "search",
		"CONVERT_CURRENCY" => "Y",
		"INPUT_ID" => "title-search-input",
		"NUM_CATEGORIES" => "1",
		"PAGE" => SITE_DIR."catalog/",
		"PREVIEW_HEIGHT" => "75",
		"PREVIEW_WIDTH" => "75",
		"PRICE_CODE" => array(
			0 => "BASE",
		),
		"SHOW_INPUT" => "Y",
		"SHOW_OTHERS" => "Y",
		"SHOW_PREVIEW" => "Y",
		"TOP_COUNT" => "5",
		"COMPONENT_TEMPLATE" => "search_b2b",
		"ORDER" => "date",
		"USE_LANGUAGE_GUESS" => "Y",
		"PRICE_VAT_INCLUDE" => "Y",
		"PREVIEW_TRUNCATE_LEN" => "",
		"CURRENCY_ID" => "UAH",
		"CATEGORY_0_iblock_offers" => array(
			0 => "3",
			1 => "all",
		)
	),
	false
);?>
                    </div>

                    <div class="info-block">
                        <?$APPLICATION->IncludeComponent("bitrix:system.auth.form", "auth_b2b", Array(
                            "COMPONENT_TEMPLATE" => ".default",
                            "FORGOT_PASSWORD_URL" => "",	// Страница забытого пароля
                            "PROFILE_URL" => "http://clone.store-top.com/personal/",	// Страница профиля
                            "REGISTER_URL" => "",	// Страница регистрации
                            "SHOW_ERRORS" => "N",	// Показывать ошибки
                        ),
                            false
                        );?>
                    </div>
                    <div class="info-block">
                        <?$APPLICATION->IncludeComponent(
                            "bitrix:sale.basket.basket.line",
                            "cart_main_page.php",
                            array(
                                "HIDE_ON_BASKET_PAGES" => "N",
                                "PATH_TO_AUTHORIZE" => "",
                                "PATH_TO_BASKET" => SITE_DIR."personal/cart/",
                                "PATH_TO_ORDER" => SITE_DIR."personal/order/make/",
                                "PATH_TO_PERSONAL" => SITE_DIR."personal/",
                                "PATH_TO_PROFILE" => SITE_DIR."personal/",
                                "PATH_TO_REGISTER" => SITE_DIR."login/",
                                "POSITION_FIXED" => "N",
                                "SHOW_AUTHOR" => "N",
                                "SHOW_EMPTY_VALUES" => "Y",
                                "SHOW_NUM_PRODUCTS" => "Y",
                                "SHOW_PERSONAL_LINK" => "N",
                                "SHOW_PRODUCTS" => "Y",
                                "SHOW_TOTAL_PRICE" => "Y",
                                "COMPONENT_TEMPLATE" => "cart_main_page.php",
                                "SHOW_DELAY" => "Y",
                                "SHOW_NOTAVAIL" => "Y",
                                "SHOW_SUBSCRIBE" => "N",
                                "SHOW_IMAGE" => "N",
                                "SHOW_PRICE" => "Y",
                                "SHOW_SUMMARY" => "Y"
                            ),
                            false
                        );?>
                    </div>
                    <div class="info-block">
                        <?$APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "subscribe_b2b",
                            Array(
                                "AREA_FILE_SHOW" => "file",
                                "AREA_FILE_SUFFIX" => "inc",
                                "COMPONENT_TEMPLATE" => "subscribe_b2b",
                                "EDIT_TEMPLATE" => "",
                                "PATH" => "/bitrix/templates/eshop_bootstrap_yellow/components/bitrix/main.include/subscribe_b2b/subscribe.php"
                            )
                        );?>
                    </div>
                </div><!--// sidebar

            </div><!--//row-->
                <?$APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    Array(
                        "AREA_FILE_SHOW" => "sect",
                        "AREA_FILE_SUFFIX" => "bottom",
                        "AREA_FILE_RECURSIVE" => "N",
                        "EDIT_MODE" => "html",
                    ),
                    false,
                    Array('HIDE_ICONS' => 'Y')
                );?>
            </div><!--//container bx-content-seection-->
        </div><!--//workarea-->

        <footer class="bx-footer">
            <div class="bx-footer-line">
                <div class="bx-footer-section container">
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        Array(
                            "AREA_FILE_SHOW" => "file",
                            "PATH" => SITE_DIR."include/socnet_footer.php",
                            "AREA_FILE_RECURSIVE" => "N",
                            "EDIT_MODE" => "html",
                        ),
                        false,
                        Array('HIDE_ICONS' => 'Y')
                    );?>
                </div>
            </div>
            <div class="bx-footer-section container bx-center-section">
                <div class="col-sm-5 col-md-3 col-md-push-6">
                    <h4 class="bx-block-title"><?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/about_title.php"), false);?></h4>
                    <?$APPLICATION->IncludeComponent("bitrix:menu", "bottom_menu", array(
                        "ROOT_MENU_TYPE" => "bottom",
                        "MAX_LEVEL" => "1",
                        "MENU_CACHE_TYPE" => "A",
                        "CACHE_SELECTED_ITEMS" => "N",
                        "MENU_CACHE_TIME" => "36000000",
                        "MENU_CACHE_USE_GROUPS" => "Y",
                        "MENU_CACHE_GET_VARS" => array(
                        ),
                    ),
                        false
                    );?>
                </div>
                <div class="col-sm-5 col-md-3">
                    <h4 class="bx-block-title"><?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/catalog_title.php"), false);?></h4>
                    <?$APPLICATION->IncludeComponent("bitrix:menu", "bottom_menu", array(
                        "ROOT_MENU_TYPE" => "left",
                        "MENU_CACHE_TYPE" => "A",
                        "MENU_CACHE_TIME" => "36000000",
                        "MENU_CACHE_USE_GROUPS" => "Y",
                        "MENU_CACHE_GET_VARS" => array(
                        ),
                        "CACHE_SELECTED_ITEMS" => "N",
                        "MAX_LEVEL" => "1",
                        "USE_EXT" => "Y",
                        "DELAY" => "N",
                        "ALLOW_MULTI_SELECT" => "N"
                    ),
                        false
                    );?>
                </div>
                <div class="col-sm-5 col-md-3 col-md-push-3">
                    <div style="padding: 20px;background:#eaeaeb">
                        <?$APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            Array(
                                "AREA_FILE_SHOW" => "file",
                                "PATH" => SITE_DIR."include/sender.php",
                                "AREA_FILE_RECURSIVE" => "N",
                                "EDIT_MODE" => "html",
                            ),
                            false,
                            Array('HIDE_ICONS' => 'Y')
                        );?>
                    </div>
                    <div id="bx-composite-banner" style="padding-top: 20px"></div>
                </div>
                <div class="col-sm-5 col-md-3 col-md-pull-9">
                    <div class="bx-inclogofooter">
                        <div class="bx-inclogofooter-block">
                            <a class="bx-inclogofooter-logo" href="<?=SITE_DIR?>">
                                <?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/company_logo_mobile.php"), false);?>
                            </a>
                        </div>
                        <div class="bx-inclogofooter-block">
                            <div class="bx-inclogofooter-tel"><?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/telephone.php"), false);?></div>
                            <div class="bx-inclogofooter-worktime"><?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/schedule.php"), false);?></div>
                        </div>
                        <div>
                            <?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/personal.php"), false);?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bx-footer-bottomline">
                <div class="bx-footer-section container">
                    <div class="col-sm-6"><?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/copyright.php"), false);?></div>
                    <div class="col-sm-6 bx-up"><a href="javascript:void(0)" data-role="eshopUpButton"><i class="fa fa-caret-up"></i> <?=GetMessage("FOOTER_UP_BUTTON")?></a></div>
                </div>
            </div>


        </footer>
        <div class="col-xs-12 hidden-lg hidden-md hidden-sm">
            <?$APPLICATION->IncludeComponent("bitrix:sale.basket.basket.line", "", array(
                "PATH_TO_BASKET" => SITE_DIR."personal/cart/",
                "PATH_TO_PERSONAL" => SITE_DIR."personal/",
                "SHOW_PERSONAL_LINK" => "N",
                "SHOW_NUM_PRODUCTS" => "Y",
                "SHOW_TOTAL_PRICE" => "Y",
                "SHOW_PRODUCTS" => "N",
                "POSITION_FIXED" =>"Y",
                "POSITION_HORIZONTAL" => "center",
                "POSITION_VERTICAL" => "bottom",
                "SHOW_AUTHOR" => "Y",
                "PATH_TO_REGISTER" => SITE_DIR."login/",
                "PATH_TO_PROFILE" => SITE_DIR."personal/"
            ),
                false,
                array()
            );?>
        </div>
    </div> <!-- //bx-wrapper -->


    <script>
        BX.ready(function(){
            var upButton = document.querySelector('[data-role="eshopUpButton"]');
            BX.bind(upButton, "click", function(){
                var windowScroll = BX.GetWindowScrollPos();
                (new BX.easing({
                    duration : 500,
                    start : { scroll : windowScroll.scrollTop },
                    finish : { scroll : 0 },
                    transition : BX.easing.makeEaseOut(BX.easing.transitions.quart),
                    step : function(state){
                        window.scrollTo(0, state.scroll);
                    },
                    complete: function() {
                    }
                })).animate();
            })
        });
    </script>
</body>
</html>