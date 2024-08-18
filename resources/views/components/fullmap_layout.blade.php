
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Fullscreen OpenLayers Map</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/ol@v7.5.0/ol.css">
    <style>
        /* Đảm bảo body và html chiếm toàn bộ màn hình */
        html, body {
            margin: 0;
            padding: 0;
            height: 100%;
            width: 100%;
        }
        /* Đảm bảo map chiếm toàn bộ màn hình */
        #map {
            height: 100%;
            width: 100%;
        }
    </style>
</head>
<body>
    {{-- <div id="map"></div>

    <script src="https://cdn.jsdelivr.net/npm/ol@v7.5.0/dist/ol.js"></script>
    <script>
        var map = new ol.Map({
            target: 'map',
            layers: [
                new ol.layer.Tile({
                    source: new ol.source.OSM()
                })
            ],
            view: new ol.View({
                center: ol.proj.fromLonLat([105.8542, 21.0285]), // Tọa độ Cần Thơ
                zoom: 12
            })
        });
    </script> --}}
    {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62860.63928560484!2d105.71637042001991!3d10.034184408539963!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31a0629f6de3edb7%3A0x527f09dbfb20b659!2zQ-G6p24gVGjGoSwgTmluaCBLaeG7gXUsIEPhuqduIFRoxqEsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1723902438054!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> --}}
    <iframe src="http://localhost:5174/" width="device-width" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</body>
</html>

