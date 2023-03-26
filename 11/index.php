<?php include('header.php');?> 
    <main role="main">

      <section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading">UX Design</h1>
          <p class="lead text-muted">Una selección de herramientas de trabajo</p>
        </div>
      </section>

      <div class="album py-5 portada">
        <div class="container">

          <div class="row">

<?php
$ux = array_map('str_getcsv', file('data.csv'));
array_walk($ux, function(&$a) use ($ux) {$a = array_combine($ux[0], $a);});
array_shift($ux);
$all = count($ux);
for($n=0; $n < $all; $n++){
?>


            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <figure class="chica">
                <img class="card-img-top" alt="Card image cap" src="<?php print($ux[$n]["foto"])?>">
                </figure>
                <div class="card-body">
                  <p class="card-text"><em><?php print($ux[$n]["nombre"])?></em> <?php print($ux[$n]["funcion"])?></p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <a type="button" class="btn btn-sm btn-outline-secondary" href="page-<?php print($ux[$n]["id"])?>.php">Ver más</a>
                    </div>
                    <small class="text-muted"><?php print($ux[$n]["estudiante"])?></small>
                  </div>
                </div>
              </div>
            </div>


<?php };?>




          </div>
        </div>
      </div>

    </main>
<?php include('footer.php');?> 
