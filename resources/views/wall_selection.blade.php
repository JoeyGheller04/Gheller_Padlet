<!DOCTYPE html>
<html lang="en">

@include('partials.head')

<body>

    @include('partials.navbar')

    <div class="container my-4">
        <div class="row">
            @foreach($walls as $wall)

            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $wall->name }}</h5>
                        <p class="card-text">{{ $wall->description }}</p>
                        <a class="btn btn-primary ml-auto" href="{{ route('wall', $wall->id)}}">Unisciti</a>
                    </div>
                </div>
            </div>

            @endforeach
        </div>
    </div>

    @include('partials.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>