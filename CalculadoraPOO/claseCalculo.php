    <link rel="stylesheet" href="estilos.css">

<?php

    class calculadora{

        public function calcularDatos($valor1,$valor2,$opcion){
            switch($opcion){
                case 'suma':
                    return $valor1+$valor2;
                    break;
                case 'resta':
                    return $valor1-$valor2;
                    break;
                case 'division':
                    return $valor1/$valor2;
                    break;
                case 'multiplicacion':
                    return $valor1*$valor2;
                    break;

                default:
                
                break;


            }
        }
        
    }
    

?>