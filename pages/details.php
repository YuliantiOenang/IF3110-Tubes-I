<?php
	include "../controllers/connect_databases.php";
		$error="";
		$errormsg="";
	//check if
	//A) a bookid has been submitted
	//B) the submitted value is numeric
	if(isset($_GET['gid'])){
	//clean it up
	if(!is_numeric($_GET['gid'])){
	//Non numeric value entered. Someone tampered with the bookid
		$error=true;
		$errormsg=" Goods ID is not numeric value.".$_GET['gid']."";
	} else {
	//book_id is numeric number
	//clean it up
		$cbID=mysqli_escape_string($con,$_GET['gid']);
		$query ="SELECT * from inventori INNER JOIN kategori ON id_kategori=catID WHERE book_id='".$cbID."' ";
		$results=mysqli_query($con,$query);
		if($results){
		$num = mysqli_num_rows($results);
		$row=mysqli_fetch_assoc($results);
		$authno=$row['authID'];
		//run a query to get the auth name
		if($authno > 0){
		$query_auth ="SELECT * from author WHERE auth_id='".$authno."' ";
		$results_auth=mysqli_query($query_auth);
		$row_auth=mysqli_fetch_assoc($results_auth);
		$auth=$row_auth['auth_name'];
	}
	}//results
	else{
	//there's a query error
	$error=true;
	$errormsg .=mysqli_error();
	}//result test
	}//numeric
	}//if isset
	?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Pleasure Reading Inc::Book Detail: <?php echo $row['title'];?></title>
</head>
<body>
<table width="100%" border="0">
  <tr>
    <td colspan="3"><h1>Pleasure Reading Inc. - Book Detail </h1></td>
  </tr>
  <tr>
    <td colspan="3"><b><a href="listbooks.php?catid=<?php echo trim(stripslashes($row['gen_id']));?>&catname=<?php echo stripslashes(strtoupper($row['gen_name']));?>"><?php echo stripslashes(strtoupper($row['gen_name']));?></a> > <?php echo $row['title'];?> </b></td>
  </tr>
  <tr>
    <td width="12%"> </td>
    <td width="19%"> </td>
    <td width="69%"> </td>
  </tr>
  <tr>
    <td rowspan="5" valign="top"><img src="images/<?php echo $row['book_img'];?>" width="112" height="108" /></td>
    <td> </td>
    <td> </td>
  </tr>
  <tr>
    <td><strong>Price:</strong></td>
    <td><?php echo "Â£".$row['price'];?></td>
  </tr>
  <tr>
    <td><strong>ISBN:</strong></td>
    <td><?php echo $row['ISBN'];?></td>
  </tr>
  <tr>
    <td><strong>Publication Date: </strong></td>
    <td><?php echo $row['date_of_pub'];?></td>
  </tr>
  <tr>
    <td><strong>Author:</strong></td>
    <td><?php echo $auth;?></td>
  </tr>
  <form action="addtocart.php" method="post">
  <tr>
    <td> </td>
    <td><strong>Quantity</strong></td>
    <td><label>
     <select name="qty">;
<?php
  for($i=1; $i<12; $i++) {
 echo '<option value='.$i.'>'.$i.'</option>';
     }
?>
 </select>
    </label>
   </td>
    <input name="bid" type="hidden" value="<?php echo $row['book_id']?>" /></td>
  </tr>
  <tr>
    <td> </td>
    <td> </td>
    <td><label>
      <input type="submit" name="submit" value="Add to Cart" />
    </label></td>
  </tr>
  </form>
</table>
</body>
</html>