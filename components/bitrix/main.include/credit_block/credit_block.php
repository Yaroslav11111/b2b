<?
use \Bitrix\Main\Localization\Loc;

    $rsUser = CUser::GetByID($USER->GetID()); //Данные пользователя
    $arUser = $rsUser->Fetch();
?>
<?if(CModule::IncludeModule("currency")){ ?>

<div id="credit_block" class="">
    <p class="block-title">Погашение долга</p>
    <div class="item debt">Средства на<br/> вашем счету:<span class="value_cur" style="font-weight: bolder; font-size: 12px"><? echo $arUser['UF_MONEY_ACC']; CCurrency::GetBaseCurrency(); ?></span></div>
    <div class="item date">
        <span>На </span><?echo date($DB->DateFormatToPHP(CSite::GetDateFormat("SHORT")), time());?><br/>
        <span class=""> ваш просроченный<br/> долг составляет:</span>
        <span class="debt value_cur" style="font-weight: bolder; font-size: 12px"> <?echo $arUser['UF_DEBT_TODAY'];   CCurrency::GetBaseCurrency(); ?> </span>
    </div>
    <ul class="item" >
        <li>К погашению на сегодня:<span class="value_cur"><?echo  $arUser['UF_CREDIT_LINE']['0']; CCurrency::GetBaseCurrency()?></span></li>
        <li>Ближайший плановый <br/> платеж на 04.09.2017:<span class="value_cur"><?echo  $arUser['UF_CREDIT_LINE']['1']; CCurrency::GetBaseCurrency()?></span></li>
        <li>Суммарный долг:<span class="value_cur"><?echo $arUser['UF_CREDIT_LINE']['2'];  CCurrency::GetBaseCurrency()?></span></li>

    </ul>
</div>
<? } ?>