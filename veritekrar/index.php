
<?php
include'kayit.php';
$Id=$_POST["Id"];
$ogrAd=$_POST["ogrAd"];
$baglanti=mysqli_connect("localhost","root"," ","vt_tekrar");
$sorgu=mysqli_query($baglanti,"select max(Id) as Id,ogrAd,count(ogrAd) as Adet from ogrt group by ogrAd having count(ogrAd)>1");
while($listele=mysqli_fetch_array($sorgu)){
    echo "<table border='1'>
    <tr>
    <th>Ayni kaydin en buyugu Id </th>
    <th>Ayni kaydin adi </th>
    <th>Ayni kaydin adeti </th>
    </tr>
    <tr>
    <td>".$listele['Id']."</td>
    <td>".$listele['ogrAd']."</td>
    <td>".$listele['Adet']."</td>
    <form action='sil.php' method='post'>
    <input type='submit' value='Tekrarli kaydi sil'>
    </form> </td> </tr> </table>";
    
}
?>

