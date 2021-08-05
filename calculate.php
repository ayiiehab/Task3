<html>

<head>
    <title>Calculate</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <form method="GET" action="handle-calculate.php" class="w-75 m-auto p-5 border">
        <div class="form-group">
            <label for="firstNum">First Number</label>
            <input type="number" name="firstNum" class="form-control" id="firstNum" placeholder="Enter The First Number">
        </div>
        <div class="form-group">
            <label for="secondNum">Second Number</label>
            <input type="number" name="secondNum" class="form-control" id="secondNum" placeholder="Enter The Second Number">
        </div>


        <div class="form-group">
            <label for="opperation">Choose an opperation </label>

            <select name="opp" id="opperation" class="form-select form-select-lg mb-3">
                <option value="sum">Addition</option>
                <option value="sub">Subtraction</option>
                <option value="multi">multiplication</option>
                <option value="div">division</option>

            </select>
        </div>


        <button class="btn btn-info" name="submit" value="submit">Submit</button> <br>

    </form>

    <div class=" w-75 m-auto p-5 border ">
       <p class='text-lg text-info'>The result is 
        <?php 
        if (isset($_GET['re'])) {
        echo  $_GET['re'];
        }
        ?>
        </p>

        <!-- //  echo $_GET['re'];
//         echo '<pre>';
//         print_r($_GET);
//         echo '</pre> <br>'; -->

</div>

   
    



    <!--  (1)

        I think  GET is suitable request method becouse  of data isn't secured and limited 
     -->
    <!--  (2) 
             echo '<script>
                   window.location = "http://localhost:8888/Task3/calculate.php";
                   </script>;';
 -->


    <body>

</html>