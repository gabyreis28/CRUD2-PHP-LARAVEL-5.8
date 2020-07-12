    <h3>Atualizar Cliente</h3>

    <form action="{{ route('clientes.update', $cli['id']) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="nome" value="{{ $cli['nome'] }}">
        <input type="submit" value="Atualizar">
    </form>
