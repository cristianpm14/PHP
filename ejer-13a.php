<html>
<head></head>
<body>
<?php
$f=fopen("pizza.txt","a") or die("File Error");
fputs($f,"cliente: ".$_REQUEST['nom']);
fputs($f,"\n");
fputs($f,"Direccion: ".$_REQUEST['direc']);
fputs($f,"\n");

$total = 0;
if(isset($_REQUEST['pros'])){
    fputs($f,"prosciutto: ".$_REQUEST['qpros']);
    fputs($f,"\n");
    fputs($f,"Total de precio: ".$_REQUEST['qpros']*5.50);
    fputs($f,"\n");
    $total += $_REQUEST['qpros']*5.50;
};
if(isset($_REQUEST['napo'])){
    fputs($f,"Napolitana: ".$_REQUEST['qnapo']);
    fputs($f,"\n");
    fputs($f,"Total de precio: ".$_REQUEST['qnapo']*6.75);
    fputs($f,"\n");
    $total += $_REQUEST['qnapo']*6.75;
};
if(isset($_REQUEST['mozza'])){
    fputs($f,"Mozzarella: ".$_REQUEST['qmoza']);
    fputs($f,"\n");
    fputs($f,"Total de precio: ".$_REQUEST['qmoza']*4.75);
    fputs($f,"\n");
    $total += $_REQUEST['qmoza']*4.75;
};

fputs($f,"Total: ".$total);
echo "Se ha enviado tu pedido";

?>
</body>
</html>