<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Yazılım Okulu</title>
    <link rel="stylesheet" href="owl/owl.carousel.min.css">
<link rel="stylesheet" href="owl/owl.theme.default.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com//css2?family=Nunito&display=swap" rel="stylesheet">
  <!--  Font awesome Kullanmak için yönlendirme ! -->   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <section id="menu">     <!--  Menü Alanı İçin Section ile Üst Bölüm Tanımlama  -->
        <div id="logo">FİNAL PROJEM</div> <!--  LOGOYU OLUŞTURMAK İÇİN KURULAN DİV   -->
        <nav>
            <a href="index.php"><i class="fa-solid fa-house ikon"></i>Anasayfa</a> <!-- Menü Alanını A Etiketleri İle Nav içine Koydum Bootstrap İle İcon Ekleme Yaptım -->
            <a href=""><i class="fa-solid fa-circle-info ikon"></i>Hakkımızda</a>
            <a href=""><i class="fa-solid fa-user-graduate ikon"></i>Eğitimler</a>
            <a href=""><i class="fa-solid fa-user-plus ikon"></i>Ekip Arkadaşlarımız</a>
            <a href=""><i class="fa-solid fa-map-pin ikon"></i>İletişim</a>
        </nav>
    </section>

    <section id="anasayfa">
        <div id="black">

        </div>
        <div id="icerik">   <!--  İÇERİKLERİN YAZILACAĞI KISMIN BAŞLANGIÇ ALANI !!     -->
            <h2>Yazılım Okulu</h2>
            <hr width="300" align="left"> <!-- HR KOYMA SEBEBİM YAZILIM OKULU YAZISININ ALTINA ÇİZGİ ÇEKMEK İÇİN  Soldan hizali çizgi oluşturmak için left-300 koydum     -->
            <p>Bu Okulda Size Profosyonel Bir Şekilde Yazılım Dersleri Verilmekte Olup Bu Okuldan Mezun Olduğunuzda Sizlerde Birer Yazılımcı Olarak İşe Başlayabilirsiniz.</p>
        </div>
    </section>

    <section id="hakkimizda">
        <h3>Hakkımızda</h3>
        <div class="container"> <!--   HAKKIMIZDA KISMININ KAPSAYICI DİVİ CONTAİNER !    -->
            <div id="sol"> <!--     HAKKIMIZDA KISMININ SOL TARAFININ DİVİ                -->
                <h5 id="h5sol">OWNER BY BATUHAN YALÇIN ! </h5>
            </div>  <!--            HAKKIMIZDA KISMININ SOL TARAFIN DİV BİTİŞ ALANI !             -->
            <div id="sag">  <!--    HAKKIMIZDA KISMININ SAĞ TARAFININ DİV BAŞLANGIÇ ALANI !                                                                -->
                <span>YAZILIM NEDEN ÖNEMLİDİR ? </span>
                <p id="psag"> <br><br> Bizler İnsanları Flutter Olma Yönünde Daha İleriye Taşıyan Kurumsal Bir Firmayız <br> Web Tarafında Kod Yazmak Kolay Gibi Görülse de Bir Çok Zor Yönleri Vardır.<br>Bizler İse Profosyonel Kadromuzla verdiğimiz Eğitimler İle Bu Zorluğu Daha Kolay Hale Getiriyoruz.</p>


            </div>          <!--    HAKKIMIZDA KISMININ SAĞ TARAFININ DİV BİTİŞ ALANI !                                                     -->
            <img src="resim/arkaplan6.jpg" alt="" class="birinciimg ikinciimg">

            <p id="pson">Günümüzde Teknolojinin İlerlemesiyle Birlikte Artık Herkes Cep Telefonu Bilgisayar Tablet Gibi Elektronik Cihazlara Sahip Oldu. <br> Bu Bir İhtiyaçtan Fazlası haline geldi. Yazılım ise tam olarak bu noktada devreye girdi ve insanların bunları kullanmasını kolaylaştırdı.</p>


        </div>
    </section>

    <section id="egitimler">
        <div class="container">

            <h3>Eğitimler</h3>

            <div class="owl-carousel owl-theme" data-merge="1.5">
                   <!--   KARTLARI OLUŞTURMAK İÇİN KULLANDIĞIM DİV -->
                <div class="kart item" data-merge="1.5"> <!--       Data Merge 1.5 ile Kartların arasındaki boşlukları düzenledim öncesinde iç içeydi    -->
                    <img src="resim/r7.jpg" alt="" class="birinciimg">
                    <h5 class="baslikkart">HTML CSS JS PHP Eğitimi</h5>
                    <p class="kartp">HTML Ve CSS Eğitimi Alarak Artık Sizde Web Sitesi Tasarlayabilirsiniz.</p>
                </div>

               
               
                    <!--   KARTLARI OLUŞTURMAK İÇİN KULLANDIĞIM DİV -->
                    <div class="kart item" data-merge="1.5">
                        <img src="resim/r2.jpg" alt="" class="birinciimg">
                        <h5 class="baslikkart">MYSQL İle Veri Tabanı Eğitimi</h5>
                        <p class="kartp">MYSQL İle Veri Tabanı Eğitimi Alarak Kurduğunuz Web Sitelerini Bağlayabilirsiniz.</p>
                    </div>

                   
                        <!--   KARTLARI OLUŞTURMAK İÇİN KULLANDIĞIM DİV -->
                        <div class="kart item" data-merge="1.5">
                            <img src="resim/r3.jpg" alt="" class="birinciimg">
                            <h5 class="baslikkart">Java Eğitimi</h5>
                            <p class="kartp">Eclipse İle Java Eğitimi Alarak İstediğiniz Uygulamayı Oyunu Kolayça Geliştirebilirsiniz.</p>
                        </div>
        


             


            </div>

        </div>
    </section> <!---            EĞİTİMLER KISMI BİTİŞ !                    -->


    <!--                        EKİP KISMI BAŞLANGIÇ !                      -->
        <section id="ekip">
        <div class="container">
            <h3 id="ekiph3">Ekibimiz</h3>

            <div class="sutun-sol-sag">
                <img src="resim/sevval1.jpg" alt="" class="birinciimg oval">
                <h4 class="ekipisim">Şevval ORAN</h4>
                <p class="ekipp">Ekibimizin Senior Developer'ı Olmakla Birlikte Aynı Anda Profosyonel Eğitim Verir.</p>

            

                <div class="ekip-icon">
                    <a href="https://www.facebook.com/profile.php?id=100068530988193&locale=tr_TR"><i class="fa-brands fa-facebook sosyal"></i></a>
                    <a href="https://www.instagram.com/sevvalorann/"><i class="fa-brands fa-square-instagram sosyal2"></i></a>
                    <a href="https://www.youtube.com/@karanlikgunduz"><i class="fa-brands fa-youtube sosyal3"></i></a>
                </div>

            </div>


            <div class="sutun-sol-sag">
                <img src="resim/batu1.jpg" alt="" class="birinciimg oval">
                <h4 class="ekipisim">Batuhan YALÇIN</h4>
                <p class="ekipp">Ekibimizin DevOps Engineer'ı Olmakla Birlikte Aynı Anda Firmamızın Kurucusudur.</p>

            

                <div class="ekip-icon">
                    <a href="https://www.facebook.com/batuhan.yalcin.948/?locale=tr_TR"><i class="fa-brands fa-facebook sosyal"></i></a>
                    <a href="https://www.instagram.com/batuhan.yalcin58/"><i class="fa-brands fa-square-instagram sosyal2"></i></a>
                    <a href="https://www.youtube.com/channel/UCf1kMscLJRU0La8qjeK8eAw"><i class="fa-brands fa-youtube sosyal3"></i></a>
                </div>

            </div>



            <div class="sutun-sol-sag">
                <img src="resim/oguz1.jpg" alt="" class="birinciimg oval">
                <h4 class="ekipisim">Oğuz AYDIN</h4>
                <p class="ekipp">Ekibimizin En Boş Adamı Olup Ne Yaptığı Henüz Bilinmiyor.</p>

            

                <div class="ekip-icon">
                    <a href="https://www.facebook.com/profile.php?id=100011545813107&locale=tr_TR"><i class="fa-brands fa-facebook sosyal"></i></a>
                    <a href="https://www.instagram.com/oguz.aydn0/"><i class="fa-brands fa-square-instagram sosyal2"></i></a>
                    <a href="https://www.youtube.com/watch?v=k4pg5wh5oYo"><i class="fa-brands fa-youtube sosyal3"></i></a>
                </div>

            </div>



        </div>
        </section>
                   
                   
                        <!--       İLETİŞİM KISMI BAŞLANGIÇ !     -->

        <section id="iletisim">
            <div class="container">
                <h3 id="h3iletisim">İletişim</h3>
                <form action="index.php" method="post">
                <div id="iletisimopak">
                    <div id="formgrup">
                        <div id="solform">
                            <input type="text" name="isim" placeholder="Adınızı Ve Soyadınızı Giriniz." required class="form-control">
                            <input type="text" name="tel" placeholder="Telefon Numaranızı Giriniz" required class="form-control">
                        </div>
                        <div id="sagform">
                            <input type="email" name="mail" placeholder="Mail Adresinizi Giriniz." required class="form-control">
                            <input type="text" name="konu" placeholder="Bir Konu Başlığı Giriniz." required class="form-control">
                        </div>

                        <textarea name="mesaj" id="" cols="30" rows="10" placeholder="Lütfen İletmek İstediğiniz Mesajınızı Giriniz" required class="form-control"></textarea>
                        <input type="submit" value="Gönder">

                    </div>
                    <div class="adres">

                        <h4 id="adresbaslik">Adresimiz : </h4>
                        <p class="adresp">Abdurrahman Gazi Mah.</p>
                        <p class="adresp">Bahçelievler Caddesi</p>
                        <p class="adresp">Çeltik Sokak No:2/Sancaktepe</p>
                        <p class="adresp">0212 555 79 79</p>
                        <p class="adresp">Email : YazılımOkulu@YazılımOkulu.com</p>
                    </div>
                </div>
                </form>
                <footer>
                    <div id="copyright">2024 Tüm Hakları Saklıdır.</div>
                    <div id="sosyalfooter">
                        <a href="https://www.facebook.com/batuhan.yalcin.948/?locale=tr_TR"><i class="fa-brands fa-facebook sosyal"></i></a>
                    <a href="https://www.instagram.com/batuhan.yalcin58/"><i class="fa-brands fa-square-instagram sosyal2"></i></a>
                    <a href="https://www.youtube.com/channel/UCf1kMscLJRU0La8qjeK8eAw"><i class="fa-brands fa-youtube sosyal3"></i></a>
                    </div>
                   <a href="#menu"><i class="fa-solid fa-up-long " id="yukaributonu"></i></a>
                </footer>
            </div>
        </section>





    <!--   JAVASCRİPT İLE EĞİTİMLER KUTULARINI YAN YANA YAPTIM JS BAĞLAMA KODU !  -->
    <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js" integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>
    <script src="owl/owl.carousel.min.js"></script> <!--   JAVASCRİPTTEN ALDIĞIM YARDIM KODU -->
    <script src="owl/script.js"></script>
</body>
</html>


<?php
    
    include("baglanti.php");

    if(isset ($_POST["isim"], $_POST["tel"], $_POST["mail"], $_POST["konu"] , $_POST["mesaj"] ) )   /*   Burada Veri Var mı dedim dolu olup olmama durumu */
    {
        $adsoyad=   $_POST["isim"];     /*       Form Elemanlarının İçindeki değerleri Değişkenlere Atadım Burada        */
        $telefon=   $_POST["tel"];
        $email=     $_POST["mail"];
        $konu =     $_POST["konu"];
        $mesaj=     $_POST["mesaj"];

             /* MYSQL Veri Tabanından İnsert İnto ile veri ekleme */ 
      $ekle= "INSERT INTO iletisim (adsoyad, telefon, email, konu, mesaj) VALUES ('".$adsoyad."', '".$telefon."','".$email."','".$konu."','".$mesaj."') ";
        
      if($baglan->query($ekle)===TRUE)
      {
        echo "<script>alert('Mesajınız Başarı İle Gönderilmiştir.')</script>"; /*     PHP İle Yapsaydım Mesaj sitemin en altında kötü görüntü olacaktı oyüzden js ile yaptm   */
      }
      else{
        echo "<script>alert('Mesajınız Gönderilirken Bir Hata Oluştu.')</script>"; 
      }

    }
?>

