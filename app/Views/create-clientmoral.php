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
    <p>OUVERTURE COMPTE CLIENT MORAL</p>
 <div class="container">
    <br>
    <?= \Config\Services::validation()->listErrors(); ?>
 
    <span class="d-none alert alert-success mb-3" id="res_message"></span>
 
    <div class="row">
      <div class="col-md-9">
      <form action="<?php echo base_url('public/index.php/ClientMoral/store');?>" name="clientmoral_create" id="clientmoral_create" method="post" accept-charset="utf-8">
 
          <div class="form-group">
            <label for="nom_entreprise">Nom entreprise</label>
            <input type="text" name="nom_entreprise" class="form-control" id="nom_entreprise" placeholder="Veuiller entrer le nom entreprise">
             
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
            <label for="type_entreprise">Type entreprise</label>
            <input type="text" name="type_entreprise" class="form-control" id="type_entreprise" placeholder="Veuillez entrer type entreprise">
             
          </div> 

  <div class="form-group">
            <label for="raison_social">Raison social</label>
            <input type="text" name="raison_social" class="form-control" id="raison_social" placeholder="Veuillez  entrer  la raison_social">
             
          </div> 

  <div class="form-group">
            <label for="identifiant_entreprise">Identifiant entreprise</label>
            <input type="text" name="identifiant_entreprise" class="form-control" id="identifiant_entreprise" placeholder="Veuiller entrer l'identifiant entreprise">
             
          </div> 
          <div class="form-group">
            <label for="adresse_entreprise">Adresse entreprise</label>
            <input type="text" name="adresse_entreprise" class="form-control" id="adresse_entreprise" placeholder="Veuiller entrer l'adresse_entreprise">
             
          </div> 
  
          
          <div class="form-group">
           <button type="submit" id="send_form" class="btn btn-success">Submit</button>
          </div>
          
        </form>
      </div>
 
    </div>
  
</div>
 <script>
   if ($("#clientmoral_create").length > 0) {
      $("#clientmoral_create").validate({
      
    rules: {
        nom_entreprise: {
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
        type_entreprise: {
        required: true,
      },
      rules: {
        raison_social: {
        required: true,
      },
      rules: {
        identifiant_entreprise: {
        required: true,
      },
      rules: {
        adresse_entreprise: {
        required: true,
      },  
    },
    messages: {
        
      name: {
        required: "Please enter name",
      },
      email: {
        required: "Please enter valid email",
        email: "Please enter valid email",
        maxlength: "The email name should less than or equal to 50 characters",
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