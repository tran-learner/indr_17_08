@php
    $venueName = 'Trường Công Nghệ Thông Tin và Truyền Thông';
@endphp


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/ol@v7.5.0/ol.css">

    @vite('resources/css/app.css')

</head>

<body>
    <div>
        {{-- top-part  --}}
        <section class="top">
            <h3>CTU indoor map</h3>
            <div class="searchBox">
                <input type="text" placeholder="    Tìm kiếm..." style="font-weight: normal">
            </div>
        </section>

        {{-- main-part --}}
        <main>

            <section class="left">
                <h2 class="unitName">{{ $venueName }}</h2>
                <x-sensorCard></x-sensorCard>
            </section>

            <section class="wmap">
                hello!
            </section>
        </main>

        {{-- bottom-part --}}

    </div>
</body>

</html>
