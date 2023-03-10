<?php
include 'uploadAudio.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="text-center">Envie o áudio</h1>
    <div class="d-flex justify-content-center mt-5">
        <form class="text-center" action="" method="post" enctype="multipart/form-data">
            <div class="input-group mb-5">
                <input type="file" class="form-control" accept="audio/*" id="audio" name="audio">
            </div>
            <div>
                <button type="submit" class="btn btn-primary col-4">Enviar</button>
            </div>
        </form>
    </div>

    <?php if($success == 'true') { ?>
        <div class="alert alert-success mt-5 text-center mx-auto w-50" role="alert">
          Áudio enviado com sucesso!
        </div>
    <?php } ?>

    <?php if($success == 'false') { ?>
        <div class="alert alert-danger mt-5 text-center mx-auto w-50" role="alert">
          Erro ao enviar!
        </div>
    <?php } ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>