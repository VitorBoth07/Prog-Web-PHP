<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = trim($_POST['nome']);
    $senha = trim($_POST['senha']);

    if (!empty($nome) && !empty($senha)) {

        if (strlen($senha) >= 8) {

            $_SESSION["nome"] = $nome;
            $_SESSION["senha"] = $senha;

            header("Location: dashboard.php");
            exit();

        } else {
            $erro = "A senha deve ter pelo menos 8 caracteres.";
        }

    } else {
        $erro = "Preencha todos os campos.";
    }
}
?>

<link rel="stylesheet" href="style.css">

<form method="POST">

    <h2>Login</h2>

    <label>Nome:</label>
    <input type="text" name="nome" required>

    <label>Senha:</label>
    <input type="password" name="senha" required>

    <button type="submit">Enviar</button>

    <div class="mensagem">
        <?php
            if (isset($erro)) {
                echo "<span class='erro'>$erro</span>";
            }
        ?>
    </div>

</form>