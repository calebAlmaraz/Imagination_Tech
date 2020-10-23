/* resume.html.twig's JS app */
window.onbeforeunload = function() {window.scrollTo(0,0);}
console.log('assets/exercises.js');

// CSS output: dataVisualisation.css
import './styles/scss/global.scss';
import './styles/css/excercises/oop.css';

/* ----- Importing JS modules ----- */ 
const $ = require('jquery');
require('bootstrap');

/* ----- Importing local JS files ----- */ 


/* ----- Functions ----- */
$("#excercise1").on("click", function(event){

    event.preventDefault();

    var $link = $(event.currentTarget);

    console.log($link.attr('href'));

    $.ajax({
        method: "POST",
        url: $link.attr('href'),
        dataType: "json",
        success: function(response) {
            $("#excercise1_response").html("");
            var json_keys = Object.keys(response.data);
            json_keys.forEach(function(value, i){
                $("#excercise1_response").append("<p>"+response.data[json_keys[i]]+": "+json_keys[i]+"</p>");
            });
        },
        error : function(xhr, textStatus, errorThrown) {  
            console.log('Ajax request failed.');  
        }
    });
});
