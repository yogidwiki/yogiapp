<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- BOOTSTRAP ICON -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>
 
<body>
    <!-- NAVBAR -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark border-bottom" style="background-color: #531010;">
        <div class="container">
            <a class="navbar-brand" href="#">FILMKUY</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#"><i class="bi bi-house-door"></i>
                            Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#listFilm"><i class="bi bi-card-checklist"></i> List Film</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#sinopis"><i class="bi bi-card-text"></i> Sinopis</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END NAVBAR -->
    <!-- BANNER -->
    <section id="banner">
        <div class="container banner-content  text-center">
            <div class="col-md-8">
                <h1>NONTON <span>KUY</span> <i class="bi bi-camera-reels"></i></h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus sed repellendus odit doloremque error.
                    Fuga impedit mollitia ipsam ducimus consequatur. </p>
                <div class="row d-flex justify-content-center">
                    <div class="col-md-6 mt-2">
                        <form class="d-flex " role="search">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-warning " type="submit">Search</button>
                        </form>
                    </div>
                </div>
 
            </div>
 
        </div>
 
 
    </section>
    <!-- BANNER -->
 
    <section id="listFilm">
        <div class="container py-5 text-center">
            <h1 class="title-section">LIST FILM</h1>
            <div class="row d-flex justify-content-center">
                @foreach($data as $dt)
                <div class="col-md-2 mb-3">
                    <div class="card">
                        <img src="{{$dt->img_url}}" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <h5 class="card-title">{{$dt->judul}}</h5>
                            <a href="" class="btn btn-danger">Lihat Film</a>
                        </div>
                    </div>
                </div>
                @endforeach
 
            </div>
 
 
 
 
 
 
            <button class="btn btn-danger mt-5">Lihat Lebih banyak FILM <i class="bi bi-arrow-right-short"></i></button>
        </div>
    </section>
 
    <!-- SINOPSIS -->
    <section id="sinopsis">
        <div class="container py-5">
            <h1 class="title-section text-center">LIST FILM</h1>
            <div class="row d-flex justify-content-center ">
                <div class="col-md-6">
                    <div class="sinopsis-text">
                        <h1>Gundala</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, quisquam, deleniti fugit
                            perferendis assumenda, libero earum eum enim tempore ducimus numquam necessitatibus. Fugiat
                            omnis quasi a doloremque voluptatem impedit voluptates vel quia magnam tempora ea quos fuga
                            explicabo deleniti maxime eius eum nobis consectetur quisquam, qui in porro sequi
                            blanditiis?</p>
                        <div class="mt-5">
                            <button class="btn btn-danger">NONTON</button>
                            <button class="btn btn-outline-secondary">DETAIL FILM</button>
                        </div>
 
                    </div>
 
                </div>
                <div class="col-md-6">
                    <div class="card-sinopsis text-center">
                        <img src="https://siar.com/wp-content/uploads/2019/08/Poster-film-Gundala-sumber-gambar-FemIndonesia.jpeg"
                            alt="...">
                    </div>
 
                </div>
            </div>
            <div class="row d-flex justify-content-center mt-5 ">
                <div class="col-md-6">
                    <div class="sinopsis-text">
                        <h1>Gatot kaca</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, quisquam, deleniti fugit
                            perferendis assumenda, libero earum eum enim tempore ducimus numquam necessitatibus. Fugiat
                            omnis quasi a doloremque voluptatem impedit voluptates vel quia magnam tempora ea quos fuga
                            explicabo deleniti maxime eius eum nobis consectetur quisquam, qui in porro sequi
                            blanditiis?</p>
                        <div class="mt-5">
                            <button class="btn btn-danger">NONTON</button>
                            <button class="btn btn-outline-secondary">DETAIL FILM</button>
                        </div>
 
                    </div>
 
                </div>
                <div class="col-md-6">
                    <div class="card-sinopsis text-center">
                        <img src="https://siar.com/wp-content/uploads/2019/08/Poster-film-Gundala-sumber-gambar-FemIndonesia.jpeg"
                            alt="...">
                    </div>
 
                </div>
            </div>
        </div>
    </section>
    <!-- END SINOPSIS -->
    <!-- FOOTER -->
    <footer style="background-color: #531010;">
        <div class="container py-5">
            <div class="row d-flex justify-content-center text-center text-white">
                <div class="col-md-8">
                    <h1>INI FOOTER</h1>
                    <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt, laboriosam culpa. Saepe velit
                        modi sint, molestias assumenda harum tenetur nisi?</P>
                </div>
            </div>
        </div>
    </footer>
    <!-- END FOOTER -->
 
 
 
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
</body>
 
</html>