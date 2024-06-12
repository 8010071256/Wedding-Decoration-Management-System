<html> 
<body>  
<center>
  <div class="container">
<form method="post" name="Registerform" id="Registerform" action="registerload.php" onsubmit="return validationreg()">   
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
      <link rel="stylesheet" href="registrationfile.css">
      <p style="background-image:url('christmas.jpg');">
     
    <hr>

    
    <input type="text" placeholder="Enter First Name" name="Fname" id="Fname" required>
<br>
      
    <input type="text" placeholder="Enter Middle Name" name="Mname" id="Mname" required>
<br>
      
    <input type="text" placeholder="Enter Last Name" name="Lname" id="Lname" required>
<br>
      
    <input type="text" placeholder="Enter Address" name="Aname" id="Aname" required> 
<br> 
   
    <input type="number" placeholder="Enter Mobile Number" name="mnumber" id="mnumber" required>
<br>
   <p>Gender:</p>
  <input type="radio" id="male" name="fav_g" value="MALE">
  <label for="male">MALE</label><br>
  <input type="radio" id="male" name="fav_g" value="FEMALE">
  <label for="female">FEMALE</label><br>
  <input type="radio" id="male" name="fav_g" value="OTHER">
  <label for="other">OTHER</label>
     <br>
<br>
       <label for="startdate">Start from:</label>
  <input type="date" id="startdate" name="startdate">
       <br>
<br>
      <label for="appt">Select a time:</label>
  <input type="time" id="appt" name="appt">
<br>
    <hr>

    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
    <button type="submit" name ="submit" class="registerbtn" id="registerb" onclick="validationreg">Register</button>
     <button type="submit" name ="cancel" class="cancelbtn" id=cencelb" onclick="history.back()">Cancel</button>
  </div>
</center>

   
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script type="text/javascript">

            
    $(document).ready(function(){
$('#registerb').click(function(){
var gender=$('#male').val();

if ($("#male:checked").length == 0){
alert("select gender")
return false;
}

});
});                      
        </script>
       
 <script>  
            function validationreg()  
            {  
                  
                var id=document.f1.Fname.value;  
                var ps=document.f1.Mname.value; 
                var ln=document.f1.Lname.value;
                var an=document.f1.Aname.value;
                var mn=document.f1.mnumber.value;
                
               
             
                if(id.length=="" && ps.length=="" && ln.length=="" && an.length=="" && mn.length=="") {  
                    alert(" fields are empty");  
                    return false;  
                }  
                else  
                {  
                    if(id.length=="") {  
                        alert("Enter first Name");  
                        return false;  
                    }   
                    if (ps.length=="") {  
                    alert("Enter middle name");  
                    return false;  
                    }  
                      if (ln.length=="") {  
                    alert("Enter last name");  
                    return false; 
                      }
                     if (an.length=="") {  
                    alert("Enter Address");  
                    return false; 
                      }
                     if (mn.length=="") {  
                    alert("Enter Mobile Number");  
                    return false; 
                      }
                     if (gn.length=="") {  
                    alert("Enter gender");  
                    return false; 
                      }
                  
                     if (sd.length.setDate=="") {  
                    alert("select start date");  
                    return false; 
                      }
                     if (td.length.setDate=="") {  
                    alert("select end date");  
                    return false; 
                      }
                     if (ti.length.getTime=="") {  
                    alert("select Time");  
                    return false; 
                      }
                } 
                  
            }  
        </script>  
      
 
</form>
</body>
</html>