<footer class="bg-pc-light footer mt-auto py-5">
  <div class="container">
    <div class="row">
      <div class="col copyright text-center">
        <div class="mb-3">
          Copyright &copy; <?php echo date("Y") ?> <?php echo SITE_NAME; ?> | All rights reserved
        </div>
      </div>
    </div>
  </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<script type="application/ld+json">
	{
		"@context": "http://schema.org",
		"@type": "Organization",
		"@id": "<?php echo SITE_URL; ?>",
		"name": "<?php echo SITE_NAME; ?>",
		"logo": "<?php echo SITE_LOGO; ?>",
		"url": "<?php echo SITE_URL; ?>",
		"telephone": "+<?php echo str_replace("-", "", NUMBER_TOLL_FREE); ?>",
		"faxNumber": "+<?php echo str_replace("-", "", NUMBER_FAX); ?>",
		"address": {
			"@type": "PostalAddress",
			"streetAddress": "<?php echo ADDRESS_STREET; ?>",
			"addressLocality": "<?php echo ADDRESS_CITY; ?>",
			"addressRegion": "<?php echo ADDRESS_STATE_ABBREVIATION; ?>",
			"postalCode": "<?php echo ADDRESS_ZIPCODE; ?>",
			"addressCountry": "US"
		},
		"sameAs": [
			"<?php echo FACEBOOK_URL; ?>",
			"<?php echo INSTAGRAM_URL; ?>",
			"<?php echo TWITTER_URL; ?>",
			"<?php echo YOUTUBE_URL; ?>"
		]
	}
</script>