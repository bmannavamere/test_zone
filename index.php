<!doctype html>
<html lang="en">
  <head>
    <meta name="robots" content="noindex, nofollow">
    <meta name="author" content="The Mann">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/master.css">
    <title>poc</title>
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="app.js" charset="utf-8"></script>
  </head>
  <body>
    <div class="container">
      <div class="row mt-5">
        <div class="col-lg-12">
          <h1>Custom SWOT Analysis Survey</h1>
        </div>
        <div class="col-lg-12">

          <form id="surveyForm" action="" method="post">

            <div id="simple-list" class="row mt-5">

              <h4 class="col-12">Strengths</h4>

              <ul id="sortable" class="list-group col">
                <li id="00001" class="list-group-item">Cras justo odio</li>
                <li id="00002" class="list-group-item">Dapibus ac facilisis in</li>
                <li id="00003" class="list-group-item">Morbi leo risus</li>
                <li id="00004" class="list-group-item"><input type="text" name="" value="" placeholder="custom (optional)"></li>
                <li id="00005" class="list-group-item"><input type="text" name="" value="" placeholder="custom (optional)"></li>
              </ul>

              <h4 class="col-12 mt-5">Weaknesses</h4>
              <ul id="sortable2" class="list-group col">
                <li id="00001" class="list-group-item">Cras justo odio 2</li>
                <li id="00002" class="list-group-item">Dapibus ac facilisis in 2</li>
                <li id="00003" class="list-group-item">Morbi leo risus 2</li>
                <li id="00004" class="list-group-item"><input type="text" name="" value="" placeholder="custom (optional)"></li>
                <li id="00005" class="list-group-item"><input type="text" name="" value="" placeholder="custom (optional)"></li>
              </ul>

              <!-- <h4 class="col-12">Opportunities</h4>

              <h4 class="col-12">Threats</h4> -->

            </div>

            <div class="mt-5">
              <input name="Submit" value="Submit" type="submit" />
            </div>
          </form>​

        </div>
      </div>
    </div>

  </body>
</html>
