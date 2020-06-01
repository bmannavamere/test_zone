$(document).ready(function(){


  // https://api.jqueryui.com/sortable
  $( "#sortable, #sortable2" ).sortable({
    // placeholder: "ui-state-highlight",
    // // TODO: ON HOVER CURSOR NOT RIGHT
    cursor: "move",
    update: function(event, ui) {
      // getStrengths();
      // getWeaknesses();
      // getOpportunities();
      // getThreats();
    }
  });
  $( "#sortable" ).disableSelection();


  function getStrengths() {
    $.each($('#sortable').find('li, input'), function() {
      if ($(this).val()) {
        console.log($(this).val());
      } else if ($(this).text()) {
        console.log($(this).text());
      }
    });
  }


  function getWeaknesses() {
    $.each($('#sortable2').find('li, input'), function() {
      if ($(this).val()) {
        console.log($(this).val());
      } else if ($(this).text()) {
        console.log($(this).text());
      }
    });
  }


  function getOpportunities() {

  }


  function getThreats() {

  }

  $("#surveyForm").submit(function(e) {
    e.preventDefault();

    // TODO: CREATE A CUSTOM USER ID AND UPDATE SUBS ON THAT

    // TODO: GET ALL ZE STUFF TO ZEND
    // PUT IT ALL IN ARRAZE OR ZUMTHING
    getStrengths();
    getWeaknesses();
    getOpportunities();
    getThreats();

    $.ajax({
      type: "POST",
      url: "./php/edit_col.php",
      data:{user_id:user_id,strengths:strengths,weaknesses:weaknesses,opportunities:opportunities,threats:threats},
      success: function(data) {

        if (data === "success") {
          console.log('success');

          //  show em a modal or something,
          // then redirect them to avameremarketing.com BAM

        } else if (data === "failure") {
          alert('Call the dev, things are broken');
        }

      }
    }).done(function(){
      // in case i want to do something here
    });
  })

});
