<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PT. Safira Jaya Telekomindo</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('user/img/logo.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <style>
        .btn-safira {
            background-color: #e670bd;
            text-color: white:
        }

        .btn-safira:hover {
            background-color: #e68bc6;
            text-color: white:
        }
    </style>
</head>

<body class="bg-light d-flex align-items-center" style="min-height: 100vh;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card shadow-lg border-0 rounded-4">
                    <div class="card-body p-4">
                        <div class="text-center mb-4">
                            <img src="{{ asset('user/img/logo.png') }}" alt="Logo" style="width: 100px;">
                            <h5 class="mt-4 mb-0 fw-bold">Admin Panel</h5>
                        </div>

                        <form method="POST" action="{{ url('/login') }}">
                            @csrf

                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" name="username" id="username"
                                    class="form-control @error('username') is-invalid @enderror"
                                    value="{{ old('username') }}" required autofocus>
                                @error('username')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" name="password" id="password"
                                    class="form-control @error('password') is-invalid @enderror" required>
                                @error('password')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="d-grid">
                                <button class="btn btn-safira text-white rounded-pill" type="submit">Masuk</button>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer text-center small text-muted rounded-bottom-4">
                        &copy; {{ date('Y') }} PT. Safira Jaya Telekomindo
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous">
    </script>
</body>

</html>
