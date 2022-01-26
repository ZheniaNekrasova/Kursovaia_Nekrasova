<?php
    $content .= "
    <div class=\"container\">
    <br><br>
        <form method=\"POST\" action=\"random.php\">
        <label>Введите район</label>
        <input type=\"text\" name=\"dist\" />
        <button type=\"submit\">Результат</button>
        </form>
    </div>
";  
require("index.php");
?>