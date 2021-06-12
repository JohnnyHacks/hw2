<html>
    <head>
        <title>Punti vendita</title>
        <link rel='stylesheet' href='{{url("css/strutturaStandard.css")}}'>
        <link rel='stylesheet' href='{{url("css/menu.css")}}'>
        <link rel='stylesheet' href='{{url("css/puntivendita.css")}}'>
        <script src='{{url("js/puntivendita.js")}}' defer></script>
        <script src='{{url("js/menu.js")}}' defer></script>


        <script src='{{url("https://js.api.here.com/v3/3.1/mapsjs-core.js")}}'
        type="text/javascript" charset="utf-8"></script>
        <script src='{{url("https://js.api.here.com/v3/3.1/mapsjs-service.js")}}'
        type="text/javascript" charset="utf-8"></script>

        <meta name="viewport"

content="width=device-width, initial-scale=1">
    </head>

    <body>

    <div id="linksMenu" class ="hidden">
            <div id="headerMenu">
                <span>SuperStore</span>
                <span id="X">X</span>
            </div>
            
            <div class='linea'></div>

            <div class="colonnaLinks">
            <a href="{{ 'home' }}">Homepage</a>
            <div class='linea'></div>
            <a href="{{ 'listaprodotti' }}">Prodotti</a>
            <div class='linea'></div>
            <a href="{{ 'puntivendita' }}">Punti vendita</a>
            <div class='linea'></div>
            <a href="{{ 'login' }}">Area clienti</a>
            <div class='linea'></div>
            </div>
        </div>

        <header>
            <nav>
                <a href="{{ 'home' }}" id="logo"> SuperStore</div>
                <div id="links">
                    <a href="{{ 'listaprodotti' }}">Prodotti</a>
                    <a>Punti vendita</a>
                    <a href="{{ 'login' }}" class="pulsante">Area clienti</a>
                </div>

                <div id="menu">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </nav>
        </header>

        <div class="listaSupermercati">
            <h1>Attualmente la nostra catena è proprietaria di </h1>
            <h2>La nostra catena fa parte dell'azienda </h2>
            <div class="lineagrigia"></div>
            <h3>Di seguito le informazioni riguardanti i vari punti vendita:</h3>
            <div class="sezioneTesto"></div>
        </div>

        <footer>
            SuperStore - Contatti: XXXX</br>
            Powered by Giovanni Traina O4602203
        </footer>
    

    </body>
</html>