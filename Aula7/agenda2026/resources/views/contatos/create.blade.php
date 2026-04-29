<header>
    <h1>Novo contato </h1>

<div>
    <form action="{{ route('contatos.store') }}" method="POST">
        @csrf
        <div>
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>
        </div></br>

        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div></br>

        <div>
            <label for="telefone">Telefone:</label>
            <input type="text" id="telefone" name="telefone" required>
        </div></br>

        <div>
            <label for="cidade">Cidade:</label>
            <input type="text" id="cidade" name="cidade" required>
        </div></br>

        <div>
            <label for="estado">Estado:</label>
            <input type="text" id="estado" name="estado" required>
        </div></br>
        <button type="submit">Criar Contato</button>
        <button type="reset">Limpar Campos</button>
    </form>
</div>
<br>
<a href="{{ route('contatos.index') }}">Voltar para a lista de contatos</a>
</div>