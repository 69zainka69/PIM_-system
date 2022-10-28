
<!DOCTYPE html>
<html>
<head>
  <script src="https://cdn.tiny.cloud/1/bfr93pekxrwztnw15luq7902jvyax1aqpv75n72jlqz6qct1/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
</head>
<body>
   

    <label class="control-label" data-name="longDescription"><span class="label-text"><h1>Опис</h1></span></label>
    <form role="form" method="POST" action="{{ route('editgrupdescr.update', $id) }}">
        @csrf
        @method('PUT')
  <textarea name="description" id="myeditorinstance">
    {!!$catalog[0]['description']!!}
  </textarea>
</select><button style="background-color:green;" type="submit"><a class="action" data-action="delete">зерігти</a></button>
</form>
  <script>
    tinymce.init({
      selector: 'textarea#myeditorinstance',
      plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
      toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
    });
  </script>
   @if (session('success'))
   <div style="background-color:green;" class="alert alert-success" role="alert">

       <h2><i class="icon fa fa-check"></i> {{ session('success')}}</h2>
   </div>
   @endif
  <label class="control-label" data-name="longDescription"><span class="label-text"><h1>Опис (ru)</h1></span></label>
  <form role="form" method="POST" action="{{ route('editgrupdescr.update', $id) }}">
    @csrf
    @method('PUT')
  <textarea name="description_en_us" id="myeditorinstancer">
    {!!$catalog[0]['description_en_us']!!}
  </textarea>
</select><button style="background-color:green;" type="submit"><a class="action" data-action="delete">зерігти</a></button>
</form>
  <script>
    tinymce.init({
      selector: 'textarea#myeditorinstancer',
      plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
      toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
    });
  </script>



</body>
</html>
