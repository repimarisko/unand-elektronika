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


    }

    * {
        margin: 0;
        padding: 0;
        text-decoration: none;
        box-sizing: border-box;
    }

    .container-fluid .header {

        background-color: grey;


    }

    .header .title {}

    .header .title h1 {
        color: gold;
    }

    .header .title h2 {
        border-top: 1px solid gold;
        display: inline-block;
        color: blue;
    }

    .header .right {
        display: inline-block;
        gap: 0;
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
        height: 100px;

    }

    .conten .conten-satu {
        width: 70%;
        background-color: var(--primary-color);

    }

    .conten .conten-dua {
        width: 30%;


    }

    .kotak-conten-satu svg {
        position: absolute;
        z-index: -99;
        width: 65%;
    }

    .kotak-conten-dua {}

    .cuaca {}

    .footer {
        height: 40px;

    }
</style>

<body>



    <div class="container-fluid">
        <!-- header -->
        <div class="header d-flex justify-content-between ">

            <div class=" title ">
                <h1 class="fs-3 lh-1">Jurusan Elektronika</h1>

                <h2 class="fs-4">Fakultas Teknik</h2>
            </div>

            <div class="right d-flex  ">

                <div class="jam  ">



                    <div class=" bg-danger rounded p-0 text-wrap d-flex" style="width: 10rem;">
                        <div class=" bg-primary  rounded-start me-2  text-wrap" style="width: 6rem;">
                            <h1 class="fs-3   pt-1 text-center">00</h1>
                            <!-- <p class="fs-6 text-center">March</p> -->
                        </div>
                        <h1 class="fs-3 text-white text-center  pe-2 pt-1">00:00</h1>
                        <!-- <p class="fs-6 text-center">March</p> -->
                    </div>


                </div>
                <div class="logo">
                    <div class="badge badge-primary text-wrap" style="width: 10rem;">
                        <img src="img/logo-unand.png" alt="" width="45">
                        <!-- <p class="fs-6 text-center">March</p> -->
                    </div>
                </div>
            </div>


        </div>
        <!-- header -->
        <!--  content-->
        <div class="conten mt-2 d-flex ">
            <div class="conten-satu">
                <div class="kotak-conten-satu">

                    <div class="conten-satu-title">
                        <div class=" fs-3 ms-4 text-white">Fakultas Teknik</div>
                        <div class=" fs-6 ms-4 text-white">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</div>
                    </div>

                </div>
                <div class="kotak-conten-dua">

                    <div class="row justify-content-start mt-4">
                        <div class="col-md-8 ">
                            <div class="embed-responsive embed-responsive-16by9">
                                <video id="video" width="152%" src="video/mov_bbb.mp4" class="embed-responsive-item" playsinline controls autoplay loop>

                                </video>
                            </div>


                        </div>
                    </div>
                </div>

            </div>
            <div class="conten-dua ">

                <div class="cuaca d-flex mb-4 pb-2 pe-2 ps-2">
                    <div class="sekarang me-5 ">
                        <div class="fs-3 mb-3 fw-bold ">Sekarang</div>
                        <div class="text-center  mb-4"><svg xmlns="http://www.w3.org/2000/svg" width="50" fill="currentColor" class="bi bi-0-circle-fill" viewBox="0 0 16 16">
                                <path d="M8 4.951c-1.008 0-1.629 1.09-1.629 2.895v.31c0 1.81.627 2.895 1.629 2.895s1.623-1.09 1.623-2.895v-.31c0-1.8-.621-2.895-1.623-2.895" />
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-8.012 4.158c1.858 0 2.96-1.582 2.96-3.99V7.84c0-2.426-1.079-3.996-2.936-3.996-1.864 0-2.965 1.588-2.965 3.996v.328c0 2.42 1.09 3.99 2.941 3.99" />
                            </svg></div>
                        <div class="text-center">28 C</div>

                    </div>

                    <div class="besok ms-5 ">
                        <div class="fs-3 mb-3 fw-bold ">Besok</div>
                        <div class="text-center mb-4"><svg xmlns="http://www.w3.org/2000/svg" width="50" fill="currentColor" class="bi bi-0-circle-fill" viewBox="0 0 16 16">
                                <path d="M8 4.951c-1.008 0-1.629 1.09-1.629 2.895v.31c0 1.81.627 2.895 1.629 2.895s1.623-1.09 1.623-2.895v-.31c0-1.8-.621-2.895-1.623-2.895" />
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-8.012 4.158c1.858 0 2.96-1.582 2.96-3.99V7.84c0-2.426-1.079-3.996-2.936-3.996-1.864 0-2.965 1.588-2.965 3.996v.328c0 2.42 1.09 3.99 2.941 3.99" />
                            </svg></div>
                        <div class="text-center">28 C</div>
                    </div>
                </div>

                <div class="status">
                    <div class="fs-3 text-center fw-bold">Status Pimpinan</div>
                    <div class="table-responsive table-bordered ">
                        <table class="table table-striped table-hover table-borderless table-primary align-middle">
                            <thead class="table-light text-center">

                                <tr>
                                    <th>Jabatan</th>
                                    <th>Keterangan</th>
                                    <th>Waktu</th>
                                </tr>
                            </thead>
                            <tbody class="table-group-divider text-center">
                                <tr class="table-primary">
                                    <td scope="row">Item</td>
                                    <td>Item</td>
                                    <td>Item</td>
                                </tr>
                                <tr class="table-primary">
                                    <td scope="row">Item</td>
                                    <td>Item</td>
                                    <td>Item</td>
                                </tr>
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
        <div class="footer fixed-bottom bg-black">
            <marquee behavior="" direction="">SELAMAT DATANG DI FMIPA UNAND!!!SELAMAT DATANG DI FMIPA UNAND!!!SELAMAT DATANG DI FMIPA UNAND!!!</marquee>
        </div>
        <!-- footer -->


    </div>


    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>


    <script>
        window.onload = function() {
            document.getElementById('video').play();

        }
    </script>
</body>

</html>