@extends('layouts.app')
@section('title', 'Customer Accounts')
@section('content')
<div class="panel">
    <h1>Customer Accounts</h1>
    <p>Sample customer records from a static PHP array in CustomerController.</p>
    <div class="table-wrap">
        <table>
            <thead><tr><th>ID</th><th>Name</th><th>Email</th><th>Phone</th><th>Status</th></tr></thead>
            <tbody>
                @forelse ($customers as $customer)
                    <tr>
                        <td>{{ $customer['id'] }}</td>
                        <td>{{ $customer['name'] }}</td>
                        <td>{{ $customer['email'] }}</td>
                        <td>{{ $customer['phone'] }}</td>
                        <td><span class="pill {{ $customer['status'] === 'Inactive' ? 'inactive' : '' }}">{{ $customer['status'] }}</span></td>
                    </tr>
                @empty
                    <tr><td colspan="5">No customers found.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
