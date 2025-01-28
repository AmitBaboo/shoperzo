<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard</title>
  @include('admin.layouts.head')
  </head>
  
<body>
@include('admin.message')
@include('admin.layouts.sidebar')
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
@include('admin.layouts.navbar')
      <!--  Header End -->
      <div class="container-fluid">
  <!-- Row 1 -->
  <div class="row">
    <!-- Card 1 -->
    <div class="col-md-4 col-sm-12">
      <div class="card">
        <div class="card-body">
          <div class="row align-items-start">
            <div class="col-8">
              <h5 class="card-title mb-10 fw-semibold">Product Sales</h5>
              <h4 class="fw-semibold mb-3">$6,820</h4>
              <div class="d-flex align-items-center pb-1">
                <span class="me-2 rounded-circle bg-light-danger round-20 d-flex align-items-center justify-content-center">
                  <i class="ti ti-arrow-down-right text-danger"></i>
                </span>
                <p class="me-1 fs-3 mb-0">+9%</p>
                <p class="fs-3 mb-0">last year</p>
              </div>
            </div>
            <div class="col-4">
              <div class="d-flex justify-content-end">
                <div class="text-white bg-danger rounded-circle p-7 d-flex align-items-center justify-content-center">
                  <i class="ti ti-currency-dollar fs-6"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="earning"></div>
      </div>
    </div>

    <!-- Card 2 -->
    <div class="col-md-4 col-sm-12">
      <div class="card">
        <div class="card-body">
          <div class="row align-items-start">
            <div class="col-8">
              <h5 class="card-title mb-10 fw-semibold">Product Sales</h5>
              <h4 class="fw-semibold mb-3">$6,820</h4>
              <div class="d-flex align-items-center pb-1">
                <span class="me-2 rounded-circle bg-light-danger round-20 d-flex align-items-center justify-content-center">
                  <i class="ti ti-arrow-down-right text-danger"></i>
                </span>
                <p class="me-1 fs-3 mb-0">+9%</p>
                <p class="fs-3 mb-0">last year</p>
              </div>
            </div>
            <div class="col-4">
              <div class="d-flex justify-content-end">
                <div class="text-white bg-danger rounded-circle p-7 d-flex align-items-center justify-content-center">
                  <i class="ti ti-currency-dollar fs-6"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="earning"></div>
      </div>
    </div>

    <!-- Card 3 -->
    <div class="col-md-4 col-sm-12">
      <div class="card">
        <div class="card-body">
          <div class="row align-items-start">
            <div class="col-8">
              <h5 class="card-title mb-10 fw-semibold">Product New Sales</h5>
              <h4 class="fw-semibold mb-3">$6,820</h4>
              <div class="d-flex align-items-center pb-1">
                <span class="me-2 rounded-circle bg-light-danger round-20 d-flex align-items-center justify-content-center">
                  <i class="ti ti-arrow-down-right text-danger"></i>
                </span>
                <p class="me-1 fs-3 mb-0">+9%</p>
                <p class="fs-3 mb-0">last year</p>
              </div>
            </div>
            <div class="col-4">
              <div class="d-flex justify-content-end">
                <div class="text-white bg-danger rounded-circle p-7 d-flex align-items-center justify-content-center">
                  <i class="ti ti-currency-dollar fs-6"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="earning"></div>
      </div>
    </div>
  </div>
</div>


    </div>
  </div>
  @include('admin.layouts.script')
</body>
</html>