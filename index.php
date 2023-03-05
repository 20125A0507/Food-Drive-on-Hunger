<html>
<style>
a{
    text-decoration:none;
}
body{
    background:url('https://iskcondwarka.org/backend/editorFileUploads/images/Feeding-the-Poor---Is-this-Charity-worthy.jpg');
    height: 100%; 
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    background-color:#c8e0eb;
    animation-name: couleurfond;
    animation-duration: 20s;
    animation-delay: 0s;
    animation-iteration-count: infinite;
}

#cercle{
    width:700px;
    height:150px;
    border-radius:100px;
    background-color:white;
    align:center;
}
@keyframes positioncercle {
    0%{top:150px;}
    50%{top:300px;}
    100%{top:150px;}
}
#cercle p{
    font-family:'Courier New', monospace;
    font-weight:100;
    color:#c8e0eb;
    font-size: 3em;
    text-align:center;
    margin:auto;
    line-height:150px;
    animation-name: couleurtxt;
    animation-duration: 20s;
    animation-delay: 0s;
    animation-iteration-count: infinite;
    
}

#barrereseaux{
  position: relative;;
    display:flex;
    flex-direction: column;
    flex-direction: wrap;
    width:auto;
    float: right;
    right: 15px;;
    height:100%;
    align-content:space-around;
    position:fixed;
    bottom:20px;
  top:15px;
}

#a1{
    margin:auto;
    background-color:white;
    padding:1em;
    width:80px;
    height:80px;
    text-align:center;
    margin:auto;
    line-height:80px;
    text-decoration: none;
    border-radius:100px;
    color:black;
    font-family:'Courier New', monospace;
    font-weight:100;
    animation-name: animres;
    animation-duration: 3s;
    animation-delay: 0s;
    animation-iteration-count: infinite;
}
#a2{
    margin:auto;
    background-color:white;
    padding:1em;
    width:80px;
    height:80px;
    text-align:center;
    margin:auto;
    line-height:80px;
    text-decoration: none;
    border-radius:100px;
    color:black;
    font-family:'Courier New', monospace;
    font-weight:100;
    animation-name: animres;
    animation-duration: 3s;
    animation-delay: 0.8s;
    animation-iteration-count: infinite;
}
#a3{
    margin:auto;
    background-color:white;
    padding:1em;
    width:80px;
    height:80px;
    text-align:center;
    margin:auto;
    line-height:80px;
    text-decoration: none;
    border-radius:100px;
    color:black;
    font-family:'Courier New', monospace;
    font-weight:100;
    animation-name: animres;
    animation-duration: 3s;
    animation-delay: 1.7s;
    animation-iteration-count: infinite;
}
#a4{
    margin:auto;
    background-color:white;
    padding:1em;
    width:80px;
    height:80px;
    text-align:center;
    margin:auto;
    line-height:80px;
    text-decoration: none;
    border-radius:100px;
    color:black;

    font-family:'Courier New', monospace;
    font-weight:100;
    animation-name: animres;
    animation-duration: 3s;
    animation-delay: 2.5s;
    animation-iteration-count: infinite;
}


a{
    animation-name: couleurtxt;
    animation-duration: 20s;
    animation-delay: 0s;
    animation-iteration-count: infinite;
    transition:0.5s;
}

a:hover{
    opacity:0.7;
}

#Bienvenue{
    width:auto;
    height:auto;
    color:white;
    font-family:'Arial Narrow Bold', sans-serif;
    font-weight:900;
    font-style: italic;
    font-size:2em;
    line-break: 15px;
    line-height: 200x;
    margin:auto;
}

#move{
    position:absolute;
    display:flex;
    flex-direction: column;
    flex-wrap: wrap;
    align-items: center;
    width:auto;
    height:auto;
    top:auto;
    left: 50%;
    transform: translate(-50%);
    animation-name: positioncercle1;
    animation-duration: 20s;
    animation-delay: 0s;
    animation-iteration-count: infinite;
    text-align:center;
}


@keyframes positioncercle1 {
    0%{top:2vh;}
    50%{top:12vh;}
    100%{top:2vh;}
} 

@keyframes couleurfond {
    0%{background-color:#c8e0eb;}
    25%{background-color:#c8cfeb;}
    50%{background-color:#ebc8da;}
    75%{background-color:#c8ebe2;}
    100%{background-color:#c8e0eb;}
}
@keyframes couleurtxt {
    0%{color:#a0c7da;}
    25%{color:#a2acd4;}
    50%{color:#cc9bb4;}
    75%{color:#9bd1c4;}
    100%{color:#98b9c9;}
}
@keyframes animres {
    0%{width:80px;
        height:80px;;}
    50%{width:90px;
        height:90px;}
    100%{width:80px;
        height:80px;}
}
@media (max-width:800px) {
    @keyframes animres {
        0%{width:40px;
            height:40px;;}
        50%{width:50px;
            height:50px;}
        100%{width:40px;
            height:40px;}
    }
    #Bienvenue{
        font-size:1em;
    }
    #barrereseaux a{
        font-size:0.7em;
        padding:1em;
        line-height:45px;
    }
}
</style>
<body>
<?php
        include("login.php");
?>

<div id='move'>
 <div id='cercle'>
 <a><p>Food Drive For Hunger</p></a></div>

 </div>
 <section id='barrereseaux'>
    <a id='a1' href="<?php echo $client->createAuthUrl(); ?>">Donate</a>
    <a id='a2' href="volunteer.html">volunteer</a>
    <a id='a3' href="https://api.whatsapp.com/send?phone=+919177048090">CONTACT</a>  
    <a id='a4' href="aboutus.html">About Us</a>
    

 </section>
</body>
</html>
