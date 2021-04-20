// TODO: make the first letter of the string to be uppercase
// * Author: Ivan Christian Jay Funcion
function capitalizeFirstLetter(string) {
	return string.charAt(0).toUpperCase() + string.slice(1);
}

/**
 * TODO: load all move sets of a specific pokemon
 * @param: loadMoveSets(id) pokemon id
 * * Author: Ivan Christian Jay Funcion
 */

function loadMoveSets(id) {
	$.get(
		`https://pokeapi.co/api/v2/pokemon/${id}`,
		function (pokemon) {
			let html = ``;
			for (let j = 0; j < pokemon.moves.length; j++) {
				$.get(
					`${pokemon.moves[j].move.url}`,
					function (move) {
						html += `<tr>`;
						html += `    <td>${capitalizeFirstLetter(pokemon.moves[j].move.name)}</td>`;

						html += `    <td><span class="type-bg ${move.type.name}">${capitalizeFirstLetter(move.type.name)}</span></td>`;
						html += `    <td>${move.accuracy != null ? move.accuracy : ""}</td>`;
						html += `    <td>${move.power != null ? move.power : ""}</td>`;
						html += `    <td>${move.pp != null ? move.pp : ""}</td>`;
						html += `</tr>`;
						$(".move-set-table tbody").html(html);
					},
					"json"
				);
			}
		},
		"json"
	);
}

/**
 * TODO: load all base stats of a specific pokemon
 * @param: loadBaseStats(id) pokemon id
 * * Author: Ivan Christian Jay Funcion
 */

function loadBaseStats(id) {
	$.get(
		`https://pokeapi.co/api/v2/pokemon/${id}`,
		function (pokemon) {
			let html = ``;
			for (let j = 0; j < pokemon.stats.length; j++) {
				let progress_bar_color = "";

				if (pokemon.stats[j].base_stat < 50) {
					progress_bar_color = "bg-danger";
				} else if (pokemon.stats[j].base_stat >= 51 && pokemon.stats[j].base_stat <= 80) {
					progress_bar_color = "bg-warning";
				} else if (pokemon.stats[j].base_stat >= 81) {
					progress_bar_color = "bg-success";
				}

				html += `<tr>`;
				html += `   <td class="details text-right">${capitalizeFirstLetter(pokemon.stats[j].stat.name)}</td>`;
				html += `   <td class="hp-base-stat">${pokemon.stats[j].base_stat}</td>`;
				html += `   <td class="base-stats-bar">`;
				html += `       <div class="progress">`;
				html += `           <div class="progress-bar progress-bar-striped progress-bar-animated ${progress_bar_color}" role="progressbar" style="width: ${pokemon.stats[j].base_stat}%" aria-valuenow="${pokemon.stats[j].base_stat}" aria-valuemin="0" aria-valuemax="100"></div>`;
				html += `       </div>`;
				html += `   </td>`;
				html += `</tr>`;
			}

			$(".base-stats-table tbody").html(html);
		},
		"json"
	);
}

/**
 * TODO: load all species specification of a specific pokemon
 * @param: loadSpeciesSpecification(id) pokemon id
 * * Author: Ivan Christian Jay Funcion
 */

function loadSpeciesSpecification(id) {
	$.get(
		`https://pokeapi.co/api/v2/pokemon-species/${id}`,
		function (pokemon) {
			$(".description").html(`${pokemon.flavor_text_entries[0].flavor_text}`);
			$(".base-hapiness").html(`${pokemon.base_happiness}`);
			$(".capture-rate").html(`${pokemon.capture_rate} %`);
			$(".color").html(`${capitalizeFirstLetter(pokemon.color.name)}`);
			$(".evolve-from").html(`${pokemon.evolves_from_species != null ? capitalizeFirstLetter(pokemon.evolves_from_species.name) : "None"} `);
			$(".habitat").html(`${capitalizeFirstLetter(pokemon.habitat.name)} `);
			console.log(pokemon);
		},
		"json"
	);
}

/**
 * TODO: load details (including:image,name,id height, weight) of pokemon when a specific pokemon is clicked in the pokemon list
 * @param: none
 * * Author: Ivan Christian Jay Funcion
 */

function loadOnePokemon() {
	$("img.pokemon").click(function () {
		let index = $(this).attr("data-index");
		console.log(index);
		$.get(
			`https://pokeapi.co/api/v2/pokemon/${index}`,
			function (pokemon) {
				$(".pokemon-img").attr("src", `${pokemon.sprites.other[`official-artwork`].front_default}`);
				$(".pokemon-img").attr("alt", `${capitalizeFirstLetter(pokemon.name)}`);
				$(".pokemon-name").html(capitalizeFirstLetter(pokemon.name));
				$(".national-id").html(`#${pokemon.id}`);
				$(".height").html(`${pokemon.height} meters`);
				$(".weight").html(`${pokemon.weight} grams`);
				$(".base-experience").html(`${pokemon.base_experience}`);
				let pokemon_type = "";
				for (let j = 0; j < pokemon.types.length; j++) {
					pokemon_type += `<span class="type-bg ${pokemon.types[j].type.name}">${capitalizeFirstLetter(pokemon.types[j].type.name)}</span>`;
				}
				$(".type-row").html(pokemon_type);

				let pokemon_abilities = "";
				for (let j = 0; j < pokemon.abilities.length; j++) {
					pokemon_abilities += `<p>${capitalizeFirstLetter(pokemon.abilities[j].ability.name)} ${
						pokemon.abilities[j].is_hidden === true ? "(Hidden ability)" : ""
					}</p>`;
				}
				$(".abilities").html(pokemon_abilities);
				loadSpeciesSpecification(index);
				loadBaseStats(index);
				loadMoveSets(index);
			},
			"json"
		);
		$(".pokedex").show();
	});
}

/**
 * TODO: load all pokemon to the DOM
 * @param: none
 * * Author: Ivan Christian Jay Funcion
 */

function loadAllPokemon() {
	let html = "";
	for (let i = 1; i <= 150; i++) {
		$.get(
			`https://pokeapi.co/api/v2/pokemon/${i}`,
			function (data) {
				// console.log(data);
				html += `<div class="col-md-3 mb-5">`;
				html += `   <div class="card pokemon-container text-center" style="">`;
				html += `       <img class="pokemon" data-index="${i}" src="${
					data.sprites.other[`official-artwork`].front_default
				}" class="img-fluid" alt="${data.name}">`;
				html += `       <div class="card-body">`;
				html += `           <h5 class="card-title  pt-4">${capitalizeFirstLetter(data.name)}</h5>`;
				html += `       </div>`;
				html += `   </div>`;
				html += `</div>`;
				// console.log(data.sprites.other[`official-artwork`].front_default);
				$(".pokemons").html(html);
				loadOnePokemon();
			},
			"json"
		);
	}
}

$(document).ready(function () {
	loadAllPokemon();
});
