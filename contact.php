<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="home.css">
    <title>Gameopedia</title>
    <link rel="stylesheet" href="contact.css">
</head>
<script>let stars = 
    document.getElementsByClassName("star");
let output = 
    document.getElementById("output");
 
// Funtion to update rating
function gfg(n) {
    remove();
    for (let i = 0; i < n; i++) {
        if (n == 1) cls = "one";
        else if (n == 2) cls = "two";
        else if (n == 3) cls = "three";
        else if (n == 4) cls = "four";
        else if (n == 5) cls = "five";
        stars[i].className = "star " + cls;
    }
    output.innerText = "Rating is: " + n + "/5";
}
 
// To remove the pre-applied styling
function remove() {
    let i = 0;
    while (i < 5) {
        stars[i].className = "star";
        i++;
    }
}</script>
<body >
    
    <nav>
        <img src="images/logooo-removebg-preview (1).png" class="logo">
        <h1><div class="title">Gameopedia</div></h1>
        <ul>
            <li><a href="home.html">Home</a></li>
            <li><a href="game.html">Games</a></li>
            <li><a href="photos.html">Photos</a></li>
            <li><a href="top.html">Top People</a></li>
            <li><a href="contact.html" class="active">Rate</a></li>
        </ul>
    </nav>
    <form action="connect.php" method="post" class="form">
        <video src="images/_Floating In Space 4k_.mp4"autoplay loop muted plays-inline class="video" style="position: fixed;"></video>
        <h4 class="h">Your Name:</h4>
        <input type="text" name="name" id="" style="background: transparent; border: 2px solid rgb(247, 0, 255);" required class="inp">
        <h4 class="h">E-mail:</h4>
        <input type="email" name="email" id="" style="background: transparent; border: 2px solid rgb(247, 0, 255);" required class="inp">
        <h4 class="h">Choose game:</h4>
        <select name="game" id="" style="color: rgb(247, 0, 255); background-color: transparent; width: 50%; padding: 1%; font-size: larger; border: 2px solid rgb(247, 0, 255);">
            <option value="fifa">Fifa</option>
            <option value="minecraft">MineCraft</option>
            <option value="valorant">Valorant</option>
            <option value="call of duty">Call Of Duty</option>
            <option value="rocket league">Rocket League</option>
            <option value="fortnite">Fortnite</option>
        </select>
        <h4 class="h">Rate:</h4>
        <div class="card">
            <br />
            <span onclick="gfg(1)"
                  class="star">★
            </span>
            <span onclick="gfg(2)"
                  class="star">★
            </span>
            <span onclick="gfg(3)"
                  class="star">★
            </span>
            <span onclick="gfg(4)"
                  class="star">★
            </span>
            <span onclick="gfg(5)"
                  class="star">★
            </span>
        </div>
        <script src="script.js"></script>
        <button class="button">Submit</button>
    </form>
    <div class="footer">
        <p style="float: left; margin-left: 25%;">Ali Kamareddine - 12131317</p>
        <p style="float: left; margin-left: 4%; margin-right: 3%;">Gameopedia ©</p>
        <p>+96181092171</p>
      </div>
</body>
</html>