<?php class Utils{
    // function to make and download pdf using fpdf library
    function DownloadPdf(){
            require('../basic_composer/vendor/autoload.php');
            $pdf =new FPDF();
            ob_start();
            $pdf->AddPage();
            $pdf->SetFont('Arial', 'B', 16);
            $pdf->Cell(100, 10, "Full name=Bishal MAji");
            $pdf->Ln();
            $pdf->Cell(100, 10, "Description=This is simple text pdf generation using composer");
            $pdf->Output('D', 'somethig.pdf');
            ob_end_flush();
        }

    //function to make a simple http request using Guzzle library
    function MakeHttpRequest(){
        require('../basic_composer/vendor/autoload.php');
        $client = new GuzzleHttp\Client();
        $res = $client->request('GET', 'https://api.cloudways.com/api/v1', [
        'headers'=> [
        'Accept'=> 'application/json',
        'Content-type'=> 'application/json'
        ]]);
        var_dump($res);
        }

    //function to make a simple http request using Guzzle library
    function DumpTextUsingKint(){
        include 'vendor/autoload.php';
        d('Dumped with Kint');
    }
}
?>