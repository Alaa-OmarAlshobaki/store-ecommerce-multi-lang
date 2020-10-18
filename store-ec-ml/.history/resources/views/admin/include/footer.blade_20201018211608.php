   <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
   <script src="{{asset('asset/admin/assets/js/libs/jquery-3.1.1.min.js')}}"></script>
   <script src="{{asset('asset/admin/bootstrap/js/popper.min.js')}}"></script>
   <script src="{{asset('asset/admin/bootstrap/js/bootstrap.min.js')}}"></script>
   <script src="{{asset('asset/admin/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
   <script src="{{asset('asset/admin/assets/js/app.js')}}"></script>
   <script>
       $(document).ready(function() {
           App.init();
       });
   </script>
   <script src="{{asset('asset/admin/assets/js/custom.js')}}"></script>
   <!-- END GLOBAL MANDATORY SCRIPTS -->

   <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
   <script src="{{asset('asset/admin/plugins/apex/apexcharts.min.js')}}"></script>
   <script src="{{asset('asset/admin/assets/js/dashboard/dash_1.js')}}"></script>
   <script src="{{asset('asset/admin/assets/js/dashboard/dash_2.js')}}"></script>
   <script src="{{asset('asset/admin/assets/js/scrollspyNav.js')}}"></script>
   <script src="{{asset('asset/admin/assets/js/forms/bootstrap_validation/bs_validation_script.js')}}"></script>
       <!-- END GLOBAL MANDATORY SCRIPTS -->
   <script src="{{asset('asset/admin/plugins/dropify/dropify.min.js')}}"></script>
   <script src="{{asset('asset/admin/'.getFolderPlugins().'/blockui/jquery.blockUI.min.js')}}"></script>
   <!-- <script src="plugins/tagInput/tags-input.js"></script> -->
   <script src="{{asset('asset/admin/assets/js/users/account-settings.js')}}"></script>
   <script src="{{asset('asset/admin/'.getFolderPlugins().'/table/datatable/datatables.js')}}"></script>
   <script src="{{asset('asset/admin/'.getFolderPlugins().'/table/datatable/custom_miscellaneous.js')}}"></script>
   <script src="{{asset('asset/admin/'.getFolderPlugins().'/file-upload/file-upload-with-preview.min.js')}}"></script>
   <!--  END CUSTOM SCRIPTS FILE  -->
   <script>
    //First upload
    var firstUpload = new FileUploadWithPreview('myFirstImage')
    //Second upload
    var secondUpload = new FileUploadWithPreview('mySecondImage')
</script>

  </body>

  </html>