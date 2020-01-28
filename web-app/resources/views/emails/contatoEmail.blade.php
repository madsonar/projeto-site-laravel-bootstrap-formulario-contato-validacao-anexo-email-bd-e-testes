<!DOCTYPE html>
<html>
<head>
    <title>Contato via site</title>
</head>
<body>
    <h1>Formulário de Contato</h1>
    <p><b>Nome: </b> {{ $dados['nome'] }}<p>
    <p><b>Telefone: </b> {{ $dados['telefone'] }}<p>
    <p><b>E-mail: </b> {{ $dados['email'] }}<p>
    <p><b>Mensagem: </b> {{ $dados['mensagem'] }}<p>    
</body>
</html>