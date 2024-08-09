<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jetfla | Destinos</title>
</head>
<body>

    <h1> Este es un vuelo hacia <?= $destino ?> </h1>
    <!--Tambien asi se puede imprimir una variable
        debido a que usamos la extencion .blade--->
    <h1> 2 Este es un vuelo hacia {{ $destino }} </h1>

    <!--Colocar condicionales--->
        @if (true) 
            <p>Content test</p>
        @endif

    <!--Colocar condicionales ifelse--->
        @if ()
            
        @else
            
        @endif

    <!--Colocar condicionales switch para mostrar diferente contenido--->
        @switch($type)
            @case(1)
                
                @break
            @case(2)
                
                @break
            @default
                
        @endswitch

    <!--Colocar etiquetas php--->
    @php
        
    @endphp

    <!--Colocar BUCLES php--->
    @foreach ($collection as $item)
        
    @endforeach



</body>
</html>