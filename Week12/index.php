<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week 12</title>
    <style>
        div {
            border: 2px solid black;
            width: 100px;
            height: 100px;
        }
        .container{
            border: 3px solid blue;
            position: relative;
            width: 300px;
            height: auto;
        }

        #box1 {
            position: relative;
            top: 50px;
            left: 30px;

        }

        #box2 {
            background-color: red;
            border: solid black;
            position: relative;
            top: 30px;
            left: 230px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div id="box1"></div>
        <div id="box2"></div>
        <div id="box3"></div>
    </div>

</body>

</html>