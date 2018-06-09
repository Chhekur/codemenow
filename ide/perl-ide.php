<?php
session_start();
include_once '../dbconnect.php';
$usr_id = $_SESSION['usr_id'];
$result = mysqli_query($con, "SELECT * FROM users WHERE id='$usr_id'");
if ($row = mysqli_fetch_array($result)) {
  $_SESSION['perl'] = $row['perl'];
}
?>

<html> 
<head> 
 <title> Codemenow | <?php echo explode(",", file_get_contents("tasks/perl/inf/"   . htmlspecialchars($_GET["id"]) . ".txt"))[0] ?> </title>
 <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <link rel="stylesheet" href="/ide/mz/css/materialize.min.css">
      <meta name="viewport" content="width=900px,height=480px, initial-scale=1">
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <script src="/ide/mz/js/materialize.js"></script>
      <script src="/ide/cm/lib/codemirror.js"></script>
      <link rel="stylesheet" href="/ide/cm/lib/codemirror.css">
      <script src="/ide/cm/mode/perl/perl.js"></script>
      <link rel="stylesheet" href="/ide/cm/theme/monokai.css">
      <link rel="stylesheet" href="/ide/css/lc.css">
      <script src="https://cdn.rawgit.com/jquery/esprima/2.7.2/esprima.js"></script>
    <script src="/ide/perl/Perlito5.js" type="text/javascript"></script> 

</head> 

<body> 
<?php include_once '../nav_and_sidebar.php';?>
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

// Here's everything you need to run a python program in skulpt
// grab the code from your textarea
// get a reference to your pre element for output
// configure the output function
// call Sk.importMainWithBody()	
function redirect(){
           document.getElementById("mainButton").onClick = window.location = ("asdfa8201" + <?php echo htmlspecialchars($_GET["id"]) + 1 ?> + "2122sdfasdfid=08012000");
         }
function Continue(){
  var one = 1;
    <?php if($_SESSION['perl']<$_GET['id']){
          $temp = $_GET['id'] + "<script>one;<script/>";
          mysqli_query($con,"UPDATE users SET perl='$temp' WHERE id='$usr_id'");        
            } ?>
      redirect();
}
function onFailure(){
         	document.getElementById("mainButton").innerHTML = "Check Again";
         	document.getElementById("mainButton").style = "width: 9%; position: absolute; bottom: 2%; z-index:5; background-color:red;"

           document.getElementById("hintButton").style= "background-color: #fff; color: #000 ; margin-left: 10%; position: absolute; bottom: 2%; z-index:5;"
         }    
 function giveHint(){
           Materialize.toast('<?php echo explode(",", file_get_contents("tasks/perl/inf/"   . htmlspecialchars($_GET["id"]) . ".txt"))[2] ?>', 16000, "toastHint");
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

        window.p5is_file = function(s) {
                return '';
            };
            p5typeglob_set("Perlito5::IO", "print", function(filehandle, List__) {
                if (filehandle == 'STDOUT' || filehandle == 'main::STDOUT') {
                    var i;
                    for (i = 0; i < List__.length; i++) {
                  document.getElementById('print-result').value += p5str(List__[i]);
                    }
                    return true;
                }
                else {
                    // STDERR
                    var i;
                    List__.push("\n");
                    for (i = 0; i < List__.length; i++) {
                  document.getElementById('log-result').value += p5str(List__[i]);
                    }
                    return true;
                }
            } );
            p5pkg["main"]["v_^O"] = "browser";
            p5pkg["main"]["Hash_INC"]["Perlito5X/strict.pm"] = "Perlito5X/strict.pm";
            p5pkg["main"]["Hash_INC"]["Perlito5X/warnings.pm"] = "Perlito5X/warnings.pm";
            p5pkg["main"]["Hash_INC"]["Perlito5X/feature.pm"] = "Perlito5X/feature.pm";

      var source = text.getValue();
            var pos = 0;
            var ast;
            var match;
      document.getElementById('log-result').value   = "";
      document.getElementById('js-result').value    = "";
        document.getElementById('print-result').value = "";
            try {
                // compile
          document.getElementById('log-result').value += "Compiling.\n";
                var start = new Date().getTime();
                var js_source = p5pkg["Perlito5"].compile_p5_to_js([source]);
                var end = new Date().getTime();
                var time = end - start;
          document.getElementById('log-result').value +=  "Compilation time: " + time + "ms\n";
            document.getElementById('js-result').value  += js_source + ";\n";

                // run
                start = new Date().getTime();
          eval(js_source);
                console.log(result);
                end = new Date().getTime();
                time = end - start;
          document.getElementById('log-result').value += "Running time: " + time + "ms\n";
                p5pkg.CORE.print(["\nDone.\n"]);
            }
            catch(err) {
                document.getElementById('log-result').value += "Error:\n";
                document.getElementById('log-result').value += err + "\n";
                document.getElementById('log-result').value += "Compilation aborted.\n";
            }
    var mypre = document.getElementById("print-result").value;
    console.log(mypre);
   if((mypre).indexOf(<?php echo explode(",", file_get_contents("tasks/perl/inf/"   . htmlspecialchars($_GET["id"]) . ".txt"))[1] ?>)>=0){
   	onSuccess();
   }
   else{
   	if(mypre == undefined){
        Materialize.toast("Oops, you haven't returned anything, make sure you return statement is valid.", 6000, "toastFailure");
        } else {
         	Materialize.toast("Oops, you've returned '" + mypre + "' - that doesn't seem correct", 6000, "toastFailure");
         	 }
         	   onFailure();
   }
}

</script>  
<div class="row">
         <div id="pagecontent">
         <?php if($_GET['id']<$_SESSION['perl']){?>
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

<div class="col s12 m8 l9 lc_con">
<textarea id="print-result" style="color:white; width:40%;float:right;height: 50%;border: 2px solid lightgray; background-color: black" readonly></textarea> 

   

              <textarea id="editor"><?php echo file_get_contents('tasks/perl/code/' . htmlspecialchars($_GET["id"]) . '.txt') ?></textarea>
               <a id="mainButton" class="waves-effect waves-light btn" style="width: 9%; position: absolute; bottom: 2%; z-index:5" onclick="runit()" href="#">Check</a>
               <a id="hintButton" class="waves-effect waves-light btn" style="display:none" onclick="giveHint()" href="#">Hint</a>
               <a id="continueButton" class="waves-effect waves-light btn" style="display:none" onclick="Continue()" href="#">Continue</a>
              <textarea id="log-result" readonly="true" cols="70" rows="5" style="display: none"></textarea><br/>

    
  <textarea id="js-result" readonly="true" cols="70" rows="5" style="display: none"></textarea><br/>

   


		</div>
<!-- If you want turtle graphics include a canvas -->
<div id="mycanvas"></div> 
<script>

 document.getElementById("lc_theory_text").innerHTML = "<?php echo file_get_contents("tasks/perl/theory/"   . htmlspecialchars($_GET["id"]) . ".txt");?>"
 document.getElementById("lc_task_steps").innerHTML = "<?php echo file_get_contents("tasks/perl/task/" . htmlspecialchars($_GET["id"]) . ".txt");?>"
      </script>
<script>
var text = CodeMirror.fromTextArea(editor,
         	{
            lineWrapping:true,
         		lineNumbers:true,
         		firstLineNumber: 1,
         		mode : "perl",
         		theme: "monokai",
         	}
         ); 
</script>
</body> 
</html> 