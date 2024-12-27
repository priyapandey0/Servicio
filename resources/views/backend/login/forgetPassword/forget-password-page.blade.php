<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Admin Forget Password</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    {{-- Favicons --}}
    <link href="" rel="icon">
    <link href="" rel="apple-touch-icon">

    {{-- Google Fonts --}}
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    {{-- Fontawsome Cdn Link --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

    {{-- Vendor CSS Files --}}
    <link href="{{ asset('backend/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    {{-- Template Main CSS File --}}
    <link href="{{ asset('backend/assets/css/style.css') }}" rel="stylesheet">

</head>

<body>

    <main>
        <div class="container">
            <section
                class="py-4 section register min-vh-100 d-flex flex-column align-items-center justify-content-center">
                @include('backend.layout.flashmsg.flashmsg')
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                            <div class="mb-3 card">

                                <div class="card-body">

                                    <div class="pt-4 pb-2">
                                        <h5 class="pb-0 text-center card-title fs-4">Forget Password</h5>
                                        <p class="text-center small">Enter your <b>Email,</b> if you forget your <b>Password</b></p>
                                    </div>

                                    <form class="row g-3" method="POST" action="{{ route('password.email') }}">
                                        @csrf
                                        <div class="col-12">
                                            <label for="email" class="form-label">Email</label>
                                            <div class="input-group">
                                                <span class="input-group-text" id="email"><i
                                                        class="fa-solid fa-envelope"></i></span>
                                                <input type="text" name="email" class="form-control" id="email"
                                                    required>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button class="btn btn-success w-100" type="submit">Send reset password link</button>
                                        </div>
                                        <div class="col-12">
                                            <p class="mb-0 text-center small">Back to <a
                                                    href="{{ route('login') }}"><b>Login</b></a>
                                            </p>
                                        </div>
                                    </form>

                                </div>

                            </div>
                        </div>
                    </div>

            </section>

        </div>
    </main>{{-- End #main --}}

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    {{-- Vendor JS Files --}}
    <script src="{{ asset('backend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    {{-- Template Main JS File --}}
    <script src="{{ asset('backend/assets/js/main.js') }}"></script>

</body>

</html>
