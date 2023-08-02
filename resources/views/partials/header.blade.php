<header id="header" class="d-flex align-items-center">
    <div class="container d-flex justify-content-between align-items-center">
      <div class="logo">
        <h1><a href="index.html">KUMA BUILDER</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>
      <nav id="navbar" class="navbar">
        <ul>

           <li>
            <a href="/" class="{{ request()->segment(1) == 'home' ? 'active' : '' }}" >Home</a></li>
            <li><a href="/about" class="{{ request()->segment(2) == 'about' ? 'active' : '' }}">About</a></li>
            <li><a href="/blog" class="{{ request()->route('Blog') ? 'active' : '' }}">Blog</a></li>
            <li><a href="/categories" class="{{ request()->is('Categories') ? 'active' : '' }}">Categories</a></li>
            <li><a href="/contact" class="{{ request()->is('Contact') ? 'active' : '' }}">Contact</a>
            </li>
            <li>
            {{-- <li><a href="/" class="{{ ($active === "Home") ? 'active' : '' }}" >Home</a></li>
            <li><a href="/about" class="{{ ($active === "About") ? 'active' : '' }}">About</a></li>
            <li><a href="/blog" class="{{ ($active === "B log") ? 'active' : '' }}">Blog</a></li>
            <li><a href="/categories" class="{{ ($active === "Categories") ? 'active' : '' }}">Categories</a></li>
            <li><a href="/contact" class="{{ ($active === "Contact") ? 'active' : '' }}">Contact</a>
            </li> --}}
        </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      <!-- .navbar -->
    </div>
  </header>
