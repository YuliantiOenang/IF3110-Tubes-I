<html>
	<head>
		<link href="css/main.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" type="text/css" media="all" href="css/jsDatePick_ltr.min.css" />
        <script type="text/javascript" src="js/main.js"></script>
	</head>
	<body onload="loadRegex();">
        <div id="signin">
            <form onkeydown="enterButton(this.signin_button)">
                <div id="kolom_usrnm">
                    <input id="usrnm" class="input_field" type="text" placeholder="UserID">
                    <div><input type="checkbox">Tetap sign in</div>
                </div>
                <div id="kolom_psswrd">
                    <input id="psswrd" class="input_field" type="password" placeholder="Password">
                    <div>Lupa password?</div>
                </div>
                <input id="signin_button" class="input_button" type="button" value="Sign in" onclick="checkSignIn(this.form.usrnm.value, this.form.psswrd.value)">
            </form>
            <br>
            <strong id="error_signin" class="error_warning"></strong>
        </div>
        <br><br>
        <form action="php/register.php" method="post" enctype="multipart/form-data">
            <div>
                <input id="usrnm_signup" name="username" class="input_field" type="text" placeholder="Username" onkeydown="validate_username_exist(this.value); validate_username();">
                &nbsp;
                <strong id="error_username" class="error_warning"></strong>
                <strong id="error_username_exist" class="error_warning"></strong>
            </div>
			<div>
                <input id="nama_signup" name="full_name" class="input_field" type="text" placeholder="Nama lengkap" onkeydown="validate_nama();">
                &nbsp;
                <strong id="error_nama" class="error_warning"></strong>
            </div>
			<div>
                <input id="noHP_signup" name="no_HP" class="input_field" type="text" placeholder="Nomor Handphone" onkeydown="validate_noHP();">
                &nbsp;
                <strong id="error_noHP" class="error_warning"></strong>
            </div>
			<div>
                <input id="address_signup" name="address" class="input_field" type="text" placeholder="Alamat" onkeydown="validate_address();">
                &nbsp;
                <strong id="error_address" class="error_warning"></strong>
            </div>
			<div>
                <input id="province_signup" name="province" class="input_field" type="text" placeholder="Propinsi" onkeydown="validate_province();">
                &nbsp;
                <strong id="error_province" class="error_warning"></strong>
            </div>
			<div>
                <input id="city_signup" name="city" class="input_field" type="text" placeholder="Kota / Kabupaten" onkeydown="validate_city();">
                &nbsp;
                <strong id="error_city" class="error_warning"></strong>
            </div>
			<div>
                <input id="postcode_signup" name="postcode" class="input_field" type="text" placeholder="Kode Pos" onkeydown="validate_postcode();">
                &nbsp;
                <strong id="error_postcode" class="error_warning"></strong>
            </div>
			<div>
                <input id="email_signup" name="email" class="input_field" type="text" placeholder="Email" onkeydown="validate_email_exist(this.value); validate_email();">
                &nbsp;
                <strong id="error_email" class="error_warning"></strong>
                <strong id="error_email_exist" class="error_warning"></strong>
            </div>
            <div>
                <input id="psswrd_signup" name="password" class="input_field" type="password" placeholder="Password" onkeydown="validate_password()">
                &nbsp;
                <strong id="error_password" class="error_warning"></strong>
            </div>
            <div>
                <input id="cnfrm_psswrd_signup" class="input_field" type="password" placeholder="Confirm password" onkeydown="confirm_password()">
                &nbsp;
                <strong id="error_confirm_password" class="error_warning"></strong>
            </div>      
                <input id="signup_button" class="input_button" type="submit" value="Register" onmouseover="disable_signup_button()">
        </form>
        
    </body>
</html>