<html>
    <head>
    <style>
        #precio_compra{
            width: 22%;
        }
    </style>
    </head>
    <body>
        <h1>Ejercicio 1</h1>
        <form action="index.php" method="post">
            <input type="text" placeholder="Introducir el precio de la compra" id="precio_compra" name="precio_compra" >
            <br>
            <br>
            <input type="submit" id="realizar_precio_final">
        </form>
        <?php
        if(isset($_POST["precio_compra"])){
            $precio=$_POST["precio_compra"];
            if($precio<50 && $precio>0){
                echo"El gasto de envio sera de 3,95€";
                echo "<br>";
                $precioFinal = $precio + 3.95;
                echo "El precio final será de: " . $precioFinal ."€";
            }elseif($precio>49 && $precio<75){
                echo"El gasto de envio sera de 2,95€";
                echo "<br>";
                $precioFinal = $precio + 2.95;
                echo "El precio final será de: " . $precioFinal ."€";
            }elseif($precio>74 && $precio<100){
                echo"El gasto de envio sera de 1,95€";
                echo "<br>";
                $precioFinal = $precio + 1.95;
                echo "El precio final será de: " . $precioFinal ."€";
            }elseif($precio>99){
                echo"El gasto de envio sera gratis";
                echo "<br>";
                echo "El precio final será de: " . $precio ."€";
            }
            unset($_POST["precio_compra"]);
        }
    ?>
    <h1>Ejercicio 2</h1>
    <form action="index.php" method="post">
            <input type="text" placeholder="Introducir el precio de la compra" id="precio_compra" name="precio_compra_switch" >
            <br>
            <br>
            <input type="submit" id="realizar_precio_final_switch">
    </form>
    <?php
        if (isset($_POST["precio_compra_switch"])) {
            $precio = $_POST["precio_compra_switch"];
            $gastoEnvio = 0;
        
            switch (true) {
                case $precio > 0 && $precio < 50:
                    $gastoEnvio = 3.95;
                    break;
                case $precio >= 50 && $precio < 75:
                    $gastoEnvio = 2.95;
                    break;
                case $precio >= 75 && $precio < 100:
                    $gastoEnvio = 1.95;
                    break;
                case $precio >= 100:
                    $gastoEnvio = 0;
                    break;
            }
        
            echo "El gasto de envío será de $gastoEnvio €<br>";
            $precioFinal = $precio + $gastoEnvio;
            echo "El precio final será de: $precioFinal €";
        }
    ?>
    <h1>Ejercicio 3</h1>
    <form action="index.php" method="post">
            <label>Introduzca 5 numeros</label>
            <br>
            <br>
            <input type="text" placeholder="Introducir el numero 1" id="numero1" name="numero1" >
            <br>
            <br>
            <input type="text" placeholder="Introducir el numero 2" id="numero1" name="numero2" >
            <br>
            <br>
            <input type="text" placeholder="Introducir el numero 3" id="numero1" name="numero3" >
            <br>
            <br>
            <input type="text" placeholder="Introducir el numero 4" id="numero1" name="numero4" >
            <br>
            <br>
            <input type="text" placeholder="Introducir el numero 5" id="numero1" name="numero5" >
            <br>
            <br>
            <input type="submit" id="mayorde5">
    </form>
    <?php
        if (isset($_POST["numero1"]) && isset($_POST["numero2"]) && isset($_POST["numero3"]) && isset($_POST["numero4"]) && isset($_POST["numero5"])) {
            $resultado = null;
            $numero = array();
            $cont =1;
            for($i=0; $i<5;$i++){
                $numero[$i]=$_POST["numero".$cont];
                $cont=$cont+1;
            }
            for($i=0; $i<5;$i++){
                if($numero[$i]>$resultado){
                    $resultado=$numero[$i];
                }
            }
            echo "El numero mayor es: " . $resultado;
        }
    ?>
    <h1>Ejercicio 4</h1>
    <?php
        $matriz = array(
            array(3,1),
            array(2,0)
        );
        foreach ($matriz as $fila) {
            foreach ($fila as $numero) {
                echo $numero . " ";
            }
            echo "<br>";
        }
    ?>
        <h1>Ejercicio 5</h1>
        <?php
            $matriz1 = array(
                array(1, 0),
                array(0, 1)
            );
            
            $matriz2 = array(
                array(0, 1),
                array(1, 0)
            );
            if (count($matriz1) !== count($matriz2) || count($matriz1[0]) !== count($matriz2[0])) {
                echo "Las matrices no tienen las mismas dimensiones y no se pueden sumar.";
            } else {
                $resultado = array();
                for ($i = 0; $i < count($matriz1); $i++) {
                    $fila = array();
                    for ($j = 0; $j < count($matriz1[0]); $j++) {
                        $fila[] = $matriz1[$i][$j] + $matriz2[$i][$j];
                    }
                    $resultado[] = $fila;
                }
                echo "Resultado de la suma de las matrices:<br>";
                foreach ($resultado as $fila) {
                    foreach ($fila as $valor) {
                        echo $valor . " ";
                    }
                    echo "<br>";
                }
            }
        ?>
    </body>
</html>