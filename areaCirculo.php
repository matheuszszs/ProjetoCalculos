<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./areaCirculo.css">
    <title>Área do Círculo</title>
</head>
<body>
   <div class="container">
    <h1 class="titulo1">Área do Círculo</h1>
    <form action="areaCirculo.php" method="post">
        <label class="texto" for="raio">Raio: </label>
        <input type="number" id="raio" name="raio" step="0.01"><br><br>
        <div class="botoes">
        <input class="botao" type="submit" value="Calcular Raio">
        <input class="botao" type="reset" value="Limpar"><br><br>
        </div>
    </form>

    <div class="respostas">
    <div class="botoes">
    <a href="calcAreas.php"><button class="botao">Voltar</button></a><br><br>
    </div>
    </div>

        <?php
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
        if (isset($_POST['raio'])){
            $raio = $_POST['raio'];

            $erro = empty($raio)?"O raio deve ser inserido para o cálculo do círculo!" : ((!is_numeric($raio) || $raio <= 0)? "O raio deve ser inserido para o cálculo do círculo!" : "");

            if($erro){
                echo $erro;
            } else {
                $resp = pi() * (pow($raio,2));
                echo "<p>O cálculo da área é de: $resp</p>";
            }} else {
                echo"Formulário não enviado corretamente!"; 
            }
    }
        ?>

    </div>
   
</body>
</html>