<!-- Logout -->
<div class="modal fade" id="logout" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
                <h2 class="modal-title" id="myModalLabel">
                    <i class="fa fa-sign-out"></i>
                    Keluar</h2>
            </div>
            <div class="modal-body">
                <h5 class="text-center"> Apakah anda yakin akan keluar ? </h5>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn ink-reaction btn-raised btn-default" data-dismiss="modal">Batal</button>
                <a href="<?= site_url('dashboard/logout') ?>" class="btn ink-reaction btn-raised btn-primary">Ya</a>
            </div>
        </div>
    </div>
</div>
<!-- End Logout -->

<!-- Hapus Via FORM -->
<div class="modal fade" id="hapus" tabindex="-1" role="dialog" aria-labelledby="hapus" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

                <h3 class="modal-title" id="simpleModalLabel">
                    <i class="fa fa-exclamation-triangle"></i>
                    Hapus</h3>
            </div>
            <?php echo form_open('dashboard/admin/hapus') ?>

            <div class="modal-body">
                <h5 class="text-center">Apakah anda yakin akan mengahpus data ini ?</h5>
                <input type="hidden" name="id_admin" id="bookId" value="" />

            </div>
            <div class="modal-footer">
                <button type="button" class="btn ink-reaction btn-raised btn-default"
                    data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn ink-reaction btn-raised btn-danger">Hapus</button>
            </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- End Hapus -->
<!-- hapus -->
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
                <h2 class="modal-title" id="myModalLabel">
                    <i class="fa fa-edit"></i>
                    Edit</h2>
            </div>
            <div class="modal-body">
                <h5 class="text-center"> Apakah anda yakin akan Edit data ini ? </h5>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn ink-reaction btn-raised btn-default"
                    data-dismiss="modal">Batal</button>
                <a href="#" id="btn-edit" class="btn ink-reaction btn-raised btn-info">Edit</a>

            </div>
        </div>
    </div>
</div>
<!-- End hapus -->


<!-- FROM MOdal Confirm Save -->
<!-- modal -->
<div id="SimpanKonfirmasi" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel3" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                 <h3 id="myModalLabel3">
                     <i class="fa fa-plus-circle"></i>
                     Tambah</h3>

            </div>
            <div class="modal-body">
                <h5 class="text-center">Apakah anda yakin menyimpan data ini ?</h5>
            </div>
            <div class="modal-footer">
                <button class="btn ink-reaction btn-raised" data-dismiss="modal" aria-hidden="true">Batal</button>
                <button class="btn ink-reaction btn-raised btn-primary" id="SubForm">Ya, simpan</button>
            </div>
        </div>
    </div>
</div>
<!-- End FROM MOdal Confirm Save -->
<!-- FROM MOdal Confirm EDIT -->
<!-- modal -->
<div id="UpdateKonfirmasi" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel3" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                 <h3 id="myModalLabel3">
                     <i class="fa fa-edit-circle"></i>
                     EDIT</h3>

            </div>
            <div class="modal-body">
                <h5 class="text-center">Apakah anda yakin menyimpan pembaruan data ini ?</h5>
            </div>
            <div class="modal-footer">
                <button class="btn ink-reaction btn-raised" data-dismiss="modal" aria-hidden="true">Batal</button>
                <button class="btn ink-reaction btn-raised btn-primary" id="Btn-Update">Ya, perbarui</button>
            </div>
        </div>
    </div>
</div>
<!-- End FROM MOdal Confirm EDIT -->