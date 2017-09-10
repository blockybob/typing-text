<!DOCTYPE html>
	<html>
		<head>
			<script src="jquery-3.2.1.min.js"> </script>
			<style>
				#container {
					height: 100%;
					width: 100%;

					position: absolute;

					top: 0;
					left: 0;

					display: flex;
					justify-content: center;
				}

				#content {align-self: center;}

				#content p {text-align: center; font-size: 125%; font-family: Arial;}

			</style>
		</head>
		<body>
			<!-- This little heiarchy of divs allows the text to be totally centered (check css) -->
			<div id="container">
				<div id="content">
					<p id="greeting"></p>
				</div>
			</div>
			<script>
				$(document).ready(function() {


					var counter = -1; 	/* set at -1 because at the beginning of the type function, this code is used:
											counter++; which will set off which letter is used first
										*/

					var timer = setInterval(type, 200, "greeting"); // calls the type function and cycles through our word array

					function type(element, text) {
						var el = document.getElementById(element);
						var word = ["H", "e", "l", "l", "o", ", ", "I ", "a", "m ", "a ", "w", "e", "b ", "p", "a", "g", "e", ".", " "];
						counter++; 

						if(counter >= word.length) {

							counter = 18; 	/* set to the empty index at the end of our word array because it puts up undefined each time
											   we try to access an index that isn't in the array!
											*/
							clearInterval(timer); // stops the timer once we have reached the end

						}


						el.textContent = el.textContent + word[counter]; 	/* adds whatever letter is at the index counter represents
																			   to our word on the screen
																			*/
					}

				});
			</script>
		</body>
	</html>
