			<footer class="footer" role="contentinfo">

				<div id="inner-footer" class="inner-footer wrap">

					<div class="grid">

						<nav role="navigation" class="grid__item">
	    					<?php bones_footer_links(); ?>
		                </nav><!--

		             --><div class="grid__item lap--one-third desk--one-third">
							<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>.</p>

							<?php echo get_option('facebook_url') ? '<a href="'.get_option('facebook_url').'" class="fb">Facebook</a>' : ''; ?>
							<?php echo get_option('twitter_url') ? '<a href="'.get_option('twitter_url').'" class="twitter">Twitter</a>' : ''; ?>
							<?php echo get_option('linkedin_url') ? '<a href="'.get_option('linkedin_url').'" class="linkedin">LinkedIn</a>' : ''; ?>

							<p class="attribution"><a href="http://www.hacksawstudio.com/" class="hacksaw" title="Created by Hacksaw">Hacksaw</a></p>
		                </div>

					</div><!-- end .grid -->

				</div> <!-- end #inner-footer -->

			</footer> <!-- end footer -->

		</div> <!-- end #container -->

		<!-- all js scripts are loaded in library/bones.php -->
		<?php wp_footer(); ?>

	</body>

</html> <!-- end page. what a ride! -->
