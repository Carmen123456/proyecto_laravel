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
width:900px; height:520px; margin-left:25%; background-color:white; padding:30px; margin-top:20px;
}
</style>
<a class="link2" href="{{ route('Categorie.index') }}">< Atrás</a>
<div class="contenedor">
<h1 class="link">Nueva categorie</h1>
<form method="POST" action="{{url("Categorie")}}" enctype="multipart/form-data"> 
@csrf

<div class="form-group row">
    <label for="name_categorie" class="form-label">Categoria:</label>
    <div class="col-sm-10">
   <input type="text" class="form-control" id="name_categorie" name="name_categorie">

</div>
</div>

<div class="form-group row">
    
    <label for="description_categorie" class="form-label">Descripción:</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="description_categorie" name="description_categorie">
</div>
</div>
<br>
<div class="form-group row">
    <button style="margin-left:40%;" type="submit" class="btn btn-success">Guardar</button>
    </div>
    
</form>
</div>