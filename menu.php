<section class="Content-Full-Menu">
	<div class="Content Menu-Section">
		<div class="Menu-Nav">
			<ul class="Menu-Nav-List">
				<li><a href="#!" class="Nav-Link">FR</a></li>
				<li><a href="#!" class="Nav-Link">EN</a></li>
			</ul>
			<ul class="Menu-Close-List">
				<li><a href="#!" class="Nav-Link Close">Close</a></li>
			</ul>
		</div>
		<div class="Menu-Flex-Box">
			<div class="Menu-Nav-Links">
				<h2 class="Link-Menu-Circle Link-Cabinet-Content"><a class="Color-white" href="#!">
				Cabinet</a></h2>
				<h2 class="Link-Cabinet-Content"><a class="Color-white" href="#!">Services</a></h2>
				<h2 class="Link-Cabinet-Content"><a class="Color-white" href="#!">Actualités</a></h2>
				<h2 class="Link-Cabinet-Content"><a class="Color-white" href="#!">Contact</a></h2>
			</div>
			<div class="Menu-Contact-Infos">
				<a class="Nav-Link" href="mailto:contact@trailblazers.consulting">contact@trailblazers.consulting</a>
				<a class="Nav-Link" href="tel:+33 6 42 45 05 24">+33 6 42 45 05 24</a>
			</div>
		</div>
	</div>
</section>

<!-- Open/Close Menu -->
<script>
$(document).ready(function(){
  $(".Open").click(function(){
    $(".Content-Full-Menu").show();
  });
  $(".Close").click(function(){
    $(".Content-Full-Menu").hide();
  });
});
</script>
<!-- Open/Close Menu -->

<!-- Hide Body When Menu Open -->
<script>
$(document).ready(function(){
  $(".Open").click(function(){
    $(".AllSite").hide();
  });
  $(".Close").click(function(){
    $(".AllSite").show();
  });
});
</script>
<!-- Hide Body When Menu Open -->