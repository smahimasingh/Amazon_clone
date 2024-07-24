<!DOCTYPE html>  
<html>  
<head>  
<meta name="viewport" content="width=device-width, initial-scale=1">  
<style>  
body{
  font-family: Calibri, Helvetica, sans-serif;  
  background-color:black;  
}  
.container {  
    padding: 80px;  
  background-color: white;
  margin-left:0px;  
}  
  
input[type=text], input[type=password], textarea {  
  width: 100%;  
  padding: 15px;  
  margin: 5px 0 22px 0;  
  display: inline-block;  
  border: none;  
  background: #f1f1f1;  
}  
input[type=text]:focus, input[type=password]:focus {  
  background-color: orange;  
  outline: none;  
}  
 div {  
            padding: 20px 0;  
         }  
hr {  
  border: 1px solid #f1f1f1;  
  margin-bottom: 25px;  
}  
.registerbtn {  
  background-color: #4CAF50;  
  color: white;  
  padding: 16px 20px;  
  margin: 8px 0;  
  border: none;  
  cursor: pointer;  
  width: 100%;  
  opacity: 0.9;  
}  
.registerbtn:hover {  
  opacity: 1;  
}  
.Select {
    width: 25%;
    padding: 12px;
    border: solid 1px #aaa;
    background: #fcfcfc;}

</style>  
</head>  
<body>  
<form action="reg_sql.php">
    <div class="container"> 
  <center>  <h1> Nutrition Assessment Form </h1> </center>  
  <center> <h2> Personal Details </h2> </center>
  <hr>  
  <label> Full Name </label>   
<input type="text" name="t1" placeholder= "Firstname" size="15" required />   
<label> Email Address </label>   
<input type="text" name="t2" placeholder="Enter Email" required />   
<label> Age </label>    
<input type="text" name="t3" placeholder="Enter no. here" size="25"required />   
<br><br>
<div>  
<label>   
Blood Group:
</label>   
<input type="text" name="t4" placeholder="Blood group" required>  
</div>  
<div>  
<label>   
Gender :  
</label><br>  
<input type="text" name="t5" placeholder="Gender" required> 
  
</div> 
<div>
    <label> Date of Birth</label><br>
    <input type="text" name="t6" placeholder="dd/mm/yyyy">
</div> 
<label>   
Phone :  
</label>    
<input type="text" name="t7" placeholder="phone no." size="10" required>   
Current Address :  
<textarea cols="80" rows="5" placeholder="Current Address" name="t8" value="address" required>  
</textarea>  
<center> <h2> Height and Weight History </h2> </center>
<div>
  <label> Height (Feet and inches): </label> 
  <input type="text" name="t9" placeholder="Enter Height Here" required />  
  <label> Current body weight (Pounds): </label> 
  <input type="text" name="t10" placeholder="Enter Weight Here" required />  
  <label> Desired Body Weight (Pounds): </label> 
  <input type="text" name="t11" placeholder="Enter Weight Here" required />  
  </div> 
  <center> <h2> Nutrition and Fitness Goals </h2> </center>
  <label> What are your Goals?</label>
  <textarea cols="80" rows="5" name="t12" value="goals" required>  
</textarea>   
<center> <h2> Medical History </h2> </center>
<label> Are you currently taking any medications? </label>
<textarea cols="80" rows="5" name="t13" value="goals" required>  
</textarea>
<label> Have you ever had surgery</label>
<textarea cols="80" rows="5" name= "t14" value="goals" required>  
</textarea>
    <button type="submit" class="registerbtn">Register</button>    
</form>  
</body>  
</html> 