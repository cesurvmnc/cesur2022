<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<meta name="description" content="Web sencilla de im&aacute;genes">
	<meta name="keywords" content="HTML5, CSS3, JavaScript">
	<title>Flores</title>

	<style>

		html{
			background-color: greenyellow;
			padding: 10px;
		}

    h1{
      color: red;
      padding: 5px;
    }

    h2{
      color: pink;
      font-style: sans-serif;
    }

    div{
      display:flex;
      border:solid;
      border-color:red;
      padding:10px;
      margin:10px;
      border-radius:20px;+
      justify-content:center;


    }
	</style>


</head>
<body>


  <h1>EJEMPLO EJERCICIO. Galer&iacute;as de im&aacute;genes</h1>
  <h2>Una selecci&oacute;n de flores.</h2>

  <p>Flores para todos los gustos</p>

  

   
 <div class="seccion1">

      <img src="imagenes/1.jpg" alt="Flores de corte" width="200" height="200">
    
      Foto 1: Flores de corte   
     
    
      <img src="imagenes/2.jpg" alt="Mirabilis Jalapa" width="200" height="200">
     
      Foto 2: Flor de Mirabilis Jalapa
     
    
      <img src="imagenes/3.jpg" alt="Strelitzia" width="200" height="200">
     
     Foto3: Strelitzia. Flores de las aves.

  </div>
    
    <div class="seccion2">
       <img src="imagenes/4.jpg" alt="Flor del opio" width="200" height="200">
      
      Foto 4: Flor del opio.
      
   
       <img src="imagenes/5.jpg" alt="Rosas" width="200" height="200">
     
      Foto 5: Rosas
     
    
      <img src="imagenes/6.jpg" alt="Pensamiento" width="200" height="200">
     
     Foto 6: Pensamiento
    
  </div>

  <p>Copyright 2022, www.cesurformaion.com</p>

<h1 style="color:red">
    <?php
      echo 'Autor: alvarorodriguezmartin';
      ?>
</h1>
  
</body>
</html>
