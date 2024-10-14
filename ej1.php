<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio1</title>
</head>
<body>
    <h1>Ejercicio 1</h1>
    
    <?php
        //INTRODUCE AQUÍ TU CÓDIGO

        if ($_SERVER ["REQUEST_METHOD"]=='POST'){

        $paquetes= $_POST ["paquetes"];
        $peso= $_POST ["peso"];
        $alto= $_POST ["alto"];
        $largo= $_POST ["largo"];
        $ancho= $_POST ["ancho"];
        $zona= $_POST ["zona"];
        $transporte= $_POST ["transporte"];
        $tamano= $_POST ["tamano"];
        $preciobase= 0;
        $preciototal=0;

     $tamano = $ancho * $largo  * $alto;
     
     if ($tamano <=0.5){
        $preciobase = 50*$tamano;
      }elseif ($tamano <=1){
          $preciobase = 75*$tamano;
      }else{
          $preciobase = 100*$tamano;
      }
echo "el precio base será $preciobase";

      if ($peso >15 ){
        echo "el envio se desestima por peso";
    }elseif ($peso >10){
          $preciobase *= 1.50;
    } elseif ($peso >5){
            $preciobase *= 1.25;
    }else{
          $preciobase= 0;
      }

      if ($zona == "canarias" ){
       $preciototal*= 0.1;
      }elseif ($zona= "baleares aereo "){
          $preciototal * 0.1;
     }elseif ($zona == "baleares maritimo"){
            $preciobase=0;
      }else{
          $preciobase= 0;
      }
    }

    ?>
    
    <form method="POST" action="">
        <label for="paquetes">PAQUETES:</label>
        <input type="number" id="paquetes" name="paquetes" value="">
    
        <label for="tamano">TAMAÑO:</label>
        <input type="number" id="tamano" name="tamano" value="">

        <label for="peso">PESO:</label>
        <input type="number" id="peso" name="peso" value="">

        <label for="ancho">ancho:</label>
        <input type="number" id="ancho" name="ancho" value="">


        <label for="largo">largo:</label>
        <input type="number" id="largo" name="largo" value="">

        <label for="alto">alto:</label>
        <input type="number" id="alto" name="alto" value="">


        <label for="zona">zona:</label>
        <select id="text" id="zona" name="zona" value="">
                <option value = "peninsula">peninsula</option>
                <option value = "baleares">baleares</option>
                <option value = "canarias">canarias</option>
        </select>

        <label for="transporte">transporte:</label>
        <select id="text" id="transporte" name="transporte" value="">
                <option value = "aereo">aereo</option>
                <option value = "maritimo">maritimo</option>
        </select>

       



        <input type="submit" value="Calcular">
    </form>
</body>
</html>