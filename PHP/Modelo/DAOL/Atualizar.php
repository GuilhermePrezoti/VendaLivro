<?php 
    namespace PHP\Modelo\DAOL;

    require_once('Conexao.php');

    use PHP\Modelo\DAOL\Conexao;

    class Atualizar{
        
      public function update(Conexao $conexao, string $campo, string $novoDado, string $codigo, string $nomeDaTabela){
        try{
            $conn = $conexao->conectar();
            $sql = "update $nomeDaTabela set $campo = '$novoDado' where codigo = '$codigo'";
            $result = mysqli_query($conn,$sql);

            mysqli_close($conn);

            if($result){
                echo "<br> Atualizado com sucesso!";
                return;
            }
            echo "<br> Error.";
        }catch(exept $erro){
            echo $erro;
        }
      }  
        
    }
?>