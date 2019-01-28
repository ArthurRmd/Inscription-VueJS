
var v = new Vue ({

	el: '.bloc',

	data: {
		
		mail : {
			text: '',
			error: false,
			textError: 'L\'adresse mail donné n\'est pas compatible'
		},

		mdp : {
			text: '',
			textVerif: '',
			error: false,
			textError: 'L\'adresse mail donné n\'est pas compatible'
		},

		check: false
	},

	methods : {

		checked : function () {
			this.check === true ? this.check=false: this.check=true
		},

		validePseudo :  function () {

			userExist(this.mail.text).then(res => {
				console.log(res)
				this.mail.error = res
				if (res) this.mail.texteError = 'Le pseudo est déja utilisé'
			
			})

		},

		verifLongueur : function () {

			if (!verifLongueur(this.mail.text,3,10)) {
				this.mail.textError = "Le pseudo doit faire entre 3 et 10 caractères"
				this.mail.error = true
			}
		},

		verifPassword : function () {
			
			if (!verifPassword(this.mdp.text)){
				this.mdp.textError = "Le mot de passe doit faire contenir une majuscule, une minuscule, un chiffre, un symbole et faire au minimum 8 caractères"
				this.mdp.error = true
			}
			else {
				this.mdp.error = false

			}
		},

		verifSecondPassword : function () {

			if ( this.mdp.text !== this.mdp.textVerif ) {
				this.mdp.textError = "Les mots de passe ne sont pas identique"
				this.mdp.error = true
			}
			else{
				this.mdp.error = false
			}	
		},

		valid : function (){

			if (this.mail.text != "" && this.mdp.text != "" && this.mdp.textVerif != "" &&  !this.mail.error && !this.mdp.error   ){
				alert("Formulaire valide ")
			}
			else{
				alert('Formulaire non valide')
			}
		}

	},





})



function userExist(text) {

	var content = {pseudo: text}; 

	return fetch ('php/valideName.php', {
		method: 'POST',
		headers: {"Content-type": "application/json"},
		body: JSON.stringify(content)
	  })
		.then(res => res.json())
		.then(res => {
		  return res
		});
}




Vue.config.devtools = true;
