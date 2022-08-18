@extends('front.master.master')

@section('content')
    <!-- Main Content-->

    <div class="container w-50 ">
        <div class="py-10 auto">
            <a href="{{ route('register') }}">
                <button type="sunmit" class="btn btn-outline-primary">Create-New-User</button>
            </a>

        </div>


        <table class="table table-bordered border-dark py-10">
            <thead>
                <tr>
                    <th>Firstname</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td class="h6">{{ $user->name }}</td>
                        <td class="bg-purple-600">{{ $user->email }}</td>
                        <td class="bg-purple-600">{{ $user->role->role }}</td>
                        <td class="small-auto">
                            <button type="button" class="btn btn-success"><i class="fas fa-edit"></i></button>
                            <button type="button" class="btn btn-primary"><i class="far fa-eye"></i></button>
                            <button type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
