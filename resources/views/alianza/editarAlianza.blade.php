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
      }
      .link2{
      color: rgb(0, 0, 0);
      
      font-family: 'Bernard MT Condensed';
                font-size: 30px;
  }
 .contenedor{
    width:900px; height:900px; margin-left:25%; background-color:white; padding:30px;
 }
    </style>
 <a class="link2" href="{{ route('Alianza.index') }}">< Atrás</a>
<div class="contenedor">
<h1 class="link">Editar alianza</h1>
<form method="POST" action="{{route("Alianza.update",$datosAlianza->id)}}" enctype="multipart/form-data"> 
    @method('PUT')
    @csrf

    <div class="form-group row">
        <label for="Alianza" class="form-label">Cliente:</label>
        <div class="col-sm-10">
        <select type="text" class="form-control" id="client_id" name="client_id">
         @foreach ($datosCliente as $Clientes )
         <option value="{{$Clientes->id}}"
            @if ($Clientes->id ==$datosAlianza->client_id)
            selected
    
            @endif>
             {{$Clientes->name_client }}
         </option>
         @endforeach
     </select>
     </div>
   </div>

    <div class="form-group row">
        <label for="name_alliance" class="form-label">Alianza:</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="name_alliance" name="name_alliance" value="{{$datosAlianza->name_alliance}}">
       </div>
    </div>
       <div class="form-group row">
        <label for="city_id" class="form-label">Ciudad:</label>
        <div class="col-sm-10">
        <select type="text" class="form-control" id="city_id" name="city_id">
         @foreach ($datosCiudad as $Ciudades )
         <option value="{{$Ciudades->id}}"
            @if ($Ciudades->id ==$datosAlianza->city_id)
            selected
            @endif>
             {{$Ciudades->name_cities }}
         </option>
         @endforeach
     </select>
     </div> 
       </div>
    <div class="form-group row">
        <label for="phone" class="form-label">Telefono:</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="phone" name="phone" value="{{$datosAlianza->phone}}">
    </div>
    </div>
    <div class="form-group row">
        <label for="email" class="form-label">Email:</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="email" name="email" value="{{$datosAlianza->email}}">
    </div>
    </div>
    
    <div class="form-group row">
        <label for="nit" class="form-label">Nit:</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="nit" name="nit" value="{{$datosAlianza->nit}}">
    </div>
    </div>
    <div class="form-group row">
        <label for="responsible" class="form-label">Responsible:</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="responsible" name="responsible"  value="{{$datosAlianza->responsible}}">
    </div>
    </div>
    <br>
    <div class="form-group row">
        <button style="margin-left:40%;" type="submit" class="btn btn-success">Guardar</button>
        </div>
        
    </form>
</div>