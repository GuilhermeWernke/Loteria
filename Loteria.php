<?php
    //Mega Senna
    const NumMaxMegaSenna = 20; 
    const NumMinMegaSenna = 6;  
    const NumMegaSenna = 60; 
    const NumSortMegaSenna = 6;

    const NumMaxQuina = 15; 
    const NumMinQuina = 5;
    const NumQuina = 80;
    const NumSortQuina = 5; 

    const NumMaxLotoMania = 50; 
    const NumMinLotoMania = 50;
    const NumLotoMania = 100; 
    const NumSortLotoMania = 50;

    const NumMaxLotoFacil = 20;
    const NumMinLotoFacil = 15;
    const NumLotoFacil = 25; 
    const NumSortLotoFacil = 15; 

    $NumEscolhidosOuSorteados = [];
    $NumSorteados = [];

    $OpcAposta = 0; //Escolhe o número ou Aleatoriza
    $NumApostas = 0;//Quantas apostas você vai fazer
    $NumEscolhidosPorAposta = 0; //Quantos números por aposta você vai fazer
    $Premio = "algo";



    print("Bem vindo a Loteria MiWe \n 1 Mega Sena \n 2 Quina \n 3 LotoMania \n 4 LotoFácil \n");
    $jogoEscolhido = readline("");


    $OpcAposta = readline("Você deseja Escolher os seus números ou Aleatorizar? \n \n");


    $NumEscolhidosPorAposta = readline("Quantas apostas você deseja fazer? \n \n");

    switch ($jogoEscolhido) 
    {
        case 1:

            QualLoteria($OpcAposta, $NumEscolhidosPorAposta, NumMinMegaSenna, NumMaxMegaSenna, NumMegaSenna);
            Premiacao(NumSortMegaSenna, NumMegaSenna, $NumSorteados);

        break;

        case 2:   
     
            QualLoteria($OpcAposta, $NumEscolhidosPorAposta, NumMinQuina, NumMaxQuina, NumQuina);
            Premiacao(NumSortQuina, NumQuina, $NumSorteados);

        break;

        case 3: 
    
            QualLoteria($OpcAposta, $NumEscolhidosPorAposta, NumMinLotoMania, NumMaxLotoMania, NumLotoMania);
            Premiacao(NumSortLotoMania, NumLotoMania, $NumSorteados);

        break;

        case 4: 
    
           QualLoteria($OpcAposta, $NumEscolhidosPorAposta, NumMinLotoFacil, NumMaxLotoFacil, NumLotoFacil);
           Premiacao(NumSortLotoFacil, NumLotoFacil, $NumSorteados);

        break;
    }


    function QualLoteria($OpcApost, $NumEscPorApost, $NumMinLot, $NumMaxLot, $NumLot)
    {
        global $NumEscolhidosOuSorteados;

        switch($OpcApost)
        {
            case 1:

                while($NumEscPorApost < $NumMinLot or $NumEscPorApost > $NumMaxLot)
                {
                    $NumEscPorApost = readline("Quantos números você quer por aposta? (entre " . $NumMinLot . " e " . $NumMaxLot);
                }

                
                for($i = $NumEscPorApost; $i > 0; $i--)
                {
                    $NumEscolhidosOuSorteados[$i -1] = readline("Escolha um número de 1 a " . $NumLot . "\n");

                    if(RepeteArray($NumEscolhidosOuSorteados, $NumEscolhidosOuSorteados[$i -1]) == true or $NumEscolhidosOuSorteados[$i -1] < 1 or $$NumEscolhidosOuSorteados[$i-1] > $NumLot)
                    {
                        
                        print("O número já se repetiu ou nao está no intervalo de 1 a " . $NumLot);
                        $i++;

                    }
                }

            break;

            case 2:

                while($NumEscPorApost < $NumMinLot or $NumEscPorApost > $NumMaxLot)
                {
                    $NumEscPorApost = readline("Quantos números você quer por aposta? (entre " . $NumMinLot . " e " . $NumMaxLot . ")");
                }

                
                for($i = $NumEscPorApost; $i > 0; $i--)
                {
                    $sorteio = rand(1, $NumLot);

                    if(in_array($sorteio, $NumEscolhidosOuSorteados) == true)
                    {
                        
                        $i++;

                    }else
                    {
                        $NumEscolhidosOuSorteados[$i -1] = $sorteio;
                    }

                    
                }

            break;
        }   
    }

    function RepeteArray($Array, $Num)
    {
        
        foreach($Array as $item => $valor)
        {
            if($Num == $valor)
            {
                return true;
            }
        }
        return false;        

    }

    function Premiacao(int $NumSortLot, int $NumLot, array $ArraySort)
    {

        for($i = $NumSortLot; $i > 0; $i--)
        {
            $sorteia = rand(1, $NumLot);

            if(in_array($sorteia[$i -1], $ArraySort))
            {
                
                $i++;

            }else
            {
                $ArraySort[$i -1] = $sorteia;
            }
        }
        
        print"Os Números Sorteados são: ";

        

        for($i = $NumSortLot; $i > 0; $i--)
        {

            print "$ArraySort[$i] ";

        }
    }

?>
