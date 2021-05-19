@extends('layouts.admin')

   @section('content')
     <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <br><br>
          <!-- Card stats -->
          <div class="row">
          
          
           
          </div>
        </div>
      </div>
    </div>
   <div class="container-fluid mt--6">
      
      <div class="row">
        
        <div class="col-xl-4">
          <div class="card">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="mb-0"> User</h3>
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
                    <th scope="col"> Address</th>
                    <th scope="col">Total Balance</th>
                    <th scope="col">Created_at</th>
                  </tr>
                </thead>
                <tbody>
                @foreach($user as $users)
                  <tr>
                    <th scope="row">
                      {{$users->address}}
                    </th>
                    <td>
                      {{$users->balance}} {{$manager->currency_name}}
                    </td>
                    <td>
                      <div class="d-flex align-items-center">
                        <span class="mr-2">{{$users->created_at}}</span>
                       
                      </div>
                    </td>
                    
                  </tr>
                 
                  @endforeach
                </tbody>
              </table>
              {{$user->links()}}
            </div>
          </div>
        </div>
      </div>



   @endsection