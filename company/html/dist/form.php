

<?php
  session_start();
  
  require_once("connect.php");
  $loginid =  mysqli_real_escape_string($conn, $_POST['loginid']);
  ?>
<!DOCTYPE html>
<html>
	<head>
		<title>form</title>
		
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>
/*$(document).ready(function(){
    $("fieldset:not(#div1)").hide();
});*/

</script>
<link rel="stylesheet" type="text/css" href="index_stylesheet.css">
		

	</head>
	<body>
		<form method="POST" action="resume.php">
			  <input type="hidden" name="loginid" value="<?php echo $_POST['loginid'] ?>"> 
            <center>  <fieldset class="sectionwrap" id="div9" width="50%">
                   
                        <tr>
                            <td class="labels" style="color:white";>
                                Select Resume Template :
                            </td>
                        </tr>
                        <tr>
                            <td class="labels">
                                
                                <table id="TemplateList" border="0">
		<tr>
			<td><input id="TemplateList_0" type="radio" name="TemplateList" value="1" />
			<label for="TemplateList_0"><img src = "images/template1.JPG" align = "center"/></label>
			</td><td><input id="TemplateList_1" type="radio" name="TemplateList" value="2" />
			<label for="TemplateList_1"><img src = "images/template2.JPG" align = "center"></label>
			</td><td><input id="TemplateList_2" type="radio" name="TemplateList" value="3" />
			<label for="TemplateList_2"><img src = "images/template3.png" align = "center"></label>
			</td><td><input id="TemplateList_3" type="radio" name="TemplateList" value="4" />
			<label for="TemplateList_3"><img src = "images/template4.png" align = "center"></label></td>
		</tr>
	</table>
                           </td>
                        </tr>
                        <tr>
                            <td class="labels">
                                <button type="submit" name="btn" class="btn btn-success" value="Generate Resume" id="btn" />Generate Resume</button>
                            </td>
                        </tr>
                    </table>
                </fieldset></center>  
		</form>
	</body>
</html>
                       
                        
                       