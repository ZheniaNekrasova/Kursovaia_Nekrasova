<?php
$content .= "<div class=\"container\" align=\"center\">
<img src=\"images/map.jpg\" usemap=#map   >
            <map name=map>
                <AREA shape=circle coords=\"242, 110, 82\" title=\"Зеленоградский округ\" href=\"zel_map.php\"/>
                <AREA shape=circle coords=\"480, 184, 82\" title=\"Северо-Западный округ\" href=\"sz_map.php\"/>
                <AREA shape=circle coords=\"644, 156, 72\" title=\"Северный округ\" href=\"s_map.php\"/>
                <AREA shape=circle coords=\"800, 178, 82\" title=\"Северо-Восточный округ\" href=\"sv_map.php\"/>
                <AREA shape=circle coords=\"882, 316, 72\" title=\"Восточный округ\" href=\"v_map.php\"/>
                <AREA shape=circle coords=\"800, 450, 82\" title=\"Юго-Восточный округ\" href=\"uv_map.php\"/>
                <AREA shape=circle coords=\"644, 482, 72\" title=\"Южный округ\" href=\"u_map.php\"/>
                <AREA shape=circle coords=\"482, 456, 84\" title=\"Юго-Западный округ\" href=\"uv_map.php\"/>
                <AREA shape=circle coords=\"395, 316, 70\" title=\"Западный округ\" href=\"z_map.php\"/>
                <AREA shape=circle coords=\"640, 316, 82\" title=\"Центральный округ\" href=\"center_map.php\"/>
                <AREA shape=circle coords=\"304, 516, 80\" title=\"Новомосковский округ\" href=\"nv_map.php\"/>
                <AREA shape=circle coords=\"144, 548, 70\" title=\"Троицкий округ\" href=\"tr_map.php\"/>
</map>
</div>";
require("index.php");
?>