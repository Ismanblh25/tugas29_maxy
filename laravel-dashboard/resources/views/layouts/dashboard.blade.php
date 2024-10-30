@extends('layouts.app')

@section('content')
<div class="dashboard">
    <h2>Log Stats</h2>
    <div class="stats">
        <div class="stat">
            <h4>Total users</h4>
            <p>2</p>
        </div>
        <div class="stat">
            <h4>Verified/Non-verified users</h4>
            <p>2/0</p>
        </div>
        <div class="stat">
            <h4>Active/Inactive users</h4>
            <p>2/0</p>
        </div>
        <div class="stat">
            <h4>Protected pages</h4>
            <p>4</p>
        </div>
    </div>
    <div class="log-stats">
        <h3>Log Levels</h3>
        <ul>
            <li>Emergency</li>
            <li>Alert</li>
            <li>Critical</li>
            <li>Error</li>
            <li>Warning</li>
            <li>Notice</li>
        </ul>
    </div>
</div>
@endsection
