@if (Auth::check())
<aside class="col-sm-3 ml-sm-auto blog-sidebar">
  {{-- <div class="sidebar-module sidebar-module-inset">
    <h4>About</h4>
    <p style="text-align: justify; text-indent: 50px;">This is Venkata Rakesh Anne, Where I am going to write my post in Laravel and Learning a lot of things that help me for the future in the field of web developent</p>
  </div> --}}
  <div class="sidebar-module">
    <h4>Archives</h4>
    <ol class="list-unstyled">
      <li><a href="#">March 2014</a></li>
      <li><a href="#">February 2014</a></li>
      <li><a href="#">January 2014</a></li>
      <li><a href="#">May 2013</a></li>
      <li><a href="#">April 2013</a></li>
    </ol>
  </div>
  <div class="sidebar-module">
    <h4>Elsewhere</h4>
    <ol class="list-unstyled">
      <li><a href="#">GitHub</a></li>
      <li><a href="#">Twitter</a></li>
      <li><a href="#">Facebook</a></li>
    </ol>
  </div>
</aside>
@endif
