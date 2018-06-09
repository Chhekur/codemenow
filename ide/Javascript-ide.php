<?php
session_start();
include_once '../dbconnect.php';
if(isset($_SESSION['usr_id'])){
  $usr_id = $_SESSION['usr_id'];
  $result = mysqli_query($con, "SELECT * FROM users WHERE id='$usr_id'");
  if ($row = mysqli_fetch_array($result)) {
    $_SESSION['javascript'] = $row['javascript'];
  }
}
?>

<html>
   <head>
      <title> Codemenow | <?php echo explode(",", file_get_contents("tasks/javascript/inf/"   . htmlspecialchars($_GET["id"]) . ".txt"))[0] ?> </title>
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <meta name="viewport" content="width=900px,height=480px, initial-scale=1">
      <link rel="stylesheet" href="/ide/mz/css/materialize.min.css">
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <script src="/ide/mz/js/materialize.js"></script>
      <script src="/ide/cm/lib/codemirror.js"></script>
      <link rel="stylesheet" href="/ide/cm/lib/codemirror.css">
      <script src="/ide/cm/mode/javascript/javascript.js"></script>
     <link rel="stylesheet" href="/ide/cm/theme/monokai.css">
      <link rel="stylesheet" href="/ide/css/lc.css">
      <script src="https://cdn.rawgit.com/jquery/esprima/2.7.2/esprima.js"></script>
      

      <script type="text/javascript">
      if ( $(window).width() < 640) {      
  window.onload = function(){
  swal({
  title: "<h5>Codemenow is best experienced with a keyboard and mouse!</h5>",
  text: "We want you to learn by doing, and programming is done best on a desktop. Feel free to look around! When you are ready to dive in, remember logging in on a desktop for the best learning experience",
  type: "warning",
  confirmButtonText: "Got it!",
  html:true
});
  }
} 
         // @param filename The name of the file WITHOUT ending
         function playSound(filename){
             document.getElementById("sound").innerHTML='<audio autoplay="autoplay"><source src="/snd/' + filename + '.mp3" type="audio/mpeg" /><source src="' + filename + '.ogg" type="audio/ogg" /><embed hidden="true" autostart="true" loop="false" src="' + filename +'.mp3" /></audio>';
         }

         $(document).ready(function () {
           $('div.hidden').fadeOut(4000);
         });
      </script>
   </head>
   <body>
   <?php include_once '../nav_and_sidebar.php';?>
      <!-- Page Layout here -->
<div class="row">
        
         <div id="pagecontent">
            <!-- Navigation Panel -->
            <?php if($_GET['id']<$_SESSION['javascript']){?>
            <div class="tsc_ribbon_wrap" style="right:1035px;">
    <div class="ribbon-wrap right-edge fork lred" style="width: 60px;"><span><img src="/assets/img/correct.png" style="height: 25px;width: 25px; margin-top: 5px;"/></span></div>
    </div>
    <?php }?>
            <div class="col s6 m4 l3 grey lighten-3 lc_nav">
            	<h6 style="font-size: 18px;"><?php echo explode(",", file_get_contents("tasks/c/basics/practice/inf/"   . htmlspecialchars($_GET["id"]) . ".txt"))[0] ?> :</h6><hr class="z-depth-1">

               <div class="lc_task">
                  <h5> Task: </h5>
                   <ol id="lc_task_steps" type="1">
                  </ol>
               </div>

               <hr class="z-depth-1">
               <div class="lc_theory">
                  <h5> Theory: </h5>
                  <p id="lc_theory_text" class="paratext"></p>

               </div>
            </div>
            <!-- End Navigation Panel -->
            <!--Body Panel -->
            <div class="col s12 m8 l9 lc_con">
            <pre id="output" style="color:white; width:40%;float:right;height: 50%;border: 2px solid lightgray; background-color: black" ></pre>
               <textarea id="editor"><?php echo file_get_contents('tasks/javascript/code/' . htmlspecialchars($_GET["id"]) . '.txt') ?></textarea>
               <a id="mainButton" class="waves-effect waves-light btn" style="width: 9%; position: absolute; bottom: 2%; z-index:5" onclick="checkCode()" href="#">Check</a>
               <a id="hintButton" class="waves-effect waves-light btn" style="display:none" onclick="giveHint()" href="#">Hint</a>
            </div>
            <!-- End Body Panel -->
         </div>
      </div>
      <div id="sound"></div>
      <script>
         document.getElementById("lc_theory_text").innerHTML = "<?php echo file_get_contents("tasks/javascript/theory/"   . htmlspecialchars($_GET["id"]) . ".txt");?>"
         document.getElementById("lc_task_steps").innerHTML = "<?php echo file_get_contents("tasks/javascript/task/" . htmlspecialchars($_GET["id"]) . ".txt");?>"
      </script>
      <!-- Create a simple CodeMirror instance -->
      <script>
         var cmInstance = CodeMirror.fromTextArea(editor,
         	{
            lineWrapping:true,
         		lineNumbers:true,
         		firstLineNumber: 1,
         		mode : "javascript",
         		theme: "monokai",
         	}
         );

         function onSuccess(){
           document.getElementById("")
         	document.getElementById("mainButton").innerHTML = "Continue";

           document.getElementById("hintButton").style = "display: none;";
         	document.getElementById("mainButton").style = "display: none;";

         	Materialize.toast("Congratulations, you've completed this task!", 6000, "toastSuccess");
         	playSound("succ");
           setTimeout(redirect, 1000);
         }

         function redirect(){
          var one = 1;
          <?php if($_SESSION['javascript']<$_GET['id']){
          $temp = $_GET['id'] + "<script>one;<script/>";
          mysqli_query($con,"UPDATE users SET javascript='$temp' WHERE id='$usr_id'");
          
            } else{?>
            
           document.getElementById("mainButton").onClick = window.location = ("asdfa8201" + <?php echo htmlspecialchars($_GET["id"]) + 1 ?> + "2122sdfasdfid=08012000");
           <?php }?>
         }

         function onFailure(){
         	document.getElementById("mainButton").innerHTML = "Check Again";
         	document.getElementById("mainButton").style = "width: 9%; position: absolute; bottom: 2%; z-index:5; background-color:red;"

           document.getElementById("hintButton").style= "background-color: #fff; color: #000 ; margin-left: 10%; position: absolute; bottom: 2%; z-index:5;"

         	playSound("fail");
         }

         function giveHint(){
           Materialize.toast('<?php echo explode(",", file_get_contents("tasks/javascript/inf/"   . htmlspecialchars($_GET["id"]) . ".txt"))[2] ?>', 16000, "toastHint");
         }

         function checkCode(){
         	    		var returnval;
                   var hasSuccess = false;

                   try {
                       returnval = eval(cmInstance.getValue());
                   } catch (e) {
                       if (e instanceof SyntaxError) {
                           alert(e.message);
                       }
                   }
                  document.getElementById("output").innerHTML=returnval;
                   console.log(returnval);

         	    		if(returnval == <?php echo explode(",", file_get_contents("tasks/javascript/inf/"   . htmlspecialchars($_GET["id"]) . ".txt"))[1] ?>){
                     hasSuccess = true;
                     onSuccess();
         	    		
         	    		} else {
         	    			if(returnval == undefined){
         	    				Materialize.toast("Oops, you haven't returned anything, make sure you return statement is valid.", 6000, "toastFailure");
         	    			} else {
         	    				Materialize.toast("Oops, you've returned '" + returnval + "' - that doesn't seem correct", 6000, "toastFailure");
         	    			}
         	    			onFailure();
         	    		}

               if(!hasSuccess){

                 onFailure();
                 console.log("Syntax Error in Submission")
               }
          	}

         if(parseInt(<?php htmlspecialchars($_GET["id"]) ?>) < 2){
           Materialize.toast('Welcome to LearnCode, your can find your instructions on the left, and your development enviroment on the right. ', 8000);
           Materialize.toast('LearnCode supports teaching of Javascript, and is aimed to provide an  introduction to the fundamentals of programming.	', 16000);
         }

         console.log($(window).width());
         if($(window).width() < 601){
         	console.log("Device Resolution Not Supported")
         	$('body').replaceWith("<center><h5>Horizontal Resolution Too Low (<600px)</h5>");
         }

         $('a').click(function(e){
           if(window.goto=$(this).attr("href") != "#"){
             window.goto=$(this).attr("href");
               $('body').fadeOut('fast',function(){
                 document.location.href=window.goto;
               });
             e.preventDefault();
           }
         });
      </script>
   </body>
</html>
