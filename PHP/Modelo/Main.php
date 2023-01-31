<?php
    namespace PHP\Modelo;

    require_once('Cadastros/Endereco.php');
    require_once('Cadastros/Cadastro.php');
    require_once('Lojas/Livros.php');
    require_once('Lojas/Loja.php');

    use PHP\Modelo\Cadastros\Endereco;
    use PHP\Modelo\Cadastros\CadastroClient;
    use PHP\Modelo\Lojas\Livros;
    use PHP\Modelo\Lojas\Loja;
    
    $enderecoCli = new Endereco("dsfsgsfgs", "200", "São Paulo", "SP", "000000000");
    $cadastroCli = new CadastroClient("John",$enderecoCli, "1234567890", "01/01/2001", "reiDelas@gmail.com","123");  
    $livroSample = new Livros("12345678910", "Saraiva");
    $lojaSample  = new Loja($livroSample, 1000);

    echo $cadastroCli->login($cadastroCli,"reiDelas@gmail.com", "123");
    echo $livroSample->getTitulo();
    echo " ".$lojaSample->getUnid();
    echo "<br>".$lojaSample->comprar($cadastroCli, $lojaSample, $livroSample, 10000);
    echo "<br><br> Quantidade do livro em estoque: ";
    echo $lojaSample->getUnid();

?>