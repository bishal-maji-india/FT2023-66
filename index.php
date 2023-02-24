<!DOCTYPE html>
<html lang="en">
<head>
    <title>Use of Library</title>
    <link rel="stylesheet" href="styles.css"/>
    <style>

    </style>
</head>
<body>
    <div class="center">
        <h1>Basics of composer</h1>
        <h4>Click on the buttons to see the usage of the following libraries.</h4>
        <form method="post">
        <input  name="fpdf" type="submit" class="button" value="Fpdf"/>
        <input  name="guzzle" type="submit" class="button" value="Guzzle HTTP"/>
        <input  name="kint" type="submit" class="button" value="Kint"/>
        </form>

        <?php
        require('utils.php');
        $utils=new Utils();

        if(array_key_exists('fpdf',$_POST)){
            $utils->DownloadPdf();
        }
        if(array_key_exists('guzzle',$_POST)){
            $utils->MakeHttpRequest();
        }
        if(array_key_exists('kint',$_POST)){
            $utils->DumpTextUsingKint();
        }
        ?>
    </div>
</body>
</html>