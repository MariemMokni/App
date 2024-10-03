<?php 
include("header.php");


$ooo = "";
$username = $user['username'];
$userCode = $user2['courseCode'];
$post = new Post($con, $username, $userCode);
$checkTeaching = $post->checkTeachingClass();
$checkEnrolled = $post->checkEnrolledClass();
?>

<div class="bg">
    <div class="wrapper">

        <?php 
          if ($checkTeaching == true) {
               echo "<div class='teaching'>
             <h3><span class='header'>L'enseignement</span></h3>";
               $post->loadTeachingClasses();
               echo "</div>";
          }

          if ($checkEnrolled == true) {
               echo "<div class='enrolled'>
             <h3><span class='header'>Inscrits:</span></h3>";
               $post->loadEnrolledClasses();
               echo "</div>";
          }
          if (($checkEnrolled == false) && ($checkTeaching == false)) {
               echo "<div id='nullTeachingEnrolled'>
                         <p>Il semble que vous n'ayez pas encore créé de classe ou que vous ne vous soyez pas encore inscrit à une classe !
                         !</p>
                         <p>Cliquez sur le bouton ci-dessous ou <i class='fas fa-plus' style='padding:0.4rem; color:inherit'></i> pour commencer avec votre classe</p>
                         
     <a href='createJoinClass.php'>
     <button class='null-button'>Creer/Rejoindre</button></a>
                     </div>";
          }
          ?>





    </div>
</div>

<script>
  $(function(){
    $('a.delete-class-btn').click(function(e){
      if(confirm("Vous êtes sûres de vouloir supprimer cette classe?") === false){
        e.preventDefault();
        return false;
      }
    })
  })
</script>
</body>

</html> 