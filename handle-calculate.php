<?php
if (isset($_GET['submit'])) {
    $result;
    $firstNumInput = $_GET['firstNum'];
    $secondNumInput = $_GET['secondNum'];
    $oppInput = $_GET['opp'];
    



    if ($oppInput == 'sum') 
    {
      $result= sum($firstNumInput, $secondNumInput);

    } 
    elseif ($oppInput == 'sub') 
    {
        $result= sub($firstNumInput, $secondNumInput);
    } 
    elseif ($oppInput == 'multi') 
    {
        $result= multi($firstNumInput, $secondNumInput);
    } 
    else 
    {
        $result= div($firstNumInput, $secondNumInput);
    }

  header("location: calculate.php?Value1=$firstNumInput&Value2=$secondNumInput&opperation=$oppInput&re=$result");

        // echo '<pre>';
        // print_r($_GET);
        // echo '</pre> <br>';
        // echo "<h3>The result : $result </h3";

} 
else 
{
     header("location: calculate.php");
    // echo '<script>
    //          window.location = "http://localhost:8888/Task3/calculate.php";
    //      </script>;';
}


function sum(int|float $num1, int|float $num2): int|float
{
    return $num1 + $num2;
}

function sub(int|float $num1, int|float $num2): int|float
{
    return $num1 - $num2;
}

function multi(int|float $num1, int|float $num2): int|float
{
    return $num1 * $num2;
}

function div(int|float $num1, int|float $num2): mixed
{
    if (validSecondNum($num2))
    {
        return $num1 / $num2;
    }
    else
    {
        return
            "<script>
                 alert('The secand number Must not be zero');
                 window.location ='http://localhost:8888/Task3/calculate.php';
            </script>";
    }
}

function validSecondNum($num): bool
{
    if ($num != 0) 
    {
        return true;
    }
    else
    {
        return  false;
    }
}
