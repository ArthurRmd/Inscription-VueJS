<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Projet </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- JQuerry -->
    <script
        src="https://code.jquery.com/jquery-3.1.1.min.js"
        integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
        crossorigin="anonymous">
    </script>

    <!-- Semantic UI -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.js"></script>      


    <!-- Fichier Perso -->
    <link rel="stylesheet" type="text/css" media="screen" href="./css/style.css" />

    

    
</head>

<body>



    <div class="bloc">

        <h1 class="titre">Inscription</h1>



        <form  class="ui form test" >



          <div class="field espace-field" :class="{error : mail.error}" id="id"> 

            <label>identifiant</label>
            <div class="ui left icon input ">
              <input type="text" placeholder="" @keyup="validePseudo" v-model.trim="mail.text" @blur='verifLongueur' >
              <i class="user icon"></i>
            </div>

            <div class="position-gauche">
              <div class="ui pointing red basic label " v-if="mail.error">
                {{mail.textError}}
              </div>
            </div>
          </div>





          <div class="field espace-field" :class="{error : mdp.error}" >
            
                  <div class="two fields">
                    <div class="field" id="mdp" >
                      <label for="id-mdp">Mot de passe</label>
                      <div class="ui left icon input ">
                          <input type="password" placeholder="" id="id-mdp"  v-model="mdp.text" @blur='verifPassword' >
                          <i class="lock icon"></i>
                        </div>
                    </div>
                    <div class="field" id="verifMdp">
                        <label>Vérification mot de passe</label>
                        <div class="ui left icon input ">
                            <input type="password" placeholder=""  v-model="mdp.textVerif"  @blur='verifSecondPassword' >
                            <i class="lock icon"></i>
                          </div>
                    </div>
                  </div>

                  <div class="position-gauche">
                      <div class="ui pointing red basic label " v-if="mdp.error">
                        {{mdp.textError}}
                      </div>
                    </div>


            </div>







 
          <div class="field check"  >
            <div class="ui checkbox"@click="checked">
              <input type="checkbox" tabindex="0" class="hidden" v-model="check" id="checkConnected" >
              <label>J'accepte les conditions</label>
            </div>
          </div> 
          
          
        </form>

        <button class="ui button btn-envoi" type="submit" @click='valid'>Envoyer</button>
          

    </div>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.17/vue.js"></script>
    <script src="js/connexion.js"></script>
    <script src="js/app.js"></script>

</body>



