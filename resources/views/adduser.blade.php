<form method="post" action="{{ action('UserController@insertAction') }}">
    <strong>Meno:</strong><br>
    <input type="text" name="fname" placeholder="Meno používateľa" required>
    <br>
    <strong>Priezvisko:</strong><br>
    <input type="text" name="lname" placeholder="Priezvisko používateľa" required>
    <br>
    <strong>Email:</strong><br>
    <input type="email" name="email" placeholder="Email používateľa" required>
    <br>
    <strong>Vek:</strong><br>
    <input type="number" name="age" min="18" max="80" required>
    <br><br>
    <button type="submit">Odoslať</button>
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
</form>
<a href="{{route('welcome')}}">Hlavná stránka</a>