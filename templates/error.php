<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            height: 100vh;
            display: flex;
            background: darkred;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }
        h3 {
            color: white;
            font-family: sans-serif;
            text-transform: uppercase;
        }
    </style>
</head>
<body>
    <h3><?= $errorMessage ?></h3>
</body>
</html>