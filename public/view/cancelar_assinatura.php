<!DOCTYPE html>

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
                <<li><a href="/DUNDER-MIFFLIN/public/view/">Home</a></li>
                <li><a href="/DUNDER-MIFFLIN/public/view/cancelar_assinatura.php">Cancelar assinatura</a></li>
               
            </ul>
        </nav>
    </header>


    <div class="container">
        <h2>Insira suas informações para o cancelamento</h2>
        <form action="../../src/cancelar_assinatura.act.php" method="post" id="form-cancelar">

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>


            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" required>


            <button onclick="abrirModal()">Cancelar</button>
        </form>
        <dialog id="dialog-cancelamento">

            <p>deseja realmente cancelar sua assinatura?</p>
            <button  name="confirmar" onclick="enviarForm()">Sim</button>
            <button  name="cancelar" onclick="fecharModal()">Não</button>

        </dialog>
    </div>

</body>

</html>

<script>
    function abrirModal() {
        document.getElementById('dialog-cancelamento').showModal();
    }
    function fecharModal() {
        document.getElementById('dialog-cancelamento').close();
    }
    function enviarForm() {
        document.getElementById('form-cancelar').submit();
    }
    document.getElementById("form-cancelar").addEventListener("click", function (event) {
        event.preventDefault()
        abrirModal()
    });
</script>