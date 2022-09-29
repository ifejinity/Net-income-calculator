<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity 1 - Net income calculator</title>
    <style>
        body{
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            background-color: #EEEEEE;
        }
        .container{
            position: relative;
            background-color: white;
            width: 40%;
            margin: 0 auto;
            margin-top: 10%;
            padding: 20px;
            border-radius: 50px 50px;
            box-shadow: 1px 5px 15px 0px;
        }
        .input  input{
            padding: 10px;
            border-radius: 50px;
            border: hidden;
            box-shadow: 0px 0px 0px 1px;
            width: 90%;
            background-color:#FFE162;
        }
        .input{
            text-align: center;
            margin-bottom: 10px;
        }
        .button button{
            padding: 10px;
            border-radius: 50px;
            width: 100px;
            border: hidden;
            margin-bottom: 10px;
            transition: 0.5s;
            box-shadow: 0px 0px 0px 1px;
        }
        .button{
            text-align: center;
        }
        .compute{
            background-color: #06FF00;
        }
        .reset{
            background-color: #FF1700;
        }
        .compute:hover{
            background-color: #06FF00;
            box-shadow: 0px 0px 10px 0px;
        }
        .reset:hover{
            background-color: #FF1700;
            box-shadow: 0px 0px 10px 0px;
        }
        .form h2{
            text-align: center;
        }
        @media screen and (max-width:720px) {
            .container{
                width:70%;
                transition: 0.5s;
            }
        }
        @media screen and (max-width:400px) {
            .container{
                width:80%;
                transition: 0.5s;
            }
        }
    </style>
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