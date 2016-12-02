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
              return $this->x - $this->y;
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
          
          /*
           * checking if user is trying to divide by zero
           * @result bool
           */
           
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


$check = new calc;
$check -> x = $first;
$check -> y = $second;
$check -> sign = $type;


if($check -> divisionZero()){
    if($check -> checkNumeric()){
    $result = $check -> calculations();
    }
    else{
    $result = "<span>Err</span>";
    //$message = "<span>Err</span>";
    }
}
else {
 $result = "<span>Err</span>";
 $message = $check -> divisionZero();//."You can't divide by zero.";
}


}

else {
$result =  "0";
$message = "<span class='black'>Please fill both inputs in.</span>";
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
        <style>
            body{
                text-align: center;
                }
                table{
                    width: 200px;
                    margin: 0 auto 10px auto;
                }
                div{
                    width:100px;
                    overflow-x: auto;
                    border:1px solid black;
                    margin: 15px auto 15px auto;
                }
                p{
                    width: 600px;
                    margin: 0 auto;
                    color:red;
                }
                input[type="text"]{
                    width: 50%;
                    margin:0 auto;
                    background-color: lightskyblue;
                }
                span {
                    color:red;
                }
                .black {
                    color:black;
                }
        </style>
</head>
<body>
    <main>
        <section>
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
    </section>
    <section>
        <figure><?php if(isset($first, $type)) {echo $first." ".$type." ".$second." =";} else {echo "<p>".$message."</p>";} ?></figure>
        <div>
            <?php if(isset($result)){ echo $result;} ?>
        </div>
    </section>
    </main>
    
    
    
</body>
</html>