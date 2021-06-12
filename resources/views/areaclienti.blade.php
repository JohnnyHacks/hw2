<html>

    <head>
        <link rel='stylesheet' href='{{url("css/strutturaStandard.css")}}'>
        <link rel='stylesheet' href='{{url("css/menu.css")}}'>
        <link rel='stylesheet' href='{{url("css/listaprodotti.css")}}'>
        <link rel='stylesheet' href='{{url("css/areaclienti.css")}}'>
        <script src='{{url("js/menu.js")}}' defer></script>
        <script src='{{url("js/areaclienti.js")}}' defer></script>

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Area clienti</title>
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
                    <a href="{{ 'puntivendita' }}">Punti vendita</a>
                    <a href="{{ 'login' }}" class="pulsante">Area clienti</a>
                </div>

                <div id="menu">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </nav>
        </header>

        <div class="logout">
            <a href="{{'logout'}}">Logout</a>
        </div>

        <section class="prodotti">
            <h1 id="scritta">Il mio carrello:</h1> 
            <label for="cerca">Cerca:</label><input type='text'>
            <div id="lista"></div>
            <div id='noelementi' class='hidden'>
                <span>Non ci sono prodotti nel tuo carrello</span>
            </div>
        </section>
       
        <footer>
            SuperStore - Contatti: XXXX</br>
            Powered by Giovanni Traina O4602203
        </footer>

    </body>
</html>

