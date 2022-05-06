<?php
include './controle/protecAdm.php'
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Meu Aconchego</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/secunStyle.css">
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</head>



<body onunload="myfunction()">
    <header>
    <div class="Nova__NavBar">
      <div>
        <section class="Novo__Grid Novo__grid-template">

          <a class="logo__Nov grid_Logo" href="index.php">
            <div class="item__Novo"></div>
          </a>

          <center>
            <div class="item__Novo">
              <div class="Menu__Novo">
                <div class="subContainer">
                  <li class="dropdown Menu__Responsivo" style="flex-grow: 1;">
                    <a href="#" class="dropdown-toggle-hide" data-toggle="dropdown" role="button"
                      aria-expanded="false"><i class="fa fa-bars" style="float: left;"></i>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                      <li><a class="drops_menu" href="PainelProdutos.php">Produtos</a></li>
                      <li><a class="drops_menu" href="sobre.php">Sobre</a></li>
                      <li><a class="drops_menu" href="contatos.php">Contatos</a></li>
                      <li class="divider"></li>
                      <li class="dropdown-header" style="color: white"></li>
                      <li><i class="fa fa-user" style="color: white ;"></i>
                        <a class="drops_menu" id="ContaDrop" href="Entrar.php"></a>
                        <a class="drops_menu" id="Conta" href="ContaCliente.php"></a>
                      </li>
                    </ul>
                  </li>
                  <li class="Menu__Item" style="flex-grow: 1;"><a href="sobre.php">Sobre</a></li>
                  <li class="Menu__Item" style="flex-grow: 1;"><a href="PainelProdutos.php">Produtos</a></li>
                  <li class="Menu__Item" style="flex-grow: 1;"><a href="contatos.php">Contatos</a></li>
                </div>
              </div>
            </div>
          </center>

          <center>
            <div class="item__Novo grid_Criar">
              <div class="Criar">
                <span class="CriarConta__subcontainer01" data-logged-user="false">
                  <li style=" margin-right: 7px; "><i class="fa fa-user" style="color: white ;"></i></li>
                  <li>
                   <a id="Conta2" class="dropdown-toggle-hide" data-toggle="dropdown" role="button"
                      aria-expanded="false">
                      <?php if(isset($_SESSION['id'])){
                          echo $_SESSION['msg'] = "Bem Vindo ";
                          echo $_SESSION['nome'];
                         
                      ?>
                      <ul class="dropdown-menu" role="menu">
                        <li class="drops_menu" style="color: white">Área Do Cliente</li>
                        <p>
                          <li><a class="drops_menu" href="ContaAdmin.php">Conta</a></li>
                          <li><a class="drops_menu" href="#">Pedidos</a></li>
                          <li><a class="drops_menu" href="#">Acesso e Segurança</a></li>
                          <li><a class="drops_menu" href="#">Enderços</a></li>
                          <li><a class="drops_menu" id="SairConta" href="./php/SairConta.php">Sair da Conta</a></li>
                      </ul>
                    </a>
                    <?php }else{ ?>
                    <a id="Entrar" class="" href="Entrar.php">entrar</a>
                    <li style="margin-left: 10px;">
                    <a id="CriarConta" class="" href="CriarConta.php">Criar Conta</a>
                    </li> 
                    <?php  } ?>
                  </li>
                </span>
              </div>
            </div>
          </center>

          <div class="item__Novo grid_Buscar">
            <div class="barra_Buscar">
              <input type="search" placeholder="Buscar Produto" />
              <button type="submit" class="btn_Buscar" style="display:flex; align-items: center;">
                <i class="fa fa-search" style="align-items: center; justify-content: center;"></i>
              </button>
            </div>
          </div>

          <div class="item__Novo Grid_Comprar">
            <div class="incons_Compra">
              <div style="margin-left: 10px;">
                <a href="carrinho.php" style="text-decoration:none;">
                  <div class="bag">
                    <div class="back_NumCarrinho">
                      <span class="NumCarrinho" id='cart'>0
                      </span>
                    </div>
                    <div class="icon "><i class="fa fa-shopping-bag" aria-hidden="true"></i></div>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
    </header>

    <style>
    .button1 {
      background-color: #E08B53;
      /* Green */
      border: none;
      color: white;
      padding: 10px 20px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 4px 150px 5px;
      transition-duration: 0.4s;
      cursor: pointer;
      border-radius: 2px;

    }

    .button1:hover {
      background-color: #20B2AA;
      color: white;
    }
  </style>
  <a href="./index.php"> <button class="button button1"><i class="fa fa-arrow-left"></i> Voltar ao início </button>
  </a>

    <div style=" padding:2% 0 0; margin:0 auto;">
        <div class="CentralInfo">
            <h4 style="font-size: 25px;">Conta Administrativa</h4>
            <div class="Sub_CentralInfo">

                <button class="CaixaCentralInfo" id="#">
                    <a style="text-decoration:none; color:white" href="#">
                            <h4>Administrar Pedidos</h4>
                    </a>
                </button>

                <button class="CaixaCentralInfo" id="#">
                    <a style="text-decoration:none; color:white" href="./Admprodutos.php">
                        <h4>Administrar Produtos</h4>
                    </a>
                </button>
                
                <button class="CaixaCentralInfo" id="#">
                    <a style="text-decoration:none; color:white" href="./AdmUser.php">
                        <h4>Administrar Usuários</h4>
                    </a>
                </button>
                
                <button class="CaixaCentralInfo" id="SairConta">
                    <a style="text-decoration:none; color:white" href="./php/SairConta.php">
                        <h4>Sair da conta</h4>
                    </a>
                </button>
            </div>
        </div>
    </div>

    <br><br><br><br>
    <footer style="margin-top: 30vh; bottom: 100; " >
    <section class="grindRodape ">

    <center>
      <div class="Site" >
        <div class="Mapadosite">
          <h4>Mapa do site</h4>
          <hr>
          <h5>
              <li><a href="PainelProdutos.php">Produtos</a></li>
              <li><a href="sobre.php">Sobre</a></li>
              <li><a href="contatos.php">Contatos</a></li>
              <li><a href="ContaAdmin.php">Conta</a></li>
          </h5>
        </div>

        <div class="Midiassociais" style="margin-left: 3vh;"> 
        <h4>Mídias sociais</h4>
          <hr>
          <h5>
              <li><a href="https://api.whatsapp.com/send?1=pt_BR&phone=5571993551934">Whatsapp</a></li>
              <li><a href="https://www.instagram.com/meuaconchego.byam/?hl=pt-br">Instagram</a></li>
          </h5>
        </div>
      </div>
    </center>

      <center>
        <div class="Mapa">
          <div style="height: 100%; width: 100%">
          <img src="./Imagens/Mapa.png" style="height: 100%; width: 100%" >
          </div>
        </div>
      </center>

      <center>
      <div class="FormasPag">
      <img src="./Imagens/Mercadopago.png" style="height: 100%; width: 100%" >
      </div>
      </center>
    </section>
  </footer>

</body>

</html>