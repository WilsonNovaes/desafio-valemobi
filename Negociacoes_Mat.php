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

<body>
    <div class="container">
        
    <div class="well">
    <H1><strong>Ultimas Operações realizadas</strong></H1>
    
    <ul class="nav nav-tabs">
            <li><a href="index.php"> Home                    </a></li>
            <li><a href="Cadastro_Mat.php">         Cadastro de Operações   </a></li>
            <li class="active"><a href="Negociacoes_Mat.php">      Visualizar Operações    </a></li>
        </ul>
        <br>
        
        
        <div class="well" style="background:rgb(242,242,242)">
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Código              </th>
                <th>Tipo de Mercadoria  </th>
                <th>Nome                </th>
                <th>Quantidade          </th>
                <th>Preço               </th>
                <th>Tipo de Negocio     </th>
            </tr>
        </thead>
        <tbody>
            
            <?php
            
                $sql = "SELECT * FROM op_mercadorias LIMIT 30;";
                $result = mysqli_query($conn, $sql);
        
                    if (mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_assoc($result)) {
                        
                        echo    "<tr>
                                    <td>".$row["cd_mercadoria"]."</td>
                                    <td>".$row["tp_mercadoria"]."</td>
                                    <td>".$row["nm_mercadoria"]."</td>
                                    <td>".$row["qt_mercadoria"]."</td>
                                    <td>".$row["vl_mercadoria"]."</td>
                                    <td>".$row["tp_negocio"]."</td>
                                 </tr>";
                        
                    }
                    } else {echo "0 results";}  
            
                     mysqli_close($conn);
            ?>
            
        </tbody>
    </table>
    </div>
      </div>
  </div>  

</body>
    
    
</html>