<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&display=swap" rel="stylesheet">
    <title><?= $title ?></title>
</head>

<body>
    <div class="container">
        <!-- Form Reset -->
        <div class="login-form">
            <h3><b>Reset your password here</b></h3>
            <form action="/login" method="POST">
                <div class="form-group mt-5">
                    <input type="password" name="password" class="form-control" placeholder="New Password" required>
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Repeat Password" required>
                </div>
                <button type="submit" class="btn btn-primary w-100 mt-3">Submit</button>
            </form>
        </div>

        <!-- Gambar -->
        <div class="login-image">
            <img src="/assets/img/forgotimage.png" alt="Login Image">
        </div>
    </div>

    <script src="/assets/js/script.js"></script>
</body>

</html>