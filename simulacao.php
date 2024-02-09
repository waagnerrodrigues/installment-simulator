<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simulação</title>
    <link rel="stylesheet" href="styleresultado.css">
</head>
<body>
    <main>
        <h1>Simulação!</h1>
        <?php 
            $num = $_GET["numero"] ?? 0;

            echo "<p>O valor simulado foi de ". number_format($num, 2, ",", ".") . "R$" ."</p>";
            echo "<table>";
            echo "<tr><th>Parcelas</th><th>Valor da Parcela</th><th>Total</th></tr>";
            
            $total_acumulado = 0;
            
            for ($i = 1; $i <= 12; $i++) {
                $parcela_com_juros = $num * (1 + 0.03 * $i); // Calcula o valor da parcela com juros

                $total_acumulado = $parcela_com_juros; // Adiciona o valor da parcela com juros ao total acumulado

                echo "<tr><td>{$i}x</td><td>" . number_format($parcela_com_juros / $i, 2, ",", ".") . "</td><td>" . number_format($total_acumulado, 2, ",", ".") . "</td></tr>";
            }
            
            echo "</table>";
        ?>
        <button type="submit"><a href="index.html" style="color: white; text-decoration: none;">Voltar para simulação!</a></button>
    </main>
</body>
</html>
