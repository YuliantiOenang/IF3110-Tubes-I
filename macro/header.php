<?PHP
  echo "<head>
    <title>KasKong</title>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"css/header.css\">
    <script src=\"script/header_home.js\"></script>
  </head>
  <div id=\"headerMenu\">
		<a href=\"\">
	    <img id='logo' src=\"images/logo.png\">
	  </a>  
	  <li><a href=\"page/asdf.php\">Makanan</a></li>
	  <li><a href=\"page/asdf.php\">Minuman</a></li>
	  <li><a href=\"page/asdf.php\">Pakaian</a></li>
	  <li><a href=\"page/asdf.php\">Rumah</a></li>
	  <li><a href=\"page/asdf.php\">Plus-Plus</a></li>
	  <div id='rightBox'>
	    <a id=\"shopbag\" href=\"#\"><img src=\"images/shopbag.png\"></a></p>
	    <div id=\"headerControl\">
        <button onclick=\"toggleLogin()\">Login</button>
        <button>Register</button>
        welcome username!
        <button >Logout</button>
      </div>
	  </div>
  <div id=\"loginPop\">
    <form id='loginForm' method=\"post\" autocomplete=\"off\">
      <table>  
        <tr>  
         <td>  
           Username:  
         </td>  
         <td>  
           <input style=\"width: 125px;\" type=\"text\" name=\"user\" />  
         </td>  
        </tr>  
        <tr>  
         <td>
           Password:  
         </td>  
         <td>  
           <input style=\"width: 125px;\" type=\"password\" name=\"pass\" />  
         </td>
        </tr>  
        <tr>
         <td colspan=\"2\" align=\"right\" valign=\"bottom\">  
           <input type=\"submit\" id=\"subLog\" value=\"Log me in!\"   />
         </td>  
        </tr>  
        </table>
    </form>
  </div>
	  <h3>Barang? Boleh sama... Kualitas? Dijamin <i>Oeh</i> punya!</h3>
	</div>";
?>