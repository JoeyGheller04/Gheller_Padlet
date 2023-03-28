<!DOCTYPE html>
<html lang="en">

@include('partials.head')

<body>

    @include('partials.navbar')

    <div class="container">

        <div class="container">
            <div class="row">
                @foreach($posts as $post)
                <div class="col-md-2">
                    <div class="card" style="margin: 20px 0;">
                        <div class="card-body">
                            <p class="card-title">{{ $post->title }}</p>
                            <p class="card-text">{{ $post->text }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <div class="container" style="background-color: #f8f9fa; padding: 10px;">
            <div class="row">
                <div class="col-md-12 sticky-top">
                    <form action="#" class="comment-form">
                        <div class="form-group">
                            <label for="title">Titolo</label>
                            <input type="text" class="form-control" id="title" name="title">
                        </div>
                        <div class="form-group">
                            <label for="text">Commento</label>
                            <textarea class="form-control" id="text" name="text"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Invia</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @include('partials.footer')

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>