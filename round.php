<?php
    $showNumber = $_POST["showNumber"];
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
    <link href="styles.css" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="https://i.kym-cdn.com/photos/images/original/001/318/758/bbe.png" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.3/underscore-min.js"></script>
    <title>Playing Game</title>
</head>

<div class="title-header">GEPPER-D!</div>

<body onload="showBoard()">
  <audio id="music" src="theme.mp3" loop="loop"></audio>
  <h1 class="score-header" id="score"></h1>
  <!-- Jeopardy and Double Jeopardy Board -->
	<div class="container normal-boards" id="normalBoard">
        <div class="row" id="categories"></div>

        <div>
            <div class="row" id="$200"></div>
            <div class="row" id="$400"></div>
            <div class="row" id="$600"></div>
            <div class="row" id="$800"></div>
            <div class="row" id="$1000"></div>
        </div>
    </div>

    <div class="daily-double" id="dailyDouble">
        <h3>You've found a Daily Double!</h3>
        <h4>Enter your wager: $<input type="text" id="ddEntry"></h4><br>
        <button onclick="showDailyDouble()">See Question</button>
    </div>

    <div class="final-jeopardy" id="finalJeopardy">
        <div class="category col-md-6 offset-md-3" id="finalClue"></div>
        Enter your wager: $<input type="text" id="wagerEntry"><br>
        <button onclick="showFinalQuestion()">See Question</button>
    </div>

    <div class="end-of-game" id="endGame">
      <center>
        <p>Game over! Your final score was</p>
        <p id="finalScore"></p>
        <a href="index.html">Play again?</a>
      </center>
    </div>

    <div class="invisible-div" id="showNumberDiv">
        <?php echo $showNumber ?>
    </div>

    <button onclick="initializeClueBoard('F')">Final Jeopardy</button>

  <div id="qModal" class="modal">

    <div class="modal-content">
      <p id="question"></p>
      <button id = "show" type="button" class="btn btn-default">Show Answer</button>
  <center>
      <div class="correctness-selector" id="correctness">
        <p>Did you get the question correct?</p>
        <button id = "yesCorrect" type="button" class="btn btn-default">Yes</button>
        <button id = "noCorrect" type="button" class="btn btn-default">No</button>
        <button id = "pass" type="button" class="btn btn-default">Pass</button>
      </div>
    </div>
  </center>
</div>
<script>
    var showNumber = "<?php echo $showNumber ?>";
</script>
<script src="js/app.js"></script>
</body>
</html>
