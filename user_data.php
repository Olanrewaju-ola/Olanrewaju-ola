<?php
    print_r($_POST);

  // You can define a variable and store the value inside

  $name = $_POST["name"];
  $email = $_POST["email"];
  $date = $_POST["date"];
  $gender = $_POST["gender"];
  $country = $_POST["country"];

  extract($_REQUEST);
  $file = fopen("userdata.csv", "a");

  fwrite($file, "Name: ");
  fwrite($file, $name. "\n");
  fwrite($file, "Email: ");
  fwrite($file, $email. "\n");
  fwrite($file, "Date of Birth: ");
  fwrite($file, $date. "\n");
  fwrite($file, "Gender :" );
  fwrite($file, $gender. "\n");
  fwrite($file, "Country :");
  fwrite($file, $country. "\n");
  fclose($file);

  

?> 