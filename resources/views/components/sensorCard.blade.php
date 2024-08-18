{{-- block tạm thời để chứa các biến giá trị để hiển thị --}}
@php
    $value = 2;
    $unitOfMeasurement = 'NTU';
    $nameOfSensor = 'Bụi mịn';
    $locationOfSensor = 'Phòng 211/DI';
    $moreDetails = 'Voluptatem numquam suscipit sed. Ut enim rerum corrupti perferendis.'
@endphp



<div class="sensorCard">
    
        <span style="font-size: 300%">{{ $value }}</span>
        <span style="font-size: 200%">{{ $unitOfMeasurement }}</span><br>
        <span style="font-weight: normal">{{ $nameOfSensor }}</span><br>
        <span>{{ $locationOfSensor }}</span>
        <span style="font-weight: normal">{{ $moreDetails }}</span>

    

</div>
