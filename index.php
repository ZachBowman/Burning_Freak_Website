<!DOCTYPE html>
<html>
	<head>
		<title>Burning Freak</title>
		<meta charset="utf-8">
		<meta name="description" content="Art on Fire. Games, Music, Videos.">
		<meta name="keywords" content="games, cricketheads, nightmare games, blockhead, boxland, headworms, empty space, emptyspace, mister scoops,
		penis pop, cheesemonkey, ultraguy">

		<link rel="icon" type="image/png" href="./images/burn_icon9.png">
		<link rel="shortcut icon" type="image/ico" href="./images/burn_icon9.ico">
		<link rel="stylesheet" type="text/css" href="burningfreak.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src = "burningfreak.js"></script>
	</head>
	
	<body>
		<div id="container">
			<div id="label">
				<!-- img src="./images/dudes.png"-->
			</div>
			<div id="left">
				<a href="http://scoopsmeatland.blogspot.com">
					<img src="./images/project_misterscoops3.png"
					 onMouseOver="this.src='images/project_misterscoops3a.png'"
					 onMouseOut="this.src='images/project_misterscoops3.png'"
					 alt="Mister Scoops">
				</a>
				</br>
				<a href="http://www.zachbowman.com">
					<img src="./images/project_zachbowman4.png"
					 onMouseOver="this.src='images/project_zachbowman4a.png'"
					 onMouseOut="this.src='images/project_zachbowman4.png'"
					 alt="Zach Bowman">
				</a>
				</br>
				<!--a href="http://www.burningfreak.com/jayecifer">
					<!img src="images/project_jayecline3.png"
					 onMouseOver="this.src='images/project_jayecline3a.png'"
					 onMouseOut="this.src='images/project_jayecline3.png'"
					 alt="Jaye.Cline">
				</a>
				</br-->
				<div id="lower">
					<a href="http://www.burningfreak.com/games">
						<img src="./images/tile_games.png"
						 onMouseOver="this.src='images/tile_gamesOver.png'"
						 onMouseOut="this.src='images/tile_games.png'"
						 alt="Games">
					</a>
					</br>
          <div id = "music_link">
						<img src="./images/tile_music.png"
						 onMouseOver="this.src='images/tile_musicOver.png'"
						 onMouseOut="this.src='images/tile_music.png'"
						 alt="Music">
          </div>
			    <div class = "menu" id = "music">
			    	<a href="http://scoopsmeatland.blogspot.co.uk/">Mister Scoops</a><br>
			    	<a href="http://burningfreak.com/emptyspace/">Empty Space</a><br>
			    	<a href="http://burningfreak.com/penispop/">Penis Pop</a><br>
			    	<a href="http://burningfreak.com/cheesemonkey/">Cheesemonkey</a>
			    </div>					
        <!-- </br>
					<a href="http://www.burningfreak.com/other">
						<img src="./images/tile_other.png"
						 onMouseOver="this.src='images/tile_otherOver.png'"
						 onMouseOut="this.src='images/tile_other.png'"
						 alt="Other">
					</a> -->
				</div>
			</div>
			<div id="center">
				<img src="./images/BFlogo.png">
			</div>
			<div id="right">
				<div>
					<a href="javascript:panel_fadeout_left()" id="arrowleft">
						<img src="./images/arrow_left3.png"
						 onMouseOver="this.src='./images/arrow_left3a.png'"
						 onMouseOut="this.src='./images/arrow_left3.png'">
					</a>
				
					<a href="http://scoopsmeatland.blogspot.com/" id="panel_link">
						<img src="./images/panel_2012a.png" id="panel_image">
					</a>
				
					<a href="javascript:panel_fadeout_right()" id="arrowright">
						<img src="./images/arrow_right3.png"
						 onMouseOver="this.src='./images/arrow_right3a.png'"
						 onMouseOut="this.src='./images/arrow_right3.png'">
					</a>
				</div>
				<iframe id="vid" width="500" height="350" src=""></iframe>
				<script>
					updatePanel();
					document.getElementById('vid').src='http://www.youtube.com/embed/videoseries?list=PLF423D1899F6089A2&autoplay=1;&hd=1;&autohide=1;&controls=0;&index=' +random_range(1,18);
				</script>
			</div>
		</div>
	</body>
<html>
