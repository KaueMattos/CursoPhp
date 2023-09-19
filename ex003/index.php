<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos prImitivos em PHP</title>
</head>
<body>
    <h1>Teste de tipos primitivos</h1>
    <?php
    // 0x= hexadiximal 0b = binário 0 = Octal
        // $num = 0x1A;
        // echo "O valor da variável é $num ";

        // $v = 300;
        // var_dump($v);

        // $num = (int) 3e2; //3x 10(2)
        // // echo "O valor é $num";
        // var_dump($num);

        // $casado = true;
        // echo "O valor para casado é $casado";// true =1 false = fica vazio

        // $vet = [6.5, true, "kaue", 01, 5];
        // // echo "O vetor é $vet";
        // var_dump($vet);

        class pessoa{
            private string $nome;
        }

        $p = new pessoa;
        var_dump($p);

    ?>
</body>
</html>