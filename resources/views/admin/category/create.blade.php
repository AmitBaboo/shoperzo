<!doctype html>

<html
  lang="en"
  class="light-style layout-menu-fixed layout-compact"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
  data-style="light">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Create Categories</title>
  @include('admin.layouts.head')
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">

        <!-- sidebar -->
        @include('admin.layouts.sidebar')
        <!-- / sidebar -->

        <!-- Layout container -->
        <div class="layout-page">

          <!-- Navbar -->
          @include('admin.layouts.navbar')
          <!-- / Navbar -->
           
          @include('admin.message')

          <!-- Content wrapper -->
          <div class="content-wrapper">

            <!-- Content -->
            <div class="container-xxl flex-grow-1 container-p-y">
            <form action="" Method="POST" id="categoryForm" name="categoryForm">
          

              <div class="row">
              <div class="col-md-12">         
                  <div class="card">
                  <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">All Category</h5>
            <a href="{{ route('categories.index') }}" class="btn btn-primary">Back</a>
          </div>

          
                   
                    <div class="card-body">

                    
                        <div class="row">
                        <div class="col-md-6">
                        <div class="mb-4">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Write Name Here">
                        <p></p>
                        </div>
                        </div>

                        <div class="col-md-6">
                        <div class="mb-4">
                        <label class="form-label">Slug</label>
                        <input type="text" class="form-control disable" name="slug" id="slug" placeholder="Write Slug Here" readonly>
                        <p></p>
                        </div>
                        </div>
                       

                        <div class="col-md-6">
                        <div class="mb-4">
                        <label class="form-label">Status</label>
                        <select name="status" id="status" class="form-select">
            
                          <option value="1">Active</option>
                          <option value="0">Block</option>
                        </select>
                        </div>
                        </div>
                        
                        </div>

                      
                        
                    
                    </div>
                  </div>
                </div>
              </div>

              <button type="submit" class="btn btn-outline-secondary mt-5">Create</button>
              </form>
            </div>
            <!-- / Content -->

          
            <!-- Footer -->
            @include('admin.layouts.footer')
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

    
<!--  JS -->
@include('admin.layouts.script')
<!-- / JS -->
   
<script>

$(document).ready(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $("#categoryForm").submit(function(event){
        event.preventDefault();
        var element = $(this);
        $("button[type=submit]").prop('disabled',true);
        
        $.ajax({
            url: '{{ route("categories.store") }}',  // Make sure this is properly set
            type: "POST",
            data: element.serializeArray(),
            dataType: "json",
            success: function(response){
              $("button[type=submit]").prop('disabled',false);
              if(response["status"] == true){

                window.location.href="{{route('categories.index')}}";
              
                $("#name").removeClass('is-invalid').siblings('p').removeClass('invalid-feedback').html("");
                $("#slug").removeClass('is-invalid').siblings('p').removeClass('invalid-feedback').html("");
                
              } else {

                var errors = response['errors'];
                if(errors['name']) {
                  $("#name").addClass('is-invalid').siblings('p').addClass('invalid-feedback').html(errors['name']);
                } else {
                  $("#name").removeClass('is-invalid').siblings('p').removeClass('invalid-feedback').html("");
                }

                if(errors['slug']) {
                  $("#slug").addClass('is-invalid').siblings('p').addClass('invalid-feedback').html(errors['slug']);
                } else {
                  $("#slug").removeClass('is-invalid').siblings('p').removeClass('invalid-feedback').html("");
                }
              }

             
            }, 
            error: function(jqXHR, exception){
                console.log("Something went wrong");
            }
        });
    });
});



 //Slug 
 
$("#name").change(function(){
  element = $(this);
  $("button[type=submit]").prop('disabled',true);

$.ajax({
            url: '{{ route("getSlug") }}',  // Make sure this is properly set
            type: "get",
            data: {title: element.val()},
            dataType: "json",
            success: function(response){
              $("button[type=submit]").prop('disabled',false);
              if (response ["status"] == true){
                $("#slug").val(response["slug"]);
              }
            }

          });
});
 //Slug  



</script>
  
  </body>
</html>
