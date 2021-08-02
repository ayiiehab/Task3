<?php
if (isset($_POST['submit'])) {
    $firstNumInput = $_POST['firstNum'];
    $secondNumInput = $_POST['secondNum'];
    $oppInput = $_POST['opp'];

    if ($oppInput == 'sum') 
    {
      echo sum($firstNumInput, $secondNumInput);

    } 
    elseif ($oppInput == 'sub') 
    {
        echo sub($firstNumInput, $secondNumInput);
    } 
    elseif ($oppInput == 'multi') 
    {
        echo multi($firstNumInput, $secondNumInput);
    } 
    else 
    {
        echo div($firstNumInput, $secondNumInput);
    }
} 
else 
{
     header("location: calculate.php");
    // echo '<script>
    //          window.location = "http://localhost:8888/Task3/calculate.php";
    //          </script>;';
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
