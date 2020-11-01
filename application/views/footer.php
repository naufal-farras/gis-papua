  <!-- /.content -->
  <div class="clearfix"></div>
  <!-- Footer -->



  <footer class="site-footer">
      <div class="footer-inner bg-white">
          <div class="row">
              <div class="col-sm-6">
                  <?php
                    $data = $this->db->query("SELECT * from set_web");
                    foreach ($data->result() as $row) {
                    ?>
                      <p><?= $row->footer ?> </p>

                  <?php } ?>

              </div>
          </div>
  </footer>
  <!-- /.site-footer -->