<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv='x-UA-compatible' content='IE=edge'>
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet" type="text/css" media="screen">
        <script src="main.js"></script>
        <style>
        body
        {
            background-color:aliceblue ;
            margin:0;
            padding:0;
            overflow-x: hidden;
            box-sizing: border-box;
        }
        .email-send
        {
            width: 100%;
            height: auto;
            padding: 25px 5px;
            font-size: 15px;
            background-color: lightgray;
        }
            </style>
    </head>
    <body>
    <div class="email-send">
        <h1>Register Email details</h1>
        <p><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTGH8aTyZc7ueU-oyd9Wq8n0YejtZVZMwPVEmGDaTAWPg&s"></p>
        <p>Hi i am just sending contact us detail in emails</p>
        <p>customer Name:{{$data["customers_name"]}}</p>
        <p>customer Email:{{$data["email"]}}</p>
        <p>customer Mobile:{{$data["mobile"]}}</p>
        <p>customer Subject:{{$data["DOB"]}}</p>
        <p>customer Message:{{$data["address"]}}</p>
        <p>Contact us email-us <a href="mailto:parekhaneri56@gmail.com">parekhaneri56@gmail.com</a></p>
        <p>Our Address: Tops Technology pvt ltd <br> 1st floor above sbi bank near <br> indira circle rajkot-360005 Gujarat</p>
    </div>
    </body>
</html>