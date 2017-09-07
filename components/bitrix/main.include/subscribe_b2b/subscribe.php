<?
use \Bitrix\Main\Localization\Loc;

$rsUser = CUser::GetByID($USER->GetID()); //Данные пользователя
$arUser = $rsUser->Fetch();
?>
<?if(CModule::IncludeModule("currency")){ ?>

    <div id="order_product_block" class="info-block">
        <p class="block-title">Рассылки</p>
        <ul class="item" >
            <li><a href="#">Управление подпиской</a></li>
            <li><a href="#">Архив рассылок</a></li>

        </ul>
    </div>
<? } ?>
