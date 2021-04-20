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
            width:8rem;
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
            color:#fff;
            /* width: 18rem; */
            /* background:url('https://wallpaperaccess.com/full/24936.jpg') no-repeat -400px -450px; */
            background:url('https://www.pngitem.com/pimgs/m/2-25193_pokemon-ball-transparent-background-transparent-background-pokeball-png.png') no-repeat -230px -230px;
        }
        .pokemon-container img{
            transition: transform .2s; /* Animation */
            /* width:70%; */
        }
        
        .pokemon-container img:hover{
            /* width:200px */
            transform: scale(1.1);
            /* cursor:pointer; */
        }
        .pokemons{
            overflow-y:scroll;
            height:80vh
        }

        .pokedex{
            display:none;
            padding:20px;
            color:#fff;
            background:#FF3E32;
            height:80vh;
            overflow-y:scroll;
            
        }

        .pokedex  img {
            width:50%;
            /* width:200px; */
            /* border-radius:50%; */
            /* background:url('https://www.wallpapertip.com/wmimgs/81-812884_pokemon-pokeball.jpg') no-repeat -1200px -620px; */
            /* background:url('https://www.wallpapertip.com/wmimgs/81-812884_pokemon-pokeball.jpg') no-repeat -150px -120px; */
            
        }

    

        .pokemon-info table {
            color:#fff;
        }

        .pokemon-name,.national-id{
            font-weight:bold;
        }

        .type-bg{
            padding:10px;
            margin-right:10px;
            border-radius:10px;
        }

        .fire{
            background:#c70108;
        }

        .water{
            background:#0EBFE9;
        }

        .grass{
            background:#32CD32;
        }

        .flying{
            background:#8899FF;
        }

        .poison{
            background:#8D4690;
        }

        .bug{
            background:#AABB22;
        }

        .normal{
            background:#BFBFBF;
        }

        .dark{
            background:#352E27;
        }

        .psychic{
            background:#D24F7B;
        }

        .electric{
            background:#FEB820;
        }

        .rock{
            background:#A29045;
        }

        .ground{
            background:#C8A955;
        }

        .fighting{
            background:#813418;
        }

        .ghost{
            background:#4D4D8C;
        }

        .ice{
            background:#6ACFE9;
        }

        .steel{
            background:#8E8CA0;
        }

        .dragon{
            background:#685BB0;
        }

        .fairy{
            background:#E09EDA;
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
        <div class="row ">
            <div class="col-md-8">
                <div class="row pokemons"></div>
            </div>
            <div class="col-md-4 pokedex text-center">
                <h1>Pokedex</h1>
                    <div class="pokemon-info">
                        <img class="pokemon-img" src="https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/other/official-artwork/1.png" alt="">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th>Pokemon Name</th>
                                    <td class="pokemon-name"></td>
                                </tr>
                                <tr>
                                    <th>National №</th>
                                    <td class="national-id"></td>
                                </tr>
                                <tr>
                                    <th>Type</th>
                                    <td class="type-row"><span class="type-bg" style="background: #8CD36A">Grass</span> <span class="type-bg" style="background:#EE99EE">Poison</span></td>
                                </tr>

                                <tr>
                                    <th>Height</th>
                                    <td class="height">7 meters</td>
                                </tr>
                                <tr>
                                    <th>Weight</th>
                                    <td class="weight">69 grams</td>
                                </tr>
                                <tr>
                                    <th>Base experience</th>
                                    <td class="base-experience">64</td>
                                </tr>
                                <tr>
                                    <th>Abilities</th>
                                    <td class="abilities"></td>
                                </tr>
                            </tbody>
                        </table>

                        <h2>Species Specification</h2>
                        <table class="table text-justify">
                            <tbody>
                                <tr>
                                    <th>Description</th>
                                    <td class="description"></td>
                                </tr>
                                <tr>
                                    <th>Base happiness</th>
                                    <td class="base-hapiness"></td>
                                </tr>
                                <tr>
                                    <th>Capture rate</th>
                                    <td class="capture-rate"></td>
                                </tr>
                                <tr>
                                    <th>Color</th>
                                    <td class="color"></td>
                                </tr>
                                <tr>
                                    <th>Evolve from</th>
                                    <td class="evolve-from"></td>
                                </tr>
                                <tr>
                                    <th>Habitat</th>
                                    <td class="habitat"></td>
                                </tr>
                            </tbody>
                        </table>

                        <h2>Base Stats</h2>
                        <table class="table tex-justify">
                            <tr>
                                <td class="details text-right">Hp</td>
                                <td class="hp-base-stat">60</td>
                                <td width="75%">
                                <div class="progress ">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                </td>
                            </tr>
                        </table>
                    </div>
                
            </div>
        </div>
    </div>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <script>

        

        function capitalizeFirstLetter(string) {
        return string.charAt(0).toUpperCase() + string.slice(1);
        }

        function loadSpeciesSpecification(id){
            $.get( `https://pokeapi.co/api/v2/pokemon-species/${id}`, function( pokemon ) {
                $(".description").html(`${pokemon.flavor_text_entries[0].flavor_text}`);
                $(".base-hapiness").html(`${pokemon.base_happiness}`);
                $(".capture-rate").html(`${pokemon.capture_rate} %`);
                $(".color").html(`${pokemon.color.name}`);
                $(".evolve-from").html(`${pokemon.evolves_from_species.name} `);
                $(".habitat").html(`${pokemon.habitat.name} `);
                console.log(pokemon);
            }, "json" );
        }

        function loadOnePokemon(){
            $("img.pokemon").click(function(){
                let index = $(this).attr("data-index");
                console.log(index);
                $.get( `https://pokeapi.co/api/v2/pokemon/${index}`, function( pokemon ) {
                    $(".pokemon-img").attr("src",`${pokemon.sprites.other[`official-artwork`].front_default}`);
                    $(".pokemon-img").attr("alt",`${capitalizeFirstLetter(pokemon.name)}`);
                    $(".pokemon-name").html(capitalizeFirstLetter(pokemon.name));
                    $(".national-id").html(`#${pokemon.id}`);
                    $(".height").html(`${pokemon.height} meters`);
                    $(".weight").html(`${pokemon.weight} grams`);
                    $(".base-experience").html(`${pokemon.base_experience}`);
                    let pokemon_type = "";
                    for(let j = 0; j < pokemon.types.length;j++){
                        pokemon_type += `<span class="type-bg ${pokemon.types[j].type.name}">${capitalizeFirstLetter(pokemon.types[j].type.name)}</span>`;
                    }
                    $(".type-row").html(pokemon_type);

                    let pokemon_abilities = "";
                    for(let j = 0; j < pokemon.abilities.length;j++){
                        pokemon_abilities += `<p>${capitalizeFirstLetter(pokemon.abilities[j].ability.name)} ${(pokemon.abilities[j].is_hidden === true) ? "(Hidden ability)" : ""}</p>`;
                    }
                    $(".abilities").html(pokemon_abilities);
                    loadSpeciesSpecification(index);
                }, "json" );
                $(".pokedex").show();
            });
        }

        function loadAllPokemon(){
            let html = "";
            for(let i = 1; i <= 150; i++){
                $.get( `https://pokeapi.co/api/v2/pokemon/${i}`, function( data ) {
                    // console.log(data);
                    html += `<div class="col-md-3 mb-5">`;
                    html += `   <div class="card pokemon-container text-center" style="">`;
                    html += `       <img class="pokemon" data-index="${i}" src="${data.sprites.other[`official-artwork`].front_default}" class="img-fluid" alt="${data.name}">`;
                    html += `       <div class="card-body">`;
                    html += `           <h5 class="card-title  pt-4">${capitalizeFirstLetter(data.name)}</h5>`;
                    html += `       </div>`;
                    html += `   </div>`;
                    html += `</div>`;       
                    // console.log(data.sprites.other[`official-artwork`].front_default);
                    $(".pokemons").html(html);
                    loadOnePokemon();
                }, "json" );
            }
           
        }

        $(document).ready(function(){
            loadAllPokemon();
        });
    </script>
  </body>
</html>