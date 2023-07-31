<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
    crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
    crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <title>Admin Panel Blood Donation</title>
</head>

<body data-spy="scroll" data-target="#main-nav" id="home">
  <!-- START HERE -->

<nav class="navbar navbar-expand-sm navbar-dark bg-dark p-0">
    <div class="container">
	<img src="./img/logo.png" class="navbar-brand">
        <!--<a href="index.php" class="navbar-brand">Admin</a>-->
        <button class="navbar-toggler" data-toggle="collapse" data-target="#sam">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar navbar-collapse" id="sam">
            <ul class="navbar-nav ">
                <li class="nav-item px-2">
                    <a href="index.php" class="nav-link active">Dashboard</a>
                </li>
              
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown mr-3">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                    <i class="fas fa-user"></i> Welcom Aman Tripathy
                </a>
                <div class="dropdown-menu">
                    <a href="profile.php" class="dropdown-item">
                        <i class="fas fa-user-circle"></i>Profile
                    </a>
                    <a href="setting.php" class="dropdown-item">
                        <i class="fas fa-cog"></i>Setting

                    </a>
                </div>
                </li>
                <li class="nav-item">
                    <a href="login.php" class="nav-link">
                        <i class="fas fa-user-times"></i>Logout
                    </a>
                </li>
            </ul>
        </div> 
    </div>
    </nav>
	
	
    <!--header-->