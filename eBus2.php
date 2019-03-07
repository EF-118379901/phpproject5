<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

session_start();
$fullNameValue = "";
$totalValue2 = "";

$totalValue = $_POST{'txtTotal'};
$_SESSION{'txtName'} = $fullNameValue;
$_SESSION{'txtTotal'} = $totalValue2;


?>
<!DOCTYPE html>
<html>
    <head>
          <center>
  <h1 style="border:2px solid dodgerblue;"<h1
      style="color:lightblue;"> Ballinveltig Area Strategic Consulting Services</h1>
  </center>
        <title>eBusiness 2</title>
          <style>
            body {background-color: lightblue;}
        </style>
    </head>
    <body>
        <div class="form">
            <form name="Details" method="post" action="eBus3.php">
                <center>
                    <table cellspacing="10">
                        <tr>
                            <td><b></b></td>`
                            <td><b>Enter in your details below</b></td>
                        </tr>
                        <tr>
                            <td>Name</td>
                            <td><input type="test" id="txtName" name="txtName" value=""  pattern="[A-Za-z]*" class="validate"/></td>
                        </tr>
                        <tr>
                            <td>Phone Number</td>
                            <td><input type="text" id="txtNum" name="txtNum" value="" pattern="[0-9]*" class="validate" /></td>
                        </tr>
                        
                        <tr>
                            <td>Password</td>
                            <td><input type="text" id="txtPassword" name="txtPassword" value=""  /></td>
                        </tr>
                        
                        <tr>
                            <td><input type="hidden" id="txtTotal" name="txtTotal" value="" pattern="[0-9]"
                                <?php echo $totalValue;?> /><td>
                        </tr>
                    </table>
                        </center>
                        
<center>              

                    <input type="submit" name="btnContinue" id="btnContinue" onclick="" value="Continue"/>
</center>
        </div>
            </form>
    </body>
</html>