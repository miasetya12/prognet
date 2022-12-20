
    @extends('templateAdmin')
    @section('hi_admin')
        <section class="dashboard">
        <div class="top">
          <i class="uil uil-bars sidebar-toggle"></i>
  
          <div class="search-box">
            <i class="uil uil-search"></i>
            <input type="text" placeholder="Search here..." />
          </div>
        </div>
  
        <div class="dash-content">
          <div class="overview">
            <div class="title">
             <h1>Hi, Admin</h1><br>
              <h2>Welcome to Dashboard</h2>
  
            </div>
  
            <div class="boxes">
              <div class="box box1">
                <i class="fa-solid fa-basket-shopping"></i>
                <div class="text">
                  <h1>Total Orders</h1>
                  <h2 style="font-size: 50px">70</h2>
                </div>
              </div>
              <div class="box box2">
                <i class="fa-solid fa-person"></i>
                <div class="text">
                  <h1>Total Customers</h1>
                  <h2 style="font-size: 50px">70</h2>
                </div>
              </div>
            </div>
          </div>
  
          <div class="garis">
            <hr>
          </div>
  
  
          <div class="activity">
            <div class="title">
              <h1>Recent Activity</h1><br>
            </div>
  <!-- BAGIAN TABEL nya-->
  
  
        </div>
      </section>
  
    @endsection

    