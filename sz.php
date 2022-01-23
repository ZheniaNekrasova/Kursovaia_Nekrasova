<?php
    require("connectdb.php");
    
    $result = mysqli_query($connect, "SELECT CommonName FROM parks WHERE AdmArea = 'Северо-Западный административный округ'");

    if(!$result || mysqli_num_rows($result) == 0){
        $content = "В базе данных нет страниц.";
    } else {
        while($page = mysqli_fetch_assoc($result)){
        $content .= "<p>Название парка => ".$page["CommonName"]."</p>";  
        }          
    }
    require("index.php");
?>