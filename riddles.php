<!DOCTYPE html>
<html>
<head>
	<meta charset="utf=8">
	<link rel="stylesheet" href="style.css">
	<!-- <script type="text/javascript">
		var trueAnswersQuantuty = 0;

		function checkAnswer(input, Answers){
			var userAnswer = document.getElementById(input).value;
			userAnswer = userAnswer.toLowerCase();		
			for (i = 0; i < Answers.length; i++){
				if (userAnswer == Answers[i]) {
					trueAnswersQuantuty++;
					break;
				}
			}	
			return trueAnswersQuantuty;
		}


		function checkAnswers() {
			checkAnswer("userAnswer1", ["язык"]); 
			checkAnswer("userAnswer2", ["наперсток", "напёрсток"]);
			checkAnswer("userAnswer3", ["яма", "ямка"]);
			checkAnswer("userAnswer4", ["к", "букву к", "буква к", "k"]);

			alert("Количество верных ответов: " + trueAnswersQuantuty);
		}
		
	</script> -->

	<title>Mano puslapis</title>
</head>
<body>

<div class="content">
	<div class="header">
		<a href="index.php">Главная</a>
		<a href="riddles.php">Загадки</a>
		<a href="guessTheNumber.html">Угадай число</a>

	</div>	
	
	<div class="contentWrap">
		<div class="content">
			<div class="center">
				
				<h1>Загадки</h1>

				<div class="box">
					<?php  

						if isset($_GET['userAnswer1']) && isset($_GET['userAnswer2']) && isset($_GET['userAnswer3']) && isset($_GET['userAnswer4']) {

							$score = 0;

							$userAnswer = $_GET["userAnswer1"];
							if($userAnswer == "язык") {
								$score++
							}

							$userAnswer = $_GET["userAnswer2"];
							if($userAnswer == "наперсток" || $userAnswer == "напёрсток") {
								$score++
							}

							$userAnswer = $_GET["userAnswer3"];
							if($userAnswer == "яма" || $userAnswer == "ямка") {
								$score++
							}						

							$userAnswer = $_GET["userAnswer4"];
							if($userAnswer == "к" || $userAnswer == "букву к" || $userAnswer == "буква к" || $userAnswer == "k") {
								$score++
							}						

							echo "Количество верных ответов: " . $score;
							}

						


					?>

					<form method="GET">
					<p>Если б не было его, не сказал бы ничего.</p>
					<input type="text" name="userAnswer1">

					<p>На ямке, ямке сто ямок с ямкой.</p>
					<input type="text" name="userAnswer2">

					<p>Чем больше отдаю, <br>Тем больше вырастаю, <br>Величину свою <br>Отдачей измеряю.</p>
					<input type="text" name="userAnswer3">			

					<p>Загадка у меня к вам есть, <br>Загадка непростая: <br>Какую букву можно есть, <br>Когда она пустая?</p>
					<input type="text" name="userAnswer4">

					<br>
					<input type="submit" value="Ответить" name="">		
					</form>			

				</div>
			</div>
		</div>
	</div>

	
</div>
<div class="footer">
	Copyright &copy; I.N.
</div>

</body>
</html>