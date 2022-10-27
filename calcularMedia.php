<?php

//https://github.com/rafaelflorindo/RafaelWeb

//isset() = testa se a variavel existe
if(isset($_POST["nomeAluno"]) 
    && isset($_POST["notaBimestre1"]) 
    && isset($_POST["notaBimestre2"])){
    
    if(!empty($_POST["nomeAluno"])
    && !empty($_POST["notaBimestre1"])
    && !empty($_POST["notaBimestre2"])){
        
        $nomeAluno = $_POST["nomeAluno"];
        $notaPrimeiroBimestre = $_POST["notaBimestre1"];
        $notaSegundoBimestre = $_POST["notaBimestre2"];
        echo "Nome do aluno: $nomeAluno";
        echo "<br>";
        echo "Nota Primeiro Bimestre: $notaPrimeiroBimestre";
        echo "<br>";
        echo "Nota Segundo Bimestre: $notaSegundoBimestre";
        echo "<br>";
        $media = ($notaPrimeiroBimestre + $notaSegundoBimestre)/2;
        //echo "Média = $media";

        if($media < 4){
            echo "<br>Você está reprovado com média = $media";
        }else if($media < 7){
            echo "<br>Você está de exame com média = $media";
        }else{
            echo "<br>Você está aprovado com média = $media";
        }

    }else{
        echo "Campos do formulário estão vazios.";
    ?>
        <a href="formulario.html">Voltar para o formulário!</a>
    <?php
    }
}else{
    echo "Para acessar esta página, você precisa preencher o formulário.";
    echo "<br><br>Para acessar o formulário";
    ?>
        <a href="formulario.html"> clique aqui.</a>
    <?php
}
    //var_dump($_POST);//função que imprime vetor com os tipos dos campos
//echo "<hr>";
   
?>
