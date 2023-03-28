<!DOCTYPE html>
<html lang="en">

@include('partials.head')

<body>

    @include('partials.navbar')

    <div class="container-fluid mt-5 pt-5">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Crea</h5>
                        <p class="card-text">Crea il tuo wall personalizzato e gioca insieme ai tuoi amici!</p>
                        <a href="{{ route('wall_creation')}}" class="btn btn-primary">Crea adesso</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Unisciti</h5>
                        <p class="card-text">Unisciti al wall di un altro utente e inizia a divertirti! </p>
                        <a href="{{ route('wall_selection')}}" class="btn btn-primary">Unisciti adesso</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('partials.footer')

</body>

</html>