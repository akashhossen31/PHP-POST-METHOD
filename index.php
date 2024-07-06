<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP SOMITY</title>
</head>

<body>
    <form action="" method="post">
        <label for="">User name:</label>
        <input type="text" name="name" required><br> <br>
        <label for="">Email:</label>
        <input type="email" name="email" required><br><br>
        <label for="">Mobile Number:</label>
        <input type="text" name="phone" required><br><br>
        <label for="">Loan Ammout:</label>
        <input type="text" name="ammount" required><br><br>
        <button type="submit">Submit</button>
    </form>
    <h1>
        <?php
        echo $_POST["name"];
        ?>
    </h1>
    <h1><?php
        echo $_POST["email"];
        ?>
    </h1>
    <h1>
        <?php
        echo $_POST["phone"];
        ?>
    </h1>
    <h1>
        <?php
        echo $_POST["ammount"];
        ?>
    </h1>
</body>

</html>