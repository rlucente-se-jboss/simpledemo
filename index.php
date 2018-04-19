<html>
 <head>
  <title>Hello AFCEA Cyber!!</title>
  <style>
    table, th, td {
      border: 1px solid black;
      border-collapse: collapse;
    } 
    th, td {
      padding: 5px;
      text-align: left;
    }
  </style>
 </head>
 <body>
 <h1>Hello AFCEA Cyber!</h1>
 <p>This simple demo illustrates the ability to move an application from one OCP cluster to another.</p>
<?php
error_reporting(E_ERROR);

  $containerip = $_SERVER['SERVER_ADDR'];
  $visitstamp = date("D M j G:i:s T Y");

    echo "<table><tr><th>Container IP Address</th><th>Request Timestamp</th><th>Application Build</th></tr>";
        echo "<tr><td>" . $containerip . "</td><td>" . $visitstamp . "</td><td>" . filemtime('index.php') . "</td></tr>";
    echo "</table>";
?>
 </body>
</html>
