<html>
    <head>
        <title>Prodotti</title>
        <link rel='stylesheet' href='{{url("css/strutturaStandard.css")}}'>
        <link rel='stylesheet' href='{{url("css/menu.css")}}'>
        <link rel='stylesheet' href='{{url("css/listaprodotti.css")}}'>
        <script src='{{url("js/menu.js")}}' defer></script>
        <script src='{{url("js/listaprodotti.js")}}' defer></script>

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
                    <a>Prodotti</a>
                    <a href="{{ 'puntivendita' }}" >Punti vendita</a>
                    <a href="{{ 'login' }}"class="pulsante">Area clienti</a>
                </div>

                <div id="menu">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </nav>
        </header>

        <section class="preferiti hidden">
            <h1>Prodotto aggiunto al carrello</h1>
        </section>

        <section class="prodotti">
            <h1 id="tuttiprodotti">Tutti i prodotti:</h1>
            <label for="cerca">Cerca:</label><input type='text'>
            <div id="lista"></div>
        </section>
        
        <footer>
            SuperStore - Contatti: XXXX</br>
            Powered by Giovanni Traina O4602203
        </footer>
    
    </body>
</html>