<!doctype html>
<html lang="es">

  <head>
    <title>Integrador Front End</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilo.css">

  </head>

  <body>
    <header class="bg-img mb-3" style="background-image: url(images/ba1.jpg); height: 100vh; background-size:cover;">
      <div class="mask d-flex flex-column justify-content-between text-white"
          style="background-color: rgba(0, 0, 0, 0.6);height: 100vh;"> 
      
        <div class="container-fluid">  
          <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
          <a class="navbar-brand ps-5" href="#"><img src="./images/codoacodo.png" alt="" width="100">Conf Bs As</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse  me-auto" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto mt-2 mt-lg-0 pe-5">
              <a class="nav-link active" aria-current="page" href="#">La conferencia</a>
              <a class="nav-link" href="#oradores">Los oradores</a>
              <a class="nav-link" href="#lugar">El lugar y la fecha</a>
              <a class="nav-link" href="#conviertete">Conviértete en orador</a>
              <a class="nav-link" text-success href="comprar-tickets.html">Comprar tickets</a>
            </div>
          </div>
        </nav>
      </div>
        <!-- Transparent card -->
        <div class="card text-end bg-transparent align-self-center align-self-sm-end me-5 mb-5 w-50">
          <div class="card-body">
              <h3 class="card-title">Conf Bs As</h3>
              <p class="card-text">
                  Bs As llega por primera vez a Argentina. Un evento para compartir con
                  nuestra comunidad el conocimiento y experiencia de los expertos que
                  están creando el futuro de Internet. Ven a conocer a miembros del
                  evento, a otros estudiantes de Codo a Codo y los oradores de primer
                  nivel que tenemos para ti. ¡Te esperamos!</p>
              <a href="#conviertete" class="btn btn-outline-light mb-2 me-2" >Quiero ser orador</a>
              <a href="comprar-tickets.html" class="btn btn-success mb-2 me-2">Comprar tickets</a>
          </div>
      </div>
    </header>

    <main id="oradores" class="container mb-3">
      <p class="text-center">CONOCE A LOS</p>
      <h2 class="text-center">ORADORES</h2>
      <div class="row row-cols-1 row-cols-md-3 g-4">
         <!-- <div class="card-deck"> -->
            <div class="card border-0">
              <img src="images/steve.jpg" class="card-img-top" alt="Steve Jobs">
              <div class="card-body">
                <span class="badge bg-warning text-dark">JavaScript</span>
                <span class="badge bg-primary">React</span>
                <h5 class="card-title">Steve Jobs</h5>
                <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo voluptatibus,
                  consectetur et earum animi reprehenderit quos nobis enim, iusto tempore totam eveniet in, quia eos.
                  Quaerat aspernatur deleniti praesentium facere.</p>
              </div>
            </div>  
            <div class="card border-0">
              <img src="images/bill.jpg" class="card-img-top" alt="Bill Gates">
              <div class="card-body">
                <span class="badge bg-warning text-dark">JavaScript</span>
                <span class="badge bg-primary">React</span>
                <h5 class="card-title">Bill Gates</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati omnis mollitia ea,
                  aperiam maxime commodi beatae nobis facilis ipsum, quas temporibus non eveniet, aliquam fugiat incidunt
                  odio quibusdam voluptatum laborum.</p>
              </div>
            </div>
            <div class="card border-0">
              <img src="images/ada.jpeg" class="card-img-top" alt="Ada Lovelace">
              <div class="card-body">
                <span class="badge bg-secondary">Negocios</span>
                <span class="badge bg-danger">Startups</span>
                <h5 class="card-title">Ada Lovelace</h5>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita repellat corporis
                  dignissimos? Aperiam, repudiandae. Dolore accusantium tempore earum quae nemo, labore in impedit ex error
                  id necessitatibus? Autem, voluptatibus adipisci!</p>
              </div>
            </div>
        <!-- </div> -->
      </div>
    </main>

    <section id="lugar">
      <div class="card mb-3 bg-secondary">
        <div class="row g-0">
          <div class="col-md-6 border border-white">
            <img src="images/honolulu.jpg" alt="honolulu" class="img-fluid w-100">
          </div>
          <div class="col-md-6 border border-white">
            <div class="card-body text-white mb-3">
              <h3 class="card-title">Bs As Octubre</h3>
              <p class="card-text"> Buenos Aires es la provincia y localidad mas grande del estado de Argentina. En Estados Unidos,
                Honolulu
                es las mas sureña entre las principales ciudades estadounidenses. Aunque el nombre Honolulu se
                refiere
                al area urbana en la costa sureste de la isla Oahu, la ciudad y el condado de Honolulu han formado
                una
                ciudad condado consolidada que cubre toda la ciudad (aproximada 600km2 de superficie)</p>
              <button type="button" class="btn btn-outline-light me-2">Conoce más</button>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="container mb-3" id="conviertete">
      <p class="text-center">CONVIÉRTETE EN UN</p>
      <h2 class="text-center">ORADOR</h2>
      <p class="text-center">Anótate como ordador para dar una <abbr title="Son charlas de 5 minutos con 20 slides que avanzan automáticamente">charla ignite</abbr>. Cuéntanos de que quieres hablar!</p>

      <form action="agregarOrador.php" method="POST">
        <div class="row justify-content-md-center">
          <div class="col-md-4  ">
            <input class="form-control" type="text" name="nombre" id="nombre" placeholder="Nombre" required>
          </div>
          <div class="col-md-4">
            <input class="form-control" type="text" name="apellido" id="apellido" placeholder="Apellido" required>
          </div>
        </div>
        <br>
        <div class="row justify-content-md-center">
          <div class="col-md-8  ">
            <input class="form-control" type="email" name="email" id="email" placeholder="Email" required>
          </div>
        </div>
        <br>
        <div class="row row justify-content-md-center">
          <div class="col-md-8">
            <textarea class="form-control" name="temario" id="textArea" rows="3" placeholder="Sóbre que quieres hablar?"></textarea>
            <p class="text-start text-secondary">Recuerda incluir un titulo para tu charla</p>
          </div>
        </div>
        <br>
        <div class="row row justify-content-md-center">
          <div class="col-md-8">
            <button type="submit" class="btn btn-success btn-lg btn-block w-100">Enviar</button>
          </div>
        </div>
      </form>

    </section>

    <footer class="menu-footer-bg">
      <div class="container w-75">
        <nav class="nav justify-content-center nav-pills flex-column flex-lg-row flex-nowrap">
              <a class="flex-lg-fill text-sm-center nav-link text-white" href="#">Preguntas frecuentes</a>
              <a class="flex-lg-fill text-sm-center nav-link text-white" href="#">Contactanos</a>
              <a class="flex-lg-fill text-sm-center nav-link text-white" href="#">Prensa</a>
              <a class="flex-lg-fill text-sm-center nav-link text-white" href="#">Conferencia</a>
              <a class="flex-lg-fill text-sm-center nav-link text-white" href="#">Términos y condiciones</a>
              <a class="flex-lg-fill text-sm-center nav-link text-white" href="#">Privacidad</a>
              <a class="flex-lg-fill text-sm-center nav-link text-white" href="listaInscripcion.php">Uso Interno</a>
        </nav>
     </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>  
    <script src="js/scripts.js"></script>
  </body>

</html>