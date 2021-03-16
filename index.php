<!DOCTYPE html>
<html>  
<head>
     <html lang="pt-br">
    <head>
    <title>ViaCEP</title>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- BootstrapCDN-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!--GOOGLE fonts--> 
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Oswald|Oxanium|Poppins|Sen&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" type="" href="style.css">
    <title>ViaCEP </title>
    <script src="js/app.js"></script>   
</head>
<body>
    <!--centraliza a tabela-->
    <div class="container mt-5">
    <div class="row justify-content-center">
        <div class="lateral ">
    </div>
        <div class="formulario col-6">
            <form method="POST" action="bancodedados.php">

             <!--criando o formulario-->
            <div class="form-group ">
                <label>CEP</label>
                <input class="form-control col-4" type="text"  id="cep" placeholder="Digite aqui..." required>
            </div>
           
            <div class="form-group">                                              <!--readonly(cria efeito no input)-->
                <input class="form-control " type="text" id="uf"  placeholder="UF" readonly>
            </div>

            <div class="form-group">
                <input class="form-control " type="text" name="Cidade" id="cidade" placeholder="Cidade" readonly>
            </div>

            <div class="form-group">
                <div class="input-group">
                    <input type="text" class="form-control col-8" placeholder="Logragouro" id="logradouro" readonly>
                    <input type="text" class="form-control col-4" placeholder="Número" id="numero">
           
                </div>
            </div>

            <div class="form-grounp">
                <input type="text" class="form-control " placeholder="Bairro" id="bairro" readonly>
            </div>
            </form>
                <!--Botao de Envio-->
                 <button type="submit" id="btn" class="btn"> Enviar</button>   
            </div>
        </div>
    </div>
</div>
    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script type="text/javascript"></script>
   
    <!---chamando a pasta js-->
    <script src="js/app.js"></script>

</body>
</html>
