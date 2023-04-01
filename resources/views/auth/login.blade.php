<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')

  {{-- #0093d3 --}}
  {{-- logo title bar --}}
  <link rel="icon" href="/img/logo_IBKWU.png" type="image/x-icon">

  <title>Detail Produk - IBKWU Polije</title>

  <script>
    if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
        document.documentElement.classList.add('dark')
      } else {
        document.documentElement.classList.remove('dark')
      }
  </script>
</head>

<body class="font-poppins">
  <div class="flex min-h-full items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
    <div class="w-full max-w-md space-y-8">
      <div>
        <a href="/">
          <img class="mx-auto h-40 w-auto" src="/img/logo_IBKWU.png" alt="Your Company">
        </a>
        <h2 class="mt-6 text-center text-3xl font-bold tracking-tight text-gray-900">IBKWU - Admin</h2>
      </div>

      @error('loginError')
      <div class="bg-red-600 rounded-xl text-white p-2">
        <strong>Error</strong>
        <p>{{ $message }}</p>
      </div>
      @enderror

      <form class="mt-8 space-y-6" action="#" method="POST">
        @csrf
        <input type="hidden" name="remember" value="true">
        <div class="-space-y-px rounded-md shadow-sm">

          @error('email')
          <small class="rounded-xl text-red-500">{{$message}}</small>
          @enderror

          <div>
            <label for="email-address" class="sr-only">Email address</label>
            <input id="email-address" name="email" type="email" autocomplete="email" required
              class="relative block w-full rounded-t-md border-0 py-1.5 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:z-10 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 p-4"
              placeholder="Email address" value="{{ old('email') }}">
          </div>

          @error('password')
          <small class="rounded-xl text-red-500">{{$message}}</small>
          @enderror

          <div class="">
            <label for="password" class="sr-only">Password</label>
            <input id="password" name="password" type="password" autocomplete="current-password" required
              class="relative block w-full rounded-b-md border-0 py-1.5 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:z-10 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 p-4"
              placeholder="Password">
          </div>
        </div>

        {{-- <div class="flex items-center justify-between">
          <div class="flex items-center">
            <input id="remember-me" name="remember-me" type="checkbox"
              class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
            <label for="remember-me" class="ml-2 block text-sm text-gray-900">Remember me</label>
          </div>

          <div class="text-sm">
            <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">Forgot your password?</a>
          </div>
        </div> --}}

        <div>
          <button type="submit"
            class="group relative flex w-full justify-center rounded-md bg-indigo-600 py-2 px-3 text-sm font-semibold text-white hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
            {{-- <span class="absolute inset-y-0 left-0 flex items-center pl-3">
              <svg class="h-5 w-5 text-indigo-500 group-hover:text-indigo-400" viewBox="0 0 20 20" fill="currentColor"
                aria-hidden="true">
                <path fill-rule="evenodd"
                  d="M10 1a4.5 4.5 0 00-4.5 4.5V9H5a2 2 0 00-2 2v6a2 2 0 002 2h10a2 2 0 002-2v-6a2 2 0 00-2-2h-.5V5.5A4.5 4.5 0 0010 1zm3 8V5.5a3 3 0 10-6 0V9h6z"
                  clip-rule="evenodd" />
              </svg>
            </span> --}}
            Sign in
          </button>
        </div>
      </form>
    </div>
  </div>

  <script type="text/javascript" src="/dist/js/script.js" async></script>
</body>

</html>

{{-- <div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="/lte/index2.html" class="h1"><b>Login</b></a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Sign in to start your session</p>



      <form method="POST">
        @csrf

        @error('email')
        <small style="color: red">{{$message}}</small>
        @enderror
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email" name="email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>

        @error('password')
        <small style="color: red">{{$message}}</small>
        @enderror
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>

        <div class="row">

          <!-- /.col -->
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
</div> --}}