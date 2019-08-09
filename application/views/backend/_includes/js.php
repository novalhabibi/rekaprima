<script>
function testAnim(x) {
    $('.modal .modal-dialog').attr('class', 'modal-dialog ' + x + ' animated');

    // alert('ini nih ' + x);
};
$('#logout').on('show.bs.modal', function(e) {
    // var anim = $('#entrance').val();
    var anim = "lightSpeedIn";
    testAnim(anim);
})
$('#logout').on('hide.bs.modal', function(e) {
    // var anim = $('#exit').val();
    var anim = "zoomOutDown";
    testAnim(anim);
})
</script>



<!-- Success Notif -->
<?php
if ($this->session->flashdata('success') == true):
?>
<script>
toastr.clear();
toastr.options = {
    "closeButton": false,
    "debug": false,
    "newestOnTop": false,
    "progressBar": true,
    "positionClass": "toast-top-center",
    "preventDuplicates": false,
    "onclick": null,
    "showDuration": "300",
    "hideDuration": "1000",
    "timeOut": "5000",
    "extendedTimeOut": "1000",
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "show",
    "hideMethod": "hide"
}

var message =
    '<?= $this->session->flashdata('success') ?>';

toastr.success(message, 'Berhasil');
</script>
<?php
endif;
?>
<!-- END Success Notif -->
<!-- Error Notif -->
<?php
if ($this->session->flashdata('error') == true):
?>
<script>
toastr.clear();
toastr.options = {
    "closeButton": false,
    "debug": false,
    "newestOnTop": false,
    "progressBar": true,
    "positionClass": "toast-top-center",
    "preventDuplicates": false,
    "onclick": null,
    "showDuration": "300",
    "hideDuration": "1000",
    "timeOut": "5000",
    "extendedTimeOut": "1000",
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "show",
    "hideMethod": "hide"
}

var message =
    '<?= $this->session->flashdata('error') ?>';

toastr.error(message, 'Error');
</script>
<?php
endif;
?>
<!-- END Error Notif -->
<!-- Info Notif -->
<?php
if ($this->session->flashdata('info') == true):
?>
<script>
toastr.clear();
toastr.options = {
    "closeButton": false,
    "debug": false,
    "newestOnTop": false,
    "progressBar": true,
    "positionClass": "toast-top-center",
    "preventDuplicates": false,
    "onclick": null,
    "showDuration": "300",
    "hideDuration": "1000",
    "timeOut": "5000",
    "extendedTimeOut": "1000",
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "show",
    "hideMethod": "hide"
}

var message =
    '<?= $this->session->flashdata('info') ?>';

toastr.info(message, 'Info');
</script>
<?php
endif;
?>
<!-- END Info Notif -->



<!-- HAPUS -->
<script type="text/javascript">
$(document).on("click", ".open-AddBookDialog", function() {
    var myBookId = $(this).data('id');
    $(".modal-body #bookId").val(myBookId);

    // Animasi
    var x = "lightSpeedIn";

    $('.modal .modal-dialog').attr('class', 'modal-dialog ' + x + ' animated');

});
</script>
<!-- END HAPUS -->



<script>
function hapus(x) {
    $('.modal .modal-dialog').attr('class', 'modal-dialog ' + x + ' animated');
    var myBookId = $(this).data('id');
};
$('#hapus').on('show.bs.modal', function(e) {
    // var anim = $('#entrance').val();
    var anim = "lightSpeedIn";
    hapus(anim);
})
$('#hapus').on('hide.bs.modal', function(e) {
    // var anim = $('#exit').val();
    var anim = "zoomOutDown";
    hapus(anim);
})
</script>


<!-- EDIT -->
<script>
function editConfirm(url) {
    $('#btn-edit').attr('href', url);
    var x = "lightSpeedIn";
    $('.modal .modal-dialog').attr('class', 'modal-dialog ' + x + ' animated');
    $('#editConfirm').modal();
};
</script>
<!-- END EDIT -->


<!-- Simapn KOnfirmasi -->
<script>
$("#dischargeform").validate({
    rules: {
        nama_admin: "required",
        username_admin: "required",
        password_admin: "required",
        foto_admin: "required",
    },
    messages: {
        nama_admin: "",
        username_admin: "",
        password_admin: "",
        foto_admin: "",
    },
    submitHandler: function(form) {
        var x = "lightSpeedIn";
        $('.modal .modal-dialog').attr('class', 'modal-dialog ' + x + ' animated');
        $("#SimpanKonfirmasi").modal('show');
        $('#SubForm').click(function() {
            form.submit();
        });

         // Effek Modal
        function simpan(x) {
            $('.modal .modal-dialog').attr('class', 'modal-dialog ' + x + ' animated');
            var myBookId = $(this).data('id');
        };
        $('#SimpanKonfirmasi').on('show.bs.modal', function(e) {
            var anim = "lightSpeedIn";
            simpan(anim);
        })
        $('#SimpanKonfirmasi').on('hide.bs.modal', function(e) {
            var anim = "zoomOutUp";
            simpan(anim);
        })
        // END Effek Modal


    }
});
</script>
<!-- End Simapn KOnfirmasi -->
<!-- Update KOnfirmasi -->
<script>
$("#EditAdmin").validate({
    rules: {
        nama_admin: "required",
        username_admin: "required",
        
    },
    messages: {
        nama_admin: "",
        username_admin: "",
        password_admin: "",
    },
    submitHandler: function(form) {
        var x = "lightSpeedIn";
        $('.modal .modal-dialog').attr('class', 'modal-dialog ' + x + ' animated');
        $("#UpdateKonfirmasi").modal('show');


        $('#Btn-Update').click(function() {
            form.submit();
        });

        // Effek Modal
        function edit(x) {
            $('.modal .modal-dialog').attr('class', 'modal-dialog ' + x + ' animated');
            var myBookId = $(this).data('id');
        };
        $('#UpdateKonfirmasi').on('show.bs.modal', function(e) {
            var anim = "lightSpeedIn";
            edit(anim);
        })
        $('#UpdateKonfirmasi').on('hide.bs.modal', function(e) {
            var anim = "zoomOutUp";
            edit(anim);
        })
        // END Effek Modal
    }
});
</script>
<!-- End Update KOnfirmasi -->


<!-- Smoth refresh -->
<script>

    // function autoRefreshPage()

    // {

    //     window.location = window.location.href;

    // }

    // setInterval('autoRefreshPage()', 10000);

</script>