<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package sparkling
 */
?>
			</div><!-- close .*-inner (main-content or sidebar, depending if sidebar is used) -->
		</div><!-- close .row -->
	</div><!-- close .container -->
</div><!-- close .site-content -->

<div class="footer container container-full ng-scope" ><div class="row footerBar ng-scope">
    <div class="container container-footer">
        <h3>Where you get the fresh stuff</h3>
        <div class="col-md-6 locatorFooter">
            <div class="yourStore pull-left ng-scope" data-gsn-store-info="[store.StoreName] <a href='/storelocator'>(View all Stores)</a>">
				Chas Ball <a href="/storelocator">(View all Stores)</a>
			</div>
            <div class="yourStore pull-left ng-scope" data-gsn-store-info="[store.PrimaryAddress] <br></div> [store.City], [store.StateName] [store.PostalCode] <br/>[store.Phone], <br/>[store.OpenHoursDisplay]">
				241 South 18th Street <br> Kansas City, KS 66102 <br>913-342-2366, <br>Daily 7 AM - 11 PM
			</div>
        </div>
        <div class="col-md-6 companyInfo">
            <ul class="pull-right">
                <li data-ng-class="{'underlined': currentPath == '/careers'}"><a data-ng-href="/careers" href="/careers">Careers</a></li>
                <li data-ng-class="{'underlined': currentPath == '/contactus'}"><a data-ng-href="/contactus" href="/contactus">Contact Us</a></li>
            </ul>
        </div>
    </div>
</div></div>

<?php wp_footer(); ?>

</body>
</html>