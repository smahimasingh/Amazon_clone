<html>

<head>
    <style>
        h2 {
            text-decoration: underline;
            text-align: center;


        }

        .x {
            background-color: rgb(185, 29, 29) !important;
            margin-left: 105px;
            margin-top: 100px;
            width: 570px;
            height: 400px;
            font-weight: bold;
            font-size: 20px;
            border: 2px Solid black;
            text-align: center;
            text-transform: uppercase;
            position: absolute;
            border-radius: 3pc;
        }

        button {
            background-color: transparent;
            border: 2px solid;
            border-radius: 15px;
            width: 120px;
            height: 40px;
            text-transform: uppercase;
            font-weight: 600;
            font-size: 16px;
            cursor: pointer;
        }

        form button:hover {
            background-color: rgb(185, 29, 29);
            color: #fff;
        }

        input {
            height: 40px;
            width: 300px;
            border-radius: 15px;
            padding-left: 15px;
            border: 2px solid #ccc;
            margin-bottom: 20px;
            margin-top: 5px;
            outline: none;
            background-color: #D3D3D3;
        }

        img {
            position: absolute;
            width: 1510px;
            margin-top: -150px;
            margin-left: -8px;
            height: 860px;

        }
    </style>

<body>
    <div class="img">
        <img src="banner.jpg"
            alt="logo">
    </div>
    <div class="x">
        <h2>Donor Login</h2><br>
        <form action="donorchkin.php">
            <label>Username </label>
            <input type="u-name" name="d2" placeholder="Username"><br><br>
            <label> Password</label>
            <input type="p-word" name="d7" placeholder="*******"></label><br><br>
            <button type="submit"> Login </button>
            <h5>Not a donor yet? Register <a href="donorsignup.php">Here.</a></h5>
        </form>
    </div>
</body>

</html>