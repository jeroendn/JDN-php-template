    </main>

    <footer id="footer">
      <div class="footer-wrapper container pt-4 pb-3">
        <div class="row text-center text-xs-center text-sm-left text-md-left">
          <div class="col-xs-12 col-sm-4 col-md-4">
            <h5>Template</h5>
            <ul class="list-unstyled">
              <li><a href="https://github.com/jeroendn/JDN-php-template" target="_blank">Github</a></li>
              <li><a href="/README.md">ReadMe</a></li>
              <li><a href="<?= DOMAIN ?>" target="_blank"><?= DOMAIN_NAME ?></a></li>
            </ul>
          </div>
          <div class="col-xs-12 col-sm-4 col-md-4">
            <h5>Pages</h5>
            <ul class="list-unstyled">
              <li><a href="/">Home</a></li>
              <li><a href="/admin">Admin</a></li>
            </ul>
          </div>
          <div class="col-xs-12 col-sm-4 col-md-4">
            <h5>Lorem</h5>
            <ul class="list-unstyled">
              <li><a href="#!">Lorem</a></li>
              <li><a href="#!">Lorem</a></li>
              <li><a href="#!">Lorem</a></li>
              <li><a href="#!">Lorem</a></li>
              <li><a href="#!">Lorem</a></li>
            </ul>
          </div>
        </div>
      </div>

      <div id="bottom-bar" class="container-fluid pt-1 pb-1">
        <p>Copyright &copy; 2020 - <?= date('Y', $_SERVER['REQUEST_TIME']) ?> <a href="<?= DOMAIN ?>"><?= DOMAIN_NAME ?></a></p>
      </div>
    </footer>

    <?php require_once __DIR__ . '/js.php'; ?>

    <div id="preloader"><img src="media/design/preloader.svg" alt="preloader"></div>

  </body>
</html>
