<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
<style>
 body {
        font-family: 'Copperplate Gothic Bold';
      color:#008037;
    } 
    .link{
    color: #008037;
    
    font-family: 'Bernard MT Condensed';
        font-size: 30px;
        margin-left: 25%;
        margin-top: 30px;
    }
    .link2{
      color: rgb(0, 0, 0);
      float: left;
      font-family: 'Bernard MT Condensed';
                font-size: 30px;
  }
    .contenedor{
    width:900px; height:700px; margin-left:25%; padding:30px; margin-top:30px;
    }
    </style>
    <a class="link2" href="{{ route('Cliente.index') }}">< Atras</a>
    <h1 class="link">Registrar Cliente</h1>
<div class="contenedor">
<form method="POST" action="{{url("Cliente")}}" enctype="multipart/form-data"> 
@csrf
<div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Nombre:</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="name_client" name="name_client">
    </div>
</div>


<div class="form-group row">
    <label for="document_id" class="col-sm-2 col-form-label">Documento:</label>
    <div class="col-sm-10">
    <select type="numeric" class="form-control" id="document_id" name="document_id">
     @foreach ($datosDocument as $Documents )
     <option value="{{$Documents->id}}">
         {{$Documents->name_document }}
     </option>
     @endforeach
 </select>
 </div>
</div> 
   <div class="form-group row">
    <label for="number_document" class="col-sm-2 col-form-label">Numero de documento:</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="number_document" name="number_document">
</div>
   </div>
<div class="form-group row">
    <label for="address" class="col-sm-2 col-form-label">Dirección:</label>
    <div class="col-sm-10">
   <input type="text" class="form-control" id="address" name="address">
    </div>
</div>
<div class="form-group row">
    <label for="city_id" class="col-sm-2 col-form-label">Ciudad:</label>
    <div class="col-sm-10">
    <select type="text" class="form-control" id="city_id" name="city_id">
     @foreach ($datosCiudad as $Ciudades )
     <option value="{{$Ciudades->id}}">
         {{$Ciudades->name_cities }}
     </option>
     @endforeach
 </select>
 </div> 
</div>

<div class="form-group row">
    <label for="email" class="col-sm-2 col-form-label">Email:</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="email" name="email">
</div>
</div>
<div class="form-group row">
    <label for="phone" class="col-sm-2 col-form-label">Telefono: </label>
    <div class="col-sm-10">
        <input type="text" class="form-control" id="phone" name="phone">

    </div>
</div>

<div class="form-group row">
    <button style="margin-left:40%;" type="submit" class="btn btn-success">Guardar</button>
    </div>
    
</form>
</div>