@extends('layouts.app')
@section('heading')
Add People
@endsection
@section('content')
<div class="row flex-grow">
    <div class="col-md-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <form action="{{route('people.store')}}" method="POST">
                    @csrf
                    <div class="form-group row">
                        <div class="col-6">
                            <label>Name:</label>
                            <input required class="form-control mb-4 mb-md-0" name="name" placeholder="Enter Name"/>
                        </div>
                        <div class="col-6">
                            <label>Sur Name:</label>
                            <input required class="form-control mb-4 mb-md-0" name="sur_name" placeholder="Enter Sur Name"/>
                        </div>
                        <div class="col-6">
                            <label>Email </label>
                            <input required class="form-control" type="email" name="email" placeholder="Enter email" />
                        </div>
                        <div class="col-6">
                            <label>Password:</label>
                            <input type="password" required class="form-control mb-4 mb-md-0" name="password" placeholder="Enter Password" />
                        </div>
                        <div class="col-6">
                            <label>Role:</label>
                           <select name="role" id="">
                            <option value="2" selected>People</option>
                            <option value="1">Admin</option>
                           </select>
                    </div>
                </div>
                    <button class="btn btn-primary" type="submit">Submit</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
@endsection
