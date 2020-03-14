<?php

    class Controlador {
        private $cn=null;


        function __construct(){
            if ($this->cn==null) {
                $this->cn=mysqli_connect("localhost","root","","bdformulario");
                echo "CORRECTO";
            }else{
                echo "ERROR";
            }
            return $this->cn;
        }





        // ADICION DE DATOS
        function agregar ($nombre,$apellido,$telefono,$correo,$descripcion){
            $sql="CALL ADICION('$nombre','$apellido','$correo','$telefono','$descripcion');";
            $result=mysqli_query($this->cn, $sql);
            if ($result) {
                return "Logrado";
            }else{
                return "Fallido";
            }
        }
    
    
    
    }

?>