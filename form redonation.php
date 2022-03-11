<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="form.css">
</head>
<body>
<div class="container">
    <div class="title">
        Donation form 
    </div>

    <?php 
        if(isset($_SESSION['status']))
        {
            echo "<h4>".$_SESSION['status']."</h4>";
            unset($_SESSION['status']);
        }
    ?>
    <form action="formconnect.php" method="POST">
        <div class="user-details">
            <div class="input-box">
                <span class="details">Full Name</span>
                <input type="text" name="dname" placeholder="Enter your name" required>
            </div>
            <div class="input-box">
                <span class="details">Email</span>
                <input type="text" name="demail" placeholder="Enter your Email" required>
            </div>
            <div class="input-box">
                <span class="details">Phone Number</span>
                <input type="text" name="dnumber" placeholder="Enter your Phone Number" required>
            </div>
            
            <div class="input-box">
                <span class="details">Address</span>
                <input type="text" name="daddress" placeholder="Enter your Address" required>
            </div>
            <div class="input-box">
                <span class="details">Medicine Name</span>
                <input type="text" name="mname" placeholder="Enter your Medicine Name" required>
            </div>
            <div class="input-box">
                <span class="details">Expire Date</span>
                <input type="date" name="mexpdate" placeholder="Enter Expire Date" required>
            </div>
            <div class="input-box">
                <span class="details">Amount</span>
                <input type="text" name="mamount" placeholder="Amount" required>
            </div>


            
     </div>
<div class="button">
    <button type="submit" name="save_date" class="btn btn-primary">Save Data</button>
</div>

    </form>
</div>

    
</body>
</html>