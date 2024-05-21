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
                <h1>Garagem de Carros</h1>
                <form action="registraCarro.php" method="post">

                    <div class="mb-3">
                        <label for="placa" class="form-label">Placa</label>
                        <input type="text" name="placa" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="fabri" class="form-label">Marca Fabricante</label>
                        <input type="text" name="fabri" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="modelo" class="form-label">Modelo do Carro</label>
                        <input type="text" name="modelo" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="cor" class="form-label">Cor</label>
                        <input type="text" name="cor" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="ano" class="form-label">Ano</label>
                        <input type="number" name="ano" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="preco" class="form-label">Preço de venda</label>
                        <input type="number" name="preco" class="form-control">
                    </div>

                    <input type="submit" value="Salvar Cadastro do Carro" class="btn btn-dark">
                </form>
            </div>
            <div class="col-3"></div>
        </div>
    </div>
</body>
</html>