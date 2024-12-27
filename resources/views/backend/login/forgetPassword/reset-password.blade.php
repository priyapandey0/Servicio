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
                        <div
                            class="col-lg-4 col-md-6 col-sm-4 d-flex flex-column align-items-center justify-content-center">

                            <div class="mb-3 card">

                                <div class="card-body">

                                    <div class="pt-4 pb-2">
                                        <h5 class="pb-0 text-center card-title fs-4">Reset Password</h5>
                                        <p class="text-center small">Set a new Password</p>
                                    </div>

                                    <form class="row g-3" method="POST" action="{{ route('password.update') }}">
                                        @csrf
                                        <input type="hidden" name="token" value="{{ $token }}">
                                        <div>
                                            <label for="" class="form-label">Email:</label>
                                            <input type="email" name="email" class="form-control" value="">
                                            @error('email')
                                              <span class="text-danger">
                                                {{$message}}</span>  
                                            @enderror
                                        </div>
                                        <div>
                                            <label for="" class="form-label">New Password:</label>
                                            <input type="password" name="password" class="form-control">
                                               @error('password')
                                              <span class="text-danger">
                                                {{$message}}</span>  
                                            @enderror
                                        </div>
                                        <div>
                                            <label for="" class="form-label">Confirm Password:</label>
                                            <input type="password" name="password_confirmation" class="form-control">
                                        </div>
                                        <div>
                                            <button type="submit" class="btn btn-primary">Reset Password</button>
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
