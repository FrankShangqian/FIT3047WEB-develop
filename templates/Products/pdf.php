<?php
$PAGE_ID = "pdf";
$PAGE_HEADER = "Print Client Contact List";
$db_host = "localhost";
$db_username = "fit2104";
$db_passwd = "fit2104";
$db_name = "fit2104_A2";
$dsn = "mysql:host=$db_host;dbname=$db_name";
$dbh = new PDO($dsn, $db_username, $db_passwd);

require_once __DIR__ . '/vendor/autoload.php';

use Mpdf\Mpdf;

// Modified from https://github.com/mpdf/mpdf-examples/blob/master/example34_invoice_example.php
$stmt = $dbh->prepare("SELECT * FROM `client`");
$data = array();
$content= '';


$content = ' <h3>Client Contact</h3>
            <table>
                     <tr>
                        <th style="width: 50%;">ID</th>
                        <th style="width: 50%">First Name</th>
                        <th style="width: 50%">Last Name</th>
                        <th style="width: 50%">Address</th>
                        <th style="width: 50%">Phone Number</th>
                        <th style="width: 50%">Email Address</th>
                    </tr>';
if($stmt->execute()&& $stmt->rowCount()>0){
    while ($row = $stmt -> fetchObject()){
        $content .= '<tr>
            <td style="padding:2px;font-size: 5px; text-align: center;">'.$row -> client_id.'</td>
            <td style="padding:2px;font-size: 5px; text-align: center;">'.$row  -> client_firstname.'</td>
            <td style="padding:2px;font-size: 5px; text-align: center;">'.$row  -> client_surname.'</td>
            <td style="padding:2px;font-size: 5px;  text-align: center;">'.$row -> client_address.'</td>
            <td style="padding:2px;font-size: 5px;  text-align: center;">'.$row -> client_phone.'</td>
            <td style="padding:2px;font-size: 5px;  text-align: center;">'.$row -> client_email.'</td>
            </tr>';

    }
}
$content .=  '</table>';

try {
    // Setup mPDF parameters
    $mpdf = new Mpdf([
        'margin_left' => 10,
        'margin_right' => 10,
        'margin_top' => 15,
        'margin_bottom' => 25,
        'margin_header' => 10,
        'margin_footer' => 10
    ]);
    $mpdf->SetProtection(['print']);

    $mpdf->SetTitle("Resonant World Pty Ltd. - Client Contacts");
    $mpdf->SetAuthor("Resonant World Pty Ltd.");

    $mpdf->WriteHTML($content);

    $mpdf->SetDisplayMode('fullpage');
    $mpdf->list_indent_first_level = 0;

    //call watermark content and image
    $mpdf->SetWatermarkText('Resonant World');
    $mpdf->showWatermarkText = true;
    $mpdf->watermarkTextAlpha = 0.1;

    //output in browser
    $mpdf->Output();

} catch (\Mpdf\MpdfException $e) {
    var_dump($e);
}

