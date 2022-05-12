"use strict";

document.addEventListener("DOMContentLoaded", event => {

    const search = document.querySelector("#search");
    const matchList = document.querySelector("#matchList");

    //search suggestion.php and filter it
    const searchCities = async searchText => {
        const res = await fetch("./data/states.json");
        const states = await res.json();

        // Get matches to current text input
        let matches = states.filter(state => {
            const regex = new RegExp(`^${searchText}`, 'gi');
            return state.name.match(regex)  || state.abbr.match(regex);
        });

        if (searchText.length === 0) {
            matches = [];
            matchList.innerHTML = '';
        }

        outputHtml(matches);

    };

    // Show results in HTML
    const outputHtml = matches => {
        if (matches.length > 0) {
            const html = matches.map(match => `
                <li class="card card-body mb-1" id="${match.name}">
                    <h4>${match.name} <span class="text-primary">${match.capital}</span></h4>
                    <small>Lat: ${match.lat} / Long: ${match.long}</small>
                </li>
            `
            ).join('');
            matchList.innerHTML = html;
            var suggestion = document.querySelector(".card")
            
        }
    }

    search.addEventListener("input", () => searchCities(search.value))

});