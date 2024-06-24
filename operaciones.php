<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado de la operación</title>
</head>
<body>
    <h2>Resultado de la operación</h2>

    <?php

    function suma($a, $b) {
        return $a + $b;
    }

    function resta($a, $b) {
        return $a - $b;
    }

    function multiplicacion($a, $b) {
        return $a * $b;
    }

    function division($a, $b) {
        if ($b == 0) {
            return "Error: División por cero no permitida";
        } else {
            return $a / $b;
        }
    }

    
    if (isset($_POST['num1'], $_POST['num2'], $_POST['operacion'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operacion = $_POST['operacion'];

       
        if (is_numeric($num1) && is_numeric($num2)) {
           
            switch ($operacion) {
                case 'suma':
                    $resultado = suma($num1, $num2);
                    break;
                case 'resta':
                    $resultado = resta($num1, $num2);
                    break;
                case 'multiplicacion':
                    $resultado = multiplicacion($num1, $num2);
                    break;
                case 'division':
                    $resultado = division($num1, $num2);
                    break;
                default:
                    $resultado = "Operación no válida";
                    break;
            }

            echo "<p>El resultado de $operacion entre $num1 y $num2 es: $resultado</p>";
        } else {
            echo "<p>Por favor ingresa números válidos para num1 y num2.</p>";
        }
    } else {
        echo "<p>No se han recibido todos los datos necesarios.</p>";
    }
    ?>
</body>
</html>