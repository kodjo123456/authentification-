<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Authentification</title>
</head>

<body>
    <form action="{{ route('login.process') }}" method="POST">
        @csrf
        <h1>Connexion</h1>

        @if ($errors->any())
           <ul class="alert alert-danger">
              {!! implode('', $errors->all('<li>:message</li>')) !!}
           </ul>
        @endif

        @if ($message = Session::get('errors'))
            <div>{{ $message }}</div><br />
        @endif

        <label for="email">Email</label><br />
        <input type="text" name="email" id="email" placeholder="Saisir l'e-mail ici ..."><br /><br />
    
        <label for="password">Mot de passe</label><br />
        <input type="password" name="password" id="password" placeholder="Saisir le mot de passe ici ..."><br /><br />

        <a href="{{ route('registration') }}">S'inscrir</a><br /><br />

        <button type="submit">Soumettre</button>
    </form>    
</body>

</html>