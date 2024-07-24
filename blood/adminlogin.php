<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.container {

    font-family: Arial;
}

.text-block {
  position: absolute;
  bottom: 20px;
  right: 20px;
  color: white;
  padding-left: 20px;
  padding-right: 20px;
}


.card {
    border-radius: 32px;
    width: 400px;
    height: 400px;
    background-color: #ff0000b3;
    display: inline-block;
    margin-top: 120px;
    margin-left: 580px;
}

h2 {
  text-align: center;
  color: #333;
  font-size:35px;
  text-decoration:underline;

}

form {
  display: flex;
  flex-direction: column;
}

input {    padding: 14px;
    margin-bottom: 24px;
    border: 1px solid #ddd;
    border-radius: 10px;
  transition: border-color 0.3s ease-in-out;
  outline: none;
  color: #333;
}

input:focus {
  border-color: #555;
}

button {
  background-color: #3498db;
  color: #fff;
  padding: 10px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  transition: background-color 0.3s ease-in-out;
}

button:hover {
  background-color: #2980b9;
}
.x
{
    background-image:url('https://png.pngtree.com/thumb_back/fh260/back_our/20190621/ourmid/pngtree-blood-donation-art-free-simple-white-banner-image_180424.jpg');
    background-size:cover;
}

label{
    font-size:26px;
    font-weight:bold;

}
h6{
    margin-top:10px;
    font-size:15px;
    text-align:center;
}
</style>
</head>
<body class="x">
<div class="card">
    <h2> Admin Login</h2>
    <form action="adminchk.php">
        <label>Username</label>
      <input type="text" id="username" name="a1" placeholder="Username" required>
      <label>Password</label>
      <input type="password" id="password" name="a2" placeholder="Password" required>
      <button type="submit">Login</button>
      <h6> Forgot Password? <a href="" >Click here. </a></h6>
    </form>
</div>


</body>
</html> 
