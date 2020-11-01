<footer class="footer-area">
    <!-- Copywrite Area -->
    <div class="copywrite-area">
        <div class="container">
            <div class="row">
                <!-- Copywrite Text -->
                <div class="col-12 col-sm-6">
                    <p class="copywrite-text">
                        <?php
                        $data = $this->db->query("SELECT * from set_web");
                        foreach ($data->result() as $row) {
                        ?>
                            <p><?= $row->footer ?> </p>

                        <?php } ?>

                    </p>
                </div>

            </div>
        </div>
    </div>
</footer>