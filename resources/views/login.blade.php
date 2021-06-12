<html>
    <head>
        <link rel='stylesheet' href='{{url("css/strutturaStandard.css")}}'>
        <link rel='stylesheet' href='{{url("css/menu.css")}}'>
        <link rel='stylesheet' href='{{url("css/login.css")}}'>
        <script src='{{url("js/menu.js")}}' defer></script>

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Area clienti - Accesso</title>
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
                    <a class="pulsante">Area clienti</a>
                </div>

                <div id="menu">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </nav>
        </header>

        <section>
            <h1>Inserisci le tue credenziali</h1>
            <form name='login' method='post'>
            <input type='hidden' name='_token' value='{{csrf_token()}}'>
    
                <div class="username">
                    <div><label for='username'>Nome utente</label></div>
                    <div class="cella"><input type='text' name='username' value='{{ $old_username }}'></div>
                </div>
                <div class="password">
                    <div><label for='password'>Password</label></div>
                    <div class="cella"><input type='password' name='password' value='{{ $old_password }}'></div>
                </div>

                @if(session('errore'))
                <span class='errore'>{{ session('errore') }} </span>
                @endif

                <div class="accesso">
                    <input type='submit' value="Accedi">
                </div>
            </form>
            <div class="signup">Non hai un account? <a href="{{ 'signup' }}">Iscriviti</a>
        </section>

        <footer>
            SuperStore - Contatti: XXXX</br>
            Powered by Giovanni Traina O4602203
        </footer>

    </body>
</html>