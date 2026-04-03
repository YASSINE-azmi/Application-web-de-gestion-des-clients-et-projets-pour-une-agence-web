@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Dashboard</h1>

    <div class="stats-grid">
        <div class="stat-card">
            <h3>Total Clients</h3>
            <p>{{ $totalClients }}</p>
        </div>

        <div class="stat-card">
            <h3>Total Projects</h3>
            <p>{{ $totalProjects }}</p>
        </div>

        <div class="stat-card">
            <h3>Projects In Progress</h3>
            <p>{{ $projectsInProgress }}</p>
        </div>

        <div class="stat-card">
            <h3>Completed Projects</h3>
            <p>{{ $completedProjects }}</p>
        </div>
    </div>
</div>
@endsection