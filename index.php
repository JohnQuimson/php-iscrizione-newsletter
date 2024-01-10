<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Iscrizione Newsletter</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <!-- Bootstrap CSS -->

  <!-- My CSS -->
  <link rel="stylesheet" href="css/style.css">
  <!-- My CSS -->

</head>

<?php
require_once __DIR__ . '/function.php';
?>



<!-- Success alert -->
<?php
if ($get_access === true) :
?>
  <div class="alert alert-success" role="alert">
    L'email è scritta nel formato corretto
  </div>
<?php
endif;
?>

<!-- Warning alert -->
<?php
if ($get_access === false) :
?>
  <div class="alert alert-warning" role="alert">
    L'email NON è scritta nel formato corretto
  </div>
<?php
endif;
?>

<body>
  <h1>PHP Iscrizione Newsletter</h1>

  <!-- FORM -->
  <main>
    <div class="container">
      <form action="index.php" method="GET">
        <input type="text" name="email" id="email" placeholder="your-email@dom.com">
        <button type="submit">Invio</button>
      </form>
    </div>

  </main>

</body>

</html>