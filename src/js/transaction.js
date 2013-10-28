function validateForm1() /* for category.php */
{
	var x=document.forms["forminput"]["jumlah"].value;
	if (x==null || x=="" || !isFinite(x))
	{
		alert("Jumlah pembelian tidak sesuai..");
		return false;
	}
	alert("Pembelian sukses! (not implemented yet.. )");
	return true;
}

function validateForm2() /* for merchandise.php */
{
	var x=document.forms["input"]["jumlah"].value;
	if (x==null || x=="" || !isFinite(x))
	{
		alert("Jumlah pembelian tidak sesuai..");
		return false;
	}
	alert("Pembelian sukses! (not implemented yet.. )");
	return true;
}