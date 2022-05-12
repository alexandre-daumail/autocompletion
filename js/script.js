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
                    <a class="text-decoration-none" href="recherche.php?search=${match.name}">${match.name} ${match.capital}</a>
                </li>
            `
            ).join('');
            matchList.innerHTML = html;
            
        }
    }

    search.addEventListener("input", () => searchCities(search.value))

});