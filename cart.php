<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart | Print Zone</title>
</head>
<body>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details Submitted!</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

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
            <img src="tick.png" alt="Tick">
            <h2>Thank You for Purchasing!</h2>
            <p>For Placing order , Please contact at our mobile number or email address</p>
            <button type="button"><a href="contact.php" style="text-decoration: none; color: #fff;">OK</a></button>
        </div>
    </div>

</body>
</html>
</body>
</html>