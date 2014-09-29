<?php $this->load->view('admin/template/header'); ?>

<div class="modal fade" id="basicModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Login</h4>
            </div>

            <div class="modal-body">
                <!-- load subview in login -->
                <?php echo $this->load->view($subview); ?>
            </div>
            <div class="modal-footer">
             &copy; <?php echo $meta_title; ?>
         </div>
        </div>
    </div>
</div>

<?php $this->load->view('admin/template/footer'); ?>