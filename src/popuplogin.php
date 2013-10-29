<!doctype html public "-//w3c//dtd html 3.2//en">
<html>
<head>
	<title>Form Login</title>

<meta name="description" content="Learn to open, close and navigate among JavaScript popup windows in the article on blazonry.com">
<meta name="author" content="Astonish Inc.">
<meta name="keywords" content="javascript, windows, popup windows, browser window, open, close, script, frame">
<meta http-equiv="content-language" content=en>

<link rel=stylesheet type="text/css" href="/style.css">

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-179491-1']);
  _gaq.push(['_setDomainName', '.blazonry.com']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

  function validLogin(){
      var uname=$('#uname').val();
      var password=$('#password').val();

      var dataString = 'uname='+ uname + '&password='+ password;
      $("#flash").show();
      $("#flash").fadeIn(400).html('<img src="image/loading.gif" />');
      $.ajax({
      type: "POST",
      url: "processed.php",
      data: dataString,
      cache: false,
      success: function(result){
               var result=trim(result);
               $("#flash").hide();
               if(result=='correct'){
			   		 javascript:opener.focus();
                     window.location='index.php';
					 javascript:self.close();
               }else{
                     $("#errorMessage").html(result);
               }
      }
      });
}

function trim(str){
     var str=str.replace(/^\s+|\s+$/,'');
     return str;
}
</script>

</head>

<body bgcolor="#ffffff">
<div id="container">
    <!--top section start-->
    <div id='top'>
         <p>Login User</p>
    </div>
    <div id="wrapper">
         <table align="center" class="login_box">
              <tr><td colspan="2" id="errorMessage"></td></tr>
              <tr>
                 <td>UserName</td>
                 <td><input type="text" name="uname" id="uname"></td>
              </tr>
              <tr>
                 <td>Password</td>
                 <td><input type="password" name="password" id="password"></td>
              </tr>
              <tr id="button_box">
                 <td>&nbsp</td>
                 <td><input type="button" name="submit" value="Submit" class="button" onclick="validLogin()"></td>
              </tr>
              <tr><td colspan="2" id="flash"></td></tr>
         </table>
    </div>
</div>
</body>
</html>
