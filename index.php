<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="png" href="images/idw.png">
    <title>idw group</title>


    <!-- css file link -->
    <link rel="stylesheet" href="./index.css">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
   <div class="parent">
      <div class="desc">
        <h1 class="text">Recrutement <br> Téléconseillers <br> Maroc</h1>
        <p id="type" ></p>
        <div class="media-container">
          <div class="medias-btn"><a href="https://www.linkedin.com/company/idw-groupe/" target="_blank">
            <img src="ressources/link.png" alt="icone" class="icones">
            </a>
          </div>
          <div class="medias-btn"><a href="https://www.instagram.com/idw.groupe/?igshid=MzRlODBiNWFlZA%3D%3D" target="_blank">
            <img src="ressources/insta.png" alt="icone" class="icones">
            </a>
          </div>
          <div class="medias-btn"><a href="#" target="_blank">
            <img src="ressources/fb.png" alt="icone" class="icones">
            </a>
          </div>
          <div class="medias-btn"><a href="#" target="_blank">
            <img src="ressources/appel.png" alt="icone" class="icones">
            </a>
          </div>
          <div class="medias-btn"><a href="https://www.tiktok.com/@idwgroupe?_t=8d6jXiTvw7Z&_r=1" target="_blank">
            <img src="ressources/tiktok.png" alt="icone" class="icones">
            </a>
          </div>
        </div>
        <button id="init">Oui C`est parti 😊</button>  
        <!-- Oui c'est parti 😊 -->
      </div>
      <div>
        <!-- <img src="bg1.png" alt="" class="bot-img"> -->
      </div>
   </div> 

   <div id="test" style="position: fixed;bottom: 4rem; right: 8rem; display: none;">
    <div class="child" id="chatbot">
        <div class="header">
            <div class="h-child">
                <img src="images/Me for job.jpg" alt="avatar" id="avatar">
                <div>
                <span class="name">Mouad Fanine</span>
                <br>
                <span class="online" style ="color: rgb(2, 140, 94);">online</span>
            </div>
        </div>
        <div>
            <button class="refBtn"><i class="fa fa-refresh"
                onclick="initChat()"></i></button>
        </div>
    </div>

      <div id="chat-box">

      </div>
      <div class="footer">
        <span>powered by @moFanine</span>
      </div> 
   </div>
</div>

<script src="index.js"></script>
</body>
</html>