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
        $active_tab = 'Neonati';
        require("inc_tabbednav.php")
    ?>

    <form id="gestioneTravaglioForm">

      <div class="form-row align-items-center py-3" id="neonatoDiv0">
        <h5 class="mx-auto">Numero neonati</h5>
        <div class="w-100"></div>
        <div class="mx-auto">
          <div class="form-group form-inline">
            <button type="button" class="btn btn-primary btn-sm ml-auto mr-1" id="numNeonatiMinus">-</button>
            <label class="sr-only" for="numNeonati">Numero neonati</label>
            <input type="text" class="form-control text-center col-2" placeholder="1" id="numNeonati" name="numNeonati">
            <button type="button" class="btn btn-primary btn-sm mr-auto ml-1" id="numNeonatiPlus">+</button>
          </div>
        </div>
      </div><!--neonatoDiv0 END-->

      <div class="form-row">
        <div class="col-lg-12">
          <button type="button"id="neonatoDiv1Button" data-toggle="collapse" href="#neonatoDiv1" role="button" aria-expanded="false" aria-controls="neonatoDiv1" class="text-left btn btn-light btn-lg btn-block">
            <span class="pr-2" id="neonatoDiv1Toggle">-</span> Neonato 1</button>
        </div>
      </div>

      <div class="form-row collapse show" id="neonatoDiv1">

        <div class="w-100 mt-2"></div>

        <div class="form-group col-auto">
          <label for="n1Cognome">Cognome</label>
          <input type="text" class="form-control" id="n1Cognome">
        </div>
        <div class="form-group col-auto">
          <label for="n1Nome">Nome</label>
          <input type="text" class="form-control" id="n1Nome">
        </div>

        <div class="col-3">
          <div class="row">
            <div class="form-group d-flex align-items-end col-auto pl-3">
              <label class="sr-only">Nato Vivo &nbsp;</label>
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="n1VivoSi" name="n1Vivo" class="custom-control-input" checked>
                <label class="custom-control-label" for="n1VivoSi">Vivo</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="n1VivoNo" name="n1Vivo" class="custom-control-input">
                <label class="custom-control-label" for="n1VivoNo">Morto</label>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="form-group col-auto pr-3 ">
              <label class="sr-only">Sesso &nbsp;</label>
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="n1SessoM" name="n1Sesso" class="custom-control-input" checked>
                <label class="custom-control-label" for="n1SessoM">Maschio</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="n1SessoF" name="n1Sesso" class="custom-control-input">
                <label class="custom-control-label" for="n1SessoF">Femmina</label>
              </div>
            </div>
          </div>
        </div>

        <div class="w-100"></div>
          
        <div class="form-group col-md-3 col-sm-6">
          <label for="apgar1m">Apgar 1 min</label>
          <input type="text" class="form-control" id="apgar1m">
        </div>

        <div class="form-group col-md-3 col-sm-6">
          <label for="apgar1m">Apgar 5 min</label>
          <input type="text" class="form-control" id="apgar1m">
        </div>

        <div class="form-group d-flex align-items-end col-md-6 col-sm-12">
          <div class="custom-control custom-checkbox custom-control-inline pb-2">
            <input type="checkbox" class="custom-control-input" id="n1Intubato" name="n1Intubato" value="n1Intubato">
            <label class="custom-control-label" for="n1Intubato">Intubato</label>
          </div>
          <div class="custom-control custom-checkbox custom-control-inline pb-2">
            <input type="checkbox" class="custom-control-input" id="n1Trasferito" name="n1Trasferito" value="n1Trasferito">
            <label class="custom-control-label" for="n1Trasferito">Trasferito TIN</label>
          </div>
        </div>
        
        <div class="w-100"></div>
        
        
        <h5>Arteria ombelicale</h5>

        <div class="w-100"></div>

        <div class="form-group col-auto">
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">PH</span>
            </div>
            <input type="text" class="form-control col-3" id="n1ArteriaOmbPH" name="n1ArteriaOmbPH">
          </div>
        </div>
        <div class="form-group col-auto">
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">ABE</span>
            </div>
            <input type="text" class="form-control col-3" id="n1ArteriaOmbABE" name="n1ArteriaOmbABE">
          </div>
        </div>
        <div class="form-group col-auto">
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">Lac</span>
            </div>
            <input type="text" class="form-control col-3" id="n1ArteriaOmbLAC" name="n1ArteriaOmbLAC">
          </div>
        </div>
        <!--neonato1Arteria END-->

        <div class="w-100"></div>

        <h5>Vena ombelicale</h5>

        <div class="w-100"></div>

        <div class="form-group col-auto">
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">PH</span>
            </div>
            <input type="text" class="form-control col-3" id="n1VenaOmbPH" name="n1VenaOmbPH">
          </div>
        </div>

        <div class="form-group col-auto">
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">ABE</span>
            </div>
            <input type="text" class="form-control col-3" id="n1VenaOmbABE" name="n1VenaOmbABE">
          </div>
        </div>

        <div class="form-group col-auto">
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">Lac</span>
            </div>
            <input type="text" class="form-control col-3" id="n1VenaOmbLac" name="n1VenaOmbLac">
          </div>
        </div>
        <!--neonato1Vena END-->

        <div class="w-100"></div>
      

        <h5>Matema</h5>

        <div class="w-100"></div>

        <div class="form-group col-auto pr-3">
          <label class="sr-only" for="inputMatema">Matema</label>
          <select class="form-control" id="inputMatema">
            <option selected value="0">Seleziona Matema</option>
            <option value="1">?????????????</option>
          </select>
        </div>

        <div class="w-100"></div>

        <div class="form-group col-auto">
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">PH</span>
            </div>
            <input type="text" class="form-control col-3" id="arteriaOmbPH1" name="arteriaOmbPH1">
          </div>
        </div>

        <div class="form-group col-auto">
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">ABE</span>
            </div>
            <input type="text" class="form-control col-3" id="arteriaOmbPH1" name="arteriaOmbPH1">
          </div>
        </div>

        <div class="form-group col-auto">
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">Lac</span>
            </div>
            <input type="text" class="form-control col-3" id="arteriaOmbPH1" name="arteriaOmbPH1">
          </div>
        </div>

        <div class="w-100"></div>
        
        <div class="form-group mx-auto col-md-10 col-sm-12">
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">Note</span>
            </div>
            <input type="text" class="form-control" id="arteriaOmbPH1" name="arteriaOmbPH1">
          </div>
        </div>

      </div><!--neonatoDiv1 END-->
      

      <div class="row mt-3 pb-5">
        <div class="col-lg-4 text-right">
          <a href="parto.php" id="backBtn" class="btn btn-outline-primary">Indietro</a>
        </div>
        <div class="col-lg-4 text-center">
          <a href="#" id="salvaBtn" class="btn btn-outline-primary">Salva</a>
        </div>
        <div class="col-lg-4 text-left">
          <a href="complicanze.php" id="avantiBtn" class="btn btn-primary">Salva e continua</a>
        </div>
      </div>
      


    </form>
  </div>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="scripts.js"></script>
</body>

</html>
