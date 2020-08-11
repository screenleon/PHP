<?php include './config.php'; ?>
<?php include './includes/registration_login.php'; ?>
<?php include './includes/head_section.php'; ?>

    <title>Life Blog | Sign up</title>
</head>
<body>
    <div class="container">
        <?php include ROOT_PATH . '/includes/navbar.php'; ?>

        <div style="width: 40%;margin: 20px auto;">
            <form action="register.php" method="post">
                <h2>Register on LifeBlog</h2>
                <?php include ROOT_PATH . '/includes/errors.php'; ?>
                <input type="text" name="username" value="<?php echo $username; ?>" placeholder="Username">
                <input type="email" name="email" value="<?php echo $email; ?>" placeholder="Email">
                <input type="password" name="password_1" placeholder="Password">
                <input type="password" name="password_2" placeholder="Password Confirmation">
                <button type="submit" class="btn" name="reg_user">Register</button>
                <p>
                    Already a member? <a href="login.php">Sign in</a>
                </p>
            </form>
        </div>
    </div>

    <?php include ROOT_PATH . '/includes/footer.php'; ?>