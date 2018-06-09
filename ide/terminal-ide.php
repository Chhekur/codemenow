<html> 
<head> 
 <title> Codemenow | <?php echo explode(",", file_get_contents("tasks/python/inf/"   . htmlspecialchars($_GET["id"]) . ".txt"))[0] ?> </title>
 <script src="/ide/js/jquery-1.12.0.min.js"></script>
      <link rel="stylesheet" href="/ide/mz/css/materialize.min.css">
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <script src="/ide/mz/js/materialize.js"></script>
      <script src="/ide/cm/lib/codemirror.js"></script>
      <link rel="stylesheet" href="/ide/cm/lib/codemirror.css">
      <link rel="stylesheet" href="/ide/css/lc.css">
      

</head> 

<body> 

<script type="text/javascript"> 
           
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
    <?php if($_SESSION['cplusplus']<$_GET['id']){
          $temp = $_GET['id'] + "<script>one;<script/>";
          mysqli_query($con,"UPDATE users SET cplusplus='$temp' WHERE id='$usr_id'");        
            } ?>
      redirect();
}
function onFailure(){
         	document.getElementById("mainButton").innerHTML = "Check Again";
         	document.getElementById("mainButton").style = "width: 9%; position: absolute; bottom: 2%; z-index:5; background-color:red;"

           document.getElementById("hintButton").style= "background-color: #fff; color: #000 ; margin-left: 10%; position: absolute; bottom: 2%; z-index:5;"
         }    
 function giveHint(){
           Materialize.toast('<?php echo explode(",", file_get_contents("tasks/python/inf/"   . htmlspecialchars($_GET["id"]) . ".txt"))[2] ?>', 16000, "toastHint");
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
   var hasSuccess = false;
   var prog = text.getValue();
   var mypre = document.getElementById("output"); 
   mypre.innerHTML = ''; 
   Sk.pre = "output";
   Sk.configure({output:outf, read:builtinRead}); 
   (Sk.TurtleGraphics || (Sk.TurtleGraphics = {})).target = 'mycanvas';
   var myPromise = Sk.misceval.asyncToPromise(function() {
       return Sk.importMainWithBody("<stdin>", false, prog, true);
   });
   if((mypre.innerHTML).indexOf(<?php echo explode(",", file_get_contents("tasks/python/inf/"   . htmlspecialchars($_GET["id"]) . ".txt"))[1] ?>)>=0){
   	onSuccess();
   }
   else{
   	if(mypre.innerHTML == undefined){
        Materialize.toast("Oops, you haven't returned anything, make sure you return statement is valid.", 6000, "toastFailure");
        } else {
         	Materialize.toast("Oops, you've returned '" + mypre.innerHTML + "' - that doesn't seem correct", 6000, "toastFailure");
         	 }
         	   onFailure();
   }
   myPromise.then(function(mod) {
       console.log(mypre.innerHTML);
        
              },
       function(err) {
       console.log(err.toString());
   });


  
} 

</script>  
<div class="row">
         <div class="col s12 grey darken-4 z-depth-4 lc_head">
            <h6 style="color:#000; float:left;  font-weight:400;"><a style="color:#fff;" href="index.php"><b>LearnCode.edu</b>Learn to code, for free</a></h6>
            <h6 style="color:#eeeeee; float:right; font-weight:400;" class=> <?php echo explode(",", file_get_contents("tasks/python/inf/" . htmlspecialchars($_GET["id"]) . ".txt"))[0] ?>Return to Selection Page</a></h6>
         </div>
         <div id="pagecontent">
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



                  <script>
            (function (i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date(); a = s.createElement(o),
                m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
            })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

            ga('create', 'UA-53263543-1', 'auto');
            ga('send', 'pageview');
        </script>
        <link href="/ide/terminal/src/vtortola.ng-terminal.css" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Architects+Daughter" rel="stylesheet" type="text/css">
        
    
   
    <body ng-app="ng-terminal-example">
        
                           
                <div ng-controller="console" ng-show="theme == 'vintage'">
                    <terminal style="color:white;"></terminal>
                </div>
                  
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.21/angular.js"></script>
        <script src="/ide/terminal/src/vtortola.ng-terminal.js"></script>
        <script src="/ide/terminal/example/example.command.tools.js"></script>
        <script src="/ide/terminal/example/example.js"></script>
        <script src="/ide/terminal/example/example.command.implementations.js"></script>
        <script src="/ide/terminal/example/example.command.filesystem.js"></script>

               <a id="mainButton" class="waves-effect waves-light btn" style="width: 9%; position: absolute; bottom: 2%; z-index:5" onclick="runit()" href="#">Check</a>
               <a id="hintButton" class="waves-effect waves-light btn" style="display:none" onclick="giveHint()" href="#">Hint</a>
               <a id="continueButton" class="waves-effect waves-light btn" style="display:none" onclick="Continue()" href="#">Continue</a>
            


		</div>
<!-- If you want turtle graphics include a canvas -->
<div id="mycanvas"></div> 
<script>

 document.getElementById("lc_theory_text").innerHTML = "<?php echo file_get_contents("tasks/python/theory/"   . htmlspecialchars($_GET["id"]) . ".txt");?>"
 document.getElementById("lc_task_steps").innerHTML = "<?php echo file_get_contents("tasks/python/task/" . htmlspecialchars($_GET["id"]) . ".txt");?>"
      </script>
<script>
var text = CodeMirror.fromTextArea(editor,
         	{
         		lineNumbers:true,
         		firstLineNumber: 1,
         		mode : "python",
         		theme: "monokai",
         	}
         ); 
</script>
</body> 

</html> 