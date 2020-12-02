alert ("Selamat Datang Di website kita");

$(document).ready(function (){
    var kotax = $('<li>kotaxu</li>');
    $('.pilihankota').prepend(kotax);

    var subjudul = $('<h2>Pilih destinasimu ke luar kota yuks</h2>');
    $('.pilihankota').before(subjudul);

    var lptas = $('<li>ptaszi</li>');
    $('.pilihankota').append(lptas);

    $('#BSurabaya').on('click', function (){
        alert('Saya mempunyai kota surabaya');
    });

    $('#BSurabayaDel').on('click', function (){
        $('.Kota_Pahlawan').remove();
        alert('Yah Kamu goblok :(');
    });

    $('#jumlahpesanan').on('keypress', function (){

    });

    $('#Bsbyhide').on('click', function (){
        $('.Kota_Pahlawan').fadeOut();
    });

    $('#toggle').on('click', function (){
        $('.Kota_Pahlawan').slideToggle();
    });

    $('#Blue').on('click', function (){
        $('.Kota_Pahlawan').removeClass('merah');
        $('.Kota_Pahlawan').addClass('biru');
    });

    $('#Red').on('click', function (){
        $('.Kota_Pahlawan').removeClass('biru');
        $('.Kota_Pahlawan').addClass('merah');
    });

    $('.imagedescription').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 3
    });
});