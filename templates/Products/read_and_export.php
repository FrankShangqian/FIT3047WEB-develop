<?php
$link = mysqli_connect('localhost', 'jincakeproj', 'jincakeproj', 'jincakeproj');
$query = ("SELECT product_name, product_quantity, stock_alert FROM Product WHERE product_quantity<stock_alert");

$items = array();

//Store table records into an array
while( $row = mysqli_query($link, $query)) {
    $items[] = $row;
}
//Check the export button is pressed or not
if(isset($_POST["export"])) {
//Define the filename with current date
    $fileName = "itemdata-".date('d-m-Y').".xls";

//Set header information to export data in excel format
    header('Content-Type: application/vnd.ms-excel');
    header('Content-Disposition: attachment; filename='.$fileName);

//Set variable to false for heading
    $heading = false;

//Add the MySQL table data to excel file
    if(!empty($items)) {
        foreach($items as $item) {
            if(!$heading) {
                echo implode("\t", array_keys($item)) . "\n";
                $heading = true;
            }
            echo implode("\t", array_values($item)) . "\n";
        }
    }
    exit();
}