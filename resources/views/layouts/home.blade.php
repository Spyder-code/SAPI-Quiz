<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="{{asset('assets/fontawesome/css/all.css')}}" rel="stylesheet"> <!--load all styles -->
    <!-- Bootstrap core CSS -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="{{asset('assets/js/main-home.js')}}" defer></script> --}}

    <title>@yield('title')</title>
</head>

<body class="bg-gradient-primary" style="background-image:url(@yield('bg'))">

    @yield('container')

    <audio controls autoplay hidden id="audio">
        <source src="{{asset('assets/sound/audio.mp3')}}" type="audio/ogg">
        Your browser does not support the audio element.
    </audio>

    <script>
        var vid = document.getElementById("audio");
        vid.volume = 0.5;
    </script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="annyang.min.js"></script>
<script>
if (annyang) {
  // Let's define our first command. First the text we expect, and then the function it should call
  var commands = {
    'hewan': function() {
        window.location = "http://127.0.0.1:8000/hewan";
    },
    'buah': function() {
        window.location = "http://127.0.0.1:8000/buah";
    },
    'profesi': function() {
        window.location = "http://127.0.0.1:8000/profesi";
    },
    'kendaraan': function() {
        window.location = "http://127.0.0.1:8000/kendaraan";
    }
  };

  // Add our commands to annyang
  annyang.addCommands(commands);

  // Start listening. You can call this here, or attach this call to an event, button, etc.
  annyang.start();
}
</script>

<script type="text/javascript" src="{{asset('assets/js/jquery-3.4.1.min.js')}}"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="{{asset('assets/js/popper.min.js')}}"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<!-- MDB core JavaScript -->

</body>
</html>
