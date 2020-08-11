<?php
$username = "";
$email = "";
$errors = array();

if (isset($_POST['reg_user'])) {
    $username = esc($_POST["username"]);
    $email = esc($_POST["email"]);
    $password = esc($_POST["password_1"]);
    $password_confirmation = esc($_POST["password_2"]);

    if (empty($username)) {
        array_push($errors, "Uhmm... We gonna need your username");
    }
    if (empty($email)) {
        array_push($errors, "Oops... Email is missing");
    }
    if (empty($password)) {
        array_push($errors, "Uh-oh you forgot the password");
    }
    if ($password !== $password_confirmation) {
        array_push($errors, "The two passwords do not match");
    }

    $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1;";
    $result = mysqli_query($conn, $user_check_query);

    $user = mysqli_fetch_assoc($result);

    if ($user) {
        if ($user["username"] === $username) {
            array_push($errors, "Username already exists");
        }
        if ($user["email"] === $email) {
            array_push($errors, "Email already exists");
        }
    }

    if (count($errors) === 0) {
        $password = hash("sha256", $password);
        $query = "INSERT INTO users (username, email, password, created_at, updated_at)
                  VALUES('$username', '$email', '$password', now(), now())";

        mysqli_query($conn, $query);

        $reg_user_id = mysqli_insert_id($conn);

        $_SESSION["user"] = getUserById($reg_user_id);

        if (in_array($_SESSION["user"]["role"], ["Admin", "Author"])) {
            $_SESSION["message"] = "You are now logged in";

            header("location: " . BASE_URL . "/admin/dashboard.php");
            exit(0);
        } else {
            $_SESSION["message"] = "You are now logged in";
            header("location: index.php");
            exit(0);
        }
    } else {
        array_push($errors, "Wrong credentials");
    }
}

if (isset($_POST["login_btn"])) {
    $username = esc($_POST["username"]);
    $password = esc($_POST["password"]);

    if (empty($username)) {
        array_push($errors, "Username required");
    }
    if (empty($password)) {
        array_push($errors, "Password required");
    }
    if (empty($errors)) {
        $password = hash("sha256", $password);
        $sql = "SELECT * FROM users WHERE username='$username' AND password='$password' LIMIT 1;";

        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            $reg_user_id = mysqli_fetch_assoc($result)['id'];

            $_SESSION["user"] = getUserById($reg_user_id);
            $_SESSION["message"] = "You are now logged in";

            if (in_array($_SESSION["user"]["role"], ["Admin", "Author"])) {
                header("location: " . BASE_URL . "/admin/dashboard.php");
                exit(0);
            } else {
                header("location: " . BASE_URL . "/index.php");
                exit(0);
            }
        } else {
            array_push($errors, "Wrong credentials");
        }
    }
}
?>

<?php
function esc(String $value)
{
    global $conn;
    $val = trim($value);
    $result = mysqli_real_escape_string($conn, $val);

    return $result;
}

function getUserById($id)
{
    global $conn;
    $sql = "SELECT id, username, email, role FROM users WHERE id=$id LIMIT 1;";

    $result = mysqli_query($conn, $sql);
    $user = mysqli_fetch_assoc($result);

    //  ["id"]=> string int ["username"]=>string ["email"]=>string ["role"]=>null|string
    return $user;
}
