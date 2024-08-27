<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSR Article</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }

        .sidebar {
            background-color: #28a745;
            color: white;
            min-height: 100vh;
            padding: 0;
        }

        .sidebar .nav-link {
            color: white;
            padding: 10px 20px;
        }

        .sidebar .nav-link:hover {
            background-color: rgba(255, 255, 255, 0.1);
        }

        .sidebar .nav-link.active-collapse {
            background-color: #ffc107;
            /* Yellow background for active item */
        }

        .sidebar .nav-link i {
            margin-right: 10px;
        }

        .main-content {
            padding: 20px;
        }

        .navbar {
            background-color: #f8f9fa;
            box-shadow: 0 2px 4px rgba(0, 0, 0, .1);
        }

        .card {
            margin-bottom: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .card-img-top {
            height: 150px;
            object-fit: cover;
        }

        .status-badge {
            position: absolute;
            top: 10px;
            left: 10px;
            padding: 5px 10px;
            border-radius: 5px;
            font-size: 12px;
            font-weight: bold;
        }

        .publish {
            background-color: #28a745;
            color: white;
        }

        .not-publish {
            background-color: #dc3545;
            color: white;
        }

        .btn-sm {
            font-size: 0.8rem;
            padding: 0.25rem 0.5rem;
        }

        .dropdown-toggle {
            background-color: #28a745;
            /* Match the sidebar color */
            color: white;
        }

        .dropdown-menu {
            background-color: white;
        }

        .dropdown-item:hover {
            background-color: #f8f9fa;
            /* Light hover effect */
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">

            <!-- Sidebar -->
            @include('components.sidebar')

            <!-- Main content -->
            <main class="col-md-10 ms-sm-auto px-md-4 main-content">
                <!-- header -->
                @section('page-title', 'CSR Article')
                @include('components.header')

                <div class="w-100 pb-4 " style="display: flex; justify-content: end;">
                    <button class="btn btn-outline-secondary dropdown-toggle me-2" type="button" id="statusDropdown"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Status
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="statusDropdown">
                        <li><a class="dropdown-item" href="#">All</a></li>
                        <li><a class="dropdown-item" href="#">Published</a></li>
                        <li><a class="dropdown-item" href="#">Not Published</a></li>
                    </ul>
                    <button class="btn btn-success">Add Data</button>
                </div>
                <div class="row">
                    @foreach($articles as $article)
                        <div class="col-md-4">
                            <div class="card">
                                <img src="{{ $article['image'] }}" class="card-img-top" alt="{{ $article['title'] }}">
                                <div class="status-badge {{ $article['status'] == 'Publish' ? 'publish' : 'not-publish' }}">
                                    {{ $article['status'] }}
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">{{ $article['title'] }}</h5>
                                    <p class="card-text">{{ $article['description'] }}</p>
                                    <p class="card-text"><small class="text-muted">{{ $article['date'] }}</small></p>
                                    <div class="d-flex justify-content-between">
                                        <button class="btn btn-warning btn-sm text-white">Update</button>
                                        <button class="btn btn-danger btn-sm">Delete</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Pagination -->
                <nav aria-label="Page navigation" class="mt-4">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item active" aria-current="page">
                            <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
            </main>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>