<?php require SITEPATH . '/app/views/head.php' ?>

<body> 
    <div id="container">
        <?php require SITEPATH . '/app/views/header.php' ?>

		<form action="<?php echo SITEURL . '/register/new_customer' ?>" method="post">
            <h2>Customer Register</h2>
            <div class="form-group">
                <label for="username">Username: </label>
                <input type="text" id="username" name="username" class="form-control"/>
            </div>
            <div class="form-group">
                <label for="email">Email: </label>
                <input type="email" id="email" name="email" class="form-control"/>
            </div>
            <div class="form-group">
                <label for="password">Password: </label>
                <input type="password" id="password" name="password" class="form-control"/>
            </div>
            <div class="form-group">
                <label for="confirm-password">Confirm Password: </label>
                <input type="password" id="confirm-password" class="form-control"/>
            </div>
            <div class="form-group">
                <label for="fullname">Fullname: </label>
                <input type="text" id="fullname" name="fullname" class="form-control"/>
            </div>
            <div class="form-group">
                <label for="phone">Handphone: </label>
                <input type="tel" id="phone" name="phone" class="form-control"/>
            </div>
            <div class="form-group">
                <label for="address">Address: </label>
                <input type="text" id="address" name="address" class="form-control"/>
            </div>
            <div class="form-group">
                <label for="city">City: </label>
                <input type="text" id="city" name="city" class="form-control"/>
            </div>
            <div class="form-group">
                <label for="province">Province: </label>
                <input type="text" id="province" name="province" class="form-control"/>
            </div>
            <div class="form-group">
                <label for="postcode">Post Code: </label>
                <input type="tel" id="postcode" name="postcode" class="form-control"/>
            </div>
            <button type="submit" class="btn">Register</button>
        </form>
	</div>
</body>
</html>