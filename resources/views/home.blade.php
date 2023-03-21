<!DOCTYPE html>
<html lang="en">

@include('partials.head')

<body>

    @include('partials.navbar')

    <!-- Contenuto principale -->
    <div class="container-fluid mt-5 pt-5">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Crea</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed malesuada porta tellus nec bibendum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Maecenas eget turpis ac neque pharetra scelerisque. Donec sed justo nec risus placerat gravida. </p>
                        <a href="#" class="btn btn-primary">Crea adesso</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Unisciti</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed malesuada porta tellus nec bibendum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Maecenas eget turpis ac neque pharetra scelerisque. Donec sed justo nec risus placerat gravida. </p>
                        <a href="#" class="btn btn-primary">Unisciti adesso</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('partials.footer')

</body>

</html>