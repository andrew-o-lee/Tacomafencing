
<h2>Resources</h2>

<h3>MTFC Documents and Forms</h3>

<article>
	<p><a target='_blank' href='documents/beginnerfencersguide.pdf'>Beginner Fencers’ Guide</a> written by coach Toby Lee is available to help guide you through the sport of fencing in detail.</p>

	<p><a target='_blank' href='documents/tournament-checklist.pdf'>Tournament Checklist</a> What to bring to a tournament</p>
	
	<p><a target='_blank' href='documents/HomeDrills2019_0304.pdf'>Home Drills</a> A parent's guide to some drills to practice at home by Coach Toby Lee</p>
		
	<p><a target='_blank' href='documents/FencingStripCoaching2018_0617.pdf'>Strip Coaching</a> A parent's guide to coaching your fencer at a tournament by Coach Toby Lee</p>
			
	<p><a target='_blank' href='documents/TLBLFencingClinicUPS2019_0407.pdf'>Fencing Clinic at University of Puget Sound 2019</a> Clinic notes including drills and games for University of Puget Sound Fencing Club by Coach Toby Lee and Coach Benjamin Lee</p>
				
	<p><a target='_blank' href='documents/volunteer-hour-record.pdf'>Volunteer Hour Record</a> Keep track of volunteer hours and submit</p>

	<p><a target='_blank' href='documents/armory.pdf'>Armory Guidelines</a></p>
	
	<p><a target='_blank' href='documents/PoolScoresheet.pdf'>USA Fencing Pool Score Sheet</a> Pool Score Sheet</p>
		
	<p><a target='_blank' href='documents/TeamRelayScoresheet.pdf'>USA Fencing Team Score Sheet</a> Team Relay Score Sheet</p>
			
			
			
			
</article>

<img src='images/cover/foilbenjamin.jpg' class='cover-photo'>

<h3>Useful Links</h3>

<article>
	<p><a target='_blank' href='http://www.usafencing.org'>USA Fencing</a>. National Governing Body for USA fencing. Everyone at the club must have at minimum a non-competitive membership ($10). To participate in any sanctioned tournaments, must become a competitive member ($75) for the season.  Membership information is <a target='_blank' href='http://www.usafencing.org/membership'>here</a>.</p>

	<p><a target='_blank' href='https://askfred.net'>Askfred</a> Sign up for tournaments here. Results are also posted here.</p>
	<p><a target='_blank' href='https://member.usafencing.org/search/tournaments'> USA Fencing Tournament Browser</a> Sign up for regional and National tournaments here. </p>
</article>

<hr>

<h3>Equipment vendors</h3>

<article>
	<p><a target='_blank' href='http://stores.thefencingpost.com'>The Fencing Post</a> All your equipment needs available at different price points. </p>

	<p><a target='_blank' href='https://www.leonpaul.com'>Leon Paul London</a> and <a target='_blank' href='https://www.leonpaulusa.com'>Leon Paul USA</a> More expensive but top quality brand. With the current state of the British pound, it may be more economical to purchase from London store than from US store even with the added shipping.</p>
	
	<p><a target="_blank" href="http://www.raincityfencing.com/fencing-equipment/what-we-carry/">Rain City Fencing Center</a> in Bellevue has all the basic gear if you want to go somewhere local to try on gear.</p>

	<p><a target="_blank" href="http://nwfencing.org/information/pro-shop/">Northwest Fencing Center</a> in Beaverton, Oregon has Leon Paul equipment available for sale.</p>

	<p><a target="_blank" href="http://www.blue-gauntlet.com/">Blue Gauntlet Fencing</a> and <a target="_blank" href="http://www.absolutefencinggear.com/shopping/">Absolute Fencing Gear</a> have beginner sets as well as other equipment.</p>
	
</article>

<hr>

<h3>Local Fencing</h3>

<article>
	<p><a target='_blank' href='http://wwdfencing.com'>Western Washington Division Fencing</a> Information about our division (Western Washington)</p>

	<p><a target='_blank' href='http://www.washingtonfencing.com'>Washington Fencing Academy</a> Issaquah</p>

	<p><a target='_blank' href='http://www.raincityfencing.com'>Rain City Fencing Center</a> Bellevue</p>

	<p><a target='_blank' href='http://www.salleauriol.com/#index'>Salle Auriol</a> Seattle</p>

	<p><a target='_blank' href='http://nwfencing.org'>Northwest Fencing Center</a> Beaverton, Oregon</p>

	<p><a target='_blank' href='http://www.orionfencing.org/home.aspx'>Orion Fencing</a> Vancouver, WA</p>

	<p><a target='_blank' href='http://dynamofencing.com'>Dynamo Fencing</a> Vancouver, British Columbia</p>
</article>

<hr>

<h3>Fencing Around the World</h3>

<article>
	<p><a target='_blank' href='http://fie.org'>FIE</a> International Fencing Federation The world governing body of fencing</p>

	<p><a target='_blank' href='http://fencing.ca'>Canadian Fencing Federation</a></p>

	<p><a target='_blank' href='http://www.eurofencing.info'>European Fencing Confederation</a></p>
</article>

<hr>

<h3>For Coaches and Referees</h3>

<article>
	<p><a target='_blank' href='http://usfca.org'>United States Fencing Coaches Association</a></p>

	<p><a target='_blank' href='http://www.refereescommission.org/blog/'>US Fencing Referees' Commission</a></p>

	<div id='unagi'></div>

	<p><span class='btn-link text-primary' onclick='udon()'>Magic Cat</span></p>

	<style>
		.btn-link:hover {
			text-decoration: underline;
			cursor: pointer;
		}

		#unagi {
			width: 400px;
			height: 300px;
			background-image: url('images/portraits/taco/nyan.png');
			position: fixed;
			top: 20%;
			left: -400px;
			display: none;
		}
	</style>

	<script>
		var tempura = true;
		function udon() {
			if(tempura) {
				tempura = false;
				$('#unagi').css('display', 'block');
				var soba = 4800;
				var miso = -400;
				var ikura = setInterval(function() {
					$('#unagi').css('background-position', soba + 'px 0');
					$('#unagi').css('left', miso + 'px');
					soba -= 400;
					miso += 15;
					if (soba <= 0) {
						soba = 4800;
					}
					if (miso >= $(window).width()) {
						tempura = true;
						$('#unagi').css('display', 'none');
						$('#unagi').css('left', '-400px');
						clearInterval(ikura);
					}
				}, 100);
			}
		}
	</script>

	<p><a target='_blank' href='http://foc.askfred.net/Referee/'>Referee Ratings</a></p>
</article>

<hr>

<h3>Other Fencing Related Sites</h3>

<article>
	<p><a target="_blank" href="http://academyoffencingmasters.com/blog/">Academy of Fencing Masters Blog</a> Informative articles geared towards parents</p>

	<p><a target="_blank" href="https://www.youtube.com/user/FIEvideo">YouTube FIE Fencing Channel</a></p>
	<p><a target="_blank" href="https://www.youtube.com/user/USAFencing">YouTube USA Fencing Channel</a></p>
	<p><a target="_blank" href="https://www.youtube.com/user/CyrusofChaos">YouTube CyrusofChaos</a> Collection of fencing videos</p>
	<p><a target='_blank' href='http://www.pointcontrol.info'>Pointcontrol</a> Alternative fencing rating system</p>
	<p><a target='_blank' href='https://www.fencing.net'>fencing.net</a> Lots of fencing news and information</p>

	<p><a target='_blank' href='https://www.reddit.com/r/Fencing/'>fencing reddit</a> Fencing forum</p>
</article>




