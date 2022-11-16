<?php
    class enviar {
        public function enviarDatos($nombre,$cedula,$salario,$recargo,$deducciones,$total){
            
            $modelo = new conexion();
            $conexion = $modelo->get_conexion();
            

            
                $sql = "INSERT INTO empleados (nombre, cedula, salario, recargo, deducciones,total) 
                VALUES (:nombre,:cedula,:salario,:recargo,:deducciones,:total)";

                $statement = $conexion->prepare($sql);

                
                
                $statement-> bindParam(':nombre', $nombre);
                $statement-> bindParam(':cedula', $cedula);
                $statement-> bindParam(':salario', $salario);
                $statement-> bindParam(':recargo', $recargo);
                $statement-> bindParam(':deducciones', $deducciones);
                $statement-> bindParam(':total', $total);
    

                if(!$statement){
                    echo '<script>alert("Error del Sitema.")</script>';
                    
                }else{
                    $statement->execute();
                    echo '<script>alert("Registro Exitoso.")</script>';

               
                }
                        
        }
        public function mostrarDatos(){
            
            $modelo = new conexion();
            $conexion = $modelo->get_conexion();

            $consultar = "SELECT * FROM empleados";
            $result = $conexion->prepare($consultar);
            $result-> execute();

            while ($arreglo = $result->fetch()) {
                $f[] = $arreglo;
            }return$f;
        }
    }
?>   