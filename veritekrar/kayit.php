
<?php
$Id=$_POST["Id"];
$ogrAd=$_POST["ogrAd"];
$baglanti=mysqli_connect("localhost","root","","vt_tekrar");
$sorgu=mysqli_query($baglanti,"insert into ogrt(Id,ogrAd) values ('$Id','$ogrAd')");
if($sorgu){
    echo "Kaydiniz gerceklestirildi.";
}
else {
    echo "Kaydiniz olmamistir";
    header ("location:index.php");
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
     Id:<input type="text" name="Id"><br>
     Ogrenci Adi:<input type="text" name="ogrAd"><br><br>
     <input type="submit" value="GONDER" name="gonder">
</form>

</body>
</html>