<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>@yield('title')</title>

  <link rel="stylesheet" href="{{url('/back/assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{url('/back/assets/vendors/iconfonts/ionicons/css/ionicons.css')}}">
  <link rel="stylesheet" href="{{url('/back/assets/vendors/iconfonts/typicons/src/font/typicons.css')}}">
  <link rel="stylesheet" href="{{url('/back/assets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css')}}">
  <link rel="stylesheet" href="{{url('/back/assets/vendors/css/vendor.bundle.base.css')}}">
  <link rel="stylesheet" href="{{url('/back/assets/vendors/css/vendor.bundle.addons.css')}}">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
  
  <link href="{{url('/back/assets/css/select2.min.css')}}" rel="stylesheet" />
  <!-- <script src="https://cdn.tiny.cloud/1/ky5hvglmiuqie40q2lkh9v0nx5ms8fz96s9qfsjth0nctybl/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script> -->

  <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>

  <link rel="stylesheet" href="{{url('/back/assets/css/shared/style.css')}}">

  <link rel="stylesheet" href="{{url('/back/assets/css/demo_1/style.css')}}">

  <link rel="shortcut icon" href="{{url('/back/assets/images/favicon.png')}}" />
</head>

<body>
  <div class="container-scroller">
  @include('back.navbar')
    <div class="container-fluid page-body-wrapper">

      @include('back.sidebar')

      @yield('content')

    </div>

  </div>



  <script src="{{url('/back/assets/vendors/js/vendor.bundle.base.js')}}"></script>
  <script src="{{url('/back/assets/vendors/js/vendor.bundle.addons.js')}}"></script>
  <script src="{{url('/back/assets/js/shared/off-canvas.js')}}"></script>
  <script src="{{url('/back/assets/js/shared/misc.js')}}"></script>
  <script src="{{url('/back/assets/js/demo_1/dashboard.js')}}"></script>
  <!-- <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script> -->
  <!-- <script src="{{url('/back/assets/js/chosen.jquery.min.js')}}"></script> -->

    <script src="{{url('/back/assets/js/select2.min.js')}}"></script>
    <!-- <script src="{{url('/back/assets/js/plugins/editor/tinymce.min.js')}}" referrerpolicy="origin"></script> -->


    <script>
      $(document).ready(function() {
        $('.js-example-basic-multiple').select2();
      });
    </script>
  <!-- <script src="{{url('/back/assets/js/multiselect.js')}}"></script> -->

  <!-- <script src="{{url('/back/assets/js/script.js')}}"></script> -->


  <!-- <script src="//cdn.tinymce.com/4/tinymce.min.js"></script> -->

<script>
  var editor_config = {
    path_absolute : "/",
    selector: "textarea#editor",
directionality :"rtl",
    plugins: [
      "directionality advlist autolink lists link image charmap print preview hr anchor pagebreak",
      "searchreplace wordcount visualblocks visualchars code fullscreen",
      "insertdatetime media nonbreaking save table contextmenu directionality",
      "emoticons template paste textcolor colorpicker textpattern"
    ],
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media | ltr rtl",
    relative_urls: false,
    file_browser_callback : function(field_name, url, type, win) {
      var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
      var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

      var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
      if (type == 'image') {
        cmsURL = cmsURL + "&type=Images";
      } else {
        cmsURL = cmsURL + "&type=Files";
      }

      tinyMCE.activeEditor.windowManager.open({
        file : cmsURL,
        title : 'Filemanager',
        width : x * 0.8,
        height : y * 0.8,
        resizable : "yes",
        close_previous : "no"
      });
    }
  };

  tinymce.init(editor_config);
</script>
</body>

</html>