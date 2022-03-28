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
            $("input").focus(function () {
                $(this).css("background-color", "#cccccc");
            });
            $("input").blur(function(){
                $(this).css("background-color", "#ffffff");
            });
        });
        
    </script>
</head>
<body>

</head>
<body>
    name: <input type="text" name="fullname"><br>
    Email: <input type="text" name="email">
</body>
</html>