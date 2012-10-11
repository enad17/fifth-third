<footer>
	<div class="inner">
		<div class="copyright">
			<p>Copyright © 2012 Fifth Third Bank, All Rights Reserved<br />
				Member FDIC</p>
		</div>
		<div class="links">
			<ul>
				<li><a data-name="alternateEntry" href="#">Alternate Entry</a></li>
				<li>|</li>
				<li><a data-name="officialRules" href="#">Official Rules</a></li>
				<li>|</li>
				<li><a data-name="privaryPolicy" href="#">Privacy Policy</a></li>
			</ul>
		</div>
	</div>
</footer>

<script>
	$(function() {
		$('footer .links a').on('click', function(e) {
			e.preventDefault();
			
			// capture the modal which we should open
			var modalToOpen = "#" + $(this).attr('data-name');

			$(modalToOpen).modal({
				minWidth: 750,
				minHeight: 400,
				overlayClose: true,
				onOpen: function(dialog) {

					// if we're opening the rules modal, we initialize the tabs
					if (dialog.data[0].id == "officialRules") {
						$('.tabs').tabs();
					}

					dialog.overlay.fadeIn('fast');
					dialog.container.fadeIn('fast');
					dialog.data.fadeIn('fast');

				},
				onClose: function(dialog) {
					dialog.overlay.fadeOut('fast');
					dialog.data.fadeOut('fast');
					dialog.container.fadeOut('fast', function() {
						$.modal.close();
					});
				}
			});
		});

	});
</script>