<!DOCTYPE html>
<html lang="it">

<?php require("inc_header.php"); ?>

<body>
    <!-- Navigation -->
    <?php 
        $active_menu = 'Inserimento';
        require("inc_navigation.php")
    ?>

  <!-- Page Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h1 class="mt-5">Inserimento nuovo CEDAP</h1>
      </div>
    </div>
    
    <!-- Tabbed navigation -->
    <?php 
        $active_tab = 'Operatori';
        require("inc_tabbednav.php")
    ?>

    <form class="row" id="gestioneTravaglioForm">
      <div class="col-md-4 col-sm-12">
        <div class="form-row">
          <div class="col-lg-12">
            <button type="button"id="operatoriDiv1Button" data-toggle="collapse" href="#operatoriDiv1" role="button" aria-expanded="false" aria-controls="operatoriDiv1" class="text-left btn btn-light btn-lg btn-block">
              <span class="pr-2" id="operatoriDiv1Toggle">-</span> Medici</button>
          </div>
        </div>

        <div class="form-row collapse show" id="operatoriDiv1">

          <div class="w-100 mt-2"></div>

          <div class="form-group col-auto pr-3">
            <label class="sr-only" for="ginecologo1">Ginecologo 1</label>
            <select class="form-control" id="ginecologo1">
              <option selected value="0">Seleziona Medico</option>
              <option value="1">?????????????</option>
            </select>
          </div>

          <div class="form-group col-auto pr-3">
            <label class="sr-only" for="ginecologo2">Ginecologo 1</label>
            <select class="form-control" id="ginecologo2">
              <option selected value="0">Seleziona Medico</option>
              <option value="1">?????????????</option>
            </select>
          </div>

          <div class="form-group col-auto pr-3">
            <label class="sr-only" for="neonatologo1">Neonatologo 1</label>
            <select class="form-control" id="neonatologo1">
              <option selected value="0">Seleziona neonatologo</option>
              <option value="1">?????????????</option>
            </select>
          </div>

          <div class="form-group col-auto pr-3">
            <label class="sr-only" for="neonatologo2">Neonatologo 1</label>
            <select class="form-control" id="neonatologo2">
              <option selected value="0">Seleziona neonatologo</option>
              <option value="1">?????????????</option>
            </select>
          </div>

        </div>
      </div>

      <div class="col-md-4 col-sm-12">
        <div class="form-row">
          <div class="col-lg-12">
            <button type="button"id="operatoriDiv2Button" data-toggle="collapse" href="#operatoriDiv2" role="button" aria-expanded="false" aria-controls="operatoriDiv2" class="text-left btn btn-light btn-lg btn-block">
              <span class="pr-2" id="operatoriDiv2Toggle">-</span> Ostetrici</button>
          </div>
        </div>

        <div class="form-row collapse show" id="operatoriDiv2">

          <div class="w-100 mt-2"></div>

          <div class="form-group col-auto pr-3">
            <label class="sr-only" for="ostetrica1">Ostetrica 1</label>
            <select class="form-control" id="ostetrica1">
              <option selected value="0">Seleziona Ostetrica</option>
              <option value="1">?????????????</option>
            </select>
          </div>

          <div class="form-group col-auto pr-3">
            <label class="sr-only" for="ostetrica2">Ostetrica 2</label>
            <select class="form-control" id="ostetrica2">
              <option selected value="0">Seleziona Ostetrica</option>
              <option value="1">?????????????</option>
            </select>
          </div>

        </div>

      </div>

      <div class="col-md-4 col-sm-12">
        <div class="form-row">
          <div class="col-lg-12">
            <button type="button"id="operatoriDiv3Button" data-toggle="collapse" href="#operatoriDiv3" role="button" aria-expanded="false" aria-controls="operatoriDiv3" class="text-left btn btn-light btn-lg btn-block">
              <span class="pr-2" id="operatoriDiv3Toggle">-</span> Anestesisti</button>
          </div>
        </div>

        <div class="form-row collapse show" id="operatoriDiv3">

          <div class="w-100 mt-2"></div>

          <div class="form-group col-auto pr-3">
            <label class="sr-only" for="anestesista1">Anestesista 1</label>
            <select class="form-control" id="anestesista1">
              <option selected value="0">Seleziona Anestesista</option>
              <option value="1">?????????????</option>
            </select>
          </div>

          <div class="form-group col-auto pr-3">
            <label class="sr-only" for="anestesista2">Anestesista 2</label>
            <select class="form-control" id="anestesista2">
              <option selected value="0">Seleziona Anestesista</option>
              <option value="1">?????????????</option>
            </select>
          </div>

        </div>      
      </div>


      <div class="col-12">
        <div class="row mt-3 pb-5">
          <div class="col-lg-4 text-right">
            <a href="complicanze.php" id="backBtn" class="btn btn-outline-primary">Indietro</a>
          </div>
          <div class="col-lg-4 text-center">
            <a href="#" id="salvaBtn" class="btn btn-outline-primary">Salva</a>
          </div>
          <div class="col-lg-4 text-left">
            <a href="padre.php" id="avantiBtn" class="btn btn-primary">Salva e continua</a>
          </div>
        </div>
      </div>
      


    </form>
  </div>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="scripts.js"></script>

</body>

</html>
