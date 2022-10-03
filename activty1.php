<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity 1 - Net income calculator</title>
    <link rel="stylesheet" href="activity1.css">
</head>
<body>
    <!-- computation -->
    <?php
        ini_set('display_errors',0);
 
        if( isset( $_REQUEST['calculate'] ))
        {
            $revenue=$_REQUEST['revenue'];
            $philhealth=354.85;
            $pagibig=100;
            $sss=581.30;
            $mandatorydeduc=($pagibig + $sss + $philhealth);
            $preres=($revenue-$mandatorydeduc);
            $tax=($preres*0.0318);
            $res=number_format($preres-$tax, 2, ".", ",");
        }
    ?>
    <!-- form -->
    <div class="container">
        <form class="form">
            <h2>Net income calculator</h2>
            <div class="input">
                <input id="revenue" type="number" class="revenue" name="revenue" placeholder="Gross revenue" required>
            </div>
            <div class="button">
                <button class="compute" type="submit" name="calculate" value="calculate">Calculate</button>
                <button type="button" class="reset" onclick="myFunction()">Reset</button>
            </div>
            <div class="result">
                <p id="mandatorydeduction" class="netincome">Mandatory deduction: <?php echo $mandatorydeduc;?></p>
                <p id="tax" class="netincome">Tax: <?php echo $tax;?></p>
                <p id="netincome" class="netincome">Net income: <?php echo $res;?></p>
            </div>
        </form>
    </div>
    <!-- reset function -->
    <script>
        function myFunction(){
            document.getElementById("mandatorydeduction").innerHTML="Mandatory deduction: ";
            document.getElementById("tax").innerHTML="Tax: ";
            document.getElementById("netincome").innerHTML="Net income: ";
        }
    </script>
</body>
</html>