<?php 
include("header.php");
require 'config/config.php' ;
require 'includes/form_handlers/createJoinClass_handler.php';
?>


<?php 
        
        if(isset($_POST['joinClass_button'])) {
        	echo '
             <script>
               $(document).ready(function(){
                 $("#first").hide();
                 $("#second").show();
               });
             </script>
        	';
        }
	 ?>
<div class="bg">
    <div class="wrapper">

        <div class="creatClass_box">  	
			
            <div id="first">
                <div class="creatClass_header">
                    <h1>Creer classe</h1>
                </div>

			   <form action="createJoinClass.php" method="POST">
					<input type="text" name="className" autocomplete="off" placeholder="Nom de la classe/Code du cours" value = "<?php 
					// if(isset($_SESSION['className'])){
				    //    echo $_SESSION['className'];
					// } 
					?>" >
				   	<br>

				    <input type="text" name="section" autocomplete="off" placeholder="Section" value = "<?php 
					// if(isset($_SESSION['section'])){
				    //    echo $_SESSION['section'];
					// } 
					?>" >
				    <br>

				    <input type="text" name="subject" autocomplete="off" placeholder="Matière/titre du cours" value = "<?php 
					
					?>" >
				    <br>

				     <button  type="sumbit" name="createClass_button" id ="create_class_button">Creer</button>
                    <button class="cancel_button"><a href="index.php">Annuler</a></button>
	                <br>
                    <br>
                    <a href="#" id="joinClass" class="joinClass">Vous voulez rejoindre une classe ? Cliquez ici</a>
		     		 </form>
             </div>
             
             <div id="second">
                    <div class="joinClass_header">
                        <h1>Rejoindre classe</h1>
                    </div>

                        <form action="createJoinClass.php" method="POST">
                                <input type="text" name="code" placeholder="Code de la classe" autocomplete="off" value = "<?php 
                                if(isset($_SESSION['code'])){
                                echo $_SESSION['code'];
                                } 
                                ?>">
                                <br>
                                <button  type="sumbit" name="joinClass_button" id="create_class_button">Rejoindre</button>
                                <button class="cancel_button" ><a href="index.php">Annuler</a></button>
                                
                                <br>
                                <br>
                                <a href="#" id="createClass" class="createClass">Vous souhaitez créer une nouvelle classe ? Cliquez ici !</a>
                                </form>
                   
            </div>
     </div>          
</div>
               
                    
		 </div>   

 
</div> 
</body>
</html>