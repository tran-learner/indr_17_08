<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/da3eaded38.js" crossorigin="anonymous"></script>
    @vite('resources/css/fullmap.css')

</head>

<body>

    <div class="topNav">
        <img src="{{ Vite::asset('resources\image\drawing-3.svg') }}" alt="">
        <input class="searchBox" type="text" placeholder="Hãy gõ điều gì đó...">
        <div class="iconn" style="display: flex" >
            <i class="fa-solid fa-user iconAccount"></i>
            <i class="fa-solid fa-bell iconAccount"></i>
        </div>
    </div>


    <div class="iframeBorder">
        <iframe src="http://localhost:5173/"
            style="position: absolute; top: 10%; left:10%; width: 80%; height: 90%; border: 0;" allowfullscreen
            loading="lazy" referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </div>

    <div class="infCard">

    </div>




</body>

</html>
