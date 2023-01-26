<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles.css"/>
    <title>Central Bank</title>
</head>
<body>
    <div class="flex-container">
        <header class="header">
            <div class="main-text">
                <h1>YOUR BANK ACCOUNT</h1>
            </div>
            
        </header>
        <!-- Data collection form -->
        <form class="accountForm" action="index.php" method="POST">
            <div class="personalInfo">
                    <h5>Personal Information</h5>
                    <!-- Php zone with getters from the object created from Account class -->
                    <?php
                    require("Account.php");
                    $obj = new Account("Gabriela", "Maureira");
                    echo "<p> Name: </p> <h5>" .$obj->getName(). "\n" .$obj->getLastName(). "\n </h5>"; 
                    echo "<p>Account nº: </p> <h5>" .$obj->getAccountNumber()."</h5>"; 
                    
                    // Click to deposit button call deposit method from Account class. Same with withdraw button.
                    $amount= $_POST['amount'];
                    if($_POST['deposit']){
                        $total = $obj->deposit($amount);  
                    } else if($_POST['withdraw']){
                        $total = $obj->withdraw($amount);
                    }
                    ?>
            </div>
            <div class="personalInfo">
                <input class="input" type="number" name="amount" placeholder="Enter quantity" required>

                <button class="button" type="submit" name="deposit" value="deposit">DEPOSIT</button>
                <button class="button" type="submit" name="withdraw" value="withdraw">WITHDRAW</button> 
                <label  class="input" for="result">Total amount: </label>
                <input class="input" type="text" name="result" placeholder="Total in your account" value="<?php echo $total; ?>">
            </div>
        </form>
           
        <footer class="footer">
            <nav class="end">
                <p>&#169; 2023</p>
            </nav>

        </footer>
    </div>
</body>
</html>





