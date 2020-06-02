$(document).ready(function(){


  // https://api.jqueryui.com/sortable
  $( "#sortable, #sortable2, #sortable3, #sortable4" ).sortable({
    // TODO: ON HOVER CURSOR NOT RIGHT
    cursor: "move",
    update: function(event, ui) {

      // Instead of calling these on update, they're called on form submit

      // getStrengths();
      // getWeaknesses();
      // getOpportunities();
      // getThreats();
    }
  });
  $( "#sortable" ).disableSelection();


  var strengths = [];
  function getStrengths() {
    $.each($('#sortable').find('li, input'), function() {
      if ($(this).val()) {
        strengths.push($(this).val());
      } else if ($(this).text()) {
        strengths.push($(this).text());
      }
    });
    return strengths;
  }


  var weaknesses = [];
  function getWeaknesses() {
    $.each($('#sortable2').find('li, input'), function() {
      if ($(this).val()) {
        weaknesses.push($(this).val());
      } else if ($(this).text()) {
        weaknesses.push($(this).text());
      }
    });
    return weaknesses;
  }


  var opportunities = [];
  function getOpportunities() {
    $.each($('#sortable3').find('li, input'), function() {
      if ($(this).val()) {
        opportunities.push($(this).val());
      } else if ($(this).text()) {
        opportunities.push($(this).text());
      }
    });
    return opportunities;
  }


  var threats = [];
  function getThreats() {
    $.each($('#sortable4').find('li, input'), function() {
      if ($(this).val()) {
        threats.push($(this).val());
      } else if ($(this).text()) {
        threats.push($(this).text());
      }
    });
    return threats;
  }


  $("#surveyForm").submit(function(e) {
    e.preventDefault();

    // Unique user ID ( milliseconds since Jan 1st 1970 )
    // TODO: set a cookie instead so their id stays the same
    var user_id = Date.now();

    // Call the functions that get the order of values in the SWOT
    getStrengths();
    getWeaknesses();
    getOpportunities();
    getThreats();

    console.log(user_id +' '+  strengths + weaknesses + opportunities + threats);

    $.ajax({
      type: "POST",
      url: "./php/send.php",
      data:{user_id:user_id,strengths:strengths,weaknesses:weaknesses,opportunities:opportunities,threats:threats},
      success: function(data) {

        if (data === "success") {
          console.log('success');

          // Send submittor to the thank you page.
          window.location.href = "thank-you.php";

          // // clear the arrays
          // var strengths = [];
          // var weaknesses = [];
          // var opportunities = [];
          // var threats = [];

        } else if (data === "failure") {
          alert('Call the dev, things are broken');
        }

      }
    });

  });

});
