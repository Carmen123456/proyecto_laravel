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
    width:900px; height:700px; margin-left:25%; background-color:white; padding:30px;
 }
    </style>
 <a class="link2" href="{{ route('Checkout.index') }}">< Atrás</a>
<div class="contenedor">
<h1 class="link">Editar Salida</h1>
<form method="POST" action="{{route("Checkout.update",$datosCheckout->id)}}" enctype="multipart/form-data"> 
    @method('PUT')
    @csrf

   
<div class="mt-4">
    <label for="sale_id" class="form-label">Sale:</label>
    <div class="col-sm-10">
    <select type="text" class="form-control" id="sale_id" name="sale_id">
     @foreach ($datosSale as $Sales )
     <option value="{{$Sales->id}}"   
        @if ($Sales->id ==$datosCheckout->sale_id)
        selected

        @endif>
        Venta: {{$Sales->id}}
     </option>
     @endforeach
 </select>
 </div>
</div>

   <div class="form-group row">
        <label for="Alianza" class="form-label">Cliente:</label>
        <div class="col-sm-10">
        <select type="text" class="form-control" id="client_id" name="client_id">
         @foreach ($datosCliente as $Clientes )
         <option value="{{$Clientes->id}}"
            @if ($Clientes->id ==$datosCheckout->client_id)
            selected
    
            @endif>
             {{$Clientes->name_client }}
         </option>
         @endforeach
     </select>
     </div>
   </div>
   <div class="form-group row">
        <label for="product_id" class="form-label">Producto:</label>
        <div class="col-sm-10">
        <select type="text" class="form-control" id="product_id" name="product_id">
         @foreach ($datosProduct as $Products )
         <option value="{{$Products->id}}"
            @if ($Products->id ==$datosCheckout->product_id)
            selected
    
            @endif>
             {{$Products->name_product }}
         </option>
         @endforeach
     </select>
     </div>
   </div>

    
  <div class="form-group row">
        <label for="quantity" class="form-label">Cantidad:</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="quantity" name="quantity" value="{{$datosCheckout->quantity}}">
    </div>
  </div>
    <br>
  <div class="form-group row">
        <button style="margin-left:40%;" type="submit" class="btn btn-success">Guardar</button>
        </div>
        
    </form>
    </div>