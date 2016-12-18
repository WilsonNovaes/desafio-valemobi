function validaCampos() {
    alert("Funcionou valida");
    var cd_mercadoria = document.forms["form_Cadastro"]["cd_mercadoria"].value;
    var tp_mercadoria = document.forms["form_Cadastro"]["tp_mercadoria"].value;
    var nm_mercadoria = document.forms["form_Cadastro"]["nm_mercadoria"].value;
    var vl_mercadoria = document.forms["form_Cadastro"]["vl_mercadoria"].value;
    
    var text =(cd_mercadoria+"\n"+tp_mercadoria+"\n"+nm_mercadoria+"\n"+vl_mercadoria);
    
    if(!cd_mercadoria.match(/^\d+$/)){
        alert("Somente numeros no campo do codigo!")
        document.getElementById("cd_mercadoria").focus();
        return false;
    } else if (!nm_mercadoria.match(/^[0-9a-zA-Z]+$/)){
        alert("Somente letras e numeros no nome!")
         document.getElementById("nm_mercadoria").focus();
        return false;
    } else if(!isFinite(vl_mercadoria)){
        alert("Somente numeros no campo valor!")
        document.getElementById("vl_mercadoria").focus();
        return false;
    } else {
        
        alert("Dados Inseridos com Sucesso! \n"+text);
    }
    
    
    
    
    
 
}

  function getFocus() {
                document.getElementById("cd_mercadoria").focus();

  }