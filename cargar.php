<?php

    function cargarDatos(){
    
        $consultas = new enviar();
        $arreglo = $consultas->mostrarDatos();
    
        echo '
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Nombre</th>                   
                    <th>Cedula</th>
                    <th>Salario Basico</th>
                    <th>Recargos</th>
                    <th>Deducciones</th>
                    <th>Total</th>    
                  </tr>
                  </thead>
                  <tbody>

            ';

            foreach ($arreglo as $f) {
                echo '
                
                    <tr>
                        <td> '.$f["nombre"].' </td>
                        <td> '.$f["cedula"].' </td>
                        <td> '.$f["salario"].' </td>
                        <td> '.$f["recargo"].' </td>
                        <td> '.$f["deducciones"].' </td>
                        <td> '.$f["total"].' </td>
                    </tr>
                ';
            }

            echo '
                    </tbody>
                    <tfoot>

                    </tfoot>
                </table>
            
            
            ';
    }