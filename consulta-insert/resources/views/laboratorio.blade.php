<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio</title>    
</head>
<body>

    <form action="/laboratorio" method="post">        
        {{csrf_field()}}        
        <input type="text" name="txLaboratorio" placeholder="Laboratorio"/>
        <input type="submit" value="Salvar" />
    </form>

    @foreach($laboratorio as $l)        
        <p>
        {{$l->idLab}}
        {{$l->Laboratorio}}
        <a href="/laboratorio/excluir/{{$l->idLab}}"> 
            Excluir
        </a>
        </p>
    @endforeach
    
</body>
</html>