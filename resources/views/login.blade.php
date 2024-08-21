<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
	@include('layouts.nav')

	<main class="container align-center p-5 mt-20">
		<form method="POST" action="{{route('inicia-sesion')}}">

			{{-- mensaje de fallo de inicio de sesion --}}
			@if (session('info'))
        <div class="alert alert-danger">
            <strong>{{session('info')}}</strong>
        </div>
    @endif
			@csrf
		  <div class="mb-3">
		    <label for="emailInput" class="form-label">E-mail</label>
		    <input type="email" class="form-control " id="emailInput" name="email" required placeholder="ejemplo@gmail.com" value="{{old('email')}}">
		  </div>
		  <div class="mb-3">
		    <label for="passwordInput" class="form-label">Contraseña</label>
		    <input type="password" class="form-control" id="passwordInput" name="password" required value="{{old('password')}}">
		  </div>
		  <div class="mb-3 form-check">
		    <input type="checkbox" class="form-check-input" id="rememberCheck" name="remember">
		    <label class="form-check-label" for="rememberCheck">Mantener sesión iniciada</label>
		  </div>
		  <div>
		  	<p>¿No tienes cuenta? <a href="{{route('registro')}}">Regístrate aqui</a></p>
		  </div>
		  <button type="submit" class="btn-custom btn-primary mt-2">Acceder</button>
		</form>
	</main>
</body>
</html>