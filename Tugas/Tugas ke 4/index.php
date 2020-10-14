<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pemrograman Web</title>
    <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>

<?php
$nama = "Ade Husni Mubarrok";
?>

<section>
    <!--Navigasi-->
    <nav>
        <!--Logo-->
        <a href="#" class="logo"> <?php echo $nama ?> </a>
        <!--Menu-->
        <ul>
            <li><a href="#" class="home"> Home </a></li>
            <li><a href="#" class="about"> About </a></li>
            <li><a href="#" class="portofolio"> Portofolio </a></li>
            <li><a href="#" class="kontak"> Contact </a></li>
        </ul>
    </nav>
    <!--Text Box-->
    <div class="textbox">
        <p>Halo, disana !</p>
        <p>Saya <?php echo $nama?></p>
        <p>Saya adalah mahasiswa UPN</p>
        <button class="hubsaya">Hubungi Saya Yuk</button>
        <button class="downsaya">Ingin tau pendidikan saya?</button>
    </div>
    <!--Model-->
    <img src="images/model2.jpg" class="model" alt="model">
</section>
<!--About Section-->
<section>

    <div class="tentangsaya">
        <!--Image-->
        <img src="images/model2.jpg">
        <!--Tentang Saya-->
        <div class="tentangsayatext">
            <p> Tentang Saya </p>
            <p> <?php echo $nama?></p>
            <p> Ade Husni Mubarrok, ya , ia adalah saya adalah seorang mahasiswa Teknik Informatika di UPN "Veteran" Jawa Timur angkatan 2018.
                Saya orang yang yang pantang menyerah dan selalu memiliki goals-goals yang harus saya raih ke depannya.
                Saya adalah orang yang outgoing dan dapat menyesuaikan diri dengan lingkungan baru dengan cepat.
                Walahpun saya sedang menjalankan bisnis, menjadi programmer adalah cita-cita utama saya. Itulah mengapa saya berkuliah di jurusan Teknik Informatika.</p>
            <p> lorem ipsum dolor sit amet lur</p>
            <button> Hire Me</button>
            <button> Download CV </button>
        </div>
    </div>

    <div class="service">
        <!--Deskripsi Text-->
        <div class="servicetext">
            <p>Services</p>
            <p>Pengalaman saya</p>
            <p> Pengalaman saya dalam 3 bidang yaitu design,iot,photography yang menjadikan saya pribadi seperti sekarang. </p>
        </div>
        <!--box-->
        <div class="boxcontainer">
            <!--box class-->
            <div class="box1">
                <span> 1 </span>
                <p class="heading"> Web Design </p>
                <p class="details">Mendesain web dengan kriteria ya yang biasa saja.</p>
                <button>Read Mode</button>
            </div>
            <div class="box2">
                <span> 2 </span>
                <p class="heading"> IoT Enthusiast </p>
                <p class="details">Membuat projek tentang raspberry pi, ex: Pihole,Piserver,Piwebcam,Picctv.</p>
                <button>Read Mode</button>
            </div>
            <div class="box3">
                <span> 3 </span>
                <p class="heading"> Photography & Videography </p>
                <p class="details">Pernah menjadi director dalam film dsylexia.</p>
                <button>Read Mode</button>
            </div>
        </div>
    </div>

    <div class="kontaksaya">
        <p>Ada Projek dari kamu?</p>
        <button> Hubungi saya</button>
    </div>
    <footer>
        <p><?php echo $nama ?></p>
        <p>Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500an, saat seorang tukang cetak yang tidak dikenal mengambil sebuah kumpulan teks dan
            mengacaknya untuk menjadi sebuah buku contoh huruf.</p>
        <!--Social Media-->
        <div class="social-icons">
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
        </div>

        <p class="copyright">Dilisensikan Oleh <?php echo $nama?></p>
    </footer>
</section>

</body>
</html>