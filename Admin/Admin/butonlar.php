<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body, html {
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: column;
        }
        a{
            font-size: 70px;
            text-decoration: none;
            color: #fff;
        }

        #ana-menü {
            display: flex;
            flex-direction: column;
            width: 100%;
            height: 100%;
        }

        .menu-group {
            display: flex;
            flex: 1;
            width: 100%;
        }

        .menu-group button {
            flex: 1;
            margin: 5px;
            font-size: 1.5em;
            cursor: pointer;
            border: 1px solid #ccc;
            background-color: #83C9F7;
            transition: background-color 0.3s;
        }

        .menu-group button:hover {
            background-color: #cde8fa;
        }
    </style>
</head>
<body>
    <div id="ana-menü">
        <div id="ana-1" class="menu-group">
            <button><a href="./AnaSayfa">Ana Sayfa</a></button>
            <button><a href="./Kitaplar">Kitaplar</a></button>
        </div>
        <div id="ana-2" class="menu-group">
            <button><a href="./Defterler">Defterler</a></button>
            <button><a href="./Kalemler">Kalemler</a></button>
        </div>
        <div id="ana-3" class="menu-group">
            <button><a href="./Silgiler">Silgiler</a></button>
            <button><a href="./Kalemtraşlar">Kalemtraşlar</a></button>
        </div>
        <div id="ana-4" class="menu-group">
            <button><a href="./Cantalar">Çantalar</a></button>
            <button><a href="./Boyalar">Boyalar</a></button>
        </div>
    </div>
</body>
</html>
