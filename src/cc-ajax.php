<?php
$ccnumber=$_GET['CCNumber'];
echo "<font size ='2'>", $ccnumber;
if (((preg_match("/^[0-9_]{16}$/", $_GET['CCNumber'])) == 1) || ((preg_match("/^[0-9_]{13}$/", $_GET['CCNumber'])) == 1)) {
echo "<font color=green> <font size='2'> Valid number</font>"; }
else{ echo "<font color=red> <font size='2'> Invalid Number</font>"; } 

?>