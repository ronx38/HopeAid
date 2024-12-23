{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HopeAid</title>
    @vite(['resources/sass/app.scss'])
</head>

<body>
    <div class="container min-vh-100 d-flex justify-content-center align-items-center">
        <form method="POST" action="/login">
            @csrf
            <div class="fs-4">Login</div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input name="email" id="email" type="email" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input name="password" id="password" type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div><a href="/">Register</a></div>
            <button type="submit" class="btn btn-primary">Submit</button>

            @if (session('error'))
                <p class="text-danger"> {{ session('error') }} </p>
            @endif
        </form>
    </div>

</body>

</html> --}}


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HopeAid - Login</title>
    @vite(['resources/sass/app.scss'])
    <style>
        body {
            background-image: url('image/natural-disaster.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
            background-size: cover;
        }
    </style>
</head>

<body>
    <div class="container min-vh-100 d-flex justify-content-center align-items-center">
        <div class="card shadow-lg p-4" style="width: 100%; max-width: 400px;">
            <div class="card-body">
                <h2 class="card-title text-center mb-4 text-danger">Login</h2>
                <form method="POST" action="/login">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label text-danger">Email address</label>
                        <input name="email" id="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" style="border: 1px solid #B22222" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label text-danger">Password</label>
                        <input name="password" id="password" type="password" class="form-control" id="exampleInputPassword1" style="border: 1px solid #B22222" required>
                    </div>
                    <div class="text-center mb-3">
                        Dont have account?
                        <a href="/register" class="text-decoration-none fw-bold text-danger">Register</a>
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-danger">Submit</button>
                    </div>

                </form>
                @if (session('error'))
                    <p class="text-danger"> {{ session('error') }} </p>
                @endif
            </div>
        </div>
    </div>
</body>

</html>
