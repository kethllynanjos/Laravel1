<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>    
</head>
<body>
    
    <form action="/contato" method="post">        
        {{csrf_field()}}        
        <input type="text" name="txNome" placeholder="Nome"/>
        <input type="text" name="txEmail" placeholder="E-mail" />
        <input type="text" name="txAssunto" placeholder="Assunto" />
        <input type="text" name="txMensagem" placeholder="Mensagem" />
        <input type="text" name="txNumero" placeholder="Numero" />

        <input type="submit" value="Salvar" />
    </form>

    @foreach($contatos as $c)        
        <p>
        {{$c->idContato}}
        {{$c->nome}}
        {{$c->email}}
        {{$c->assunto}}
        {{$c->mensagem}}
        {{$c->numero}}

        <a href="/contato/excluir/{{$c->idContato}}"> 
            Excluir
        </a>

        
        </p>
    @endforeach

    <table>
<thead>
<tr>
<th>ID</th>
<th>Nome</th>
<th>Email</th>
<th>Assunto</th>
<th>Mensagem</th>
<th>Numero</th>
<th></th>
</tr>
</thead>
<tbody>
<tr>
<td>1</td>
<td>Thiago</td>
<td>thiago@gmail.com</td>
<td>Greve</td>
<td>greve mas tem aula</td>
<td>0</td>
<td><a href="#" class="excluir">Excluir</a></td>
</tr>
<tr>
<td>2</td>
<td>Maria</td>
<td>maria@gmail.com</td>
<td>Greve2</td>
<td>greve mas tem aula2</td>
<td>0</td>
<td><a href="#" class="excluir">Excluir</a></td>
</tr>
<tr>
<td>3</td>
<td>Ana</td>
<td>ana@gmail.com</td>
<td>Greve3</td>
<td>greve mas tem aula3</td>
<td>0</td>
<td><a href="#" class="excluir">Excluir</a></td>
</tr>
<tr>
<td>6</td>
<td>estrelar</td>
<td>estrelar.estrela@gmail.com</td>
<td>who</td>
<td>oi</td>
<td>5</td>
<td><a href="#" class="excluir">Excluir</a></td>
</tr>
</tbody>
</table>
    
</body>
</html>

