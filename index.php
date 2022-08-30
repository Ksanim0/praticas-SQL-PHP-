<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LoginTela</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
</head>
<body>
<div class="col-sm-8 container-fluid">
    <div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-8">
            <div class="box-parent-login">
                    <div class="well bg-white box-login">
                        <h1 class="ls-login-logo">Formulário</h1>
                        <form role="form">
                            <fieldset>
                
                                <div class="form-group ls-login-user">
                                    <label for="userLogin">Usuário</label>
                                    <div class="row">
                                            <div class="col-sm-4">
                                    <input class="form-control ls-login-bg-user input-lg" id="userLogin" type="text" aria-label="Usuário" placeholder="Usuário">
                                            </div>
                                    </div>
                                </div>
                
                                <div class="form-group ls-login-password">
                                    <label for="userPassword">Senha</label>
                                    <div class="row">
                                        <div class="col-sm-4">
                                    <input class="form-control ls-login-bg-password input-lg" id="userPassword" type="password" aria-label="Senha" placeholder="Senha">
                                        </div>
                                    </div>
                                </div>
                
                                <br>
                
                                <input type="submit" value="Cadastrar" class="btn btn-primary btn-lg btn-block">

                                

                                <div class="row">
                                    <div class="com-sm-3">
                                    <br>
                                <label>Já é Cadastrado?</label><a href="telaCadastro.php"> Cadastre-se aqui</a>
                                    </div>
                                </div>
                
                            </fieldset>
                        </form>
                    </div>
                </div>
                </div>
    </div>
</div>
  

</body>
</html>