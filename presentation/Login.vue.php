<?php
require('VCIEntete.vue.php');
require('VCINavAdmin.vue.php');
require('VCITitre.vue.php');

function DisplayLogin($erreur){
 ?>
 <?php afficheEntete(); ?>
 <script type="text/javascript">
  function login(){

    var xhr = new XMLHttpRequest();
    try {
      xhr = new XMLHttpRequest();
    }catch(e){
      xhr=null;
      return;
    }



    xhr.open("POST", "http://localhost/VideoStore/LoginAjax.php", true);
    // xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    // xhr.send("email=" + document.getElementById('email').value + "&password=" + document.getElementById('password').value);
    var value1 = encodeURIComponent("SALUT");
    xhr.open('GET', 'LoginAjax.php?param1=' + value1);
    xhr.send(null);

    xhr.onreadystatechange =  function(){
      if(xhr.readyState === 4 && xhr.status === 200){
        alert(xhr.responseText);
        // if(xhr.responseText !== "OK"){
          document.getElementById('test').innerHTML=  "salut" + xhr.responseText;
        // }
      }
      else {
        document.getElementById('test').innerHTML="oye";
      }
    };
  }
 </script>
 </head>
 <body>
   <?php afficheNavAdmin(); ?>

   <div class="container">
     <?php if(!empty($erreur)){ ?>
       <div class="alert alert-danger" role="alert">
         <strong>Damn it !</strong> <?php echo $erreur; ?>
       </div>

     <?php } ?>
    <div class="row">

      <div class="main">
        <div id="test">

        </div>
        <form role="form" action="VCILogAdmin.php" method="post">
          <div class="form-group">
            <label for="inputUsernameEmail">Email</label>
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input id="email" type="email" class="form-control" name="email" value="" placeholder="Email Address">
           </div>
          </div>
          <div class="form-group">
            <a class="pull-right" href="#">Forgot password?</a>
            <label for="inputPassword">Password</label>
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
              <input id="password" type="password" class="form-control" name="password" value="" placeholder="Password">
            </div>
          </div>
          <div class="checkbox pull-right">
            <label>
              <input type="checkbox" name="remember">
              Remember me </label>
          </div>
          <button type="button" class="btn btn btn-primary" onclick="login()">
            Log In
          </button>
        </form>

      </div>

    </div>
  </div>


 </body>
 </html>
 <?php } ?>
