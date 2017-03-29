<?php snippet('header') ?>
<?php snippet('ponchoHeader') ?>
<title>PonchoBot</title>

<main class="main" role="main">
  <div class="container">

    <div class="row">

      <div id="sidebar" class="col-md-4 hidden-sm-down">
        <div id="nav-anchor"></div>
        <nav id="side-nav">
          <h5 class="text-muted">Indice</h5>
          <ul class="nav nav-pills nav-stacked">
            <?php foreach($page->children() as $section): ?>
              <?php if ($section->identificador() != ''): ?>
                <li class="index-item"><a href="#<?= $section->identificador() ?>"><strong><?= $section->titulo() ?> </strong></a></li>
              <?php endif ?>
            <?php endforeach ?>
          </ul>
        </nav>
      </div>

      <div id="content" class="col-md-8">
        <section class="p-b-0">
          <h3 class="text-uppercase"><?= $page->titular() ?></h3>
          <p class="text-muted"><?= $page->titulo() ?></p>
          <?= $page->texthtml() ?>
        </section>
        <hr>

        <section id="indiceMobile" class="p-t-0 p-b-0 hidden-sm-up">
          <h5 class="text-muted">Indice</h5>
          <ul class="nav nav-pills nav-stacked">
            <?php foreach($page->children() as $section): ?>
              <?php if ($section->identificador() != ''): ?>
                <li class="index-item"><a href="#<?= $section->identificador() ?>"><strong><?= $section->titulo() ?> </strong></a></li>
              <?php endif ?>
            <?php endforeach ?>
          </ul>

        </section>
        <?php foreach($page->children() as $section): ?>
          <section id="<?= $section->identificador()?>"class="p-t-0 p-b-0">
            <h2><?= $section->titulo() ?></h2>
            <?= $section->texthtml() ?>
          </section>
        <?php endforeach ?>
      </div>

    </div>

  <?php if ($page->footer()!=''): ?>
    <section style="background: #fff">
      <div class="container">
        <div class="text-left">
          <h2>También te puede interesar...</h2>
        </div>
        <?php
        $footerTags = explode(",", $page->footer());
        ?>
        <div class="row">
          <?php for ($i=0; $i < count($footerTags) ; $i++): ?>
            <div class="col-md-4 interesar">
              <a href="<?php echo $site->page('footers/' . $footerTags[$i])->linkurl() ?>">
                <h5><?php echo $site->page('footers/' . $footerTags[$i])->title() ?></h5>
                <p class="text-muted"><?php echo $site->page('footers/' . $footerTags[$i])->text() ?></p>
              </a>
            </div>
          <?php endfor ?>
        </div>
      </div>
    </section>
  <?php endif ?>
</div>
</main>

<span id="stop-anchor"></span>
<div id="footer" style="position: fixed; bottom: 0; width: 100%;" class="align-center text-right">
  <button id="copy" onclick="copy(htmlCode)" class="btn bg-warning btn-primary box-shadow" ><i class="fa fa-copy"></i>&nbsp; Codigo</button>
  <a href="<?= $site->url() ?>/panel" class="btn bg-uva btn-primary"><i class="fa fa-sign-in"></i></a>
  <a href="<?= $site->url() ?>" class="btn bg-cielo btn-primary"><i class="fa fa-home"></i></a>
  &nbsp;&nbsp;
</div>


<pre id="htmlCode" class="hidden-md-down"><?php snippet('htmlCodeTramite') ?></pre>
<?php snippet('footer') ?>


</body>
</html>