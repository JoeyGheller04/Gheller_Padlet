<!DOCTYPE html>
<html lang="en">

@include('partials.head')

<body>

    @include('partials.navbar')

    <div class="container">

        <div class="container">
            <div class="row">
                @foreach ($posts as $post)
                    <div class="col-md-2" id="card-container">
                        <div class="card" style="margin: 20px 0;">
                            <div class="card-body">
                                <h5 class="card-title">{{ $post->title }}</h5>
                                <p class="card-text">{{ $post->text }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>


    </div>

    <div class="fixed-bottom" style="background-color: #B2AEAF; min-width: 100%;">
        <div class="container" style="padding:10px">
            <div class="row">
                <div class="col-md-12 sticky-top ">
                    <form action="{{ route('add_post', 1) }}" class="comment-form" method="post">
                        @csrf
                        <div class="form-group">
                            <label class="text-white" for="title">Titolo</label>
                            <input type="text" class="form-control" id="title" name="title">
                        </div>
                        <div class="form-group">
                            <label class="text-white" for="text">Commento</label>
                            <textarea class="form-control" id="text" name="text"></textarea>
                        </div>
                        <input type="hidden" id="wall_id" name="wall_id" value="{{ $wall }}" />
                        <input type="hidden" id="user_id" name="user_id" value="{{ 1 }}" />

                        <button type="submit" class="btn btn-primary">Invia</button>
                    </form>
                </div>
            </div>
        </div>
        <footer class="bg-dark text-center text-white">
            <div class="container p-4">
                <p>&copy; Padlet Joey Gheller 5CII</p>
            </div>
        </footer>
    </div>

    <script src="https://js.pusher.com/7.2/pusher.min.js"></script>
    <script>
        // Enable pusher logging - don't include this in production
        Pusher.logToConsole = true;

        var pusher = new Pusher('56815cbc1384f518ac04', {
            cluster: 'eu'
        });

        var channel = pusher.subscribe('NewPost-channel');
        channel.bind('NewPost-event', function(data) {

            // alert(JSON.stringify(data));

            // const newPost = '<div class="col-md-2"><div class="card" style="margin: 20px 0;"><div class="card-body"><h5 class="card-title">'+data+'</h5><p class="card-text">sas</p></div></div></div>';

            // Document.getElementById("card-container").appendChild(newPost);
            const para = document.createElement("p");
            const node = document.createTextNode("This is a paragraph.");

            para.appendChild(node);
            document.getElementById("card-container").appendChild(para);
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>
