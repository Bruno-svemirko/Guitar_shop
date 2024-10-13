<!DOCTYPE html>
<html>

<head>
    <title>PRIJAVA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .container {
            margin: 100px auto;
            width: 300px;
            text-align: center;
        }

        input[type="text"],
        input[type="password"],
        input[type="submit"] {
            display: block;
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
        }

        .title-container {
            background-color: #ffa500;
            padding: 10px;

        }

        .title {
            font-size: 36px;
            font-weight: bold;
            margin: 0;
            color: #fff;
            display: inline-block;
        }

        .guitar-logo {
            width: 50px;
            margin-right: 10px;
            float: left;
        }

        .strip {
            width: 100%;
            height: 5px;
            background-color: #ffa500;
            margin-top: -5px;
        }
    </style>
</head>

<body>
    <div class="title-container">
        <img src="guitar-logo.png" class="guitar-logo" alt="Guitar logo">
        <div class="title">Guitarshop.com</div>
    </div>
    <div class="strip"></div>
    <div class="container">
        <h2>PRIJAVA</h2>
        <form action="pocetna.php" method="POST">
            <input type="text" name="korisnik" placeholder="Korisnik" required>
            <input type="password" name="lozinka" placeholder="Lozinka" required>
            <input type="submit" value="Prijava">
        </form>
    </div>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $korisnik = $_POST['korisnik'];
        $lozinka = $_POST['lozinka'];

        if ($korisnik === 'admin' && $lozinka === '1234') {
            header('Location: guitarshop.php');
            exit;
        } else {
            echo "<script>alert('Pogrešno korisničko ime ili lozinka!');</script>";
        }
    }
    ?>
</body>

</html>