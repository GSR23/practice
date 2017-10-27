<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="http://icons.iconarchive.com/icons/iconshock/real-vista-development/256/wizard-icon.png">

  <title>Wizard's @yield('title')</title>
  {{-- Java Scrip and jQuery --}}
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  <!-- Custom styles for this template -->
  <link href="http://getbootstrap.com/docs/4.0/examples/blog/blog.css" rel="stylesheet">

</head>

<body>

  <header>
    @include('layouts.nav')

    <div class="blog-header">
      <br><br>
      <div class="container">
        <h1 class="blog-title">The Wizard's Blog</h1>
        <p class="lead blog-description">&nbsp;&nbsp;Implemented using Laravel</p>
      </div>
    </div>
  </header>

  <main role="main" class="container">

    <div class="row">

      <div class="col-sm-8 blog-main">

        @include('layouts.errors')
        @yield('content')


      </div>
      <!-- /.blog-main -->

      @include('layouts.sidebar')
      <!-- /.blog-sidebar -->

    </div>
    <!-- /.row -->

  </main>
  <!-- /.container -->

@include('layouts.footer')



</body>

</html>