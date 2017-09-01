      </div><!-- /.row -->
    </div><!-- /.container -->

  </section><!-- /section -->
</div><!-- /wrapper -->

<footer role="contentinfo">
  <div class="container container-footer">
    <div class="row row-footer">

      <nav class="nav__footer col-lg-12 col-md-12" role="navigation">
        <?php wpeFootNav(); ?>
      </nav><!-- /nav -->

      <p class="copyright col-lg-3 col-lg-push-9 col-md-3 col-md-push-9">
         &copy; <?php echo date("Y"); ?> Все права защищены <?php bloginfo('name'); ?>
      </p><!-- /copyright -->

    </div><!-- /.row -->
  </div><!-- /.container -->
</footer><!-- /footer -->

  <div class="modal-bg">
    <div class="modal-container">
      <?php echo do_shortcode('[contact-form-7 id="134" title="Добавить организацию"]'); ?>
    </div><!-- /.modal-container -->
    <span class="modal-close"><i class="fa fa-times" aria-hidden="true"></i></span>
  </div><!-- /.modal-bg -->

  <?php wp_footer(); ?>

</body>
</html>
