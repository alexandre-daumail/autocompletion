"use strict";

document.addEventListener("DOMContentLoaded", event => {

    const search = document.querySelector("#search");
    const matchList = document.querySelector("#matchList");
    const matchList2 = document.querySelector("#matchList2");

    //search suggestion.php and filter it
    const searchCities = async searchText => {
        const response = await fetch("./data/suggestion.php");
        const cities = await response.json();

        // Get matches to current text input
        let matches = cities.filter(city => {
            const regex = new RegExp(`^${searchText}`, 'gi');
            return city.nom_reel.match(regex)  
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

            // Slice reduces the number of matches result
            const html = matches.slice(0, 5).map(match => `
                <li class="card card-body text-white bg-primary mb-1">
                    <a class="text-decoration-none link-light" href="element.php?search=${match.nom_simple}">${match.nom_reel} (${match.code_postal})</a>
                </li>
            `
            ).join('');
            matchList.innerHTML = html;
            
        }
    }

     // Show results in HTML
     const outputHtml2 = matches => {
        if (matches.length > 0) {

            // Slice reduces the number of matches result
            const html = matches.slice(0, 5).map(match => `
                <li class="card card-body text-white bg-secondary mb-1">
                    <a class="text-decoration-none link-light" href="recherche.php?search=${match.nom_reel}">${match.nom_reel} (${match.code_postal})</a>
                </li>
            `
            ).join('');
            matchList.innerHTML = html;
            
        }
    }


    search.addEventListener("keyup", () => searchCities(search.value))

});