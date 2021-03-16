<div class="DropDown DropDown-L">
	<h5 class="H5-DropDown">Respecter l’ADN de l’organisation<span class="Add-L">+</span><span class="Less-L">-</span></h5>
	<div class="DropDown-Options-L MarginTop-25px">
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pretium lorem ac iaculis lacinia. Quisque condimentum metus odio, ac molestie augue imperdiet at. Phasellus purus leo feugiat nec sagittis at posuere.</p>
	</div>
</div>


<!-- JS DROPDOWN L -->
<script>
$(function() {
    $('.DropDown-L').click(function(event) {
        $('.DropDown-Options-L').fadeToggle("slow");
    });
});

$(document).ready(function() {
  $('.DropDown-L').click(
           function() {
     $('.Add-L').toggle();
  });
});

$(document).ready(function() {
  $('.DropDown-L').click(
           function() {
     $('.Less-L').toggle();
  });
});
</script>
<!-- JS DROPDOWN L -->