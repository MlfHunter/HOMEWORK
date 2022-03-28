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
        $(document).ready(function(){
            $("#but1").click(function(){
                $("#test").hide();
            });
            $("#but2").click(function(){
                $("#test").show();
            });
        });
    </script>
</head>
<body>
    <h2>This is a heading 2</h2>
    <p>This is a paragraph.</p>
    <p id="test">This is another paragraph.</p>
    <button id="but1">Click me</button>
    <button id="but2">Click me for show</button>


</body>
</html>