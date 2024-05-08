<html lang="english">
<head>
<title>Bill Splitter 3000</title>
</head>
<body>
<h1>Unbreakable Bill Splitter 3000</h1>
<b>(You seriously can't break it)</b>
<br>
<form>
    <label for="amount">Amount</label>
    <input id="amount" type="text" name="amount">
    <label for="people">No. People</label>
    <input id="people" type="text" name="people">
    <label for="tip">Tip%</label>
    <input id="tip" type="text" name="tip" placeholder="20">
    <input type="submit" name="submit">
</form>


</body>
</html>

<?php
function calcBill($amount, $people, $tip = 0){

        if (is_numeric($amount) && is_numeric($people) && is_numeric($tip)){
            $a = abs($amount);
            $p = abs((int)$people);
            $t = abs($tip);
            $bill = $a/$p;
            $tipAmount = $a*($t/100);
            echo "Cost: \$$a <br>";
            echo 'Number of People: ' . $p . '<br>';
            echo "Tip: $t% <br> <br>";
            echo "Bill: \$$bill per person <br>";
            echo "Tip: \$$tipAmount";
            }
        else{
            echo 'Please enter a number for each field';
        }

}

if (isset($_GET['amount'])){
        calcBill($_GET['amount'], $_GET['people'], $_GET['tip']);
}

?>