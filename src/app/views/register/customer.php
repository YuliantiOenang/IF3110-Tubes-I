<?php

/*** begin our session ***/
if (session_id() == '') session_start();

/*** set a form token ***/
$form_token = md5( uniqid('auth', true) );

/*** set the session form token ***/
$_SESSION['form_token'] = $form_token;
?>

<?php require SITEPATH . '/app/views/head.php' ?>

<body> 
    <div id="container">
        <?php require SITEPATH . '/app/views/header.php' ?>

		<form action="<?php echo SITEURL . '/register/new_customer' ?>" method="post">
            <h2>Customer Register</h2>
            <div class="form-group">
                <label for="username">Username: <span id="username-info"></span></label>
                <input type="text" id="username" name="username"  maxlength="16" onkeyup="checkUsername()" class="form-control"/>
            </div>
            <div class="form-group">
                <label for="email">Email: </label>
                <input type="email" id="email" name="email"  maxlength="32" class="form-control"/>
            </div>
            <div class="form-group">
                <label for="password">Password: </label>
                <input type="password" id="password" name="password"  maxlength="32" class="form-control"/>
            </div>
            <div class="form-group">
                <label for="confirm-password">Confirm Password: </label>
                <input type="password" id="confirm-password"  maxlength="32" class="form-control"/>
            </div>
            <div class="form-group">
                <label for="fullname">Fullname: </label>
                <input type="text" id="fullname" name="fullname"  maxlength="64" class="form-control"/>
            </div>
            <div class="form-group">
                <label for="phone">Handphone: </label>
                <input type="tel" id="phone" name="phone"  maxlength="16" class="form-control"/>
            </div>
            <div class="form-group">
                <label for="address">Address: </label>
                <input type="text" id="address" name="address"  maxlength="128" class="form-control"/>
            </div>
            <div class="form-group">
                <label for="city">City: </label>
                <input type="text" id="city" name="city"  maxlength="32" class="form-control"/>
            </div>
            <div class="form-group">
                <label for="province">Province: </label>
                <input type="text" id="province" name="province"  maxlength="32" class="form-control"/>
            </div>
            <div class="form-group">
                <label for="postcode">Post Code: </label>
                <input type="tel" id="postcode" name="postcode"  maxlength="5" class="form-control"/>
            </div>
            <input type="hidden" name="form_token" value="<?php echo $form_token; ?>" />
            <button type="submit" class="btn">Register</button>
        </form>
	</div>

<script src="<?php echo SITEURL . '/include/js/register.js' ?>"></script>
</body>
</html>