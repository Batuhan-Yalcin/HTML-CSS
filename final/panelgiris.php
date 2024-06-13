<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

.container {
  
  display: -ms-flexbox; 
  display: flex;
  width: 100%;
  margin-bottom: 15px;
  text-align: center; 
  
}

.icon {
  padding: 10px;
  background: dodgerblue;
  color: white;
  min-width: 50px;
  text-align: center;
}

.kadi{
  width: 100%;
  padding: 10px;
  outline: none;
}

.kadi:focus { /*   Focus Fare Tarafından hedeflenen veya etkinleştirilen öğenin stilini belirler */
  border: 2px solid dodgerblue;
}


.btn {
  background-color: dodgerblue;
  color: white;
  padding: 15px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}

h2{
    text-align: center;
    color:yellow;
    background-color: blue;
}



</style>
</head>
<body>

<form action="panelgiris.php" method="post" style="max-width:500px;margin:auto">
  <h2>Panel Girişi</h2>
  <div class="container">
    <i class="fa fa-user icon slm"></i>
    <input class="kadi slm" type="text" placeholder="Kullanıcı Adınız" name="kullaniciadi">
  </div>
  <div class="container">
    <i class="fa fa-key icon slm"></i>
    <input class="kadi slm" type="password" placeholder="Parolanız" name="sifre">
  </div>

  <button type="submit" class="btn">Giriş Yap</button>
</form>

</body>
</html>

<!-- panele giriş Yapabilmeleri için Oturum Başlatma İşlemleri ! -->
<?php

  session_start();    /*  Oturum Başlatma İşlemini Gerçekleştirdim Burada  */

  if(isset($_POST["kullaniciadi"], $_POST["sifre"])) /*  İsset İle Veri Girilmiş mi kontrol ediyorum  */
  {

    if($_POST["kullaniciadi"]=="admin"  ||$_POST["kullaniciadi"]=="batu" && $_POST["sifre"]=="b190758x" || $_POST["sifre"]=="1907") /*    Kullanıcı adım adminse şifremde b190758x se giriş yapabileyim demek   */
    {
      $_SESSION['user']=$_POST["kullaniciadi"];   /*  Giriş Bilgimizi Session un Kgiris değerine attım  */
      header("location:panel.php"); /*    Verileri Alıp Bilgiler Doğruysa beni panel.php ye göndermesi için header ile locasyon verdim */
    }

    else{
          echo "<script> alert('Kullanıcı Adı Veya Şifreniz Yanlış Lütfen Doğru Bilgileri Giriniz !') </script>";
    }

  }


?>