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
                    $("a").hide();
                });
                $("#but2").click(function(){
                    $("a").show();
                });
            });
        </script>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
        
        
                <div class="col-md-12 block " style="background-color: white;" id="MsoNormal"></div>
                <div class="col-md-12 block " style="background-color: blue;" id="MsoNormal"> <a style="color: white;" href="https://vk.com/pornpank">Важная инфа</a></div>
                <div class="col-md-12 block " style="background-color: red;" id="MsoNormal"></div>
        
                <button id="but1" class="btn-info btn" >Ууу нажми меня</button>  
                <button id="but2" class="btn-info btn">А потом меня нажми</button>
            </div>
        </div>
        
    
    </body>
    </html>