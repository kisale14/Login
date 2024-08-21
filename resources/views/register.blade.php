<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registro</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
	@include('layouts.nav')
	<main class="container align-center p-5 mt-20">
		<form method="POST" action="{{route('validar-registro')}}">
			@csrf
		  <div class="mb-3">
		    <label for="emailInput" class="form-label">E-mail</label>
		    <input type="email" class="form-control" id="emailInput" name="email" required autocomplete="disable" placeholder="ejemplo@gmail.com..." value="{{old('email')}}">
            @error('email')
                 <small class="text-danger">{{$message}}</small>
             @enderror
		  </div>
		  <div class="mb-3">
		    <label for="passwordInput" class="form-label">Contraseña</label>
		    <input type="password" class="form-control" id="passwordInput" name="password" required value="{{old('password')}}">
            @error('password')
                 <small class="text-danger">{{$message}}</small>
             @enderror
		  </div>
		  <div class="mb-3">
		    <label for="userInput" class="form-label">Nombre</label>
		    <input type="text" class="form-control" id="userInput" name="name" required autocomplete="disable" value="{{old('name')}}">
            @error('name')
                 <small class="text-danger">{{$message}}</small>
             @enderror
		  </div>
		  <div class="mb-3">
		    <label for="userInput" class="form-label">Apellido</label>
		    <input type="text" class="form-control" id="userInput" name="apellido" required autocomplete="disable" value="{{old('apellido')}}">
            @error('apellido')
                 <small class="text-danger">{{$message}}</small>
             @enderror
		  </div>
		  <div class="mb-3">
		    <label for="userInput" class="form-label">Número de apartamento</label>
		    <input type="number" min="1" max="5" class="form-control" id="userInput" name="num_apto" required autocomplete="disable" value="{{old('num_apto')}}">
            @error('num_apto')
                 <small class="text-danger">{{$message}}</small>
             @enderror
		  </div>
		  <div class="mb-3">
		    <label for="userInput" class="form-label">Número de piso</label>
		    <input type="number" min="1" max="10" class="form-control" id="userInput" name="num_piso" required autocomplete="disable" value="{{old('num_piso')}}">
            @error('num_piso')
                 <small class="text-danger">{{$message}}</small>
             @enderror
		  </div>
		  <button type="submit" class="btn-custom btn-primary mt-2">Registrarse</button>
		</form>
	</main>
</body>
</html>