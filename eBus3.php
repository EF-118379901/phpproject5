<!DOCTYPE html>
<html>
    <head>
          <style>
            body {background-color: lightblue;}
        </style>
    </head>
    <body>
        <!-- starting the session to get the session variable from the last page-->
        
        <?php
        session_start();
        $totalValue2 = $_POST['txtTotal'];
        $fullnameValue = $_POST['txtName'];
        echo "The name is : ".$fullnameValue.".";
        echo "<br></br>";
        echo "The total value is : ".$totalValue2.".";
        ?>
        
    </body>
</html>