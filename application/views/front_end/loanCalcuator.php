<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Loan Calculator</title>
</head>
<body>
<?php

#$pNum = Payment Number; $periodicPayment= Total monthly payment;
// $balance = The remaining loan balance; $monthlyInterest= monthly interest percentage rate;
 function amotrizationTable($pNum,$periodicPayment,$balance,$monthlyInterest){
     // calculate Payment Interest
     $paymentInterest = round($balance * $monthlyInterest,2);
     // Calculate Payment Principal
     $paymentPrincipal = round($periodicPayment - $paymentInterest,2);

     // deduct principal from remaining balance

     $newBalance = round($balance - $paymentPrincipal,2);

     // if new balance < monthly payment, set to zero

     if($newBalance < $paymentPrincipal){
          $newBalance = 0;
         }
     printf("<tr><td>%d</td>",$pNum);
     printf("<td>$%s</td>",number_format($newBalance,2));
     printf("<td>$%s</td>", number_format($periodicPayment,2));
     printf("<td>$%s</td>",number_format($paymentPrincipal,2));
     printf("<td>$%s</td></tr>",number_format($paymentInterest,2));

     # if balance not yet zero , recursively call amotrizationTable();
     if($newBalance > 0){
         $pNum ++;
         amotrizationTable($pNum,$periodicPayment,$newBalance,$monthlyInterest);
     }else{
         return 0;
     }
 }

//Loan balance
$balance =10000.00;

//Loan interest rate
$interestRate = .10;

// Monthly Interest Rate
$monthlyInterest = $interestRate / 12;

// Term length of the loan, in year.
$timeLength = 30;

//Number of Payments per year;
$paymentsPerYear =12;

//payment iteration
$paymentNumber = 1;

//Determine total number payments.
$totalPayments = $timeLength * $paymentsPerYear;

//Determine interest component of periodic payment
$intCalc = 1 + $interestRate/$paymentsPerYear;

// Determine periodic payment.
$periodicPayment = $balance * pow($intCalc,$totalPayments) * ($intCalc - 1)/ (pow($intCalc,$totalPayments) - 1);

//Round periodic payment to two decimals;
$periodicPayment = round($periodicPayment,2);

//Create Table

echo "<table width='50%' align='center' border ='1'>";
echo "<tr> <th>Payment Number</th><th>Balance</th><th>Payment</th><th>Principal</th><th>Interest</th></tr>";

amotrizationTable($paymentNumber,$periodicPayment,$balance,$monthlyInterest);

//close table
echo "</table>";



?>

</body>
</html>