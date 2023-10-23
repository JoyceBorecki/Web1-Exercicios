<?php
// Parâmetro: string => $txt
// Retorno: string => "<td>$txt</td>"
function criar_celula_tabela($txt){
    return "<td>$txt</td>";
}

// Parâmetro: vetor => $celulas (colunas de uma linha da tabela)
// Retorno: string => "<tr><td>$celulas[0]</td><td>$celulas[1]</td>...</tr>"
// Deve utilizar a função criar_celula_tabela
function criar_linha_tabela($celulas){
    $linha = "<tr>";
    foreach ($celulas as $celula) {
        $linha .= criar_celula_tabela($celula);
    }
    $linha .= "</tr>";
    return $linha;
}

// Parâmetro: matriz => $linhas (linhas e células da tabela)
// Retorno: string => "<table class='table'><tr><td>$linhas[0][0]</td><td>$linhas[0][1]</td>...</tr><tr><td>$linhas[1][0]</td><td>$linhas[1][1]</td>...</tr>...</table>"
// Deve utilizar a função criar_linha_tabela
function criar_tabela($linhas){
    $tabela = "<table class='table'>";
    foreach ($linhas as $linha) {
        $tabela .= criar_linha_tabela($linha);
    }
    $tabela .= "</table>";
    return $tabela;
}

// Parâmetro: inteiro => $n (número de linhas da matriz)
// Retorno: matriz ($n x $n+1) => matriz de potência como no enunciado
function matriz_potencia($n){
    $matriz = array();
    for ($i = 1; $i <= $n; $i++) {
        $linha = array();
        for ($j = 1; $j <= $n + 1; $j++) {
            $linha[] = pow($i, $j);
        }
        $matriz[] = $linha;
    }
    return $matriz;
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Teste PHP</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
  <h1>Tabela de potências</h1>
  <?php
    $n = 5;
    $matriz = matriz_potencia($n);
    echo criar_tabela($matriz);
  ?>
</div>
</body>
</html>