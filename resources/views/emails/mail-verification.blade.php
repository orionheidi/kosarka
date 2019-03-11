<!DOCTYPE html>
<html>
<head>
    <title>Welcome Email</title>
</head>
<body>
    <h2>Welcome to the site {{ $user->name }}</h2>
    <br/>
    <p>Your registered email-id is {{ $user->email }} , Please click on the below link to verify your email account.</p>
    <br/>
    <a href="{{ route('verification', ['verify_token' => $user->verify_token ]) }}">Verification link</a>
</body>
</html>