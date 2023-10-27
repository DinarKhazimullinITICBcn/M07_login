<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escull llenguatge</title>
</head>
<body>
    <?php 
        if (isset($_COOKIE["llenguatge"])) {
            header("Location: ../views/" . $_COOKIE["llenguatge"] ."/index.html");
        }
    ?>
    <form action="../crear_cookies/cookies.php" method="post">
        <label for="llenguatge">Escull un llenguatge:</label>
        <select name="llenguatge" id="llenguatge">
            <option value="catala">Catala</option>
            <option value="castella">Castella</option>
            <option value="angles">Ingles</option>
        </select>
        <input type="submit" name="send">
    </form>
</body>
</html>
