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
        <input type="text" name="url">
        <button type="submit">Submit URL</button>
    </form>
    <?php $url = parse_url($_POST['url']); ?>
    <?php
    echo "List of components : Scheme, Host, Path<br>";
    echo "Expected Output :<br>";
    if (isset($_POST['url'])) {
        echo "Scheme : " . $url['scheme'] . "<br>";
        echo "Host : " . $url['host'] . "<br>";
        echo "Path : " . $url['path'] . "<br>";
    }
    ?>

</body>

</html>