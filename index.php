<!DOCTYPE html>
<html lang="pt-br">
<meta charset="utf-8">



<head>
  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-109289062-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-109289062-1');
</script>

  <script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.9";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!-- declaração de responsividade para mobile primeiro-->
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Inserindo folha de stylo Css.css-->
<link rel="stylesheet" type="text/css" href="Css.css">
<!--Inserindo boostrap via CDN-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!--inserindo popper via CDN-->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<!--Inserindo bootstrap.js via CDN -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<!-- Inserindo pacote de icones via CDN-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
<!--Inserindo pacote de animações via CDN -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />


<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="IMAGENS/Logo.png" >

<title>GessoAL</title>
</head>

<section id="Home">

<nav class="navbar fixed-top navbar-light bg-light">
    <!-- Icone gesso al da barra de navegação-->
    
    <a href="#Home"><img src="IMAGENS/Logo.png" class="zoom" width="100px" height="50px" alt="GessoAL" ></a>
   
    <!-- Menu Icon "Sanduiche" do offcanvas-->
     <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
      <spam class="navbar-toggler-icon"></spam>
    </button>
       
    <!--Inicio dos termos do offcanvas-->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#Home"><h5 class="bi bi-house-fill"> Início</h5></a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#tools"><h5 class="bi bi-tools"> Serviços</h5></a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#Vantagens"><h5 class="bi bi-hand-thumbs-up-fill"> Vantagens</h5></a>
          </li>
          <!--<li class="nav-item ">
           <a class="nav-link active" aria-current="page" href="#images"><h5 class="bi bi-images"> Galeria</h5></a>
         </li>-->
          <li class="nav-item ">
            <a class="nav-link active" aria-current="page" href="#calculator"><h5 class="bi bi-calculator-fill"> Orçamento</h5></a>
          </li>
          <li class="nav-item ">
            <a class="nav-link active" aria-current="page" href="#whatsapp"><h5 class="bi bi-whatsapp"> Atendimento</h5></a>
           <li class="nav-item">
            <p>
              <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                Gerar Recibo
              </a>
            </p>

            <!-- Gerar documento de RECIBO  -->
            <div class="collapse" id="collapseExample">
              <div class="card card-body">
                <form method="post" action="GeraRecibo.php">
                <input type="text" name="NomeCliente" placeholder="Digite o nome:" required title="Campo obrigatório">
                <input type="text" name="EnderecoCliente" placeholder="Digite o endereço:" required title="Campo obrigatório">
                <input type="number" name="ValorR" placeholder="Digite o valor:" required title="Campo obrigatório">
                <input type="text" name="ValorEscrito" placeholder="Descreva o valor:" required title="Campo obrigatório">
                <input type="password" name="Senha" placeholder="Senha de usuário:" required title="Campo obrigatório">
                <p><button type="submit" class="btn btn-primary">ENVIAR</button></p>
                </form>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
</nav>
</section>

<!-- link para inicio da pagina sinalizado pela ID="home"-->
<div class="shadow" id="INICIO" >
<p>&nbsp;</p>


<header>
<div class="container-header">
  <p>&nbsp;</p>
  <p>&nbsp;</p>
 
  <div class="jumbotron">
    <h1 class="display-4"><b class="animate__animated animate__bounceInUp animate__delay-2s">O melhor do gesso na sua casa!</b></h1>
    <p class="lead"></p>
    <hr class="my-4">
    <p class="fs-3"><i class="animate__animated animate__bounceInUp animate__delay-3s">A decoração em gesso permite modificar a aparência de um ambiente através das várias técnicas de aplicação e modelagem.</i></p>
    <p class="lead">
      <a class="btn btn-success btn-lg" href="https://api.whatsapp.com/send?phone=5561984288454&text=Faça uma pergunta sobre projetos em gesso e temtaremos responder o mais breve possível" role="button"><i class="zoom">Agende uma visita.</i></a>
    </p>
  </div>
</div>
</header>


</div>



</head>

<body id="body"> 

  <div class="Titulos">
   <p id="tools"> </p><h1 class="bi bi-tools"> Serviços:</h1>
  </div>
<hr>

<!-- Inicio da apresentação dos cards com as opções de serviços-->



<div class="shadow">
<div class="container-card1">
 
<section class="card-serv">
<div class="card1">
  <img src="IMAGENS/Moldura.webp" class="img-card">
  <div class="card-body">
    <h3 class="card-title"><i class="bi bi-info-circle"> Moldura</i></h3>
    <p class="card-text"> Utilizado na decoração do teto, janelas e portas. Possui vários modelos e tamanhos e designs diferentes.</p>
  </div>
</div>



<div class="card1">
  <img src="IMAGENS/Sanca.webp" class="img-card" >
  <div class="card-body">
    <h3 class="card-title"><i class="bi bi-info-circle"> Sanca</i></h3>
    <p class="card-text">  Possuem duas modalidades, sendo elas: aberta e fechada com iluminação interna e externa.</p>
  </div>
</div>



<div class="card1">
  <img src="IMAGENS/Divisoria.webp" class="img-card" >
  <div class="card-body">
    <h3 class="card-title"><i class="bi bi-info-circle"> Divisória</i></h3>
    <p class="card-text">Feito em Drywall ou bloco de gesso de 60x60cm. Pode ser decorativo ou uma alternativa ao uso de alvenaria.</p>
  </div>
</div>



<div class="card1">
  <img src="IMAGENS/Parede3d.webp" class="img-card" >
  <div class="card-body">
    <h3 class="card-title"><i class="bi bi-info-circle"> Parede 3D</i></h3>
    <p class="card-text">Revestimento decorativo com vários modelos e formas.Pode ser aplicado em todos ambientes.</p>
  </div>
</div>

</section>

</div>
</div>



 <div  class="Titulos">
   <p id="Vantagens"></p><h1 class="bi bi-hand-thumbs-up-fill"> Vantagens:</h1>
 </div>
  <hr>


 
<div class="shadow">
<div class="container-card2">

<section class="card-vant"> 

  <div class="card2">
    <div class="animate__animated animate__pulse animate__infinite"><h1 class="bi bi-volume-mute-fill"></h1></div>
    <div class="card-body">
      <h5 class="card-title">Isolamento Acústico</h5>
      <p class="card-text">Blocos de gesso e Drywall fornecem um melhor bloqueio das ondas sonoras para os ambientes.<br></p>
    </div>
    <div class="card-footer"> 
      <small class="text-muted">Esperimente no seu projeto.</small>
    </div>
  </div>

  

  <div class="card2">
    <div class="animate__animated animate__pulse animate__infinite"><h1 class="bi bi-clock-fill"  ></h1></div>
    <div class="card-body" >
      <h5 class="card-title">Agilidade no serviço</h5>
      <p class="card-text">Devido as caracteristicas e formas de aplicação do gesso, os projetos são feitos de forma mais rápida.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Esperiemente no seu projeto.</small>
    </div>
  </div>
  
  <div class="card2">
    <div class="animate__animated animate__pulse animate__infinite"><h1 class="bi bi-thermometer-sun" ></h1></div>
    <div class="card-body">
      <h5 class="card-title">Isolamento térmico</h5>
      <p class="card-text">O gesso permite uma melhor conservação de temperatura sendo ela quente ou fria.<br></p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Esperimente no seu projeto.</small>
    </div>
  </div>
</section>

</div>
</div>
<!-- dvi do shadow p-3-->

<!--
 <div  id="Titulos">
   <p id="images"></p><h1 class="bi bi-images"> Galeria:</h1>
 </div>
  <hr>
  -->
<!--
<div id="bloco2">

<div class="shadow p-3 mb-5 bg-body rounded" style="display: inline-flex;">
<div id="carouselExampleIndicators" class="carousel carousel-dark slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 4"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 5"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="6" aria-label="Slide 6"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="7" aria-label="Slide 7"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="8" aria-label="Slide 8"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="9" aria-label="Slide 9"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="10" aria-label="Slide 10"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="11" aria-label="Slide 11"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="12" aria-label="Slide 12"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="13" aria-label="Slide 13"></button>
  </div>
  <div class="carousel-inner" style="display:flex;">
    <div class="carousel-item active" style="max-width:500px; width:auto; height: 400px;">
      <img src="IMAGENS/gesso1.webp" class="d-block w-100" alt="...">
    </div>
      <div class="carousel-item" style="max-width:500px; width:auto; height: 400px;">
      <img src="IMAGENS/gesso2.webp" class="d-block w-100" alt="..." >
    </div>
      <div class="carousel-item" style="max-width:500px; width:auto; height: 400px;">
      <img src="IMAGENS/gesso4.webp" class="d-block w-100" alt="...">
    </div>
      <div class="carousel-item" style="max-width:500px; width:auto; height: 400px;">
      <img src="IMAGENS/gesso17.webp" class="d-block w-100" alt="...">
    </div>
      <div class="carousel-item" style="max-width:500px; width:auto; height: 400px;">
      <img src="IMAGENS/gesso6.webp" class="d-block w-100" alt="...">
    </div>
      <div class="carousel-item" style="max-width:500px; width:auto; height: 400px;">
      <img src="IMAGENS/gesso8.webp" class="d-block w-100" alt="...">
    </div>
      <div class="carousel-item" style="max-width:500px; width:auto; height: 400px;">
      <img src="IMAGENS/gesso12.webp" class="d-block w-100" alt="...">
    </div>
      <div class="carousel-item" style="max-width:500px; width:auto; height: 400px;">
      <img src="IMAGENS/gesso13.webp" class="d-block w-100" alt="...">
    </div>
      <div class="carousel-item" style="max-width:500px; width:auto; height: 400px;">
      <img src="IMAGENS/gesso15.webp" class="d-block w-100" alt="...">
    </div>
      <div class="carousel-item" style="max-width:500px; width:auto; height: 400px;">
      <img src="IMAGENS/gesso19.webp" class="d-block w-100" alt="...">
    </div>
      <div class="carousel-item" style="max-width:500px; width:auto; height: 400px;">
      <img src="IMAGENS/gesso20.webp" class="d-block w-100" alt="...">
    </div>
      <div class="carousel-item" style="max-width:500px; width:auto; height: 400px;">
      <img src="IMAGENS/gesso14.webp" class="d-block w-100" alt="...">
    </div>
      <div class="carousel-item" style="max-width:500px; width:auto; height: 400px;">
      <img src="IMAGENS/gesso16.webp" class="d-block w-100" alt="...">
    </div>
      <div class="carousel-item" style="max-width:500px; width:auto; height: 400px;">
      <img src="IMAGENS/gesso22.webp" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Anterior</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Próximo</span>
  </button>
</div>
</div>
-->
</div>

<div class="Titulos">
   <span id="calculator"> <p><h1 class="bi bi-calculator-fill"> Orçamentos:</h1></p></span>
</div>
<hr>

<!-- Inicio do bloco de orçamento e opção de contato via whatsapp-->

<div class="shadow" id="bloco1">

<div class="Atendimento">
    <h2><p class="display-4" >Atendemos em todo DF e entorno!</p></h2>
    <h4><p class="fs-3"> Solicite um orçamento através do nosso whatsapp clicando no botão abaixo e tire todas suas dúvidas.</p></h4>
     <a href="https://api.whatsapp.com/send?phone=5561984288454&text=Faça uma pergunta sobre projetos em gesso e temtaremos responder o mais breve possível"><img src="IMAGENS/botao-whatsapp.png" width="337" height="101" class="animate__animated animate__pulse animate__infinite"></a>
</div>
  </div>
  <br>

  <div class="container" id="mapa">
    <div class="shadow" id="Fale-conosco">
      <h3>Fale Conosco</h3>
      <form action="SendMail.php" method="post">
        <input class="form-control" type="text" name="nome" aria-label="Nome" placeholder="Digite nome completo:" aria-describedby="input-nome" required>
       <input type="email" class="form-control" name="email" placeholder="Digite o seu email:" required>
       <textarea type="text" class="form-control" name="mensagem" placeholder="Digite a mensagem:" rows="10" cols="90" required></textarea>
       <button class="btn btn-success"type="submit">ENVIAR</button>
      </form>
  </div>
    <div class="shadow" id="local">
      <h3>Estamos Aqui</h3>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3840.1905762989377!2d-48.28283488572312!3d-15.741054425837389!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x935bb8f5390acde9%3A0x155c03c3add6224d!2sGesso%20AL!5e0!3m2!1spt-BR!2sbr!4v1651601707752!5m2!1spt-BR!2sbr"
       width="750" height="335" style="border:1; max-width: 100%;border-radius:30px" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </div>

<!-- Mensagem de confirmação do envio do email -->
<?php

 $email = (isset($_GET['email']));

if($email == 2)
{
  echo'<div class="alert alert-primary" role="alert">
  Seu email foi enviado com sucesso.
</div>';
}elseif($email == 1)
 {
  echo'<div class="alert alert-danger" role="alert">
  Seu email NÃO foi enviado.
</div>';
}
 ?> 
 
  <div class="Titulos">
    <span id="red-social"> <p><h1 class="bi bi-instagram">Rede social:</h1></p></span>
  </div>
  <hr>
  
  <section>
    <div class="banner">
      <img src="./IMAGENS/banner-instagram.png" id="banner-instagram">
    </div>
  </section>
  
<!--<section class="shadow" id="TimeLine">

  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
      
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="IMAGENS/Nin-Iniciado.webp" class="img-carrousel" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>First slide label</h5>
          <p>Some representative placeholder content for the first slide.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="IMAGENS/Nin-Estruturado.webp" class="img-carrousel" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Second slide label</h5>
          <p>Some representative placeholder content for the second slide.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="IMAGENS/Nin-Pintado.webp" class="img-carrousel" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Second slide label</h5>
          <p>Some representative placeholder content for the second slide.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="IMAGENS/Nin-Finalizado.webp" class="img-carrousel" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Third slide label</h5>
          <p>Some representative placeholder content for the third slide.</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  
</section> -->


<script type="module" src="script.js"></script>

</body>


<section id="whatsapp"></section>

<!-- seta voltar ao topo -->
<h1><a href="#Home" class="bi bi-arrow-up-square-fill" style="margin-left: 90%;" alt="Voltar ao topo"></a></h1>

<!-- inicio do rodapé -->
<div class="row justify-content-center" id="Rodape">
   <div  class="col-xm-8 col-md-6 col-lg-3" id="Rodadiv">
   <h4 class="bi bi-telephone-forward-fill"> Contato:</h4>
   <hr>
   <p>61 98428-8454 <img src="IMAGENS/WhatsApp_Icon[1].fw.png" width="20" height="20"></p>
   <p>Quadra 69 conjunto "A" </p>
   <p>lote 05 setor 09</p>
   <p>Águas Lindas - GO</p>
   </div>

   <div class="col-xm-8 col-md-6  col-lg-3" id="Rodadiv">
   <h4 class="bi bi-calendar3"> Atendimento:</h4> 
   <hr>
   <p>Segunda à Sábado</p>
   <p><i class="bi bi-clock-history"> Das 08:00hs</i></p> 
   <p>  às 18:00hs</p>
   </div>
   
   <div class="col-xm-8 col-md-6  col-lg-3" id="Rodadiv">
   <h4 class="bi bi-share"> Compartilhe:</h4> 
   <hr>
   <!--Botão função FACEBOOCK e GOOGLE ADS-->
   <a href="https://g.page/r/CU0i1q3DA1wVEBM/review"> <h1 class="zoom"><i class="bi bi-google" style="color: #FFF;"> </i></h1></a>
   <a href="https://www.instagram.com/gesso_al/"><h1 class="zoom"><i class="bi bi-instagram"  style="color: #FFF;"></i></h1></a>
   <p><h1 class="zoom"><div class="fb-like" data-href="https://www.gessoal.com" data-width="50px" data-layout="box_count" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div></h1></p> 
   </div>
   
   <div class="col-xm-8 col-md-6  col-lg-3" id="Rodadiv">
   <h4 class="bi bi-credit-card"> Pagamento:</h4> 
  <hr>
   <img src="IMAGENS/bandeiras.png" class="zoom" style="border-radius:20px;" width="200px" height="100px">
   <p><i>*Taxas da máquina inclusas.</i></p>
   </div>       
</div>
<!-- pós rodape com os creditos do desenvolvedor-->
<div class="DevCredits">
  2021 GessoAL Todos os direitos reservados. Desenvolvido por : <a href="https://www.linkedin.com/in/agilson-alves-4648a2112/?challengeId=AQHXuob9NsX2gAAAAX-U6EOHb_gjP6FCwGaebhDbAHrWb2SMVo0Ed9vXg97-shkueIPYDSwSlLq4ONJ1YZ4XcOfePWIQYrXvTQ&submissionId=c6b4e500-e5fd-dc16-6ea0-094284516a3f" class="link-light">
    <i class="bi bi-linkedin"> A.Alves</i></a>
</div>
</div>

</html>
