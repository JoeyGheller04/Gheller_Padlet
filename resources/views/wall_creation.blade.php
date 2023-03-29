<!DOCTYPE html>
<html lang="en">

@include('partials.head')

<body>

    @include('partials.navbar')

    <div class="container-fluid">
        <h1 class="text-center">Crea il tuo Wall</h1>
        <div class="row justify-content-center">
            <div class="col-md-5">
                <form action="{{ route('create_wall', 1) }}" method="POST">
                    @csrf
                    <!-- <img src="https://via.placeholder.com/350x150" class="img-fluid rounded mx-auto d-block" alt="Banner immagine"> -->
                    <div class="form-group">
                        <label for="name">Titolo:</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="form-group">
                        <label for="description">Descrizione:</label>
                        <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                    </div>
                    <input type="hidden" id="user_id" name="user_id" value="{{ 1 }}"/>
                    <!-- <div class="form-group">
                        <label for="color">Colore:</label>
                        <select class="form-control" id="color">
                            <option>Blu</option>
                            <option>Rosso</option>
                            <option>Verde</option>
                            <option>Giallo</option>
                            </select>
                    </div> -->
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