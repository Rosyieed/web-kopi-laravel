<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Tempat Ngopi | Beranda</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
      crossorigin="anonymous"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Pacifico&family=Yanone+Kaffeesatz&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"
    />
    
  </head>

  <body>
    <div class="kontainer">
      <!-- NAVBAR -->
      <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
          <a
            class="navbar-brand-hover"
            style="text-decoration: none; font-size: 30px; color: white"
            href="#"
          >
            <span style="color: rgb(204, 135, 51)">Tempat</span> Ngopi</a
          >
          <button
            class="navbar-toggler bg-light"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a
                  class="nav-link active text-white"
                  aria-current="page"
                  href="#"
                  >Home</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link active text-white" href="#about">Tentang </a>
              </li>
              <li class="nav-item">
                <a class="nav-link active text-white" href="#menu">Menu</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active text-white" href="#contact">Kontak</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active text-white" href="logout">Logout</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- NAVBAR END -->

      <!-- Home Start -->
      <div
        id="home"
        class="bg-img p-5 text-center bg-image"
        style="
          background-image: linear-gradient(
              to bottom,
              rgba(0, 0, 0, 0),
              rgba(0, 0, 0, 0.93)
            ),
            url({{url('image/kopi3.jpg')}});
          background-repeat: no-repeat;
          background-size: cover;
        "
      >
        <div
          class="desk d-flex justify-content-start align-items-center h-100 mt-5 p-4"
        >
          <div class="text-white">
            <h1
              class="mb-3 text-xxl-start"
              style="font-family: 'Pacifico', cursive"
            >
              <span style="color: rgb(204, 135, 51)">Tempat</span> Ngopi
            </h1>
            <h5
              class="mb-4"
              style="
                font-family: 'Gill Sans', 'Gill Sans MT', Calibri,
                  'Trebuchet MS', sans-serif;
              "
            >
              Nikmati hari dengan minum kopi di
              <span style="font-family: 'Pacifico', cursive">
                <span style="color: rgb(204, 135, 51)">Tempat</span> Ngopi</span
              >
            </h5>
            <a class="btn btn-outline-light btn-lg" href="#about">Ayo Lihat</a>
          </div>
        </div>
      </div>
      <!-- Home End -->

      <!-- About Start -->
      <div id="about" class="about bg-black pt-5">
        <div
          class="about-tittle d-flex justify-content-center pt-lg-5 pb-3 text-white"
          style="
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS',
              sans-serif;
          "
        >
          <h1>
            <span style="color: rgb(204, 135, 51)">TENTANG </span>KAMI<hr
            style="border: solid 2px; color: rgb(251, 251, 251); "">
          </h1>
        </div>

        <div
          class="container p-1 rounded-2"
          style="background-color: rgba(178, 110, 28, 0.849); height: 65vh"
        >
          <div class="row g-2">
            <div class="col-6">
              <div class="about-desk p-5 text-white text-">
                <h1 class="pb-3">
                  <span style="font-family: 'Pacifico', cursive">
                    <span style="color: rgb(204, 135, 51)">Tempat</span>
                    Ngopi</span
                  >
                </h1>
                <p class="w-100">
                  Kami menyajikan kopi terbaik dengan biji pilihan dan
                  keterampilan barista terlatih. Dapatkan pengalaman minum kopi
                  yang tak terlupakan di coffee shop kami.
                </p>
                <button
                  type="button"
                  class="btn text-white"
                  style="background-color: rgb(244, 154, 44)"
                >
                  <a href="#menu" style="text-decoration: none; color: white"
                    >Lihat Menu</a
                  >
                </button>
              </div>
            </div>

            <div class="col-6">
              <div
                class="pt-4 pe-5 d-flex justify-content-center rounded-1"
                style="height: 60vh"
              >
                <img
                  class="img-fluid rounded-4"
                  src="{{ asset('image/tempat.jpg') }}"
                  alt=""
                />
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- About End -->

      <!-- Menu Start -->
      <div id="menu" class="menu bg-black pt-3 p-5">
        <div
          class="menu-tittle d-flex justify-content-center p-lg-5 text-white"
          style="
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS',
              sans-serif;
          "
        >
          <h1>
            <span style="color: rgb(204, 135, 51)">PILIHAN </span>MENU <hr
            style="border: solid 2px; color: rgb(251, 251, 251); "">
          </h1>
        </div>

        <div class="card-group p-3">
          <div class="card m-3">
            <img
              class="card-img-top h-50"
              src="{{ asset('image/menu1.jpg') }}"
              alt="Card image cap"
            />
            <div
              class="card-body text-white"
              style="background-color: rgb(204, 135, 51)"
            >
              <h5 class="card-title">Cappuccino</h5>
              <p class="card-text">
                Kopi dengan perpaduan espresso, susu, dan busa susu. Cocok untuk
                pencinta kopi dengan rasa creamy.
              </p>
            </div>
            <div
              class="card-footer"
              style="background-color: rgb(243, 179, 100)"
            >
              <button
                type="button"
                class="btn text-white"
                style="background-color: rgb(191, 108, 0)"
              >
                <a href="#contact" style="text-decoration: none; color: white"
                  >Beli? Klik Disini</a
                >
              </button>
            </div>
          </div>
          <div class="card m-3">
            <img
              class="card-img-top h-50"
              src="{{ asset('image/menu2.jpg') }}"
              alt="Card image cap"
            />
            <div
              class="card-body text-white"
              style="background-color: rgb(204, 135, 51)"
            >
              <h5 class="card-title">Espresso</h5>
              <p class="card-text">
                Kopi hitam kental dengan rasa strong dan aroma harum. Bahan
                dasar espresso adalah biji kopi arabika.
              </p>
            </div>
            <div
              class="card-footer"
              style="background-color: rgb(243, 179, 100)"
            >
              <button
                type="button"
                class="btn text-white"
                style="background-color: rgb(191, 108, 0)"
              >
                <a href="#contact" style="text-decoration: none; color: white"
                  >Beli? Klik Disini</a
                >
              </button>
            </div>
          </div>
          <div class="card m-3">
            <img
              class="card-img-top h-50"
              src="{{ asset('image/menu3.jpg') }}"
              alt="Card image cap"
            />
            <div
              class="card-body text-white"
              style="background-color: rgb(204, 135, 51)"
            >
              <h5 class="card-title">Latte</h5>
              <p class="card-text">
                Kopi dengan campuran espresso, susu, dan sedikit busa susu. Rasa
                creamy dan aroma kopi menyatu sempurna.
              </p>
            </div>
            <div
              class="card-footer"
              style="background-color: rgb(243, 179, 100)"
            >
              <button
                type="button"
                class="btn text-white"
                style="background-color: rgb(191, 108, 0)"
              >
                <a href="#contact" style="text-decoration: none; color: white"
                  >Beli? Klik Disini</a
                >
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- Menu End -->

      <!-- Contact Us Start-->

      <div id="contact" class="contact bg-black pt-5">
        <div
          class="contact-tittle d-flex justify-content-center pt-lg-5 pb-3 text-white"
          style="
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS',
              sans-serif;
          "
        >
          <h1>
            <span style="color: rgb(204, 135, 51)">KONTAK </span>KAMI<hr
            style="border: solid 2px; color: rgb(251, 251, 251); "">
          </h1>
        </div>

        <div
          class="container p-1 rounded-2"
          style="background-color: rgba(178, 110, 28, 0.849); height: 75vh"
        >
          <div class="row g-2">
            <div class="col-6">
              <div class="contact-desk p-3 ps-3 text-white text-">
                <h1 class="pb-3">
                  <span style="font-family: 'Pacifico', cursive">
                    <span style="color: rgb(204, 135, 51)">Tempat</span>
                    Ngopi</span
                  >
                </h1>
                <i class="bi bi-pin-map" style="font-size: 30px"></i>
                <h5>Warkop Hallo Dek</h5>
                <p>
                  Jl. Bantar Gebang Setu No.8
                </p>
                <i class="bi bi-envelope-at" style="font-size: 30px"></i>
                <h5>wadwad@gmail.com</h5>
                <i class="bi bi-phone" style="font-size: 30px"></i>
                <h5>0853723942</h5>
              </div>
            </div>

            <div class="col-6">
              <div
                class="pt-4 pe-5 d-flex justify-content-center rounded-1"
                style="height: 60vh"
              >
                <iframe
                  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.5692647315777!2d107.01802237469752!3d-6.320168993669257!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69913d1643f5d9%3A0xc9db17d5224bc6c2!2sWARKOP%20HALLO%20DEK!5e0!3m2!1sen!2sid!4v1683799025166!5m2!1sen!2sid"
                  width="600"
                  height="450"
                  style="border: 0"
                  allowfullscreen=""
                  loading="lazy"
                  referrerpolicy="no-referrer-when-downgrade"
                  class="pt-4"
                ></iframe>
              </div>
            </div>
          </div>
        </div>
        <!-- Kontak Kami End -->

        <footer class="text-white text-center text-lg-start mt-5" style="background-color: rgb(251, 150, 28);">
          <!-- Copyright -->
          <div
            class="text-center p-3"
            style="background-color: rgba(0, 0, 0, 0.2)"
          >
            © 2023 Copyright:
            <a class="text-white" href=""
              >Rosyid Eko N</a
            >
          </div>
          <!-- Copyright -->
        </footer>
      </div>
    </div>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
      crossorigin="anonymous"
    ></script>

    <script src="{{ asset('js/script.js') }}"></script>
  </body>
</html>
