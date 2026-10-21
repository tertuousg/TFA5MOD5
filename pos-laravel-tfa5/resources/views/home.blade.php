@extends('layouts.app')
@section('title', 'Home')
@section('content')
<div class="panel">
    <h1>Welcome to the POS Account Management System</h1>
    <p>This Laravel demonstration application has four pages and uses static PHP arrays to display customer and user account information.</p>
    <p>Use the navigation menu to browse the application.</p>
    <a class="button" href="{{ route('customers.index') }}">View Customers</a>
</div>
@endsection
