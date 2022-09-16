<?php
// Draw Main Navigation
function DrawNavMain($navMainOn) {
?>
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5C2J4J7 " height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5CHHWRV" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<nav class="navbar navbar-expand-xl navbar-light fixed-top bg-pc-light border-bottom shadow-sm">
  <div class="container">
    <a class="navbar-brand" href="/">
      <img id="navLogo" src="<?php echo SITE_LOGO; ?>" alt="<?php echo SITE_NAME; ?>">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain" aria-controls="navbarMain" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarMain">
      <ul class="navbar-nav ms-auto mb-2 mb-md-0 navbar-nav-scroll">
        <li class="nav-item">
          <a class="nav-link<?php if ($navMainOn=="Home") { ?> active<?php } ?>"<?php if ($navMainOn=="Home") { ?> aria-current="page"<?php } ?> href="/">
            <i class="fas fa-lg fa-home" aria-hidden="true"></i>
            <span class="sr-only">Home</span>
          </a>
        </li>
      </ul>
      <div class="d-flex ms-xl-5">
        <a class="btn btn-pc" href="http://shop.iahe.com/Workshops/Barral-Institute" target="_blank" rel="noopener" role="button">Find a Class</a>
      </div>
    </div>
  </div>
</nav>
<?php } ?>