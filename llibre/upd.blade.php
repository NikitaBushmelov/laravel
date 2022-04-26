@extends('layouts.nav')
    @section('content')
    <div class="container">
        <h1>Afegir llibre</h1>
        <form action="{{route('llibre.update',$llibre->isbn)}}" method="post"><!--agafe la ruta per el update-->
            @csrf<!--es necesari per el token-->
           
            <div class="form-group">
                <label for="isbn">ISBN</label>
                <input type="text" class="form-control" id="isbn" name="isbn" placeholder="ISBN" value="{{$llibre->isbn}}"><!--mostre els valors del llibre que estas actualitzan-->
            </div>
            <div class="form-group">
                <label for="titol">Titol</label>
                <input type="text" class="form-control" id="titol" name="titol" placeholder="Titol" value="{{$llibre->titol}}">
            </div>
            <div class="form-group">
                <label for="categoria">Categoria</label>
                <input type="text" class="form-control" id="categoria" name="categoria" placeholder="Categoria" value="{{$llibre->categoria}}">
            </div>
            <div class="form-group">
                <label for="preu">Preu</label>
                <input type="text" class="form-control" id="preu" name="preu" placeholder="Preu" value="{{$llibre->preu}}">
            </div>
            <div class="form-group">
                <label for="editorial">Editorial</label>
                <input type="text" class="form-control" id="editorial" name="editorial" placeholder="Editorial" value="{{$llibre->editorial}}">
            </div>
            <div class="form-group">
                <label for="autor">Autor</label>
                <input type="text" class="form-control" id="autor" name="autor" placeholder="Autor" value="{{$llibre->autor}}">
            </div>
            <button type="submit">Actualitza</button>
        </form>
    </div>
    @endsection
</body>
</html>