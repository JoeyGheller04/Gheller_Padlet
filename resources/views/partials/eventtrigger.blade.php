<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="//js.pusher.com/3.1/pusher.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<script type="text/javascript">

  // Enable pusher logging - don't include this in production
  // Pusher.logToConsole = true;

  var pusher = new Pusher('56815cbc1384f518ac04', {
    encrypted: true
  });

  // Subscribe to the channel we specified in our Laravel Event
  var channel = pusher.subscribe('my-channel');

  // Bind a function to a Event (the full Laravel class)
  channel.bind('my-event', function() {
      alert("sas");
    });
</script>