<div class="nav">
    <div class="container d-flex justify-content-between align-items-center">
        <div class="logos text-center px-3 d-flex align-items-center">
            <a href="{{route('home')}}" class="text-decoration-none text-light">
                <h2 class="fw-bold">Supplime</h2>
                <p class="cust-p text-uppercase">Supermarket</p>
            </a>
        </div>
        <div class="search d-flex justify-content-center align-items-center">
            <i class="fa-solid fa-magnifying-glass fs-5 search-icon"></i>
            <form action="{{route('search.index')}}" method="GET" class="d-flex" role="search">
                <input
                    class="form-control rounded-0 border-0"
                    type="text"
                    name="search"
                    value="{{ request()->query('search') }}"
                    placeholder="Search For Products"
                    aria-label="Search"
                    required
                />
                <button
                    class="btn btn-outline-success text-light fw-medium rounded-0 border-0"
                    type="submit"
                >
                    Go
                </button>
            </form>
        </div>
        <div
            class="things d-flex justify-content-between align-items-center flex-column p-3"
        >
            <div class="links">
                <ul
                    class="list-unstyled d-flex justify-content-between align-items-center gap-2"
                >
                    <li class="nav-item">
                        <a href="{{route('notifications.show')}}" class="text-light fs-3"
                        ><i class="fa-regular fa-bell fw-normal"></i
                            ></a>
                    </li>
                    <x-nav-link href="{{route('orders.index')}}">My Orders</x-nav-link>
                    <x-nav-link href="{{ auth()->check() ? '/profile/'.auth()->user()->name : route('login') }}">Profile</x-nav-link>

                    @auth
                    <form action="{{route('logout')}}" method="POST" class="d-line">
                        @csrf
                        <button type="submit" class="btn nav-link text-white p-0 m-0" style="white-space: nowrap">Log Out</button>
                    </form>
                        @else
                            <x-nav-link href="{{route('login')}}">Log In</x-nav-link>
                        @endauth
                </ul>
            </div>
            <div
                class="icons d-flex justify-content-between align-items-center gap-3"
            >
                <a
                    href="{{route('cart.index')}}"
                    class="bg-warning text-light cart text-decoration-none rounded-circle p-2"
                ><i class="fa-solid fa-cart-shopping fs-3"></i
                    ></a>
                <a href="{{route('favourite.index')}}" class="text-light"
                ><i class="fa-regular fa-heart fs-3"></i
                    ></a>
                <a href="{{route('delivery.index')}}"
                ><img
                        src="/assets/imgs/delivery_5457874.png"
                        class="icon-size img-fluid"
                        alt=""
                        style="width: 50px; height: 50px"
                    /></a>
            </div>
        </div>
    </div>
</div>
<div class="fake-nav p-3">
    <div class="container d-flex justify-content-between align-items-center">
        <div class="f-links position-relative">
            <button class="btn btn-primary border-0" type="button" data-bs-toggle="collapse" data-bs-target="#menu" aria-expanded="false" aria-controls="menu">
                ☰
            </button>

            <div class="collapse position-absolute  z-3" id="menu" style="top: 60px; left: 0; width: 250px;">
                <div class="card card-body border-0 rounded-2">
                    <x-mobile-nav-link href="{{route('orders.index')}}">My Orders</x-mobile-nav-link>
                    <x-mobile-nav-link href="{{ auth()->check() ? '/profile/'.auth()->user()->name : route('login') }}">Profile</x-mobile-nav-link>
                    <x-mobile-nav-link href="{{route('notifications.show')}}">Notifications</x-mobile-nav-link>
                    <x-mobile-nav-link href="{{route('cart.index')}}">Shopping Cart</x-mobile-nav-link>
                    <x-mobile-nav-link href="{{route('favourite.index')}}">Favorites</x-mobile-nav-link>
                    <x-mobile-nav-link href="{{route('delivery.index')}}">Delivery</x-mobile-nav-link>
                    @auth
                        <form action="{{route('logout')}}" method="POST" class="d-line">
                            @csrf
                            <button type="submit" class="btn nav-link text-white p-0 m-0 bg-white" style="white-space: nowrap">Log Out</button>
                        </form>
                    @else
                        <x-mobile-nav-link class="nav-link text-black p-0 m-0 " href="{{route('login')}}">Log In</x-mobile-nav-link>
                    @endauth
                </div>
            </div>

        </div>
        <div class="f-logo rounded-pill">
            <a href="{{route('home')}}" class="text-decoration-none text-light fw-bold fs-3 p-4">Supplime</a>
        </div>
        <div class="f-searche">
            <i class="fa-solid fa-magnifying-glass fs-5 f-search-icon"></i>
        </div>
        <div id="floating-search" class="position-absolute bg-white p-2 rounded shadow d-none" style="top: 70px; right: 20px; z-index: 999;">
            <form action="{{route('search.index')}}" method="GET" class="d-flex" role="search">
                <input
                    class="form-control me-2"
                    type="text"
                    name="search"
                    value="{{ request()->query('search') }}"
                    placeholder="Search For Products"
                    aria-label="Search"
                />
                <button class="btn btn-success border-0 fw-medium" type="submit">Go</button>
            </form>
        </div>
    </div>
</div>
<div
    class="sidebar d-block d-sm-flex justify-content-between align-items-center px-5 pt-3 pb-0"
>
    <div class="container d-flex justify-content-between align-items-center">
        <div class="cat d-flex justify-content-center align-items-center">
            <a href="" class="text-decoration-none text-dark"
            ><i class="fas fa-bars px-2 icon"></i>
            </a>
            <p class="fw-bold fs-6 text-nowrap">All Categories</p>
        </div>
        <div class="links">
            <ul
                class="list-unstyled d-flex justify-content-center align-items-center gap-4"
            >
                <x-link href="{{route('home')}}" :active="request()->is('/')">Home</x-link>
                <x-link href="{{route('about')}}" :active="request()->is('about')">About</x-link>
                <x-link href="{{route('shop.index')}}" :active="request()->is('shop')">Shop</x-link>
                <x-link href="{{route('contact-us.index')}}" :active="request()->is('contact')">Contact Us</x-link>
            </ul>
        </div>
    </div>
</div>
<div class="allcat position-absolute">
    <div class="container">
        <ul class="category list-unstyled fs-4">
                <form action="{{ route('shop.index') }}" method="get">
                    @foreach ($categories as $category)
                    <x-category-link  :category="$category">{{ $category->name }}</x-category-link>
                    @endforeach
                </form>
        </ul>
    </div>
</div>
