@extends('layouts.main')

@section('content')
<main>
    <div class="container-fluid px-4">
        <h1 class="my-4">User</h1>
        <div class="card mb-4">
            <div class="card-body">
                <table id="datatablesSimple" class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Avatar</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Role</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>
                                <img src="https://placehold.co/50x50" alt="avatar">
                            </td>
                            <td>Tri Cahya</td>
                            <td>tricahya@email.com</td>
                            <td>085793</td>
                            <td>Admin</td>
                            <td>
                                <a class="btn btn-warning" href="#">Edit</a>
                                <a class="btn btn-danger" href="#">Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>
                                <img src="https://placehold.co/50x50" alt="avatar">
                            </td>
                            <td>Riki</td>
                            <td>riki@email.com</td>
                            <td>081298</td>
                            <td>Staff</td>
                            <td>
                                <a class="btn btn-warning" href="#">Edit</a>
                                <a class="btn btn-danger" href="#">Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>
                                <img src="https://placehold.co/50x50" alt="avatar">
                            </td>
                            <td>Ridwan</td>
                            <td>ridwan@email.com</td>
                            <td>083823</td>
                            <td>Staff</td>
                            <td>
                                <a class="btn btn-warning" href="#">Edit</a>
                                <a class="btn btn-danger" href="#">Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>
                                <img src="https://placehold.co/50x50" alt="avatar">
                            </td>
                            <td>Rian</td>
                            <td>rian@email.com</td>
                            <td>083824</td>
                            <td>Admin</td>
                            <td>
                                <a class="btn btn-warning" href="#">Edit</a>
                                <a class="btn btn-danger" href="#">Delete</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>

@endsection