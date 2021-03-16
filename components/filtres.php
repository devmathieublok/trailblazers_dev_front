<div class="Filtres-Content">
	<span class="Filtres">Filtrer par théme<span class="Add">+</span><span class="Less">-</span></span>
	<div class="Filtres-Options" >
		<a href="#!" class="Filtres-Options-Link">Filtrer par ordre de publication</a>
		<a href="#!" class="Filtres-Options-Link">Filtrer par nombre de vu</a>
	</div>
</div>

<!-- JS FILTRES SCRIPT -->
<script>
$(function() {
    $('.Filtres').click(function(event) {
        $('.Filtres-Options').fadeToggle("slow");
    });
});

$(document).ready(function() {
  $('.Filtres').click(
           function() {
     $('.Add').toggle();
  });
});

$(document).ready(function() {
  $('.Filtres').click(
           function() {
     $('.Less').toggle();
  });
});

</script>
<!-- JS FILTRES SCRIPT -->