<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week 12</title>
    <style type="text/css">
        #box1 {
            background-color: blue;
            width: 100px;
            height: 100px;
            z-index: 0;
        }

        #box2 {
            background-color: yellow;
            width: 100px;
            height: 100px;

            position: absolute;
            left: 20px;
            top: 20px;
            z-index: 1;
        }

        #box3 {
            background-color: red;
            width: 100px;
            height: 100px;

            position: absolute;
            left: 40px;
            top: 40px;
            z-index: 2;
        }
    </style>
</head>

<body>
    <div id="box1"></div>
    <div id="box2"></div>
    <div id="box3"></div>

</body>

</html>