<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h6>heloo</h6>
    <input type="text">

    <?php
						session_start();
                        // echo $_SESSION['email'];
						if (isset($_SESSION['email'])) {
							echo $_SESSION['email'];
							unset($_SESSION['email']);
						}
						?>
</body>
</html>