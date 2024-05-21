<!DOCTYPE html>
<html lang="PT-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Garagem</title>
</head>
<body>
    <div class="container-fluid">
            <?php 
                include 'navbar.php';
            ?>
        <div class="row">
            <div class="col p-3">

            </div>
        </div>
        <div class="row">
            <?php
                require 'conectaBanco.php';
                $placa = $_POST['placa'];
                $fabri = $_POST['fabri'];
                $modelo = $_POST['modelo'];
                $cor = $_POST['cor'];
                $ano = $_POST['ano'];
                $preco = $_POST['preco'];

                if(empty($placa) or empty($fabri) or empty($modelo) or empty($cor) or empty($ano) or empty($preco)){
                    echo "<p>Campos devem ser preenchidos </p>";
                }else{
                    // Monta comando SQL
                    $sql = "INSERT INTO carro(placa, fabri, modelo, cor, ano, preco) VALUES ('$placa','$fabri','$modelo','$cor','$ano', '$preco')";
                    $banco->query($sql); // Executa comando SQL
                    if($banco->affected_rows >= 1){
                        echo "<h3 class='text-center'>Carro cadastrado com sucesso!</h3>";
                    }else{
                        echo "<h3 class='text-center'>Erro ao inserir Carro placa $placa no banco de dados!</h3>";
                    }
                }

                $banco->close();

            ?>
    </div>
</body>
</html>