<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Novedades</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>

	{{-- inclusion de la navbar mediante el include de laravel --}}
	@include('layouts.nav')<br>
	<div class="container mt-20">

		{{-- mensaje de sesion iniciada con exito --}}

		@if (session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif

	    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
      		<p class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
	      		Gracias por visitarnos! 
			</p>
	    </header>
	</div>
	<article class="container">
		<h2>Tu sección privada</h2>
	</article>

	<h1 class="container mt-10 font-size-10px text-gray-800 text-xl font-bold">Bienvenido <a class="text-gray-600 text-lg gap-4">@auth {{Auth::user()->name}} @endauth</a></h1>

	<section class="container mx-auto px-8 py-8 lg:py-20">
		<h2 class="block antialiased tracking-normal font-sans text-4xl font-semibold leading-[1.3] text-blue-gray-900 !text-3xl !leading-snug lg:!text-4xl">Reglas básicas de convivencia en el Conjunto Residencial Las Trinitarias</h2>
		<p class="block antialiased font-sans text-xl font-normal leading-relaxed text-inherit mt-2 w-full font-normal !text-gray-500 lg:w-5/12">Las reglas básicas de convivencia nos permiten vivir mejor.</p>
		<div class="mt-10 grid grid-cols-1 gap-10 lg:grid-cols-3">
		  <div class="relative flex flex-col bg-clip-border rounded-xl bg-transparent text-gray-700 shadow-md relative grid min-h-[30rem] items-end overflow-hidden rounded-xl"><img src="https://bucket.material-tailwind.com/magic-ai/58b51625af5803baea7811b7e9128c8b23c0706c3271fa863b6bc287c2d3958a.jpg" alt="bg" class="absolute inset-0 h-full w-full object-cover object-center" />
			<div class="absolute inset-0 bg-black/70"></div>
			<div class="p-6 relative flex flex-col justify-end">
			  <h4 class="block antialiased tracking-normal font-sans text-2xl font-semibold leading-snug text-white">Respeta los horarios</h4>
			  <p class="block antialiased font-sans text-base font-light leading-relaxed text-white my-2 font-normal">Los ruidos molestos son uno de los problemas más comunes en edificios. La ley sobre Copropiedad establece horarios que son especialmente sensibles y los reglamentos internos suelen profundizar más sobre el tema.</p>
			</div>
		  </div>
		  <div class="relative flex flex-col bg-clip-border rounded-xl bg-transparent text-gray-700 shadow-md relative grid min-h-[30rem] items-end overflow-hidden rounded-xl"><img src="https://bucket.material-tailwind.com/magic-ai/36e7d64250cd9568062f658a26b4d0107c00235cb3b85fa4919b3ba4070c9bed.jpg" alt="bg" class="absolute inset-0 h-full w-full object-cover object-center" />
			<div class="absolute inset-0 bg-black/70"></div>
			<div class="p-6 relative flex flex-col justify-end">
			  <h4 class="block antialiased tracking-normal font-sans text-2xl font-semibold leading-snug text-white">Cumple con las reglas del edificio</h4>
			  <p class="block antialiased font-sans text-base font-light leading-relaxed text-white my-2 font-normal">En todo edificio existen reglas básicas de convivencia promovidas por la administración. Es muy importante que te mantengas informado sobre cada una y que seas uno de los principales promotores de su cumplimiento.</p>
			</div>
		  </div>
		  <div class="relative flex flex-col bg-clip-border rounded-xl bg-transparent text-gray-700 shadow-md relative grid min-h-[30rem] items-end overflow-hidden rounded-xl"><img src="https://bucket.material-tailwind.com/magic-ai/36e7d64250cd9568062f658a26b4d0107c00235cb3b85fa4919b3ba4070c9bed.jpg" alt="bg" class="absolute inset-0 h-full w-full object-cover object-center" />
			<div class="absolute inset-0 bg-black/70"></div>
			<div class="p-6 relative flex flex-col justify-end">
			  <h4 class="block antialiased tracking-normal font-sans text-2xl font-semibold leading-snug text-white">Contribuye con la limpieza</h4>
			  <p class="block antialiased font-sans text-base font-light leading-relaxed text-white my-2 font-normal">Otra regla básica para vivir en un edificio es contribuir con la limpieza de las áreas comunes. ¿Cómo puedes hacerlo? Cuidando que nuestras acciones no se traduzcan en suciedad o desórdenes.</p>
			</div>
		  </div>
		</div>
	  </section>

	  @include('layouts.tab')

	  @include('layouts.foot')
</body>
</html>