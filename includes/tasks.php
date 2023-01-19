
<?php
$api_url = 'https://www.boredapi.com/api/activity';

// Read JSON file
$json_data = file_get_contents($api_url);

// Decode JSON data into PHP array
$response_data = json_decode($json_data);

// All user data exists in 'data' object
$activity_text = $response_data->activity;
$activity_type = $response_data->type;
$activity_participants = $response_data->participants;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unbored - Random Tasks</title>
    <style>
       @import url('https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap'); 
        body{
            background-color: black;
            color: aliceblue;
            margin: 0;
            padding: 0;
            font-family:sans-serif;
            
        }
        img{
            width: 300px;
            height: auto;
        }
        .main{
            display: flex;
            flex-direction: column;
            align-items: center;
            margin:50px
        }
        
        .container>p{
               
               
                font-size: 20px;
        }
        h2{
            margin-bottom: 30px;
            font-family: 'Dancing Script', cursive;

        }
        button{
            margin-top: 30px;
            padding: 15px 30px;
            border: 3px solid whitesmoke;
            border-radius: 25px;
            background-color: #252525;
            color: white;
            cursor: pointer;
            font-size: 15px;
            position: absolute;
            bottom: 10%;
        }
        button:hover{
            background-color: #f0efef;
            color: rgb(21, 21, 21);
            transition: 0.5s;
            border: 3px solid rgb(72, 69, 69);

        }
    </style>
</head>
<body>
    <div class="main">
        
        <img src="logo.png" alt="">
        <h2>Getting Bored ? Here is some Fun Things you can do !</h2>
        <div class="container">
        <p>Task :     <?php echo $activity_text; ?></p>
        <p>Type :     <?php echo $activity_type; ?></p>
        <p>participants : <?php echo $activity_participants; ?></p>
        </div>
        <button onclick="location.reload()">Click me</button>

    </div>
</body>
</html>