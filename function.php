<?php
$email = $_GET['email'];
$get_access = null;

// verifiche 
if ($email) {
  if (str_contains($email, '@') && str_contains($email, '.')) {
    $get_access = true;
  } else {
    $get_access = false;
  }
}
