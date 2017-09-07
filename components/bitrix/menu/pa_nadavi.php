<?php
function connection_nadavi(){
    include $_SERVER['DOCUMENT_ROOT'].'/orders/system/db/db.php';
    include $_SERVER['DOCUMENT_ROOT'].'/orders/system/gareports/ga_query.php';
    include $_SERVER['DOCUMENT_ROOT'].'/orders/system/pareports/data_json.php';
};
?>
<?

class NadaviData
{
    public static $PName;
    public static $startdate;
    public static $enddate;
    public static  $nadaviArray = [];
    public function _construct()
    {
        $PName = new GAQuery;

        $startdate = self::$startdate;
        $enddate = self::$enddate;

        $PName::$SDate = $startdate;
        $PName::$EDate = $enddate;
        $PName::$PriceAgrigator = "Nadavi / cpc";
        $response = $PName::getReport(GAQuery::initializeAnalytics());
        $PName::printResults($response);

        self::$nadaviArray = $PName::$MainPaArray;
        $PName::$MainPaArray = [];
    }
}
//
////    <!-- Make table of nadavi -->
//    //PDO
//    $i = 0;
//    while ($i < count($nadavi)) {
//        $value = array();
//        foreach ($nadavi[$i] as $key => $item) {
//            $value[] = ':' . $key.'_'.$i ;
//            if(($key = array_search(':0_'.$i,$value)) !== FALSE){
//                unset($value[$key]);
//            };
//            if(($key = array_search(':2_'.$i,$value)) !== FALSE){
//                unset($value[$key]);
//            };
//
//        }
//        array_push($value, ":cost_per_click_".$i,":spending_".$i);
//        $string[] = '(' . implode(',', $value) . ')';
//
//        $i++;
//    }
//
//
//$i = 0;
//$sql="insert into `report_nadavi` (`product_name`, `quantity_clicks`, `cart_ga`, `thank`, `to_order`, `fast_order_cart`,  `cost_per_click`, `spending`) values " . implode(',', $string);
//$sth= $db->prepare($sql);
//$CostPerClick = 3.3;
//
//foreach ($nadavi as $key => $prod) {
//        $GaName = $prod['1'];
//        $GaSessions = $prod['3'];
//        $GaCostPerClick = $CostPerClick;
//        $GaSpending = $GaCostPerClick * $GaSessions;
//        $GaCart = $prod['4'];
//        $GaThankPurchase = $prod['5'];
//        $ToOrder = $prod['6'];
//        $QuickOrder = $prod['7'];
//
//
//    $sth->bindValue(':1_' . $i, $GaName);
//    $sth->bindValue(':3_' . $i, $GaSessions);
//    $sth->bindValue(':4_' . $i, $GaCart);
//    $sth->bindValue(':5_' . $i, $GaThankPurchase);
//    $sth->bindValue(':6_' . $i, $ToOrder);
//    $sth->bindValue(':7_' . $i, $QuickOrder);
//    $sth->bindValue(':cost_per_click_' . $i, $GaCostPerClick);
//    $sth->bindValue(':spending_' . $i, $GaSpending);
//
//    $i++;
//
//}
//$sth->execute();

?>
