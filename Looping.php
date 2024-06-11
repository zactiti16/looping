

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Looping utilizando a linguagem PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f8ff;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }
        h1 {
            color: #4682b4;
        }
        form {
            background-color: #ffffff;
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        label {
            display: block;
            margin-top: 10px;
            font-weight: bold;
        }
        input[type="text"], input[type="number"] {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            background-color: #4682b4;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #5a9bd3;
        }
        .result {
            margin-top: 20px;
            background-color: #ffffff;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 600px;
        }
    </style>
</head>
<body>
    <h1>Looping utilizando a linguagem PHP</h1>
    <form method="post" action="">
        <label for="diaSemana">Informe o dia da semana:</label>
        <input type="text" id="diaSemana" name="diaSemana">
        
        <label for="mensagem">Informe a mensagem referente ao dia da semana:</label>
        <input type="text" id="mensagem" name="mensagem">
        
        <label for="nome">Informe seu nome:</label>
        <input type="text" id="nome" name="nome">
        
        <label for="quantidade">Quantas vezes deseja exibir?</label>
        <input type="number" id="quantidade" name="quantidade">
        
        <button type="submit">Exibir</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $diaSemana = htmlspecialchars($_POST['diaSemana']);
        $mensagem = htmlspecialchars($_POST['mensagem']);
        $nome = htmlspecialchars($_POST['nome']);
        $quantidade = (int) $_POST['quantidade'];

        echo "<div class='result'><h2>Resultados:</h2>";
        for ($i = 0; $i < $quantidade; $i++) {
            echo "<p>$nome, hoje é $diaSemana. $mensagem</p>";
        }
        echo "</div>";
    }
    ?>
</body>
</html>