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

    $patch = $_SERVER["DOCUMENT_ROOT"] . "/forms-php-LittleZ17/phpimagenes" . "/". $arch1["name"];
    
     
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

    move_uploaded_file($arch1["tmp_name"], $patch);
    move_uploaded_file($arch2["tmp_name"], $patch);
    move_uploaded_file($arch3["tmp_name"], $patch);
  

  


