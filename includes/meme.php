
<?php
$api_url = 'https://meme-api.com/gimme';

// Read JSON file
$json_data = file_get_contents($api_url);

// Decode JSON data into PHP array
$response_data = json_decode($json_data);

// All user data exists in 'data' object
$meme = $response_data->url;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unbored - Random Meme</title>
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
           height: 400px;
        }
        
        .container>p{
                font-size: 20px;
        }
        h2{
          
            font-family: 'Dancing Script', cursive;

        }
        button{
           
            padding: 15px 30px;
            border: 3px solid whitesmoke;
            border-radius: 25px;
            background-color: #252525;
            color: white;
            cursor: pointer;
            font-size: 15px;
            width: 140px;
            /* margin-top: 5%; */
            position: absolute;
            bottom: 7%;
          
        }
        button:hover{
            background-color: #f0efef;
            color: rgb(21, 21, 21);
            transition: 0.5s;
            border: 3px solid rgb(72, 69, 69);
        }
        .main{
            display: flex;
            flex-direction: column;
          justify-content: center;
          align-items: center;
        }
    
    </style>
</head>
<body>
    <div class="main">
        
        
        <h2>Wana See Some Memes ?</h2>
        <div class="container">
      <img src="<?php echo "$meme" ?>" alt="">
    </div>
    
    <button onclick="location.reload()">Click me</button>
    </div>
</body>
</html>