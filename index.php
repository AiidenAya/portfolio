<!doctype html>
<html lang="fr">

<head>
<meta charset="utf-8">
        <meta name="viewport" content="height=device-height, initial-scale=1">
        <meta name="description" content="Un simple portfolio" />
        <title>Portfolio</title>
        <link rel="icon" href="assets/img/icon.png">
    <link href="assets/main.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css">
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <link href="assets/bootstrap-5.0.2-dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


</head>

<body>

    <div id="page-container" class="bgcolor">
        <div id="content-wrap">
            <?php
      session_start();
      
      include 'vues/v_nav.php';
      if (!isset($_REQUEST["uc"])) {
        $_REQUEST['uc'] = 'accueil';
      }
      $uc = htmlspecialchars($_REQUEST["uc"]);
      switch ($uc) {
        case "situationpro":
          include 'controleurs/C_situationpro.php';
          break;

      case "btssio" :
          include 'vues/V_btssio.php';
          break;

      case "documentation":
          include './controleurs/C_documentation.php';
          break;

      case "gestionpatrimoine" :
          include 'vues/V_gestionpatrimoine.php';

          break;

      case "epreuves":
          include './controleurs/C_epreuves.php';
          break;

      case "devpro" :
          include './controleurs/C_devpro.php';
          break;

      case "stages" :
          include './controleurs/C_stage.php';
          break;

      case "certif" :
          include 'vues/V_certification.php';
          break;

      default :
          include 'vues/v_accueil.php';
          break;
      }
      include 'vues/v_footer.php';
      ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</body>

</html>