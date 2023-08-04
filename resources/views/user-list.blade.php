<!DOCTYPE html>
<html>
<head>
    <title>Lista de Usuarios</title>
    @livewireStyles
</head>
<body>
    <h1>Lista de Usuarios Registrados</h1>
    <ul>
        @foreach ($users as $user)
            <li>
                {{ $user->name }} {{ $user->last_name1 }} {{ $user->last_name2 }} ({{ $user->email }} - {{ $user->phone }})
                <a href="{{ route('edit', ['userId' => $user->id]) }}">Editar</a>
            </li>
        @endforeach
    </ul>
    @livewireScripts
</body>
</html>
