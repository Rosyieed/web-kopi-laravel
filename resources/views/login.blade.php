<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tempat Ngopi | Login</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Yanone+Kaffeesatz&display=swap"
        rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
</head>

<body>
    <section class="h-100 gradient-form" style="background-color: #eee">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-10">
                    <div class="card rounded-3 text-white">
                        <div class="row g-0">
                            <div class="col-lg-6" style="background-color: #975d18; height: 624px">
                                <div class="card-body p-md-5 mx-md-4">
                                    <div class="text-center">
                                        <h2 class="mb-3">
                                            <span
                                                style="
                            font-family: 'Pacifico', cursive;
                            color: #cb8632;
                          ">Tempat</span>
                                            <span style="font-family: 'Pacifico', cursive">
                                                Ngopi</span>
                                        </h2>
                                        <h4 class="mt-1 mb-5 pb-1">"Ngopi Dulu Hayuu"</h4>
                                    </div>

                                    <form
                                        style="
                        font-family: 'Gill Sans', 'Gill Sans MT', Calibri,
                          'Trebuchet MS', sans-serif;
                      "
                                        action="" method="post">
                                        @csrf
                                        <h3 class="pb-3">Sign In </h3>
                                        @if (session('status'))
                                            <div class="alert alert-danger p-1 ms-3 text-center" role="alert">
                                                {{ session('message') }}
                                            </div>
                                        @endif
                                        <label class="form-label" for="form2Example11">Username</label>

                                        <div class="form-outline mb-4">
                                            <input type="username" name="username" id="username" class="form-control"
                                                placeholder="username" />
                                        </div>

                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="form2Example22">Password</label>
                                            <input type="password" name="password" id="password" class="form-control"
                                                placeholder="password" />
                                        </div>

                                        <div class="d-grid gap-2 pb-5">
                                            <button class="btn" type="submit" style="background-color: #cb8632">
                                                Sign in
                                            </button>
                                        </div>

                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-6 d-flex align-items-center bg-black">
                                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                                    <h4 class="mb-4" style="font-family: 'Pacifico', cursive">
                                        <span style="color: #cb8632">Tempat</span>
                                        Ngopi
                                    </h4>
                                    <p class="small mb-0">
                                        Selamat datang di website Coffee Shop kami! Nikmati sensasi aroma
                                        kopi segar yang menggoda dan rasakan cita rasa kopi
                                        premium dari biji kopi pilihan kami. Sajikan dengan
                                        berbagai macam pilihan kopi yang lezat dan
                                        nikmati suasana yang nyaman dan hangat bersama teman dan
                                        keluarga. Kami berkomitmen untuk memberikan pengalaman
                                        yang tak terlupakan bagi pelanggan kami.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
