@extends('layouts.admin')

@section('content')

    <div class="row">
     <div class="col">
       <div class="card">
         <div class="card-body">
           <h5 class="card-title mb-5 d-inline">Update Categories</h5>
       <form method="POST" action="{{route('categories.edit',$categorie->id)}}" enctype="multipart/form-data">
        @csrf
             <!-- Email input -->
             <div class="form-outline mb-4 mt-4">
               <input type="text" name="name" id="form2Example1" class="form-control" placeholder="name" value="{{$categorie->name}}" />
              
             </div>
             <div class="form-outline mb-4 mt-4">
                <input type="text" name="icon" id="form2Example1" class="form-control" placeholder="icon" value="{{$categorie->icon}}" />      
              </div>
             <!-- Submit button -->
             <button type="submit" name="submit" class="btn btn-primary  mb-4 text-center">update</button>

       
           </form>

         </div>
       </div>
     </div>
   </div>

@endsection