@extends('layouts.admin')

@section('content')
<div class="content-header">
    <div class="container-fluid">
       <div class="col-md-12">
        <table class="table table-bordered table-hover">
          <thead>
            <tr>
              <th>#</th>
              <th>Name</th>
              <th>Email</th>
              <th>Type</th>
              
            </tr>
          </thead>
          <tbody>
            @if (!empty($users))
                @foreach ($users as $user)
                    <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $user->name }}</td>
                      <td>{{ $user->email }}</td>
                      <td>{{ ucfirst($user->type) }}</td>
                    </tr>
                @endforeach
            @endif
          </tbody>
        </table>
      </div>
    </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

@endsection
