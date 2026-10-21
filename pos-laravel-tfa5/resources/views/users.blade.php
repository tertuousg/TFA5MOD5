@extends('layouts.app')
@section('title', 'User Accounts')
@section('content')
<div class="panel">
    <h1>User Accounts</h1>
    <p>Sample user records from a static PHP array in UserController.</p>
    <div class="table-wrap">
        <table>
            <thead><tr><th>ID</th><th>Name</th><th>Email</th><th>Role</th><th>Status</th></tr></thead>
            <tbody>
                @forelse ($users as $user)
                    <tr>
                        <td>{{ $user['id'] }}</td>
                        <td>{{ $user['name'] }}</td>
                        <td>{{ $user['email'] }}</td>
                        <td>{{ $user['role'] }}</td>
                        <td><span class="pill {{ $user['status'] === 'Inactive' ? 'inactive' : '' }}">{{ $user['status'] }}</span></td>
                    </tr>
                @empty
                    <tr><td colspan="5">No users found.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
