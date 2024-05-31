<ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 textsmall">
    <li>
        <a href="/" class="nav-link {{ Request::is('dashboard*') ? 'textsecondary' : 'text-white' }}">Accueil</a>
    </li>
    <li>
        <a href=" {{ route('student.index') }}" class="nav-link {{ Request::is('student*') ? 'text-secondary' : 'text-white' }}">Liste etudiant</a>
    </li>
    <li>
        <a href="{{ route('cour.index') }}" class="nav-link {{ Request::is('cour*') ? 'text-secondary' : 'text-white' }}">Cours</a>
    </li>
    <li>
        <a href=" #" class="nav-link text-white">notes</a>
    </li>
</ul>