<?php
    //Mega Senna
    const NumMaxMegaSenna = 20; 
    const NumMinMegaSenna = 6;  
    const NumMegaSenna = 60; 

    const NumMaxQuina = 15; 
    const NumMinQuina = 5;
    const NumQuina = 80; 

    const NumMaxLotoMania = 50; 
    const NumMinLotoMania = 50;
    const NumotoMania = 100; 

    const NumMaxLotoFacil = 20;
    const NumMinLotoFacil = 15;
    const NumLotoFacil = 25; 

    $NumEscolhidosOuSorteados = [];

    $OpcAposta = 0;
    $NumApostas = 0;
    $NumEscolhidos = 0; 
    $NumSorteados = 0;
    $Premio = "algo";

    print("Bem vindo a Loteria Mito Wernke\n1 Mega Sena \n2 Quina \n3 Lotomania \n4 Lotofácil \n");
    $jogoEscolhido = readline("");

    switch ($jogoEscolhido) 
    {
        case 1:
            $NumApostas = readline("Quantas apostas você deseja fazer? \n \n");
            for ($i = $NumApostas; $i > 0; $i--) 
            {
                $OpcAposta = readline("Você deseja escolher os seus Números ou Aleatorizar?");
                switch($OpcAposta)
                {
                    case 1:
                        
                        $NumEscolhidos = readline("Deseja escolher ");

                    exit;
                    case 2:



                    exit;
                }

            }
                
        exit;
        case 2:   
     
        
            $numsApostas = readline("Quantas apostas você deseja fazer?");
            for ($i = $numsApostas; $i > 0; $i--) 
            { 
                $opcaoDeAposta = readline("Você deseja informar os números, ou que o programa os gere para você?\n1-Quero informar eu mesmo\n2-Surpresinha!\n");
                if ($opcaoDeAposta == 1) 
                {
                    $entradaUsuarioEscolha = readline("Informe os números escolhidos(separados por vírgula): \n");
                    $numsEscolhidos = explode(",", $entradaUsuarioEscolha);
                    $numsEscolhidosQuantidade = count($numsEscolhidos);
                    if ($numsEscolhidosQuantidade < 5  || $numsEscolhidosQuantidade > 15) 
                    {
                        while ($numsEscolhidosQuantidade < 5  || $numsEscolhidosQuantidade > 15 ) 
                        {
                            print "Número incorreto de dezenas! Informe novamente, você deve escolher entre 5 e 15 no jogo da Quina!\n";
                            $entradaUsuarioEscolha = readline("Informe os números escolhidos(separados por vírgula): \n");
                            $numsEscolhidos = explode(",", $entradaUsuarioEscolha);
                            $numsEscolhidosQuantidade = count($numsEscolhidos);
                        }
                    }
                    $numsSorteados = sortearNumeros(1, 80, 5);
                    JogoLoteria($numsEscolhidos, $numsSorteados, 2);
                    sort($numsEscolhidos);
                    print "Os números escolhidos são: $numsEscolhidos\n";
                    print "Os números premiados são: " . implode(", ", $numsSorteados) . "\n";
                    $premio = JogoLoteria($numsEscolhidos, $numsSorteados, 2);
                    print "Seu prêmio é: " . $premio . "\n";
                    
                }
                else if ($opcaoDeAposta == 2)
                {
                    $quantidadeNumeros = readline("Quantos numeros você deseja apostar?\n");
                    if ($quantidadeNumeros < 5 || $quantidadeNumeros > 15) 
                    {
                        while ($quantidadeNumeros < 5  || $quantidadeNumeros > 15) 
                        {
                            $quantidadeNumeros = readline("Quantos numeros você deseja apostar?\n");
                            print "Número incorreto de dezenas! Informe novamente, você deve escolher entre 5 e 15 no jogo da Quina!\n";
                        }
                    }
                    $numsEscolhidos = sortearNumeros(1, 80, $quantidadeNumeros);
                    $numsSorteados = sortearNumeros(1, 80, 5);
                    JogoLoteria($numsEscolhidos, $numsSorteados, 2);
                    sort($numsEscolhidos);
                    print "Os números escolhidos são: " . implode(", ", $numsEscolhidos) . "\n";
                    print "Os números premiados são: " . implode(", ", $numsSorteados) . "\n";
                    $premio = JogoLoteria($numsEscolhidos, $numsSorteados, 2);
                    print "Seu prêmio é: " . $premio . "\n";
                }
                else if ($opcaoDeAposta != 1 && $opcaoDeAposta != 2) 
                {
                    print"Opcao invalida.";
                    while ($opcaoDeAposta != 1 && $opcaoDeAposta != 2) 
                    {
                        $opcaoDeAposta = readline("Você deseja informar os números, ou que o programa os gere para você?\n1-Quero informar eu mesmo\n2-Surpresinha!\n");
                    }
                }
            } 
        exit;
        case 3: 
    
            $numsApostas = readline("Quantas apostas você deseja fazer?");
            for ($i = $numsApostas; $i > 0; $i--) 
            { 
                $opcaoDeAposta = readline("Você deseja informar os números, ou que o programa os gere para você?\n1-Quero informar eu mesmo\n2-Surpresinha!\n");
                if ($opcaoDeAposta == 1) 
                {
                    $entradaUsuarioEscolha = readline("Informe os números escolhidos(separados por vírgula): \n");
                    $numsEscolhidos = explode(",", $entradaUsuarioEscolha);
                    $numsEscolhidosQuantidade = count($numsEscolhidos);
                    if ($numsEscolhidosQuantidade != 50) 
                    {
                        while ($numsEscolhidosQuantidade != 50) 
                        {
                            print "Número incorreto de dezenas! Informe novamente, você deve escolher 50 números na Lotomania\n";
                            $entradaUsuarioEscolha = readline("Informe os números escolhidos(separados por vírgula): \n");
                            $numsEscolhidos = explode(",", $entradaUsuarioEscolha);
                            $numsEscolhidosQuantidade = count($numsEscolhidos);
                        }
                    }
                    $numsSorteados = sortearNumeros(1, 100, 20);
                    JogoLoteria($numsEscolhidos, $numsSorteados, 3);
                    sort($numsEscolhidos);
                    print "Os números escolhidos são: $numsEscolhidos\n";
                    print "Os números premiados são: " . implode(", ", $numsSorteados) . "\n";
                    $premio = JogoLoteria($numsEscolhidos, $numsSorteados, 3);
                    print "Seu prêmio é: " . $premio . "\n";
                }
                else if ($opcaoDeAposta == 2)
                {
                        $numsEscolhidos = sortearNumeros(1, 100, 50);
                        $numsSorteados = sortearNumeros(1, 100, 20);
                        JogoLoteria($numsEscolhidos, $numsSorteados, 3);
                        sort($numsEscolhidos);
                        print "Os números escolhidos são: " . implode(", ", $numsEscolhidos) . "\n";
                        print "Os números premiados são: " . implode(", ", $numsSorteados) . "\n";
                        $premio = JogoLoteria($numsEscolhidos, $numsSorteados, 3);
                        print "Seu prêmio é: " . $premio . "\n";
                }
                else if ($opcaoDeAposta != 1 && $opcaoDeAposta != 2) 
                {
                    print"Opcao invalida.";
                    while ($opcaoDeAposta != 1 && $opcaoDeAposta != 2) 
                    {
                        $opcaoDeAposta = readline("Você deseja informar os números, ou que o programa os gere para você?\n1-Quero informar eu mesmo\n2-Surpresinha!\n");
                    }
                }
            }
        exit;
        case 4: 
    
            $numsApostas = readline("Quantas apostas você deseja fazer?");
            for ($i = $numsApostas; $i > 0; $i--) 
            { 
                $opcaoDeAposta = readline("Você deseja informar os números, ou que o programa os gere para você?\n1-Quero informar eu mesmo\n2-Surpresinha!\n");
                if ($opcaoDeAposta == 1) 
                {
                    $entradaUsuarioEscolha = readline("Informe os números escolhidos(separados por vírgula): \n");
                    $numsEscolhidos = explode(",", $entradaUsuarioEscolha);
                    $numsEscolhidosQuantidade = count($numsEscolhidos);
                    if ($numsEscolhidosQuantidade < 15  || $numsEscolhidosQuantidade > 20) 
                    {
                        while ($numsEscolhidosQuantidade < 15  || $numsEscolhidosQuantidade > 20 ) 
                        {
                            print "Número incorreto de dezenas! Informe novamente, você deve escolher entre 15 e 20 no jogo da Lotofácil!\n";
                            $entradaUsuarioEscolha = readline("Informe os números escolhidos(separados por vírgula): \n");
                            $numsEscolhidos = explode(",", $entradaUsuarioEscolha);
                            $numsEscolhidosQuantidade = count($numsEscolhidos);
                        }
                    }
                    $numsSorteados = sortearNumeros(1, 25, 15);
                    JogoLoteria($numsEscolhidos, $numsSorteados, 4);
                    sort($numsEscolhidos);
                    print "Os números escolhidos são: $numsEscolhidos\n";
                    print "Os números premiados são: " . implode(", ", $numsSorteados) . "\n";
                    $premio = JogoLoteria($numsEscolhidos, $numsSorteados, 4);
                    print "Seu prêmio é: " . $premio . "\n";
                }
                else if ($opcaoDeAposta == 2)
                {
                    $quantidadeNumeros = readline("Quantos numeros você deseja apostar?\n");
                    if ($quantidadeNumeros < 15 || $quantidadeNumeros > 20) 
                    {
                        while ($quantidadeNumeros < 15  || $quantidadeNumeros > 20) 
                        {
                            print "Número incorreto de dezenas! Informe novamente, você deve escolher entre 15 e 20 no jogo da Lotofácil!\n";
                            $quantidadeNumeros = readline("Quantos numeros você deseja apostar?\n");
                        }
                    }
                    $numsEscolhidos = sortearNumeros(1, 25, $quantidadeNumeros);
                    $numsSorteados = sortearNumeros(1, 25, 15);
                    JogoLoteria($numsEscolhidos, $numsSorteados, 4);
                    sort($numsEscolhidos);
                    print "Os números escolhidos são: " . implode(", ", $numsEscolhidos) . "\n";
                    print "Os números premiados são: " . implode(", ", $numsSorteados) . "\n";
                    $premio = JogoLoteria($numsEscolhidos, $numsSorteados, 4);
                    print "Seu prêmio é: " . $premio . "\n";
                }
                else if ($opcaoDeAposta != 1 && $opcaoDeAposta != 2) 
                {
                    print"Opcao invalida.";
                    while ($opcaoDeAposta != 1 && $opcaoDeAposta != 2) 
                    {
                        $opcaoDeAposta = readline("Você deseja informar os números, ou que o programa os gere para você?\n1-Quero informar eu mesmo\n2-Surpresinha!\n");
                    }
                }
            } 
        exit;
    }   

    function JogoLoteria($numsEscolhidos, $numsSorteados, $jogoEscolhido) 
    {
        $premio = "Nenhum prêmio :(";

        //Deixa os numeros bonitinhos
        sort($numsEscolhidos);
        sort($numsSorteados);
        
        //Compara 
        $numsIguais = array_intersect($numsEscolhidos, $numsSorteados);
        
        //Verifica quantos números iguais
        $numsIguaisCount = count($numsIguais);
        
        //Prêmio!
        switch ($jogoEscolhido) 
        {
            case '1':
                if ($numsIguaisCount == 4) 
                {
                    $premio = 'Quadra';
                } 
                elseif ($numsIguaisCount == 5) 
                {
                    $premio = 'Quina';
                } 
                elseif ($numsIguaisCount == 6) 
                {
                    $premio = 'Sena';
                }
                break;
            case '2':
                if ($numsIguaisCount == 5) 
                {
                    $premio = 'Quina';
                }
                break;
            case '3':
                
                if ($numsIguaisCount == 0) 
                {
                    $premio = 'Nenhum acerto';
                } 
                elseif ($numsIguaisCount == 15) 
                {
                    $premio = '15 acertos';
                } 
                elseif ($numsIguaisCount == 16) 
                {
                    $premio = '16 acertos';
                } 
                elseif ($numsIguaisCount == 17) 
                {
                    $premio = '17 acertos';
                } 
                elseif ($numsIguaisCount == 18) 
                {
                    $premio = '18 acertos';
                } 
                elseif ($numsIguaisCount == 19) 
                {
                    $premio = '19 acertos';
                } 
                elseif ($numsIguaisCount == 20) 
                {
                    $premio = '20 acertos';
                }
                break;

            case '4':
                if ($numsIguaisCount == 11) 
                {
                    $premio = '11 acertos';
                } 
                elseif ($numsIguaisCount == 12) 
                {
                    $premio = '12 acertos';
                } 
                elseif ($numsIguaisCount == 13) 
                {
                    $premio = '13 acertos';
                } 
                elseif ($numsIguaisCount == 14) 
                {
                    $premio = '14 acertos';
                } 
                elseif ($numsIguaisCount == 15) 
                {
                    $premio = '15 acertos';
                }
                break;

            default:
                $premio = 'Jogo não existe';
                break;
        }

        return $premio;
    }

    function sortearNumeros($minimo, $maximo, $quantidade) 
    {
        $numsSorteados = [];
        
        while (count($numsSorteados) < $quantidade) 
        {
            $numAleatorio = rand($minimo, $maximo);

            if ($numAleatorio >= $minimo && $numAleatorio <= $maximo) //so uma garatia
            {
                if (!in_array($numAleatorio, $numsSorteados)) //pra nao duplicar <3, penei nisso, viu? ass:Sarah
                {
                    $numsSorteados[] = $numAleatorio;
                }
            }
        }
        
        sort($numsSorteados);

        return $numsSorteados;
    }

    function repeteArray($array)
    {
        $i = 0;
        $j = 0;
        $numeroElementosArray = count($array);
        $repeticioes = 1;
        $novamente = false;
        for($numeroElementosArray; $numeroElementosArray != 1 ; $numeroElementosArray--)
        {
            $repeticoes *=  $numeroElementosArray;

        }
        for($i ; $i < $repeticoes ; $i++)
        {
            for($j ; $j < $repeticoes ; $j++)
            {
                if($i != $j)
                {
                    $repetiu = $array[$i] == $array[$j];
                    if($repetiu == true)
                    {
                        return $novamente = true;
                    }
                }
            }
        }

    }

?>
