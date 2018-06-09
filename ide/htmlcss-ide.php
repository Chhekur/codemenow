<?php
session_start();
include_once '../dbconnect.php';
$usr_id = $_SESSION['usr_id'];
$result = mysqli_query($con, "SELECT * FROM users WHERE id='$usr_id'");
if ($row = mysqli_fetch_array($result)) {
  $_SESSION['htmlcss'] = $row['htmlcss'];
}
?>
<html> 
<head> 
 <title> Codemenow | <?php echo explode(",", file_get_contents("tasks/htmlcss/inf/"   . htmlspecialchars($_GET["id"]) . ".txt"))[0] ?> </title>
 
      <link rel="stylesheet" href="/ide/mz/css/materialize.min.css">
      <meta name="viewport" content="width=900px,height=480px, initial-scale=1">
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script src="/ide/mz/js/materialize.min.js"></script>
      <script src="/ide/cm/lib/codemirror.js"></script>
      <link rel="stylesheet" href="/ide/cm/lib/codemirror.css">
      <script src="/ide/cm/mode/xml/xml.js"></script>
      <script src="/ide/cm/mode/css/css.js"></script>
      <link rel="stylesheet" href="/ide/cm/theme/monokai.css">
      <link rel="stylesheet" href="/ide/css/lc.css">
      <script src="https://cdn.rawgit.com/jquery/esprima/2.7.2/esprima.js"></script>
      <script src="/ide/phpjs/dist/php.js"></script>
      <script src="/ide/phpjs/dist/php.min.js"></script>

        
</head> 

<body> 
<style type="text/css">body {font-family: "Lato", sans-serif;}

.tablink {
    background-color: #555;
    color: white;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    font-size: 17px;
    width: 25%;
}

.tablink:hover {
    background-color: #777;
}

/* Style the tab content */
.tabcontent {
    color: black;
    display: none;
    padding: 0px;
   
}


</style>
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
    <?php if($_SESSION['htmlcss']<$_GET['id']){
          $temp = $_GET['id'] + "<script>one;<script/>";
          mysqli_query($con,"UPDATE users SET htmlcss='$temp' WHERE id='$usr_id'");        
            } ?>
      redirect();
}
function onFailure(){
          document.getElementById("mainButton").innerHTML = "Check Again";
          document.getElementById("mainButton").style = "width: 9%; position: absolute; bottom: 2%; z-index:5; background-color:red;"

           document.getElementById("hintButton").style= "background-color: #fff; color: #000 ; margin-left: 10%; position: absolute; bottom: 2%; z-index:5;"
         }    
 function giveHint(){
           Materialize.toast('<?php echo explode(",", file_get_contents("tasks/htmlcss/inf/"   . htmlspecialchars($_GET["id"]) . ".txt"))[2] ?>', 16000, "toastHint");
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

   var prog = "<style>"+ textcss.getValue()+"</style>"+texthtml.getValue();
   var mypre = document.getElementById("output"); 
   mypre.innerHTML = ''; 
  document.getElementById("output").innerHTML=prog;

  mypre=prog;
  console.log()
  document.getElementById('output').contentWindow.document.write(prog);
   if(mypre.indexOf(<?php echo explode(",", file_get_contents("tasks/htmlcss/inf/"   . htmlspecialchars($_GET["id"]) . ".txt"))[1] ?>)>=0){
    onSuccess();
   }
   else{
    if(mypre == undefined){
        Materialize.toast("Oops, you haven't returned anything, make sure you return statement is valid.", 6000, "toastFailure");
        } else {
          Materialize.toast("Oops, you've returned '" + mypre.innerHTML + "' - that doesn't seem correct", 6000, "toastFailure");
           }
             onFailure();
   }
}

</script>  
<div class="row">
         <div id="pagecontent">
         <?php if($_GET['id']<$_SESSION['htmlcss']){?>
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
<iframe id="output"  style="background-color:white; float:right;border: 2px solid lightgray;width: 40%;height: 94%"></iframe> 
<button class="tablink" onclick="openCity('html', this, '#272822')" id="defaultOpen">HTML</button>
<button class="tablink" onclick="openCity('css', this, '#272822')" id="defaultOpen">CSS</button>
<div id="html" class="tabcontent">
  <textarea id="editorhtml"><?php echo file_get_contents('tasks/htmlcss/code/' . htmlspecialchars($_GET["id"]) . '.txt') ?></textarea>
</div>

<div id="css" class="tabcontent1">
  <textarea id ="editorcss" ></textarea>
</div>
              
               <a id="mainButton" class="waves-effect waves-light btn" style="width: 9%; position: absolute; bottom: 2%; z-index:5" onclick="runit()" href="#">Check</a>
               <a id="hintButton" class="waves-effect waves-light btn" style="display:none" onclick="giveHint()" href="#">Hint</a>
               <a id="continueButton" class="waves-effect waves-light btn" style="display:none" onclick="Continue()" href="#">Continue</a>
            


    </div>

<!-- If you want turtle graphics include a canvas -->
<div id="mycanvas"></div> 
<script type="text/javascript">

//document.getElementById("defaultOpen1").click();
function openCity(cityName,elmnt,color) {
if(cityName == 'css'){

  document.getElementById("css").click();
}

    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      

      tabcontent[i].style.display = "none";
     }

       tablinks = document.getElementsByClassName("tablink");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].style.backgroundColor = "";


    }
    document.getElementById(cityName).style.display = "block";
    elmnt.style.backgroundColor = color;


}   
document.getElementById("defaultOpen").click();
</script>
<script>

 document.getElementById("lc_theory_text").innerHTML = "<?php echo file_get_contents("tasks/htmlcss/theory/"   . htmlspecialchars($_GET["id"]) . ".txt");?>"
 document.getElementById("lc_task_steps").innerHTML = "<?php echo file_get_contents("tasks/htmlcss/task/" . htmlspecialchars($_GET["id"]) . ".txt");?>"
      </script>
<script>
  var textcss = CodeMirror.fromTextArea(editorcss,
     {
            lineNumbers:true,
            firstLineNumber: 1,
            mode : "css",
            theme: "monokai",
          }
         ); 
  var texthtml = CodeMirror.fromTextArea(editorhtml,
          {
            lineWrapping:true,
            lineNumbers:true,
            firstLineNumber: 1,
            mode : "xml",
            theme: "monokai",
          }
         ); 


</script>
</body> 
</html> 