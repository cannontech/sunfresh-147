<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package sparkling
 */
?>
<!doctype html>
	<!--[if !IE]>
	<html class="no-js non-ie" <?php language_attributes(); ?>> <![endif]-->
	<!--[if IE 7 ]>
	<html class="no-js ie7" <?php language_attributes(); ?>> <![endif]-->
	<!--[if IE 8 ]>
	<html class="no-js ie8" <?php language_attributes(); ?>> <![endif]-->
	<!--[if IE 9 ]>
	<html class="no-js ie9" <?php language_attributes(); ?>> <![endif]-->
	<!--[if gt IE 9]><!-->
<html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<!-- favicon -->

<?php if ( of_get_option( 'custom_favicon' ) ) { ?>
	<link rel="icon" href="<?php echo of_get_option( 'custom_favicon' ); ?>" />
<?php } ?>

<!--[if IE]><?php if ( of_get_option( 'custom_favicon' ) ) { ?><link rel="shortcut icon" href="<?php echo of_get_option( 'custom_favicon' ); ?>" /><?php } ?><![endif]-->

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<div class="header container container-full ng-scope">
	<div class="row signInBar ng-scope">
	
		<div class="col-md-6">
			<button class="btn btn-default btnSilver btnLocations ng-scope" data-gsn-store-info="[store.StoreName] (View All Stores)">Chas Ball (View All Stores)</button>
		</div>
		
		<div class="col-md-6 siteStatus">
			<button type="button" class="navbar-toggle navbar-toggleAccount btnSilver">
				<span class="sr-only">Toggle navigation</span>
				<i class="fa fa-user"></i>
			</button>
			<div class="collapse collapseAccount navbar-collapse navbar-collapseAccount account" id="bs-example-navbar-collapse-1">
				<ul class="nav navAccount navbar-nav navbar-navAccount navbar-right navbar-rightAccount ng-scope">
					<li><button class="btn btn-default btnSilver ng-scope">Sign In</button></li>
					<li><button class="btn btn-default btnSilver">Register</button></li>
				</ul>
			</div>
		</div>   
	</div>	

	<div class="row header-main ng-scope">
		<div class="container">
			<a data-ng-href="/" href="/"><img data-ng-src="http://cdn.gsngrocers.com/asset/147/images/logo.png?nocache=1_3_28" alt="Store Logo" class="logo" src="http://cdn.gsngrocers.com/asset/147/images/logo.png?nocache=1_3_28"></a>
			<ul class="socialMedia">
				<li><a data-ng-href="https://www.facebook.com/mysunfresh" target="_blank" href="https://www.facebook.com/mysunfresh"><i class="fa fa-facebook-square fa-2x"></i></a></li>
				<li><a href="/mobileapp" data-ng-href="/mobileapp"><i class="fa fa-apple fa-2x"></i></a></li>
				<li><a href="/mobileapp" data-ng-href="/mobileapp"><i class="fa fa-android fa-2x"></i></a></li>
			</ul> 
			<div class="row mainNavBar">
				<div class="col-md-10  col-xs-7 noPadWidth">
					<div class="mylist btn-group btn-groupMenu hidden-lg hidden-md">
						<a class="btn btn-default btnSilver pull-left" data-ng-click="gvm.menuInactive = !gvm.menuInactive"><i class="fa fa-bars"></i> Menu</a>
					</div>
					<!-- ngInclude: getContentUrl('/views/menu.html') -->
					<div class="shopping-list ng-scope" data-ng-include="getContentUrl('/views/menu.html')">
					<div class="visible-lg visible-md navbar navbarSilver navbar-default navbar-defaultSilver ng-scope" data-ng-class="{ 'visible-sm visible-xs': gvm.menuInactive }">
						<ul class="nav navSilver navbar-nav navbar-navSilver">
						<li data-ng-class="{'active': currentPath == '/'}" class=""><a data-ng-href="/" href="/">HOME</a></li>
						<li><a data-ng-class="{'active': currentPath == '/circular'}" data-ng-href="/circular" href="/circular" class="">WEEKLY ADS</a></li>
						<li class="dropdown" data-ng-class="{'active': '/,/wineandspirits,/bakery,/deli,/produce,/floral,/meatandseafood,/pharmacy'.indexOf(currentPath) > 0 }">
							 <a class="dropdown-toggle" data-toggle="dropdown" href="javascript:void(0)"><i class="fa faSilver fa-caret-down pull-right"></i>DEPARTMENTS</a>
							<ul class="dropdown-menu dropdown-menuSilver">
								<li><a data-ng-href="/wineandspirits" href="/wineandspirits">Wine &amp; Spirits</a></li>
								<li><a data-ng-href="/bakery" href="/bakery">Bakery</a></li>
								<li><a data-ng-href="/deli" href="/deli">Deli</a></li>
								<li><a data-ng-href="/produce" href="/produce">Produce</a></li>
								<li><a data-ng-href="/floral" href="/floral">Floral</a></li>
								<li><a data-ng-href="/meatandseafood" href="/meatandseafood">Meat &amp; Seafood</a></li>
								<li><a data-ng-href="/pharmacy" href="/pharmacy">Pharmacy</a></li>
							</ul>
						</li>
						<li class="dropdown" data-ng-class="{'active': '/,/recipecenter,/recipevideo'.indexOf(currentPath) > 0 }">
							<a class="dropdown-toggle" data-toggle="dropdown" href="javascript:void(0)"><i class="fa faSilver fa-caret-down pull-right"></i>RECIPES</a>
							<ul class="dropdown-menu dropdown-menuSilver">
								<li><a data-ng-href="/recipecenter" href="/recipecenter">Recipes</a></li>
								<li class="visible-md visible-lg"><a data-ng-href="/recipevideo" href="/recipevideo">Videos</a></li>
							</ul>
						</li>
						<li class="dropdown" data-ng-class="{'active': '/,/coupons/printable,/couponpolicy'.indexOf(currentPath) > 0 }">
							<a class="dropdown-toggle" data-toggle="dropdown" href="javascript:void(0)"><i class="fa faSilver fa-caret-down pull-right"></i>COUPONS</a>
							<ul class="dropdown-menu dropdown-menuSilver">
								<li><a data-ng-href="/coupons/digital" href="/coupons/digital">Coupons</a></li>
								<li><a data-ng-href="/couponpolicy" href="/couponpolicy">Coupon Policy</a></li>
							</ul>
						</li>
						<li data-ng-class="{'active': currentPath == '/storelocator'}" class="active"><a data-ng-href="/storelocator" href="/storelocator">STORE INFO</a></li>
						<li data-ng-class="{'active': currentPath == '/promotions'}"><a data-ng-href="/Promotions" href="/Promotions">PROMOTIONS</a></li>
						<li class="dropdown" data-ng-class="{'active': '/,/profile/rewardcard,/rewardscard'.indexOf(currentPath) > 0 }">
							<a class="dropdown-toggle" data-toggle="dropdown" href="javascript:void(0)"><i class="fa faSilver fa-caret-down pull-right"></i>REWARDS</a>
							<ul class="dropdown-menu dropdown-menuSilver">
								<li><a data-ng-href="#" data-ng-click="goUrl('/profile/rewardcard')" href="#">Account Info</a></li>
								<li><a data-ng-href="/rewardscard" href="/rewardscard">Card Features</a></li>
							</ul>
						</li>
					</ul>
					</div>
				</div>
			</div>
			<div class="col-md-2 col-xs-5">
				<div class="nav navSL navbar-nav navbar-navSL navbar-right navbar-rightSL">
					<div class="btn-group btn-groupList">
						<button type="button" class="btn btn-default btn-defaultSilver btnSilver btnShoppingList" data-ng-click="gvm.shoppingListActive = !gvm.shoppingListActive">
							My List
							<span class="badge badgeSilver badgeCount ng-binding">0</span>
							<span class="glyphicon glyphicon-chevron-down downArrow"></span>
							<span class="sr-only">Toggle Dropdown</span>
						</button>
						<ul class="dropdown-menu dropdown-menuList" role="menu" data-ng-class="{ 'active': gvm.shoppingListActive }">
							<!-- ngIf: gvm.shoppingListActive -->
						</ul>
					</div>
				</div>
			</div>        
		</div>
	</div>	
</div>

<div id="page" class="hfeed site">
	<div id="content" class="site-content">

		<div class="top-section">
			<?php /*sparkling_featured_slider(); */?>
			<?php /*sparkling_call_for_action(); */?>
		</div>

		<div class="container mainContent">
			<div class="row">
				<div class="main-content-inner <?php echo sparkling_main_content_bootstrap_classes(); ?> <?php echo of_get_option( 'site_layout' ); ?>">
