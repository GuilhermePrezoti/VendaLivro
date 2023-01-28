<?php
    require_once('Cadastro.php');
    require_once('Endereco.php');
    require_once('Contas.php');

    $enderecoCli = new Endereco("dsfsgsfgs", 
    "200", 
    "São Paulo", 
    "SP", 
    "000000000"
);
    $cadastroCli = new CadastroClient("John",
    $enderecoCli, 
    "1234567890", 
    "01/01/2001", 
    "reiDelas@gmail.com", 
    "123"
);  
    $contaCli = new Conta($cadastroCli);
    echo $contaCli->logar();





?>