<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>

        * {
        box-sizing: border-box;
        }

        body {
        margin: 0;
        font-family: Arial, Helvetica, sans-serif;
        }

        .header {
        text-align: center;
        padding: 32px;
        }

        .row {
        display: -ms-flexbox; /* IE 10 */
        display: flex;
        -ms-flex-wrap: wrap; /* IE 10 */
        flex-wrap: wrap;
        padding: 0 4px;
        }

        /* Create two equal columns that sits next to each other */
        .column {
        -ms-flex: 25%; /* IE 10 */
        flex: 25%;
        padding: 0 4px;
        }

        .column img {
        margin-top: 8px;
        vertical-align: middle;
        width: 100%;
        }

    </style>

    <script>

        

        var elements = document.getElementsByClassName("column");
        var i;
        
        for (i = 0; i < elements.length; i++) {
            elements[i].style.msFlex = "25%";  // IE10
            elements[i].style.flex = "25%";
        }

    </script>

</head>
<body>

    <div class="row">
        <div class="column">
            <img src="../img/foto8.jpg">
            <img src="../img/foto9.jpg">
            <img src="../img/foto10.jpg">
        </div>
        <div class="column">
            <img src="../img/foto9.jpg">
            <img src="../img/foto8.jpg">
            <img src="../img/foto10.jpg">
        </div>
        <div class="column">
            <img src="../img/foto10.jpg">
            <img src="../img/foto9.jpg">
            <img src="../img/foto8.jpg">
        </div>
        <div class="column">
            <img src="../img/foto8.jpg">
            <img src="../img/foto9.jpg">
            <img src="../img/foto10.jpg">
        </div>
    </div>
    
</body>
</html>