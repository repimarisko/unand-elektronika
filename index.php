<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap dengan Package Manager</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/bootstrap/css/style.css">
</head>

<body>
    <!-- header -->
    <div class="container-fluid" id="container">
        <div class="header">

            <div class="p-1    ">
                <div class="row">
                    <div class="col">
                        <h2 class="fs-2 logo ">Jurusan Elektronika</h2>

                        <h3 class="fs-4 logo-title">Fakultas Teknik</h3>
                    </div>
                    <div class="col-md-auto  m-auto ">
                        <div class="date-times d-flex ">
                            <div class="date p-1 bg-warning border rounded-start   ">
                                <h1 class="text-center fs-3 mb-0   ">01</h1>
                                <p class="fs-6 text-center  ">March</p>
                            </div>
                            <div class="times p-2 text-center  bg-success border rounded-end ">
                                <div class="time-container">
                                    <h1 class="text-center fs-3 m-auto text-light   ">00.00<span class="fs-5 ">am</span></h1>

                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col col-lg-2  ">
                        <div class="img text-center "><img src="img/logo-unand.png" width="70px"></div>
                    </div>
                </div>
            </div>

        </div>


        <!-- header -->
        <!-- conten -->
        <div class="content   ">
            <div class="row    ">

                <div class="col-8  ">

                    <div class="container">
                        <div class="content">
                            <div class="tagline">
                                <h2>Fakultas Teknik</h2>
                                <p>Universitas Andalas Fakultas Teknik apa siapa yangmana dimana rumahnya</p>
                            </div>
                        </div>
                        <div class="svg-fak">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                                <path fill="#192F59" width="800px" fill-opacity=".8" d="M0,224L120,202.7C240,181,480,139,720,144C960,149,1200,203,1320,229.3L1440,256L1440,0L1320,0C1200,0,960,0,720,0C480,0,240,0,120,0L0,0Z"></path>
                            </svg>
                        </div>
                        <div class="kotak">
                            <iframe width="500" height="315" src="https://www.youtube.com/embed/g9calKhBslQ" title="UNAND Mendaleka" frameborder="0" allowfullscreen></iframe>

                        </div>
                    </div>





                </div>

                <div class="col-4  ">

                    <div class="container p-2 text-center ">
                        <div class="row">
                            <div class="col">
                                <h2>Sekarang</h2>
                            </div>
                            <div class="col">
                                <h2>Hari Ini</h2>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>

        <!-- conten -->
    </div>
    <div class="container-fluid  footer fixed-bottom">

        <p class="text-center" id="gerak">

            <marquee behavior="" direction="">SELAMAT DATANG DI FMIPA UNAND!!!SELAMAT DATANG DI FMIPA UNAND!!!SELAMAT DATANG DI FMIPA UNAND!!!</marquee>
        </p>
    </div>




    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</body>

</html>