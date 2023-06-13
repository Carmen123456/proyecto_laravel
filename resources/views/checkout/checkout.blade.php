<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
<style>
  body {
                 font-family: 'Copperplate Gothic Bold';
   }
   .link{
       color: rgb(3, 3, 3);
             background-color:transparent;
             float: left;
       font-family: 'Bernard MT Condensed';
                 font-size: 30px;
   }
   .link2{
     color: #008037;
     
     font-family: 'Bernard MT Condensed';
         font-size: 30px;
         margin-left: 25%;
         margin-top: 30px;
     }
   a:hover{
         
         background-color: rgb(100, 100, 100);
         color: black;
     }
 
   .operaciones {
     float: left;
 }
 i{
   color: black;
 }
 </style>
 @if (session('status'))
 <div class="alert alert-success" role="alert">
     {{ session('status') }}
 </div>
 @endif
               <a class="link" href="{{route('Inicio')}}">  &nbsp;< Atrás &nbsp;</a>
               <h1 class="link2">Salidas</h1>
  
<div class="content">
    <div class="row"> 


      <table style="width: 80%" table-bordered class="table table-striped">
        <thead class="text-dark">

      <tr>
          <th>Id Checkout</th>
          <th>Ventas </th>
          <th>Producto</th>
          <th>Cantidad</th>
          <th>Operaciones</th>
      </tr>
  </thead>
  </thead>
  <tbody> 
    @foreach ($datosCheckout as $Checkout )
          <tr>
              <td>{{ $Checkout->id }}</td>
              <td>{{ $Checkout->sale_id }}</td>
              <td>{{ $Checkout->producto->name_product }}</td>
              <td>{{ $Checkout->quantity }}</td>
              <td>
                <form action="{{ url('/Checkout', $Checkout->id) }}" method="post">
                  @csrf
                  {{ method_field('DELETE') }}
                  <input type="image" class="operaciones"
                   src="../../img/trash.svg"
                    onclick="return confirm('¿Quieres borrar?')" value="Eliminar">
              </form>
       
       
              &nbsp;
              &nbsp;
              <a href="{{route('Checkout.edit',$Checkout->id)}}"><i class="bi bi-pencil" ></i></a>
                    </td>
          </tr>
      @endforeach
  </tbody>
</table> 
  <!-- Button trigger modal -->
  <a style="margin-left: 70%; margin-top:20%;"  href="{{route('Checkout.create')}}"><i style="font-size:70px; color: #008037" class="bi bi-plus-circle-fill" ></i></a>
        
    </div>
</div>