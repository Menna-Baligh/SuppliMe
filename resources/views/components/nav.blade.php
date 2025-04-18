<div class="nav">
    <div class="container d-flex justify-content-between align-items-center">
        <div class="logos text-center px-3 d-flex align-items-center">
            <a href="/" class="text-decoration-none text-light">
                <h2 class="fw-bold">Supplime</h2>
                <p class="cust-p text-uppercase">Supermarket</p>
            </a>
        </div>
        <div class="search d-flex justify-content-center align-items-center">
            <i class="fa-solid fa-magnifying-glass fs-5 search-icon"></i>
            <form class="d-flex" role="search">
                <input
                    class="form-control rounded-0 border-0"
                    type="search"
                    placeholder="Search For Products"
                    aria-label="Search"
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
                        <a href="/notifications" class="text-light fs-3"
                        ><i class="fa-regular fa-bell fw-normal"></i
                            ></a>
                    </li>
                    <x-nav-link href="">My Orders</x-nav-link>
                    <x-nav-link href="">Profile</x-nav-link>
                    <x-nav-link href="">Log Out</x-nav-link>
                </ul>
            </div>
            <div
                class="icons d-flex justify-content-between align-items-center gap-3"
            >
                <a
                    href="/cart"
                    class="bg-warning text-light cart text-decoration-none rounded-circle p-2"
                ><i class="fa-solid fa-cart-shopping fs-3"></i
                    ></a>
                <a href="#" class="text-light"
                ><i class="fa-regular fa-heart fs-3"></i
                    ></a>
                <a href="#"
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
                    <x-mobile-nav-link href="">My Orders</x-mobile-nav-link>
                    <x-mobile-nav-link href="">Profile</x-mobile-nav-link>
                    <x-mobile-nav-link href="">Log Out</x-mobile-nav-link>
                    <x-mobile-nav-link href="/notifications">Notifications</x-mobile-nav-link>
                    <x-mobile-nav-link href="/cart">Shopping Cart</x-mobile-nav-link>
                    <x-mobile-nav-link href="">Favorites</x-mobile-nav-link>
                    <x-mobile-nav-link href="">Delivery</x-mobile-nav-link>
                </div>
            </div>

        </div>
        <div class="f-logo rounded-pill">
            <a href="/" class="text-decoration-none text-light fw-bold fs-3 p-4">Supplime</a>
        </div>
        <div class="f-searche">
            <i class="fa-solid fa-magnifying-glass fs-5 f-search-icon"></i>
        </div>
        <div id="floating-search" class="position-absolute bg-white p-2 rounded shadow d-none" style="top: 70px; right: 20px; z-index: 999;">
            <form class="d-flex" role="search">
                <input
                    class="form-control me-2"
                    type="search"
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
                <x-link href="/" :active="request()->is('/')">Home</x-link>
                <x-link href="/about" :active="request()->is('about')">About</x-link>
                <x-link href="/shop" :active="request()->is('shop')">Shop</x-link>
                <x-link href="/contact" :active="request()->is('contact')">Contact Us</x-link>
            </ul>
        </div>
    </div>
</div>
<div class="allcat position-absolute">
    <div class="container">
        <ul class="category list-unstyled fs-4">
            <x-category-link href="">Fruits</x-category-link>
            <x-category-link href="">Vegetables</x-category-link>
            <x-category-link href="">Drinks</x-category-link>
            <x-category-link href="">Dry Fruit</x-category-link>
            <x-category-link href="">Oil</x-category-link>
            <x-category-link href="">Bakery Items</x-category-link>
            <x-category-link href="">Milk Shake</x-category-link>
            <x-category-link href="">Detergents</x-category-link>
            <x-category-link href="">Milk & Eggs</x-category-link>
        </ul>
    </div>
</div>
