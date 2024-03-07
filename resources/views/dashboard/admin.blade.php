<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <!-- My CSS -->
    <link rel="stylesheet" href="{{ asset('css/style1.css') }}">
    <title>dashboard</title>
</head>
<body>

<!-- SIDEBAR -->
<section id="sidebar">
    <a class="brand">
        <i class='bx bxs-smile'></i>
        <span class="text">Evento </span>
    </a>
    <ul class="side-menu top">
        <li class="active">
			<a href="{{ route('dashboard.admin') }}">
                <i class='bx bxs-dashboard' ></i>
                <span class="text"> Dashboard</span>
            </a>
        </li>
        <li>
            <a href="#">
                <i class='bx bxs-group' ></i>
                <span class="text">Users</span>
            </a>
        </li>
        <li>
            <a href="">
                <i class='bx bxs-shopping-bag-alt' ></i>
                <span class="text">My Events</span>
            </a>
        </li>
        
        
        
    </ul>
    <ul class="side-menu">
        <li>
            <a href="#">
                <i class='bx bxs-cog' ></i>
                <span class="text">Settings</span>
            </a>
        </li>
        <li>
            <a href="{{ route('logout') }}" class="logout">
                <i class='bx bxs-log-out-circle' ></i>
                <span class="text">Logout</span>
            </a>
        </li>
    </ul>
</section>
<!-- SIDEBAR -->

<!-- CONTENT -->
<section id="content">
    <!-- NAVBAR -->
    <nav>
        <i class='bx bx-menu' ></i>
        <a href="#" class="nav-link">Categories</a>
        <form action="#">
            <div class="form-input">
                <input type="search" placeholder="Search...">
                <button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
            </div>
        </form>
        <input type="checkbox" id="switch-mode" hidden>
        <label for="switch-mode" class="switch-mode"></label>
        <a href="#" class="notification">
            <i class='bx bxs-bell' ></i>
            <span class="num">8</span>
        </a>
        <a href="#" class="profile">
            <img src="{{ asset('images/cvhub.png') }}">
        </a>
    </nav>
    <!-- NAVBAR -->

    <!-- MAIN -->
    <main>
        <div class="head-title">
            <div class="left">
                <h1>Admin Dashboard</h1>
                <ul class="breadcrumb">
                    <li>
                        <a href="#">Dashboard</a>
                    </li>
                    <li><i class='bx bx-chevron-right' ></i></li>
                    <li>
                        <a class="active" href="#">Home</a>
                    </li>
                </ul>
            </div>
            <a href="#" class="btn-download">
                <i class='bx bxs-cloud-download' ></i>
                <span class="text">Download Ticket</span>
            </a>
        </div>

        <ul class="box-info">
            <li>
                <i class='bx bxs-calendar-check' ></i>
                <span class="text">
                    <h3>12</h3>
                    <p>CATEGORIES</p>
                </span>
            </li>
            <li>
                <i class='bx bxs-group' ></i>
                <span class="text">
                    <h3>10</h3>
                    <p>Users</p>
                </span>
            </li>
            <li>
                <i class='bx bxs-dollar-circle' ></i>
                <span class="text">
                    <h3>03</h3>
                    <p>Events</p>
                </span>
            </li>
            <li>
                <i class='bx bxs-dollar-circle' ></i>
                <span class="text">
                    <h3>$5000</h3>
                    <p>revenue</p>
                </span>
            </li>
        </ul>


        <div class="table-data">
            <div class="todo">
                <div class="head">
                    <h3>CATEGORIES</h3>
					<a href="#" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#addCategoryModal">New Category</a>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th style="padding-left: 130px">Name</th>
                            <th style="padding-left: 150px">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($categories as $category)
                        <tr>
                            <td>{{ $category->id }}</td>
                            <td style="padding-left: 130px">{{ $category->name }}</td>
                            <td style="padding-left: 130px">
                                <!-- Action buttons -->
                                <a href="#" class="btn btn-primary btn-sm edit-category" data-toggle="modal" data-target="#editCategoryModal" data-category-id="{{ $category->id }}" data-category-name="{{ $category->name }}">Edit</a>
                                <a href="#" class="btn btn-danger btn-sm delete-category" data-category-id="{{ $category->id }}">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </main>
    <!-- MAIN -->
</section>
<!-- CONTENT -->

<!-- Add Category Modal -->
<div class="modal fade" id="addCategoryModal" tabindex="-1" role="dialog" aria-labelledby="addCategoryModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addCategoryModalLabel">Add New Category</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="addCategoryForm" method="POST" action="{{ route('store.category') }}">
                    @csrf
                    <div class="form-group">
                        <label for="addCategoryName">Category Name</label>
                        <input type="text" class="form-control" id="addCategoryName" name="name">
                    </div>
                    <button type="submit" class="btn btn-primary">Add Category</button>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- Edit Category Modal -->
<div class="modal fade" id="editCategoryModal" tabindex="-1" role="dialog" aria-labelledby="editCategoryModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editCategoryModalLabel">Edit Category</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="editCategoryForm" method="POST" action="{{ route('update.category') }}">
                    @csrf
                    <div class="form-group">
                        <label for="editCategoryName">Category Name</label>
                        <input type="text" class="form-control" id="editCategoryName" name="name">
                        <input type="hidden" id="editCategoryId" name="id">
                    </div>
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Delete Category Modal -->
<div class="modal fade" id="deleteCategoryModal" tabindex="-1" role="dialog" aria-labelledby="deleteCategoryModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteCategoryModalLabel">Delete Category</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to delete this category?</p>
            </div>
            <div class="modal-footer">
                <form id="deleteCategoryForm" method="POST" action="{{ route('delete.category') }}">
                    @csrf
                    <input type="hidden" id="deleteCategoryId" name="id">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" id="confirmDeleteCategory" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="{{ asset('js/style1.js') }}"></script>
<script>
    $(document).ready(function() {
        $('.edit-category').click(function() {
            var categoryId = $(this).data('category-id');
            var categoryName = $(this).data('category-name');
            $('#editCategoryId').val(categoryId);
            $('#editCategoryName').val(categoryName);
        });
    });
</script>
<script>
    $(document).ready(function() {
        $('.add-category').click(function() {
            $('#addCategoryModal').modal('show');
        });
    });
</script>
<script>
    $(document).ready(function() {
        $('.delete-category').click(function() {
            var categoryId = $(this).data('category-id');
            $('#deleteCategoryId').val(categoryId); 
            $('#deleteCategoryModal').modal('show');
        });

        $('#confirmDeleteCategory').click(function() {
            $('#deleteCategoryForm').submit();
        });
    });
</script>
</body>
</html>
