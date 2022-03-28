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
            $("button").click(function () {
                $("p").toggle(500);
            });
        });
    </script>
</head>
<body>

</head>
<body>
    <button class="btn btn-danger">Toggle</button>
    <p>This is a paragraph with little content.</p>
    <p>This is another small paragraph.</p>
</body>
</html>