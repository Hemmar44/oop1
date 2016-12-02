<?php
if (isset($_POST["first"]) and $_POST["first"]!="" and isset($_POST["second"]) and $_POST["second"]!="") {
    
class calc {
    
    
    /*
     * Creating variables
     */
    public $x;
    public $y;
    public $sign;
   
    /*
     * creating method that calculates the result
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
       /*
        * checking if input is a number
        * 
        * result bool
        */
    
      public function checkNumeric() {
          if(is_numeric($this->x) and is_numeric($this->y)){
              return true;
          }
          else{
              return false;
          }
          
          }
          
           
          public function divisionZero() {
              If($this->y!=="0" or $this->sign !=="/"){
                  return true;
                 
              }
              else {
                  return false;
              }
          }
      



}

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
if($check -> divisionZero()){
    if($check -> checkNumeric()){
    $result = $check -> calculations();
    }
    else{
    $result = "Only numbers";
    }
}
else {
 $result = $check -> divisionZero()."You can't divide by zero";
}


}

else {
$result = "You must put both numbers in";
}


?>

<!DOCTYPE HTML>
<html lang="pl">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
	
    <title>myCalc </title>
	
	<!--<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&amp;subset=latin-ext" rel="stylesheet">
	<link rel="stylesheet" href="css/fontello/css/fontello.css"/>
	<link rel="stylesheet" href="css/style.css"/>
	<script type="text/javascript" src="jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script>-->

</head>
<body>
    <form method="post">
        <table>
            <thead>
                <tr>
                    <th>x</th>
                    <th>sign</th>
                    <th>y</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><input type="text" name="first"/></td>
                    <td><select name="type">
                            <option value="+">+</option>
                            <option value="-">-</option>
                            <option value="*">*</option>
                            <option value="/">/</option>
                        </select>
                     </td>
                    <td><input type="text" name="second"/></td>
                </tr>
            </tbody>
        </table>
        <input type="submit" value="Calculate"/>
    </form>
    <?php if(isset($result)){ echo $result;} ?>
        
    
    
    
</body>
</html>