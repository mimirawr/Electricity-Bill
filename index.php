<?php

 include 'calculation.php';

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Electricity Bill</title>
    </head>
    <body>

        <h1>Calculate House Electricity Bill</h1>

        
        <table border="1">
            <tr text-align="Center">
                <th><b>Block Tariff (per month)</b></th>
                <th><b>Unit</b></th>
                <th><b>Rate</b></th>
            </tr>

            <tr>
                <td>For the first 200 kWh (1-200 kWh) per month</td>
                <td>1-200 kWh</td>
                <td>0.218</td>
            </tr>

            <tr>
                <td>For the next 100 kWh (201-300 kWh) per month</td>
                <td>201-300 kWh</td>
                <td>0.344</td>
            </tr>

            <tr>
                <td>For the next 300 kWh (301-600 kWh) per month</td>
                <td>301-600 kWh</td>
                <td>0.516</td>
            </tr>

            <tr>
                <td>For the next 300 kWh (601-900 kWh) per month</td>
                <td>601-900 kWh</td>
                <td>0.546</td>
            </tr>

            <tr>
                <td>For the next kWh (901 kWh onwards) per month</td>
                <td>901 kWh</td>
                <td>0.571</td>
            </tr>

            <tr>
                <td colspan="3">The minimum monthly chafe is RM3.00. Usage more than 600kWh is charged 6% SST.</td>
            </tr>
        
        </table>
        
        
        <form method="post">

            <br>
            Enter your first 200 kWh (1-200 kWh) per month :
            <input type="text" name="block1" value="">
            <br>

            <br>
            Enter next 100 kWh (201-300 kWh) per month :
            <input type="text" name="block2" value="">
            <br>

            <br>
            Enter next 300 kWh (301-600 kWh) per month :
            <input type="text" name="block3" value="">
            <br>

            <br>
            Enter next 300 kWh (601-900 kWh) per month :
            <input type="text" name="block4" value="">
            <br>

            <br>
            Enter  next 300 kWh (901 kWh onwards) per month : 
            <input type="text" name="block5" value="">
            <br>
        
           <br>
           <input type="submit" name="calculate" value="Calculate Bill">
           <input type="submit" name="reset" value="Reset">

        </form>

        <hr>

        <h2>Your Electricity Bill is:</h2>

    </body>

    <?php

    if (isset($_POST['calculate']) && $error == "") {

            echo "1-200kWh : " . $block1 . "kWh x 0.218 = RM " . number_format($charge1, 2) . "<br>";
            echo "201-300kWh : " . $block2 . "kWh x 0.344 = RM " . number_format($charge2, 2) . "<br>";
            echo "301-600kWh : " . $block3 . "kWh x 0.516 = RM " . number_format($charge3, 2) . "<br>";
            echo "601-900kWh : " . $block4 . "kWh x 0.546 = RM " . number_format($charge4, 2) . "<br>";
            echo "901 kWh onwards : " . $block5 . "kWh x 0.571 = RM " . number_format($charge5, 2) . "<br>";

            echo "<br>";

            echo "Total electricity consumption: " . number_format($totalkWh, 2) . " kWh<br>";
            echo "Total consumption: RM " . number_format($totalCharge, 2) . "<br>";
            echo "SST 6%: RM " . number_format($sst, 2) . "<br>";
            echo " <b> Total Current Bill: RM " . number_format($totalBill, 2) . "<br>";

    }

    ?>

</html>