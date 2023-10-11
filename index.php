<?php

include './functions.php'

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strong Password Generator</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body class="bg-secondary">

    <div class="container">
        <h1 class="text-center text-black my-5">
            Strong Password Generator
        </h1>

        <div class="row">
            <div class="col-8 m-auto">
                <div class="card p-4 py-5 border-0 bg-info d-flex align-items-center">
                    <form action="?getPassword" method="get">
                        <input type="number" name="pw_length" id="pw_length">
                        <button type="submit" class="btn btn-dark text-light py-1">Generate</button>
                    </form>
                    <span class="pt-4 fw-semibold">Your password: <?php echo getPassword($pw_length); ?></span>
                </div>
            </div>
        </div>
    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>