@extends('import_csv')

@section('content')
	<div class="panel panel-default">
    <div class="panel-heading">
     <h3 class="panel-title">Customer Data</h3>
    </div>
    <div class="panel-body">
     <div class="table-responsive">
      <table class="table table-bordered table-striped">
       <tr>
        <th>Hora(hh:mm:ss)</th>
        <th>Latitude</th>
        <th>Longitude</th>
        <th>Altitude(m)</th>
        <th>Temperatura(C)</th>
        <th>Humidade(%)</th>
        <th>Nível de CO2(ppm)</th>
        <th>Luminosidade(lux)</th>
        <th>Pressão acústica(dB)</th>
        <th>Radiação UV(uv)</th>
       </tr>
       @foreach($data as $row)
       <tr>
        <td>{{ $row->hora }}</td>
        <td>{{ $row->latitude }}</td>
        <td>{{ $row->longitude }}</td>
        <td>{{ $row->altitude }}</td>
        <td>{{ $row->temperatura }}</td>
        <td>{{ $row->humidade }}</td>
        <td>{{ $row->co2 }}</td>
        <td>{{ $row->luminosidade }}</td>
        <td>{{ $row->pressao }}</td>
        <td>{{ $row->radiacao }}</td>
       </tr>
       @endforeach
      </table>
     </div>
    </div>
   </div>
  </div>
    
@endsection