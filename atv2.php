<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados dos Exercícios de PHP</title>
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            line-height: 1.6;
            background-color: #f8f9fa;
            color: #212529;
            padding: 20px;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.05);
            overflow: hidden; /* Para conter o box-shadow */
        }
        h1 {
            background-color: #007bff;
            color: white;
            padding: 20px;
            margin: 0;
            text-align: center;
        }
        .exercicio {
            padding: 20px;
            border-bottom: 1px solid #dee2e6;
        }
        .exercicio:last-child {
            border-bottom: none;
        }
        .exercicio h3 {
            margin-top: 0;
            color: #0056b3;
            border-bottom: 2px solid #007bff;
            padding-bottom: 5px;
        }
        .resultado {
            background-color: #e9f5ff;
            border: 1px solid #b3d7ff;
            padding: 10px 15px;
            border-radius: 4px;
            margin-top: 10px;
        }
        .resultado strong {
            color: #004a99;
        }
        code {
            background-color: #e8e8e8;
            padding: 2px 5px;
            border-radius: 3px;
        }
        ul, ol {
            padding-left: 20px;
        }
    </style>
</head>

<body>


    <div class="container">
        <h1>Resultados dos Exercícios de PHP</h1>


        <?php
        // Bloco de código PHP começa aqui


        // ----------------------------------------------------
        // Exercício Exemplo: Quadrado de um número
        echo "<div class='exercicio'>";
        echo "<h3>Quadrado de um numero</h3>";
        $num1 = 15;
        $quad = pow($num1,2);
        echo "<p>Valor: <code>$num1</code></p>";
        echo "<div class='resultado'>O quadrado do numero é: <strong>$quad</strong></div>";
        echo "</div>";


     
        // ----------------------------------------------------
        // Exercício Exemplo: Par ou Impar
        echo "<div class='exercicio'>";
        echo "<h3>Par ou Impar</h3>";
        $numeroCheck = 5;
        echo "<p>Número: <code>$numeroCheck</code></p>";
        $resultadoCheck = "";
        if ($numeroCheck % 2 == 0) {
            $resultadoCheck = "Par";
         } else {
            $resultadoCheck = "Impar";
        }
        echo "<div class='resultado'>O número é: <strong>$resultadoCheck</strong></div>";
        echo "</div>";


        // ----------------------------------------------------
        // Exercício com: Switch
        echo "<div class='exercicio'>";
        echo "<h3>Cor Preferida (Switch)</h3>";
        $corNum = 2; // 1 = Azul
        echo "<p>Número da Cor Preferida: <code>$corNum</code></p>";
        $corNome = "";
        switch ($corNum) {
            case 1: $corNome = "Azul"; break;
            case 2: $corNome = "Verde"; break;
            case 3: $corNome = "Amarelo"; break;
            case 4: $corNome = "Laranja"; break;
            case 5: $corNome = "Branco"; break;
            case 6: $corNome = "Preto"; break;
            case 7: $corNome = "Lilás"; break;
            default: $corNome = "Cor inválida";
        }
        echo "<div class='resultado'>Cor Preferida: <strong>$corNome</strong></div>";
        echo "</div>";


     
        // ----------------------------------------------------
        // Lista dos pares entre 0 e 10 (For)
        echo "<div class='exercicio'>";
        echo "<h3>Lista de pares entre 0 e 10(For)</h3>";
        echo "<div class='resultado'>";
        for ($i = 0; $i <= 10; $i+=2) {
            echo "<strong>$i</strong> ";
        }
        echo "</div>";
        echo "</div>";


        // ----------------------------------------------------
        // Exercício: Soma de dois números inteiros
        echo "<div class='exercicio'>";
        echo "<h3>Soma de Dois Números Inteiros</h3>";
        $numero1 = 25;
        $numero2 = 17;
        $soma = $numero1 + $numero2;
        echo "<p>Primeiro número: <code>$numero1</code></p>";
        echo "<p>Segundo número: <code>$numero2</code></p>";
        echo "<div class='resultado'>A soma é: <strong>$soma</strong></div>";
        echo "</div>";

        // ----------------------------------------------------
        // Exercício: Defina três variáveis com notas e calcule a média aritmética.
        echo "<div class='exercicio'>";
        echo "<h3>Média Aritmética de Três Notas</h3>";
        $nota1 = 8.5;
        $nota2 = 7.0;
        $nota3 = 9.0;
        $media = ($nota1 + $nota2 + $nota3) / 3;
        echo "<p>Primeira nota: <code>$nota1</code></p>";
        echo "<p>Segunda nota: <code>$nota2</code></p>";
        echo "<p>Terceira nota: <code>$nota3</code></p>";
        echo "<div class='resultado'>A média é: <strong>$media</strong></div>";
        echo "</div>";

         // ----------------------------------------------------
        // Exercício: Defina uma variável com um valor em metros e exiba o correspondente em centímetros.
        echo "<div class='exercicio'>";
        echo "<h3>Conversão de Metros para Centímetros</h3>";
        $metros = 2.4;
        $centimetros = $metros * 100;
        echo "<p>valor em metros: <code>$metros</code></p>";
        echo "<p>valor em centímetros: <code>$centimetros</code></p>";
        echo "</div>";

         // ----------------------------------------------------
        // Exercício: Defina variáveis para a base e a altura de um retângulo e calcule sua área.
       echo "<div class='exercicio'>";
        echo "<h3>Área de um Retângulo</h3>";
        $base = 7.0;
        $altura = 4.0;
        $area = $base * $altura;
        echo "<p>Base: <code>$base</code></p>";
        echo "<p>Altura: <code>$altura</code></p>";
        echo "<div class='resultado'>A área do retângulo é: <strong>$area</strong></div>";
        echo "</div>";

         // ----------------------------------------------------
         // Exercício: Defina uma variável com um número e verifique se ele é positivo, negativo ou zero.
         echo "<div class='exercicio'>";
            echo "<h3>Verificação de Número Positivo, Negativo ou Zero</h3>";
            $numero = -3;

            echo "<p>Número: <code>$numero</code></p>";

            if ($numero > 0) {
                echo "<div class='resultado'>O número é positivo.</div>";
            } elseif ($numero < 0) {
                echo "<div class='resultado'>O número é negativo.</div>";
            } else {
                echo "<div class='resultado'>O número é zero.</div>";
            }
            echo "</div>";

            // ----------------------------------------------------
         // Exercício: Defina uma variável com a idade de uma pessoa e verifique se ela é maior de idade (18 anos ou mais). 
            echo "<div class='exercicio'>";
            echo "<h3>Verificação de Maioridade</h3>";
            $idade = 20;

            echo "<p>Idade: <code>$idade</code></p>";

            if ($idade >= 18) {
                echo "<div class='resultado'>A pessoa é maior de idade.</div>";
            } else {
                echo "<div class='resultado'>A pessoa é menor de idade.</div>";
            }
            echo "</div>";

            // ----------------------------------------------------
         // Exercício: Defina uma variável com a média final de um aluno e verifique se ele está "Aprovado" (média >= 6.0) ou "Reprovado". 
            echo "<div class='exercicio'>";
            echo "<h3>Verificação de Aprovação</h3>";
            $nota = 5.5;
            $nota2 = 7.0;
            $nota3 = 3.0;
            $mediaFinal = ($nota + $nota2 + $nota3) / 3;
            echo "<p>Nota 1: <code>$nota</code></p>";
            echo "<p>Nota 2: <code>$nota2</code></p>";
            echo "<p>Nota 3: <code>$nota3</code></p>";
            echo "<p>Média Final: <code>$mediaFinal</code></p>";
            if ($mediaFinal >= 6.0) {
                echo "<div class='resultado'>O aluno está Aprovado.</div>";
            } else {
                echo "<div class='resultado'>O aluno está Reprovado.</div>";
            }
            echo "</div>";

            // ----------------------------------------------------
            // Exercício: Defina duas variáveis com números diferentes e indique qual deles é o maior.
            echo "<div class='exercicio'>";
            echo "<h3>Comparação de Dois Números</h3>";
            $numA = 12;
            $numB = 8;

            echo "<p>Número A: <code>$numA</code></p>";
            echo "<p>Número B: <code>$numB</code></p>";

            if ($numA > $numB) {
                echo "<div class='resultado'>O número A é maior.</div>";
            } elseif ($numB > $numA) {
                echo "<div class='resultado'>O número B é maior.</div>";
            } else {
                echo "<div class='resultado'>Os números são iguais.</div>";
            }
            echo "</div>";

             // ----------------------------------------------------
             // Exercício:Defina uma variável com um número de 1 a 7 e exiba o nome do dia da semana correspondente (1 = Domingo, 2 = Segunda, etc.). 
                echo "<div class='exercicio'>";
                echo "<h3>Nome do Dia da Semana</h3>";
                $diaNum = 6; 
                echo "<p>Número do Dia: <code>$diaNum</code></p>";
                $diaNome = "";  
                switch ($diaNum) {
                    case 1: $diaNome = "Domingo"; break;
                    case 2: $diaNome = "Segunda-feira"; break;
                    case 3: $diaNome = "Terça-feira"; break;
                    case 4: $diaNome = "Quarta-feira"; break;
                    case 5: $diaNome = "Quinta-feira"; break;
                    case 6: $diaNome = "Sexta-feira"; break;
                    case 7: $diaNome = "Sábado"; break;
                    default: $diaNome = "Número inválido";
                }
                echo "<div class='resultado'>Dia da Semana: <strong>$diaNome</strong></div>";
                echo "</div>";

                // ----------------------------------------------------
             // Exercício: Defina uma variável com uma única letra e verifique se é uma vogal ou consoante (use strtolower para facilitar).
                echo "<div class='exercicio'>";
                echo "<h3>Verificação de Vogal ou Consoante</h3>";
                $letra = 'R';
                echo "<p>Letra: <code>$letra</code></p>";
                $letraLower = strtolower($letra);
                if (in_array($letraLower, ['a', 'e', 'i', 'o', 'u'])) {
                    echo "<div class='resultado'>A letra é uma vogal.</div>";
                } else {
                    echo "<div class='resultado'>A letra é uma consoante.</div>";
                }
                echo "</div>";

                // ----------------------------------------------------
             // Exercício: Defina uma variável com um status (ex: "aguardando", "em_preparacao", "enviado", "concluido") e mostre uma mensagem amigável para cada status.
                echo "<div class='exercicio'>";
                echo "<h3>Verificação de Status</h3>";
                $status = "em_preparacao";
                echo "<p>Status: <code>$status</code></p>";
                switch ($status) {
                    case "aguardando":
                        echo "<div class='resultado'>O pedido está aguardando processamento.</div>";
                        break;
                    case "em_preparacao":
                        echo "<div class='resultado'>O pedido está em preparação.</div>";
                        break;
                    case "enviado":
                        echo "<div class='resultado'>O pedido foi enviado.</div>";
                        break;
                    case "concluido":
                        echo "<div class='resultado'>O pedido foi concluído.</div>";
                        break;
                    default:
                        echo "<div class='resultado'>Status inválido.</div>";
                }
                echo "</div>";

                // ----------------------------------------------------
             // Exercício: Exiba os números de 1 a 10. 
                echo "<div class='exercicio'>";
                echo "<h3>Números de 1 a 10</h3>";
                echo "<div class='resultado'>";
                for ($i = 1; $i <= 10; $i++) {
                    echo "<strong>$i</strong> ";
                }
                echo "</div>";
                echo "</div>";

                 // ----------------------------------------------------
                  // Exercício: Pares de 1 a 20: Exiba apenas os números pares de 1 a 20 
                    echo "<div class='exercicio'>";
                    echo "<h3>Números Pares de 1 a 20</h3>";
                    echo "<div class='resultado'>";
                    for ($i = 1; $i <= 20; $i++) {
                        if ($i % 2 == 0) {
                            echo "<strong>$i</strong> ";
                        }
                    }
                    echo "</div>";

                
                // ----------------------------------------------------
                  // Exercício: Defina uma variável com um número (ex: 7) e exiba a tabuada desse número (de 1 a 10).
                    echo "<div class='exercicio'>";
                    echo "<h3>Tabuada de um Número</h3>";
                    $numTabuada = 9;
                    echo "<p>Número para Tabuada: <code>$numTabuada</code></p>";
                    echo "<div class='resultado'>";
                    for ($i = 1; $i <= 10; $i++) {
                        $resultadoTabuada = $numTabuada * $i;
                        echo "<strong>$numTabuada x $i = $resultadoTabuada</strong><br>";
                    }
                    echo "</div>";

                    // ----------------------------------------------------
                  // Exercício:  Faça uma contagem regressiva de 10 até 1.
                    echo "<div class='exercicio'>";
                    echo "<h3>Contagem Regressiva de 10 a 1</h3>";
                    echo "<div class='resultado'>";
                    for ($i = 10; $i >= 1; $i--) {
                        echo "<strong>$i</strong> ";
                    }
                    echo "</div>";

                    // ----------------------------------------------------
                  // Exercício:  Soma até 100: Calcule a soma de todos os números de 1 até 100.
                    echo "<div class='exercicio'>";
                    echo "<h3>Soma de 1 a 100</h3>";
                    $soma100 = 0;
                    for ($i = 1; $i <= 100; $i++) {
                        $soma100 += $i;
                    }
                    echo "<div class='resultado'>A soma de 1 a 100 é: <strong>$soma100</strong></div>";
                    echo "</div>";

                    // ----------------------------------------------------
                  // Exercício: Use rand(1, 10) dentro de um do-while até que o número sorteado seja 5. Conte e exiba quantas tentativas foram necessárias.
                    echo "<div class='exercicio'>";
                    echo "<h3>Sorteio de Números até 5</h3>";
                    $tentativas = 0;
                    do {
                        $sorteado = rand(1, 10);
                        $tentativas++;
                    } while ($sorteado != 5);
                    echo "<div class='resultado'>Número sorteado: <strong>$sorteado</strong><br> Tentativas necessárias: <strong>$tentativas</strong></div>";
                    echo "</div>";

                     // ----------------------------------------------------
                  // Exercício: Crie um array (vetor) com 5 nomes de frutas. Use um foreach para exibir cada fruta em um item de lista (<li>). 

                    $frutas = array("Maçã", "Banana", "Laranja", "Uva", "Morango");
                    echo "<div class='exercicio'>";
                    echo "<h3>Lista de Frutas</h3>";
                    echo "<div class='resultado'>";
                    echo "<ul>";
                    foreach ($frutas as $fruta) {
                        echo "<li>$fruta</li>";
                    }
                    echo "</ul>";
                    echo "</div>";
                    echo "</div>";

                    // ----------------------------------------------------
                  // Exercício: Crie um array com 5 números. Calcule e exiba a soma total desses números. 
                    $numerosArray = array(3, 7, 2, 9, 50);
                    $somaArray = array_sum($numerosArray);
                    echo "<div class='exercicio'>";
                    echo "<h3>Soma de Números em um Array</h3>";
                    echo "<p>Números: <code>" . implode(", ", $numerosArray) . "</code></p>";
                    echo "<div class='resultado'>A soma total é: <strong>$somaArray</strong></div>";
                    echo "</div>"; 

                     // ----------------------------------------------------
                  // Exercício:Crie um array associativo para um "Aluno" contendo as chaves "nome", "idade" e "curso". Exiba as informações formatadas (ex: "Nome: [valor]").

                    $aluno = array(
                        "nome" => "João Silva",
                        "idade" => 22,
                        "curso" => "Engenharia de Software"
                    );
                    echo "<div class='exercicio'>";
                    echo "<h3>Informações do Aluno</h3>";
                    echo "<div class='resultado'>";
                    echo "<p><strong>Nome:</strong> " . $aluno['nome'] . "</p>";
                    echo "<p><strong>Idade:</strong> " . $aluno['idade'] . "</p>";
                    echo "<p><strong>Curso:</strong> " . $aluno['curso'] . "</p>";
                    echo "</div>";
                    echo "</div>";

                     // ----------------------------------------------------

        // Fim do bloco PHP
        ?>
    </div>
</body>
</html>
