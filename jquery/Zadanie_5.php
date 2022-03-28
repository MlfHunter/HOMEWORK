<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-latest.js"></script>
    <script>
        $(document).ready(function () {
            $("p").click(function () {
                $(this).hide();
            });
        });
    </script>
</head>
<body>

</head>
<body>
    <p>If you click on me, I will disappear.</p>
    <p>Click me away!</p>
    <p>Click me too!</p>

    <button class="btn btn-danger">Click me</button>


</body>
</html>