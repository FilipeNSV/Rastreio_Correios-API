<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Rastreio Correios</title>
</head>

<body class="container bg-dark text-light text-center p5">
    <h1 class="mt-2">Formulário</h1><br>

    <main>
        <form action="?router=Site/resultTrack/" class="row justify-content-center" method="post">
            <div class="col-auto">
                <input type="text" class="form-control" name="code" placeholder="Código de rastreio">
            </div>
            <div class="col-auto">
                <button type="submit" class="btn btn-primary">Consultar</button>
            </div>
        </form>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</body>

</html>