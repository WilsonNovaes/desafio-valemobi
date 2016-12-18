<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  
    <!-- CARREGA BIBLIOTECAS -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="estilo_p.css">
    
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="angular/angular.min.js"></script>
    
    <?php include 'conn.php'; ?>
    
    
</head>
    
<?php
    $verifica= $msg = "";
    
    $cd_mercadoria = $tp_mercadoria =  $nm_mercadoria = $vl_mercadoria = $qt_mercadoria = $tp_negocio = "";
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $cd_mercadoria = $_POST["cd_mercadoria"];
        $tp_mercadoria = $_POST["tp_mercadoria"];
        $nm_mercadoria = $_POST["nm_mercadoria"];
        $qt_mercadoria = $_POST["qt_mercadoria"];
        $vl_mercadoria = $_POST["vl_mercadoria"];
        $tp_negocio    = $_POST["tp_negocio"];
        
    }
    
    
    
    $sql = "INSERT INTO op_mercadorias (cd_mercadoria, tp_mercadoria, nm_mercadoria, qt_mercadoria, vl_mercadoria, tp_negocio) VALUES ('".$cd_mercadoria."', '".$tp_mercadoria."','".$nm_mercadoria."','".$qt_mercadoria."','".$vl_mercadoria."','".$tp_negocio."')";
    
    
    if ($conn->query($sql) === TRUE) {
        $verifica = "alert alert-success";
        $msg = "<strong>Operação confirmada! </strong> \n \n Dados Salvos com sucesso !";
    } else {
        $verifica = "alert alert-danger";
        $msg = "Valores não inseridos! \n \n Error: <strong>" . $sql . "</strong><br>" . $conn->error;
    }

$conn->close();
    
    ?>
    
    
    <script>
    function focusBtn(){
        document.getElementById("btn_Volta").focus();
    }
    </script>
    
    
<body onload="focusBtn()">
    
    <div class="container">
        
        
        <div class="<?php echo $verifica ?>">
                <?php echo $msg ?>
        </div>
        
        
        
        
        <a href="Cadastro_Mat.php" id="btn_Volta" class="btn btn-info" role="button">VOLTAR</a>
    
    </div>
    
    
   
    
</body>
    
</html>