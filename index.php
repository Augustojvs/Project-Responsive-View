<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Project</title>
        <link rel="icon" type="image/x-icon" href="assets/imagens/favicon.ico" />
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- CSS (includes Bootstrap)-->
        <link href="css/custom.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="assets/imagens/logo-in8-dev.svg" alt="" /></a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <img src="assets/icones/hamburguer.svg" alt="Menu" />
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ml-auto">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#cadastro">Cadastro</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#lista">Lista</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#footer">Sobre Mim</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading">ESTÁGIO</div>
                <div class="masthead-heading ">PROVA DE SELEÇÃO</div>
            </div>
        </header>
        <!-- Cadastro-->
        <section class="page-section" id="cadastro">
            <div class="container">
                <div class="text-center">
                    <h1 class="titleForm">CADASTRO</h1>
                </div>
                <form id="cadastroForm" name="sentRegister" novalidate="novalidate">
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-3"></div>
                        <div class="col-md-6 formContent">
                            <div class="form-group">
                                <input class="form-control" id="name" type="text" placeholder="Seu nome" required="required" validation-required-message="Por favor informe o seu nome." />
                                <p class="help-block text-danger" id="validaName"></p>
                            </div>
                            <div class="form-group">
                                <input class="form-control" id="email" type="email" placeholder="Seu email" required="required" validation-required-message="Por favor informe o seu email." />
                                <p class="help-block text-danger" id="validaEmail"></p>
                            </div>
                            <div class="form-group">
                                <input class="form-control birthday" id="birthday" type="text" placeholder="Sua data de nascimento" required="required" validation-required-message="Por favor informe a sua data de nascimento." />
                                <p class="help-block text-danger" id="validaBirthday"></p>
                            </div>
                            <div class="form-group">
                                <input class="form-control phone" id="phone" type="tel" placeholder="Seu telefone" required="required" validation-required-message="Por favor informe o seu telefone." />
                                <p class="help-block text-danger" id="validaPhone"></p>
                            </div>                           
                        </div>                     
                    </div>
                    <div class="text-center">
                        <div id="success"></div>
                        <button class="btn btn-primary btn-xl text-uppercase" id="sendRegisterButton" type="button">CADASTRAR</button>
                    </div>
                </form>
            </div>
        </section>
        <!-- Lista-->
        <section class="page-section" id="lista">
            <div class="container">
                <div class="text-center">
                    <h1 class="titleRegister">LISTA DE CADASTRO</h1>
                </div>
                <div class="row text-center">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                  <th scope="col"></th>
                                  <th scope="col">NOME</th>
                                  <th scope="col">E-MAIL</th>
                                  <th scope="col">NASCIMENTO</th>
                                  <th scope="col">TELEFONE</th>
                                </tr>
                              </thead>
                              <tbody id="tableContent">
<!--                                <tr>
                                    <td class="scope">1</td>
                                  <td>Mark</td>
                                  <td>Otto</td>
                                  <td>@mdo</td>
                                  <td>@mdo</td>
                                </tr>
                                <tr>
                                  <td  class="scope">2</td>
                                  <td>Jacob</td>
                                  <td>Thornton</td>
                                  <td>@fat</td>
                                  <td>@mdo</td>
                                </tr>
                                <tr>
                                  <td class="scope">3</td>
                                  <td>Larry</td>
                                  <td>the Bird</td>
                                  <td>@twitter</td>
                                  <td>@mdo</td>
                                </tr>-->
                              </tbody>
                        </table>
                      </div>                  
                        <a class="move-top-page" href="#page-top"><img src="assets/icones/topo-pag.svg" alt="" /></a>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer py-4" id="footer">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-left"></div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <span>Augusto Junio Vieira da Silva</span><br>
                        <span>augusto_jvs@hotmail.com</span><br>
                        <span>(31) 9 97506-9204</span><br>
                        <span>Centro Universitário UNA</span>
                    </div>
                    <div class="col-lg-4 text-lg-right"></div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
        <!-- plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- navbar JS-->
        <script src="js/scripts.js"></script>
        <!-- Mask js -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    </body>
</html>
<script>
    $('.birthday').mask('00/00/0000');
    $('.phone').mask('(00) 00000-0000');
    $('#name').on('keypress', function(){
        if($('#validaName').html() != ""){
            $('#validaName').html('');
        }
    });
    $('#email').on('keypress', function(){
        if($('#validaEmail').html() != ""){
            $('#validaEmail').html('');
        }
    });
    $('#birthday').on('keypress', function(){
        if($('#validaBirthday').html() != ""){
            $('#validaBirthday').html('');
        }
    });
    $('#phone').on('keypress', function(){
        if($('#validaPhone').html() != ""){
            $('#validaPhone').html('');
        }
    });
    var i = 1;
    $('#sendRegisterButton').on('click', function(e){
        if($('#name').val() == ""){
            $('#validaName').html('Insira o seu nome');        
        }else if($('#email').val() == ""){
            $('#validaEmail').html('Insira o seu email');
        }else if($('#birthday').val() == ""){
            $('#validaBirthday').html('Insira o sua data de aniversario');
        }else if($('#phone').val() == ""){
            $('#validaPhone').html('Insira o seu telefone');
        }
        if ($('#name').val() != "" && $('#email').val() != "" && $('#birthday').val() != "" && $('#phone').val() != ""){
            $('#tableContent').append(`<tr><td class="scope">${i++}</td><td>${$('#name').val()}</td><td>${$('#email').val()}</td><td>${$('#birthday').val()}</td><td>${$('#phone').val()}</td></tr>`);
            $('#name').val('');
            $('#email').val('');
            $('#birthday').val('');
            $('#phone').val('');
        }
    });
</script>