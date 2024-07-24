<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blood Stock</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <style>
    body {
  font-family: "Arial", sans-serif;
  background-color: #f2f2f2;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  margin: 0;
}

.container {
  width: 100%;
  max-width: 400px;
}

.login-card {
  background-color: #fff;
  border-radius: 8px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  padding: 20px;
  text-align: center;
}

.login-card h2 {
  margin-bottom: 20px;
  color: #333;
}

.login-card form {
  display: flex;
  flex-direction: column;
}

.login-card label {
  text-align: left;
  margin-bottom: 8px;
  color: #555;
}

.login-card input {
  padding: 10px;
  margin-bottom: 16px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  width: 100%;
  background-color: #D3D3D3;
}

.login-card button {
  background-color: #4caf50;
  color: #fff;
  padding: 10px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

    </style>
  <body>
  <div class="container">
  <div class="login-card">
    <form action="donateview.php">
      <label>Fullname</label>
      <input type="text" name="s1" placeholder="Full name" required>
      <label>Age</label>
      <input type="text" name="s2" placeholder="Enter age" required>
      <label>Blood Group</label>
      <input type="text" name="s3" placeholder="Enter blood group" required>
      <label>Unit</label>
      <input type="text" name="s4"placeholder="Units in ml" required>
      <label>Disease (if any)</label>
      <textarea cols="30"  name="s5" required>  
</textarea>
<label> Request Date</label>
      <input type="text" name="s6"placeholder="DD/MM/YY" required>
    
      <button type="submit">Donate</button>
    </form>
  </div>
</div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>



    
</body>
</html>