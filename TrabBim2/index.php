<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Garagem de Carros</title>
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
            <div class="col-3"></div>
            <div class="col-6 ">
                <h1 class="text-center">Garagem de Carros</h1>

                <?php 
                     require 'conectaBanco.php';
                     $select = "SELECT * FROM carro";
                     $resultado = mysqli_query($banco, $select);
                     ?>
                     <table class="table table-hover">
                         <thead>
                             <th scope="col">Placa</th>
                             <th scope="col">Fabricante</th>
                             <th scope="col">Modelo</th>
                             <th scope="col">Cor</th>
                             <th scope="col">Ano</th>
                             <th scope="col">Valor</th>
                         </thead>
                         <tbody>
                             <?php
                                 if($resultado){
                                     while($linha = mysqli_fetch_assoc($resultado)){
                                         $placa = $linha['placa'];
                                         $fabri = $linha['fabri'];
                                         $modelo = $linha['modelo'];
                                         $cor = $linha['cor'];
                                         $ano = $linha['ano'];
                                         $preco = $linha['preco'];
                                         echo "<tr>
                                         <td> $placa </td>
                                         <td> $fabri </td>
                                         <td> $modelo </td>
                                         <td> $cor </td>
                                         <td> $ano </td>
                                         <td> $preco </td>
                                         </tr>";
                                     }
                                 }
                             ?>
                         </tbody>
                     </table>
            </div>
            <div class="col-3"></div>
        </div>
    </div>
</body>
</html>