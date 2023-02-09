<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/css/stylel.css') }}" />
    <title>Login</title>
</head>
<body>
    <header>
        <h1>CashFlow_ Login</h1>
    </header>
    <main>
        <form id="login_form" class="form_class" action="{{url('login/proses')}}" method="post">
            @csrf
            <div class="form_div">
                <label>Login:</label>
                <input class="field_class" name="login_txt" type="text" placeholder="Masukkan email" autofocus required>
                @error('email')
                    is-invalid
                @enderror
                @error('email')
                    <div class="invalid-feedback">
                        {{ $massage }}
                    </div>
                @enderror
                <label>Password:</label>
                <input id="pass" class="field_class" name="password_txt" type="password" placeholder="Masukkan Password" required>
                @error('password')
                    is-invalid
                @enderror
                @error('password')
                    <div class="invalid-feedback">
                        {{ $massage }}
                    </div>
                @enderror
                <button class="submit_class" type="submit" form="login_form" onclick="return validarLogin()">Masuk</button>
            </div>
        </form>
    </main>
    <footer>
        <p>Fast Like a Flow <a href="#">CashFlow_&trade;</a></p>
    </footer>
    <script src="{{ asset('assets/js/scriptl.js') }}" defer></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @if(Session::has("error"))
    <script>
        Swal.fire({
            position: 'top-center',
            icon: 'error',
            title: '{{Session::get('error')}}',
            showConfirmButton: false,
            timer: 1500
        })
    </script>
    @endif
</body>
</html>