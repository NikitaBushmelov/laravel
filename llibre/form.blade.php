@extends('layouts.nav')
    @section('content')
    <div class="container">
        <h1>Afegir llibre</h1>
        <form action="/llibre/insertar" method="POST"><!--agafe la ruta per el insertar-->
            @csrf<!--es necesari per el token-->
            <div class="form-group">
                <label for="isbn">ISBN</label>
                <input type="text" class="form-control" id="isbn" name="isbn" placeholder="ISBN">
            </div>
            <div class="form-group">
                <label for="titol">Titol</label>
                <input type="text" class="form-control" id="titol" name="titol" placeholder="Titol">
            </div>
            <div class="form-group">
                <label for="categoria">Categoria</label>
                <input type="text" class="form-control" id="categoria" name="categoria" placeholder="Categoria">
            </div>
            <div class="form-group">
                <label for="preu">Preu</label>
                <input type="text" class="form-control" id="preu" name="preu" placeholder="Preu">
            </div>
            <div class="form-group">
                <label for="editorial">Editorial</label>
                <input type="text" class="form-control" id="editorial" name="editorial" placeholder="Editorial">
            </div>
            <div class="form-group">
                <label for="autor">Autor</label>
                <input type="text" class="form-control" id="autor" name="autor" placeholder="Autor">
            </div>
            <input type="submit" class="btn-primary" value="Submit" name="Submit">
        </form>
    </div>
    @endsection
</body>
</html>