<?php
    require("connectdb.php");
    
    $result = mysqli_query($connect, "SELECT * FROM parks WHERE AdmArea = 'Центральный административный округ'");

    if(!$result || mysqli_num_rows($result) == 0){
        $content = "В базе данных нет страниц.";
    } else {
        $content .= "<table>
        <tbody>
            <tr>
                <td><b>Название</b></td>
                <td><b>Район</b></td>
                <td><b>Адрес</b></td>
            </tr>";
        while($page = mysqli_fetch_assoc($result)){
            $content .= "
                <tr>
                    <td>".$page["CommonName"]."</td>
                    <td>".$page["District"]."</td>
                    <td>".$page["Location"]."</td>
                </tr>";
        }   
        $content .= "</tbody>
        </table>";    
    }
    require("index.php");
?>