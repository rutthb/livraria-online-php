<?php
$query = 'SELECT * FROM livros ORDER BY codigo DESC LIMIT 0 , 15'; // BUSCA PADR�O PARA DESTAQUES COM RANDOM PARA MOSTRAR CONTE�DO ALEAT�RIO
$resultado = mysqli_query($conexao, $query);

include_once('inserirdados.php');
?>