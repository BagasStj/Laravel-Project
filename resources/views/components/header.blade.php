<!-- resources/views/components/header.blade.php -->
<nav class="navbar navbar-expand-lg navbar-light mb-4">
    <div class="container-fluid">
        <h1 class="navbar-brand" style="color: #28a745;">@yield('page-title')</h1>
        <div class="d-flex align-items-center">
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="profileDropdown"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <span class="me-2">RI</span> Raka Ibrahim
                </button>
                <ul class="dropdown-menu" aria-labelledby="profileDropdown">
                    <li><a class="dropdown-item" href="#">Profile</a></li>
                    <li><a class="dropdown-item" href="#">Settings</a></li>
                    <li><a class="dropdown-item" href="#">Logout</a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>