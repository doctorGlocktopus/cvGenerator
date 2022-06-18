<body>
    @extends('layouts.app')
    <div>
dsadsad
        @include('livewire.usermodal')

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    @if (session()->has('message'))
                        <h5 class="alert alert-success">{{ session('message') }}</h5>
                    @endif

                    <div class="card">
                        <div class="card-header">
                            <h4>user CRUD with Bootstrap Modal
                                <input type="search" wire:model="search" class="form-control float-end mx-2" placeholder="Search..." style="width: 230px" />
                                <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#userModal">
                                    Add New user
                                </button>
                            </h4>
                        </div>
                        <div class="card-body">
                            <table class="table table-borderd table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Course</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($users as $user)
                                        <tr>
                                            <td>{{ $user->id }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->course }}</td>
                                            <td>
                                                <button type="button" data-bs-toggle="modal" data-bs-target="#updateuserModal" wire:click="edituser({{$user->id}})" class="btn btn-primary">
                                                    Edit
                                                </button>
                                                <button type="button" data-bs-toggle="modal" data-bs-target="#deleteuserModal" wire:click="deleteuser({{$user->id}})" class="btn btn-danger">Delete</button>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="5">No Record Found</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                            <div>
                                {{ $users->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>
