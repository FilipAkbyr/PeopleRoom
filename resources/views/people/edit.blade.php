@extends('layouts.app')
@section('heading')
Update People
@endsection
@section('content')
<div class="row flex-grow">
    <div class="col-md-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <form action="{{route('people.update',$people->id)}}" method="POST">
                    @csrf
                    @method('put')
                    <div class="form-group row">
                        <div class="col-6">
                            <label>Name:</label>
                            <input required class="form-control mb-4 mb-md-0"  value="{{$people->name}}" name="name" placeholder="Enter Name"/>
                        </div>
                        <div class="col-6">
                            <label>Sur Name:</label>
                            <input required class="form-control mb-4 mb-md-0" value="{{$people->sur_name}}" name="sur_name" placeholder="Enter Sur Name"/>
                        </div>
                        <div class="col-6">
                            <label>Email </label>
                            <input required class="form-control" type="email" value="{{$people->email}}" name="email" placeholder="Enter email" />
                        </div>
                        <div class="col-6">
                            <label>Password:</label>
                            <input type="password" class="form-control mb-4 mb-md-0" value="" name="password" placeholder="Enter Password" />
                        </div>
                        <div class="col-6">
                            <label>Role:</label>
                           <select name="role" id="">
                            <option value="2" {{($people->role == 2)? 'selected':''}} >People</option>
                            <option value="1" {{($people->role == 1)? 'selected':''}} >Admin</option>
                           </select>
                    </div>
                </div>
                    <button class="btn btn-primary" type="submit">Update</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
@endsection
