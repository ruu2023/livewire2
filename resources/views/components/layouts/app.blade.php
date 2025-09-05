<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Page Title' }}</title>
</head>

<body style="background: black; color: white;">
    {{ $slot }}

    <footer>
        <table>
            <tr>
                <th>Home</th>
                <td><a href="{{ route('home') }}">Home</a></td>
            </tr>
            <tr>
                <th>Greeting</th>
                <td><a href="{{ route('greeting') }}">Greeting</a></td>
            </tr>
        </table>
    </footer>
</body>

</html>
