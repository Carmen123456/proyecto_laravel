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
      color: black;
      
      font-family: 'Bernard MT Condensed';
                font-size: 30px;
  }
 .contenedor{
    width:900px; height:660px; margin-left:25%; background-color:white; padding:30px;
 }
    </style>
 <a class="link2" href="{{ route('Product.index') }}">< Atrás</a>
<div class="contenedor">
<h1 class="link">Editar Producto</h1>
<form method="POST" action="{{route("Product.update",$datosProduct->id)}}" enctype="multipart/form-data"> 
    @method('PUT')
    @csrf

<div class="form-group row">
    <label for="name_product" class="form-label">Nombre producto:</label>
   <input type="text" class="form-control" id="name_product " name="name_product" value="{{$datosProduct->name_product}}">

</div>
<div class="form-group row">
    <label for="description_product" class="form-label">Descripcion product:</label>
    <input type="text" class="form-control" id="description_product" name="description_product" value="{{$datosProduct->description_product}}">
   </div>

<div class="form-group row">
    <label for="quantity" class="form-label">Cantidad:</label>
    <input type="text" class="form-control" id="quantity" name="quantity" value="{{$datosProduct->quantity}}">
</div>

<div class="form-group row">
    <label for="categorie_id" class="form-label">Categoria:</label>
    <select  type="text" class="form-control" id="categorie_id" name="categorie_id">
     @foreach ($datosCategorie as $Categories )
     <option value="{{$Categories->id}}"
        @if ($Categories->id ==$datosProduct->categorie_id)
            selected
    
            @endif>
         {{$Categories->name_categorie }}
     </option>
     @endforeach
 </select>
 </div> 

<div class="form-group row">
    <label for="provider_id" class="form-label">Proveedor:</label>
    <select  type="text" class="form-control" id="provider_id" name="provider_id">
     @foreach ($datosProvider as $Providers )
     <option value="{{$Providers->id}}"
        @if ($Providers->id ==$datosProduct->provider_id)
        selected

        @endif>
         {{$Providers->name_provider }}
     </option>
     @endforeach
 </select>
 </div> 
<br>
<div class="form-group row">
    <button style="margin-left:40%;" type="submit" class="btn btn-success">Guardar</button>
    </div>
    
</form>
</div>