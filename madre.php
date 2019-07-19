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
        $active_tab = 'Madre';
        require("inc_tabbednav.php")
    ?>
    
    <div class="row pt-3">
      <div class="col-lg-12">
        <h2>Inserisci i dati della madre</h2>
      </div>
    </div>
    <form id="datiMadreForm" @submit.prevent="processForm">
      <div class="form-row">
        <div class="form-group col-md-4">
          <label for="inputNome">Nome</label>
          <input type="text" class="form-control" id="inputNome" placeholder="Nome (max 20 caratteri)" v-model="madre.inputNome">
        </div>
        <div class="form-group col-md-4">
          <label for="inputCognome">Cognome</label>
          <input type="text" class="form-control" id="inputCognome" placeholder="Cognome da Nubile (max 30 caratteri)" v-model="madre.inputCognome">
        </div>
        <div class="form-group col-md-4">
          <label for="inputCognomeAcq">Cognome Acquisito</label>
          <input type="text" class="form-control" id="inputCognomeAcq" placeholder="Cognome acquisito (max 20 caratteri)" v-model="madre.inputCognomeAcq">
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-lg-6">
          <label for="inputCodiceFiscale">Codice Fiscale</label>
          <input type="text" class="form-control" id="inputCodiceFiscale" placeholder="Codice Fiscale" v-model="madre.inputCodiceFiscale">
        </div>
        <div class="form-group col-lg-6">
          <label for="inputSDO">SDO</label>
          <input type="text" class="form-control" id="inputSDO" placeholder="numero Scheda di Dimissione Ospedaliera" v-model="madre.inputSDO">
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-2">
          <label for="inputDataNascita">Data di nascita</label>
          <vuejs-datepicker input-class="form-control" name="inputDataNascita" id="inputDataNascita" v-model="madre.inputDataNascita"></vuejs-datepicker>
        </div>

        <div class="form-group col-md-3">
          <label for="inputComuneNascita">comuneNascita</label>
          <select class="form-control" id="inputComuneNascita" v-model="madre.inputComuneNascita">
            <?php include('inc_option_comune.php') ?>
          </select>
        </div>
      <div class="form-group col-md-3">
        <label for="inputCittadinanza">Cittadinanza</label>
        <select class="form-control" id="inputCittadinanza" v-model="madre.inputCittadinanza">
            <?php include('inc_option_nazione.php') ?>
        </select>
      </div>
      </div>

      <?php 
        $left_nav_btn_class = "disabled";
        $left_nav_btn_action = "";
        $left_nav_btn_text = "Indietro";

        $middle_nav_btn_class = "";
        $middle_nav_btn_action = "@click='addRecord()'";
        $middle_nav_btn_text = "Salva Madre";

        $right_nav_btn_class = "";
        $right_nav_btn_action = "@click='addRecordAndCreateParto()'";
        $right_nav_btn_text = "Salva Madre e crea nuovo parto";

        include("inc_nav_btn.php");
      ?>

    </form>

  </div>

  <!-- Bootstrap core JavaScript -->
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../scripts.js"></script>

  <script>
    var app = new Vue({
      el: '#datiMadreForm',
      components: {
        vuejsDatepicker
      },
      methods : {
        processForm: function() {
          // var madreDaInserire = "madre da inserire";
          // console.log({ inputNome: this.madre.inputNome, inputCognome: this.madre.inputCognome, inputDataNascita: this.madre.inputDataNascita });
        },

        allRecords: function(){
          axios.post('ajaxfile.php', {
            request: 1
          })
          .then(function (response) {
            console.log("sono nel .then")
            app.madre = response.data;
            console.log(response.data);
            console.log(response);
          })
          .catch(function (error) {
            console.log(error);
          });
        },

        addRecord: function(){
          if(this.madre.inputNome != '' && this.madre.inputCognome != '' && this.madre.inputCognomeAcq != '') {
            axios.post('ajaxfile.php', {
              request: 2,
              nome: this.madre.inputNome,
              cognome: this.madre.inputCognome,
              cognome_acquisito: this.madre.inputCognomeAcq,
              codice_fiscale: this.madre.inputCodiceFiscale,
              sdo : this.madre.inputSDO,
              data_nascita : this.madre.inputDataNascita,
              comune_nascita: this.madre.inputComuneNascita,
              cittadinanza: this.madre.inputCittadinanza
            })
            .then(function (response) {
              alert("Nuova madre inserita con successo")
              console.log(response);
            })
            .catch(function (error) {
              console.log(error);
            });
          } else{
            alert('Riempire i campi contrassegnati con "*"');
          }

        },

        addRecordAndCreateParto: function(){
          if(this.madre.inputNome != '' && this.madre.inputCognome != '' && this.madre.inputCognomeAcq != '') {
            axios.post('ajaxfile.php', {
              request: 3,
              nome: this.madre.inputNome,
              cognome: this.madre.inputCognome,
              cognome_acquisito: this.madre.inputCognomeAcq,
              codice_fiscale: this.madre.inputCodiceFiscale,
              sdo : this.madre.inputSDO,
              data_nascita : this.madre.inputDataNascita,
              comune_nascita: this.madre.inputComuneNascita,
              cittadinanza: this.madre.inputCittadinanza
            })
            .then(function (response) {
              location.href = 'anamnesi.php?'+'idm='+response.data.idm+'&idp='+response.data.idp;
              console.log(response);
            })
            .catch(function (error) {
              console.log(error);
            });
          } else{
            alert('Riempire i campi contrassegnati con "*"');
          }

        },
      },
      data: {
          madre : 
          {
            inputNome : "Nome",
            inputCognome : "Cognome",
            inputCognomeAcq : "Cognome acquisito",
            inputCodiceFiscale : "",
            inputSDO : "",
            inputComuneNascita: "comune di nascita",
            inputCittadinanza : "",
          }
      }
  })
  </script>

</body>

</html>
