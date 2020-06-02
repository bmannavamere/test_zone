$(document).ready(function(){


  // Get the data and pass it to chart.js func below
  $.ajax({
    method: "POST",
    url: "get_data.php",
    success: function(data){
      console.log(data);

      // GOAL - in order to make the labels I need every unique strength value in 'single quotes'
      




      var ctx = document.getElementById('myChart').getContext('2d');
      var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'line',

        // The data for our dataset
        data: {
          labels: ['Strength 1', 'Strength 2', 'Strength 3', 'Strength 4', 'Strength 5', 'Strength 6', 'Strength 7'],
          // labels: data,
          datasets: [{
            label: 'My First dataset',
            backgroundColor: '#009cdc',
            borderColor: '#000',
            data: [0, 10, 5, 2, 20, 30, 45]
            // data: data
          }]
        },

        // Configuration options go here
        options: {}
      });




    }
  }).done(function(){

  });




});
