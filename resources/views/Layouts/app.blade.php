<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel-ok</title>


    <script src="https://cdn.tailwindcss.com"></script>
    {{--fonteawesome--}}
    {{--tipografia--}}
</head>
<body>

    <header><h1>header</h1></header>
    
    <title>@yield('title',Blog de romi)</title>
    {{--es para titulos unicos--}}

    {{--es para cosas de css q se acumulan--}}

    <footer><h1>El foterr</h1></footer>

    <!--EN home.blade.php TRABAJO CON PLANTILLAS
        @extends('layouts.app')
        @section('title')
            Laravel 11
        @endsection

        @section ('title', 'Laravel')

        @section('content')
            <x-app-layout>
                <div class="max-w-4xl mx-auto px-4">    
                    <x-alert type="" class="mb-4">
                        <x-slot name="title">
                            Titulo del alert slot:
                        </x-slot>
                        Contenido del x-alert
                    </x-alert>
                    
                </div>
            </x-app-layout>
        @endsection

    -->
</body>
</html>