<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Reclamo</title>
</head>
<body>
    @include('layouts.nav')

    <main class="container align-center p-5 mt-20">
		<form>
		  <div class="mb-3">
		    <label for="text" class="form-label">Razón del Reclamo</label>
			<input class="form-control" id="passwordInput" name="password" required>
		  </div>
		  <div class="mb-3">
		    <label class="form-label">Infractor</label>
		    <input class="form-control" id="passwordInput" name="password" required>
		  </div>
          <div class="mb-3">
		    <label class="form-label">Fecha del suceso</label>
		    <input class="form-control" type="date" min="2024-01-01" max="2024-12-31" id="passwordInput" name="password" required>
		  </div>
          <div class="mb-3">
		    <label class="form-label">Detalles del suceso</label>
		    <textarea class="form-control" name="" id="" cols="30" rows="5"></textarea>
		  </div>
          <div class="mb-3">
		    <label class="form-label">Categoría del Suceso</label>
		    <select class="form-control">
                <option value="value1">Incumplimiento de Horario</option>
                <option value="value2">No acato de las normas</option>
                <option value="value3">No aseo de las áreas de comunes</option>
            </select>
		  </div>
		  <button type="submit" class="btn-custom btn-primary mt-2">Enviar Reclamo</button>
		</form>
	</main>
    @include('layouts.foot')
</body>
</html>