<?php
  echo "<link href=\"l4Exercise3Styling.css\" rel = \"stylesheet\" type = \"text/css\" >";
  $count = 0;
  $percent = 0;
  $A1 = $_POST["a1"];
  $A2 = $_POST["a2"];
  $A3 = $_POST["a3"];
  $A4 = $_POST["a4"];
  $A5 = $_POST["a5"];
  echo "Question 1: The Valstrax is known as being a dragon inspired by what type of object?";
  echo "<br>";
  echo "You answered: ";
  echo $A1;
  echo "<br>";
  echo "Correct answer: A Jet";
  echo "<br>";
  echo "<br>";
  echo "Question 2: What is the name of the companion(s) you meet and can take on quests in 3 Ultimate?";
  echo "<br>";
  echo "You answered: ";
  echo $A2;
  echo "<br>";
  echo "Correct answer: Cha Cha and Kayamba";
  echo "<br>";
  echo "<br>";
  echo "Question 3: What animal are the palicos inspired by?";
  echo "<br>";
  echo "You answered: ";
  echo $A3;
  echo "<br>";
  echo "Correct answer:Cats";
  echo "<br>";
  echo "<br>";
  echo "Question 4: How many villages are there in Monster Hunter Generations Unltimate Double Cross For the Nintendo Switch?";
  echo "<br>";
  echo "You answered: ";
  echo $A4;
  echo "<br>";
  echo "Correct answer: 4";
  echo "<br>";
  echo "<br>";
  echo "Question 5: What is the weapon type that is commonly known as being used 'to hop right into the trash?'";
  echo "<br>";
  echo "You answered: ";
  echo $A5;
  echo "<br>";
  echo "Correct answer: Insect Glaive";
  echo "<br>";
  echo "<br>";
  if("$A1" == "A Jet")
  {
    $count= $count + 1;
    $percent= $percent + 20;
  }
  if("$A2" == "Cha Cha and Kayamba")
  {
    $count= $count + 1;
    $percent= $percent + 20;;
  }
  if("$A3" == "cats")
  {
    $count= $count + 1;
    $percent= $percent + 20;
  }
  if("$A4" == "4")
  {
    $count= $count + 1;
    $percent= $percent + 20;
  }
  if("$A5" == "Insect Glaive")
  {
    $count= $count + 1;
    $percent= $percent + 20;
  }
  echo "Total Correct: " . $count;
  echo "<br>Percent Correct: " . $percent . "%<br>";
?>
