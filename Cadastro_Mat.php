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
     
            <script src="valida_Cadastro.js"></script>
    
    
</head>
    
    
<body ng-app="" onload="getFocus()">
    
    <div class="container">
        
        
    
        <div class="well">
           <H1><strong>Negociação de Mercadorias</strong></H1>
            <ul class="nav nav-tabs">
            <li><a href="index.php"> Home                    </a></li>
            <li  class="active"><a href="Cadastro_Mat.php">         Cadastro de Operações   </a></li>
            <li><a href="Negociacoes_Mat.php">      Visualizar Operações    </a></li>
        </ul>
        <br>
            
            
            <form onsubmit="return validaCampos()" name="form_Cadastro" class="form-horizontal" method="post" action="Cadastro_Sub.php" >
                
                    <table class="table table-bordered">
                        <div class="form-group">
                        <tr>
                            <td>
                                <label for="text">Código da mercadoria:</label>
                                <input type="text" class="form-control" id="cd_mercadoria" name="cd_mercadoria" placeholder="Digite código da mercadoria" ng-model="cd_mercadoria" required>
                                
                                <span class="erro_valida" ng-show="form_Cadastro.cd_mercadoria.$touched && form_Cadastro.cd_mercadoria.$invalid">O campo é obrigatório.</span>
                                
                            </td> 
                        </tr>
                            
                          <tr>
                            <td>
                                <label for="sel1">Selecione o tipo da mercadoria:</label>
                                <select class="form-control" id="tp_mercadoria" name="tp_mercadoria">
                                    <option value="A">Tipo A</option>
                                    <option value="B">Tipo B</option>
                                    <option value="C">Tipo C</option>
                                    <option value="D">Tipo D</option>
                                </select>
                            </td> 
                        </tr>
                        
                        <tr>
                            <td>
                                <label for="text">Nome da mercadoria:</label>
                                <input type="text" class="form-control" id="nm_mercadoria" name="nm_mercadoria" placeholder="Digite o nome da mercadoria" ng-model="nm_mercadoria" required>
                                
                                <span class="erro_valida" ng-show="form_Cadastro.nm_mercadoria.$touched && form_Cadastro.nm_mercadoria.$invalid">O campo é obrigatório.</span>
                            </td> 
                        </tr>
                            
                             <tr>
                            <td>
                                <label for="c2">Quantidade</label>
                                <span class="input-group-addon">Unidade(s)</span>
                                <input type="number" value="1000" min="0" step="1" data-number-to-fixed="2" data-number-stepfactor="100" class="form-control currency" id="qt_mercadoria" name="qt_mercadoria" placeholder="Quantidade de Mercadorias" ng-model="qt_mercadoria" required/>
                                
                               
                            </td> 
                        </tr>
                            
                        
                       <tr>
                            <td>
                                <label for="c2">Valor unitário</label>
                                <span class="input-group-addon">R$</span>
                                <input type="number" value="1000" min="0" step="0.01" data-number-to-fixed="2" data-number-stepfactor="100" class="form-control currency" id="vl_mercadoria" placeholder="Valor da mercadoria (R$)" name="vl_mercadoria" ng-model="vl_mercadoria" required/>
                                
                               
                            </td> 
                        </tr>
                            
                            <tr>
                            <td>
                                <label for="sel1">Selecione o tipo de negocio:</label>
                                <select class="form-control" id="tp_negocio" name="tp_negocio">
                                    <option value="Compra"> Compra  </option>
                                    <option value="Venda">  Venda   </option>   
                                </select>
                            </td> 
                        </tr>
                            
                            
                        
                        <tr>
                            <td>
                                <input type="submit" class="btn btn-primary btn-block" value="Confirmar" >
                            </td>
                        </tr>
                            
                            
                    </div> 
                    
                 </table>  

            </form>
            
        
        </div>
        
     </div>
    
    
    

</body>
    
    
</html>