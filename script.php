<?php
    $favcolor = $_POST["favcolor"];
    echo "<center><body style='background-repeat: no-repeat;background-size: cover;'> 
    <br><br><br><br><br><p id='Ganon'>Sua cor favorita ";
    switch ($favcolor) {
        case "vermelho":
            echo "é vermelho!</p><br>
            <img src='Fotos/vermelho.jpg' style='height: 300px;'><br>
            <p>Din te Aprova</p>";
            echo"<style>body{background: url(Fotos/Din.jpeg);}</style>";
        break;
        case "azul":
            echo "é azul!</p><br>
            <img src='Fotos/azul.jpg' style='width: 400px;'><br>
            <p>Farore te Aprova</p>";
            echo"<style>body{background: url(Fotos/Farore.jpg);}</style>";
        break;
        case "verde":
            echo "é verde!</p><br>
            <img src='Fotos/verde.jpg' style='width: 400px;'><br>
            <p>Nayru te Aprova</p>";
            echo"<style>body{background: url(Fotos/Nayru.jpg);}</style>";
        break;
        default:
        echo "não é vermelho, azul ou verde!</p><br>
        <img src='Fotos/nada.jpg' style='height: 300px;'><br>
        <p id='Ganon'>Ganon te admira</p>";
        echo"<style>body{background: url(Fotos/Ganon.png);}
        #Ganon{color: white;}</style>";
        break;
    }
    echo "</body></center>";
?>