function validateregisForm()
{
	document.getElementById('submit').disabled = true;
	var x=document.forms["regisform"]["username"].value;
	if (x!=null && x!="" && x.length >= 5)
	  {
		var y=document.forms["regisform"]["password"].value;
		if (y!=null && y!="" && y.length >= 8)
		{
			if (x != y)
			{
				x=document.forms["regisform"]["confirmpassword"].value;
				if (x == y )
				{
					x=document.forms["regisform"]["namalengkap"].value;
					var spasipos=x.indexOf(" ");
					var lastspasipos=x.lastIndexOf(" ");
					if (x!=null && x!="" && spasipos>0 && lastspasipos+1<x.length)
					{
						x=document.forms["regisform"]["nomorhp"].value;
						if (x!=null && x!="")
						{
							x=document.forms["regisform"]["alamat"].value;
							if (x!=null && x!="")
							{
								x=document.forms["regisform"]["provinsi"].value;
								if (x!=null && x!="")
								{
									x=document.forms["regisform"]["kota"].value;
									if (x!=null && x!="")
									{
										x=document.forms["regisform"]["kodepos"].value;
										if (x!=null && x!="")
										{
											x=document.forms["regisform"]["email"].value;
											var atpos=x.indexOf("@");
											var dotpos=x.lastIndexOf(".");
											if (x!=null && x!="" && atpos>0 && dotpos>=atpos+2 && dotpos+1<x.length && x!=y)
											{												
												document.getElementById('submit').disabled = false;
											}
										}
									}
								}
							}
						}
					}
				}
			}
		}
	}
}

function isDigits(argvalue) {
	argvalue = argvalue.toString();
	var validChars = "0123456789";
	var startFrom = 0;
	if (argvalue.substring(0, 2) == "0x") {
	   validChars = "0123456789abcdefABCDEF";
	   startFrom = 2;
	} else if (argvalue.charAt(0) == "0") {
	   validChars = "01234567";
	   startFrom = 1;
	}
	for (var n = 0; n < argvalue.length; n++) {
		if (validChars.indexOf(argvalue.substring(n, n+1)) == -1) return false;
	}
  return true;
}

function validatecreditForm()
{
	var x=document.forms["creditform"]["cardnumber"].value;
	if (x==null || x=="" || !isDigits(x) )
	  {
	  alert("Card Number salah");
	  return false;
	  }
	var y=document.forms["creditform"]["nameoncard"].value;
	if (y==null || y=="")
	  {
	  alert("Name on Card harus diisi");
	  return false;
	  }			
}