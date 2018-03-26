
<?php
// define variables and set to empty values
  $namnErr = $passErr = $hostErr = $databasErr = "";
  $namn = $pass = $host = $databas = "";


  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_REQUEST["namn"])) {
      $namnErr = "Namn saknas!";
    } else {
      $namn = $_REQUEST["namn"];
    }
    if (empty($_REQUEST["pass"])){
      $passErr = "Pass saknas.";
    } else {
      $pass = $_REQUEST["pass"];
    }
    if (empty($_REQUEST["host"])) {
      $hostErr = "Host saknas!";
    } else {
      $host = $_REQUEST["host"];
    }
    if (empty($_REQUEST["databas"])){
      $databasErr = "Databas saknas.";
    } else {
      $databas = $_REQUEST["databas"];
    }

    echo $hostErr, "<br/>\n",
    $namnErr, "<br/>\n",
    $passErr, "<br/>\n", "<br/>\n",
    $databasErr, "<br/>\n";
    echo $host, "<br/>\n",
    $namn, "<br/>\n",
    $pass, "<br/>\n",
    $databas, "<br/>\n";


    // Create connection
    $conn = new mysqli($host, $namn, $pass, $databas);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    echo "Connected successfully";


    $sql = "SELECT Namn, Pnr FROM kund";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "Namn: " . $row["Namn"]. " " . $row["Pnr"]. "<br>";
        }
    } else {
        echo "0 results";
    }

  }
?>