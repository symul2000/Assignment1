<?php
function celsiusToFahrenheit($celsius) {
    $fahrenheit = ($celsius * 9/5) + 32;
    return $fahrenheit;
}

// I just given Example usage 32 celsius as given instruction of Ostad exam unit.
$celsius = 32; 
$fahrenheit = celsiusToFahrenheit($celsius);
echo "Temperature in Celsius: $celsius °C<br>";
echo "Temperature in Fahrenheit: $fahrenheit °F<br>";
?>
