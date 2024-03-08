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

    $tanggal = Date('d');
    $bulan = Date('F');


    function getCurrentTime()
    {
        // Set zona waktu sesuai kebutuhan
        date_default_timezone_set('Asia/Jakarta'); // Contoh: Asia/Jakarta

        // Mendapatkan waktu saat ini dalam format jam dan menit
        $currentTime = date('H:i A');

        return $currentTime;
    }
    $currentTime = getCurrentTime();



    ?>


    <div class="">
        <!-- header -->
        <div class="header ps-2 pe-2 d-flex justify-content-between ">

            <div class=" title ">
                <h1 class="fs-3 lh-1">Jurusan Elektronika</h1>

                <h2 class="fs-4">Fakultas Teknik</h2>
            </div>

            <div class="right d-flex   ">

                <div class="jam  me-5 m-auto ">
                    <div class=" jam-bg rounded p-0 text-wrap d-flex" style="width: 10rem;">
                        <div class=" tgl-bg   rounded-start me-2  text-wrap" style="width: 6rem;">
                            <p class="fs-5   pt-1 text-center"><?= $tanggal  ?></p>
                            <p class="fs-6  text-center"><?= $bulan ?></p>
                        </div>
                        <h2 class="title-jam fs-3  text-center  pe-2 pt-1"><?= $currentTime ?></h2>
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
                        <div class="text-center  mb-4"><svg xmlns="http://www.w3.org/2000/svg" width="50" fill="currentColor" class="bi bi-0-circle-fill" viewBox="0 0 16 16">
                                <path d="M8 4.951c-1.008 0-1.629 1.09-1.629 2.895v.31c0 1.81.627 2.895 1.629 2.895s1.623-1.09 1.623-2.895v-.31c0-1.8-.621-2.895-1.623-2.895" />
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-8.012 4.158c1.858 0 2.96-1.582 2.96-3.99V7.84c0-2.426-1.079-3.996-2.936-3.996-1.864 0-2.965 1.588-2.965 3.996v.328c0 2.42 1.09 3.99 2.941 3.99" />
                            </svg></div>
                        <div class="text-center">28 C</div>

                    </div>

                    <div class="besok m-auto ">
                        <div class="fs-3 mb-3 fw-bold ">Besok</div>
                        <div class="text-center mb-4"><svg xmlns="http://www.w3.org/2000/svg" width="50" fill="currentColor" class="bi bi-0-circle-fill" viewBox="0 0 16 16">
                                <path d="M8 4.951c-1.008 0-1.629 1.09-1.629 2.895v.31c0 1.81.627 2.895 1.629 2.895s1.623-1.09 1.623-2.895v-.31c0-1.8-.621-2.895-1.623-2.895" />
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-8.012 4.158c1.858 0 2.96-1.582 2.96-3.99V7.84c0-2.426-1.079-3.996-2.936-3.996-1.864 0-2.965 1.588-2.965 3.996v.328c0 2.42 1.09 3.99 2.941 3.99" />
                            </svg></div>
                        <div class="text-center">28 C</div>
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