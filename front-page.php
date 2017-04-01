<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package capstona1
 */

get_header(); ?>
<body>
	<div class="main-content page-wrap container">
		<div class="site-inner">
			<div class="site-header">
				<div class="wrap">
					<div class="site-search">
						<form class="headersearch" itemscope="itemscope" itemprop="potentialAction" itemtype="http://schema.org/SearchAction" action="/products/search" accept-charset="UTF-8" method="get"><input name="utf8" type="hidden" value="✓">
							<div class="msearchcontent">
								<meta content="https://www.urbanladder.com/products/search?keywords={keywords}" itemprop="target">
								<span class="twitter-typeahead" style="position: relative; display: inline-block;"><input type="search" value="" itemprop="query-input" class="typeahead tt-hint" readonly="" autocomplete="off" spellcheck="false" tabindex="-1" dir="ltr" style="position: absolute; top: 0px; left: 0px; border-color: transparent; box-shadow: none; opacity: 1; background: none 0% 0% / auto repeat scroll padding-box border-box rgb(255, 255, 255);"><input type="search" name="keywords" id="search" value="" placeholder="Search" itemprop="query-input" class="typeahead tt-input" autocomplete="off" spellcheck="false" dir="auto" style="position: relative; vertical-align: top; background-color: transparent;"><pre aria-hidden="true" style="position: absolute; visibility: hidden; white-space: pre; font-family: &quot;Mr Eaves XL Modern&quot;, sans-serif; font-size: 15px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; word-spacing: 0px; letter-spacing: 0px; text-indent: 0px; text-rendering: auto; text-transform: none;"></pre><div class="tt-menu" style="position: relative; top: 100%; left: 0px; z-index: 100; display: none;"><div class="tt-dataset tt-dataset-suggestions"></div></div></span>
								<button type="image" id="search_button" class="search-icon fa fa-awesome"></button>
							</div>
						</form>
					</div>
					<div class="site-logo">
						<a href="#">
							<img src="<?php echo get_bloginfo('template_url') ?>/images/logo.png"/>
						</a>
					</div>
					<div class="site-contact">
						<p>Phone:<a href="tel:+91-7737-333333">+91-7737-333333</a></p>
						<p>E-mail:<a href="mailto:capstonasales@gmail.com">capstonasales@gmail.com</a></p>
					</div>
				</div>
			</div>
			<nav class="site-menu">
				<div class="wrap">
					<ul>
						<li class="first"><a href=""#>Home</a></li>
						<li><a href=""#>About</a></li>
						<li><a href=""#>Contact</a></li>
					</ul>
				</div>
			</nav>		
			<div class="banner-image wrap">
				<a href="#"><img src="https://www.capstona.com/wp-content/uploads/2017/01/4.png"></a>
			</div>
			<div class="image-section">
				<div class="masonry-grid grid">
					<div class="grid-item">
						<img src="https://www.tikamoon.co.uk/ori-scrula-bamoro-marble-washbasin-705.jpg">
					</div>
					<div class="grid-item grid-item-width2">
						<img src="https://www.tikamoon.co.uk/ori-scrula-bamoro-marble-washbasin-705.jpg">
					</div>
					<div class="grid-item grid-item-height2">
						<img src="https://www.tikamoon.co.uk/ori-scrula-bamoro-marble-washbasin-705.jpg">
					</div>
				</div>
			</div>
			<!--<div class="image-section">
				<div class="masonry">
					<div class="item"><img src="https://www.tikamoon.co.uk/ori-scrula-bamoro-marble-washbasin-705.jpg"></div>
					<div class="item"><img src="https://www.capstona.com/wp-content/uploads/2017/02/3.png"></div>
					<div class="item"><img src="https://pimg.tradeindia.com/02574369/b/3/12-X-18-Kitchen-Wall-Tiles.jpg"></div>
					<div class="item"><img src="https://www.somanyceramics.com/wp-content/uploads/2014/03/kitchen41.jpg"></div>
					<div class="item"><img src="https://www.tilemountain.co.uk/media/catalog/category/hampton-beige-902_3.jpg"></div>
					<div class="item"><img src="http://www.tiles4all.co.uk/images/Tiles/Resized/670.380_images_Tiles_ToResize_White_Tumbled_Travertine_Marble_Kitchen_Bathroom_Wall_Tiles_IMYSTUM080.1.jpg"></div>
					<div class="item"><img src="https://www.tikamoon.co.uk/ori-scrula-bamoro-marble-washbasin-705.jpg"></div>
					<div class="item"><img src="https://www.capstona.com/wp-content/uploads/2017/02/3.png"></div>
					<div class="item"><img src="http://media.thehappyhill.se/2016/06/marble-kitchen-wall.jpg"></div>
					<div class="item"><img src="https://www.somanyceramics.com/wp-content/uploads/2014/03/kitchen41.jpg"></div>
					<div class="item"><img src="https://www.tikamoon.co.uk/ori-scrula-bamoro-marble-washbasin-705.jpg"></div>
					<div class="item"><img src="https://www.tilemountain.co.uk/media/catalog/category/hampton-beige-902_3.jpg"></div>
				</div>
			</div>-->
			<section>
				<div class="subscriber-form">
					<div class="wrap">
						<div class="form-content">
							<h4>Subscribe to our Newsletter</h4>
							<p>To get latest information about our products and offers,<br>subscribe to our newsletter.</p>
						</div>
						<form>
							<input type="text" name="Subscribe" placeholder="Enter Your Email">
							<button value="button">Submit</button>
						</form>
					</div>
				</div>
			</section>
		</div>
	</div>
</body>
	
<?php
//get_sidebar();
get_footer();
