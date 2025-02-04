<meta name="csrf-token" content="{{ csrf_token() }}">

<!-- Favicon -->
<link rel="icon" type="image/x-icon" href="{{asset('admin-assets/img/favicon/favicon.ico')}}" />

<!-- Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link
  href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
  rel="stylesheet" />

<link rel="stylesheet" href="{{asset('admin-assets/vendor/fonts/boxicons.css')}}" />

<!-- Core CSS -->
<link rel="stylesheet" href="{{asset('admin-assets/vendor/css/core.css')}}" class="template-customizer-core-css" />
<link rel="stylesheet" href="{{asset('admin-assets/vendor/css/theme-default.css')}}" class="template-customizer-theme-css" />
<link rel="stylesheet" href="{{asset('admin-assets/css/demo.css')}}" />
<link rel="stylesheet" href="{{asset('admin-assets/css/custom.css')}}" />

<!-- Vendors CSS -->
<link rel="stylesheet" href="{{asset('admin-assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css')}}" />
<link rel="stylesheet" href="{{asset('admin-assets/vendor/libs/apex-charts/apex-charts.css')}}" />

<!-- Page CSS -->

<!-- Helpers -->
<script src="{{asset('admin-assets/vendor/js/helpers.js')}}"></script>
<!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
<!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
<script src="{{asset('admin-assets/js/config.js')}}"></script>






  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  

  <style>
    
  .disable{
    color: #a7acb2 ;
    background-color: rgba(34, 48, 62, 0.06) ;
    border-color: #cacdd1 ;
    opacity: 1 ;
}
.disable:hover{
    color: #a7acb2 ;
    background-color: rgba(34, 48, 62, 0.06) ;
    border-color: #cacdd1 ;
    opacity: 1 ;
}


.Search-bar{
  margin-left:20px;
  margin-right:20px;
  margin-bottom:10px;
}

.Search-bar input{
  border-right:none !important;
  border-radius: 0px !important;
  border-color:#696cff;
}
.Search-bar input:hover{
  border-color:#696cff !important;
}
.Search-bar button{
  border-left:none;
  border-radius: 0px; 
  color: #696cff;
  border-color:#696cff;
}
.Search-bar .btn-outline-primary:hover{
box-shadow:none;
border-color:#696cff;
-webkit-transform: translateY(0px); 
-ms-transform: translateY(0px);
}

  </style>
