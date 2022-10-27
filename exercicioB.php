<?php
    if(isset($_POST["quantidadeHoras"]) 
    && isset($_POST["valorHora"]) 
    && isset($_POST["deslocamento"])
    && isset($_POST["hospedagem"])){

        if(!empty($_POST["quantidadeHohas"])
        && !empty($_POST["valorHora"])){

            $quantidadeHoras = $_POST["quantidadeHoras"];
            $valorHora = $_POST["valorHora"];
            $deslocamento = $_POST["deslocamento"];
            $hospedagem = $_POST["hospedagem"];

            $custo = (($quantidadeHoras * $valorhora)+ $deslocamento + $hospedagem );
            echo "o custo do orçamento é = $custo";
        }else{
            echo "Campos obrigatorio do orçamento estão vazios.";
            ?>
                <a href="exercicioB.html">Voltar para o orçamento cliente!</a>
            <?php
        }
    }else{
        echo "Para acessar esta página, você precisa preencher o orçamento.";
        echo "<br><br>Para acessar o orçamento";
        ?>
            <a href="exercicioB.html"> clique aqui.</a>
        <?php
    }

 ?>  
