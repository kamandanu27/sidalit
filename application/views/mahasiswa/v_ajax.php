<script>
$(function () {
      $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
      });
});
</script>

<script>
   $(document).on( "click",".btnhapus", function() {
         var url = $(this).attr("data-url");
         swal({
         title: "Peringatan!",
         text: "Apakah ingin menghapus data ini?",
         icon: "warning",
         buttons: true,
         dangerMode: true,
         
         });
   });
</script>
<script type="text/javascript">
      $(document).on("click",".btnhapus",function(){
         var id =$(this).attr("data-id");
         swal({
            title: "Peringatan!",
            text: "Apakah anda ingin menghapus data ini?",
            icon: "warning",
            buttons: true,
            dangerMode: true,
         })
            .then((willDelete) => {
            if (willDelete) {
               window.location = "<?= base_url() ?>mahasiswa/delete/"+id;
            } else {
               swal("Cancelled", "Batal :)", "error");
            }
         });
      });
</script>
<script>
      $("#id_provinsi").change(function(){ 
         var id = $(this).val();
         $.ajax({
            type: "post",
            url: "<?= base_url() ?>kabupaten/getkabupaten/",
            data: "id="+ id,
            success: function(data){
               $("#id_kabupaten").html(data);
            }
         });
      });
   </script>
   <script>
      $("#id_kabupaten").change(function(){ 
         var id = $(this).val();
         $.ajax({
            type: "post",
            url: "<?= base_url() ?>kecamatan/getkecamatan/",
            data: "id="+ id,
            success: function(data){
               $("#id_kecamatan").html(data);
            }
         });
      });
   </script>