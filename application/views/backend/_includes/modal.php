<!-- Logout -->
<script>
$('#logout').on('click', function(e) {
    toastr.warning(
        "Apakah anda yakin akan keluar ? <br><a class='btn btn-danger btn-sm' href='dashboard/logout'>Keluar</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button class='btn btn-primary btn-sm'>batal</button> ",
        'Keluar', {
            "positionClass": "toast-top-center"
        })
})
</script>
<!-- End Logout -->


<!-- Hapus -->
<script type="text/javascript">
$('.hapus').click(function(e) {
    e.preventDefault();
    var link = $(this).attr('href');
    $('#btn-delete').link;

    toastr.error(
        "Apakah anda yakin akan keluar ? <br><a class='btn btn-danger btn-sm'  href='" + link +
        "'>Hapus</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button class='btn btn-primary btn-sm'>batal</button> ",
        'Hapus', {
            "positionClass": "toast-top-center"
        }
    )
});
</script>
<!-- End Hapus -->
<!-- Edit -->
<script type="text/javascript">
$('.edit').click(function(e) {
    e.preventDefault();
    var link = $(this).attr('href');
    $('#btn-delete').link;

    toastr.warning(
        "Apakah anda yakin akan Edit ? <br><a class='btn btn-info btn-sm'  href='" + link +
        "'>Edit</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button class='btn btn-primary btn-sm'>batal</button> ",
        'Edit', {
            "positionClass": "toast-top-center"
        }
    )
});
</script>
<!-- End Edit -->


<?php
if ($this->session->flashdata('warning') == true):
?>
<script>
toastr.warning("<?= $this->session->flashdata('warning') ?>", 'Warning', {
    "positionClass": "toast-top-center"
})
</script>
<?php
endif;
?>

<?php
if ($this->session->flashdata('error') == true):
?>
<script>
toastr.error("<?= $this->session->flashdata('error') ?>", 'Error', {
    "positionClass": "toast-top-center"
})
</script>
<?php
endif;
?>


<?php
if ($this->session->flashdata('success') == true):
?>
<script>
toastr.success("<?= $this->session->flashdata('success') ?>", 'Success', {
    "positionClass": "toast-top-center"
})
</script>
<?php
endif;
?>