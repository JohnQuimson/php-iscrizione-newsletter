<?php
session_start();

// Verifica se l'indirizzo email è presente nella sessione
if (isset($_SESSION['email'])) {
  $email = $_SESSION['email'];
  session_unset(); // Pulisce le variabili di sessione
} else {
  // Se l'indirizzo email non è presente, reindirizza alla homepage
  header("Location: index.php");
  exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Email</title>
</head>

<body>
  <main>
    La tua email: <?php echo $email; ?>
  </main>
</body>

</html>