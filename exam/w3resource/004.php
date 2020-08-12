<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>

<body>
    <form method="post">
        <h2>Please input your name:</h2>
        <input type="text" name="name">
        <button type="submit">Submit Name</button>
    </form>
    <p><b><?php echo $_POST['name']; ?></b></p>
</body>

</html>