
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <meta name="auth-check" content="{{ (Auth::user()->address) }}">
  <title>Argon Dashboard - Free Dashboard for Bootstrap 4</title>
  <!-- Favicon -->
  <link rel="icon" href="{{asset('public/assets/img/brand/favicon.png')}}" type="image/png">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="{{asset('public/assets/vendor/nucleo/css/nucleo.css')}}" type="text/css">
  <link rel="stylesheet" href="{{asset('public/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css')}}" type="text/css">
  <!-- Argon CSS -->
  <link rel="stylesheet" href="{{asset('public/assets/css/argon.css?v=1.2.0')}}" type="text/css">
</head>
<body>

  <div class="main-content" id="panel">
    <!-- Header -->
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
 <a  class="navbar-brand" href="javascript:void(0)">
          <img src="public/assets/img/brand/white.png" width="100px;" class="navbar-brand-img" alt="...">
        </a>             
       </div>
       
            
            <div class="col-lg-6 col-5 text-right">
<ul class="navbar-nav align-items-center   ml-auto ml-md-0 " style="float: right;">
            <li class="nav-item ">
              <a class="nav-link pr-0" style="color: white;" href="{{ route('logout') }}"   onclick="event.preventDefault(); document.getElementById('logout-form').submit();" >
                  <i class="ni ni-user-run"></i>
                  <span>Logout</span>
                </a>
                 <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
              
              
            </li>
            
             

          </ul>            </div>
          </div>
           <nav id="prepare" style="width:20%; cursor: pointer;"   aria-label="breadcrumb" class="  ">
                <ol   class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#" ><i class="fas fa-link"></i></a></li>
                  <li class="breadcrumb-item" id="btn-connect"><a >Connect Wallet</a></li>

                </ol>
                
              </nav>
               <nav   id="connected"  style="display: none;width:25%; cursor: pointer;" aria-label="breadcrumb" class="  ">
               <ol      class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-link"></i></a></li>
                  <li class="breadcrumb-item" id="btn-disconnect"><a >Disconnect Wallet</a></li>

                </ol>
                </nav>
               
          <!-- Card stats -->
          <div class="row">
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Total Balance</h5>
                      <span class="h2 font-weight-bold mb-0">{{auth()->user()->balance}}</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                        <i class="ni ni-active-40"></i>
                      </div>
                    </div>
                  </div>
                 
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Total Referrals</h5>
                      <span class="h2 font-weight-bold mb-0">2,356</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                        <i class="ni ni-chart-pie-35"></i>
                      </div>
                    </div>
                  </div>
                
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Total Withdraw</h5>
                      <span class="h2 font-weight-bold mb-0">924</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
                        <i class="ni ni-money-coins"></i>
                      </div>
                    </div>
                  </div>
               
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Referral Bonus</h5>
                      <span class="h2 font-weight-bold mb-0">49,65%</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-info text-white rounded-circle shadow">
                        <i class="ni ni-chart-bar-32"></i>
                      </div>
                    </div>
                  </div>
                 
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col-xl-8">
          <div class="card bg-default">
            <div class="card-header bg-transparent">
              <div class="row align-items-center">
                <div class="col">
                  <h5 class="h3 text-white mb-0">Referral Link</h5>
                </div>
                <div class="col">
                  <ul class="nav nav-pills justify-content-end">
                    <li class="nav-item mr-2 mr-md-0" >
                      <a href="#" class="nav-link py-2 px-3 active" data-toggle="tab">
                        <span class="d-none d-md-block"> User Token "{{auth()->user()->id}}" </span>
                        <span class="d-md-none"> User Token "{{auth()->user()->id}}" </span>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div  class="card-body" id="accounts">
            <div id="templates" style="display: none">
      <template  id="template-balance">
        <tr>
          <th class="address"></th>
          <td class="balance"></td>
        </tr>
      </template>
    </div>
        <h5 class="h3 text-white mb-0">{{request()->getHttpHost()}}/register/{{auth()->user()->address}}</h5>
            </div>
          </div>
        </div>
       
      </div>
      <div class="row">
        <div class="col-xl-8">
          <div class="card">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="mb-0">Referral Lists</h3>
                </div>
                <div class="col text-right">
                </div>
              </div>
            </div>
            <div class="table-responsive">
              <!-- Projects table -->
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">Address</th>
                    <th scope="col">Time</th>
                    <th scope="col">Bonus</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($ref_get as $ref_gets)
                  <tr>
                    <th scope="row">
                      {{$ref_gets->user->address}}
                    </th>
                    
                    <td>
                       {{$ref_gets->created_at->format('m/d/Y')}}
                    </td>
                    <td>
                      <i class="fas fa-arrow-up text-success mr-3"></i>500
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Total Balance For Withdraw</h5><br>
                      <span class="h2 font-weight-bold mb-0">{{auth()->user()->balance}}</span>
                    </div>
                    
                  </div>
                 
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Apply  Withdraw</h5><br>
    <form method="post" id="sample_form" class="form-horizontal">
          @csrf
    <input type="text" style="width:"10%";"  id="name" placeholder="Enter  Amount" name="name">
    <input type="text"  value="{{auth()->user()->id}}" style="display:none;" id="userid"  name="userid">
    <input type="text"  value="pending" style="display:none;" id="actionpen"  name="action1">
    <input type="hidden" name="action" id="action" value="Add" />
    <input type="hidden" name="hidden_id" id="hidden_id" />
    <input type="submit" name="action_button" id="action_button" class="btn btn-sm btn-primary" value="Apply" />
</form>
</div>                       </div>

                  </div>
                
                </div>
              </div>
            </div>
        <div class="col-xl-4">
          <div class="card">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="mb-0">Withdraw Lists</h3>
                </div>
                <div class="col text-right">
                 </div>
              </div>
            </div>
            <div  class="table-responsive">
              <!-- Projects table -->
              <table  id="user_table" class=" table table-bordered table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">Amount</th>
                    <th scope="col">Time</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
               
              </table>
              
            </div>
            
          </div>
        </div>
      </div>
      
   <script>
 
$(document).ready(function(){
     $('#user_table').DataTable({
  processing: true,
  serverSide: true,
  ajax: {
   url: "{{ route('sample.index') }}",
  },
  columns: [
   {data: 'name',name: 'name'},
   {data: 'created_at',name: 'created_at'},
   {data: 'action1',name:'action1'}
  ]
 });

    if($('#action').val() == 'Add')
  {
   action_url = "{{ route('sample.store') }}";
  }
  $('#sample_form').on('submit', function(event){
  event.preventDefault();
  var action_url = '';

  if($('#action').val() == 'Add')
  {
   action_url = "{{ route('sample.store') }}";
  }
  $.ajax({
   url: action_url,
   method:"POST",
   data:$(this).serialize(),
   dataType:"json",
   success:function(data)
   {
    var html = '';
    if(data.errors)
    {
     html += alert( data.errors);

    }
    if(data.success)
    {
     html = alert( data.success );
     $('#sample_form')[0].reset();
      $('#user_table').DataTable().ajax.reload();
     }
    $('#form_result').html(html);
   }
  });
 });
  
});
</script>
      <!-- Footer -->
      <footer class="footer pt-0">
        <div class="row align-items-center justify-content-lg-between">
          <div class="col-lg-12">
            <center><div style="margin-left:40%;"  class="copyright text-center  text-lg-left  text-muted">
              &copy; 2021 <a href="{{request()->getHttpHost()}}" class="font-weight-bold ml-1" target="_blank">Website name</a>
            </div></center>
          </div>
         
        </div>
      </footer>
    </div>
  </div>
 <!-- Argon Scripts -->
  <!-- Core -->

  <script src="{{asset('public/assets/vendor/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{asset('public/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('public/assets/vendor/js-cookie/js.cookie.js')}}"></script>
  <script src="{{asset('public/assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js')}}"></script>
  <script src="{{asset('public/assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js')}}"></script>
  <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
   <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css" />
  <!-- Optional JS -->
  <script src="{{asset('public/assets/vendor/chart.js/dist/Chart.min.js')}}"></script>
  <script src="{{asset('public/assets/vendor/chart.js/dist/Chart.extension.js')}}"></script>
  <!-- Argon JS -->
  <script src="{{asset('public/assets/js/argon.js?v=1.2.0')}}"></script>
   <script type="text/javascript" src="https://unpkg.com/web3@1.2.11/dist/web3.min.js"></script>
    <script type="text/javascript" src="https://unpkg.com/web3modal@1.9.0/dist/index.js"></script>
    <script type="text/javascript" src="https://unpkg.com/evm-chains@0.2.0/dist/umd/index.min.js"></script>
    <script type="text/javascript" src="https://unpkg.com/@walletconnect/web3-provider@1.2.1/dist/umd/index.min.js"></script>
    <script type="text/javascript" src="https://unpkg.com/fortmatic@2.0.6/dist/fortmatic.js"></script>

    <!-- This is our example code -->
    <script type="text/javascript" src="{{asset('public/example.js')}}"></script>
    <!--<script type="text/javascript" src="{{asset('public/.prettierrc.js')}}"></script>-->
</body>

</html>

<html>
  <head>
    <title>Web3modal example written in vanilla JavaScript and HTML</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Get some bootstrap default styles -->
   
  </head>
  <body>
    <!-- Construct a Bootstrap layout -->
    <div class="container">
      <div class="row">
        <div class="col-md-12">
         

          <div class="alert alert-danger" id="alert-error-https" style="display: none">
          </div>

          <div id="prepare" style="display: none>
            <button class="btn btn-primary" id="btn-connect">
              
            </button>
          </div>

          <div id="connected" style="display: none">

            <button class="btn btn-primary" id="btn-disconnect">
              Disconnect wallet
            </button>

            <hr>

            <div id="network">
              <p>
                <strong>Connected blockchain:</strong> <span id="network-name"></span>
              </p>

              <p>
                <strong>Selected account:</strong> <span id="selected-account"></span>
              </p>

            </div>

            <hr>

            <h3>All account balances</h3>

            <table class="table table-listing">
              <thead>
                <th>Address</th>
                <th>ETH balance</th>
              </thead>

              <tbody id="accounts">
              </tbody>
            </table>


          </div>

          <br>

         

        </div>
      </div>
    </div>

    <!-- We use simple <template> templating for the example -->
    <div id="templates" style="display: none">
      <template id="template-balance">
        <tr>
          <th class="address"></th>
          <td class="balance"></td>
        </tr>
      </template>
    </div>

    <!--

      Use unpkg CDN to load all NPM packages to vanilla Javascript - read more at http://unpkg.com

      On your deployment, you properly either want to use a preprocessing tool like webpack
      to include these files, or extract NPM archives and manually host the files inside.

      TODO: Pin down all versions.

    -->

    <script type="text/javascript" src="https://unpkg.com/web3@1.2.11/dist/web3.min.js"></script>
    <script type="text/javascript" src="https://unpkg.com/web3modal@1.9.0/dist/index.js"></script>
    <script type="text/javascript" src="https://unpkg.com/evm-chains@0.2.0/dist/umd/index.min.js"></script>
    <script type="text/javascript" src="https://unpkg.com/@walletconnect/web3-provider@1.2.1/dist/umd/index.min.js"></script>
    <script type="text/javascript" src="https://unpkg.com/fortmatic@2.0.6/dist/fortmatic.js"></script>

    <!-- This is our example code -->
  </body>
</html>

