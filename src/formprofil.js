/**
 * @author Dimas
 */
function validuname(str,str2)
{
var xmlhttp;
if (str.length==0)
  { 
  document.getElementById("validHint").innerHTML="";
  return;
  }
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("validHint").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","validate.php?q="+str+"&r="+str2,true);
xmlhttp.send();
}