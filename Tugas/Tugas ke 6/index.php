<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pemrograman Web</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="slick-1.8.1/slick/slick.css">
    <link rel="stylesheet" href="slick-1.8.1/slick/slicktheme.css">
    <script src="Jquery/jquery-3.5.1.min.js"></script>
    <script>
        $(document).ready(function (){
            $('#provinsi').change(function (){
                var provinsi_id = $(this).val();

                $.ajax({
                   type: 'POST',
                    url: 'kota.php',
                    data: 'prov_id='+provinsi_id,
                    success: function (response){
                       $('#kota').html(response);
                    }
                });
            })
        });
    </script>
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
    <img id="judulimg" src="images/model2.jpg" class="model" alt="model">
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
        <p>Ada Projek dari kamu?</p
    <div class="container">
        <?php
        if(isset($_GET['pesan'])){
            $pesan = $_GET['pesan'];
            if($pesan == "sukses"){
                echo "Data berhasil di input.";
            }else{
                echo "Data gagal di input.";
            }
        } ?>
        <form action="kirimpesan.php" method="POST">
            <label for="nama">Nama</label>
            <input type="text" id="nama" name="nama" placeholder="Masukkan nama anda" required>

            <label for="Provinsi">Provinsi</label>
            <?php include "connection.php";
            $sql_provinsi = mysqli_query($koneksi, 'select * from provinsi');
            ?>
            <select name="provinsi" id="provinsi">
                <option>Pilih Provinsi anda</option>
                <?php while ($row_provinsi = mysqli_fetch_array($sql_provinsi)) {?>
                    <option value="<?php echo $row_provinsi['id'] ?>">
                        <?php echo $row_provinsi['nama_prov']?>
                    </option>
                <?php } ?>
            </select><br />
            <label for=""kota >Kota</label>
            <select name="kota" id="kota">
                <option>Pilih Kota anda</option>
                <select></select>
            </select>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Masukkan email anda" required>

            <label for="pesan">Pesan</label>
            <textarea id="pesan" name="pesan" placeholder="Tulis pesan disini" style="height:200px" required></textarea>

            <button id="kirim"> Kirim </button>
        </form>
    <br>
    </div>
    <div class="service">
        <h1>JQUERY DOM</h1>
        <ul class="imagehtml">
            <li class="imagedescription">
                image
                <img src="images/IMG_1170.JPG">
                <img src="images/IMG_1171.JPG">
                <img src="images/IMG_1173.JPG">
                <img src="images/IMG_1174.JPG">
            </li>
        </ul>
    </div>

        <script src="jquery-3.5.1.min.js"></script>
        <script src="index.js" charset="UTF-8"></script>
        <script src="slick-1.8.1/slick/slick.js"></script>

</body>
</html>

