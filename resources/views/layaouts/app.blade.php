<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')

        <title>Laravel</title>
    </head>
    <body>
        
        <header>
            <div class="bg-white p-5 shadow border">
                <h1 class="text-3xl font-bold ">Instagram</h1>
                
                
            </div>
        </header>
        <main>
           <h1>@yield('titulo')</h1>
            @yields('contenido')
        </main>
        <footer class="bg-gray-100 p-3 text-center font-bold">
               Todos los derechso reservados {{date('Y')}}
        </footer>
       

       
    </body>
