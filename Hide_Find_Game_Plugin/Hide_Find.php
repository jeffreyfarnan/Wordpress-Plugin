<?php
/*
Plugin Name: Hide_Find
Plugin URI: http://earlyleap.com/
Description: My wordpress plugin
Version: 1.0
Author: Jeffrey Farnan
Author URI: http://www.jfarnan.com
License: GPL
*/
?>

<?php
function prefix_add_my_stylesheet2() {
    // Respects SSL, Style.css is relative to the current file
    wp_register_style( 'prefix-style', plugins_url('/css/style.css', __FILE__) );
    wp_enqueue_style( 'prefix-style' );
}


function ava_test_init() {
    wp_enqueue_script( 'ava-test-js', plugins_url( '/js/ava_test_.js', __FILE__ ));
}
?>






<?php
function PluginShortcode()
{




  $definition = array('A', 'B', 'C', 'D', 'E');
  shuffle ($definition);

 $Question = array('A', 'B', 'C', 'D', 'E');
shuffle ($Question);

 $Question2 = array('A', 'B', 'C', 'D', 'E');
shuffle ($Question2);

 $Question3 = array('A', 'B', 'C', 'D', 'E');
shuffle ($Question3);

 $Question4 = array('A', 'B', 'C', 'D', 'E');
shuffle ($Question4);

 $Question5 = array('A', 'B', 'C', 'D', 'E');
shuffle ($Question5);
?>


<style>
#a:link {   text-align: center;}    /* unvisited link */

</style>

<div id="sc1" class="tabcontent">




<h2><?php echo get_option('title'); ?> </h2>
<center>

<form id="userForm" action="<?php echo $self ?>" method="POST" >

      Enter Full Name :
      <input name="Fullname" type="text" value="<?php echo $_POST['Fullname']; ?>"><br/><br/>
      Enter Your Age :
      <input name="UserAge" type="text" value="<?php echo $_POST['UserAge']; ?>"><br/><br/>
    <input name="BtnSubmit" type="submit" value="Submit">


</center>



</div>




<div id="sc2" class="tabcontent">


<?php shuffle ($Question2); ?>
<h2> Find the following:  <?php echo $Question2[1]; ?> </h2>

<?php shuffle ($definition);?>
<table width="10%">


<td>
<div id="div1">
<div id="box6">
<?php echo $definition[0]; ?>
</div>
</div>
</td>

<td>
<div id="div2">
<div id="box7">
<?php echo $definition[1]; ?>
</div>
</div>
</td>

<td>
<div id="div3">
<div id="box8">
<?php echo $definition[2]; ?>
</div>
</div>

<td>
<div id="div4">
<div id="box9">
<?php echo $definition[3]; ?>
</div>
</div>
</td>

<td>
<div id="div5">
<div id="box10">
<?php echo $definition[4]; ?>
</div>
</div>
</td>

</table>

<input type="hidden"  name="question2" value="<?php echo $Question2[1]; ?> ">
<input type="hidden"  name="ans1" value="ans1">

<table width="10%">
<td>
<input type="radio" name="ans1" value=" <?php echo $definition[0]; ?>   ">Box 1<br>
</td>
<br>
<td>
<input type="radio" name="ans1" value=" <?php echo $definition[1]; ?>  ">Box 2<br>
</td>

<td>
<input type="radio" name="ans1" value=" <?php echo $definition[2]; ?>  ">Box 3<br>

<td>
<input type="radio" name="ans1" value=" <?php echo $definition[3]; ?>  ">Box 4<br>
</td>

<td>
<input type="radio" name="ans1" value=" <?php echo $definition[4]; ?>  ">Box 5<br>
</td>

</table>

<br>
<center>
<a href="#" onclick="toggle('box6'), toggle('box7'), toggle('box8'), toggle('box9'), toggle('box10'),resetGame2()">View Again</a>
</center>


<script><!--
function resetGame2(){
jQuery(document).ready(function() {
     //hide a div after 3 seconds
     setTimeout( "jQuery('#box6').hide();",2000 );
     setTimeout( "jQuery('#box7').hide();",2000 );
     setTimeout( "jQuery('#box8').hide();",2000 );
     setTimeout( "jQuery('#box9').hide();",2000 );
     setTimeout( "jQuery('#box10').hide();",2000 );
 });
}

// --></script>


</div>







<div id="sc3" class="tabcontent">


<?php shuffle ($Question3); ?>




<h2> Find the following: <?php echo $Question3[1]; ?> </h2>
<?php shuffle ($definition);?>



<table width="10%">
<td>
<div id="div1">
<div id="box11">
<?php echo $definition[0]; ?>
</div>
</div>
</td>

<td>
<div id="div2">
<div id="box12">
<?php echo $definition[1]; ?>
</div>
</div>
</td>

<td>
<div id="div3">
<div id="box13">
<?php echo $definition[2]; ?>
</div>
</div>

<td>
<div id="div4">
<div id="box14">
<?php echo $definition[3]; ?>
</div>
</div>
</td>

<td>
<div id="div5">
<div id="box15">
<?php echo $definition[4]; ?>
</div>
</div>
</td>

</table>

<input type="hidden"  name="question3" value="<?php echo $Question3[1]; ?> ">
<input type="hidden"  name="ans2" value="ans2">

<table width="20%">
<td>
<input type="radio" name="ans2" value=" <?php echo $definition[0]; ?>   ">Box 1<br>
</td>
<br>
<td>
<input type="radio" name="ans2" value=" <?php echo $definition[1]; ?>  ">Box 2<br>
</td>

<td>
<input type="radio" name="ans2" value=" <?php echo $definition[2]; ?>  ">Box 3<br>

<td>
<input type="radio" name="ans2" value=" <?php echo $definition[3]; ?>  ">Box 4<br>
</td>

<td>
<input type="radio" name="ans2" value=" <?php echo $definition[4]; ?>  ">Box 5<br>
</td>

</table>

<br>
<center>
<a href="#" onclick="toggle('box11'), toggle('box12'), toggle('box13'), toggle('box14'), toggle('box15'),resetGame3()">View Again</a>
</center>

<script><!--

function resetGame3(){
jQuery(document).ready(function() {
     //hide a div after 3 seconds
     setTimeout( "jQuery('#box11').hide();",2000 );
     setTimeout( "jQuery('#box12').hide();",2000 );
     setTimeout( "jQuery('#box13').hide();",2000 );
     setTimeout( "jQuery('#box14').hide();",2000 );
     setTimeout( "jQuery('#box15').hide();",2000 );
 });
}
// --></script>



</div>



<div id="sc4" class="tabcontent">


<?php shuffle ($Question4); ?>




<h2> Find the following: <?php echo $Question4[1]; ?> </h2>
<?php shuffle ($definition);?>



<table width="10%">
<td>
<div id="div1">
<div id="box16">
<?php echo $definition[0]; ?>
</div>
</div>
</td>

<td>
<div id="div2">
<div id="box17">
<?php echo $definition[1]; ?>
</div>
</div>
</td>

<td>
<div id="div3">
<div id="box18">
<?php echo $definition[2]; ?>
</div>
</div>

<td>
<div id="div4">
<div id="box19">
<?php echo $definition[3]; ?>
</div>
</div>
</td>

<td>
<div id="div5">
<div id="box20">
<?php echo $definition[4]; ?>
</div>
</div>
</td>

</table>

<input type="hidden"  name="question4" value="<?php echo $Question4[1]; ?> ">
<input type="hidden"  name="ans3" value="ans3">

<table width="20%">
<td>
<input type="radio" name="ans3" value=" <?php echo $definition[0]; ?>   ">Box 1<br>
</td>
<br>
<td>
<input type="radio" name="ans3" value=" <?php echo $definition[1]; ?>  ">Box 2<br>
</td>

<td>
<input type="radio" name="ans3" value=" <?php echo $definition[2]; ?>  ">Box 3<br>

<td>
<input type="radio" name="ans3" value=" <?php echo $definition[3]; ?>  ">Box 4<br>
</td>

<td>
<input type="radio" name="ans3" value=" <?php echo $definition[4]; ?>  ">Box 5<br>
</td>

</table>


<br>
<center>
<a href="#" onclick="toggle('box16'), toggle('box17'), toggle('box18'), toggle('box19'), toggle('box20'),resetGame4()">View Again</a>
</center>

<script><!--

function resetGame4(){
jQuery(document).ready(function() {
     //hide a div after 3 seconds
     setTimeout( "jQuery('#box16').hide();",1000 );
     setTimeout( "jQuery('#box17').hide();",1000 );
     setTimeout( "jQuery('#box18').hide();",1000 );
     setTimeout( "jQuery('#box19').hide();",1000 );
     setTimeout( "jQuery('#box20').hide();",1000 );
 });
}
// --></script>




</div>


<div id="sc5" class="tabcontent">


<?php shuffle ($Question5); ?>




<h2> Find the following: <?php echo $Question5[1]; ?> </h2>
<?php shuffle ($definition);?>



<table width="10%">
<td>
<div id="div1">
<div id="box21">
<?php echo $definition[0]; ?>
</div>
</div>
</td>

<td>
<div id="div2">
<div id="box22">
<?php echo $definition[1]; ?>
</div>
</div>
</td>

<td>
<div id="div3">
<div id="box23">
<?php echo $definition[2]; ?>
</div>
</div>

<td>
<div id="div4">
<div id="box24">
<?php echo $definition[3]; ?>
</div>
</div>
</td>

<td>
<div id="div5">
<div id="box25">
<?php echo $definition[4]; ?>
</div>
</div>
</td>

</table>

<input type="hidden"  name="question5" value="<?php echo $Question5[1]; ?> ">
<input type="hidden"  name="ans4" value="ans4">

<table width="30%">
<td>
<input type="radio" name="ans4" value=" <?php echo $definition[0]; ?>   ">Box 1<br>
</td>
<br>
<td>
<input type="radio" name="ans4" value=" <?php echo $definition[1]; ?>  ">Box 2<br>
</td>

<td>
<input type="radio" name="ans4" value=" <?php echo $definition[2]; ?>  ">Box 3<br>

<td>
<input type="radio" name="ans4" value=" <?php echo $definition[3]; ?>  ">Box 4<br>
</td>

<td>
<input type="radio" name="ans4" value=" <?php echo $definition[4]; ?>  ">Box 5<br>
</td>

</table>

<center>

<a href="#" onclick="toggle('box21'), toggle('box22'), toggle('box23'), toggle('box24'), toggle('box25'),resetGame5()">View Again</a>


<br><br>

<input type="submit" name="button"  value="End" onclick="popup()">

</center>

</form>





<script><!--

function resetGame5(){
jQuery(document).ready(function() {
     //hide a div after 3 seconds
     setTimeout( "jQuery('#box21').hide();",1000 );
     setTimeout( "jQuery('#box22').hide();",1000 );
     setTimeout( "jQuery('#box23').hide();",1000 );
     setTimeout( "jQuery('#box24').hide();",1000 );
     setTimeout( "jQuery('#box25').hide();",1000 );
 });
}
// --></script>
</div>


<div id="sc6" class="tabcontent">
<?php

      echo "<h2>Game Successfully Completed!! Bellow is your results</h2>";


      echo "<hr>";
      echo "</br>Your Name :{$_POST['Fullname']}";
      echo "</br>Your Age :{$_POST['UserAge']}";
      echo "<hr>";
    echo  " <br>";



  echo  " <strong>Game 1</strong>";
 echo  " <br>";
 $Question2 = isset($_REQUEST['question2']) ? $_REQUEST['question2'] : '';
  echo  " Your questiion was find:<strong>$Question2</strong><br>" ;


 $ans1 = isset($_REQUEST['ans1']) ? $_REQUEST['ans1'] : '';
 echo  "Your answer was: <strong>$ans1</strong><br>" ;

    echo "<hr>";
    echo  " <br>";


  echo  " <strong>Game 2</strong>";
 echo  " <br>";
 $Question3 = isset($_REQUEST['question3']) ? $_REQUEST['question3'] : '';
  echo  " Your questiion was find:<strong>$Question3</strong><br>" ;


 $ans2 = isset($_REQUEST['ans2']) ? $_REQUEST['ans2'] : '';
 echo  "Your answer was: <strong>$ans2</strong><br>" ;

      echo "<hr>";
    echo  " <br>";

  echo  " <strong>Game 3</strong>";
 echo  " <br>";
 $Question4 = isset($_REQUEST['question4']) ? $_REQUEST['question4'] : '';
  echo  " Your questiion was find:<strong>$Question4</strong><br>" ;


 $ans3 = isset($_REQUEST['ans3']) ? $_REQUEST['ans3'] : '';
 echo  "Your answer was: <strong>$ans3</strong><br>" ;

      echo "<hr>";
    echo  " <br>";

  echo  " <strong>Game 4</strong>";
 echo  " <br>";
 $Question5 = isset($_REQUEST['question5']) ? $_REQUEST['question5'] : '';
  echo  " Your questiion was find:<strong>$Question5</strong><br>" ;


 $ans4 = isset($_REQUEST['ans4']) ? $_REQUEST['ans4'] : '';
 echo  "Your answer was: <strong>$ans4</strong><br>" ;

      echo "<hr>";
    echo  " <br>";
 echo  " <center><h2>Play Again</h2></center>";

?>



</div>

<center>
<br>
<ul id="tablist">
<button style="background-color:green; color: white;"; onclick="return expandcontent('sc1', this),resetGame1()">Start</button>
<button style="background-color:green; color: white;"; onclick="return expandcontent('sc2', this),resetGame2()">Game 1</button>
<button style="background-color:green; color: white;";  onclick="return expandcontent('sc3', this),resetGame3()">Game 2</button>
<button style="background-color:green; color: white;";  onclick="return expandcontent('sc4', this),resetGame4()">Game 3</button>
<button style="background-color:green; color: white;";  onclick="return expandcontent('sc5', this),resetGame5()">Game 4</button>
<button style="background-color:green; color: white;";  onclick="return expandcontent('sc6', this)">Results</button>
</ul>

</center>

<?php

}

add_shortcode('hide_find', 'PluginShortcode');
add_action( 'wp_enqueue_scripts', 'prefix_add_my_stylesheet2' );
add_action('init','ava_test_init');

?>


<?php
/* What to do when the plugin is activated? */
 register_activation_hook(__FILE__,'my_first_plugin_install');

/* What to do when the plugin is deactivated? */
 register_deactivation_hook( __FILE__, 'my_first_plugin_remove' );

function my_first_plugin_install() {
/* Create a new database field */

 add_option("title", 'Enter your details here', 'This is my third plugin panel data.', 'yes');
}

function my_first_plugin_remove() {
/* Delete the database field */

delete_option('title');
}
add_action('admin_menu', 'my_first_admin_menu');
function my_first_admin_menu() {
 add_options_page('Plugin Admin Options', 'Hide&Find Admin Page', 'manage_options',
'my-first', 'plugin_admin_options_page');
}
?>



<?php
function plugin_admin_options_page() {
?>
 <div class="wrap">
<?php screen_icon(); ?>
 <h2>Hide&Find Admin Page</h2>
 <p>
 <form method="post" action="options.php">
<?php wp_nonce_field('update-options'); ?>

<br>
 Enter Form Title: <input name="title" type="text" id="title"
 value="<?php echo get_option('title'); ?>" />
 <input type="hidden" name="action" value="update" />
 <input type="hidden" name="page_options" value="title" />
<br>

 <input type="submit" value="Save Changes" />
 </form>
 </p>
 </div>
<?php
}
?>