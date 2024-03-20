<!DOCTYPE html>
<head>
    <meta name="viewport" content="with=device-width , initial-scale=1.0">
        <title>Elden Ring sample</title>
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        
        <link href="https://fonts.googleapis.com/css2?family=Gwendolyn:wght@400;700&family=Lavishly+Yours&family=Mooli&display=swap" rel="stylesheet">

        <link href="https://fonts.googleapis.com/css2?family=Mooli&display=swap" rel="stylesheet">

</head>

<body>
<section class="header">
        <nav>
            <div class= "logoround">
                <a href="index.php"><img src="../images/logoelden.jpg" ></a>
            </div>
            <div class="nav-links" id="navLinks">
                <i class="fa-solid fa-circle-xmark" onclick="hidemenu()"></i>
                
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="https://bandainamco.lnk.to/Elden_Ring_ST">Music</a></li>
                    <li><a href="art.php">Arts</a></li>
                    <li><a href="shop.php">shop</a></li>
                    
                    <li><a href="programs.php">Programs</a></li>
                    
                </ul>

            </div>
        
    </section>
    <div class="full-img" id="fullImgBox">
        <img src="../images/art1.jpg" id="fullImg">
            <span onclick="closeFullImg()">X</span>
    </div>
    <div class="gallery">
        <img src="../images/art1.jpg" onclick="openFullImg(this.src)">
        <img src="../images/art2.jpg" onclick="openFullImg(this.src)">
        <img src="../images/art3.jpg" onclick="openFullImg(this.src)">
        <img src="../images/art4.jpg" onclick="openFullImg(this.src)">
        <img src="../images/art5.jpg" onclick="openFullImg(this.src)">
        <img src="../images/art6.jpg" onclick="openFullImg(this.src)">
        <img src="../images/art7.jpg" onclick="openFullImg(this.src)">
        <img src="../images/art8.jpg" onclick="openFullImg(this.src)">
        <img src="../images/art 9.jpg"onclick="openFullImg(this.src)">
        <img src="../images/dlcnew.gif"onclick="openFullImg(this.src)">
        <img src="../images/placidusax.png"onclick="openFullImg(this.src)">


    </div>
<script>
    var fullImgBox = document.getElementById("fullImgBox")
    var fullImg = document.getElementById("fullImg")
    function openFullImg(pic){
        fullImgBox.style.display = "flex"
        fullImg.src = pic
    }
    function closeFullImg(){
            fullImgBox.style.display = "none";
    }
</script>    


</body>