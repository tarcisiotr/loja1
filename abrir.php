
<?php
// Lê um arquivo em um array.  Nesse exemplo nós obteremos o código fonte de
// uma URL via HTTP
$lines = file ('http://futurohacker.com.br/app2/tpl');

// Percorre o array, mostrando o fonte HTML com numeração de linhas.
foreach ($lines as $line_num => $line) {
    echo htmlspecialchars($line) . "<br>\n";
}

// Outro exemplo, onde obtemos a página web inteira como uma string. Veja também file_get_contents().
$html = implode ('', file ('http://futurohacker.com.br/app2/tpl'));

// Usando o parâmetro de flags opcionais disponíveis desde o PHP 5
$trimmed = file('tpl/index.html', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
?>