<?php
    if(isset($_POST["nomeCliente"]) 
    && isset($_POST["emailCliente"]) 
    && isset($_POST["telefoneCliente"])){

        if(!empty($_POST["nomeCliente"])
        && !empty($_POST["emailCliente"])
        && !empty($_POST["telefoneCliente"])){
        $nomeCliente = $_POST["nomeCliente"];
        $emailCliente = $_POST["emailCliente"];
        $telefoneCliente = $_POST["telefoneCliente"];
        echo "Nome do cliente: $nomeCliente";
        echo "<br>";
        echo "email do cliente: $emailCliente";
        echo "<br>";
        echo "telefone do cliente: $telefoneCliente";
        echo "<br>";
        }else{
            echo "Campos do formulário estão vazios.";
            ?>
                <a href="exercicioAulaDia26-10-2022.html">Voltar para o cadastros cliente!</a>
            <?php
        }
    }else{
        echo "Para acessar esta página, você precisa preencher o cadastros cliente.";
        echo "<br><br>Para acessar o cadastro cliente";
        ?>
            <a href="exercicioAulaDia26-10-2022.html"> clique aqui.</a>
        <?php
    }

 ?>   