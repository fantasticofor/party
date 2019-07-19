<!DOCTYPE html>
<html lang="en">

  <?php require("inc_header.php"); ?>

<body>
    <!-- Navigation -->
    <?php 
        $active_menu = 'Ricerca';
        require("inc_navigation.php")
    ?>

  <!-- Page Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h1 class="mt-5">Ricerca Madre</h1>
      </div>
    </div>

    <!-- Search form -->
    <form id="searchMadreForm" @submit.prevent="processForm">
      <div class="form-row">
        <div class="form-group col-lg-6">
          <label for="inputNome">Nome</label>
          <input type="text" class="form-control" id="inputNome" v-model="madre.inputNome">
        </div>
        <div class="form-group col-lg-6">
          <label for="inputCognome">Cognome</label>
          <input type="text" class="form-control" id="inputCognome" v-model="madre.inputCognome">
        </div>
      </div>

      <div class="row mt-3 mb-5">
        <div class="col text-center">
          <button type="submit" class="btn btn-outline-primary" value="Add" @click='searchMadre()'>Ricerca Madre <i class="fas fa-search"></i></button>
        </div>
      </div>
    

      <table class="table table-sm table-hover" id="searchResultTable" v-if="madriToDisplay">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Cognome</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="madreTrovata in madriToDisplay" @click="createPartoWithSelected($event, madreTrovata)">
            <td>{{madreTrovata.id}}</td>
            <td>{{madreTrovata.nome}}</td>
            <td>{{madreTrovata.cognome}}</td>
          </tr>
          <tr>
        </tbody>
      </table>

      <div class="form-row" v-if="madreSelezionata.nome">
        <div class="col-lg-2">Nome: </div>
        <input type="text" class="col border-0" v-model="madreSelezionata.nome">
      </div>
      <div class="row" v-if="madreSelezionata.cognome">
        <div class="col-lg-2">Cognome: </div>
        <input type="text" class="col border-0" v-model="madreSelezionata.cognome">
      </div>
      <div class="row" v-if="madreSelezionata.cognome_acquisito">
        <div class="col-lg-2">Cognome Acquisito: </div>
        <input type="text" class="col border-0" v-model="madreSelezionata.cognome_acquisito">
      </div>
      <div class="row" v-if="madreSelezionata.codice_fiscale">
        <div class="col-lg-2">Codice Fiscale: </div>
        <input type="text" class="col border-0" v-model="madreSelezionata.codice_fiscale">
      </div>
      <div class="text-center my-3" v-if="madreSelezionata.id">
        <button type="submit" class="btn btn-primary" value="Add" @click='createPartoWithSelectedMadre()'>Crea nuovo parto con la Madre selezionata</button>
      </div>


    </form>

  </div>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <script>
    function createPartoWithSelected(el, madreTrovata){
      $(el.currentTarget).siblings().removeClass();
      $(el.currentTarget).addClass("table-primary");
      this.app.madreSelezionata = madreTrovata;
      console.log("Madre selezionata.id= " + madreTrovata.id);
      console.log("Madre selezionata.nome= " + madreTrovata.nome);
      console.log("Madre selezionata.cognome= " + madreTrovata.cognome);
      this.app.madreSelezionata.id = madreTrovata.id;
      this.app.madreSelezionata.nome = madreTrovata.nome;
      this.app.madreSelezionata.cognome = madreTrovata.cognome;
      this.app.madreSelezionata.cognome_acquisito = madreTrovata.cognome_acquisito;
      this.app.madreSelezionata.codice_fiscale = madreTrovata.codice_fiscale;
    }
  </script>

  <script>
    var app = new Vue({
      el: '#searchMadreForm',
      methods : {
        processForm: function() {
          // var madreDaInserire = "madre da inserire";
          // console.log({ inputNome: this.madre.inputNome, inputCognome: this.madre.inputCognome, inputDataNascita: this.madre.inputDataNascita });
        },

        displayResult: function(){
          // app.madre = response.data;
          console.log(response.data);
        },

        searchMadre: function(){
          if(this.madre.inputNome != '' || this.madre.inputCognome != '') {
            axios.post('ajaxfile.php', {
              request: 1,
              nome: this.madre.inputNome,
              cognome: this.madre.inputCognome
            })
            .then(function (response) {
              console.log("Trovate " + response.data.length + " madri.");
              this.app.madriToDisplay = response.data;
              if(response.data.length == 0)
                this.app.madriToDisplay = null;
            })
            .catch(function (error) {
              console.log(error);
            });
          } else{
            alert('Inserire Nome o Cognome della madre da ricercare');
          }
        },

        createPartoWithSelectedMadre: function(){
          console.log("Creando parto con madre id: " + this.madreSelezionata.id);
          axios.post('ajaxfile.php', {
            request: 6,
            id: this.madreSelezionata.id
          })
          .then(function (response) {
            location.href = 'anamnesi.php?'+'idm='+response.data.idm+'&idp='+response.data.idp;
            console.log(response.data);
          })
          .catch(function (error) {
            console.log(error);
          });
        },

      },
      data: {
          madre : 
          {
            inputNome : "",
            inputCognome : "",
          },
          madriToDisplay : null,
          madreSelezionata :
          {
            id :null,
            nome : null,
            cognome : null,
            cognome_acquisito : null,
            codice_fiscale : null
          }
      }
  })
  </script>

</body>

</html>
