<?php require SITEPATH . '/app/views/head.php' ?>

<body> 

<?php require SITEPATH . '/app/views/header.php' ?>

	<div id="container">
		<form  role="form">
            <h1>Create Logon</h1>
            <div class="form-group">
            	<label for="username">Username: </label>
            	<input type="text" id="username" />
            </div>
            <div class="form-group">
            	<label for="password">Password: </label>
            	<input type="password" id="password" />
        	</div>
        	<div class="form-group">
            	<label for="confirm-password">Confirm Password: </label>
            	<input type="password" id="confirm-password" />
        	</div>
            <div class="form-group">
            	<label for="fullname">Fullname: </label>
            	<input type="text" id="fullname" />
        	</div>
            <div class="form-group">
            	<label for="email">Email: </label>
            	<input type="email" id="email" />
        	</div>
            <div class="form-group">
            	<label for="handphone">Handphone: </label>
            	<input type="tel" id="handphone" />
        	</div>
            <div class="form-group">
            	<label for="address">Address: </label>
            	<input type="text" id="address" />
        	</div>
        	<div class="form-group">
            	<label for="city">City: </label>
            	<input type="text" id="city" />
        	</div>
        	<div class="form-group">
            	<label for="province">Province: </label>
            	<input type="text" id="province" />
        	</div>
            <div class="form-group">
            	<label for="postcode">Post Code: </label>
            	<input type="tel" id="postcode" />
        	</div>
            <button type="submit" class="btn">Register</button>
            </form>
	</div>

</body>
</html>