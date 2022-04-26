@extends('layouts.nav')<!--exten la part de vistes layouts nav.blade.php-->
    @section('content')<!--el yield de content-->
    <div class="container">
        <table class="table table-striped">
            <tr>
                <th>ISBN</th>
                <th>Titol</th>
                <th>Categoria</th>
                <th>Preu</th>
                <th>Editorial</th>
                <th>Autor</th>
                <th>Actualitzar</th>
                <th>Esborrar</th>
            </tr>
            @foreach ($llibres as $llibre)<!--bucle per mostrar els llibres-->
                <tr>
                    <td>{{$llibre->isbn}}</td>
                    <td>{{$llibre->titol}}</td>
                    <td>{{$llibre->categoria}}</td>
                    <td>{{$llibre->preu}}</td>
                    <td>{{$llibre->editorial}}</td>
                    <td>{{$llibre->autor}}</td>
                    <td > <!--formulari per enviar a la ruta de llibre.edit, tambe envie el isbn del llibre seleccionat--> 
                        <form action="{{ route('llibre.edit', $llibre->isbn)}}" method="GET">  
                            @csrf  
                            <button class="btn btn-danger" type="submit">Edit</button>  
                        </form>  
                    </td>  
                    <td><!--igual que el edit-->
                        <form action="{{ route('llibre.destroy',$llibre->isbn)}}" method="post">  
                            @csrf  
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Delete</button>  
                          </form>  
                    </td>
                </tr>
            @endforeach
        </table>
        <!--boto amb la ruta del formulari per afegir-->
        <a class="btn btn-primary" href="/llibre/afegir" role="button">Afegir</a>
    </div>
    @endsection
</body>
</html>