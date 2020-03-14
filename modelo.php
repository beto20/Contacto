<?php 
        include_once 'Controlador.php';
        $x=new Controlador();
        $x->agregar($_REQUEST['nombre'],$_REQUEST['apellido'],$_REQUEST['telefono'],$_REQUEST['correo'],$_REQUEST['descripcion']);
        
        //$nombre,$apellido,$telefono,$correo,$descripcion
        echo '<script>alert("Mensaje enviado");
                window.history.go(-1)</script>'



?>