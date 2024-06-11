<?php

$vt_sunucu="localhost";
$vt_usurname="root";
$vt_password="";
$vt_name="extremesports";

$baglan=mysqli_connect($vt_sunucu,$vt_usurname,$vt_password,$vt_name);

if(!$baglan)
{
    die("veritabanı bağlantı işlemi başarısız".mysqli_connect_error());
    
}

?>