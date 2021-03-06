<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <!-- js -->
        <script src="{{asset('js/app.js')}}"></script>
    </head>
    <body>
        
        @include('
        partials.header')

        <main id="site_main">
            @yield('content')
        </main>

        @include('
        partials.footer')
        
    </body>
</html>

{{-- 
    Schema::create('travel_packages', function (Blueprint $table) {
            $table->id();
            $table->string('package_name');
            $table->string('travel_destination');
            $table->text('description');
            $table->string('duration');
            $table->float('price');
            $table->text('package_image');
            $table->timestamps();
        }); --}}