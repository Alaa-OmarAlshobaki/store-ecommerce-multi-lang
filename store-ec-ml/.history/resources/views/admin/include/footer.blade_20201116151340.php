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
       <script src="{{asset('asset/admin/'.getFolderPlugins().'/highlight/highlight.pack.js')}}"></script>
   <script src="{{asset('asset/admin/assets/js/custom.js')}}"></script>
   <!-- END GLOBAL MANDATORY SCRIPTS -->

   <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
   <script src="{{asset('asset/admin/'.getFolderPlugins().'/apex/apexcharts.min.js')}}"></script>
   <script src="{{asset('asset/admin/assets/js/dashboard/dash_1.js')}}"></script>
   <script src="{{asset('asset/admin/assets/js/dashboard/dash_2.js')}}"></script>
   <script src="{{asset('asset/admin/assets/js/scrollspyNav.js')}}"></script>
   <script src="{{asset('asset/admin/assets/js/forms/bootstrap_validation/bs_validation_script.js')}}"></script>
       <!-- END GLOBAL MANDATORY SCRIPTS -->
   <script src="{{asset('asset/admin/'.getFolderPlugins().'/dropify/dropify.min.js')}}"></script>
   <script src="{{asset('asset/admin/'.getFolderPlugins().'/blockui/jquery.blockUI.min.js')}}"></script>
   <!-- <script src="plugins/tagInput/tags-input.js"></script> -->
   <script src="{{asset('asset/admin/assets/js/users/account-settings.js')}}"></script>
   <script src="{{asset('asset/admin/'.getFolderPlugins().'/table/datatable/datatables.js')}}"></script>
   <script src="{{asset('asset/admin/'.getFolderPlugins().'/table/datatable/custom_miscellaneous.js')}}"></script>
   <script src="{{asset('asset/admin/'.getFolderPlugins().'/file-upload/file-upload-with-preview.min.js')}}"></script>
   <script src="{{asset('asset/admin/'.getFolderPlugins().'/select2/select2.min.js')}}"></script>
   <script src="{{asset('asset/admin/'.getFolderPlugins().'/select2/custom-select2.js')}}"></script>
   <!--  END CUSTOM SCRIPTS FILE  -->
   <script>

    //Second upload
    var firstUpload = new FileUploadWithPreview('myFirstImage')

    $('input:radio[name="type"]').change(
            function(){
                if (this.checked && this.value == '2') {  // 1 if main cat - 2 if sub cat
                    $('#cats_list').removeClass('invisible');
                }else{
                    $('#cats_list').addClass('invisible');
                }
   });
    $('input:radio[name="type"]').prop("checked",
            function(){
                if (this.checked && this.value == '2') {  // 1 if main cat - 2 if sub cat
                    $('#cats_list').removeClass('invisible');
                }else{
                    $('#cats_list').addClass('invisible');
                }
   });
      
         
    
</script>

  </body>

  </html>