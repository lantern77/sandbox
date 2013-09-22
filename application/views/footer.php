 <!-- FOOTER -->
      <footer >

        <p class="pull-right"><a href="#">Back to top</a></p>
        <?php $this->load->library('session');  
        if (!$this->session->userdata('logged_in')): ?>
        <p>&copy; 2013 Software Engineering Club, McMaster University &middot; <a href="/sandbox/index.php/main/login">Admin Login</a> &middot; </p>
      <?php else: ?>
        <p>&copy; 2013 Software Engineering Club, McMaster University &middot; <a href="/sandbox/index.php/admin/postsMenu">Admin Panel</a> &middot; </p>
      <?php endif; ?>
      </footer>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

    <script src="<?php echo base_url();?>assets/js/jquery.js"></script>
    <script src="<?php echo base_url();?>dist/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/holder.js"></script>
    