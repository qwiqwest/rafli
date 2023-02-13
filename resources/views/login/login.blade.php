<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/css/stylel.css') }}" />
    <title>Login</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/image/flow.png') }}"/>
</head>
<body>
<form id="login_form" class="form_class" action="{{route('dasboard')}}" method="post">
            @csrf
<div class="login-wrap">
	<div class="login-html">
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab"></label>
		<div class="login-form">
			<div class="sign-in-htm">
				<div class="group">
					<label for="user" class="label">Email</label>
					<input id="user" type="email" class="input" name="email" value="{{old('email')}}">
					<span class="text-danger">@error('email') {{$message}} @enderror</span>
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input id="pass" type="password" class="input" data-type="password" name="password" value="{{old('password')}}">
					<span class="text-danger">@error('password') {{$message}} @enderror</span>
				</div>
				<div class="group">
					<input id="check" type="checkbox" class="check" checked>
					<label for="check"><span class="icon"></span> Keep me Signed in</label>
				</div>
				<div class="group">
					<button id="singin" class="button" name="submit">Sign In</button>
					{{-- <input type="submit" class="button" value="Sign In"> --}}
				</div>
				<div class="hr"></div>
				<div class="foot-lnk">
					<h3>CashFlow_</h3>
				</div>
			</div>
		</div>
	</div>
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
</div>
</body>
</html>