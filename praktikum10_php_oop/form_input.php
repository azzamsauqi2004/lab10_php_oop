<


<html>
    <head>
        <title>Mahasiswa</title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
    <?php

   include "form.php";
   
echo "<html><head><title>Mahasiswa</title></head><body>";
echo "<h3>Silahkan isi form berikut ini :</h3>";
$form = new Form("","Input Form");
$form->addField("txtnim", "Nim");
$form->addField("txtnama", "Nama");
$form->addField("txtalamat", "Alamat");
$form->displayForm();
echo "</body></html>";
?> 
    </body>

</html>