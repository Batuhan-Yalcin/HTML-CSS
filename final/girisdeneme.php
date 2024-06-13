<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="giris.css">
    <title>Giriş Sayfası</title>
</head>
<body>
    <!--      Navbar kapsayıcım div class logo ile youtube logosunu oraya koydum          -->
    <div class="navbar">
        <div class="logo">
            <img src="./resim/r7.jpg" alt="Yazılım Okulu">
            <img src="./resim/r7.jpg" alt="Yazılım Okulu">
            <img src="./resim/r7.jpg" alt="Yazılım Okulu">
            <img src="./resim/r7.jpg" alt="Yazılım Okulu">
            <img src="./resim/r7.jpg" alt="Yazılım Okulu">
            <img src="./resim/r7.jpg" alt="Yazılım Okulu">
            <img src="./resim/r7.jpg" alt="Yazılım Okulu">
            <img src="./resim/r7.jpg" alt="Yazılım Okulu">
            <img src="./resim/r7.jpg" alt="Yazılım Okulu">
        </div>
    </div>
    <!--      Container a bir div daha açtım ve box yazdım bir giriş formu oluşturmak için bir div açıp input form ismi verdim ve inputları yazdım                       -->
    <div class="container">
        <div class="box">
            <h2>Giriş Formu</h2>
            <div class="inputform">
                <form class="form">
                <input type="text" name="email" placeholder="Kullanıcı Adınızı Giriniz." required="required">
                <input type="password" name="sifre" placeholder="Şifrenizi Giriniz.." required="required">
                <button type="submit" class="btn"> <a href="index.php">Giriş Yap</a></button>
         
                <button type="submit" class="btn2"> <a href="index.php"></a> Şifrenizi mi Unuttunuz?</button>
                
            </form>
            </div>
        </div>
    </div>


    
</body>
</html>

<?php

  session_start();    /*  Oturum Başlatma İşlemini Gerçekleştirdim Burada  */

  if(isset($_POST["email"], $_POST["sifre"])) /*  İsset İle Veri Girilmiş mi kontrol ediyorum  */
  {

    if($_POST["email"]=="admin"  ||$_POST["email"]=="batu" || $_POST["sifre"]=="b190758x" || $_POST["sifre"]=="1907") /*    Kullanıcı adım adminse şifremde b190758x se giriş yapabileyim demek   */
    {
      $_SESSION['user']=$_POST["email"];   /*  Giriş Bilgimizi Session un Kgiris değerine attım  */
      header("location:index.php"); /*    Verileri Alıp Bilgiler Doğruysa beni index.php ye göndermesi için header ile locasyon verdim */
    }

    else{
          echo "<script> alert('Kullanıcı Adı Veya Şifreniz Yanlış Lütfen Doğru Bilgileri Giriniz !') </script>";
    }

  }





?>
