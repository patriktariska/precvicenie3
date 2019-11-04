<form method="post" action="{{ action('UserController@updateUserAction', ['id' => $user->id]) }}">
    <strong>Meno:</strong><br>
    <input type="text" name="fname" value="{{ $user->fname }}" required>
    <br>
    <strong>Priezvisko:</strong><br>
    <input type="text" name="lname" placeholder="Priezvisko používateľa" value="{{ $user->lname }}" required>
    <br>
    <strong>Email:</strong><br>
    <input type="email" name="email" placeholder="Email používateľa" value="{{ $user->email }}" required>
    <br>
    <strong>Vek:</strong><br>
    <input type="number" name="age" min="18" max="80" value="{{ $user->age }}" required>
    <br><br>
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <button type="submit">Upraviť</button>
</form>
<a href="{{route('welcome')}}">Hlavná stránka</a>