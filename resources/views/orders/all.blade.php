@extends('layouts.admin')

@section('content')

    <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title mb-4 d-inline">Orders</h5>
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">first name</th>
                    <th scope="col">last name</th>
                    <th scope="col">email</th>
                    <th scope="col">country</th>
                    <th scope="col">status</th>
                    <th scope="col">price in DH</th>
                    <th scope="col">update</th>
                  </tr>
                </thead>
                <tbody>
                 @foreach ($all as $alls)
                     
                  <tr>
                    <th scope="row">{{$alls->id}}</th>
                    <td>{{$alls->name}}</td>
                    <td>{{$alls->last_name}}</td>
                    <td>{{$alls->email}}</td>
                    <td>{{$alls->state}}</td>
                    <td>{{$alls->status}}</td>
                    <td>{{$alls->price}}</td>
                    <td>                
                        <a href="{{url('categorie/update/'.$alls->id)}}" class="btn btn-warning text-white mb-4 text-center">update</a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table> 
            </div>
          </div>
        </div>
      </div>
@endsection