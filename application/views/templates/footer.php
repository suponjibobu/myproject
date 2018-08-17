
</section>
</div>
<!-- /.content-wrapper -->
<footer class="main-footer">
  <div class="pull-right hidden-xs">
    <b>Version</b> 2.4.0
  </div>
  <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
  reserved.
</footer>
  <?php echo $js; ?>

  <script>
  $(document).ready(function() {
      $('#example1').DataTable({
          "ajax": {
              url : "<?php echo site_url("input/finmasuk_page") ?>",
              type : 'GET'
          },
          "bDestroy": true,
          "columnDefs": [ {
          "targets": [ 1, 5, 2 ],
          "orderable": false
                      } ]
          


      });
  });
  </script>


</body>
</html>
