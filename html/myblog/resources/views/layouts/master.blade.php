<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="https://getbootstrap.com/favicon.ico">

  <title>Blog Template for Bootstrap</title>

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

  <!-- Custom styles for this template -->
  <link href="https://getbootstrap.com/docs/4.0/examples/blog/blog.css" rel="stylesheet">
</head>

<body>
  @include('layouts.nav')
  @include('layouts.header')
  <main role="main" class="container">

    <div class="row">

      @yield('content')  <!--blog-main -->

    @include('layouts.sidebar')

    </div><!-- /.row -->

  </main>
  <!-- /.container -->

  @include('layouts.footer')

</body>

</html>







{{--
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>My Test Layout</title>
  @include('layouts.header') --}} {{-- Header repeats in many pages so storing header in aother file and including it here--}} {{-- </head>

<body>
  <div class="Body">
    @yield('content')
  </div>
  <div class="Footer">
    @include('layouts.footer')
  </div>
</body>

</html> --}}
