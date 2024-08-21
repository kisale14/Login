<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
        <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">

        @vite('resources/css/app.css')
    </head>
    <body>
        <div class="h-screen w-screen flex justify-center items-center bg-slate-900 ">
            <div class="bg-slate-800 text-white rounded-lg w-full mx-5 md:w-[40rem]  space-y-6 p-10">
           <!-- header -->
           <div class="flex space-x-4 items-center ">
             <div class="w-12 h-12"
             >
               <img
                   alt="avatar"
                   src="https://images.unsplash.com/photo-1518791841217-8f162f1e1131?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60"
                   class="rounded-full w-full h-full object-cover ">
               <div>
               </div>
             </div>
             <div class="space-y-2">
               <div class="flex space-x-2 items-center">
                 <h2 class="text-base">Conjunto Residencial Lass Trinitarias</h2>
                 <svg class="h-4 w-4 text-blue-500" fill="none" viewBox="0 0 24 24"
                      stroke="currentColor" stroke-width="2">
                   <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                 </svg>
                 <div class="  text-xs text-slate-400">posted an update</div>
               </div>
             </div>
   
           </div>
           <!--content-->
           <div>
             <p class="text-sm leading-6 text-slate-300">
               El Conjunto Residencial Las Trinitarias se complace en darles las bienvenida a los coopropietarios a su sistema de Gestión de Reclamos sobre el incumplimiento de las normas de la junta de condominio.
             </p>
           </div>
   
   
           <!-- image grid-->
   
   
           <div class="grid grid-cols-6 col-span-2   gap-2  ">
             <div class=" overflow-hidden rounded-xl col-span-3 max-h-[14rem]">
               <img class="h-full w-full object-cover "
                    src="https://images.unsplash.com/photo-1517487881594-2787fef5ebf7?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=735&q=80"
                    alt="">
             </div>
             <div class=" overflow-hidden rounded-xl col-span-3 max-h-[14rem]">
               <img class="h-full w-full object-cover  "
                    src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1399&q=80"
                    alt="">
             </div>
             <div class=" overflow-hidden rounded-xl col-span-2 max-h-[10rem]">
               <img class="h-full w-full object-cover "
                    src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                    alt="">
             </div>
             <div class=" overflow-hidden rounded-xl col-span-2 max-h-[10rem]">
               <img class="h-full w-full object-cover "
                    src="https://images.unsplash.com/photo-1503602642458-232111445657?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80"
                    alt="">
             </div>
             <div class="relative overflow-hidden rounded-xl col-span-2 max-h-[10rem]">
               <div
                   class="text-white text-xl absolute inset-0  bg-slate-900/80 flex justify-center items-center">
                 + 23
               </div>
               <img class="h-full w-full object-cover "
                    src="https://images.unsplash.com/photo-1560393464-5c69a73c5770?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=765&q=80"
                    alt="">
             </div>
           </div>
   
           <!--        comments-->
   
           <div class="flex justify-between pt-5">
   
             <svg class="h-4 w-4 text-red-500" fill="none" viewBox="0 0 24 24"
                  stroke="currentColor" stroke-width="2">
               <path stroke-linecap="round" stroke-linejoin="round"
                     d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z"/>
             </svg>
   
             
   
           </div>
         </div>
   
   
     </div>
    </body>
</html>     