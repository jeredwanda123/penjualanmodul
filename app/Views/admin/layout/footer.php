<div class="footer">
    <div class="copyright">
        <p>Copyright © Designed &amp; Developed by <a href="#" target="_blank">Quixkit</a> 2019</p>
    </div>
</div>
<!--**********************************
            Footer end
        ***********************************-->

<!--**********************************
           Support ticket button start
        ***********************************-->

<!--**********************************
           Support ticket button end
        ***********************************-->

</div>
<!--**********************************
        Main wrapper end
    ***********************************-->

<!--**********************************
        Scripts
    ***********************************-->
<!-- Required vendors -->
<script src="<?= base_url(); ?>template/assets/vendor/global/global.min.js"></script>
<script src="<?= base_url(); ?>template/assets/js/quixnav-init.js"></script>
<script src="<?= base_url(); ?>template/assets/js/custom.min.js"></script>

<script src="<?= base_url(); ?>template/assets/vendor/circle-progress/circle-progress.min.js"></script>
<script src="<?= base_url(); ?>template/assets/vendor/chart.js/Chart.bundle.min.js"></script>

<script src="<?= base_url(); ?>template/assets/vendor/gaugeJS/dist/gauge.min.js"></script>

<!--  flot-chart js -->
<script src="<?= base_url(); ?>template/assets/vendor/flot/jquery.flot.js"></script>
<script src="<?= base_url(); ?>template/assets/vendor/flot/jquery.flot.resize.js"></script>

<!-- Owl Carousel -->
<script src="<?= base_url(); ?>template/assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<!-- Counter Up -->
<script src="<?= base_url(); ?>template/assets/vendor/jqvmap/js/jquery.vmap.min.js"></script>
<script src="<?= base_url(); ?>template/assets/vendor/jqvmap/js/jquery.vmap.usa.js"></script>
<script src="<?= base_url(); ?>template/assets/vendor/jquery.counterup/jquery.counterup.min.js"></script>

<script src="<?= base_url(); ?>template/assets/vendor/datatables/js/jquery.dataTables.min.js"></script>
<script src="<?= base_url(); ?>template/assets/js/plugins-init/datatables.init.js"></script>
<script src="<?= base_url(); ?>template/assets/vendor/jquery-validation/jquery.validate.min.js"></script>
<!-- Form validate init -->
<script src="<?= base_url(); ?>template/assets/js/plugins-init/jquery.validate-init.js"></script>
<!-- Toastr -->
<script src="<?= base_url(); ?>template/assets/vendor/toastr/js/toastr.min.js"></script>

<!-- All init script -->
<script src="<?= base_url(); ?>template/assets/js/plugins-init/toastr-init.js"></script>
<!-- Toastr Script -->
<script src="<?= base_url(); ?>template/assets/js/toastr-handler.js"></script>

<!--  -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    function confirmDelete(url) {
        Swal.fire({
            title: 'Apakah Anda yakin?',
            text: "Data yang dihapus tidak bisa dikembalikan!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, hapus!',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                // Redirect ke URL hapus setelah konfirmasi
                window.location.href = url;
            }
        });
    }
</script>
</body>

</html>