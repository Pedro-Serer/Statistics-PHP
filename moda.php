<?php   
   function fModa (array $aVetor): int
    {
        $tamanho = count($aVetor);
        $novoVetor = [];
    
        for ($i=0; $i < $tamanho; $i++) {
            isset($novoVetor[$aVetor[$i]]) ? $novoVetor[$aVetor[$i]] += 1 : $novoVetor[$aVetor[$i]] = 1;
        }    

        return max($novoVetor);
    }
