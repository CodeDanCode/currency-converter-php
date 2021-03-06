
<!--
Daniel Leach
Intro to Internet Computing
COP 3813

Project 4 Conversion App w/ PHP

-->


<!doctype html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>PHP Currency Converter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--Bootstrap CDN-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <!--Bootstrap scripts-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <!--google Font-->
    <link href="https://fonts.googleapis.com/css?family=Chonburi" rel="stylesheet">

    <!--My style sheet-->
    <link rel="stylesheet"type= "text/css" href="./css/style.css">
</head>

<body>

    <div class="jumbotron container-fluid">
        <div class="container">
            <div id="jumbotext">
                <h1>Currency Converter</h1>
                <form method="post">
                    <p id="amountP">
                        <input type="number" step="any" name="amount" id="amount" value="1" min="1">
                    </p>
                    <h3>Convert from</h3>
                    <select class="form-control btn btn-default" name="convertFrom" id="convertFrom"
                        onchange="changeEUR()">

                        <option value="EUR" id="EURFrom">EUR - Euro</option>

                        <option value="US">US - US Dollar</option>

                        <option value="GBP">GBP - British Pound</option>
                        <option value="INR">INR - Indian Rupee</option>
                        <option value="AUD">AUD - Australian Dollar</option>
                        <option value="CAD">CAD - Canadian Dollar</option>
                        <option value="SGD">SGD - Singaporian Dollar</option>
                        <option value="CHF">CHF - Swiss Franc</option>
                        <option value="MYR">MYR - Malaysian Ringgit </option>
                        <option value="JPY">JPY - Japanese Yen</option>
                        <option value="CNY">CNY - Chinese Yuan Renminbi</option>
                    </select>

                    <h3>Convert To</h3>

                    <select class="form-control btn btn-default" name="convertTo" id="convertTo"
                        onchange="changeOther()">
                        <option value="EUR" id="EURTo">EUR - Euro</option>

                        <option value="US" selected="select">US - US Dollar</option>

                        <option value="GBP">GBP - British Pound</option>
                        <option value="INR">INR - Indian Rupee</option>
                        <option value="AUD">AUD - Australian Dollar</option>
                        <option value="CAD">CAD - Canadian Dollar</option>
                        <option value="SGD">SGD - Singaporian Dollar</option>
                        <option value="CHF">CHF - Swiss Franc</option>
                        <option value="MYR">MYR - Malaysian Ringgit</option>
                        <option value="JPY">JPY - Japanese Yen</option>
                        <option value="CNY">CNY - Chinese Yuan Renminbi</option>
                    </select>

                    <div id="submitBTN">
                        <input type="submit" name="submit" id="submit" class="btn btn-lg" value="Submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        /* changes selection based conversion type to EUR currency */
        function changeEUR() {
            document.getElementById("EURTo").selected = true;
        }

        function changeOther() {
            document.getElementById("EURFrom").selected = true;
        }
    </script>
    <div id="answerP">
    <!--
        runs PHP Code and shows answer here.
    -->
        <?php
            include './php/convert.php';
        ?>
    </div>
    <div class="container-fluid">
        <footer>
            <h5>Copyright &copy; 2019 Daniel Leach</h5>
        </footer>
    </div>
</body>

</html>
