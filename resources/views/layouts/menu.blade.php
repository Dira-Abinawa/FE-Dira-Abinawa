<li>
    <a class="nav-link" href="{{ route('kategoris.index') }}">
        <i class="nav-icon icon-cursos"></i>
        <span> {{ Auth::user()->name }}</span>
    </a>
</li>

<li class="nav-item {{ Request::is('kategoris*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('kategoris.index') }}">
        <i class="nav-icon icon-cursos"></i>
        <span>Dewan Kerja Ranting</span>
    </a>
</li>
<li class="nav-item {{ Request::is('kategoris*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('kategoris.index') }}">
        <i class="nav-icon icon-cursos"></i>
        <span>Data Pangkalan</span>
    </a>
</li>
<li class="nav-item {{ Request::is('kategoris*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('kategoris.index') }}">
        <i class="nav-icon icon-cursos"></i>
        <span>Data Potensi</span>
    </a>
</li>
<li class="nav-item {{ Request::is('kategoris*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('kategoris.index') }}">
        <i class="nav-icon icon-cursos"></i>
        <span>News</span>
    </a>
</li>
<li class="nav-item {{ Request::is('kategoris*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('kategoris.index') }}">
        <i class="nav-icon icon-cursos"></i>
        <span>Activity</span>
    </a>
</li>
<li class="nav-item {{ Request::is('kategoris*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('kategoris.index') }}">
        <i class="nav-icon icon-cursos"></i>
        <span>Opinion</span>
    </a>
</li>
<li class="nav-item {{ Request::is('kategoris*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('kategoris.index') }}">
        <i class="nav-icon icon-cursos"></i>
        <span>User</span>
    </a>
</li>
{{-- <li class="nav-item {{ Request::is('sekolahs*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('sekolahs.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Sekolahs</span>
    </a>
</li> --}}
<li class="nav-item {{ Request::is('schools*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('schools.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Schools</span>
    </a>
</li>
