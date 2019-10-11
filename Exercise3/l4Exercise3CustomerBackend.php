<?php
echo "<link href=\"l4Exercise3Styling.css\" rel = \"stylesheet\" type = \"text/css\" >";
  $total = 0;
  $ship = $_POST["ship"];
  $hd = $_POST["HDM"];
  $pz = $_POST["PZM"];
  $ld = $_POST["LAM"];
  $un = $_POST["username"];
  $pw = $_POST["pw"];
  if("$ship" == "2")
  {
    $total = $total+5;
  }
  if("$ship" == "3")
  {
    $total = $total+50;
  }
  $total = $total + ($hd*250) + ($pz*200) + ($ld*25);
  echo "Hot Dog Maker:";
  echo "<br>";
  echo "Quantity: ";
  echo $hd;
  echo "<br>";
  echo "Cost Per Item: ";
  echo "$250.00";
  echo "<br>";
  echo "Sub Total: ";
  echo "$";
  echo ($hd*250);
  echo "<br>";
  echo "<br>";
  echo "Pretzel Maker   ";
  echo "<br>";
  echo "Quantity: ";
  echo $pz;
  echo "<br>";
  echo "Cost Per Item: ";
  echo "$200.00";
  echo "<br>";
  echo "Sub Total: ";
  echo "$";
  echo ($pz*200);
  echo "<br>";
  echo "<br>";
  echo "Lemonade Machine";
  echo "<br>";
  echo "Quantity: ";
  echo $ld;
  echo "<br>";
  echo "Cost Per Item: ";
  echo "$25.00";
  echo "<br>";
  echo "Sub Total: ";
  echo "$";
  echo ($ld*25);
  echo "<br>";
  echo "<br>";
  echo "<br>";
  echo "Shipping: ";
  echo "<br>";
  echo "Type: ";
  if("$ship" == "1")
  {
    echo "7 day";
    echo "<br>";
    echo "Price: ";
    echo "FREE!";
  }
  if("$ship" == "2")
  {
    echo "3 day";
    echo "<br>";
    echo "Price: ";
    echo "$5.00";
  }
  if("$ship" == "3")
  {
    echo "Overnight";
    echo "<br>";
    echo "Price: ";
    echo "$50.00";
  }
  echo "<br>";
  echo "<br>";
  echo "Your total is: $";
  echo $total;
  echo ".00";
  echo "<br>";

?>
