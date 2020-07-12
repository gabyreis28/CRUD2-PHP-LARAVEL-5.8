
    <h3>List Clientes: </h3>

     <a href="{{ route ('clientes.create' )}}">Add Cliente</a>

    <ul>
        @foreach ($clientes as $c)

        <li>ID: {{ $c['id']}} | Nome: {{ $c['nome']}} |
        <a href="{{ route ('clientes.edit' , $c['id'] )}}">Editar</a>
        <a href="{{ route ('clientes.show' , $c['id'] )}}">| Info</a>

        <form action="{{ route('clientes.destroy', $c['id'] )}}" method="POST">
            @csrf
            @method('DELETE')
            <input type="submit" value="Excluir">
        </form>

        </li>

        @endforeach
    </ul>
