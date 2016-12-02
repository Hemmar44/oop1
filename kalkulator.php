<?php
if (isset($_POST["first"]) and $_POST["first"]!=""){
    
class calc {
    
    
    /*
     * Creating variables
     */
    public $x;
    public $y;
    public $sign;
   
    /*
     * creating method
     */
    
    public function calculations() {
        
      switch($this->sign) {
          case "+":
              return $this->x + $this->y;
               break;
          case "-":
              return  $this->x - $this->y;
              break;
          case "*":
              return $this->x* $this->y;
              break;
          case "/":
              return $this->x/ $this->y;
              break;
      }
}


}
/*
echo "<h2>Instantaiating Calculation </h2>";

$check = new calc;

echo "<h2>No numbers</h2>";

echo "<p><pre>".var_export($check, TRUE). "</pre><p>";

echo "<h2>Intializng Values</h2>";

$check -> x = 3;
$check -> y = 12;
$check -> sign = "*";

echo "<p><pre>".var_export($check, TRUE). "</pre><p>";

echo "<h2>Calculations</h2>";

echo $check -> calculations();

echo "<p><pre>".var_export($_POST, TRUE). "</pre><p>";*/

$first = $_POST["first"];
$type = $_POST["type"];
$second = $_POST["second"];

//echo "<h2>Values from inputs into that object</h2>";
$check = new calc;
$check -> x = $first;
$check -> y = $second;
$check -> sign = $type;

//echo "<p><pre>".var_export($check, TRUE). "</pre><p>";

//echo "<h2>Calculations with data from inputs</h2>";

echo $result = $check -> calculations();

header("Location: mathCalc.php");
//exit();
}

//else {
//$result = "Musisz wprowadzić dane";
//header("Location: mathCalc.php");
//}

//echo $result;

?>

