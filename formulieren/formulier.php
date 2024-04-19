<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulier</title>
</head>
<body>
    <form action="processform.php" method="post">
        <p>
        <label for="firstname">voorname</label>
        <input type="text" name="firstname" required>
        </p>
    <p>
    <label for="lastname">achternaam</label>
        <input type="text" name="lastname" required>
    </p>
<p>
<label for="birthDay">geboortedatum</label>
<input type="text" name="birthDay" required>
</p>
<p>
    <input type="submit" name="exampleForm" value="insturen">
</p>
    </form>
</body>
</html>