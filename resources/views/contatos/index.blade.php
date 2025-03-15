<html>
    <body>
        <h3>Essa é a visao dos contatos</h3>

        @foreach ($contatos as $contato)
            <p> {{$contato['nome']}} </p>
            <p> {{$contato['cel']}} </p>
        @endforeach
    </body>
</html>