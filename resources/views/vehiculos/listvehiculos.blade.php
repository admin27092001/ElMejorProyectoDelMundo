<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<h1>vehiculos</h1>


<table class="table">
  <thead>
    <tr>
      <th scope="col">placa</th>
      <th scope="col">tipo</th>
      <th scope="col">marca</th>
      <th scope="col">modelo</th>
      <th scope="col">color</th>
      <th scope="col">puertas</th>
      <th scope="col">fechareg</th>
      <th scope="col">Estatus</th>
      <th scope="col">idcliente</th>
    </tr>
  </thead>
  <tbody>
      @foreach($Vehiculos as $Vehiculo)
    <tr>
      <th>{{$cliente->idcliente}}</th>
      <th>{{$cliente->placa}}</th>
      <th>{{$cliente->tipo}}</th>
      <th>{{$cliente->marca}}</th>
      <th>{{$cliente->modelo}}</th>
      <th>{{$cliente->color}}</th>
      <th>{{$cliente->puertas}}</th>
      <th>{{$cliente->fechareg}}</th>
      <th>{{$cliente->estatus}}</th>
      <th>{{$cliente->idcliente}}</th>