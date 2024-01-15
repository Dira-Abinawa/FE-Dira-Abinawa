<br>
<li>
    <a class="nav-link" href="#">
        <i class="nav-icon icon-cursos"></i>
        <span> {{ Auth::user()->name }}</span>
    </a>
</li>
<br>
<li class="nav-item {{ Request::is('dashboard*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('dashboard') }}">
        <i class="nav-icon fas fa-tachometer-alt"></i>
        <span>Dashboard</span>
    </a>
</li>

<br>
@if(auth()->user()->is_admin)
<li class="nav-item {{ Request::is('dkrantings*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('dkrantings.index') }}">
        <i class="nav-icon icon-people"></i>
        <span>Dewan Kerja Ranting</span>
    </a>
</li>
@endif

<li class="nav-item {{ Request::is('schools*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('dapot.index') }}">
        <i class="nav-icon icon-organization"></i>
        <span>Data Potensi</span>
    </a>
</li>

@if(auth()->user()->is_admin)
<li class="nav-item {{ Request::is('schools*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('schools.index') }}">
        <i class="nav-icon icon-organization"></i>
        <span>Data Pangkalan</span>
    </a>
</li>
@endif

<li class="nav-item {{ Request::is('news') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('news.index') }}">
        <i class="nav-icon icon-news"></i>
        <span>News</span>
    </a>
</li>
<hr style="height: 10px; color: rgb(0, 0, 0)" />

@if(auth()->user()->is_admin)
    <li class="nav-item {{ Request::is('users*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('users.index') }}">
            <i class="nav-icon icon-cursor"></i>
            <span>Users</span>
        </a>
    </li>
@endif
