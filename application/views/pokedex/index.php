<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

		<!-- Bootstrap CSS -->
		<link
			rel="stylesheet"
			href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
			integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l"
			crossorigin="anonymous"
		/>

		<title>Ajax Pokemon</title>

        <link rel="stylesheet/less" type="text/css" href="<?= base_url() ?>assets/less/pokedex.less" />
        <script src="//cdn.jsdelivr.net/npm/less@3.13" ></script>
	</head>
	<body>
		<!-- As a heading -->
		<nav class="navbar navbar-light mb-5">
			<!-- <span class="navbar-brand mb-0 h1">Navbar</span> -->
			<div class="container">
				<img
					src="https://www.pinclipart.com/picdir/big/379-3791327_pokemon-cliparts.png"
					class="navbar-brand mb-0 h1 img-fluid logo"
					alt=""
				/>
			</div>
		</nav>

		<div class="container-fluid">
			<div class="row">
				<div class="col-md-8">
					<div class="row pokemons"></div>
				</div>
				<div class="col-md-4 pokedex text-center">
					<h1>Pokedex</h1>
					<div class="pokemon-info">
						<img
							class="pokemon-img"
							src="https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/other/official-artwork/1.png"
							alt=""
						/>
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
									<td class="type-row">
										<span class="type-bg" style="background: #8cd36a">Grass</span>
										<span class="type-bg" style="background: #ee99ee">Poison</span>
									</td>
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
						<table class="table text-justify base-stats-table">
                            <tbody></tbody>
						</table>

                        <h2>Move Sets</h2>
                        <table class="table table-responsive overflow-auto move-set-table">
                            <thead>
                                <tr>
                                    <th>Move Name</th>
                                    <th>Move Type</th>
                                    <th>Accuracy</th>
                                    <th>Power</th>
                                    <th>Power point</th>
                                </tr>
                            </thead>
                            <tbody></tbody>
                        </table>
					</div>
				</div>
			</div>
		</div>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
		<script
			src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
			integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
			crossorigin="anonymous"
		></script>

        <script src="<?= base_url()?>assets/scripts/pokedex.js"></script>
	</body>
</html>
