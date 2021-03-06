<!DOCTYPE html>
<html lang="fr">
<head>
    <title>La Halte Bien-être</title>
    <meta charset="UTF-8">
    <meta name="description" content="Centre de bien-être">
    <meta name="keywords" content="Yoga, html, bien-être, massages, cure">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link href="{{asset('img/favicon.ico')}}" rel="shortcut icon"/>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css') }}"/>
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css') }}"/>
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css') }}"/>
    <link rel="stylesheet" href="{{asset('css/flaticon.css') }}"/>
    <link rel="stylesheet" href="{{asset('css/slicknav.min.css') }}"/>
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-bs4.css" rel="stylesheet">    <!-- Main Stylesheets -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/custom.css')}}"/>


    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->



</head>

<body>
<div id="preloder">
    <div class="loader"></div>
</div>


@yield('body')

<!--====== Javascripts & Jquery ======-->
<script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/jquery.slicknav.min.js') }}"></script>
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/circle-progress.min.js') }}"></script>
<script src="http://cdn.quilljs.com/1.3.6/quill.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-bs4.js"></script><script src="{{ asset('js/main.js') }}"></script>

<script>
/*    var toolbarOptions = [
        ['bold', 'italic', 'underline', 'strike'],        // toggled buttons
        ['blockquote', 'code-block'],

        [{ 'header': 1 }, { 'header': 2 }],               // custom button values
        [{ 'list': 'ordered'}, { 'list': 'bullet' }],
        [{ 'script': 'sub'}, { 'script': 'super' }],      // superscript/subscript
        [{ 'indent': '-1'}, { 'indent': '+1' }],          // outdent/indent
        [{ 'direction': 'rtl' }],                         // text direction

        [{ 'header': [1, 2, 3, 4, 5, 6, false] }],

        [{ 'color': [] }, { 'background': [] }],          // dropdown with defaults from theme
        [{ 'font': [] }],
        [{ 'align': [] }],

        ['clean']                                         // remove formatting button
    ];
    var options = {
        theme: 'snow',
        modules: {
            toolbar: toolbarOptions
        },
    };
    var monParcours = new Quill('#monParcours', options);
    var mesPrestationsDescription = new Quill('#mesPrestationsDescription', options);
    var serviceEditor = new Quill('.serviceEditor', options);*/

$(document).ready(function() {
    $('.pageEditor').summernote({
        lang: 'fr-FR'
    });
});
</script>

</body>


</html>
