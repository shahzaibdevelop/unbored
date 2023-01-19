
<?php
$api_url = 'https://evilinsult.com/generate_insult.php?lang=en&type=json';

// Read JSON file
$json_data = file_get_contents($api_url);

// Decode JSON data into PHP array
$response_data = json_decode($json_data);

// All user data exists in 'data' object
$insult = $response_data->insult;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unbored - Random Jokes</title>
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
            justify-content: center;
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
        .container{
            width: 300px;
        }

    </style>
</head>
<body>
    <div class="main">
        <h2>Wana Get Roasted ?</h2>
        <div class="container">
        <p>Roast :     <?php echo $insult; ?></p>
        </div>
        <button onclick="location.reload()">Roast Me</button>

    </div>
</body>
</html>