
<!doctype html>
<html lang="en">
<head>
  <title>Gaming Society Join and Participate Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.9/css/unicons.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="ticketpage.css">
  <script src="ticketpage.js"></script> 
</head>
<body>
	
	<div>
		<button class="btn"><a href="home.php">&#8810;</a></button>
	</div>
	<div class="section">
		<div class="container">
			<div class="row full-height justify-content-center">
				<div class="col-12 text-center align-self-center py-5">
					<div class="section pb-5 pt-5 pt-sm-2 text-center">
						<h6 class="mb-0 pb-3"><span>Audience</span><span>Participate</span></h6>
			          	<input class="checkbox" type="checkbox" id="reg-log" name="reg-log"/>
			          	<label for="reg-log"></label>
						<div class="card-3d-wrap mx-auto">
							<div class="card-3d-wrapper">
								<div class="card-front">
									<div class="center-wrap">
										<div class="section text-center">
											<h4 class="mb-4 pb-3">Join The Audience Side !</h4>
											
											<form id="audience" action="audience.php" method="post">
												<div class="form-group">
													<input type="email" name="email" class="form-style" placeholder="Email"> 
													<i class="input icon uil uil-at"></i>
												</div>
												<div class="form-group mt-2">
													<label for="date">Choose your date : </label><br>
													<input type="date" name="date" class="form-style" placeholder="Date" min="2024-03-01" max="2024-06-19">
													<i class="input icon uil uil-calender"></i>
											   </div>
											   <div class="form-group mt-2">
												<label for="tickets">Choose an event you want to attend : </label>
												<i class="uil uil-book-open"></i><br>
			                                        
												
												<input type="radio" id="tournaments" name="choice" value="tournaments" onclick="showSelect()">
												<label for="tournaments" class="custom-radio"></label>
												<label for="tournaments">Gaming Tournaments</label>
												<div id="hidden" class="hidden">
												<select id="games" name="games" placeholder="Select a">
													<option value="League">League of Legends</option>
													<option value="Valorant">Valorant</option>
													<option value="SSB">Super Smash Bros</option>
													<option value="OW2">Overwatch 2</option>
													<option value="Fortnite">Fortnite</option>
												</select>
												</div><br>

												<input type="radio" id="gamenights" name="choice" value="gamenights" onclick="hideSelect()">
												<label for="gamenights" class="custom-radio"></label>
												<label for="gamenights">Game Nights</label><br>
			
												<input type="radio" id="speaker" name="choice" value="speaker" onclick="hideSelect()">
												<label for="speaker" class="custom-radio"></label>
												<label for="speaker">Guest Speaker Events</label><br>        
												
												<input type="radio" id="trivia" name="choice" value="trivia" onclick="hideSelect()">
												<label for="trivia" class="custom-radio"></label>
												<label for="trivia">Trivia Nights</label><br> 
												
												<input type="radio" id="cosplay" name="choice" value="cosplay" onclick="hideSelect()">
												<label for="cosplay" class="custom-radio"></label>
												<label for="cosplay">Cosplay Contests</label><br>
												
												<input type="radio" id="icebreaking" name="choice" value="icebreaking" onclick="hideSelect()">
												<label for="icebreaking" class="custom-radio"></label>
												<label for="icebreaking">Ice Breaking</label><br>
												
											   </div>
											   <div class="form-group mt-2">
												<input type="tel" name="phone" class="form-style" pattern="[0-9]{3}-[0-9]{7}" placeholder="Phone Number"> 
												<i class="input icon uil uil-phone-alt"></i>
											   </div>
			
											   <div class="form-group mt-2">
												<input type="number" name="num_people" class="form-style" step="1" min="1" placeholder="Number of people"> 
												<i class="uil uil-user"></i><br>
			
												<button type="submit" class="btn mt-4">Join</button> 
											   </form>
				      					</div>
			      					</div>
			      				</div>
								<div class="card-back">
									<div class="center-wrap">
										<div class="section text-center">
											<h4 class="mb-3 pb-3">Be a Participant !</h4>
											<form id="participate" action="participate.php" method="post"> 

												<div class="form-group">
													<input type="textbox" name="name" class="form-style" placeholder="Name"> 
													<i class="uil uil-users-alt"></i>
												</div>

												<div class="form-group">
													<input type="email" name="email" class="form-style" placeholder="Email"> 
													<i class="input icon uil uil-at"></i>
												</div>
												<div class="form-group mt-2">
													<label for="date">Choose your date : </label><br>
													<input type="date" name="date" class="form-style" placeholder="Date" min="2024-03-01" max="2024-06-19">
													<i class="input icon uil uil-calender"></i>
											   </div>

											   <div class="form-group mt-2">
												<label for="tickets">Choose an event you want to attend : </label>
												<i class="uil uil-book-open"></i><br>

												<input type="radio" id="participate-tournaments" name="choice" value="participate-tournaments" onclick="showSelect2()">
												<label for="participate-tournaments" class="custom-radio"></label>
												<label for="participate-tournaments">Gaming Tournaments</label>
												<div id="participate-hidden" class="participate-hidden">
												<select id="participate-games" name="participate-games">
													<option value="League">League of Legends</option>
													<option value="Valorant">Valorant</option>
													<option value="SSB">Super Smash Bros</option>
													<option value="OW2">Overwatch 2</option>
													<option value="Fortnite">Fortnite</option>
												</select>
												</div><br>
												
												<input type="radio" id="participate-cosplay" name="choice" value="participate-cosplay" onclick="hideSelect2()">
												<label for="participate-cosplay" class="custom-radio"></label>
												<label for="participate-cosplay">Cosplay Contests</label><br>
												
											   </div>

											   <div class="form-group mt-2">
												<input type="tel" name="phone" class="form-style" pattern="[0-9]{3}-[0-9]{7}" placeholder="Phone Number"> 
												<i class="input icon uil uil-phone-alt"></i>
											   </div>
			
											   <div class="form-group mt-2">
												<input type="number" name="num_people" class="form-style" step="1" min="1" placeholder="Number of people"> 
												<i class="uil uil-user"></i><br>
												</div>
			
												<button type="submit" class="btn mt-4">Participate</button>
											   </form>
	
											</form>
				      					</div>
			      					</div>
			      				</div>
			      			</div>
			      		</div>
			      	</div>
		      	</div>
	      	</div>
	    </div>
	</div>
</php>
</body>
</html>
