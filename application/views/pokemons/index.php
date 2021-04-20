<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Ajax Pokemon</title>
    <style>
        .logo{
            width:5rem;
        }

        nav {
            background: #b6040d
            -webkit-box-shadow: 0px 11px 5px -4px rgba(182,4,13,1);
            -moz-box-shadow: 0px 11px 5px -4px rgba(182,4,13,1);
            box-shadow: 0px 11px 5px -4px rgba(182,4,13,1);
        }

        body {
            background: #d8040f;
        }

        .pokemon-container{
            width: 18rem;
            /* background:url('https://wallpaperaccess.com/full/24936.jpg') no-repeat -400px -450px; */
            background:url('https://www.pngitem.com/pimgs/m/2-25193_pokemon-ball-transparent-background-transparent-background-pokeball-png.png') no-repeat -200px -230px;
        }
        .pokemon-container img{
            transition: transform .2s; /* Animation */
            /* width:70%; */
        }
        
        .pokemon-container img:hover{
            /* width:200px */
            transform: scale(1.1);
        }
    </style>
  </head>
  <body>
 

<!-- As a heading -->
<nav class="navbar navbar-light mb-5">
  <!-- <span class="navbar-brand mb-0 h1">Navbar</span> -->
  <div class="container">
    <img src="https://www.pinclipart.com/picdir/big/379-3791327_pokemon-cliparts.png" class="navbar-brand mb-0 h1 img-fluid logo" alt="">
  </div>
</nav>

    <div class="container-fluid">
        <div class="row pokemons pl-3"></div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <script>

        function capitalizeFirstLetter(string) {
        return string.charAt(0).toUpperCase() + string.slice(1);
        }

        $(document).ready(function(){
            let html = "";
            for(let i = 1; i <= 150; i++){
                $.get( `https://pokeapi.co/api/v2/pokemon/${i}`, function( data ) {
                    html += `<div class="col-md-3 mb-5">`;
                    html += `   <div class="card pokemon-container" style="">`;
                    html += `       <img src="${data.sprites.other[`official-artwork`].front_default}" class="img-fluid" alt="${data.name}">`;
                    html += `       <div class="card-body">`;
                    html += `           <h5 class="card-title text-center ">${capitalizeFirstLetter(data.name)}</h5>`;
                    html += `       </div>`;
                    html += `   </div>`;
                    html += `</div>`;       
                    console.log(data.sprites.other[`official-artwork`].front_default);
                    $(".pokemons").html(html);
                }, "json" );

           }
           
        });
    </script>
  </body>
</html>