function toggleLogin()
{
	x=document.getElementById('loginPop');
	if (x.style.display=="inline-block")	{
		x.style.display="none";
		document.getElementById('searchBox').focus()
	}
	else{
		x.style.display="inline-block";
		document.getElementById('username').focus()
	}
}