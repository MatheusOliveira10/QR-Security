
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
.mySlides {display:none}
.w3-left, .w3-right, .w3-badge {cursor:pointer}
.w3-badge {height:13px;width:13px;padding:0}
</style>

<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>QR Security @yield('title')</title> <!-- CHANGE THIS TITLE FOR EACH PAGE -->
<link rel="stylesheet" href='css/jquery.dataTables.css'>
<!-- Your custom styles (optional) -->
<!-- Bootstrap -->
{{ Html::style('css/select2.min.css') }}
{{ Html::style('css/vegas.css') }}
{{ Html::style('css/bootstrap.css') }}
{{ Html::style('fullcalendar/fullcalendar.css') }}

@yield('stylesheets')

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->