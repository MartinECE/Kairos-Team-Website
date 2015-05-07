<!--		<div id="footer">
			&copy;<?php echo date("Y"); echo " "; bloginfo('name'); ?>
		</div>

	</div>

	<?php wp_footer(); ?>
	
	
</body>

</html>
-->

<footer>
          <div class="container">
            <div class="row">
              <div class="col-md-6">
                <!--<ul class="legals">
                  <li><a href="#"></a></li>
                  <li><a href="#"></a></li>
                </ul>-->
              </div>
              <div class="col-md-6 credit">
                <p><a href="http://www.potatocodes.com/">Potatocodes</a> <em>Kairos Team</em> <?php echo date("Y"); ?> </p>
              </div>
            </div>
          </div>
        </footer>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="<?php echo bloginfo('template_directory');?>/js/waypoints.min.js"></script>
        <script src="<?php echo bloginfo('template_directory');?>/js/bootstrap.min.js"></script>
        <script src="<?php echo bloginfo('template_directory');?>/js/scripts.js"></script>
        <script src="<?php echo bloginfo('template_directory');?>/js/jquery.flexslider.js"></script>
        <script src="<?php echo bloginfo('template_directory');?>/js/modernizr.js"></script>
		  <script>
			(function() {
				//var pageWrap = document.getElementById( 'pagewrap' ),
				//	pages = [].slice.call( pageWrap.querySelectorAll( 'div.container' ) ),
				var	currentPage = 0;
				//	triggerLoading = [].slice.call( pageWrap.querySelectorAll( 'a.pageload-link' ) ),
				var	loader = new SVGLoader( document.getElementById( 'loader' ), { speedIn : 300, easingIn : mina.easeinout } );

				function init() {
					//triggerLoading.forEach( function( trigger ) {
						//trigger.addEventListener( 'click', function( ev ) {
						//	ev.preventDefault();
							loader.show();
							// after some time hide loader
							setTimeout( function() {
								loader.hide();

								classie.removeClass( pages[ currentPage ], 'show' );
								// update..
								currentPage = currentPage ? 0 : 1;
								classie.addClass( pages[ currentPage ], 'show' );

							}, 3000 );
						//} );
					//} );	
				}

				init();
			})();
		</script>      
      </body>
    </html>
    