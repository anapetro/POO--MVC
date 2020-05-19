<head>
    <title> PHP AP</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        <style>
            .jumbotron{
                background-color: #FF1493;
                border-radius: 100px;
                padding:25PX;
              margin-left: 50px;
              margin-right:50px;
              margin-top:50px;
            }
            #na{
                text-align:center; 
                color: #E2E1DB;
                border-radius: 100px;
            }
            body{          
                 background-color: LightPink; 
                  }

            a{
                color:#FF1493;
            }

           



    </style>
</head>

<div class="jumbotron">
    <h1 id="na"> MVC </h1>
</div>

<nav class="navbar navbar-expand-sm bg-danger navbar-dark">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">MVC </a>
        </div>
        <ul class="nav navbar-nav">
            <li class="active"><a href="index.php?action=inicio">INICIO</a></li>
            <li><a href="index.php?action=producto">PRODUCTOS</a></li>
            <li><a href="index.php?action=empresa">EMPRESA</a></li>
            <li><a href="index.php?action=contactenos">CONTACTENOS</a></li>
        </ul>
    </div>
</nav>