<!DOCTYPE html>
<html>
<body>
    <form method="post" name="pass" id="pass" action="passData.php" onsubmit="return validateform()">
    <div>
   <center>

<h2>Enter Requriment</h2>

 <link rel="stylesheet" href="registrationfile.css">
  <input type="text" placeholder="Enter Total Guest" id="guest" name="Guest" required><br>
  
  <input type="text" placeholder="Enter Total Chair" id="chair" name="Chair"><br>
 
  <input type="text" placeholder="Enter Total Table" id="table" name="Table" ><br>
  
  <input type="text" placeholder="Enter Total Sound system"id="sound" name="Sound"><br>
  
  <input type="text" placeholder="Enter First menu Item" id="totpass" name="totpass"><br>
  <input type="text" placeholder="Enter Second menu Item" id="totse" name="totse"><br>
   <input type="text" placeholder="Enter Third menu Item" id="totth" name="totth"><br>
<input type="text" placeholder="Enter fourth menu Item" id="totfo" name="totfo"><br>
<input type="text" placeholder="Enter fifth menu Item" id="totfi" name="totfi"><br>
     
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>  
 
   <script>  
function validateform(){  
var name=document.pass.Guest.value;  
var password=document.pass.Chair.value;  
var ot=document.pass.Table.value; 
var totpas=document.pass.Sound.value; 
var totam=document.pass.totpass.value; 
var secondmenu = document.pass.totse.value;
var thirdmenu = document.pass.totth.value;
var fourthmenu = document.pass.totfo.value;
var fifthmenu = document.pass.totfi.value;
   
   
if (name==null || name==""){  
  alert("Enter Total Guest");  
  return false;  
}else if(password==null || password==""){  
  alert("Enter Total Chair");  
  return false;  
  }  
    else if(ot==null || ot==""){  
  alert("Enter Total Table.");  
  return false;  
  }  
    else if(totpas==null || totpas==""){  
  alert("Enter Total Sound system");  
  return false;  
  }  
    else if(totam==null || totam==""){  
  alert("Enter First menu Item");  
  return false;  
  }  
  else if(secondmenu==null || secondmenu==""){  
  alert("Enter second menu Item");  
  return false;  
  }  
 else if(thirdmenu ==null || thirdmenu ==""){  
  alert("Enter third menu Item");  
  return false;  
  }  
else if(fourthmenu ==null || fourthmenu ==""){  
  alert("Enter fourth menu Item");  
  return false;  
  }  
else if(fifthmenu==null || fifthmenu ==""){  
  alert("Enter fifth menu Item");  
  return false;  
  }   
}  
</script>    
     <button type="submit" class="registerbtn" name="save" >Submit</button>
<button type="submit" class="registerbtn" name="cancel" onclick="history.back()">Cancel</button>
   </form>
</center>
</body>
    
</html>

