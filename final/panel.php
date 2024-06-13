<!DOCTYPE html>
<html>
<head>
<style>
#kapsayici {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#kapsayici td, #kapsayici th {
  border: 1px solid #ddd;
  padding: 8px;
}

#kapsayici tr:nth-child(even){background-color: #f2f2f2;}

#kapsayici tr:hover {background-color: #ddd;}

#kapsayici th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}

h1{
  color:red;
  text-align: center;
}
</style>
</head>
<body>

<h1>Sisteme Gelen Mesajlar</h1>

<table id="kapsayici">
  <tr>
    <th>Ad Soyad</th>
    <th>Telefon</th>
    <th>Email</th>
    <th>Konu</th>
    <th>Mesaj</th>
  </tr>


  <!-- VERİ TABANINDAN VERİ ÇEKME İŞLEMİ ---->

  <?php

  session_start(); /*   Panel Giriş.php sayfasına dışarıdan kimsenin girememesi için Oturum Başlatıyorum  */

  if($_SESSION["user"]=="")
  {
     echo " <script> window.location.href='cikis.php'</script>"; /* Burada Yaptığım işlem Kullanıcı adı sifre girmemişse panel sayfasına girememesi için*/
  }

  else{
                echo "Kullanıcı Adınız: ".$_SESSION['user']."<br>";
                echo "<a href='cikis.php'>ÇIKIŞ YAP</a><br><br><br>";

                  include("baglanti.php");

                  $sec="Select * From iletisim"; /*  Select Seç From Nereden Demek   */
                  $sonuc=$baglan->query($sec);
                  
                  if($sonuc->num_rows>0) /*   Satır Sayısı 0 dan büyükse yani veri varsa tabloda demek  */
                  {
                    while($cek=$sonuc->fetch_assoc())        /*   Fetch assoc sayesinde Tablodaki verileri alıyoruz çek dizisi içerisine atıyoruz ve görüntüleyebiliyoruz  */
                    {
                      echo "
                          <tr>
                  
                      <td>".$cek['adsoyad']."</td>
                      <td>".$cek ['telefon']."</td>
                      <td>".$cek['email']."</td>
                      <td>".$cek['konu']."</td>
                      <td>".$cek['mesaj']."</td>
                  
                        </tr> 
                        ";
                      
                    }
                  }
                  else{
                      echo "Veri Tabanında Kayıtlı Hiçbir Veri Bulunamamıştır ! " ;
                  }
  }

?>


 
</table>

</body>
</html>


