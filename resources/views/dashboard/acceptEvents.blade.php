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
            <a href="{{ route('dashboard.users') }}">
                <i class='bx bxs-group' ></i>
                <span class="text">Users</span>
            </a>
        </li>
        <li>
            <a href="/acceptEvents">
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

        <div class="table-data">
            <div class="todo">
                <div class="head">
                    <h3>Accept Event</h3>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th style="padding-left: 130px">Event Name</th>
                            <th style="padding-left: 130px">User Name</th>
                            <th style="padding-left: 150px">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($events as $event)
                        <tr>
                            <td>{{ $event->id }}</td>
                            <td style="padding-left: 130px">{{ $event->title }}</td>
                            <td style="padding-left: 130px">{{ $event->user->name }}</td>
                            <td style="padding-left: 130px">
                                <!-- Action buttons -->
                                @if($event->isPublish == 'nonpublish')
                                <a href="/acceptOragnEvent/success/{{ $event->id }}" class="btn btn-primary btn-sm ">Accept</a>
                                <a href="/acceptOragnEvent/error/{{ $event->id }}" class="btn btn-danger btn-sm ">Delete</a>
                                @else
                                <span class="text-success">Event Already Accepted</span>
                                @endif
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
