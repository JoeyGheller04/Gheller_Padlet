<!DOCTYPE html>
<html lang="en">

@include('partials.head')

<body>

    @include('partials.navbar')

    <div class="row mb-2">
        @foreach($walls as $wall)
        <div class="col-md-6">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                    <strong class="d-inline-block mb-2 text-primary">{{ $wall->name }}</strong>
                    <!-- <h3 class="mb-0">{{ Str::limit($wall->title, 50, ' (...)') }}</h3>
                    <div class="mb-1 text-muted">{{ $wall->created_at->diffForHumans() }}</div>
                    <a href="{{ route('news-detail', $wall->id) }}" class="stretched-link">Continue reading</a>
                    <p>{{ count($wall->comments) }} comments</p> -->
                </div>
            </div>
        </div>
        @endforeach


        @include('partials.footer')
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>