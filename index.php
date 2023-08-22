<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #161516;
            color: #d6d6d6;
            font-family: 'Tahoma', 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            font-size: 18px;
        }

        .container {
            padding: 1em;
            max-width: fit-content;
        }
        
        .userName {
            padding: .55em;
            background-color: #3e0057;
            color: #ffeefe;
        }
    </style>
</head>
<body>
    <?php $name = 'Learn php' ?>
    <div class="container">
        <h1 class="userName">
            <?php echo $name?>
        </h1>
    </div>
    <div class="container">
        <p>
            Primeira coisa que fiz, foi criar este diretório, visível e executável pelo XAMPP </br>
            git/composer init </br>
        </p>
    </div>
</body>
</html>