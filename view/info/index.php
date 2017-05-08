	<div id="h2color">
		<content>
			<div id="info-top">
				<img id="img-prof" src="public/media/imgs/profile-pic-website.png" alt="profile picture">
				<div id="right">
					<h2 class="text-box-all">Naam: <?= $info['info_name']; ?></h2>
					<h2 id="leeftijd" class="text-box-all">Leeftijd: <?= $age['age']; ?></h2>
					<h2 class="text-box-all">Woonplaats: <?= $info['info_residence']; ?></h2>
					<h2 class="text-box-all">Vooropleiding: <?= $info['info_for-study']; ?></h2>
					<h2 class="text-box-all">Huidige opleiding: <?= $info['info_cur-study']; ?></h2>
				</div>
			</div>
			<div class="text-box">
				<h2>Ervaring met:</h2>
				<ul>
					<div class="perc-bar"><li id="li1" class="text-box-all">HTML</li></div>
					<div class="perc-bar"><li id="li2" class="text-box-all">CSS</li></div>
					<div class="perc-bar"><li id="li3" class="text-box-all">Javascript</li></div>
					<div class="perc-bar"><li id="li6" class="text-box-all">PHP</li></div>
					<div class="perc-bar"><li id="li4" class="text-box-all">Ruby</li></div>
					<div class="perc-bar"><li id="li5" class="text-box-all">Ruby on Rails</li></div>
				</ul>
			</div>
			<div class="text-box">
				<h2>Hobby's:</h2>
				<h3>Video editing:</h3>
				<p>Een voorbeeld van de soort video's die ik maak.</p>
				<iframe id="YT-video" src="https://www.youtube.com/embed/2VZ6ieVHHQk" frameborder="0" allowfullscreen></iframe>
				<h3>Gamen:</h3>
				<p>Ik speel vooral GTA V en Overwatch.<br>Als je met mij wilt gamen, voeg mij dan toe.</p>
				<a href="http://steamcommunity.com/id/jiswidrik" target="_blank"><p>Steam: SurPlus</p></a>
				<p>BattleTag: SurPlus#21434</p>
				<h3>Photoshopping:</h3>
				<p>Ik verander alles in iets anders, zoals de London Eye in een ventilator.</p>
				<img onclick="zoom()" id="ps-img" src="public/media/imgs/ps.png" alt="Photoshop image">
			</div>
		</content>
	</div>