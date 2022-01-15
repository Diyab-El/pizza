@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
          
            <nav class="navbar navbar-light bg-dark bg-opacity-10 mb-2">
                <a class="navbar-brand p-1" href="#">Customers</a>
              </nav>
            <div class="card">
                <div class="card-header  ">Customers
                <a style="float:right;" href="{{route('pizza.index')}}">View Pizza</a>
                <a style="float:right;" href="{{route('pizza.create')}}">Create Pizza</a>
              </div>
              
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Member since</th>
                            
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($customers as $customer)
                          <tr>
                            <td>{{$customer->name}}</td>
                            <td>{{$customer->email}}</td>
                            <td>{{ \Carbon\Carbon::parse($customer->created_at)->format('M d Y') }}</td>
                         
                          </tr>
                          @endforeach
                       
                        </tbody>
                      </table>

                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection