<nav style="background: #ffffff; border-bottom: 1px solid #e2e8f0; padding: 16px 24px;">
    <div style="display: flex; justify-content: space-between; align-items: center; gap: 20px;">
        <div style="display: flex; align-items: center; gap: 20px;">
            <a href="{{ route('dashboard') }}" style="text-decoration: none; font-weight: 700; color: #2563EB;">
                AgencyTrack
            </a>

            <a href="{{ route('dashboard') }}" style="text-decoration: none; color: #0F172A;">Dashboard</a>
            <a href="{{ route('clients.index') }}" style="text-decoration: none; color: #0F172A;">Clients</a>
            <a href="{{ route('projects.index') }}" style="text-decoration: none; color: #0F172A;">Projects</a>
        </div>

        @auth
            <div style="display: flex; align-items: center; gap: 16px;">
                <span style="color: #475569;">{{ Auth::user()->name }}</span>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" style="background: #2563EB; color: white; border: none; padding: 8px 14px; border-radius: 8px; cursor: pointer;">
                        Logout
                    </button>
                </form>
            </div>
        @endauth
    </div>
</nav>