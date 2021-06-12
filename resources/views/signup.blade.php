<html>
    <head>
        <link rel='stylesheet' href='{{url("css/strutturaStandard.css")}}'>
        <link rel='stylesheet' href='{{url("css/menu.css")}}'>
        <link rel='stylesheet' href='{{url("css/login.css")}}'>
        <script src='{{url("js/signup.js")}}' defer></script>
        <script src='{{url("js/menu.js")}}' defer></script>

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Area clienti - Registrazione</title>
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
            <h1>Inserisci le tue informazioni</h1>
            <form name='signup' method='post' enctype="multipart/form-data" autocomplete="off">
            <input type='hidden' name='_token' value='{{csrf_token()}}'>
                <div class="names">
                    <div class="name">
                        <div><label for='name'>Nome</label></div>
                        <div class="cella"><input type='text' name='name' value='{{ $old_name }}' ><span>Campo vuoto</span></div>
                    </div>
                    <div class="surname">
                        <div><label for='surname'>Cognome</label></div>
                        <div class="cella"><input type='text' name='surname' value='{{ $old_surname }}' ><span>Campo vuoto</span></div>
            
                    </div>
                </div>
                <div class="username">
                    <div><label for='username'>Nome utente</label></div>
                    <div class="cella"><input type='text' name='username' value='{{ $old_username }}'> <span></span></div>
                   
                </div>
                <div class="email">
                    <div><label for='email'>Email</label></div>
                    <div class="cella"><input type='text' name='email' value='{{ $old_email }}'> <span></span></div>
                   
                </div>
                <div class="password">
                    <div><label for='password'>Password</label></div>
                    <div class="cella"><input type='password' name='password' value='{{ $old_password }}'><span>Inserisci almeno 8 caratteri</span></div>
                    
                </div>
                <div class="submit">
                    <input type='submit' value="Registrati" id="submit">
                </div>
            </form>

            @if(session('errore'))
            <span class='errore'>{{ session('errore') }} </span>
            @endif
        
            <div class="signup">Hai un account? <a href="{{ 'login' }}">Accedi</a>
        </section>

        <footer>
            SuperStore - Contatti: XXXX</br>
            Powered by Giovanni Traina O4602203
        </footer>

    </body>
</html>