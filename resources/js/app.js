import './bootstrap';
import 'ol/ol.css';
import { Map, View } from 'ol';
import TileLayer from 'ol/layer/Tile';
import OSM from 'ol/source/OSM';

document.addEventListener('DOMContentLoaded', () => {
    const map = new Map({
        target: 'map', // ID của phần tử chứa bản đồ
        layers: [
            new TileLayer({
                source: new OSM() // Sử dụng bản đồ OpenStreetMap
            })
        ],
        view: new View({
            center: [0, 0], // Tọa độ trung tâm bản đồ (kinh độ và vĩ độ)
            zoom: 2 // Mức độ phóng to
        })
    });
});

