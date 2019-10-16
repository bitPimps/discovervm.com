<?php function DrawNavMain($navMainOn) { ?>
<nav class="navbar navbar-default navbar-static-top" role="navigation" id="topnavbar">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<div id="navbar" class="navbar-collapse collapse">
					<ul class="nav navbar-nav">
						<li class="dropdown active">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-lg fa-home"></i> <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="/index.php#WhatIsVM">What is Visceral Manipulation?</a></li>
								<li><a href="/index.php#Sessions">How Many Sessions Does It Take?</a></li>
								<li><a href="/index.php#FeelLike">What Does It Feel Like?</a></li>
								<li><a href="/index.php#Pain">How Can Organs Cause Pain and Dysfunction?</a></li>
								<li><a href="/index.php#Testimonials">Testimonials</a></li>
								<li><a href="/index.php#Organs">How are Our Emotions Stored in the Organs?</a></li>
								<li><a href="/index.php#HowVM">How Did Visceral Manipulation Begin?</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Shop <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="http://shop.iahe.com/Patient-Info" target="_blank">Patient Info</a></li>
								<li><a href="https://checkout.iahe.com/app/center/nlvisitor.nl/sc.6/.f?partner=Barral%20Institute.com" target="_blank">My Account</a></li>
								<li role="separator" class="divider"></li>
								<li class="dropdown-header">Products</li>
								<li><a href="http://shop.iahe.com/Product-List" target="_blank">All Products</a></li>
								<li><a href="http://shop.iahe.com/Product-List/New-Releases" target="_blank">New Releases</a></li>
								<li><a href="http://shop.iahe.com/Product-List/Visceral-Manipulation-Products" target="_blank">VM Products</a></li>
								<li><a href="http://shop.iahe.com/Product-List/Visceral-Manipulation-Certification-Program" target="_blank">VM Certification Program</a></li>
								<li role="separator" class="divider"></li>
								<li class="dropdown-header">Workshops</li>
								<li><a href="http://shop.iahe.com/Workshops" target="_blank">All Workshops</a></li>
								<li><a href="http://shop.iahe.com/Workshops/Barral-Institute" target="_blank">All BI Workshops</a></li>
								<li><a href="http://shop.iahe.com/Workshops/Visceral-Manipulation-Barral" target="_blank">VM Workshops</a></li>
								<li><a href="http://shop.iahe.com/Workshops/Neural-Manipulation" target="_blank">NM Workshops</a></li>
								<li><a href="http://shop.iahe.com/Workshops/New-Manual-Articular-Approach" target="_blank">NMAA Workshops</a></li>
							</ul>
						</li>
						<li><a href="https://forms.netsuite.com/app/site/crm/externalleadpage.nl?compid=698760&formid=5&h=887281391e95b5b63d0c&partner=Barral%20Institute.com">Contact</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">BI Network <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="https://www.barralinstitute.com/" target="_blank">Barral Institute</a></li>
								<li><a href="http://www.formation-osteo.com/" target="_blank">BOTO</a></li>
								<li><a href="https://www.iahe.com/" target="_blank">International Alliance of Healthcare Educators</a></li>
								<li><a href="https://www.iahp.com/" target="_blank">International Association of Healthcare Practitioners</a></li>
								<li><a href="https://www.upledger.com/">Upledger Institute International</a></li>
								<li><a href="https://www.dambrogioinstitute.com/" target="_blank">D'Ambrogio Institute</a></li>
							</ul>
						</li>
					</ul>
					<form action="https://www.barralinstitute.com/search-results.php" class="navbar-form navbar-right" accept-charset="utf-8" id="searchForm">
						<input type="hidden" name="cx" value="008033887930820737546:0y0cr3nhd0o">
						<input type="hidden" name="ie" value="UTF-8">
						<div class="input-group">
							<input type="text" lang="en" id="searchText" name="q" class="gsc-input form-control" title="Search" x-webkit-speech="" x-webkit-grammar="builtin:search" dir="ltr" spellcheck="false" placeholder="Search...">
							<span class="input-group-btn">
								<input type="submit" id="sa" name="sa" class="btn btn-success" value="Go!">
							</span>
						</div>
					</form>
					<script type="text/javascript" src="//www.google.com/jsapi"></script>
					<script type="text/javascript">
						google.load('search', '1');
						var autoCompletionOptions = {
							'maxCompletions' : 5,
							'styleOptions' : {
								'xOffset' : 10
						}};
						google.setOnLoadCallback(function() {
							google.search.CustomSearchControl.attachAutoCompletionWithOptions(
								"008033887930820737546:0y0cr3nhd0o", document.getElementById('searchText'), 'searchForm', autoCompletionOptions);
						});
					</script>
				</div><!--/.navbar-collapse -->
			</div>
		</nav>
<?php } ?>