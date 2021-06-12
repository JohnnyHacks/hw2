<html>

	<head>
		<title>Ricetta del giorno</title>
		<meta charset="utf-8">
    
        <link rel='stylesheet' href='{{url("css/strutturaStandard.css")}}'>
        <link rel='stylesheet' href='{{url("css/menu.css")}}'>
        <link rel='stylesheet' href='{{url("css/ricetta.css")}}'>
        <script src='{{url("js/ricetta.js")}}' defer></script>
        <script src='{{url("js/menu.js")}}' defer></script>
        
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
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

        <section id="sezione-ricetta">
            <div id="testo">
            </div>
            <div id="video">
                <iframe width="560" height="315" frameborder="0" allow="accelerometer;autoplay;clipboard-write; encrypted-MediaDeviceInfo; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </section>

        <section id="sezione-valoricibo">
            <form>
                Inserisci il nome di un prodotto di cui vuoi sapere i valori nutrizionali (l'inserimento deve essere fatto in inglese)
                <input type='text' id='prodotto'>
                <input type='submit' id='submit' value='Cerca'>
              </form>
              <div id="prodotto-scelto">

              </div>
        </section>


        <footer>
            SuperStore - Contatti: XXXX</br>
            Powered by Giovanni Traina O4602203
        </footer>
	</body>