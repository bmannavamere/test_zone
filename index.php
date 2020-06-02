<!doctype html>
<html lang="en">
  <head>
    <meta name="robots" content="noindex, nofollow">
    <meta name="author" content="MarCom">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/master.css">
    <title>poc</title>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js" charset="utf-8"></script>
    <script src="app.js" charset="utf-8"></script>
  </head>
  <body>
    <div class="container">
      <div class="row mt-5">
        <div class="col-lg-12">
          <h1>SWOT Analysis Survey</h1>
        </div>
        <div class="col-lg-12">

          <br>
          <p><i>Instructions:</i><br>
            Please order the following based on their level of importance to you.<br>
            When you are done click submit at the bottom. Thank you!</p>

          <form id="surveyForm" action="" method="post">

            <div id="simple-list" class="row mt-5">

              <h4 class="col-12">Strengths</h4>

              <ul id="sortable" class="list-group col">
                <li id="00001" class="list-group-item">strength 1</li>
                <li id="00002" class="list-group-item">strength 2</li>
                <li id="00003" class="list-group-item">strength 3</li>
                <li id="00004" class="list-group-item"><input type="text" name="" value="" placeholder="custom (optional)"></li>
                <li id="00005" class="list-group-item"><input type="text" name="" value="" placeholder="custom (optional)"></li>
              </ul>

              <h4 class="col-12 mt-5">Weaknesses</h4>
              <ul id="sortable2" class="list-group col">
                <li id="00001" class="list-group-item">weakness 1</li>
                <li id="00002" class="list-group-item">weakness 2</li>
                <li id="00003" class="list-group-item">weakness 3</li>
                <li id="00004" class="list-group-item"><input type="text" name="" value="" placeholder="custom (optional)"></li>
                <li id="00005" class="list-group-item"><input type="text" name="" value="" placeholder="custom (optional)"></li>
              </ul>

              <h4 class="col-12 mt-5">Opportunities</h4>
              <ul id="sortable3" class="list-group col">
                <li id="00001" class="list-group-item">Opportunity 1</li>
                <li id="00002" class="list-group-item">Opportunity 2</li>
                <li id="00003" class="list-group-item">Opportunity 3</li>
                <li id="00004" class="list-group-item"><input type="text" name="" value="" placeholder="custom (optional)"></li>
                <li id="00005" class="list-group-item"><input type="text" name="" value="" placeholder="custom (optional)"></li>
              </ul>

              <h4 class="col-12 mt-5">Threats</h4>
              <ul id="sortable4" class="list-group col">
                <li id="00001" class="list-group-item">Threats 1</li>
                <li id="00002" class="list-group-item">Threats 2</li>
                <li id="00003" class="list-group-item">Threats 3</li>
                <li id="00004" class="list-group-item"><input type="text" name="" value="" placeholder="custom (optional)"></li>
                <li id="00005" class="list-group-item"><input type="text" name="" value="" placeholder="custom (optional)"></li>
              </ul>

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
