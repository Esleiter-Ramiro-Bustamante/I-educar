<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
  <head>
    <title>Intranet</title>
   
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="-1" />

    <link rel=stylesheet type='text/css' href='styles/reset.css?rand=3' />
    <!-- <link rel=stylesheet type='text/css' href='styles/portabilis.css?rand=3' /> -->
    <link rel=stylesheet type='text/css' href='styles/min-portabilis.css?rand=3' /> 
    <link rel=stylesheet type='text/css' href='styles/login.css?rand=4' />

  <script type='text/javascript' src='//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js'></script>

  <script type="text/javascript">

    var $j = jQuery.noConflict();

    function currentSO() {
      var so = undefined;

      if (navigator && navigator.platform) {
        var platform = navigator.platform.toLowerCase();

        if (platform.indexOf('win') > -1)
          so = 'windows';
        else if (platform.indexOf('linux') > -1)
          so = 'linux';
        else if (platform.indexOf('mac') > -1)
          so = 'macOS';
        else if (platform.indexOf('x11') > -1)
          so = 'unix';
        else
          so = platform;
      }

      return so;
    }

    function loginpage_onload() {
      var domainName = window.location.hostname;

      if (domainName.indexOf('treinamento') < 0 && domainName.indexOf('demonstracao') < 0)
        $j('.only-for-clients').show();

      $j('.fade-in').fadeIn('slow');

      $j('#login').focus();

      // used for support links
      if (currentSO() == 'windows')
        $j('.visible-for-windows-so').show();
      else
        $j('.visible-for-non-windows-so').show();
    }
  </script>

  </head>
  <body onload="loginpage_onload();" class="hidden fade-in">
    <div id="flash-container">

      <!--[if lt IE 7]>
      <p style="min-height: 32px;" class="flash update-browser"><strong>Seu navegador est&aacute desatualizado.</strong> Para melhor navega&ccedil;&atildeo  no sistema, por favor, atualize seu navegador.<a href="http://br.mozdev.org/download/" target="_blank"><img style="margin-top:4px;" src="http://www.mozilla.org/contribute/buttons/110x32bubble_r_pt.png" alt="Firefox" width="110" height="32" style="border-style:none;" title="Mozilla Firefox" /></a></p>
      <![endif]-->

      <!-- #&ERROLOGIN&# -->
    </div>

    <section>
        <div class="container">


            <div class="form_content">
                <h2>¿QUE ES I-EDUCAR? </h2>
                <br>
                <p align="justify">I-EDUCAR ES UN SISTEMA DE CODIGO ABIERTO, CON LICENCIA DE DISTRIBUCION LIBRE, ES DECIR, ES GRATUITO PARA QUIEN LO QUIERA IMPLEMENTAR.</p>
                    <br>
                <a href="http://parallax.local/view.php">MAS INFORMACION</a>
            </div>

            <div class="login_form">
                <center>
                    <h1>
                        INICIO DE SESION
                    </h1>
                </center>
                  <br>
                 <form action="" method="post">
                  
                    <input type="text" name="login" id="login" required="" placeholder="MATRICULA">
                    
                    
                    <input type="password" name="senha" id="senha" required="" placeholder="PASSWORD">
                    
                    <input type="submit" class="submit"  value="Entrar">
                </form>
                <br>

                <center>
                <p class="forget-password"><a class="light small" href="/module/Usuario/RedefinirSenha">¿OLVIDASTE TU CONTRASEÑA?</a></p>
                    
                </center>

            </div>
        </div>
    </section>

     

      <div class="clear"></div>

    </div> <!-- end corpo -->

    <div id="rodape" class="texto-normal">
      <p>
        <!--Portabilis Tecnologia-->
      </p>
    </div> <!-- end rodape -->

  </body>
</html>