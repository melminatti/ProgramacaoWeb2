<header>
    <h1>Editar contato </h1>

<div>
    <form action="{{ route('contatos.update', $contato->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required value="{{ $contato->nome }}">
        </div></br>

        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required value="{{ $contato->email }}">
        </div></br>

        <div>
            <label for="telefone">Telefone:</label>
            <input type="text" id="telefone" name="telefone" required value="{{ $contato->telefone }}">
        </div></br>

        <div>
            <label for="cidade">Cidade:</label>
            <input type="text" id="cidade" name="cidade" required value="{{ $contato->cidade }}">
        </div></br>

        <div>
            <label for="estado">Estado:</label>
            <input type="text" id="estado" name="estado" required value="{{ $contato->estado }}">
        </div></br>
        <button type="submit">Atualizar Contato</button>
        <button type="reset">Limpar Campos</button>
    </form>
</div>
<br>
<a href="{{ route('contatos.index') }}">Voltar para a lista de contatos</a>
</div>