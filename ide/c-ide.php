<?php
session_start();
include_once '../dbconnect.php';
$usr_id = $_SESSION['usr_id'];
$result = mysqli_query($con, "SELECT * FROM users WHERE id='$usr_id'");
if ($row = mysqli_fetch_array($result)) {
	$_SESSION['c'] = $row['c'];
}
?>
<html> 
<head> 
 <title> Codemenow | <?php if($_GET['id']<=15){echo explode(",", file_get_contents("tasks/c/basics/practice/inf/"   . htmlspecialchars($_GET["id"]) . ".txt"))[0];} elseif($_GET['id']>15 && $_GET['id']<=41){echo explode(",", file_get_contents("tasks/c/controlflow/practice/inf/"   . htmlspecialchars($_GET["id"]) . ".txt"))[0];} elseif($_GET['id']>41 && $_GET['id']<=61){echo explode(",", file_get_contents("tasks/c/loops/practice/inf/"   . htmlspecialchars($_GET["id"]) . ".txt"))[0];} elseif($_GET['id']>61 && $_GET['id']<=79){echo explode(",", file_get_contents("tasks/c/arrayandstring/practice/inf/"   . htmlspecialchars($_GET["id"]) . ".txt"))[0];} elseif($_GET['id']>79 && $_GET['id']<=84){echo explode(",", file_get_contents("tasks/c/pointer/practice/inf/"   . htmlspecialchars($_GET["id"]) . ".txt"))[0];} elseif($_GET['id']>84 && $_GET['id']<=104){echo explode(",", file_get_contents("tasks/c/function/practice/inf/"   . htmlspecialchars($_GET["id"]) . ".txt"))[0];} ?> </title>
 <link rel="stylesheet" href="/ide/mz/css/materialize.min.css">
 <meta name="viewport" content="width=900px,height=480px, initial-scale=1">
 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script src="/ide/mz/js/materialize.min.js"></script>
      <script src="/ide/cm/lib/codemirror.js"></script>
      <link rel="stylesheet" href="/ide/cm/lib/codemirror.css">
      <script src="/ide/cm/mode/clike/clike.js"></script>
      <link rel="stylesheet" href="/ide/cm/theme/monokai.css">
      <link rel="stylesheet" href="/ide/css/lc.css">
      <script src="https://cdn.rawgit.com/jquery/esprima/2.7.2/esprima.js"></script> 
	  <script src="/ide/JSCPP/dist/JSCPP.es5.min.js" type="text/javascript"></script> 
	  <script src="/ide/js/sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="/ide/css/sweetalert.css">
</head> 

<body> 
<?php include_once '../nav_and_sidebar.php';?>
<script type="text/javascript"> 
if ( $(window).height() < 400) {      
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
// output functions are configurable.  This one just appends some text
// to a pre element.
function outf(text) { 
    var mypre = document.getElementById("output"); 
    mypre.innerHTML = mypre.innerHTML + text; 
} 
function builtinRead(x) {
    if (Sk.builtinFiles === undefined || Sk.builtinFiles["files"][x] === undefined)
            throw "File not found: '" + x + "'";
    return Sk.builtinFiles["files"][x];
}

// Here's everything you need to run a c program in skulpt
// grab the code from your textarea
// get a reference to your pre element for output
// configure the output function
// call Sk.importMainWithBody()	

function redirect(){
           document.getElementById("mainButton").onClick = window.location = ("asdfa8201" + <?php echo htmlspecialchars($_GET["id"]) + 1 ?> + "2122sdfasdfid=08012000");
         }
function alert(){
  swal({
  title: "Congratulations!",
  text: "You completed the <?php if($_GET['id']<=15){echo explode(",", file_get_contents("tasks/c/basics/practice/inf/"   . htmlspecialchars($_GET["id"]) . ".txt"))[0];} elseif($_GET['id']>15 && $_GET['id']<=41){echo explode(",", file_get_contents("tasks/c/controlflow/practice/inf/"   . htmlspecialchars($_GET["id"]) . ".txt"))[0];} elseif($_GET['id']>41 && $_GET['id']<=61){echo explode(",", file_get_contents("tasks/c/loops/practice/inf/"   . htmlspecialchars($_GET["id"]) . ".txt"))[0];} elseif($_GET['id']>61 && $_GET['id']<=79){echo explode(",", file_get_contents("tasks/c/arrayandstring/practice/inf/"   . htmlspecialchars($_GET["id"]) . ".txt"))[0];} elseif($_GET['id']>79 && $_GET['id']<=84){echo explode(",", file_get_contents("tasks/c/pointer/practice/inf/"   . htmlspecialchars($_GET["id"]) . ".txt"))[0];} elseif($_GET['id']>84 && $_GET['id']<=104){echo explode(",", file_get_contents("tasks/c/function/practice/inf/"   . htmlspecialchars($_GET["id"]) . ".txt"))[0];} ?> of C",
  type: "success",
  confirmButtonText: "Continue"
});
}
function Continue(){

		var one = 1;
		<?php if($_SESSION['c']<$_GET['id']){
         	$temp = $_GET['id'] + "<script>one;<script/>";
         	mysqli_query($con,"UPDATE users SET c='$temp' WHERE id='$usr_id'");        
          	} ?>
      redirect();
}
function onFailure(){
         	document.getElementById("mainButton").innerHTML = "Check Again";
         	document.getElementById("mainButton").style = "width: 9%; position: absolute; bottom: 2%; z-index:5; background-color:red;"

           document.getElementById("hintButton").style= "background-color: #fff; color: #000 ; margin-left: 10%; position: absolute; bottom: 2%; z-index:5;"
         }    
 function giveHint(){
           Materialize.toast('<?php if($_GET['id']<=15){echo explode(",", file_get_contents("tasks/c/basics/practice/inf/"   . htmlspecialchars($_GET["id"]) . ".txt"))[2];} elseif($_GET['id']>15 && $_GET['id']<=41){echo explode(",", file_get_contents("tasks/c/controlflow/practice/inf/"   . htmlspecialchars($_GET["id"]) . ".txt"))[2];} elseif($_GET['id']>41 && $_GET['id']<=61){echo explode(",", file_get_contents("tasks/c/loops/practice/inf/"   . htmlspecialchars($_GET["id"]) . ".txt"))[2];} elseif($_GET['id']>61 && $_GET['id']<=79){echo explode(",", file_get_contents("tasks/c/arrayandstring/practice/inf/"   . htmlspecialchars($_GET["id"]) . ".txt"))[2];} elseif($_GET['id']>79 && $_GET['id']<=84){echo explode(",", file_get_contents("tasks/c/pointer/practice/inf/"   . htmlspecialchars($_GET["id"]) . ".txt"))[2];} elseif($_GET['id']>84 && $_GET['id']<=104){echo explode(",", file_get_contents("tasks/c/function/practice/inf/"   . htmlspecialchars($_GET["id"]) . ".txt"))[2];} ?>', 16000, "toastHint");
         }
function onSuccess(){
           document.getElementById("")
         	document.getElementById("mainButton").innerHTML = "Continue";

           document.getElementById("hintButton").style = "display: none;";
         	document.getElementById("mainButton").style = "display: none;";
         	document.getElementById("continueButton").style= "background-color: #4caf50; color: white ;position: absolute; bottom: 2%; z-index:5;"


         	Materialize.toast("Congratulations, you've completed this task!", 6000, "toastSuccess");
         	// setTimeout(redirect, 1000);
         }    
function runit() {
    var hasSuccess= false; 
    var prog = text.getValue();
   var mypre = document.getElementById("output"); 
   mypre.innerHTML = ''; 
  var code = text.getValue();
  var input = document.getElementById("input").value;
  var output = "";
  var config = {
    stdio: {
      write: function(s) {
        output += s;
      }
    }
  };
  var exitCode = 1;
  try{
  exitCode = JSCPP.run(code, input, config);
  }catch(err){
    hasSuccess = true;
  }
  if(hasSuccess == true){
    output= "Syntax Error in Submission";
    console.log("Syntax Error");

   }
  document.getElementById("output").innerHTML=output;
  console.log(exitCode);  

   if((output).indexOf(<?php if($_GET['id']<=15){echo explode(",", file_get_contents("tasks/c/basics/practice/inf/"   . htmlspecialchars($_GET["id"]) . ".txt"))[1];} elseif($_GET['id']>15 && $_GET['id']<=41){echo explode(",", file_get_contents("tasks/c/controlflow/practice/inf/"   . htmlspecialchars($_GET["id"]) . ".txt"))[1];} elseif($_GET['id']>41 && $_GET['id']<=61){echo explode(",", file_get_contents("tasks/c/loops/practice/inf/"   . htmlspecialchars($_GET["id"]) . ".txt"))[1];} elseif($_GET['id']>61 && $_GET['id']<=79){echo explode(",", file_get_contents("tasks/c/arrayandstring/practice/inf/"   . htmlspecialchars($_GET["id"]) . ".txt"))[1];} elseif($_GET['id']>79 && $_GET['id']<=84){echo explode(",", file_get_contents("tasks/c/pointer/practice/inf/"   . htmlspecialchars($_GET["id"]) . ".txt"))[1];} elseif($_GET['id']>84 && $_GET['id']<=104){echo explode(",", file_get_contents("tasks/c/function/practice/inf/"   . htmlspecialchars($_GET["id"]) . ".txt"))[1];} ?>)>=0){
    hasSuccess=true;
   	onSuccess();
    if(<?php echo $_GET['id']?> == 15 || <?php echo $_GET['id']?> == 41 || <?php echo $_GET['id']?> == 61 || <?php echo $_GET['id']?> == 79 || <?php echo $_GET['id']?> == 84 || <?php echo $_GET['id']?> == 104){
    alert();
  }
   }
   else{
   	if(output == undefined){
        Materialize.toast("Oops, you haven't returned anything, make sure you return statement is valid.", 6000, "toastFailure");
        } else {
         	Materialize.toast("Oops, you've returned '" + mypre.innerHTML + "' - that doesn't seem correct", 6000, "toastFailure");
         	 }
         	   onFailure();
   }
   
  /* myPromise.then(function(mod) {
       console.log(prog);
        
              },
       function(err) {
       console.log(err.toString());
   });*/
}

</script>  
<div class="row">
         <div id="pagecontent">
         <?php if(($_GET['id']<$_SESSION['c'])){?>
            <div class="tsc_ribbon_wrap" style="right:1035px;">
    <div class="ribbon-wrap right-edge fork lred" style="width: 60px;"><span><img src="/assets/img/correct.png" style="height: 25px;width: 25px; margin-top: 5px;"/></span></div>
    </div>
    <?php }?>

<div class="col s6 m4 l3 grey lighten-3 lc_nav">
    <h6 style="font-size: 18px;"><?php if($_GET['id']<=15){echo explode(",", file_get_contents("tasks/c/basics/practice/inf/"   . htmlspecialchars($_GET["id"]) . ".txt"))[0];} elseif($_GET['id']>15 && $_GET['id']<=41){echo explode(",", file_get_contents("tasks/c/controlflow/practice/inf/"   . htmlspecialchars($_GET["id"]) . ".txt"))[0];} elseif($_GET['id']>41 && $_GET['id']<=61){echo explode(",", file_get_contents("tasks/c/loops/practice/inf/"   . htmlspecialchars($_GET["id"]) . ".txt"))[0];} elseif($_GET['id']>61 && $_GET['id']<=79){echo explode(",", file_get_contents("tasks/c/arrayandstring/practice/inf/"   . htmlspecialchars($_GET["id"]) . ".txt"))[0];} elseif($_GET['id']>79 && $_GET['id']<=84){echo explode(",", file_get_contents("tasks/c/pointer/practice/inf/"   . htmlspecialchars($_GET["id"]) . ".txt"))[0];} elseif($_GET['id']>84 && $_GET['id']<=104){echo explode(",", file_get_contents("tasks/c/function/practice/inf/"   . htmlspecialchars($_GET["id"]) . ".txt"))[0];}?> :</h6><hr class="z-depth-1">

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

<div class="col s12 m8 l9 lc_con">

<pre id="output" style="color:white; width:40%;float:right;height: 50%;border: 2px solid lightgray; background-color: black" ></pre>         
              <textarea id="editor" style="overflow: hidden; "><?php if($_GET['id']<=15){echo file_get_contents("tasks/c/basics/practice/code/"   . htmlspecialchars($_GET["id"]) . ".txt");} elseif($_GET['id']>15 && $_GET['id']<=41){echo file_get_contents("tasks/c/controlflow/practice/code/"   . htmlspecialchars($_GET["id"]) . ".txt");} elseif($_GET['id']>41 && $_GET['id']<=61){echo file_get_contents("tasks/c/loops/practice/code/"   . htmlspecialchars($_GET["id"]) . ".txt");} elseif($_GET['id']>61 && $_GET['id']<=79){echo file_get_contents("tasks/c/arrayandstring/practice/code/"   . htmlspecialchars($_GET["id"]) . ".txt");} elseif($_GET['id']>79 && $_GET['id']<=84){echo file_get_contents("tasks/c/pointer/practice/code/"   . htmlspecialchars($_GET["id"]) . ".txt");} elseif($_GET['id']>84 && $_GET['id']<=104){echo file_get_contents("tasks/c/function/practice/code/"   . htmlspecialchars($_GET["id"]) . ".txt");} ?></textarea><textarea  placeholder="User Input" id ="input" style="float:right; width: 40%;color:white;resize: none; outline:none;overflow: hidden; margin-top: -150px;height: 145px;"></textarea>
               <a id="mainButton" class="waves-effect waves-light btn" style="width: 9%; position: absolute; bottom: 2%; z-index:5" onclick="runit()" href="#">Check</a>
               <a id="hintButton" class="waves-effect waves-light btn" style="display:none" onclick="giveHint()" href="#">Hint</a>
               <a id="continueButton" class="waves-effect waves-light btn" style="display:none" onclick="Continue()" href="#">Continue</a>
            


		</div>
<!-- If you want turtle graphics include a canvas -->
<div id="mycanvas"></div> 
<script>

 document.getElementById("lc_theory_text").innerHTML = "<?php if($_GET['id']<=15){echo file_get_contents("tasks/c/basics/practice/theory/"   . htmlspecialchars($_GET["id"]) . ".txt");} elseif($_GET['id']>15 && $_GET['id']<=41){echo file_get_contents("tasks/c/controlflow/practice/theory/"   . htmlspecialchars($_GET["id"]) . ".txt");} elseif($_GET['id']>41 && $_GET['id']<=61){echo file_get_contents("tasks/c/loops/practice/theory/"   . htmlspecialchars($_GET["id"]) . ".txt");} elseif($_GET['id']>61 && $_GET['id']<=79){echo file_get_contents("tasks/c/arrayandstring/practice/theory/"   . htmlspecialchars($_GET["id"]) . ".txt");} elseif($_GET['id']>79 && $_GET['id']<=84){echo file_get_contents("tasks/c/pointer/practice/theory/"   . htmlspecialchars($_GET["id"]) . ".txt");} elseif($_GET['id']>84 && $_GET['id']<=104){echo file_get_contents("tasks/c/function/practice/theory/"   . htmlspecialchars($_GET["id"]) . ".txt");}?>";
 document.getElementById("lc_task_steps").innerHTML = "<?php if($_GET['id']<=15){echo file_get_contents("tasks/c/basics/practice/task/"   . htmlspecialchars($_GET["id"]) . ".txt");} elseif($_GET['id']>15 && $_GET['id']<=41){echo file_get_contents("tasks/c/controlflow/practice/task/"   . htmlspecialchars($_GET["id"]) . ".txt");} elseif($_GET['id']>41 && $_GET['id']<=61){echo file_get_contents("tasks/c/loops/practice/task/"   . htmlspecialchars($_GET["id"]) . ".txt");} elseif($_GET['id']>61 && $_GET['id']<=79){echo file_get_contents("tasks/c/arrayandstring/practice/task/"   . htmlspecialchars($_GET["id"]) . ".txt");} elseif($_GET['id']>79 && $_GET['id']<=84){echo file_get_contents("tasks/c/pointer/practice/task/"   . htmlspecialchars($_GET["id"]) . ".txt");} elseif($_GET['id']>84 && $_GET['id']<=104){echo file_get_contents("tasks/c/function/practice/task/"   . htmlspecialchars($_GET["id"]) . ".txt");}?>";
      </script>
<script>
var text = CodeMirror.fromTextArea(editor,
         	{	lineWrapping:true,
         		matchBrackets:true,
         		lineNumbers:true,
         		firstLineNumber: 1,
         		mode : "text/x-c++src",
         		theme: "monokai"
         	}
         ); 
</script>
</body> 
</html> 