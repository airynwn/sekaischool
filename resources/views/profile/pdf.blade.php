<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Perfil de {{ $user->name }}</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        h2 {
            color: #9D44FF;
            text-align: center;
        }

        .portada {
            text-align: center;
        }

        table {
            margin-left: auto;
            margin-right: auto;
            border-radius: 20px;
            border: #4254F5 1px solid;
            background: #4254F520;
        }

        th {
            background: #4254F550;
            border-radius: 20px;
            padding: 1em;
            text-align: left;
        }

        th.titulo {
            background: #9D44FF50;
        }

        table,
        td {
            border-radius: 20px;
            padding: 0.5em;
            color: #281f5f;
        }

        td {
            text-align: center;
        }

        td.color {
            background: #1B1731;
        }

        /******* COLORES *******/
        /*** Variables ***/
        /*** L/N ***/
        .grupo-1 {
            color: #45D;
        }

        .ichika {
            color: #3AE;
        }

        .saki {
            color: #FD4;
        }

        .honami {
            color: #E66;
        }

        .shiho {
            color: #BD2;
        }

        /*** MMJ ***/
        .grupo-2 {
            color: #6CCB20;
        }

        .minori {
            color: #FFCDAC;
        }

        .haruka {
            color: #99CDFF;
        }

        .airi {
            color: #FFA9CC;
        }

        .shizuku {
            color: #9AEEDE;
        }

        /*** VBS ***/
        .grupo-3 {
            color: #E16;
        }

        .kohane {
            color: #FF679A;
        }

        .an {
            color: #00BBDC;
        }

        .akito {
            color: #FF7721;
        }

        .toya {
            color: #07D;
        }

        /*** WxS ***/
        .grupo-4 {
            color: #F90;
        }

        .tsukasa {
            color: #FB0;
        }

        .emu {
            color: #FF66BC;
        }

        .nene {
            color: #34DD9A;
        }

        .rui {
            color: #BB88ED;
        }

        /*** N25 ***/
        .grupo-5 {
            color: #849;
        }

        .kanade {
            color: #BB6588;
        }

        .mafuyu {
            color: #8889CC;
        }

        .ena {
            color: #CCAA87;
        }

        .mizuki {
            color: #E4A8CA;
        }
    </style>
</head>

<body>
    <div class="portada">
        <h2>Perfil de {{ $user->name }}</h2>
        @if (isset($user->avatar))
            <img src="{{ $avatar }}" alt="Avatar de {{ $user->name }}" height="250" width="250">
        @endif
        <br>
        <br>
        <table>
            <tbody>
                <tr>
                    <th>Biografía</th>
                    <td>{{ $user->biografia ?? '' }}</td>
                </tr>
            </tbody>
        </table>
    </div>
    <br>
    <table>
        <thead>
            <tr>
                <th colspan="2" class="titulo"><h2>Datos personales</h2></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>Cumpleaños</th>
                <td>{{ $user->cumple ?? '' }}</td>
            </tr>
            <tr>
                <th>Twitter</th>
                <td>{{ $user->twitter ?? '' }}</td>
            </tr>
            <tr>
                <th>Discord</th>
                <td>{{ $user->discord ?? '' }}</td>
            </tr>
            <tr>
                <th>Personaje favorito</th>
                <td class="{{ strtolower(explode(' ', $user->pj_fav->nombre)[0]) }} color">
                    <strong>
                        {{ $user->pj_fav->nombre ?? '' }}
                    </strong>
                </td>
            </tr>
            <tr>
                <th>Grupo favorito</th>
                <td class="{{ 'grupo-'. $user->grupo_fav_id ?? '' }} color">
                    <strong>
                        {{ $user->grupo_fav->nombre ?? '' }}
                    </strong>
                </td>
            </tr>
        </tbody>
    </table>
    <br>
    <br>
    <br>
    <br>
    <table>
        <thead>
            <tr>
                <th colspan="2" class="titulo"><h2>Colección de cartas</h2></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>Cartas de cumpleaños</th>
                <td>
                    {{ $user->cartas()->where('rareza', 5)->wherePivot('estado', 'coleccion')->count() }}
                </td>
            </tr>
            <tr>
                <th>Cartas 4*</th>
                <td>
                    {{ $user->cartas()->where('rareza', 4)->wherePivot('estado', 'coleccion')->count() }}
                </td>
            </tr>
            <tr>
                <th>Cartas 3*</th>
                <td>
                    {{ $user->cartas()->where('rareza', 3)->wherePivot('estado', 'coleccion')->count() }}
                </td>
            </tr>
            <tr>
                <th>Cartas 2*</th>
                <td>
                    {{ $user->cartas()->where('rareza', 2)->wherePivot('estado', 'coleccion')->count() }}
                </td>
            </tr>
            <tr>
                <th>Cartas 1*</th>
                <td>
                    {{ $user->cartas()->where('rareza', 1)->wherePivot('estado', 'coleccion')->count() }}
                </td>
            </tr>
        </tbody>
    </table>
    <br>
    <table>
        <thead>
            <tr>
                <th colspan="2" class="titulo"><h2>Lista de deseos</h2></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>Cartas de cumpleaños</th>
                <td>
                    {{ $user->cartas()->where('rareza', 5)->wherePivot('estado', 'deseo')->count() }}
                </td>
            </tr>
            <tr>
                <th>Cartas 4*</th>
                <td>
                    {{ $user->cartas()->where('rareza', 4)->wherePivot('estado', 'deseo')->count() }}
                </td>
            </tr>
            <tr>
                <th>Cartas 3*</th>
                <td>
                    {{ $user->cartas()->where('rareza', 3)->wherePivot('estado', 'deseo')->count() }}
                </td>
            </tr>
            <tr>
                <th>Cartas 2*</th>
                <td>
                    {{ $user->cartas()->where('rareza', 2)->wherePivot('estado', 'deseo')->count() }}
                </td>
            </tr>
            <tr>
                <th>Cartas 1*</th>
                <td>
                    {{ $user->cartas()->where('rareza', 1)->wherePivot('estado', 'deseo')->count() }}
                </td>
            </tr>
        </tbody>
    </table>
</body>

</html>
