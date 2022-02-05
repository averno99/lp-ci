<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2020</span>
        </div>
    </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Bootstrap core JavaScript-->
<script src="<?= base_url() ?>assets/backend/vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url() ?>assets/backend/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?= base_url() ?>assets/backend/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url() ?>assets/backend/js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="<?= base_url() ?>assets/backend/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url() ?>assets/backend/vendor/datatables/dataTables.bootstrap4.min.js"></script>

<script>
    $(document).ready(function() {
        $('#dataTable').DataTable();
    });
</script>

<!-- File Input -->
<script>
    $('.custom-file-input').on('change', function() {
        let fileName = $(this).val().split('\\').pop();
        $(this).next('.custom-file-label').addClass("selected").html(fileName);
    });
</script>
<!-- End File Input -->

</body>

</html>