/* bee_war.html.twig's JS app */
window.onbeforeunload = function() {window.scrollTo(0,0);}
console.log('assets/beeWar.js');

// CSS output: dataVisualisation.css
import './styles/scss/global.scss';
import './styles/css/beeWar/bee_war.css';

/* ----- Importing JS modules ----- */ 
const $ = require('jquery');
require('bootstrap');

/* ----- Importing local JS files ----- */ 


/* ----- Functions ----- */
var timer = 2000;                                   // Global var to delay ajax's requests

$("#attack").on("click", function(event){           // On attack's click
    event.preventDefault();                         // Prevend default event (not refresh)
    $("#attack").hide(200);                         // Hide start button
    holdingProcess();                               // Init ajax holder/sender
});

async function holdingProcess() {                                   // Holder and sender ajax's requests
    $("#round").removeClass("d-none");                              // Init Round counter
    $("#console").removeClass("d-none");                            // Show Console
    $("#actions").removeClass("d-none");                            // Show console's messages render
    $("#faster").removeClass("d-none");                             // Show time controler's buttons
    $("#slower").removeClass("d-none");                             // Show time controler's buttons
    var breakForAjax = false;                                       // An auxiliar ajax's breaker
    for (var key = 0; key < 999; key++) {                           // Loop from 0 to 999 possible fight's rounds
        if(breakForAjax){return ;}                                  // If breaker = true, then move out of function
        $("#round").html("Round "+key);                             // Init Round counter 
        await customResolver(1000);                                 // Call to await function. Initialized with timer global var
        var bees_bumblebee = $("table tbody td[class^='bee-']");    // Get all bees in the war's zone
        var warJsonContent = $("#warJsonContent").attr("value");    // Get war's object
        var path = $(bees_bumblebee[0]).attr("data-path");          // Get path to controller
        var xhr = $.ajax({                                          // Init AJAX
            method: "POST",                             
            url: path,
            async: false,
            dataType: "json",
            timeout: 10000,
            data: {warJsonContent: warJsonContent},                 // Send war's object
            success: function(response) {
                var warZone = response[0];                          // Receive new war's object
                var warJsonContent = response[1];                   // Receive new war's object serialized
                var attacks = response[2];                          // Receive Purge and Attack messages
                var game_over = response[3];                        // Is the game over?
                var winner = response[4];                           // Who is the winner, if there is so
                // Block of code to render back all the bees with their new position 
                $("#jsonContent").html("").html("<input type='text' id='warJsonContent' value='"+warJsonContent+"' style='display: none;'>");
                $("table tbody").html("");
                var rendering_warZone = "";
                for (var index = 0; index < warZone.war_x_size; index++) {
                    rendering_warZone += '<tr><th scope="col" class="cell_size">'+index+'</th>';
                    for (var index2 = 0; index2 < warZone.war_y_size; index2++) {
                        var stop = false;
                        warZone.war_bees_positions.forEach(bee => {
                            if (bee.bee_x_position == index && bee.bee_y_position == index2) {
                                if (bee.bee_colony == 1) {
                                    if (bee.bee_type == 1) {
                                        rendering_warZone+='<td class="bee-bumblebee" style="background-color: #c39e17 !important;" data-path="/beewar_act%29?colony_id='+bee.bee_colony+'&bee_id='+bee.bee_id+'&x_coord='+bee.bee_x_position+'&y_coord='+bee.bee_y_position+'"></td>';                                        
                                    }
                                    if (bee.bee_type == 3) {
                                        rendering_warZone+='<td class="bee-bumblebee" style="background-color: #ffb50ee0 !important;" data-path="/beewar_act%29?colony_id='+bee.bee_colony+'&bee_id='+bee.bee_id+'&x_coord='+bee.bee_x_position+'&y_coord='+bee.bee_y_position+'"></td>';                                        
                                    } 
                                    if (bee.bee_type == 2) {
                                        rendering_warZone+='<td class="bee-bumblebee" data-path="/beewar_act%29?colony_id='+bee.bee_colony+'&bee_id='+bee.bee_id+'&x_coord='+bee.bee_x_position+'&y_coord='+bee.bee_y_position+'"></td>';                                        
                                    }
                                }else{
                                    if (bee.bee_type == 1) {
                                        rendering_warZone+='<td class="bee-leafcutter" style="background-color: #035894d9 !important;" data-path="/beewar_act%29?colony_id='+bee.bee_colony+'&bee_id='+bee.bee_id+'&x_coord='+bee.bee_x_position+'&y_coord='+bee.bee_y_position+'"></td>';                                        
                                    }
                                    if (bee.bee_type == 3) {
                                        rendering_warZone+='<td class="bee-leafcutter" style="background-color: #008196bf !important;" data-path="/beewar_act%29?colony_id='+bee.bee_colony+'&bee_id='+bee.bee_id+'&x_coord='+bee.bee_x_position+'&y_coord='+bee.bee_y_position+'"></td>';                                        
                                    } 
                                    if (bee.bee_type == 2) {
                                        rendering_warZone+='<td class="bee-leafcutter" data-path="/beewar_act%29?colony_id='+bee.bee_colony+'&bee_id='+bee.bee_id+'&x_coord='+bee.bee_x_position+'&y_coord='+bee.bee_y_position+'"></td>';
                                    }
                                }
                                stop = true;
                            }
                        });
                        if (stop != true) {
                            rendering_warZone+='<td class="" x-coord="'+index+'" y-coord="'+index2+'"></td>';
                        }
                    }
                    rendering_warZone+= "</tr>";
                }
                $("table tbody").html(rendering_warZone);                               // Render new Bees' positions
                for (let index = 0; index < attacks['attacks'].length; index++) {       // Loop through all attack messages
                    let message = attacks['attacks'][index];
                    $('#rending_actions').append(message+"\n");                         // Append message to console
                    $('#rending_actions').addClass("hideScrollBar");                    // Kind of hide scrollBar
                }
                for (let index = 0; index < attacks['purge'].length; index++) {         // Loop through all attack messages
                    let message = attacks['purge'][index];
                    $('#rending_actions').append(message+"\n");                         // Append message to console
                    $('#rending_actions').addClass("hideScrollBar")                     // Kind of hide scrollBar
                }
                $("#rending_actions").animate({ scrollTop: $('#rending_actions').prop("scrollHeight")}, 150); // Auto-Scroll for console 
                if(game_over){              // IS THE SIMULATION OVER?, if so, then...
                    let message = ""        // Init exit message
                    if(winner==1){ $('#winner').addClass('bee-bumblebee-winner');       // If winner is bumblebee then add class 
                        $('#winnerTitle').html("Bumblebee won!");                       // Append winner text
                        message += "Colony Bumblebee killed Leafcutter's queen";}else{  // Last message to console
                        $('#winner').addClass('bee-leafcutter-winner'); $('#winnerTitle').html("Leafcutter won!"); // If winner is leafcutter then add class
                        message += "Colony Leafcutter killed Bumblebee's queen";        // Last message to console
                    }
                    $('#rending_actions').append(message+"\n");                         // Append message to console
                    $('#rending_actions').addClass("hideScrollBar")                     // Kind of hide scroll bar
                    $('#faster').hide();                                                // Hide faster button
                    $('#slower').hide();                                                // Hide Slower button
                    $("#restart").removeClass("d-none");                                // Show Restart button
                    $('#winnerModal').modal('show');                                    // Show winner's modal  
                    breakForAjax = true;                                                // Break AJAX
                    xhr.abort(); return;}                                               // Double breaker
            },
            error : function(xhr, textStatus, errorThrown) {  
                console.log('Ajax request failed.');  
            }
        });
    }
}

$("#faster").on("click", function(event){           // Acelerate the round's intervale
    timer = timer/1.3 > 500 ? timer/1.3 : 500;      // by 1.3 times
});

$("#slower").on("click", function(event){           // Extend the round's intervale
    timer = timer*1.3 < 3000 ? timer*1.3 : 3000;    // by 1.3 times
});

$("#restart").on("click", function(event){          // On Restart, refresh page
    location.reload();
});

function customResolver(x) {                        // Resolver for await's function
    return new Promise(resolve => {
        setTimeout(() => {
        resolve(x);
        }, timer);                                  // Taking from the global timer var
    });
}

$(document).keydown(function(event) {               // To close modal if key scape is pressed
    if (event.keyCode == 27) { 
        $('#winnerModal').hide();
    }
});