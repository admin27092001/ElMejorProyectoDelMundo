<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<h1>servicios</h1>


<table class="table">
  <thead>
    <tr>
      <th scope="col">Descripcion</th>
      <th scope="col">Costo</th>
      <th scope="col">fechareg</th>
      <th scope="col">estatus</th>
    </tr>
  </thead>
  <tbody>
      @foreach($servicios as $servicio)
    <tr>
      <th>{{$cliente->idcliente}}</th>
      <th>{{$cliente->Descripcion}}</th>
      <th>{{$cliente->Costo}}</th>
      <th>{{$cliente->fechareg}}</th>
      <th>{{$cliente->direccion}}</th>
      <th>{{$cliente->estatus}}</th>
      