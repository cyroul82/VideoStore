<?php
require('VCIEntete.vue.php');
require('VCINavAdmin.vue.php');
require('VCITitre.vue.php');

function SelectionTypeFilm($data){
 ?>
 <?php afficheEntete(); ?>
 <script type="text/javascript">
   function vazy()
   {
   	if (!(document.getElementById("typef").value==""))
   		{
   			document.getElementById("f_type").submit()
   		}
   }
 </script>
 </head>
 <body>
   <?php afficheNavAdmin(); ?>

   <div class="container">
     <div class="row">
       <div class="col-xs-12">
         <form  action="VCIResa2.php" id="f_type" method = "get">
     				<select  name="typef" id="typef" onchange="vazy()" >
     				<!-- première option par défaut -->
     					<option selected value="">&lt;Sélectionnez le type recherché&gt;</option>
     					<?php  // liste des types issus du recordset
     					    foreach ($data as $row) {
     					 ?>
     					<option value = "<?php  echo $row['CODE_TYPE_FILM'] ?>"><?php  echo $row['LIB_TYPE_FILM']?></option>
     					<?php
     					}
     					?>
     				</select>

         </form>

       </div>

     </div>
   </div>

 </body>
 </html>
 <?php } ?>
