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

    <title>View Categories</title>
  @include('admin.layouts.head')
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  

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
        
          

            <div class="card">
              
            <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">All Category</h5>
            <a href="{{ route('categories.create') }}" class="btn btn-primary"><i class="icon-base bx bx-plus icon-sm me-0 me-sm-2"></i>Add Category</a>
          </div>
          
         <form action="" method="get">
  <div class="d-flex justify-content-between align-items-center">
    
    <!-- Search Bar -->
    <div class="col-md-4 Search-bar">
      <div class="input-group mb-3">
        <input type="text" value="{{Request::get('keyword')}}" name="keyword" class="form-control input-text" placeholder="Search Here" aria-label="Recipient's username" aria-describedby="basic-addon2">
        <div class="input-group-append">
          <button class="btn btn-outline-primary btn-lg" type="submit"><i class="fa fa-search"></i></button>
        </div>
      </div>
    </div>

    <!-- Reset Button (Right Side) -->
    <button type="button" onclick="window.location.href='{{route('categories.index')}}'" class="btn btn-secondary btn-sm" style="margin-right:25px">Reset</button>
    
  </div>
</form>


                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Slug</th>
                        <th>Status</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                    @if($categories->isNotEmpty())
                      @foreach($categories as $category)

                      <tr>
                      <td> <span>{{$category->id}}</span></td>
                      <td> <span>{{$category->name}}</span></td>
                        <td>{{$category->slug}}</td>

                       @if($category->status==1)
                       <td><span class="badge bg-label-info me-1">Active</span></td>
                       @else

                       
                       <td><span class="badge bg-label-danger me-1">Deactive</span></td>
                       @endif
                      
                        <td>
                          <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                              <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
                            </div>
                          </div>
                        </td>
                      </tr>

                      @endforeach
                      @else
                      <tr>
                        <td colspan="5">Records not found</td>
                      </tr>
                      @endif
                       

                      <tr>
                     <td colspan="5" class="text-center">{{ $categories->links() }}</td>
                      </tr>
                     
                    </tbody>
                  </table>
                </div>
              </div>







              
              


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
   
  
  </body>
</html>
