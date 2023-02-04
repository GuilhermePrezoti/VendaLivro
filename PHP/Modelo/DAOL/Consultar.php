<?php 

    namespace PHP\Modelo\DAOL;

    require_once('Conexao.php');

    use PHP\Modelo\DAOL\Conexao;

    class Consultar{
        public function consultarIndividual(Conexao $conexao, string $nomeDaTabela, int $codigo){
            try{
                $conn = $conexao->Conectar();
                $sql = "select * from $nomeDaTabela where codigo = '$codigo'";
                $result = mysqli_query($conn, $sql);

                while($dados = mysqli_fetch_array($result)){
                    if($dados['codigo'] == $codigo){
                        echo "<br>Codigo: ".$dados['codigo']."     Nome: ".$dados['nome']."     Telefone: ".$dados['telefone'];
                        return;
                    }
                }
                echo "Não localizado";

                mysqli_close($conn);
            }catch(except $erro){
                echo $erro;
            }
        }


        public function consultarTudo(Conexao $conexao, string $nomeDaTabela){
            try{

                $conn = $conexao->Conectar();
                $sql = "select * from $nomeDaTabela";
                $result = mysqli_query($conn, $sql);

                while($dados = mysqli_fetch_array($result)){
                    echo "<br>Codigo: ".$dados['codigo']."     Nome: ".$dados['nome']."     Telefone: ".$dados['telefone'];
                }
                
                mysqli_close($conn);
            }catch(except $erro){
                echo $erro;
            }
        }
    }


?>