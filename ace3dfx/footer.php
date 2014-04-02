	</div>
</div>
<div id="footer">
	<div id="footer_content">
    	<a href="/ace3dfx/index.php?page=home" title="Home"><img src="imgs/logo_white.png" id="logo_bottom"/></a>
    	<div id="shortcuts">
            <ul>
            	<li><a href="/ace3dfx/index.php?page=about">About us</a></li>
                <li><a href="/ace3dfx/index.php?page=games">Games</a></li>
            	<li><a href="http://localhost/wordpress/" target="_blank">Forum</a></li>
                <li><a href="/ace3dfx/index.php?page=contact">Contact us</a></li>
                <li><a href="http://www.linkedin.com/company/ace3dfx-inc-?trk=top_nav_home" target="_blank" title="LinkerIn">LinkedIn</a></li>
                <li><a href="https://twitter.com/RedEyesKirby" target="_blank" title="Twitter">Twitter</a></li>
                <li><a href="https://www.facebook.com/pages/Ace3DFX-Inc/222291881153664" target="_blank" title="Facebook">Facebook</a></li>
            </ul>
        </div>
        <br/>
    	<div id="copyright">&copy;2014 <span class="ace">ACE</span>3DGAMES Inc. All Right Reserved.</div>
   	</div>
</div>
</body>
<script>
$(document).ready(function(){
	$("#r_menu_icon").click(function(){
		$("#r_menu_options").fadeToggle("slow", function(){});
	});
	
	/* HomePage Slideshow */
	$("#slides a").first().addClass("active");
	$("#slides a").hide();
	$(".active").show();
	
	$("#prev").click(function(){
		$(".active").removeClass("active").addClass("prev_active");
		if ($(".prev_active").is(":first-child")){
			$("#slides a").last().addClass("active");
		} else {
			$(".prev_active").prev().addClass("active");	
		}
		
		$(".prev_active").removeClass("prev_active");
		
		$("#slides a").fadeOut();
		$(".active").fadeIn();
	});
	
	$("#next").click(function(){
		$(".active").removeClass("active").addClass("prev_active");
		
		if ($(".prev_active").is(":last-child")){
			$("#slides a").first().addClass("active");
		} else {
			$(".prev_active").next().addClass("active");	
		}
		
		$(".prev_active").removeClass("prev_active");
		
		$("#slides a").fadeOut();
		$(".active").fadeIn();
	});
	
	/* Game Description Page Slideshow */
	$("#ss_slide img").first().addClass("active");
	$("#ss_slide img").hide();
	$(".active").show();
	
	$("#gg_prev").click(function(){
		$(".active").removeClass("active").addClass("prev_active");
		if ($(".prev_active").is(":first-child")){
			$("#ss_slide img").last().addClass("active");
		} else {
			$(".prev_active").prev().addClass("active");	
		}
		
		$(".prev_active").removeClass("prev_active");
		
		$("#ss_slide img").fadeOut();
		$(".active").fadeIn();
	});
	
	$("#gg_next").click(function(){
		$(".active").removeClass("active").addClass("prev_active");
		
		if ($(".prev_active").is(":last-child")){
			$("#ss_slide img").first().addClass("active");
		} else {
			$(".prev_active").next().addClass("active");	
		}
		
		$(".prev_active").removeClass("prev_active");
		
		$("#ss_slide img").fadeOut();
		$(".active").fadeIn();
	});
});
</script>
</html>