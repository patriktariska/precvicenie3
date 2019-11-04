<table>
    @foreach ($users as $user)
        <tr>
            <td>
                <strong>Meno a priezvisko: </strong>{{ $user->fname }} {{ $user->lname }}
            </td>
            <td>
                <strong>Email: </strong> {{ $user->email }}
            </td>
            <td>
                <strong>Vek: </strong> {{ $user->age }}
            </td>
            <td>
                <strong>Akcie: </strong>
                <a href="{{ action("UserController@showAction", ['id' => $user->id]) }}">Ukáž user-a</a>
                <a href="{{ action("UserController@deleteAction", ['id' => $user->id]) }}">Zmaž user-a</a>
            </td>
        </tr>
    @endforeach
</table>
<br><br>
<a href="{{route('welcome')}}">Hlavná stránka</a>