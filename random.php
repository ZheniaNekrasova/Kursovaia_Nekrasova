<?php
    require("connectdb.php");
    
    $result = mysqli_query($connect, "SELECT * FROM parks WHERE District = '".$_POST["dist"]." район' OR District = 'район ".$_POST["dist"]."' ORDER BY RAND() LIMIT 1");

    if(!$result || mysqli_num_rows($result) == 0){
        $content = "В базе данных нет страниц.";
    } else {
        $content .= "<div id=\"map\" class=\"map\">
            <script type=\"text/javascript\">
            ymaps.ready(init);
            function init() {
            var myMap = new ymaps.Map('map', {
                center: [55.75399399999374,37.62209300000001],
                zoom: 9
            }, {
                searchControlProvider: 'yandex#search'
            });
            myMap.geoObjects";
        while($page = mysqli_fetch_assoc($result)){
            $content .= ".add(new ymaps.Placemark([".$page["geodata1"].", ".$page["geodata2"]."], {
                balloonContentHeader: '<strong>".$page["CommonName"]."</strong>',
                balloonContent: 'Адрес:<em>".$page["Location"]."</em>',
                balloonContentFooter: '".$page["District"]."</a>'
                },{
                    preset: 'islands#circleIcon',
                    iconColor: '#3caa3c'
                    }))";
                
        }   
        $content .= ";
        }</script></div>";    
    }
    require("index.php");
?>