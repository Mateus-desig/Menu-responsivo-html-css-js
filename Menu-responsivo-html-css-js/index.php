<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Menu responsivel</title>
</head>
<body>
    <div class="container">
        <input type="checkbox" id="bt_menu"/>
        <label for="bt_menu">&#9776;</label>  
        <i id="search_btns" class="material-icons mobile">search</i>
        <nav class="menu">
            <ul>
                <h1>Filmes hd</h1>
                <li onmouseover="mudaFoto('https://pt.seaicons.com/wp-content/uploads/2015/11/home-icon.png')" onmouseout="voltaFoto()"><a href="#">Home</a></li>
                <li onmouseover="mudaFoto('https://cdn.icon-icons.com/icons2/2248/PNG/512/movie_open_icon_135382.png')" onmouseout="voltaFoto()"><a href="#">Filmes</a></li>
                <li onmouseover="mudaFoto('https://cdn.pixabay.com/photo/2018/05/15/20/47/microphone-3404243_960_720.png')" onmouseout="voltaFoto()"><a href="#">Dublado</a></li>
                <li onmouseover="mudaFoto('https://img.icons8.com/metro/452/list.png')" onmouseout="voltaFoto()"><a href="#">Gêneros</a></li>
            <i onmouseover="mudaFoto('https://img.icons8.com/metro/452/search.png')" onmouseout="voltaFoto()" id="search_btn" class="material-icons desktop">search</i>
            </ul>
        </nav>
    </div>
    <div class="boxContainer" id="search">
        <table class="elementsContainer">
            <form id="search" method="get" action="#">
                <td>
                    <input type="text" name="pesquisar" class="search" placeholder="Nome do anime" >
                </td>
                <td>
                    <button class="search-button"><i class="material-icons search_icon">search</i></button>
                </td>
            </form>
        </table>
    </div>
    <div id="efeito">
    <hr/>
    <img id="icone_menu" src="https://carlinhosuniformes.com.br/wp-content/uploads/2019/03/SEU-LOGO.png" />
    </div>
</body>
    <script src="js/script.js"></script>
</html>