<?php
    $banco = new mysqli("localhost", "root", "","TrabBim2",3306);
    if($banco->connect_errno){
        echo "Erro ao conectar no banco de dados";
    }
    //$banco->close();
?>