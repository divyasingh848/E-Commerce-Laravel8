<!DOCTYPE html>
<html lang="en">
  <head>
    <meta
      name="description"
      content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular."
    />
    <!-- Twitter meta-->
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:site" content="@pratikborsadiya" />
    <meta property="twitter:creator" content="@pratikborsadiya" />
    <!-- Open Graph Meta-->
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="Vali Admin" />
    <meta property="og:title" content="Vali - Free Bootstrap 4 admin theme" />
    <meta
      property="og:url"
      content="http://pratikborsadiya.in/blog/vali-admin"
    />
    <meta property="og:image" content="../blog/vali-admin/hero-social.png" />
    <meta
      property="og:description"
      content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular."
    />
    <title>Admin</title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/css/main.css') }}" />

    <script src="{{ asset('backend/../js/bootstrap-tagsinput.js')}}"></script>
    <!-- Font-icon css-->  
    <link
      rel="stylesheet"
      type="text/css"
      href="{{ asset('backend/css/font-awesome/4.7.0/css/font-awesome.min.css') }}"
    /> 
  </head>

  <body class="app sidebar-mini rtl">
    <!-- Navbar-->
    <header class="app-header">
        <a class="app-header__logo" href="index-2.html">Admin Panel</a>
        <!-- Sidebar toggle button--><a
          class="app-sidebar__toggle"
          href="#"
          data-toggle="sidebar"
          aria-label="Hide Sidebar"
        ></a>
        <!-- Navbar Right Menu-->
        <ul class="app-nav">
          <li class="app-search">
            <input class="app-search__input" type="search" placeholder="Search" />
            <button class="app-search__button">
              <i class="fa fa-search"></i>
            </button>
          </li>
          <!--Notification Menu-->
          <li class="dropdown">
            <a
              class="app-nav__item"
              href="#"
              data-toggle="dropdown"
              aria-label="Show notifications"
              ><i class="fa fa-bell-o fa-lg"></i
            ></a>
            
          </li>
          <!-- User Menu-->
          <li class="dropdown">
            <a
              class="app-nav__item"
              href="#"
              data-toggle="dropdown"
              aria-label="Open Profile Menu"
              ><i class="fa fa-user fa-lg"></i
            ></a>
            <ul class="dropdown-menu settings-menu dropdown-menu-right">
              
              <li>
                <a class="dropdown-item" href="{{ route('admin.logout')}}"
                  ><i class="fa fa-sign-out fa-lg"></i> Logout</a
                >
              </li>
            </ul>
          </li>
        </ul>
      </header>
    <!--End Navbar/header-->
    
    <!-- Sidebar menu-->
    @include('admin.body.sidebar')
    <!--End Sidebar menu-->

    <main class="app-content">
      

      {{-- content --}}
       @yield('admin')
      {{-- End content --}}
      
    </main>
    <!-- Essential javascripts for application to work-->
    <script src="{{ asset('backend/js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{ asset('backend/js/popper.min.js')}}"></script>
    <script src="{{ asset('backend/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('backend/js/main.js')}}"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="{{ asset('backend/js/plugins/pace.min.js')}}"></script>

    <script type="text/javascript" src="{{ asset('backend/js/plugins/jquery.dataTables.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('backend/js/plugins/dataTables.bootstrap.min.js') }}"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>

    <!-- Page specific javascripts-->
    <script type="text/javascript" src="{{ asset('backend/js/plugins/chart.js') }}"></script>
    <script type="text/javascript">
      var data = {
      	labels: ["January", "February", "March", "April", "May"],
      	datasets: [
      		{
      			label: "My First dataset",
      			fillColor: "rgba(220,220,220,0.2)",
      			strokeColor: "rgba(220,220,220,1)",
      			pointColor: "rgba(220,220,220,1)",
      			pointStrokeColor: "#fff",
      			pointHighlightFill: "#fff",
      			pointHighlightStroke: "rgba(220,220,220,1)",
      			data: [65, 59, 80, 81, 56]
      		},
      		{
      			label: "My Second dataset",
      			fillColor: "rgba(151,187,205,0.2)",
      			strokeColor: "rgba(151,187,205,1)",
      			pointColor: "rgba(151,187,205,1)",
      			pointStrokeColor: "#fff",
      			pointHighlightFill: "#fff",
      			pointHighlightStroke: "rgba(151,187,205,1)",
      			data: [28, 48, 40, 19, 86]
      		}
      	]
      };
      var pdata = [
      	{
      		value: 300,
      		color: "#46BFBD",
      		highlight: "#5AD3D1",
      		label: "Complete"
      	},
      	{
      		value: 50,
      		color:"#F7464A",
      		highlight: "#FF5A5E",
      		label: "In-Progress"
      	}
      ]

      var ctxl = $("#lineChartDemo").get(0).getContext("2d");
      var lineChart = new Chart(ctxl).Line(data);

      var ctxp = $("#pieChartDemo").get(0).getContext("2d");
      var pieChart = new Chart(ctxp).Pie(pdata);
    </script>
  </body>
</html>
