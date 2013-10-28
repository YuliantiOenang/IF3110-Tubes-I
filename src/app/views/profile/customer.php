<?php require SITEPATH . '/app/views/head.php' ?>

<body> 
    <div id="container">
        <?php require SITEPATH . '/app/views/header.php' ?>

        <h2>Profile</h2>
            <p>Username: <?php echo $customer['username'] ?> </p>
            <p>Email: <?php echo $customer['email'] ?> </p>
            <p>Password: ************ </p>
            <p>Fullname: <?php echo $customer['fullname'] ?> </p>
            <p>Handphone: <?php echo $customer['phone'] ?> </p>
            <p>Address: <?php echo $customer['address'] ?> </p>
            <p>City: <?php echo $customer['city'] ?> </p>
            <p>Province: <?php echo $customer['province'] ?> </p>
            <p>Post Code: <?php echo $customer['postcode'] ?> </p>
        <button type="submit" class="btn">Register</button>
	</div>
</body>
</html>