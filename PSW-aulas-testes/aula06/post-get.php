<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Método Post e Get</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Método Post e Get</h1>

    <form action="receber.php" method="get">

        <label for="nome" id="nome">Nome:
            <input type="text" name="nome">
        </label>

        <label for="cpf" id="cpf">CPF:
            <input type="number" name="cpf" >
        </label>

        <label for="email" id="email">Email:
            <input type="email" name="email" >
        </label>

        <label for="senha" id="senha">Senha:
            <input type="password" name="senha" >
        </label>

        <label for="cidade" id="cidade">Cidade:
            <input type="text" name="cidade" >
        </label>

        <label for="estado" id="estado">Estado:
            <select name="estado" >
                <option value="acre">Acre</option>
                <option value="alagoas">Alagoas</option>
                <option value="amapa">Amapá</option>
                <option value="amazonas">Amazonas</option>
                <option value="bahia">Bahia</option>
                <option value="ceara">Ceará</option>
                <option value="espírito-santo">Espírito Santo</option>
                <option value="goias">Goiás</option>
                <option value="maranhao">Maranhão</option>
                <option value="mato-grosso">Mato Grosso</option>
                <option value="mato-grosso-do-sul">Mato Grosso do Sul</option>
                <option value="Para">Pará</option>
                <option value="paraiba">Paraíba</option>
                <option value="parana">Paraná</option>
                <option value="pernambuco">Pernambuco</option>
                <option value="paui">Piauí</option>
                <option value="rio-de-janeiro">Rio de Janeiro</option>
                <option value="rio-grande-do-norte">Rio Grande do Norte</option>
                <option value="rio-grande-do-sul">Rio Grande do Sul</option>
                <option value="rondonia">Rondônia</option>
                <option value="roraima">Roraima</option>
                <option value="santa-catarina">Santa Catarina</option>
                <option value="sao-paulo">São Paulo</option>
                <option value="sergipe">Sergipe</option>
                <option value="tocantins">Tocantins</option>
                <option value="distrito-federal">Distrito Federal</option>
            </select>
        </label>

        <label for="cep" id="cep">CEP:
            <input type="number" name="cep" >
        </label>

        <input type="submit" value="Entrar" id="btn">
    </form>
</body>
</html>