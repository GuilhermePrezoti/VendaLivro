<?php
    
    
    namespace PHP\Modelo;
    
    

    require_once('Cadastros/Endereco.php');
    require_once('Cadastros/Cadastro.php');
    require_once('Lojas/Livros.php');
    require_once('Lojas/Loja.php');
    require_once('DAO/Conexao.php');
    require_once('DAO/Inserir.php');

    use PHP\Modelo\Cadastros\Endereco;
    use PHP\Modelo\Cadastros\CadastroClient;
    use PHP\Modelo\Lojas\Livros;
    use PHP\Modelo\Lojas\Loja;
    use PHP\Modelo\DAO\Conexao;
    use PHP\Modelo\DAO\Inserir;
    
    $connect = new Conexao();
    $insert = new Inserir();
    
    $connect->conectar();
    $insert->cadastrar($connect, 'livros', 'Morro dos Ventos Uivantes', 40.99, 20);



?>