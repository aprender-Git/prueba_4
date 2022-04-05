<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>formulario en php</h1>
    <form method="POST" action="recibir.php">
      <p>
      <label for="nombre">button</label>
        <input type="button" name="boton" value="clikeame/" >
      </p>
   
<p>
<label for="color">color</label>
        <input type="color" name="color" >

</p>
<label for="fecha">fecha</label>
        <input type="date" name="sexo" >
       

</p><label for="file">file</label>
        <input type="file"  name="file" multiple>

</p><label for="email">email</label>
        <input type="email" placeholder="ingreses su apellido" name="email" required >

</p>
<p>
<label for="number">numero</label>
        <input type="number" placeholder="ingreses su apellido" name="email" >
      
</p>

<p>
<label for="number">numero</label>
        <input type="number"  name="email" required >
      
</p>

<p>
<label for="password">pass</label>
        <input type="password" placeholder="ingreses su apellido" name="email" required >
      
</p>
<p>
<label for="radio">continenre</label>
       europa <input type="radio"  name="continente" value="europa" required >
       america <input type="radio"  name="continente" value="america" required >
       asia <input type="radio"  name="continente" value="asia" required >

</p>
<p>
<label for="web">pagina</label>
        <input type="url"  name="web" required >
      
</p>
<textarea name="" id="" cols="30" rows="10"></textarea>

<select name="select" name="pelis" id="">
<option value="spiderman">spiderman</option>
<option value="batman">batman</option>
<option value="hulk">hulk</option>
</select>

        <input type="submit" value="enviar datos"/>
    </form>
</body>
</html>