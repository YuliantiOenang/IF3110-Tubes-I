function toggleLogin()
{
	x=document.getElementById('loginPop');
	if (x.style.display=="inline")	{
		x.style.display="none";
		document.getElementById('searchBox').focus()
	}
	else{
		x.style.display="inline";
		document.getElementById('username').focus()
	}
}