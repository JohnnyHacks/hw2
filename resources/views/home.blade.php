<!DOCTYPE html>
<html>
    <head>
        <title>Superstore</title>
        <link rel='stylesheet' href='{{url("css/strutturaStandard.css")}}'>
        <link rel='stylesheet' href='{{url("css/menu.css")}}'>
        <link rel='stylesheet' href='{{url("css/home.css")}}'>
        <script src='{{url("js/menu.js")}}' defer></script>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Montaga&display=swap" rel="stylesheet">
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
                <a id="logo"> SuperStore</a>
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
            
            <h1>
                <strong>Trova le offerte piu' vantaggiose per te!</strong><br/>
                <a href="{{ 'ricetta' }}" class="pulsante">Scopri la ricetta del giorno</a>
            </h1>
        </header>

        <section>
            <h1>La nostra catena si trova nelle maggiori citta' italiane, portando con se qualita' e tradizione</h1>
            <p>Da anni ci poniamo al servizio del cliente</p> 

            <div class="container_immagine">
                <img src='{{url("img/home1.png")}}'>
                <div class="testo_immagine">
                    <h1>Prodotti bio</h1>
                    <p>Tra la nostra vasta gamma di prodotti potrete trovare anche alimenti bio, direttamente dal produttore al consumatore</p>
                </div>
            </div>

            <div class="container_immagine">
                    <img src='{{url("img/home2.jpg")}}'/>
                    <div class="testo_immagine">
                        <h1>Prodotti di macelleria</h1>
                        <p>Il nostro reparto macelleria offre prodotti sempre freschi di provenienza 100% italiana</p>
                    </div>
            </div>

            <div class="container_immagine">
                <img src='{{url("img/home3.jpg")}}'/>
                <div class="testo_immagine">
                    <h1>Prodotti surgelati</h1>
                    <p>Disponiamo di un grande assortimento di prodotti surgelati, perfetti per ogni situazione</p>
                </div>
        </div>
           
        </section>

        <footer>
        SuperStore - Contatti: XXXX</br>
        Powered by Giovanni Traina O4602203
        </footer>

    </body>
</html>