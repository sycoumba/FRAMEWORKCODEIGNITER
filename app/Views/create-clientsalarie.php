<!DOCTYPE html>
<html>
<head>
  <title>Codeigniter 4 User Form With Validation Example</title>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script> 
 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>  
 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/additional-methods.min.js"></script>
<style>
    body{
	font-family: verdana, arial, sans serif;
	background-color:#00C3C7;
}
.main{display: flex;
	padding:0px;
        margin:10px;
        background-color: white;

}
h1{
        float: right;
        color:#00C3C7;
        background-color: white;
}
h2{
      background-color:white;  
      padding: 20px;
      margin: 20px;
      text-align: center;
      color:#00C3C7;
      border-radius: 75px;
      width: 80%;
      left: 30px;
}

h3{
        color:white;

}
legend{
        color: blueviolet;
}
label{
        color: blueviolet;
        background-color: white;
        width: 100%;
}
#responsable a{
        display: inline-block;
        background-color: white;
        padding: 20px;
        margin: 50px;
        text-decoration: none;

}
#client_moral{
        background-color: white;
        width: 40%;
        left: 35%;
        float:45%
      
}
::placeholder{
        color: blueviolet;

}
.info1{
        width: 70%;
        background-color: white;
        left: 45%;
        padding: 20px;
        margin: 90px;
}
p{
        color:blueviolet ;
        background-color: white;
        width: 30%;
        position: center;
}
#loginresp
{
        width: 80px;
        background-color: white;
        
}
#login{
        position: relative;
        left:35%;
        float: 50%;
        margin: 30px;

}
#compte_courant{
        position: relative;
        left:35%;
        float: 50%;
        margin: 30px;
        width: 60px;
        background-color: white;
}
#compte_bloque{
        width: 60px;
        background-color: white;
        left:55%;
        float: 30%;
        
}
#salarie{
        width: 60px;
      

}
#client_salarie{
        background-color: white;
        width: 30%;
}
#client_non_salarie{
        background-color: white;
        width: 30%;

}
#compte_epargne{
        background-color: white;
        width: 30%;
        left:55%;
        float: 30%;


}
#valider{
        background-color:blueviolet ;
}
#retour{
        background-color:blueviolet ;
}
</style>

 
</head>
<body>
<header>
        <div class="main">
            <img src="../public/logo.jpeg">
            <h1> BIENVENUE DANS LA BANQUE DU PEUPLE</h1>
        </div>
    </header>
    <h2> VEUILLEZ SELECTONNEZ LE TYPE DE CLIENT A AJOUTER</h2>
    <p>OUVERTURE COMPTE CLIENT SALARIE</p>
 <div class="container">
    <br>
    <?= \Config\Services::validation()->listErrors(); ?>
 
    <span class="d-none alert alert-success mb-3" id="res_message"></span>
 
    <div class="row">
      <div class="col-md-9">
      <form action="<?php echo base_url('public/index.php/ClientSalarie/store');?>" name="clientsalarie_create" id="clientsalarie_create" method="post" accept-charset="utf-8">
 
          <div class="form-group">
            <label for="nom">Nom </label>
            <input type="text" name="nom" class="form-control" id="nom" placeholder="Veuiller entrer le nom ">
              </div> 
              <div class="form-group">
            <label for="nom">Prenom </label>
            <input type="text" name="prenom" class="form-control" id="prenom" placeholder="Veuiller entrer le prenom ">
              </div> 

          <div class="form-group">
            <label for="adresse">Adresse</label>
            <input type="text" name="adresse" class="form-control" id="adresse" placeholder="Veuillez entrer adresse">
             
          </div> 
 
          <div class="form-group">
            <label for="telephone">Telephone</label>
            <input type="text" name="telephone" class="form-control" id="telephone" placeholder="Veuillez enttrer le telephone">
             
          </div> 
 
 
          <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" class="form-control" id="email" placeholder="Veuiller entrer email ">
             
          </div>  
          <div class="form-group">
            <label for="profession">Profession</label>
            <input type="text" name="profession" class="form-control" id="profession" placeholder="Veuillez entrer la profession">
          </div> 
          <div class="form-group">
            <label for="salaire_actuel">Salaire actuel</label>
            <input type="text" name="salaire_actuel" class="form-control" id="salaire_actuel" placeholder="Veuillez entrer le salaire actuel">
          </div>
          <div class="form-group">
            <label for="nom_entreprise">Nom entreprise</label>
            <input type="text" name="nom_entreprise" class="form-control" id="nom_entreprise" placeholder="Veuillez entrer le nom de l'entreprise">
          </div>
          <div class="form-group">
            <label for="adresse_entreprise">Adresse entreprise</label>
            <input type="text" name="adresse_entreprise" class="form-control" id="adresse_entreprise" placeholder="Veuillez entrer la adresse de l'entreprise">
          </div>
          <div class="form-group">
            <label for="identifiant_entreprise">Identifiant entreprise</label>
            <input type="text" name="identifiant_entreprise" class="form-control" id="identifiant_entreprise" placeholder="Veuillez entrer l'identifiant de l'entreprise">
          </div>

  <div class="form-group">
            <label for="numero_CNI">Numero CNI</label>
            <input type="text" name="numero_CNI" class="form-control" id="numero_CNI" placeholder="Veuillez  entrer  le numero CNI">
             
          </div> 
  
          <div class="form-group">
           <button type="submit" id="send_form" class="btn btn-success">Submit</button>
          </div>
          
        </form>
      </div>
 
    </div>
  
</div>
 <script>
   if ($("#clientsalarie_create").length > 0) {
      $("#clientsalarie_create").validate({
      
    rules: {
        nom: {
        required: true,
      },
      rules: {
        prenom: {
        required: true,
      },
    
      rules: {
        adresse: {
        required: true,
      },
      rules: {
        telephone: {
        required: true,
    },
      email: {
        required: true,
        maxlength: 50,
        email: true,
      },   
    
      rules: {
        activite: {
        required: true,
      },
      rules: {
        numero_CNI: {
        required: true,
      },
      
    messages: {
        
      nom: {
        required: "Veuillez entrer le nom",
      },
      prenom: {
        required: "Veuillez entrer le prenom",
      },
      adresse: {
        required: "Veuillez entrer l'adresse",
      },
      telephone: {
        required: "Veuillez entrer le telephone",
      },
      email: {
        required: "Veuillez entrer un email valide",
        email: "Veuillez entrer un email valide",
        maxlength: "The email name should less than or equal to 50 characters",
        }, 
        activite: {
        required: "Veuillez entrer le activite",
      },
      numero_CNI: {
        required: "Veuillez entrer le numero CNI",
      },
    },
},
},
},
},
},
},
})
}
</script>
</body>
</html>