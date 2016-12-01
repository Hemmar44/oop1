<?php 

require "class.Adress.inc";

echo "<h2>Instantaiating Address </h2>";

$address = new Address;

echo "<h2>Empty Address</h2>";
echo "<p><pre>".var_export($address, TRUE). "</pre><p>";

echo "<h2>Setting properties...</h2>";

$address->street_address_1 = "Wierzbowa 30";
$address->city_name = "Siekierki Wielkie";
$address->subdivision_name = "Wielkopolska";
$address->postal_code = "62-025";
$address->country_name = "Polska";

echo "<p><pre>".var_export($address, TRUE). "</pre><p>";

echo "<h2>Displaying address...<br/></h2>" . $address->display();

echo "<h2>testing protected access.</h2>";
echo "Address ID: {$address->_address_id}";

echo "<h2>Testing magic __get and __set</h2>";
unset($address->postal_code);
echo $address->display();

echo "<p><pre>".var_export($address, TRUE). "</pre><p>";

?>