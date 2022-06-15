<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <title>Formulário de Inscrição</title>
        <meta name="author" content="Felipe Barbosa">
        <meta name="description" content="Formulário de inscrução">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    </head>

    <body>
        <div class="container">
            <div class="col-sm-12 form-group mt-5" align="center">
                <h1> Formulário de Inscrição </h1>
            </div>
            <form action="script.php" method="POST">
                <div class="col-sm-12" align="center">
                    <div class="col-4 form-group">
                    <input type="text" name="nome" class="form-control" placeholder="Nome">
                    </div>
                    <div class="col-4 form-group">
                    <input type="number" name="idade" class="form-control" placeholder="Idade">
                    </div>
                </div>
                <div class="col-sm-12" align="center">
                    <div class="col-4 form-group">
                        <button class="btn btn-primary" type="submit">Enviar</button>
                    </div>
                </div>
            </form>
        </div>
    </body>

    <footer>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    </footer>
</html>