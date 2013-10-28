<?php require SITEPATH . '/app/views/head.php' ?>

<body> 
    <div id="container">
        <?php require SITEPATH . '/app/views/header.php' ?>

		<form action="<?php echo SITEURL . '/register/new_creditcard' ?>" method="post">
            <h2>Credit Card Register</h2>
            <p>Registrasi sebelumnya sudah disimpan, jangan khawatir</p>
            <div class="form-group">
                <label for="card_name">Name in Card: </label>
                <input type="text" id="card_name" name="card_name" class="form-control"/>
            </div>
            <div class="form-group">
                <label for="card_number">Card Number: </label>
                <input type="text" id="card_number" name="card_number" class="form-control"/>
            </div>
            <div class="form-group">
                <label for="card_expired">Expired: </label>
                <input type="date" id="card_expired" name="card_expired" class="form-control"/>
            </div>
            <button type="submit" class="btn">Register</button>
        </form>
	</div>
</body>
</html>