<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
 * {
        font-family: 'Poppins', sans-serif;
        margin: 0;
        padding: 0;
    }

    body{
        background: url(../img/fondo.jpg) no-repeat center top;
        background-size: cover;

    }
    .navbar {
        position: fixed;
        bottom: 0;
        top: 0;
        left: 0;
        height: 100%;
        background-color: burlywood;
        width: 100px;
        display: flex;
        flex-direction: column;
        justify-content: flex-start;
        float: left;
        margin-bottom: 45px;
        border: 1px solid black;
        
    }

    .navbar a {
        display: flex;
        align-items: center;
        color: transparent;
        /* Hacemos el texto transparente para que no se muestre */
        padding: 10px;
        text-decoration: none;
        transition: all 0.1s ease-in-out;
        /* Agregamos una transición para suavizar el efecto */
        
    }

    .navbar a img {
        width: 30px;
        height: 30px;
        margin-right: 10px;
    }

    .navbar a:hover {
        background-color: #555;
        color: #fff;
        /* Cambiamos el color del texto al pasar el cursor sobre el enlace */
    }

    .navbar.expanded {
        width: 200px;
    }

    .content {
        /* margin-top: 45px;
        margin-left: 100px;
        width: calc(100% - 100px); */
            position: absolute;
			bottom: 0;
			left: 207px;
            right: 207px;
			width: 145vh;
			height: 100vh;
            
			background-color: #333;
			border-radius: 10px;
			border: 2px solid #fff;
            display: flex;
            align-items: center;
            justify-content: center;

        
    }

    .top-bar {
        background-color: #333;
        height: 74.8px;
        width: 100%;
        position: fixed;
        top: 0;
        left: 0;
        z-index: 9999;
        margin-left: 97px;
        display: flex;
        align-items: center;
        justify-content: center;
    } 

    .nav-primary{
        margin-top: 0;
    }
   
    .nav-foot a img{
        border-radius: 20px;
        
    }
    
    .nav-foot{
        margin-top: 370px;
    }
            
    .nav-logo {
        width: 90px;
        height: 64px;
        border: 5px solid #333;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    img {
        height: 70px;
        width: 70px;
    }

    .nav-element{
        margin-top: 0;
    }

   

    .end-nav a{
       margin-left: 950px;
    }

    .log{
        height: 30px;
        width: 30px;
    }
    
    .log:hover{
        border-radius: 5px;
        background-color: red;
        fill: red;
    }
  
    .container1{
        padding: 70px;
        border: 10px solid red;
        
    }

    </style>
    <title>Document</title>
</head>
<body>
        <div class="top-bar">
            
            <div class="end-nav">
                <a href="logout.php?logout=true>">    
                    <img class="log" src="img/logout.svg">
                </a>
            </div>
            
        </div>
        
        <div class="navbar">
            <div class="nav-logo">
                <img src="img/logo.png" alt="" srcset="">
            </div>

            <div class="nav-primary">
                <a href="#"><img src="images/house.svg">Home</a>
            </div>


            <div class="nav-element">
                <a class="location" href="#"><img src="images/location.svg" alt="" srcset="">Location</a>
            </div>
            

            <div class="nav-element">
                <a href="#"><img src="images/photos.svg" alt="" srcset="">Gallery</a>
            </div>


            <div class="nav-foot">
                <a href="#"><img src="images/user.svg" alt="" srcset="">User</a>
            </div>

            
        </div>

        <div class="content">
            <div class="container1">
             Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo qui minima sequi expedita natus incidunt ipsa illo facere, molestiae mollitia, corporis enim quae nobis a magni, aut eos suscipit voluptatem.
             <br>
             Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel, inventore nemo iste suscipit facere quisquam consectetur architecto? Dicta optio ullam sit dolores voluptatem cum neque consectetur doloribus maxime earum? Rerum!
             <br>
             Lorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe quidem ea perferendis exercitationem error, blanditiis suscipit molestias repellendus perspiciatis esse ut alias ab earum commodi, quaerat adipisci animi dolores accusamus?
             <br>
             Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cumque aperiam animi tempore cupiditate aliquid. Numquam aperiam aspernatur iusto soluta maxime, beatae consequatur et repellendus sapiente cupiditate cumque a vero harum.
             <br>
             Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, delectus natus earum incidunt magnam quasi, vitae nihil mollitia aperiam quos architecto, itaque assumenda officia nobis? Aut quis ipsam minima officiis.
            </div>

            <div class="container2">
             Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo qui minima sequi expedita natus incidunt ipsa illo facere, molestiae mollitia, corporis enim quae nobis a magni, aut eos suscipit voluptatem.
             <br>
             Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel, inventore nemo iste suscipit facere quisquam consectetur architecto? Dicta optio ullam sit dolores voluptatem cum neque consectetur doloribus maxime earum? Rerum!
             <br>
             Lorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe quidem ea perferendis exercitationem error, blanditiis suscipit molestias repellendus perspiciatis esse ut alias ab earum commodi, quaerat adipisci animi dolores accusamus?
             <br>
             Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cumque aperiam animi tempore cupiditate aliquid. Numquam aperiam aspernatur iusto soluta maxime, beatae consequatur et repellendus sapiente cupiditate cumque a vero harum.
             <br>
             Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, delectus natus earum incidunt magnam quasi, vitae nihil mollitia aperiam quos architecto, itaque assumenda officia nobis? Aut quis ipsam minima officiis.
            </div>
            
        </div>


        <script src="nav.js"></script>
</body>
</html>