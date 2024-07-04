<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Incorrect email or password</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        .container-popup {
            width: 100%;
            height: 100vh;
            background: #3c5077;
            display: flex;
            align-items: center;
            justify-content: center;
        }
            .popup {
            width: 400px;
            background: #fff;
            border-radius: 6px;
            text-align: center;
            padding: 0 30px 30px;
            color: #333;
        }


        .popup img {
            width: 35%;
            margin-top: -50px;
            border-radius: 50%;
            box-shadow: 0 2px 5px rgba(0,0,0,0.2);
        }

    .popup h2{
        font-size: 38px;
        font-weight: 500;
        margin: 30px 0 10px;
    }

    .popup button {
        width: 100%;
        margin-top: 50px;
        padding: 10px 0;
        background: #6fd649;
        color: #fff;
        border: 0;
        outline: none;
        font-size: 18px;
        border-radius: 4px;
        cursor: pointer;
        box-shadow: 0 5px 5px rgba(0,0,0,0.2);
    }
    </style>
</head>
<body>
    <div class="container-popup">
        <div class="popup" id="popup">
            <img src="Components/cross.png" alt="Tick">
            <h2>Incorrect Password!</h2>
            <p>Please Try Again!</p>
            <button type="button"><a href="Login/login.php" style="text-decoration: none; color: #fff;">OK</a></button>
        </div>
    </div>
    
</body>
</html>