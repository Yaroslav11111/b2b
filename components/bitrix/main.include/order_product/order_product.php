<?
use \Bitrix\Main\Localization\Loc;

$rsUser = CUser::GetByID($USER->GetID()); //Данные пользователя
$arUser = $rsUser->Fetch();
?>
<?if(CModule::IncludeModule("currency")){ ?>

    <div id="order_product_block" class="info-block">
        <p class="block-title">Заказ товаров</p>
        <ul class="item" >
            <li><a href="/prays-listy.php">Прайс-листы</a></li>
            <li><a href="/personal/cart/">Текущие заказы</a></li>
            <li><a href="/personal/orders/">Состояния заказов</a></li>
            <li><a href="/include/Уценённая техника.xlsx">Распродажа уценённой техники</a></li>
            <li><a href="/personal/orders/?filter_history=Y">История заказов</a></li>
        </ul>
    </div>
<? } ?>
