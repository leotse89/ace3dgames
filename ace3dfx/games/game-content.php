<?php
if(isset($_GET["page"])){
	//DATA-----------------
	//for all arrays, index 0 is for crazy planets
	//index 1 is for ace hockey
	//index 2 is for crazy jump
	$gameheadlink = array(
		"imgs/crazy-planets.jpg",
		"imgs/ace-hockey.jpg",
		"imgs/crazy-jump.jpg"
	);
	
	$gameandroid = array(
		"http://play.google.com/store/apps/details?id=com.ACE3DFX.CrazeyPlanets",
		"#",
		"#"
		
	);
	
	//on google play: "imgs/play-store.png"
	//not on google play: "imgs/no-play-store.png"
	$gameandroidbtn = array(
		"imgs/play-store.png",
		"imgs/no-play-store.png",
		"imgs/no-play-store.png"
	);
	
	$gameios = array(
		"https://itunes.apple.com/ca/app/crazy-planets/id816050899?mt=8",
		"https://itunes.apple.com/ca/app/ace-hockey/id448021350?mt=8",
		"#"
		
	);
	
	//on app store: "imgs/app-store.png"
	//not on app store: "imgs/no-app-store.png"
	$gameiosbtn = array(
		"imgs/app-store.png",
		"imgs/app-store.png",
		"imgs/no-app-store.png"
	);
	
	$gametitle = array(
		"Crazy Planets",
		"Ace Hockey",
		"Crazy Jump"
	);
	
	$gamedesc = array(
		"<p>Addictive fun arcade game where you blow up as many planets as possible within a given time. The objective of the game is similar to many time attack games. You have 1 minute to get as many points as possible. The more planets you blow in a row, the more points you get!</p>
         <p>But there are tricks to it... you can actually beat the clock if you are able to blow Tetris like patterns while using your special items wisely.
    Figure out when to use your special items and when to blow patterns and you will get the ultimate points!</p>",
		
		"<p>This game is what you might call “just another hockey game”. WRONG. ACE-HOCKEY is not just another hockey game. It is not even a hockey game. In this game you are supposed to ACE through two of the hardest challenges of hockey.</p>
		<p>1- Beating the goalie<br/>
2- Target plates<br/>
3- Deking</p>
		<p>In this game, you have the option of practicing and learning, simply by choosing to practice in the category of your choice and when you feel comfortable take on the goalie or the targets. Is that it? No, of course not. In each section, time is your opponent, so score as fast as you can before the time is up. But this is it right? Nope. Actually, the goalies change as you progress in the game and each new goalie is certainly better than the one before (accuracy, reflex…). And in targeting you face different types of targets (blinking, moving, random popups…).
Are we done? Not quite yet. Let’s say you went on and scored a whole bunch of points and finally the game is over. At this time, you can submit your new score online via “OpenFeint” system, and compare yourself with other players, and even brag about your achievement on Twitter or Facebook.
Ok then, stop reading and start playing.</p>",

		"<p>Jump like crazy!</p>"
	
	);
	
	$gameimgs = array(
		"<img src='games/imgs/crazy-planets/1.png' title='Crazy Planets' />
		<img src='games/imgs/crazy-planets/2.png' title='Crazy Planets' />
		<img src='games/imgs/crazy-planets/3.png' title='Crazy Planets' />
		<img src='games/imgs/crazy-planets/4.png' title='Crazy Planets' />
		<img src='games/imgs/crazy-planets/5.png' title='Crazy Planets' />",
		
		"<img src='games/imgs/ace-hockey/1.png' title='Ace Hockey' />
		<img src='games/imgs/ace-hockey/2.png' title='Ace Hockey' />",
		
		"<img src='games/imgs/crazy-jump/1.png' title='Crazy Jump' />
		<img src='games/imgs/crazy-jump/2.png' title='Crazy Jump' />"
					
	);
	
	$gamerec = array(
		"<div id='gp_left_col'>
         	<a href='/ace3dfx/index.php?page=ace-hockey'><h2>Ace Hockey</h2><img src='imgs/ace-hockey.jpg' title='Ace Hockey' /></a>
         </div>
         <div id='gp_right_col'>
            <a href='/ace3dfx/index.php?page=crazy-jump'><h2>Crazy Jump</h2><img src='imgs/crazy-jump.jpg' title='Crazy Jump' /></a>
		</div>",
		
		"<div id='gp_left_col'>
         	<a href='/ace3dfx/index.php?page=crazy-planets'><h2>Crazy Planets</h2><img src='imgs/crazy-planets.jpg' title='Crazy Planets' /></a>
         </div>
         <div id='gp_right_col'>
           	<a href='/ace3dfx/index.php?page=crazy-jump'><h2>Crazy Jump</h2><img src='imgs/crazy-jump.jpg' title='Crazy Jump' /></a>
       	</div>",
		
		"<div id='gp_left_col'>
         	<a href='/ace3dfx/index.php?page=crazy-planets'><h2>Crazy Planets</h2><img src='imgs/crazy-planets.jpg' title='Crazy Planets' /></a>
         </div>
         <div id='gp_right_col'>
         	<a href='/ace3dfx/index.php?page=ace-hockey'><h2>Ace Hockey</h2><img src='imgs/ace-hockey.jpg' title='Ace Hockey' /></a>
        </div>"
				
	);
	//DATA END --------------------------------
	
	
	//THE PAGE
	echo " <div id='game'>
            <div id='gd_left_col'>
			<img src='".$gameheadlink[$_GET['page']]."' title='".$gametitle[$_GET['page']]."'/>
			<h1>".$gametitle[$_GET['page']]."</h1>
			".$gamedesc[$_GET['page']]."
			<div id='google_btn'>
                    <a href='".$gameandroid[$_GET['page']]."'><img src='".$gameandroidbtn[$_GET['page']]."'/></a>
                </div>
				<div id='apple_btn'>
                    <a href='".$gameios[$_GET['page']]."'><img src='".$gameiosbtn[$_GET['page']]."'/></a>
                </div>
                <div class='clear'></div>
            </div>
			<div id='gd_right_col'>
                
                <div id='ss_slide'>
                    ".$gameimgs[$_GET['page']]."
                </div>
                <div id='gg_pn_arrows'>
                    <div id='gg_prev'><a><img src='imgs/prev.png' title='previous'/></a></div>
                    <div id='gg_next'><a><img src='imgs/next.png' title='next'/></a></div>
                </div>
			</div>
			</div>
        <div class='clear'></div>

        	<div id='games'>
            	<h1>You may also like...</h1>
            	".$gamerec[$_GET['page']]."
            </div>
        </div>";

}
?>