<?php include './config.php'; ?>
<?php include './includes/registration_login.php'; ?>
<?php include './includes/head_section.php'; ?>

    <title>Life Blog | Sign in</title>
</head>
<body>
    <div class="container">
        <?php include ROOT_PATH . '/includes/navbar.php'; ?>

        <div style="width: 40%;margin: 20px auto;">
            <form action="login.php" method="post">
                <h2>Login</h2>
                <?php include ROOT_PATH . '/includes/errors.php';?>
                <input type="text" name="username" value="<?php echo $username; ?>" placeholder="Username">
                <input type="password" name="password" placeholder="Password">
                <button type="submit" class="btn" name="login_btn">Login</button>
                <p>
                    Not yet a member? <a href="register.php">Sign up</a>
                </p>
            </form>
        </div>
    </div>

    <?php include ROOT_PATH . '/includes/footer.php'; ?>