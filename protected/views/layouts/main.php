<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
<style type="text/css">
	body {
    display: flex;
    min-height: 100vh;
    flex-direction: column;
  }

  main {
    flex: 1 0 auto;
  }
</style>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="en">
	  <!-- Compiled and minified JavaScript -->
	  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.js"></script>
	  <script type="text/javascript" src="https://code.jquery.com/ui/jquery-ui-git.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/js/materialize.min.js"></script>
	  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">        
	  <script src="//www.parsecdn.com/js/parse-1.6.0.min.js"></script>
	  <script src="/js/main.js"></script>	
	 <!-- Compiled and minified CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/css/materialize.min.css">
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>
<head>
  <nav>
    <div class="nav-wrapper teal lighten-2">
      <a href="/" class="brand-logo">Logo</a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="/site/listar">Lista de Diputados</a></li>

      </ul>
      <ul class="side-nav" id="mobile-demo">
        <li><a href="/site/listar">Lista de Diputados</a></li>

      </ul>
    </div>
  </nav>
</head>
<main>
	<?php echo $content; ?>
</main>
<footer class="page-footer teal lighten-2">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Footer Content</h5>
                <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Menu</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="/site/listar">Lista de Diputados</a></li>
                  
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2014 Bean creations
            <a class="grey-text text-lighten-4 right" href="http://sitl.diputados.gob.mx/LXII_leg/info_diputados.php">Fuente de Información : diputados.gob.mx</a>
            </div>
          </div>
        </footer>
</body>
</html>
