<?php include '../config.php'; ?>
<?php include ROOT_PATH . '/admin/includes/admin_functions.php'; ?>

<?php
$admins = getAdminUsers();
$roles = ["Admin", "Author"];
?>

<?php include ROOT_PATH . '/admin/includes/head_section.php'; ?>
<title>Admin | Manager users</title>
</head>

<body>
    <?php include ROOT_PATH . '/admin/includes/navbar.php'; ?>

    <div class="action">
        <h1 class="page-title">Create/Edit Admin Users</h1>

        <form action="<?php echo BASE_URL . '/admin/users.php'; ?>" method="post">
            <?php include ROOT_PATH . '/includes/errors.php' ?>

            <?php if ($isEditingUser === true) : ?>
                <input type="hidden" name="admin_id" value="<?php echo $admin_id; ?>">
            <?php endif; ?>
            <input type="text" name="username" value="<?php echo $username; ?>" placeholder="Username">
            <input type="email" name="email" value="<?php echo $email; ?>" placeholder="Email">
            <input type="password" name="password" placeholder="Password">
            <input type="password" name="passwordConfirmation" placeholder="Password Confirmation">
            <select name="role">
                <option value="" selected disabled>Assign role</option>
                <?php foreach ($roles as $role) : ?>
                    <option value="<?php echo $role; ?>"><?php echo $role; ?></option>
                <?php endforeach; ?>
            </select>

            <?php if ($isEditingUser === true) : ?>
                <button type="submit" class="btn" name="update_admin">UPDATE</button>
            <?php else : ?>
                <button type="submit" class="btn" name="create_admin">Save Users</button>
            <?php endif; ?>
        </form>
    </div>

    <div class="table-div">
        <?php include ROOT_PATH . '/includes/messages.php'; ?>
        <?php if (empty($admins)) : ?>
            <h1>No admins in the database.</h1>
        <?php else : ?>
            <table class="table">
                <thead>
                    <th>N</th>
                    <th>Admin</th>
                    <th>Author</th>
                    <th colspan="2">Action</th>
                </thead>
                <tbody>
                    <?php foreach ($admins as $key => $admin) : ?>
                        <tr>
                            <td><?php echo $key + 1; ?></td>
                            <td>
                                <?php echo $admin["username"]; ?>, &nbsp;
                                <?php echo $admin["email"]; ?>
                            </td>
                            <td><?php echo $admin["role"]; ?></td>
                            <td>
                                <a href="users.php?edit-admin=<?php echo $admin['id']; ?>" class="fa fa-pencil btn edit"></a>
                            </td>
                            <td>
                                <a href="users.php?delete-admin=<?php echo $admin['id']; ?>" class="fa fa-trash btn delete"></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php endif; ?>
    </div>
</body>

</html>