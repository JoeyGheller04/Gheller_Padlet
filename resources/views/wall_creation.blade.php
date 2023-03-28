<!DOCTYPE html>
<html lang="en">

@include('partials.head')

<body>

    @include('partials.navbar')

    <div class="container-fluid">
        <h1 class="text-center">Crea la tua pagina</h1>
        <div class="row justify-content-center">
            <div class="col-md-5">
                <form action="{{ route('create_wall') }}" method="POST">
                    @csrf
                    <!-- <img src="https://via.placeholder.com/350x150" class="img-fluid rounded mx-auto d-block" alt="Banner immagine"> -->
                    <p class="text-center">Muro</p>
                    <div class="form-group">
                        <label for="title">Titolo:</label>
                        <input type="text" class="form-control" id="title">
                    </div>
                    <div class="form-group">
                        <label for="description">Descrizione:</label>
                        <textarea class="form-control" id="text" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="color">Colore:</label>
                        <select class="form-control" id="color">
                            <option>Blu</option>
                            <option>Rosso</option>
                            <option>Verde</option>
                            <option>Giallo</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary ml-auto">Crea</button>
                </form>
            </div>
        </div>
    </div>

    @include('partials.footer')
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>