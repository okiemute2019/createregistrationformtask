<?php

    if (isset($_POST['submit'])){

    $myfile = fopen("userdata.csv", "a");

    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $birthdate = $_POST['birthdate'];
    $gender = $_POST['gender'];
    $country = $_POST['country'];

    $userdata = array('Name' => $fullname,'Email' => $email, 'Birthdate' => $birthdate, 'Gender' => $gender, 'Country' => $country);
    echo 'Registration successful<hr><br>';
    print_r($userdata);
    echo '<br>';

    $regdata = implode(" ",$userdata)."\n";
    fwrite($myfile,$regdata);
    fclose($myfile);
  } else {
    echo "Try again!";}
 ?>
