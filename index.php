<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Iscrizione Newsletter</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <!-- Bootstrap CSS -->

</head>

<?php
$email = $_GET['email'];
$get_access = null;

if (str_contains($email, '@') && str_contains($email, '.')) {
  $get_access = true;
} else {
  $get_access = false;
}
?>

<body>

  <!-- FORM -->
  <main>
    <form action="index.php" method="GET">
      <label for="email">Inserisci email</label>
      <input type="text" name="email" id="email" placeholder="your-email@dom.com">
      <button type="submit">Invio</button>

      <!-- Success alert -->
      <?php
      if ($get_access === true) :
      ?>
        <div class="alert alert-success" role="alert">
          A simple success alert—check it out!
        </div>
      <?php
      endif;
      ?>

      <!-- Warning alert -->
      <?php
      if ($get_access === false) :
      ?>
        <div class="alert alert-warning" role="alert">
          A simple warning alert—check it out!
        </div>
      <?php
      endif;
      ?>



    </form>
  </main>

</body>

</html>