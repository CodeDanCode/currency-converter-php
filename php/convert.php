<!--
Daniel Leach
Intro to Internet Computing
COP 3813

Project 4 Conversion App w/ PHP

-->


<?php
include_once 'request.php';

$result = 0;

// converts Euro Currency to Other

function convertEUR($amount,$convertFrom,$convertTo,$exchangeRates,&$result){
    if($convertFrom == "EUR" && $convertTo == "US"){
        $result = $amount * $exchangeRates['rates']['USD'];
    }else if($convertFrom == "EUR" && $convertTo == "GBP"){
        $result = $amount * $exchangeRates['rates']['GBP'];
    }else if ($convertFrom == "EUR" && $convertTo == "INR"){
        $result = $amount * $exchangeRates['rates']['INR'];
    }else if ($convertFrom == "EUR" && $convertTo == "AUD"){
        $result = $amount * $exchangeRates['rates']['AUD'];
    }else if ($convertFrom == "EUR" && $convertTo == "CAD"){
        $result = $amount * $exchangeRates['rates']['CAD'];
    }else if ($convertFrom == "EUR" && $convertTo == "SGD"){
        $result = $amount * $exchangeRates['rates']['SGD'];
    }else if ($convertFrom == "EUR" && $convertTo == "CHF"){
        $result = $amount * $exchangeRates['rates']['CHF'];
    }else if ($convertFrom == "EUR" && $convertTo == "MYR"){
        $result = $amount * $exchangeRates['rates']['MYR'];
    }else if ($convertFrom == "EUR" && $convertTo == "JPY"){
        $result = $amount * $exchangeRates['rates']['JPY'];
    }else if ($convertFrom == "EUR" && $convertTo == "CNY"){
        $result = $amount * $exchangeRates['rates']['CNY'];
    }else
        $result = $amount * $exchangeRates['rates']['EUR'];
    
}

// converts Other to Euro Currency

function convertOther($amount,$convertFrom,$convertTo,$exchangeRates,&$result){
    if($convertFrom == "US" && $convertTo == "EUR"){
        $result = $amount * ($exchangeRates['rates']['EUR']/ $exchangeRates['rates']['USD']);
    }else if($convertFrom == "GBP" && $convertTo =="EUR"){
        $result = $amount * ($exchangeRates['rates']['EUR']/$exchangeRates['rates']['GBP']);
    }else if ($convertFrom == "INR" && $convertTo == "EUR" ){
        $result = $amount * ($exchangeRates['rates']['EUR']/ $exchangeRates['rates']['INR']);
    }else if ($convertFrom == "AUD" && $convertTo == "EUR"){
        $result = $amount * ($exchangeRates['rates']['EUR']/ $exchangeRates['rates']['AUD']);
    }else if ($convertFrom == "CAD" && $convertTo == "EUR"){
        $result = $amount * ($exchangeRates['rates']['EUR']/ $exchangeRates['rates']['CAD']);
    }else if ($convertFrom == "SGD" && $convertTo == "EUR"){
        $result = $amount * ($exchangeRates['rates']['EUR']/ $exchangeRates['rates']['SGD']);
    }else if ($convertFrom == "CHF" && $convertTo  == "EUR"){
        $result = $amount * ($exchangeRates['rates']['EUR']/ $exchangeRates['rates']['CHF']);
    }else if ($convertFrom == "MYR" && $convertTo == "EUR"){
        $result = $amount * ($exchangeRates['rates']['EUR']/ $exchangeRates['rates']['MYR']);
    }else if ($convertFrom == "JPY" && $convertTo == "EUR"){
        $result = $amount * ($exchangeRates['rates']['EUR']/ $exchangeRates['rates']['JPY']);
    }else if ($convertFrom == "CNY" && $convertTo == "EUR"){
        $result = $amount * ($exchangeRates['rates']['EUR']/ $exchangeRates['rates']['CNY']);
    }else
        $result = $amount * $exchangeRates['rates']['EUR'] ;
    
}

// decides which function to call
function convert ($amount,$convertFrom,$convertTo,$exchangeRates,&$result){
    if($convertFrom == 'EUR'){
        convertEUR($amount, $convertFrom, $convertTo,$exchangeRates,$result);
    } else if ($convertTo == "EUR") {
        convertOther($amount, $convertFrom, $convertTo,$exchangeRates,$result);
    }
}

// checks to see if submit has been pressed
// if so checks for 0 and under values
// if values are greater than 0 call convert function
// and pushes conversion to screen
if(isset($_POST['submit'])){
    $amount = $_POST['amount'];
    $convertFrom = $_POST['convertFrom'];
    $convertTo = $_POST['convertTo'];
    
    if ($amount == 0 || $amount < 0) {
        echo "Must type input greater that zero";
    } else {
        convert($amount,$convertFrom,$convertTo,$exchangeRates,$result);
        echo number_format($amount,3,'.',' '). "  " .$convertFrom. " = " .number_format($result,3,'.',' '). " " .$convertTo;
        echo "<br>";
        echo "<font size = '2'> * Currency is rounded up to the nearest thousandths decimal value";
        echo "<br>";
        echo "* Currency rates are updated every hour";
    }
    
    
}

?>


