<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @vite(['resources/sass/app.scss'])
    <style>
        html, body {
            height: 100%;
            margin: 0;
            display: flex;
            flex-direction: column;
            background: #F5F5F5;
        }
        main {
            flex: 1;
        }
        footer {
            background-color: #B22222;
            padding: 2%;
            margin-top: 3rem;
            color: #DFF2EB;
        }
    </style>
    {{-- <link rel="stylesheet" href="{{ asset('bootstrap-5.0.2-dist/css/bootstrap.min.css') }}"> --}}
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #B22222; color: #DFF2EB">
        <div class="container-fluid">
          <a class="navbar-brand ms-3" href="/">HOPEAID</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse ms-5 fs-5" id="navbarNavDropdown">
            <ul class="navbar-nav gap-5">
              <li class="nav-item">
                <a class="nav-link active ms-3" aria-current="page" href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/article">Article</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/documentation">Documentation</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/support">Support</a>
              </li>
            </ul>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item navbar-nav dropdown d-flex align-items-center">
                    @auth
                      Welcome,
                      <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      {{ $user->name }}
                      </a>
                      <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Profile</a></li>
                      <li><a class="dropdown-item" href="/logout">Logout</a></li>
                      </ul>
                  @else
                      <a class="nav-link" href="/login">Login</a>
                  @endauth
                </li>
            </ul>
          </div>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer class="text-left d-flex align-items-center justify-content-center" style="gap: 10%">
        <div class="">
            <p class="fw-bold">Universitas Bina Nusantara</p>
            <p class="fw-bold">Jl. K. H. Syahdan No. 9, Kemanggisan, Palmerah Jakarta 11480 Indonesia</p>
            <p>Phone: +62 812-1241-5818, +62 821-1319-5676, +62 897-1235-942, +62 811-1298-108, +62 857-7501-1779</p>
            <p>Email: stephanie.hartini@binus.ac.id, david.malau@binus.ac.id, evelyn.angelica@binus.ac.id, frans.samsie@binus.ac.id, ronald.sylvester@binus.ac.id</p>
        </div>

        &copy; 2024 HopeAid. All rights reserved.
    </footer>
</body>

<script src="{{ asset('bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js') }}"></script>
</html>
