<!doctype html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>Rastreio Correios</title>
</head>

<body class="container bg-dark text-light text-center p5">
  <h1 class="mb-2">RASTREIO DO OBJETO</h1><br>

  <?php
    use App\Web\Correios\Tracking;

    $responde = Tracking::consultTracking((isset($_POST['code'])) ? $_POST['code'] : null);
   
    foreach($responde['objetos'] as $objeto) {
      
      echo '<h2 class="mt-3">Objeto: '.$objeto['codObjeto'].'</h2><br><hr>';
      if(!isset($objeto['eventos'])) {
        $msg = $objeto['mensagem'] ?? 'Erro: Dados não encontrados';
        echo '<div class="alert alert-warning">'.$msg.'</div>';
        continue;
      }

      foreach($objeto['eventos'] as $evento) {

        $image = isset($evento['urlIcone']) ? 
          '<div style="">
            <img src="'.'https://proxyapp.correios.com.br'.$evento['urlIcone'].'">
          </div>' : '';

        $cidade = isset($evento['unidade']['endereco']['cidade']) ? $evento['unidade']['endereco']['cidade'].'/'.$evento['unidade']['endereco']['uf'] : null;
        

        $data = [
          $evento['descricao'],
          $cidade,
          $evento['unidade']['nome'] ?? null
        ];

        echo '<div class="alert alert-light d-flex align-items-center">
                '.$image.'
                <div style="flex: 1;">
                  '.implode(' - ', array_filter($data)).'
                </div>
                <div style="width: 200px;">
                  <span class="badge bg-dark">
                  '.date('d/m/Y à\s H:i:s', strtotime($evento['dtHrCriado'])).'
                  </span>
                </div>
              </div>';
      }
    }
  ?><br>

  <hr><br>  
  <a href="?router=Site/formTrack/">Voltar</a><br>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>