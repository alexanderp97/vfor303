<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8" />
    <title>How to Get JSON Data from PHP Script using jQuery Ajax by CodexWorld</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="getUser.js">
    </script>
</head>
<body background="background.png">
<center>
<h1 id="demo" onmouseover="mouseOver()" onmouseout="mouseOut()">Fetch User Details via Ajax using jQuery, PHP & MySQL</h1>
<input type="text" id="user_id" placeholder="id number"
       style="height: 50px; width: 120px; left: 250; top: 200; font-size: 25px;" />
<input width="160" height="100" type="button" id="getUser" value="Get Details"
       style="height: 50px; width: 120px; left: 250; top: 200; font-size: 20px;" />
<div class="user-content" style="display: none;">
    <h4>User Details</h4>
    <p>Name: <span id="userName"></span></p>
    <p>Email: <span id="userEmail"></span></p>
    <p>Phone: <span id="userPhone"></span></p>
    <p>Register Date: <span id="userCreated"></span></p>
</div>

<div id='debug'>
</div>
    <img onmouseover="bigImg(this)" onmouseout="normalImg(this)" border="0" src="smiley.gif" alt="Smiley" width="32" height="32">
    <script>
        function bigImg(x) {
            x.style.height = "64px";
            x.style.width = "64px";
        }

        function normalImg(x) {
            x.style.height = "32px";
            x.style.width = "32px";
        }
        function mouseOver() {
            document.getElementById("demo").style.color = "red";
        }

        function mouseOut() {
            document.getElementById("demo").style.color = "black";
        }
    </script>
</center>
</body>
</html>