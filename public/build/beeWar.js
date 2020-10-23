(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["beeWar"],{

/***/ "./assets/beeWar.js":
/*!**************************!*\
  !*** ./assets/beeWar.js ***!
  \**************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var core_js_modules_es_array_for_each__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! core-js/modules/es.array.for-each */ "./node_modules/core-js/modules/es.array.for-each.js");
/* harmony import */ var core_js_modules_es_array_for_each__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_for_each__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var core_js_modules_es_object_to_string__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! core-js/modules/es.object.to-string */ "./node_modules/core-js/modules/es.object.to-string.js");
/* harmony import */ var core_js_modules_es_object_to_string__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_to_string__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var core_js_modules_es_promise__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! core-js/modules/es.promise */ "./node_modules/core-js/modules/es.promise.js");
/* harmony import */ var core_js_modules_es_promise__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_promise__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var core_js_modules_web_dom_collections_for_each__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! core-js/modules/web.dom-collections.for-each */ "./node_modules/core-js/modules/web.dom-collections.for-each.js");
/* harmony import */ var core_js_modules_web_dom_collections_for_each__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_web_dom_collections_for_each__WEBPACK_IMPORTED_MODULE_3__);
/* harmony import */ var core_js_modules_web_timers__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! core-js/modules/web.timers */ "./node_modules/core-js/modules/web.timers.js");
/* harmony import */ var core_js_modules_web_timers__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_web_timers__WEBPACK_IMPORTED_MODULE_4__);
/* harmony import */ var regenerator_runtime_runtime__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! regenerator-runtime/runtime */ "./node_modules/regenerator-runtime/runtime.js");
/* harmony import */ var regenerator_runtime_runtime__WEBPACK_IMPORTED_MODULE_5___default = /*#__PURE__*/__webpack_require__.n(regenerator_runtime_runtime__WEBPACK_IMPORTED_MODULE_5__);
/* harmony import */ var _styles_scss_global_scss__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ./styles/scss/global.scss */ "./assets/styles/scss/global.scss");
/* harmony import */ var _styles_scss_global_scss__WEBPACK_IMPORTED_MODULE_6___default = /*#__PURE__*/__webpack_require__.n(_styles_scss_global_scss__WEBPACK_IMPORTED_MODULE_6__);
/* harmony import */ var _styles_css_beeWar_bee_war_css__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! ./styles/css/beeWar/bee_war.css */ "./assets/styles/css/beeWar/bee_war.css");
/* harmony import */ var _styles_css_beeWar_bee_war_css__WEBPACK_IMPORTED_MODULE_7___default = /*#__PURE__*/__webpack_require__.n(_styles_css_beeWar_bee_war_css__WEBPACK_IMPORTED_MODULE_7__);







function asyncGeneratorStep(gen, resolve, reject, _next, _throw, key, arg) { try { var info = gen[key](arg); var value = info.value; } catch (error) { reject(error); return; } if (info.done) { resolve(value); } else { Promise.resolve(value).then(_next, _throw); } }

function _asyncToGenerator(fn) { return function () { var self = this, args = arguments; return new Promise(function (resolve, reject) { var gen = fn.apply(self, args); function _next(value) { asyncGeneratorStep(gen, resolve, reject, _next, _throw, "next", value); } function _throw(err) { asyncGeneratorStep(gen, resolve, reject, _next, _throw, "throw", err); } _next(undefined); }); }; }

/* bee_war.html.twig's JS app */
window.onbeforeunload = function () {
  window.scrollTo(0, 0);
};

console.log('assets/beeWar.js'); // CSS output: dataVisualisation.css



/* ----- Importing JS modules ----- */

var $ = __webpack_require__(/*! jquery */ "./node_modules/jquery/dist/jquery.js");

__webpack_require__(/*! bootstrap */ "./node_modules/bootstrap/dist/js/bootstrap.js");
/* ----- Importing local JS files ----- */

/* ----- Functions ----- */


var timer = 2000; // Global var to delay ajax's requests

$("#attack").on("click", function (event) {
  // On attack's click
  event.preventDefault(); // Prevend default event (not refresh)

  $("#attack").hide(200); // Hide start button

  holdingProcess(); // Init ajax holder/sender
});

function holdingProcess() {
  return _holdingProcess.apply(this, arguments);
}

function _holdingProcess() {
  _holdingProcess = _asyncToGenerator( /*#__PURE__*/regeneratorRuntime.mark(function _callee() {
    var breakForAjax, key, bees_bumblebee, warJsonContent, path, xhr;
    return regeneratorRuntime.wrap(function _callee$(_context) {
      while (1) {
        switch (_context.prev = _context.next) {
          case 0:
            // Holder and sender ajax's requests
            $("#round").removeClass("d-none"); // Init Round counter

            $("#console").removeClass("d-none"); // Show Console

            $("#actions").removeClass("d-none"); // Show console's messages render

            $("#faster").removeClass("d-none"); // Show time controler's buttons

            $("#slower").removeClass("d-none"); // Show time controler's buttons

            breakForAjax = false; // An auxiliar ajax's breaker

            key = 0;

          case 7:
            if (!(key < 999)) {
              _context.next = 20;
              break;
            }

            if (!breakForAjax) {
              _context.next = 10;
              break;
            }

            return _context.abrupt("return");

          case 10:
            // If breaker = true, then move out of function
            $("#round").html("Round " + key); // Init Round counter 

            _context.next = 13;
            return customResolver(1000);

          case 13:
            // Call to await function. Initialized with timer global var
            bees_bumblebee = $("table tbody td[class^='bee-']"); // Get all bees in the war's zone

            warJsonContent = $("#warJsonContent").attr("value"); // Get war's object

            path = $(bees_bumblebee[0]).attr("data-path"); // Get path to controller

            xhr = $.ajax({
              // Init AJAX
              method: "POST",
              url: path,
              async: false,
              dataType: "json",
              timeout: 10000,
              data: {
                warJsonContent: warJsonContent
              },
              // Send war's object
              success: function success(response) {
                var warZone = response[0]; // Receive new war's object

                var warJsonContent = response[1]; // Receive new war's object serialized

                var attacks = response[2]; // Receive Purge and Attack messages

                var game_over = response[3]; // Is the game over?

                var winner = response[4]; // Who is the winner, if there is so
                // Block of code to render back all the bees with their new position 

                $("#jsonContent").html("").html("<input type='text' id='warJsonContent' value='" + warJsonContent + "' style='display: none;'>");
                $("table tbody").html("");
                var rendering_warZone = "";

                for (var index = 0; index < warZone.war_x_size; index++) {
                  rendering_warZone += '<tr><th scope="col" class="cell_size">' + index + '</th>';

                  for (var index2 = 0; index2 < warZone.war_y_size; index2++) {
                    var stop = false;
                    warZone.war_bees_positions.forEach(function (bee) {
                      if (bee.bee_x_position == index && bee.bee_y_position == index2) {
                        if (bee.bee_colony == 1) {
                          if (bee.bee_type == 1) {
                            rendering_warZone += '<td class="bee-bumblebee" style="background-color: #c39e17 !important;" data-path="/beewar_act%29?colony_id=' + bee.bee_colony + '&bee_id=' + bee.bee_id + '&x_coord=' + bee.bee_x_position + '&y_coord=' + bee.bee_y_position + '"></td>';
                          }

                          if (bee.bee_type == 3) {
                            rendering_warZone += '<td class="bee-bumblebee" style="background-color: #ffb50ee0 !important;" data-path="/beewar_act%29?colony_id=' + bee.bee_colony + '&bee_id=' + bee.bee_id + '&x_coord=' + bee.bee_x_position + '&y_coord=' + bee.bee_y_position + '"></td>';
                          }

                          if (bee.bee_type == 2) {
                            rendering_warZone += '<td class="bee-bumblebee" data-path="/beewar_act%29?colony_id=' + bee.bee_colony + '&bee_id=' + bee.bee_id + '&x_coord=' + bee.bee_x_position + '&y_coord=' + bee.bee_y_position + '"></td>';
                          }
                        } else {
                          if (bee.bee_type == 1) {
                            rendering_warZone += '<td class="bee-leafcutter" style="background-color: #035894d9 !important;" data-path="/beewar_act%29?colony_id=' + bee.bee_colony + '&bee_id=' + bee.bee_id + '&x_coord=' + bee.bee_x_position + '&y_coord=' + bee.bee_y_position + '"></td>';
                          }

                          if (bee.bee_type == 3) {
                            rendering_warZone += '<td class="bee-leafcutter" style="background-color: #008196bf !important;" data-path="/beewar_act%29?colony_id=' + bee.bee_colony + '&bee_id=' + bee.bee_id + '&x_coord=' + bee.bee_x_position + '&y_coord=' + bee.bee_y_position + '"></td>';
                          }

                          if (bee.bee_type == 2) {
                            rendering_warZone += '<td class="bee-leafcutter" data-path="/beewar_act%29?colony_id=' + bee.bee_colony + '&bee_id=' + bee.bee_id + '&x_coord=' + bee.bee_x_position + '&y_coord=' + bee.bee_y_position + '"></td>';
                          }
                        }

                        stop = true;
                      }
                    });

                    if (stop != true) {
                      rendering_warZone += '<td class="" x-coord="' + index + '" y-coord="' + index2 + '"></td>';
                    }
                  }

                  rendering_warZone += "</tr>";
                }

                $("table tbody").html(rendering_warZone); // Render new Bees' positions

                for (var _index = 0; _index < attacks['attacks'].length; _index++) {
                  // Loop through all attack messages
                  var message = attacks['attacks'][_index];
                  $('#rending_actions').append(message + "\n"); // Append message to console

                  $('#rending_actions').addClass("hideScrollBar"); // Kind of hide scrollBar
                }

                for (var _index2 = 0; _index2 < attacks['purge'].length; _index2++) {
                  // Loop through all attack messages
                  var _message = attacks['purge'][_index2];
                  $('#rending_actions').append(_message + "\n"); // Append message to console

                  $('#rending_actions').addClass("hideScrollBar"); // Kind of hide scrollBar
                }

                $("#rending_actions").animate({
                  scrollTop: $('#rending_actions').prop("scrollHeight")
                }, 150); // Auto-Scroll for console 

                if (game_over) {
                  // IS THE SIMULATION OVER?, if so, then...
                  var _message2 = ""; // Init exit message

                  if (winner == 1) {
                    $('#winner').addClass('bee-bumblebee-winner'); // If winner is bumblebee then add class 

                    $('#winnerTitle').html("Bumblebee won!"); // Append winner text

                    _message2 += "Colony Bumblebee killed Leafcutter's queen";
                  } else {
                    // Last message to console
                    $('#winner').addClass('bee-leafcutter-winner');
                    $('#winnerTitle').html("Leafcutter won!"); // If winner is leafcutter then add class

                    _message2 += "Colony Leafcutter killed Bumblebee's queen"; // Last message to console
                  }

                  $('#rending_actions').append(_message2 + "\n"); // Append message to console

                  $('#rending_actions').addClass("hideScrollBar"); // Kind of hide scroll bar

                  $('#faster').hide(); // Hide faster button

                  $('#slower').hide(); // Hide Slower button

                  $("#restart").removeClass("d-none"); // Show Restart button

                  $('#winnerModal').modal('show'); // Show winner's modal  

                  breakForAjax = true; // Break AJAX

                  xhr.abort();
                  return;
                } // Double breaker

              },
              error: function error(xhr, textStatus, errorThrown) {
                console.log('Ajax request failed.');
              }
            });

          case 17:
            key++;
            _context.next = 7;
            break;

          case 20:
          case "end":
            return _context.stop();
        }
      }
    }, _callee);
  }));
  return _holdingProcess.apply(this, arguments);
}

$("#faster").on("click", function (event) {
  // Acelerate the round's intervale
  timer = timer / 1.3 > 500 ? timer / 1.3 : 500; // by 1.3 times
});
$("#slower").on("click", function (event) {
  // Extend the round's intervale
  timer = timer * 1.3 < 3000 ? timer * 1.3 : 3000; // by 1.3 times
});
$("#restart").on("click", function (event) {
  // On Restart, refresh page
  location.reload();
});

function customResolver(x) {
  // Resolver for await's function
  return new Promise(function (resolve) {
    setTimeout(function () {
      resolve(x);
    }, timer); // Taking from the global timer var
  });
}

$(document).keydown(function (event) {
  // To close modal if key scape is pressed
  if (event.keyCode == 27) {
    $('#winnerModal').hide();
  }
});

/***/ }),

/***/ "./assets/styles/css/beeWar/bee_war.css":
/*!**********************************************!*\
  !*** ./assets/styles/css/beeWar/bee_war.css ***!
  \**********************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

// extracted by mini-css-extract-plugin

/***/ })

},[["./assets/beeWar.js","runtime","vendors~app~beeWar~exercises~resume","vendors~beeWar~exercises~resume","vendors~beeWar~exercises","vendors~beeWar","beeWar~exercises~resume"]]]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9hc3NldHMvYmVlV2FyLmpzIiwid2VicGFjazovLy8uL2Fzc2V0cy9zdHlsZXMvY3NzL2JlZVdhci9iZWVfd2FyLmNzcyJdLCJuYW1lcyI6WyJ3aW5kb3ciLCJvbmJlZm9yZXVubG9hZCIsInNjcm9sbFRvIiwiY29uc29sZSIsImxvZyIsIiQiLCJyZXF1aXJlIiwidGltZXIiLCJvbiIsImV2ZW50IiwicHJldmVudERlZmF1bHQiLCJoaWRlIiwiaG9sZGluZ1Byb2Nlc3MiLCJyZW1vdmVDbGFzcyIsImJyZWFrRm9yQWpheCIsImtleSIsImh0bWwiLCJjdXN0b21SZXNvbHZlciIsImJlZXNfYnVtYmxlYmVlIiwid2FySnNvbkNvbnRlbnQiLCJhdHRyIiwicGF0aCIsInhociIsImFqYXgiLCJtZXRob2QiLCJ1cmwiLCJhc3luYyIsImRhdGFUeXBlIiwidGltZW91dCIsImRhdGEiLCJzdWNjZXNzIiwicmVzcG9uc2UiLCJ3YXJab25lIiwiYXR0YWNrcyIsImdhbWVfb3ZlciIsIndpbm5lciIsInJlbmRlcmluZ193YXJab25lIiwiaW5kZXgiLCJ3YXJfeF9zaXplIiwiaW5kZXgyIiwid2FyX3lfc2l6ZSIsInN0b3AiLCJ3YXJfYmVlc19wb3NpdGlvbnMiLCJmb3JFYWNoIiwiYmVlIiwiYmVlX3hfcG9zaXRpb24iLCJiZWVfeV9wb3NpdGlvbiIsImJlZV9jb2xvbnkiLCJiZWVfdHlwZSIsImJlZV9pZCIsImxlbmd0aCIsIm1lc3NhZ2UiLCJhcHBlbmQiLCJhZGRDbGFzcyIsImFuaW1hdGUiLCJzY3JvbGxUb3AiLCJwcm9wIiwibW9kYWwiLCJhYm9ydCIsImVycm9yIiwidGV4dFN0YXR1cyIsImVycm9yVGhyb3duIiwibG9jYXRpb24iLCJyZWxvYWQiLCJ4IiwiUHJvbWlzZSIsInJlc29sdmUiLCJzZXRUaW1lb3V0IiwiZG9jdW1lbnQiLCJrZXlkb3duIiwia2V5Q29kZSJdLCJtYXBwaW5ncyI6Ijs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7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R0FBR0EsS0FBSyxHQUFDLEdBQU4sR0FBWSxJQUFaLEdBQW1CQSxLQUFLLEdBQUMsR0FBekIsR0FBK0IsSUFBdkMsQ0FEb0MsQ0FDWTtBQUNuRCxDQUZEO0FBSUFGLENBQUMsQ0FBQyxVQUFELENBQUQsQ0FBY0csRUFBZCxDQUFpQixPQUFqQixFQUEwQixVQUFTQyxLQUFULEVBQWU7QUFBVztBQUNoRHFELFVBQVEsQ0FBQ0MsTUFBVDtBQUNILENBRkQ7O0FBSUEsU0FBUzlDLGNBQVQsQ0FBd0IrQyxDQUF4QixFQUEyQjtBQUF5QjtBQUNoRCxTQUFPLElBQUlDLE9BQUosQ0FBWSxVQUFBQyxPQUFPLEVBQUk7QUFDMUJDLGNBQVUsQ0FBQyxZQUFNO0FBQ2pCRCxhQUFPLENBQUNGLENBQUQsQ0FBUDtBQUNDLEtBRlMsRUFFUHpELEtBRk8sQ0FBVixDQUQwQixDQUdrQjtBQUMvQyxHQUpNLENBQVA7QUFLSDs7QUFFREYsQ0FBQyxDQUFDK0QsUUFBRCxDQUFELENBQVlDLE9BQVosQ0FBb0IsVUFBUzVELEtBQVQsRUFBZ0I7QUFBZ0I7QUFDaEQsTUFBSUEsS0FBSyxDQUFDNkQsT0FBTixJQUFpQixFQUFyQixFQUF5QjtBQUNyQmpFLEtBQUMsQ0FBQyxjQUFELENBQUQsQ0FBa0JNLElBQWxCO0FBQ0g7QUFDSixDQUpELEU7Ozs7Ozs7Ozs7O0FDbkpBLHVDIiwiZmlsZSI6ImJlZVdhci5qcyIsInNvdXJjZXNDb250ZW50IjpbIi8qIGJlZV93YXIuaHRtbC50d2lnJ3MgSlMgYXBwICovXG53aW5kb3cub25iZWZvcmV1bmxvYWQgPSBmdW5jdGlvbigpIHt3aW5kb3cuc2Nyb2xsVG8oMCwwKTt9XG5jb25zb2xlLmxvZygnYXNzZXRzL2JlZVdhci5qcycpO1xuXG4vLyBDU1Mgb3V0cHV0OiBkYXRhVmlzdWFsaXNhdGlvbi5jc3NcbmltcG9ydCAnLi9zdHlsZXMvc2Nzcy9nbG9iYWwuc2Nzcyc7XG5pbXBvcnQgJy4vc3R5bGVzL2Nzcy9iZWVXYXIvYmVlX3dhci5jc3MnO1xuXG4vKiAtLS0tLSBJbXBvcnRpbmcgSlMgbW9kdWxlcyAtLS0tLSAqLyBcbmNvbnN0ICQgPSByZXF1aXJlKCdqcXVlcnknKTtcbnJlcXVpcmUoJ2Jvb3RzdHJhcCcpO1xuXG4vKiAtLS0tLSBJbXBvcnRpbmcgbG9jYWwgSlMgZmlsZXMgLS0tLS0gKi8gXG5cblxuLyogLS0tLS0gRnVuY3Rpb25zIC0tLS0tICovXG52YXIgdGltZXIgPSAyMDAwOyAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgLy8gR2xvYmFsIHZhciB0byBkZWxheSBhamF4J3MgcmVxdWVzdHNcblxuJChcIiNhdHRhY2tcIikub24oXCJjbGlja1wiLCBmdW5jdGlvbihldmVudCl7ICAgICAgICAgICAvLyBPbiBhdHRhY2sncyBjbGlja1xuICAgIGV2ZW50LnByZXZlbnREZWZhdWx0KCk7ICAgICAgICAgICAgICAgICAgICAgICAgIC8vIFByZXZlbmQgZGVmYXVsdCBldmVudCAobm90IHJlZnJlc2gpXG4gICAgJChcIiNhdHRhY2tcIikuaGlkZSgyMDApOyAgICAgICAgICAgICAgICAgICAgICAgICAvLyBIaWRlIHN0YXJ0IGJ1dHRvblxuICAgIGhvbGRpbmdQcm9jZXNzKCk7ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIC8vIEluaXQgYWpheCBob2xkZXIvc2VuZGVyXG59KTtcblxuYXN5bmMgZnVuY3Rpb24gaG9sZGluZ1Byb2Nlc3MoKSB7ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAvLyBIb2xkZXIgYW5kIHNlbmRlciBhamF4J3MgcmVxdWVzdHNcbiAgICAkKFwiI3JvdW5kXCIpLnJlbW92ZUNsYXNzKFwiZC1ub25lXCIpOyAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIC8vIEluaXQgUm91bmQgY291bnRlclxuICAgICQoXCIjY29uc29sZVwiKS5yZW1vdmVDbGFzcyhcImQtbm9uZVwiKTsgICAgICAgICAgICAgICAgICAgICAgICAgICAgLy8gU2hvdyBDb25zb2xlXG4gICAgJChcIiNhY3Rpb25zXCIpLnJlbW92ZUNsYXNzKFwiZC1ub25lXCIpOyAgICAgICAgICAgICAgICAgICAgICAgICAgICAvLyBTaG93IGNvbnNvbGUncyBtZXNzYWdlcyByZW5kZXJcbiAgICAkKFwiI2Zhc3RlclwiKS5yZW1vdmVDbGFzcyhcImQtbm9uZVwiKTsgICAgICAgICAgICAgICAgICAgICAgICAgICAgIC8vIFNob3cgdGltZSBjb250cm9sZXIncyBidXR0b25zXG4gICAgJChcIiNzbG93ZXJcIikucmVtb3ZlQ2xhc3MoXCJkLW5vbmVcIik7ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAvLyBTaG93IHRpbWUgY29udHJvbGVyJ3MgYnV0dG9uc1xuICAgIHZhciBicmVha0ZvckFqYXggPSBmYWxzZTsgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAvLyBBbiBhdXhpbGlhciBhamF4J3MgYnJlYWtlclxuICAgIGZvciAodmFyIGtleSA9IDA7IGtleSA8IDk5OTsga2V5KyspIHsgICAgICAgICAgICAgICAgICAgICAgICAgICAvLyBMb29wIGZyb20gMCB0byA5OTkgcG9zc2libGUgZmlnaHQncyByb3VuZHNcbiAgICAgICAgaWYoYnJlYWtGb3JBamF4KXtyZXR1cm4gO30gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgLy8gSWYgYnJlYWtlciA9IHRydWUsIHRoZW4gbW92ZSBvdXQgb2YgZnVuY3Rpb25cbiAgICAgICAgJChcIiNyb3VuZFwiKS5odG1sKFwiUm91bmQgXCIra2V5KTsgICAgICAgICAgICAgICAgICAgICAgICAgICAgIC8vIEluaXQgUm91bmQgY291bnRlciBcbiAgICAgICAgYXdhaXQgY3VzdG9tUmVzb2x2ZXIoMTAwMCk7ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgLy8gQ2FsbCB0byBhd2FpdCBmdW5jdGlvbi4gSW5pdGlhbGl6ZWQgd2l0aCB0aW1lciBnbG9iYWwgdmFyXG4gICAgICAgIHZhciBiZWVzX2J1bWJsZWJlZSA9ICQoXCJ0YWJsZSB0Ym9keSB0ZFtjbGFzc149J2JlZS0nXVwiKTsgICAgLy8gR2V0IGFsbCBiZWVzIGluIHRoZSB3YXIncyB6b25lXG4gICAgICAgIHZhciB3YXJKc29uQ29udGVudCA9ICQoXCIjd2FySnNvbkNvbnRlbnRcIikuYXR0cihcInZhbHVlXCIpOyAgICAvLyBHZXQgd2FyJ3Mgb2JqZWN0XG4gICAgICAgIHZhciBwYXRoID0gJChiZWVzX2J1bWJsZWJlZVswXSkuYXR0cihcImRhdGEtcGF0aFwiKTsgICAgICAgICAgLy8gR2V0IHBhdGggdG8gY29udHJvbGxlclxuICAgICAgICB2YXIgeGhyID0gJC5hamF4KHsgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAvLyBJbml0IEFKQVhcbiAgICAgICAgICAgIG1ldGhvZDogXCJQT1NUXCIsICAgICAgICAgICAgICAgICAgICAgICAgICAgICBcbiAgICAgICAgICAgIHVybDogcGF0aCxcbiAgICAgICAgICAgIGFzeW5jOiBmYWxzZSxcbiAgICAgICAgICAgIGRhdGFUeXBlOiBcImpzb25cIixcbiAgICAgICAgICAgIHRpbWVvdXQ6IDEwMDAwLFxuICAgICAgICAgICAgZGF0YToge3dhckpzb25Db250ZW50OiB3YXJKc29uQ29udGVudH0sICAgICAgICAgICAgICAgICAvLyBTZW5kIHdhcidzIG9iamVjdFxuICAgICAgICAgICAgc3VjY2VzczogZnVuY3Rpb24ocmVzcG9uc2UpIHtcbiAgICAgICAgICAgICAgICB2YXIgd2FyWm9uZSA9IHJlc3BvbnNlWzBdOyAgICAgICAgICAgICAgICAgICAgICAgICAgLy8gUmVjZWl2ZSBuZXcgd2FyJ3Mgb2JqZWN0XG4gICAgICAgICAgICAgICAgdmFyIHdhckpzb25Db250ZW50ID0gcmVzcG9uc2VbMV07ICAgICAgICAgICAgICAgICAgIC8vIFJlY2VpdmUgbmV3IHdhcidzIG9iamVjdCBzZXJpYWxpemVkXG4gICAgICAgICAgICAgICAgdmFyIGF0dGFja3MgPSByZXNwb25zZVsyXTsgICAgICAgICAgICAgICAgICAgICAgICAgIC8vIFJlY2VpdmUgUHVyZ2UgYW5kIEF0dGFjayBtZXNzYWdlc1xuICAgICAgICAgICAgICAgIHZhciBnYW1lX292ZXIgPSByZXNwb25zZVszXTsgICAgICAgICAgICAgICAgICAgICAgICAvLyBJcyB0aGUgZ2FtZSBvdmVyP1xuICAgICAgICAgICAgICAgIHZhciB3aW5uZXIgPSByZXNwb25zZVs0XTsgICAgICAgICAgICAgICAgICAgICAgICAgICAvLyBXaG8gaXMgdGhlIHdpbm5lciwgaWYgdGhlcmUgaXMgc29cbiAgICAgICAgICAgICAgICAvLyBCbG9jayBvZiBjb2RlIHRvIHJlbmRlciBiYWNrIGFsbCB0aGUgYmVlcyB3aXRoIHRoZWlyIG5ldyBwb3NpdGlvbiBcbiAgICAgICAgICAgICAgICAkKFwiI2pzb25Db250ZW50XCIpLmh0bWwoXCJcIikuaHRtbChcIjxpbnB1dCB0eXBlPSd0ZXh0JyBpZD0nd2FySnNvbkNvbnRlbnQnIHZhbHVlPSdcIit3YXJKc29uQ29udGVudCtcIicgc3R5bGU9J2Rpc3BsYXk6IG5vbmU7Jz5cIik7XG4gICAgICAgICAgICAgICAgJChcInRhYmxlIHRib2R5XCIpLmh0bWwoXCJcIik7XG4gICAgICAgICAgICAgICAgdmFyIHJlbmRlcmluZ193YXJab25lID0gXCJcIjtcbiAgICAgICAgICAgICAgICBmb3IgKHZhciBpbmRleCA9IDA7IGluZGV4IDwgd2FyWm9uZS53YXJfeF9zaXplOyBpbmRleCsrKSB7XG4gICAgICAgICAgICAgICAgICAgIHJlbmRlcmluZ193YXJab25lICs9ICc8dHI+PHRoIHNjb3BlPVwiY29sXCIgY2xhc3M9XCJjZWxsX3NpemVcIj4nK2luZGV4Kyc8L3RoPic7XG4gICAgICAgICAgICAgICAgICAgIGZvciAodmFyIGluZGV4MiA9IDA7IGluZGV4MiA8IHdhclpvbmUud2FyX3lfc2l6ZTsgaW5kZXgyKyspIHtcbiAgICAgICAgICAgICAgICAgICAgICAgIHZhciBzdG9wID0gZmFsc2U7XG4gICAgICAgICAgICAgICAgICAgICAgICB3YXJab25lLndhcl9iZWVzX3Bvc2l0aW9ucy5mb3JFYWNoKGJlZSA9PiB7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgaWYgKGJlZS5iZWVfeF9wb3NpdGlvbiA9PSBpbmRleCAmJiBiZWUuYmVlX3lfcG9zaXRpb24gPT0gaW5kZXgyKSB7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGlmIChiZWUuYmVlX2NvbG9ueSA9PSAxKSB7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBpZiAoYmVlLmJlZV90eXBlID09IDEpIHtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICByZW5kZXJpbmdfd2FyWm9uZSs9Jzx0ZCBjbGFzcz1cImJlZS1idW1ibGViZWVcIiBzdHlsZT1cImJhY2tncm91bmQtY29sb3I6ICNjMzllMTcgIWltcG9ydGFudDtcIiBkYXRhLXBhdGg9XCIvYmVld2FyX2FjdCUyOT9jb2xvbnlfaWQ9JytiZWUuYmVlX2NvbG9ueSsnJmJlZV9pZD0nK2JlZS5iZWVfaWQrJyZ4X2Nvb3JkPScrYmVlLmJlZV94X3Bvc2l0aW9uKycmeV9jb29yZD0nK2JlZS5iZWVfeV9wb3NpdGlvbisnXCI+PC90ZD4nOyAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGlmIChiZWUuYmVlX3R5cGUgPT0gMykge1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHJlbmRlcmluZ193YXJab25lKz0nPHRkIGNsYXNzPVwiYmVlLWJ1bWJsZWJlZVwiIHN0eWxlPVwiYmFja2dyb3VuZC1jb2xvcjogI2ZmYjUwZWUwICFpbXBvcnRhbnQ7XCIgZGF0YS1wYXRoPVwiL2JlZXdhcl9hY3QlMjk/Y29sb255X2lkPScrYmVlLmJlZV9jb2xvbnkrJyZiZWVfaWQ9JytiZWUuYmVlX2lkKycmeF9jb29yZD0nK2JlZS5iZWVfeF9wb3NpdGlvbisnJnlfY29vcmQ9JytiZWUuYmVlX3lfcG9zaXRpb24rJ1wiPjwvdGQ+JzsgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9IFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgaWYgKGJlZS5iZWVfdHlwZSA9PSAyKSB7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgcmVuZGVyaW5nX3dhclpvbmUrPSc8dGQgY2xhc3M9XCJiZWUtYnVtYmxlYmVlXCIgZGF0YS1wYXRoPVwiL2JlZXdhcl9hY3QlMjk/Y29sb255X2lkPScrYmVlLmJlZV9jb2xvbnkrJyZiZWVfaWQ9JytiZWUuYmVlX2lkKycmeF9jb29yZD0nK2JlZS5iZWVfeF9wb3NpdGlvbisnJnlfY29vcmQ9JytiZWUuYmVlX3lfcG9zaXRpb24rJ1wiPjwvdGQ+JzsgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1lbHNle1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgaWYgKGJlZS5iZWVfdHlwZSA9PSAxKSB7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgcmVuZGVyaW5nX3dhclpvbmUrPSc8dGQgY2xhc3M9XCJiZWUtbGVhZmN1dHRlclwiIHN0eWxlPVwiYmFja2dyb3VuZC1jb2xvcjogIzAzNTg5NGQ5ICFpbXBvcnRhbnQ7XCIgZGF0YS1wYXRoPVwiL2JlZXdhcl9hY3QlMjk/Y29sb255X2lkPScrYmVlLmJlZV9jb2xvbnkrJyZiZWVfaWQ9JytiZWUuYmVlX2lkKycmeF9jb29yZD0nK2JlZS5iZWVfeF9wb3NpdGlvbisnJnlfY29vcmQ9JytiZWUuYmVlX3lfcG9zaXRpb24rJ1wiPjwvdGQ+JzsgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBpZiAoYmVlLmJlZV90eXBlID09IDMpIHtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICByZW5kZXJpbmdfd2FyWm9uZSs9Jzx0ZCBjbGFzcz1cImJlZS1sZWFmY3V0dGVyXCIgc3R5bGU9XCJiYWNrZ3JvdW5kLWNvbG9yOiAjMDA4MTk2YmYgIWltcG9ydGFudDtcIiBkYXRhLXBhdGg9XCIvYmVld2FyX2FjdCUyOT9jb2xvbnlfaWQ9JytiZWUuYmVlX2NvbG9ueSsnJmJlZV9pZD0nK2JlZS5iZWVfaWQrJyZ4X2Nvb3JkPScrYmVlLmJlZV94X3Bvc2l0aW9uKycmeV9jb29yZD0nK2JlZS5iZWVfeV9wb3NpdGlvbisnXCI+PC90ZD4nOyAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH0gXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBpZiAoYmVlLmJlZV90eXBlID09IDIpIHtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICByZW5kZXJpbmdfd2FyWm9uZSs9Jzx0ZCBjbGFzcz1cImJlZS1sZWFmY3V0dGVyXCIgZGF0YS1wYXRoPVwiL2JlZXdhcl9hY3QlMjk/Y29sb255X2lkPScrYmVlLmJlZV9jb2xvbnkrJyZiZWVfaWQ9JytiZWUuYmVlX2lkKycmeF9jb29yZD0nK2JlZS5iZWVfeF9wb3NpdGlvbisnJnlfY29vcmQ9JytiZWUuYmVlX3lfcG9zaXRpb24rJ1wiPjwvdGQ+JztcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBzdG9wID0gdHJ1ZTtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICAgICB9KTtcbiAgICAgICAgICAgICAgICAgICAgICAgIGlmIChzdG9wICE9IHRydWUpIHtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICByZW5kZXJpbmdfd2FyWm9uZSs9Jzx0ZCBjbGFzcz1cIlwiIHgtY29vcmQ9XCInK2luZGV4KydcIiB5LWNvb3JkPVwiJytpbmRleDIrJ1wiPjwvdGQ+JztcbiAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICByZW5kZXJpbmdfd2FyWm9uZSs9IFwiPC90cj5cIjtcbiAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgJChcInRhYmxlIHRib2R5XCIpLmh0bWwocmVuZGVyaW5nX3dhclpvbmUpOyAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAvLyBSZW5kZXIgbmV3IEJlZXMnIHBvc2l0aW9uc1xuICAgICAgICAgICAgICAgIGZvciAobGV0IGluZGV4ID0gMDsgaW5kZXggPCBhdHRhY2tzWydhdHRhY2tzJ10ubGVuZ3RoOyBpbmRleCsrKSB7ICAgICAgIC8vIExvb3AgdGhyb3VnaCBhbGwgYXR0YWNrIG1lc3NhZ2VzXG4gICAgICAgICAgICAgICAgICAgIGxldCBtZXNzYWdlID0gYXR0YWNrc1snYXR0YWNrcyddW2luZGV4XTtcbiAgICAgICAgICAgICAgICAgICAgJCgnI3JlbmRpbmdfYWN0aW9ucycpLmFwcGVuZChtZXNzYWdlK1wiXFxuXCIpOyAgICAgICAgICAgICAgICAgICAgICAgICAvLyBBcHBlbmQgbWVzc2FnZSB0byBjb25zb2xlXG4gICAgICAgICAgICAgICAgICAgICQoJyNyZW5kaW5nX2FjdGlvbnMnKS5hZGRDbGFzcyhcImhpZGVTY3JvbGxCYXJcIik7ICAgICAgICAgICAgICAgICAgICAvLyBLaW5kIG9mIGhpZGUgc2Nyb2xsQmFyXG4gICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgIGZvciAobGV0IGluZGV4ID0gMDsgaW5kZXggPCBhdHRhY2tzWydwdXJnZSddLmxlbmd0aDsgaW5kZXgrKykgeyAgICAgICAgIC8vIExvb3AgdGhyb3VnaCBhbGwgYXR0YWNrIG1lc3NhZ2VzXG4gICAgICAgICAgICAgICAgICAgIGxldCBtZXNzYWdlID0gYXR0YWNrc1sncHVyZ2UnXVtpbmRleF07XG4gICAgICAgICAgICAgICAgICAgICQoJyNyZW5kaW5nX2FjdGlvbnMnKS5hcHBlbmQobWVzc2FnZStcIlxcblwiKTsgICAgICAgICAgICAgICAgICAgICAgICAgLy8gQXBwZW5kIG1lc3NhZ2UgdG8gY29uc29sZVxuICAgICAgICAgICAgICAgICAgICAkKCcjcmVuZGluZ19hY3Rpb25zJykuYWRkQ2xhc3MoXCJoaWRlU2Nyb2xsQmFyXCIpICAgICAgICAgICAgICAgICAgICAgLy8gS2luZCBvZiBoaWRlIHNjcm9sbEJhclxuICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAkKFwiI3JlbmRpbmdfYWN0aW9uc1wiKS5hbmltYXRlKHsgc2Nyb2xsVG9wOiAkKCcjcmVuZGluZ19hY3Rpb25zJykucHJvcChcInNjcm9sbEhlaWdodFwiKX0sIDE1MCk7IC8vIEF1dG8tU2Nyb2xsIGZvciBjb25zb2xlIFxuICAgICAgICAgICAgICAgIGlmKGdhbWVfb3Zlcil7ICAgICAgICAgICAgICAvLyBJUyBUSEUgU0lNVUxBVElPTiBPVkVSPywgaWYgc28sIHRoZW4uLi5cbiAgICAgICAgICAgICAgICAgICAgbGV0IG1lc3NhZ2UgPSBcIlwiICAgICAgICAvLyBJbml0IGV4aXQgbWVzc2FnZVxuICAgICAgICAgICAgICAgICAgICBpZih3aW5uZXI9PTEpeyAkKCcjd2lubmVyJykuYWRkQ2xhc3MoJ2JlZS1idW1ibGViZWUtd2lubmVyJyk7ICAgICAgIC8vIElmIHdpbm5lciBpcyBidW1ibGViZWUgdGhlbiBhZGQgY2xhc3MgXG4gICAgICAgICAgICAgICAgICAgICAgICAkKCcjd2lubmVyVGl0bGUnKS5odG1sKFwiQnVtYmxlYmVlIHdvbiFcIik7ICAgICAgICAgICAgICAgICAgICAgICAvLyBBcHBlbmQgd2lubmVyIHRleHRcbiAgICAgICAgICAgICAgICAgICAgICAgIG1lc3NhZ2UgKz0gXCJDb2xvbnkgQnVtYmxlYmVlIGtpbGxlZCBMZWFmY3V0dGVyJ3MgcXVlZW5cIjt9ZWxzZXsgIC8vIExhc3QgbWVzc2FnZSB0byBjb25zb2xlXG4gICAgICAgICAgICAgICAgICAgICAgICAkKCcjd2lubmVyJykuYWRkQ2xhc3MoJ2JlZS1sZWFmY3V0dGVyLXdpbm5lcicpOyAkKCcjd2lubmVyVGl0bGUnKS5odG1sKFwiTGVhZmN1dHRlciB3b24hXCIpOyAvLyBJZiB3aW5uZXIgaXMgbGVhZmN1dHRlciB0aGVuIGFkZCBjbGFzc1xuICAgICAgICAgICAgICAgICAgICAgICAgbWVzc2FnZSArPSBcIkNvbG9ueSBMZWFmY3V0dGVyIGtpbGxlZCBCdW1ibGViZWUncyBxdWVlblwiOyAgICAgICAgLy8gTGFzdCBtZXNzYWdlIHRvIGNvbnNvbGVcbiAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAkKCcjcmVuZGluZ19hY3Rpb25zJykuYXBwZW5kKG1lc3NhZ2UrXCJcXG5cIik7ICAgICAgICAgICAgICAgICAgICAgICAgIC8vIEFwcGVuZCBtZXNzYWdlIHRvIGNvbnNvbGVcbiAgICAgICAgICAgICAgICAgICAgJCgnI3JlbmRpbmdfYWN0aW9ucycpLmFkZENsYXNzKFwiaGlkZVNjcm9sbEJhclwiKSAgICAgICAgICAgICAgICAgICAgIC8vIEtpbmQgb2YgaGlkZSBzY3JvbGwgYmFyXG4gICAgICAgICAgICAgICAgICAgICQoJyNmYXN0ZXInKS5oaWRlKCk7ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgLy8gSGlkZSBmYXN0ZXIgYnV0dG9uXG4gICAgICAgICAgICAgICAgICAgICQoJyNzbG93ZXInKS5oaWRlKCk7ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgLy8gSGlkZSBTbG93ZXIgYnV0dG9uXG4gICAgICAgICAgICAgICAgICAgICQoXCIjcmVzdGFydFwiKS5yZW1vdmVDbGFzcyhcImQtbm9uZVwiKTsgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIC8vIFNob3cgUmVzdGFydCBidXR0b25cbiAgICAgICAgICAgICAgICAgICAgJCgnI3dpbm5lck1vZGFsJykubW9kYWwoJ3Nob3cnKTsgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAvLyBTaG93IHdpbm5lcidzIG1vZGFsICBcbiAgICAgICAgICAgICAgICAgICAgYnJlYWtGb3JBamF4ID0gdHJ1ZTsgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAvLyBCcmVhayBBSkFYXG4gICAgICAgICAgICAgICAgICAgIHhoci5hYm9ydCgpOyByZXR1cm47fSAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgLy8gRG91YmxlIGJyZWFrZXJcbiAgICAgICAgICAgIH0sXG4gICAgICAgICAgICBlcnJvciA6IGZ1bmN0aW9uKHhociwgdGV4dFN0YXR1cywgZXJyb3JUaHJvd24pIHsgIFxuICAgICAgICAgICAgICAgIGNvbnNvbGUubG9nKCdBamF4IHJlcXVlc3QgZmFpbGVkLicpOyAgXG4gICAgICAgICAgICB9XG4gICAgICAgIH0pO1xuICAgIH1cbn1cblxuJChcIiNmYXN0ZXJcIikub24oXCJjbGlja1wiLCBmdW5jdGlvbihldmVudCl7ICAgICAgICAgICAvLyBBY2VsZXJhdGUgdGhlIHJvdW5kJ3MgaW50ZXJ2YWxlXG4gICAgdGltZXIgPSB0aW1lci8xLjMgPiA1MDAgPyB0aW1lci8xLjMgOiA1MDA7ICAgICAgLy8gYnkgMS4zIHRpbWVzXG59KTtcblxuJChcIiNzbG93ZXJcIikub24oXCJjbGlja1wiLCBmdW5jdGlvbihldmVudCl7ICAgICAgICAgICAvLyBFeHRlbmQgdGhlIHJvdW5kJ3MgaW50ZXJ2YWxlXG4gICAgdGltZXIgPSB0aW1lcioxLjMgPCAzMDAwID8gdGltZXIqMS4zIDogMzAwMDsgICAgLy8gYnkgMS4zIHRpbWVzXG59KTtcblxuJChcIiNyZXN0YXJ0XCIpLm9uKFwiY2xpY2tcIiwgZnVuY3Rpb24oZXZlbnQpeyAgICAgICAgICAvLyBPbiBSZXN0YXJ0LCByZWZyZXNoIHBhZ2VcbiAgICBsb2NhdGlvbi5yZWxvYWQoKTtcbn0pO1xuXG5mdW5jdGlvbiBjdXN0b21SZXNvbHZlcih4KSB7ICAgICAgICAgICAgICAgICAgICAgICAgLy8gUmVzb2x2ZXIgZm9yIGF3YWl0J3MgZnVuY3Rpb25cbiAgICByZXR1cm4gbmV3IFByb21pc2UocmVzb2x2ZSA9PiB7XG4gICAgICAgIHNldFRpbWVvdXQoKCkgPT4ge1xuICAgICAgICByZXNvbHZlKHgpO1xuICAgICAgICB9LCB0aW1lcik7ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIC8vIFRha2luZyBmcm9tIHRoZSBnbG9iYWwgdGltZXIgdmFyXG4gICAgfSk7XG59XG5cbiQoZG9jdW1lbnQpLmtleWRvd24oZnVuY3Rpb24oZXZlbnQpIHsgICAgICAgICAgICAgICAvLyBUbyBjbG9zZSBtb2RhbCBpZiBrZXkgc2NhcGUgaXMgcHJlc3NlZFxuICAgIGlmIChldmVudC5rZXlDb2RlID09IDI3KSB7IFxuICAgICAgICAkKCcjd2lubmVyTW9kYWwnKS5oaWRlKCk7XG4gICAgfVxufSk7IiwiLy8gZXh0cmFjdGVkIGJ5IG1pbmktY3NzLWV4dHJhY3QtcGx1Z2luIl0sInNvdXJjZVJvb3QiOiIifQ==