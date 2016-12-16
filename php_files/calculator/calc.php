<html>
        <head>
                <title>
                        Square me!
                </title>
        </head>
        <body>
		<?php
			
			$number = (int) $_POST["number1"];
			$number2 = (int) $_POST["number2"];
			$result = 0;

			if(isset($_POST['add'])){
				$result = $number + $number2;
				echo "<p align='center'> <font size='10pt'> $number + $number2 = $result";

			}elseif(isset($_POST['sub'])){
                                $result = $number - $number2;
                                echo "<p align='center'> <font size='10pt'> $number - $number2 = $result";

			}elseif(isset($_POST['mul'])){
                                $result = $number * $number2;
                                echo "<p align='center'> <font size='10pt'> $number * $number2 = $result";

			}elseif(isset($_POST['div'])){
                                $result = $number / $number2;
                                echo "<p align='center'> <font size='10pt'> $number / $number2 = $result";

			}elseif(isset($_POST['squ'])){
                                $result = $number ** $number2;
                                echo "<p align='center'> <font size='10pt'> $number ^ $number2 = $result";

			}else{

				echo "you aren't supposed to be here!";

			}
		?>
        </body>
</html>
