<?php
include("Bibliotecas/fpdf/fpdf.php");
require_once("Bibliotecas/fpdf/fpdf.php");

setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set('America/Sao_Paulo');

$Senha=           $_POST['Senha'];
$NomeCliente =    $_POST['NomeCliente'];
$EnderecoCleitne =$_POST ['EnderecoCliente'];
$ValorR =         $_POST['ValorR'];
$ValorEscrito=    $_POST['ValorEscrito'];
$Data=         strftime('%d/%B/%G');
$Hora=         date('H:i');

if(empty($NomeCliente)){
    ?>
    <script>
    alert('Preencha o campo "Nome Cliente"');
    window.location.href='index.html';
    </script>
    <?php

    
}if(empty($EnderecoCleitne)){
    ?>
    <script>
    alert('Preencha o campo "Endereço Cliente"');
    window.location.href='index.html';
    </script>
    <?php

}if(empty($ValorEscrito)){
     ?>
    <script>
    alert('Preencha o campo "Descrição do valor"');
    window.location.href='index.html';
    </script>
    <?php   
}if($Senha != '082993'){
    ?>
    <script>
    alert('Senha de usuário invalida, tente novamente!');
    window.location.href='index.html';
    </script>
    <?php
}else{    

$pdf = new FPDF();

$pdf->AddPage();

$pdf->SetFont('Arial','B',16);

$pdf->Image('./IMAGENS/Logo.png',10,10,-300);

$pdf->multiCell(190,10,'

                                           Recibo Gesso AL 

    Recebi do Sr(A) '.$NomeCliente.', residente e domicíliado(a) no endereço: '.$EnderecoCleitne.', a quantia de R$: '.$ValorR.',
'.$ValorEscrito.', referente a SERVIÇOS EM GESSO, dando-lhe por este recibo à devida quitação deste valor.');

$pdf->multiCell(190,10, '      


                                    Agilson Alves Da Silva
                                             Assinatura');
$pdf->multiCell(190,10,'
                                    '.$Data.' às '.$Hora.'');

$pdf->Output();

}
?>


