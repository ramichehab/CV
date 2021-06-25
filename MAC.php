<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php

    // Declaring a variable to hold the IP
    // address getHostName() gets the name
    // of the local machine getHostByName()
    // gets the corresponding IP
    $localIP = getHostByName(getHostName());

    // Displaying the address
    echo $localIP;

    ?>

  </body>
</html>
