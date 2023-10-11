<?php

//length 89

$lowercase = array_flip(range('a', 'z'));
$uppercase = array_flip(range('A', 'Z'));
$special = array_flip(str_split(('!@#$%^&*()_+=-}{[}]\|;:<>?/')));
$combined = array_merge($lowercase, $uppercase, $special);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strong Password Generator</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>

    <div class="container">
        <h1 class="text-center my-5">
            Strong Password Generator
        </h1>

        <div class="row">
            <div class="col-12">
                <form action="getPassword()" method="get">
                    <input type="text" name="pw_length" id="pw_length">
                    <input type="submit" value="Generate">
                </form>
            </div>
        </div>
    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>