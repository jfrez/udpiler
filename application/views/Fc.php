<? include_once("header.php");?>

<body class="body_home slider">
 <link rel="stylesheet" href="//codemirror.net/lib/codemirror.css">
    <script src="http://codemirror.net/lib/codemirror.js"></script>
    <script src="http://codemirror.net/mode/clike/clike.js"></script>
    <script src="http://codemirror.net/addon/selection/active-line.js"></script>
<script src="jquery/jquery.textarea-expander.js"></script>
<style>
#noty{
  width: 100%;

}
#content{
margin:1%;
width:48%;
min-width:530px;
float:left;
}
#code2{
width:100%;
height:600px;
}
.ex{
background-color: white

}
</style>

    <!-- Wrapper starts here -->
	<div id="wrapper">
	          <div class="container">
		<form action="<?php echo base_url(); ?>?/ChallengeHandler/MCanswer/1" method="POST">
		 <h2 class="demo-section-title"><?=$challenge['title']?></h2>
                    <div class="row">
		    <div class="col-md-8">
			<p><?=$challenge['description']?></p>		<input type="hidden" name="ch" value="<?=$challenge['id']?>"/>	
			</div>


		    </div> <!-- /row -->
                    <div class="row">
		    <div class="col-md-8">
<textarea name="code" id="code2" rows="30" style="">

   #include <iostream>
   using namespace std;

   int main()
   {
      cout << "Hola Mundo"; 
      return 0;
   }
</textarea>

<textarea id="input" rows="1" placeholder="Entrada de texto">
</textarea>
 <p id="file"></p> 
<div  id="noty"></div>
<script type="text/javascript">$("#input").TextAreaExpander();</script>
<button class="btn btn-primary" onClick="compile();" style="float:left;">Ejecutar</button>

		   </div> <!-- /row -->
		    </div> <!-- /row -->
	
	<hr /> 
                    <div class="row">
		   		<div class="col-xs-3">
		        	  <input type="submit" class="btn btn-block btn-lg btn-primary" value="Check">
			        </div> 
		


			</div> <!-- /row --> 
		</form>
	</div>
	</div>
	<!-- wrapper ends here -->


<script>
$(document).ready(function() {
var editor= CodeMirror.fromTextArea(document.getElementById("code2"), {     
  styleActiveLine: true,
     lineNumbers: true,
      matchBrackets: true,
      mode: "text/x-csrc",
  lineWrapping: true

            });
editor.setSize("100%","370px");
function compile(){
editor.save();

$.ajax({
type:"post",
url:"code.php",
data:{code:$("#code2").val(),input:$("#input").val()},
success: function(data){
$("#matrix").html(data);

editor.operation(function(){
    for (var i = 0; i < widgets.length; ++i)
      editor.removeLineWidget(widgets[i]);
  });
    widgets.length = 0;


//$( "#matrix" ).dialog( "open" );
var i=data.indexOf("error");
var error =false;

while(i>0){

var str =data.substr(i-10,i );
var arr=str.match(/[0-9]*/g);
var n;
  for(var j =0;j<arr.length;j++){
    if(parseInt(arr[j])>0){
    n = parseInt(arr[j])-2;
    break;
    }
  }

var line = n;

var x = i;
i=data.indexOf("error",x+1);
var f = i>0?i:data.length;
var txt = data.substr(x,f)

var msg = document.createElement("div");
     
      msg.appendChild(document.createTextNode(txt));
      msg.className = "alert alert-error";
widgets.push(editor.addLineWidget(line, msg));
error=true;
}

if(!error) noty(data);
else noty("Errores encontrados");
save();
}
});
}
function compile2(){
editor.save();
save();
$.ajax({
type:"post",
url:"code.php",
data:{code:$("#code2").val(),input:$("#input").val()},
success: function(data){
$("#matrix").html(data);
matrix();
}
});
}
function debug(){
editor.save();
$.ajax({
type:"post",
url:"debug.php",
data:{code:$("#code2").val(),input:$("#input").val()},
success: function(data){
$("#matrix").html(data);
$( "#matrix" ).dialog( "open" );
}
});
}
function notyappend(txt){

noty($("#txt").html()+txt);

}
function noty(txt){

$("#noty").html('<div class="alert alert-success" style="width:93%; margin-top:0; z-index:99000;">  <button type="button" class="close" data-dismiss="alert">&times;</button><p id="txt">'+txt+'</p></div>');

}
function save(){
         $.ajax({
                url:"http://www.udpiler.cl/api/index.php?/delivery/save2",
                                  contentType: "application/x-www-form-urlencoded;charset=utf-8",
                data:{
                        code:encodeURIComponent($("#code2").val()),
                                                last:lastcode

                },
                type:"post",
                success: function(data){
console.log(data);
                                lastcode=data;

             notyappend("<hr>Guardado en <a href='http://www.udpiler.cl/?save="+data+"'>http://www.udpiler.cl/?save="+data+"</a>");
                savecode = data;
                }


                });


}

});


</script>

</body>
</html>
