<!-- need to remove -->
<li class="nav-item">
    <a href="{{ route('dashboard') }}" class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}">
        <i class="nav-icon fas fa-tachometer-alt"></i>
        <p>Dashboard</p>
    </a>
</li>

<li class="nav-item has-treeview">
    <a href="#"class="nav-link {{ Request::is('home') ? 'active' : '' }}">
        <i class="nav-icon fas fa-file-alt"></i>
        <p>
        Posts
        <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
        <a href="{{ route('post.filter') }}" class="nav-link {{ Request::is('home') ? 'active' : '' }}">
            <i class="nav-icon fas fa-file"></i>
            <p> All Posts</p>
        </a>
        </li>
        <li class="nav-item">
        <a href="{{ route('post.create') }}" class="nav-link">
            <i class="nav-icon fas fa-edit"></i>
            <p>New Post</p>
        </a>
        </li>
        <li class="nav-item">
        <a href="{{ route('category.filter') }}" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>Categories</p>
        </a>
        </li>
        <li class="nav-item">
        <a href="./index3.html" class="nav-link">
            <i class="nav-icon fas fa-tags"></i>
            <p>Tags</p>
        </a>
        </li>
    </ul>
</li>
<li class="nav-item">
    <a href="{{ route('tile.filter') }}" class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}">
        <i class="nav-icon fas fa-th"></i>
        <p>Tiles</p>
    </a>
</li>

