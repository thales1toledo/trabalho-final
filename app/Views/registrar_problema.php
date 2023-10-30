<!DOCTYPE html>
<html>
<head>
    <title>Formulário de Registros</title>
</head>
<body>
    <h1>Formulário de Registros</h1>
    <form action="processar_formulario.php" method="post">
        <label for="id_ambiente">Ambiente:</label>
        <select name="id_ambiente" id="id_ambiente">
            <option value="1">Banheiro</option>
            <option value="2">Laboratório</option>
        </select><br><br>

        <label for="problema">Problema:</label>
        <input type="text" name="problema" id="problema" required><br><br>

        <label for="descricao">Descrição:</label>
        <textarea name="descricao" id="descricao" rows="4" required></textarea><br><br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>
