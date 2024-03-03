<?php
$correctPassword = "0000";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $enteredPassword = $_POST["password"];

    if ($enteredPassword === $correctPassword) {
        header("Location: https://www.youtube.com/watch?v=ZD-3UEO4BwM&t=107s.mp4");
        exit();
    } else {
        $errorMessage = "Неправильный пароль. Попробуйте еще раз.";
    }
}

    if (isset($errorMessage)) {
    echo "<p>$errorMessage</p>";
}
        
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Авторизация</title>
</head>
<body>


<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="password">Пароль:</label>
    <input type="password" name="password" required>
    <button type="submit">Войти</button>
</form>

</body>
</html>
