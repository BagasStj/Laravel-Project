<!-- resources/views/components/sidebar.blade.php -->
<nav class="col-md-2 d-none d-md-block sidebar position-fixed">
    <div class="logo text-center bg-white">
        <img src="{{ asset('images/logo.png') }}" alt="Sriboga Raturaya Logo" class="img-fluid">
    </div>
    <div class="position-sticky p-2">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fas fa-home"></i> Homepage
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fas fa-building"></i> About Us
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fas fa-briefcase"></i> Our Company
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fas fa-handshake"></i> Investor
                </a>
            </li>
            <li class="nav-item">
                <button class="nav-link btn btn-link d-flex justify-content-start w-100" data-bs-toggle="collapse"
                    data-bs-target="#csrMenu" aria-expanded="true" aria-controls="csrMenu">
                    <i class="fas fa-cogs"></i>
                    <span>CSR</span>
                    <i class="fas fa-chevron-down float-end" style="margin-left: auto;"></i>
                </button>
                <div class="collapse show" id="csrMenu">
                    <ul class="list-unstyled ps-3">
                        <li>
                            <a href="#" class="nav-link">Landing</a>
                        </li>
                        <li>
                            <a href="/csr-category"
                                class="nav-link {{ request()->is('csr-category') ? 'active-collapse' : '' }}">
                                CSR Category
                            </a>
                        </li>
                        <li>
                            <a href="/csr-articles"
                                class="nav-link {{ request()->is('csr-articles') ? 'active-collapse' : '' }}">
                                CSR Article
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link">CSR Topic</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fas fa-newspaper"></i> News & Insight
                </a>
            </li>
        </ul>
    </div>
</nav>