   <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
   <script src="{{asset('asset/admin/assets/js/libs/jquery-3.1.1.min.js')}}"></script>
   <script src="https://js.pusher.com/7.0/pusher.min.js"></script>
   <script>

    var previousCounter =$('#notify').val();
    
    
      var notificationCount = parseInt(previousCounter);
    
          // Enable pusher logging - don't include this in production
          Pusher.logToConsole = true;
    
    var pusher = new Pusher('19409a4fba1cfeb57873', {
        // cluster: 'mt1'
    encrypted:true
    });
    
    var channel = pusher.subscribe('order');
        channel.bind('App\\Events\\NewOrder', function(data) {
            notificationCount += 1
            console.log(notificationCount);
             $('#notify').val(notificationCount);
            
    
        });
        </script>
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
   <script src="{{asset('asset/admin/'.getFolderPlugins().'/apex/apexcharts.min.js')}}"></script>
   <script src="{{asset('asset/admin/assets/js/dashboard/dash_1.js')}}"></script>
   <script src="{{asset('asset/admin/assets/js/dashboard/dash_2.js')}}"></script>
   <script src="{{asset('asset/admin/assets/js/scrollspyNav.js')}}"></script>
   <script src="{{asset('asset/admin/assets/js/forms/bootstrap_validation/bs_validation_script.js')}}"></script>

   <script src="{{asset('asset/admin/'.getFolderPlugins().'/dropify/dropify.min.js')}}"></script>
   <script src="{{asset('asset/admin/'.getFolderPlugins().'/blockui/jquery.blockUI.min.js')}}"></script>
   <script src="{{asset('asset/admin/assets/js/users/account-settings.js')}}"></script>
   <script src="{{asset('asset/admin/'.getFolderPlugins().'/table/datatable/datatables.js')}}"></script>
   <script src="{{asset('asset/admin/'.getFolderPlugins().'/table/datatable/custom_miscellaneous.js')}}"></script>
   <script src="{{asset('asset/admin/'.getFolderPlugins().'/file-upload/file-upload-with-preview.min.js')}}"></script>
   <script src="{{asset('asset/admin/assets/js/components/ui-accordions.js')}}"></script>
   <script src="{{asset('asset/admin/'.getFolderPlugins().'/jquery-step/jquery.steps.min.js')}}"></script>
   <script src="{{asset('asset/admin/'.getFolderPlugins().'/jquery-step/custom-jquery.steps.js')}}"></script>
   <script src="{{asset('asset/admin/'.getFolderPlugins().'/select2/select2.min.js')}}"></script>
   <script src="{{asset('asset/admin/'.getFolderPlugins().'/select2/custom-select2.js')}}"></script>
   <script src="{{asset('asset/admin/'.getFolderPlugins().'/editors/quill/quill.js')}}"></script>
   <script src="{{asset('asset/admin/'.getFolderPlugins().'/editors/quill/custom-quill.js')}}"></script>
   <script src="{{ asset('asset/admin/custom/custom.js') }}"></script>
   <script src="{{asset('asset/admin/'.getFolderPlugins().'/lightbox/photoswipe.min.js')}}"></script>
   <script src="{{asset('asset/admin/'.getFolderPlugins().'/lightbox/photoswipe-ui-default.min.js')}}"></script>
   <script src="{{asset('asset/admin/'.getFolderPlugins().'/lightbox/custom-photswipe.js')}}"></script>
   <script>

var previousCounter =$('#notify').val();


  var notificationCount = parseInt(previousCounter);

      // Enable pusher logging - don't include this in production
      Pusher.logToConsole = true;

var pusher = new Pusher('202e8556ec17d75b4b9c', {
//   cluster: 'mt1'
encrypted:true
});

var channel = pusher.subscribe('order');
    channel.bind('App\\Events\\NewOrder;', function(data) {
         notificationCount+=1
         $('#notify').val(notificationCount);

    });
    
    $(document).on('change', '#mangStock', function() {
        if($(this).val()==1 ){
            $("#qty").removeClass("invisible");

        }else{
            $("#qty").addClass("invisible");
        }
});
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