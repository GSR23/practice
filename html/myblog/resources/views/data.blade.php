
{{ "Hello The Data in column \"Data\" in the table \"events\" is" }}
@foreach ($res as $res_r)
  <li>{{ $res_r->Data }}</li>
@endforeach
