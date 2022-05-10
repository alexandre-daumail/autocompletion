"use strict";

$(document).ready(event => {

    var searchbar = $("#searchbar");
    var input = searchbar.val();
    var citiesList = [];


    $.get("suggestion.php", function (data) {

        let result = JSON.parse(data)

        for (let i = 0; i < result.length; i++) {
            citiesList.push(result[i].ville_nom);
        }

        $(function () {

            searchbar.autocomplete({
                source: citiesList,
                delay: 500
            });

        });


    });
    searchbar.menu({
        classes: {
          "ui-menu": "highlight"
        }
      });

})