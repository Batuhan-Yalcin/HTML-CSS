<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giriş Formu</title>
    <style>

        *{
            margin : 0;
            padding : 0;
        }

        body {
            background-image: url("resim/arkaplan4.jpeg");
            background-position: center; /*     Resmin Orta Kısmını Merkeze Almak İçin Kullandım */
            background-size: cover;     /*  Resmi  alanımın içerisine sığdırmak için kullandım */
            background-attachment: fixed;  /*   Görsel maus ile aşşağı kaydırıldığında sabit kalması için    */
            text-align:justify;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .login-container {
            opacity: 0.9;
            background-image: url("resim/formarkaplan.jpg");
            background-color: orange;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .login-container h2 {
            margin-bottom: 20px;
        }
        .login-container input[type="text"], 
        .login-container input[type="password"] {
            width: 50%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .login-container input[type="submit"] {
            margin-bottom : 10px;
            margin : 30px;
            background-color: orange;
            color: white;
            border: none;
            padding: 10px;
            cursor: pointer;
            border-radius: 6px;
        }
        .login-container input[type="submit"]:hover {
            background-color: red;
        }
        h2{
            text-align: justify;
            color: yellow;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Giriş Yap</h2>
        <form action="giris.php" method="POST">
            <input type="text" name="kAdi" placeholder="Kullanıcı Adı" required>
            <input type="password" name="sifre" placeholder="Şifre" required>
            <input type="submit" value="Giriş Yap">
        </form>
    </div>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $kAdi = $_POST['kAdi'];
        $sifre = $_POST['sifre'];

        if ($kAdi == 'admin' && $sifre == '1907') {
            header('Location: index.php');
            exit();
        } else {
           /* echo '<p style="color: red; text-align: center;">Kullanıcı adı veya şifre yanlış!</p>'; */
            echo "<script> alert('Kullanıcı Adı Veya Şifreniz Yanlış !') </script>";
        }
    }
    ?>
</body>
</html>