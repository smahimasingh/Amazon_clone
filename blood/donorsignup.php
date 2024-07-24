<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<style>
  body {
    font-family: Calibri, Helvetica, sans-serif;
    background-color: #950303;
  }

  .container {
    padding: 50px;
    background-color: white;
    margin-left: 0px;
  }

  input[type=text],
  input[type=password],
  textarea {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
  }

  input[type=text]:focus,
  input[type=password]:focus {
    background-color: orange;
    outline: none;
  }

  div {
    padding: 10px 0;
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
    background: #fcfcfc;
  }
</style>

<body>
  <form action="donorview.php">
    <div class="container">
      <center>
        <h1> Register as a Donor </h1>
      </center>
      <hr>
      <label> Full name </label>
      <input type="text" name="d1" placeholder="Full name" size="25" required />
      <label> Username </label>
      <input type="text" name="d2" placeholder="Please enter username" size="25" required />

      <div>
        <label>
          Gender
        </label><br>
        <input type="radio" value="Male" name="d3" checked> Male
        <input type="radio" value="Female" name="d3"> Female
        <input type="radio" value="Other" name="d3"> Other

      </div>
      <div>
        <label> Date of Birth</label><br>
        <input type="text" name="d4" placeholder="dd/mm/yyyy">
      </div>
      <label>
        Phone
      </label>
      <input type="text" placeholder="Enter Phone number" name="d5" required>
      <label for="email">Email</label>
      <input type="text" placeholder="Enter Email" name="d6" required>
      <label> Password</label>
      <small><input type="password" name="d7" placeholder="*******" /></small>
      <label> Confirm Password </label>
      <small><input type="password" name="d8" placeholder="*******" /></small>
      <br><br>
      <button type="submit" class="registerbtn">Register</button>
  </form>
</body>

</html>