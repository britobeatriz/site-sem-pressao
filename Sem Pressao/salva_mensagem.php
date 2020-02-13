<?php
    include_once('conexao.php');

    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $result_msg_contato = "INSERT INTO mensagens_contatos(nome, email, assunto, mensagem, created) VALUES ('$name', '$email', '$subject', '$message', NOW())";
    $resultado_msg_contato = mysqli_query($conn, $result_msg_contato);
?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8">
  <title>Sem Pressão</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,600,700,700i|Montserrat:300,400,500,600,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">



</head>

<body>
  <!--==========================
  Header
  ============================-->
  <header id="header">

    <div id="topbar">
      <div class="container">
        <div class="social-links">
          <a target="_blank" href="https://twitter.com/PressaoSem" class="twitter"><i class="fa fa-twitter"></i></a>
          <a target="_blank" href="https://www.facebook.com/Sem-Press%C3%A3o-101121591313827/" class="facebook"><i class="fa fa-facebook"></i></a>
          <a target="_blank" href="https://www.instagram.com/_sem_pressao_/" class="instagram"><i class="fa fa-instagram"></i></a>
          <a target="_blank" href="https://www.linkedin.com/in/sem-press%C3%A3o-818332199/" class="linkedin"><i class="fa fa-linkedin"></i></a>
        </div>
      </div>
    </div>

    <div class="container">

      <div class="logo float-left">
        <!-- Uncomment below if you prefer to use an image logo --><!----->
        <h1 class="text-light"><a href="#intro" class="scrollto"><span>Sem Pressão</span></a></h1>
        <!-- <a href="#header" class="scrollto"><img src="img/logo.png" alt="" class="img-fluid"></a> -->
      </div>
      
     <!--==========================
     MENU NAVEGAÇÃO
     =============================-->

      <nav class="main-nav float-right d-none d-lg-block">
        <ul>
          <li class="active"><a href="#intro">Home</a></li>
          <li><a href="#about">Sobre</a></li>
          <li><a href="#services" >Serviços</a></li>
          <li><a href="#team">Equipe</a></li>
          <li><a href="#footer">Contato</a></li>
        </ul>
      </nav>                       
      
      <!--========================
        FIM DO MENU DE NAVEGAÇÃO
      ==========================-->

    </div>
  </header>
   
  <!--======================
    FIM DE HEADER
  ========================-->

  <!--==========================
    INTRO SECTION
  ============================-->
  <section id="intro" class="clearfix">
    <div class="container d-flex h-100">
      <div class="row justify-content-center align-self-center">
        <div class="col-md-6 intro-info order-md-first order-last">
          <h2>Sua saúde importa!</h2>
          <div>
            <a href="#about" class="btn-get-started scrollto">Saiba mais</a>
          </div>
        </div>
      </div>

    </div>
  </section>

  <!--==================
  FIM DA SECTION
  =====================-->

  <main id="main">

    <!--==========================
      SOBRE NÓS
    ============================-->          

    <section id="about">

      <div class="container">
        <div class="row">

          <div class="col-lg-5 col-md-6">
            <div class="about-img">
              <img src="img/about-img.jpg" alt="">
            </div>
          </div>

          <div class="col-lg-7 col-md-6">
            <div class="about-content">
              <h2>Sobre nós</h2>
              <p>A Sem Pressão trata de uma equipe multidisciplinar, com o objetivo <br >minimizar os riscos que comprometem o bem estar que resultam <br>
              em doenças ocupacionais e na baixa produtividade dos colaboradores.<br>
              Utilizando recursos alternativos e de baixo custo, como Quick Massage,<br> Mindfulness e Atendimento Psicológico. Entre contato conosco e conheça<br> nossos serviços!</p>
            </div>
          </div>
        </div>
      </div>

    </section>                        

    <!--==================
    FIM DE SOBRE NÓS
   =====================-->


    <!--==========================
      SECTION DE SERVIÇOS
    ============================-->
    <section id="services" class="section-bg">
      <div class="container">

        <header class="section-header">
          <h3>Serviços</h3>
        </header>

        <div class="row">

          <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon" style="background: #fff0da;"><i class="#" style="color:#459641;"></i></div>
              <h4 class="title"><a href="">Mindfulness</a></h4>
              <p class="description">Mindfulness é um conjunto de técnicas
                práticas, possíveis e cientificamente
                comprovadas que te ajudam a focar no
                momento presente, sem deixar o passado ou
                o futuro te afetarem, tornando sua mente
                mais desperta e saudável, sendo sua aliada.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon" style="background: #fff0da;"><i class="#" style="color:#459641;"></i></div>
              <h4 class="title"><a href="">Quick Massage</a></h4>
              <p class="description">A Quick Massage é uma combinação das
                massagens orientais Shiatsu e Anmá, e sua
                introdução às empresas foi feita por um
                terapeuta que trabalhava para a Apple, chamado
                David Palmer. Ele precisava lidar com o crescente
                número de funcionários afastados por questões
                de saúde. Os resultados foram tão positivos que a
                técnica se espalhou por outras empresas.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon" style="background:#fff0da;"><i class="#" style="color:#459641;"></i></div>
              <h4 class="title"><a href="">Atendimento Psicologico</a></h4>
              <p class="description">O Atendimento Psicológico tem a finalidade de
                ajudar e trabalhar em todas as questões emocionais,
                comportamentais, relacionamento, carreira, profissão,
                família, casamento, timidez, ansiedades, depressão,
                questões psiquiátricas ou existenciais.</p>
            </div>
          </div>
         

        </div>

      </div>
    </section>

    <!--====================
    FIM DE SECTION SERVIÇOS
    ======================-->

    <!--==========================
      SECTION TEAM
    ============================-->
    <section id="team" class="section-bg">
      <div class="container">
        <div class="section-header">
          <h3>Equipe</h3>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6 wow fadeInUp">
            <div class="member">
              <img src="img/team-1.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Deise Rodrigues</h4>
                  <span>Chief Executive Officer</span>
                  <div class="social">
                    <a href="https://www.linkedin.com/in/deise-rodrigues-bbba16179/"><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="member">
              <img src="img/team-2.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Déborah Rodrigues</h4>
                  <span>CO-Chief Executive Officer</span>
                  <div class="social">
                    <a href="https://www.linkedin.com/in/d%C3%A9borah-rodrigues-598792a9"><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
            <div class="member">
              <img src="img/team-3.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Aline Fonseca</h4>
                  <span>Socia Colaboradora</span>
                  <div class="social">
                    <a href="https://www.linkedin.com/in/aline-fonseca-a101b419a"><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="member">
              <img src="img/team-4.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Hilha Maia</h4>
                  <span>Socia Colaboradora</span>
                  <div class="social">
                    <a href="https://www.linkedin.com/in/h%C3%ADlia-maia-7480a019a"><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section>

    <!--=====================
      FIM DE SECTION TEAM
    ========================-->

  
  <!--==========================
    Footer
  ============================-->
  <footer id="footer" class="section-bg">
    <div class="footer-top">
      <div class="container">

        <div class="row">

          <div class="col-lg-6">

            <div class="row">


                <div class="col-sm-6">
                  <div class="footer-links">
                    <h4>Links</h4>
                    <ul>
                      <li><a href="#intro">Home</a></li>
                      <li><a href="#about">Sobre nós</a></li>
                      <li><a href="#services">Serviços</a></li>
                    </ul>
                  </div>

                  <div class="footer-links">
                    <h4>Entre em contato</h4>
                      <strong>Telefone:</strong>(98) 9 8275-9907<br>
                      <strong>Email:</strong>startup.sempressao@gmail.com<br>
                    </p>
                  </div>

                  <div class="social-links">
                    <a target="_blank" href="https://twitter.com/PressaoSem" class="twitter"><i class="fa fa-twitter"></i></a>
                    <a target="_blank" href="https://www.facebook.com/Sem-Press%C3%A3o-101121591313827/" class="facebook"><i class="fa fa-facebook"></i></a>
                    <a target="_blank" href="https://www.instagram.com/_sem_pressao_/" class="instagram"><i class="fa fa-instagram"></i></a>
                    <a target="_blank" href="https://www.linkedin.com/in/sem-press%C3%A3o-818332199/" class="linkedin"><i class="fa fa-linkedin"></i></a>
                  </div>

                </div>

            </div>

          </div>

          <div class="col-lg-6">

            <!---====================
              FORMULARIO DE CONTATO
            =======================-->
            <?php

            ?>
              <div class="form">
              
                  <h4>Entre em Contato</h4>
                  <form action="salva_mensagem.php" method="POST" role="form" class="contactForm">
                    <div class="form-group">
                      <input type="text" name="name" class="form-control" id="name" placeholder="Seu Nome" data-rule="minlen:4" data-msg="Por favor! Digite seu nome!" required/>
                      <div class="validation"></div>
                    </div>
                    <div class="form-group">
                      <input type="email" class="form-control" name="email" id="email" placeholder="Seu Email" data-rule="email" data-msg="Por favor! Digite um email valido!" required/>
                      <div class="validation"></div>
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" name="subject" id="subject" placeholder="Objetivo" data-rule="minlen:4" data-msg="Por favor! Digite seu objetivo!" required/>
                      <div class="validation"></div>
                    </div>
                    <div class="form-group">
                      <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Por favor! Digite sua mensagem!" placeholder="Mensagem"></textarea>
                      <div class="validation"></div>
                    </div>
    
                    <div id="sendmessage">Sua mensagem foi enviada. Obrigado(a)!</div>
                    <div id="errormessage"></div>
    
                    <div class="text-center"><button type="submit" title="Send Message">Enviar</button></div>
                  </form>
                </div>

                <!--=================
                  FIM DE FORMULARIO DE CONTATO
                ====================-->
        </div>

      </div>
    </div>


    
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Sem Pressão</strong>. All Rights Reserved
      </div>
      <div class="credits">
      </div>
    </div>
  </footer>

  <!--===================
  FIM DE FOOTER
  ======================-->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/mobile-nav/mobile-nav.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>
