<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<style>
    :root {

        --primary-color: #192F59;
        --secondary-color: #007BFF;
        --green-color: #008B4A;
        --yellow-color: #F4F27E;
        --yellow-alt: #FFF5C2;
        --gold--: gold;
        --lime--: limegreend;


    }

    * {
        margin: 0;
        padding: 0;
        text-decoration: none;
        box-sizing: border-box;
    }

    .container-fluid .header {}

    .header .title {}

    .header .title h1 {
        color: var(--gold--);
    }

    .header .title h2 {
        border-top: 1px solid var(--gold--);
        display: inline-block;
        color: white;
    }

    .header .right {
        display: inline-block;

    }

    .header .right .logo {}

    .header {
        background-color: var(--primary-color);
    }

    .header .jam-kotak {
        line-height: .1;
        width: 70px;



    }


    .header .jam {

        margin: 10px;
        height: 40px;
    }

    .header .jam h1 {
        word-wrap: break-word;
    }



    .conten {
        width: 100%;

        height: 100%;

    }

    .conten .conten-satu {
        width: 70%;

        height: 550px;
        /* background-color: #e3e3e3; */
        margin: 5px;
    }

    .conten .conten-dua {
        width: 30%;
        padding: 10px;
        /* background-color: #e3e3e3; */
        height: 550px;
        margin: 5px;


    }

    .kotak-conten-satu {
        height: inherit;
    }



    .kotak-conten-dua {}

    .cuaca {}

    .footer {
        height: 40px;
        background-color: var(--primary-color);
        color: white;
        line-height: 40px;

    }

    .jam .jam-bg {
        background-color: white;


    }

    .jam-bg h2 {

        color: var(--primary-color);
    }

    .jam .tgl-bg {
        background: var(--green-color);
        color: white;

    }

    .conten-dua .status {}
</style>

<body>
    <?php

    $koneksi = mysqli_connect("localhost", "root", "", "db_informasi");
    $rows = mysqli_query($koneksi, "SELECT * FROM tb_data");



    function getCurrentTime()
    {
        // Set zona waktu sesuai kebutuhan
        date_default_timezone_set('Asia/Jakarta'); // Format huruf besar untuk zona waktu

        // Mendapatkan waktu saat ini dalam format jam, menit, tanggal, dan bulan
        $currentTime = date('h:i A');
        $tanggal = date('d');
        $bulan = date('F');

        // Mengembalikan nilai tanggal dan bulan dalam bentuk array
        return array(
            'time' => $currentTime,
            'date' => $tanggal,
            'month' => $bulan
        );
    }

    // Memanggil fungsi getCurrentTime() dan menyimpan hasilnya dalam variabel
    $currentData = getCurrentTime();

    // Mengakses nilai waktu, tanggal, dan bulan dari array yang dikembalikan oleh fungsi
    $currentTime = $currentData['time'];
    $tanggal = $currentData['date'];
    $bulan = $currentData['month'];

    // Pengaturan untuk koneksi ke API OpenWeatherMap
    $apiUrl = 'http://api.openweathermap.org/data/2.5/weather';
    $api_key = "93cddb2f189cf9e314ea67778cf1fe2b";

    // Kota yang ingin Anda dapatkan cuacanya
    $city = 'Padang';

    // URL lengkap untuk permintaan cuaca
    $urlsekarang = "http://api.openweathermap.org/data/2.5/weather?q=$city&appid=$api_key";
    $urlprediksi = "http://api.openweathermap.org/data/2.5/forecast?q=$city&appid=$api_key";

    // Melakukan permintaan ke API dan mendapatkan respons JSON
    $response = file_get_contents($urlsekarang);
    $hasil = file_get_contents($urlprediksi);

    // Mengonversi respons JSON menjadi array asosiatif
    $weatherData = json_decode($response, true);
    $prediksiData = json_decode($hasil, true);

    // Menampilkan data cuaca
    if ($weatherData && isset($weatherData['main'], $weatherData['weather'])) {
        $temperature = $weatherData['main']['temp'];
        $weatherDescription = $weatherData['weather'][0]['description'];
        $cuacasekarang = $weatherData['weather'][0]['main'];

        // echo "Cuaca di {$city}:<br>";
        $suhu = round($temperature - 273.15, 1) . " °C" . "<br>"; // Konversi ke Celcius

    } else {
    }
    if ($prediksiData && isset($prediksiData['list'][0]['main'], $prediksiData['list'][0]['weather'])) {
        $temperaturepre = $prediksiData['list'][0]['main']['temp'];
        $weatherDescriptionf = $prediksiData['list'][0]['weather'][0]['description'];


        $suhupredik = round($temperaturepre - 273.15, 1) . " °C<br>"; // Konversi ke Celcius

    } else {
        // echo "Tidak dapat mengambil data prediksi cuaca.";
    }
    if ($weatherDescription === "light rain") {
        $gambarcuaca = "img/light-rain.png";
    } elseif ($weatherDescription === "Clear sky") {
        $gambarcuaca = "img/sunny.png";
    } elseif ($weatherDescription === "Heavy rain") {
        $gambarcuaca = "img/heavy-rain.png";
    } else {
        $gambarcuaca = "img/cloudy.png";
    }


    if ($weatherDescriptionf === "light rain") {
        $gambarcuacap = "img/light-rain.png";
    } elseif ($weatherDescriptionf === "Clear sky") {
        $gambarcuacap = "img/sunny.png";
    } elseif ($weatherDescriptionf === "Heavy rain") {
        $gambarcuacap = "img/heavy-rain.png";
    } else {
        $gambarcuacap = "img/cloudy.png";
    }



    ?>


    <div class="">
        <!-- header -->
        <div class="header ps-2 pe-2 d-flex justify-content-between ">

            <div class=" title ">
                <h1 class="fs-3 lh-1">Jurusan Elektronika</h1>

                <h2 class="fs-4">Fakultas Teknik</h2>
            </div>

            <div class="right d-flex   ">

                <div class="jam  me-5  ">
                    <div class=" jam-bg rounded p-0 text-wrap d-flex">
                        <div class=" tgl-bg  p-1  rounded-start me-2  ">
                            <div class="text-center"><?= $tanggal ?></div>
                            <div class=""><?= $bulan ?></div>

                        </div>

                        <h2 class="title-jam fs-4  text-center m-auto pe-2 pt-1"><?= $currentTime ?></h2>
                        <!-- <p class="fs-6 text-center">March</p> -->
                    </div>


                </div>
                <div class="logo m-auto ">
                    <div class="badge badge-primary text-wrap">
                        <img src="img/logo-unand.png" alt="" width="45">
                        <!-- <p class="fs-6 text-center">March</p> -->
                    </div>
                </div>
            </div>


        </div>
        <!-- header -->
        <!--  content-->
        <div class="conten  mt-2  d-flex p-2 ">
            <div class="conten-satu rounded">
                <div class="kotak-conten-satu   ">

                    <div class="conten-satu-title">
                        <div class=" fs-3 ms-4 text-black">Fakultas Teknik</div>
                        <div class=" fs-6 ms-4 text-black">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</div>
                    </div>
                    <div class="embed text-center  mt-2 ms-4">
                        <video width="100%" muted autoplay loop>
                            <source src="video/mov_bbb.mp4" type="video/mp4">

                        </video>
                    </div>

                </div>
                <div class="kotak-conten-dua">

                </div>
            </div>
            <div class="conten-dua rounded ">

                <div class="cuaca d-flex mb-4 pb-2 pe-2 ps-2">
                    <div class="sekarang  m-auto ">
                        <div class="fs-3 mb-3 fw-bold ">Sekarang</div>
                        <div class="text-center  mb-4"><img src="<?= $gambarcuaca ?>" alt="" srcset=""></div>
                        <div class="text-center"><?= $suhu ?></div>

                    </div>

                    <div class="besok m-auto ">
                        <div class="fs-3 mb-3 fw-bold ">Besok</div>
                        <div class="text-center mb-4"><img src="<?= $gambarcuacap ?>" alt="" srcset=""></div>
                        <div class="text-center"><?= $suhupredik ?></div>
                    </div>
                </div>

                <div class="status  ">
                    <div class="fs-3 text-center fw-bold">Status Pimpinan</div>
                    <div class="table-responsive table-bordered ">
                        <table class="table table-striped table-hover table-borderless table-default align-middle" id="table">
                            <thead class=" text-center">

                                <tr>
                                    <th>Jabatan</th>
                                    <th>Keterangan</th>
                                    <th>Waktu</th>
                                </tr>
                            </thead>
                            <tbody class="table-group-divider text-center">
                                <?php
                                foreach ($rows as $row) {
                                    echo '<tr>
                                           
                                            <td>' . $row['jabatan'] . '</td>
                                            <td>' . $row['keterangan'] . '</td>
                                            <td>' . $row['waktu'] . '</td>
                                            
                                          </tr>';
                                }


                                ?>


                            </tbody>
                            <tfoot>

                            </tfoot>
                        </table>
                    </div>

                </div>
            </div>


        </div>

        <!--  content-->
        <!-- footer -->
        <div class="footer fixed-bottom ">
            <marquee behavior="" direction="">SELAMAT DATANG DI FMIPA UNAND!!!SELAMAT DATANG DI FMIPA UNAND!!!SELAMAT DATANG DI FMIPA UNAND!!!</marquee>
        </div>
        <!-- footer -->


    </div>


    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>


    <script>
        window.onload = function() {
            document.getElementById('video').play();

        }

        function table() {
            const xhttp = new XMLHttpRequest();
            xhttp.onload = function() {
                document.getElementById("table").innerHTML = this.responseText;
            }
            xhttp.open("GET", "app.php");
            xhttp.send();

        }
        setInterval(function() {
            table();

        }, 1000);
    </script>
</body>

</html>