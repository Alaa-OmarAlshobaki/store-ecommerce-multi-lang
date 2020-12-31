<!DOCTYPE html>
<html>
<head>
    <meta name="_token" content="{{csrf_token()}}" />
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/min/dropzone.min.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.js"></script>
</head>

<body>
<div class="container">
  
    <form method="post" action="{{route('slider.Store.UploadDB')}}" enctype="multipart/form-data" 
                  class="dropzone" id="dropzone">
                
    @csrf
  
    <div class="form-body">

        <h4 class="form-section"><i class="ft-home"></i> slider </h4>
        <div class="form-group">
            <div id="dpz-multiple-files" class="dropzone dropzone-area">
                <div class="dz-message">يمكنك رفع اكثر من صوره هنا</div>
            </div>
            <br><br>
        </div>


    </div>


    <div class="form-actions">
        <button type="button" class="btn btn-warning mr-1"
                onclick="history.back();">
            <i class="ft-x"></i> تراجع
        </button>
        <button type="submit" class="btn btn-primary">
            <i class="la la-check-square-o"></i> تحديث
        </button>
    </div>
</form> 



</div>
<!-- The four columns -->
<div class="container">
    <div class="row">
        
        @foreach($slider as $slid)
        dd($slid)
        <form method="post" action="{{ route('slider.Delete.Image',$slid->id) }}" enctype="multipart/form-data"  >
            @csrf
            <img src="{{$slid->photo}}"  alt="Nature" style="width:20%">
        <button type="submit">delete</button>
    </form>
      @endforeach
       
    
    </div>
</div>

<script>

    var uploadedDocumentMap = {}
   Dropzone.options.dpzMultipleFiles = {
       paramName: "dzfile", // The name that will be used to transfer the file
       //autoProcessQueue: false,
       maxFilesize: 5, // MB
       clickable: true,
       addRemoveLinks: true,
       acceptedFiles: 'image/*',
       dictFallbackMessage: " المتصفح الخاص بكم لا يدعم خاصيه تعدد الصوره والسحب والافلات ",
       dictInvalidFileType: "لايمكنك رفع هذا النوع من الملفات ",
       dictCancelUpload: "الغاء الرفع ",
       dictCancelUploadConfirmation: " هل انت متاكد من الغاء رفع الملفات ؟ ",
       dictRemoveFile: "حذف الصوره",
       dictMaxFilesExceeded: "لايمكنك رفع عدد اكثر من هضا ",
       headers: {
           'X-CSRF-TOKEN':
               "{{ csrf_token() }}"
       }

       ,
       url: "{{ route('slider.Store.Upload') }}", // Set the url
       success:
       
           function (file, response) {
               $('#dropzone').append('<input type="hidden" name="document[]" value="' + response.name + '">')
               uploadedDocumentMap[file.name] = response.name
           }
       ,
       removedfile: function (file) {
           file.previewElement.remove()
           var name = ''
           if (typeof file.file_name !== 'undefined') {
               name = file.file_name
           } else {
               name = uploadedDocumentMap[file.name]
           }
           $('#dropzone').find('input[name="document[]"][value="' + name + '"]').remove()
       
           
       }
       ,
       init: function () {
               @if(isset($event) && $event->document)
           var files =
           {!! json_encode($event->document) !!}
               for (var i in files) {
               var file = files[i]
               this.options.addedfile.call(this, file)
               file.previewElement.classList.add('dz-complete')
               $('#dropzone').append('<input type="hidden" name="document[]" value="' + file.file_name + '">')
           }
           @endif
       },
    
  
       
   }


 

</script>
</body>
</html> 