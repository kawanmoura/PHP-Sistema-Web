<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
</head>
<body class="bg-primary">
    <div class="container mt-3">
        <?php
            include("nav.php");
        ?>

        <h1 class="text-light mt-3 mb-2 text-center">Cadastro</h1>

        <form action="recebe-cadastro.php" method="post">
            <div class="form-group">
                <label for="nome" class="text-light">Nome</label>
                <input type="text" name="nome" id="nome" class="form-control bg-transparent text-light">
            </div>

            <div class="form-group">
                <label for="email" class="text-light">Email</label>
                <input type="text" name="email" id="email" class="form-control bg-transparent text-light">
            </div>

            <div class="form-group">
                <label for="cidade" class="text-light">Cidade</label>
                <input type="text" name="cidade" id="cidade" class="form-control bg-transparent text-light">
            </div>
            <div class="form-group mb-3">
                <button class="btn btn-light mt-2 text-dark">Cadastrar</button>
            </div>
        </form>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const form = document.querySelector("form");
        
            form.addEventListener("submit", function(event) {
                const nome = document.querySelector("input[name='nome']").value.trim();
                const email = document.querySelector("input[name='email']").value.trim();
                const cidade = document.querySelector("input[name='cidade']").value.trim();
            
                if (!nome || !email || !cidade) {
                    event.preventDefault();
                    alert("Preencha todos os campos");
                }
            });
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</body>
</html>