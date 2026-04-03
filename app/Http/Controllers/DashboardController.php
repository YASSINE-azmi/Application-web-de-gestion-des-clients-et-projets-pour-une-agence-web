<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Project;

class DashboardController extends Controller
{
    public function index()
    {
        $totalClients = Client::count();
        $totalProjects = Project::count();
        $projectsInProgress = Project::where('statut', 'en cours')->count();
        $completedProjects = Project::where('statut', 'terminé')->count();

        return view('dashboard.index', compact(
            'totalClients',
            'totalProjects',
            'projectsInProgress',
            'completedProjects'
        ));
    }
}