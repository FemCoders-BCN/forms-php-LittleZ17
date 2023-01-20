<?php

    $name = $_POST['name'];
    $lastname = $_POST["lastname"];
    $genero = $_POST["genero"];
    $bootcamps = $_POST["bootcamps"];
    $contraseña = $_POST["contraseña"];
    $estado = $_POST["estado"];
    $comentarios = $_POST["comentarios"];
    $arch1 = $_FILES["arch1"];
    $arch2 = $_FILES["arch2"];
    $arch3 = $_FILES["arch3"];


    $patch = "./phpimagenes/";
    
     
    echo"<p> NOMBRE: $name</p>";
    echo"<p> APELLIDO: $lastname</p>";
    echo"<p> GENERO: $genero</p>";
    echo"<p> BOOTCAMP:</p>";
    echo"<ul>";
     foreach($bootcamps as $eachBootcamp){
        echo"<li>$eachBootcamp</li>";
     }
     echo"</ul>";
     echo"<p>CONTRASEÑA: $contraseña</p>";
     echo"<p>ESTADO: $estado</p>";
     echo"<p>COMENTARIOS: $comentarios</p>";
     echo"<code>El fichero es valido y se ha subido correctamente. </code>";
    //  $img = [$arch1, $arch2, $arch3];
     var_dump($arch1);
     echo"<br>";
     var_dump($arch2);
     echo"<br>";
     var_dump($arch3);
    //  echo $patch;

 $file = $patch . basename($_FILES['fichero_usuario']['name']);
 
if(move_uploaded_file($_FILES["fichero_usuario"]['tmp_name'], $patch)){
   echo "El archivo es valido y se subió con exito.!";
}

if (is_uploaded_file($FILES['files']['tmp_name'])){
   $folder = './phpimagenes/';
   $id = time();
   $filename = $id . '-' . $_FILES['files']['name'];
   move_uploaded_file($FILES['files']['tmp_name'], $folder . $filename);
}else{
   echo "Ha fallado la subida del archivo!";
}


if (is_uploaded_file($FILES['filesValidate']['tmp_name'])){
   $folder = './phpimagenes/';
   $filename = $_FILES['filesValidate']['name'];
$namefinal = $folder . $filename;
if(is_file($namefinal)){
   $id = time();
   $filename = $id . '-' . $_FILES['files']['name'];
}
move_uploaded_file($FILES['files']['tmp_name'], $folder . $filename);
}else{
   echo "Ha fallado la subida del archivo!";
}


  


