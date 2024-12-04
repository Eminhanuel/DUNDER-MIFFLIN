<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro de Assinatura</title>
    <link rel="icon" href="../assets/logo.png" type="image/png">
    <link rel="stylesheet" href="../styles/styles.css">
</head>

<body>


    <header>
        <div class="logo">
            <img src="../assets/logo.png" alt="Logo da Empresa" />
        </div>
        <nav>
            <ul>
                <li><a href="/DUNDER-MIFFLIN/public/view/">Home</a></li>
                <li><a href="/DUNDER-MIFFLIN/public/view/cancelar_assinatura.php">Cancelar assinatura</a></li>
           
        </nav>
    </header>

    <div class="container">
        <h2>Cadastro de Assinatura</h2>
        <form action="../../src/cadastro_cliente.php" method="post">

            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="celular">Celular:</label>
            <input type="tel" id="celular" name="celular" pattern="\(\d{2}\) \d{5}-\d{4}" placeholder="(99) 99999-9999" required>

            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" required>

            <label for="confirma_senha">Confirme a Senha:</label>
            <input type="password" id="confirma_senha" name="confirma_senha" required>


            <h3>Endereço</h3>
            <label for="cep">CEP:</label>
            <input type="text" id="cep" name="cep" pattern="\d{5}-\d{3}" placeholder="12345-678" required>

            <label for="uf">UF:</label>
            <select id="uf" name="uf" required>
                <option value="SP">SP</option>
            </select>

            <label for="cidade">Cidade:</label>
            <input type="text" id="cidade" name="cidade" required>

            <label for="numero">Número:</label>
            <input type="text" id="numero" name="numero" required>

            <label for="complemento">Complemento:</label>
            <input type="text" id="complemento" name="complemento">


            <h3>Forma de Pagamento</h3>
            <label for="forma_pagamento">Escolha a forma de pagamento:</label>
            <select id="forma_pagamento" name="forma_pagamento" required>
                <option value="" disabled selected>Selecione uma opção</option>
                <option value="1">Cartão de Crédito</option>
                <option value="2">Boleto Bancário</option>
                <option value="3">PIX</option>
            </select>



            <h3>Valor da Assinatura</h3>
            <p>R$ 27,90/mês</p>


            <button type="submit">Cadastrar</button>
        </form>
    </div>

</body>

</html>