<html>
<body>
<form method="post" name="contactform" id="contactform" action="contactData.php" onsubmit="return validatecontact()">   
<link rel="stylesheet" href="registrationfile.css">
<div class="container">
  <div style="text-align:center">
    <h2>Contact Us</h2>
    <p>leave us a message:</p>
  </div>
  <div class="row">
    <div class="column">
      <img src="christmas.jpg" style="width:100%">
    </div>
    <div class="column">
        <label for="fname">First Name</label><br>
        <input type="text" id="fname" name="firstname" placeholder="Your name.."><br>
        <label for="lname">Last Name</label><br>
        <input type="text" id="lname" name="lastname" placeholder="Your last name.."><br>
        <label for="country">Select State</label>
        <select id="country" name="state">
          <option value="australia">Maharashtra</option>
          <option value="canada">Goa</option>
          <option value="usa">Rajsthan</option>
        </select><br>
        <label for="subject">Subject</label><br>
        <textarea id="subject" name="message" placeholder="Write something.." style="height:170px"></textarea>
         <button type="submit" name ="submit" class="registerbtn" id="registerc">Share</button>
         <button type="cancel" name ="cancel" class="cancelbtn" id="cancelb" onclick="history.back()">Cancel</button>
      </form>
<script>
function validationcontact()  
            {  
                  
                var id=document.f1.firstname.value;  
                var ps=document.f1.lastname.value; 
                var ln=document.f1.state.value;
                var an=document.f1.subject.value;
                
                
               
             
                if(id.length=="" && ps.length=="" && ln.length=="" && an.length=="" ) {  
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
                    alert("Enter last name");  
                    return false; 
                      }
                     if (ln.length=="") {  
                    alert("select state");  
                    return false; 
                      }
                     if (an.length=="") {  
                    alert("Enter your Description");  
                    return false; 
                      }
                      
            }  
        </script>  
    </div>
  </div>
</div>
</body>
</html>