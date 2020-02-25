<title>@yield('title')  |  UTFDogs</title>

<meta name="csrf-token" content="{{ csrf_token() }}">
<!-- CSS -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"/>
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet"/>
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.10/css/mdb.min.css" rel="stylesheet"/>
<!-- JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.10/js/mdb.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
<script>
    $(window).on('load', function() {
    $(".loader").fadeOut("slow");
});
</script>
<style> 
.loader {
    position: fixed;
    left: 0px;
    top: 0px;
    width: 100%;
    height: 100%;
    z-index: 9999;
    background: url('https://cdn.dribbble.com/users/238583/screenshots/3630870/lagif-grande.gif') 50% 50% no-repeat rgb(249,249,249);
}

@keyframes spin {
  to {
    -webkit-transform: rotate(360deg);
  }
}

@-webkit-keyframes spin {
  to {
    -webkit-transform: rotate(360deg);
  }
}
@media all and (max-device-width: 640px){
    * {
        font-size: 3.0vw;
    }
}

.dropdown-item, .yellow-hover{
	margin: 0 10px  0 0 !important;
    padding:10px;
    border-radius:3px;
}
.dropdown-menu a:hover, .dropdown-menu a:active, .dropdown-menu a:focus{
    color:white!important;
    background-color: #212121 !important;
    box-sizing: border-box;
	box-shadow: 5px 5px 5px rgba(0,0,0,0.5);
}
.main-content {
    position: relative;
    min-height: 100vh;    
}
.navbar {
    position: relative;
    top: 0;
    width: 100%;
}
</style>