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
        <span class="text"> EVANTO</span>
    </a>
    <ul class="side-menu top">
        <li class="active">
            <a href="{{ route('dashboard.organisateur') }}">
                <i class='bx bxs-dashboard' ></i>
                <span class="text">Dashboard</span>
            </a>
        </li>
        <li>
            <a href="/MyReservation">
                <i class='bx bxs-shopping-bag-alt' ></i>
                <span class="text">My Reservation</span>
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
                <h1>Organisateur Dashboard</h1>
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
        <div class="table-data">
            <div class="todo">
                <div class="head">
                    <h3>Gestion Events</h3>
                    <a class="btn btn-warning btn-sm" data-toggle="modal" data-target="#addEventModal" id="openEventModalBtn">New Event</a>
                </div>
                <div class="order">
                    <section style="background-color: #eee;">
                        <div class="container py-5">
                          <div class="row justify-content-center">
                            <!-- Card1 -->
                            <div class="container py-5">

                                <div class="row justify-content-center">
                                    @foreach($events as $event)
                                    
                                    <div class="col-md-8 col-lg-6 col-xl-4 p-2">
                                        <div class="card" style="border-radius: 15px;">
                                            <div class="bg-image hover-overlay ripple ripple-surface ripple-surface-light" data-mdb-ripple-color="light">
                                                <img src="{{ asset($event->image) }}" alt="{{ $event->title }}" style="border-top-left-radius: 15px; border-top-right-radius: 15px;" class="img-fluid" alt="category" />
                                                <a href="#!">
                                                    <div class="mask"></div>
                                                </a>
                                            </div>
                                            <div class="card-body pb-0">
                                                <div class="d-flex justify-content-between">
                                                    <div>
                                                        <p><a class="text-dark">{{ $event->title }}</a></p>
                                                        <p class="small text-muted">{{ $event->address }}</p>
                                                    </div>
                                                    <div>
                                                        <p class="small text-muted">{{ $event->category->name }}</p>
                                                        <p class="small text-muted">{{ $event->date }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr class="my-0" />
                                            <div class="card-body pb-0 d-fex">
                                                <div class="d-flex justify-content-between">
                                                    <p><a style="color: red; font-size: 20px;">{{ $event->price }} €</a></p>
                                                    <p><a style="color: green; font-size: 15px;">{{ $event->placeNumber }}Place</a></p>
                                                </div>
                                                <div class="d-flex justify-content-between">
                                                    <p><a style="color: rgb(0, 0, 0); font-size: 12px;">{{ $event->description }}</a></p>
                                                </div>
                                            </div>
                                            <hr class="my-0" />
                                            <div class="card-body">
                                                <a class="btn btn-warning btn-sm">{{ $event->isPublish }}</a>
                                                <div class="d-flex justify-content-between align-items-center pb-2 mb-1">
                                                    <!-- Action buttons -->
                                                    <button type="button" class="btn btn-primary btn-sm mt-5 editEventBtn"  data-toggle="modal" data-target="#updateModal{{ $event->id }}">Update</button>
                                                    <a href="#" class="btn btn-danger btn-sm mt-5">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="modal fade" id="updateModal{{ $event->id }}" tabindex="-1" aria-labelledby="updateEventModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="updateEventModalLabel">Update Event</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form id="updateEventForm" action="{{ route('update.event') }}" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="modal-body">
                                                        <!-- Hidden Field for Event ID -->
                                                        <input type="hidden" value="{{ $event->id }}" id="update_event_id" name="event_id">
                                                        <!-- Title -->
                                                        <div class="form-group">
                                                            <label for="update_title">Title</label>
                                                            <input type="text" value="{{ $event->title }}" class="form-control" id="update_title" name="title" required>
                                                        </div>
                                                        <!-- Description -->
                                                        <div class="form-group">
                                                            <label for="update_description">Description</label>
                                                            <textarea class="form-control" id="update_description" name="description" required>{{$event->description}}</textarea>
                                                        </div>
                                                        <!-- Date -->
                                                        <div class="form-group">
                                                            <label for="update_date">Date</label>
                                                            <input type="datetime-local" value="{{$event->date}}" class="form-control" id="update_date" name="date" required>
                                                        </div>
                                                        <!-- Place -->
                                                        <div class="form-group">
                                                            <label for="update_place">Place</label>
                                                            <input type="text" value="{{$event->address}}" class="form-control" id="update_place" name="address" required>
                                                        </div>
                                                        <!-- Price -->
                                                        <div class="form-group">
                                                            <label for="update_price">Price</label>
                                                            <input type="number" value="{{$event->price}}" class="form-control" id="update_price" name="price" required>
                                                        </div>
                                                        <!-- Number of Places -->
                                                        <div class="form-group">
                                                            <label for="update_nbr_place">Number of Places</label>
                                                            <input type="number" value="{{$event->placeNumber}}" class="form-control" id="update_nbr_place" name="placeNumber" required>
                                                        </div>
                                                        <!-- Image -->
                                                        <div class="form-group">
                                                            <label for="update_image">Image</label>
                                                            <input type="file" class="form-control-file" id="update_image" name="image">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="update_category">Category</label>
                                                            <select class="form-control" id="update_category" name="category_id" required>
                                                                @foreach($categories as $category)
                                                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <!-- Status -->
                                                        <div class="form-group">
                                                            <label for="update_acceptType">Accept Type</label>
                                                            <select class="form-control" id="update_acceptType" name="acceptType" required>
                                                                <option value="auto" @if($event->acceptType=='auto') selected @endif  >Automatique</option>
                                                                <option value="man"  @if($event->acceptType=='man') selected @endif>Manuell</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Update Event</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                

                            </div>
                            <!-- Card1 end -->
                          </div>
                        </div>
                      </section>
                    </tbody>
                    </table>
                </div>
            </div>
        </div>     
</section>

<!-- CONTENT -->

<!-- Add Event Modal -->
<div class="modal fade" id="addEventModal" tabindex="-1" aria-labelledby="addEventModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addEventModalLabel">Add New Event</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('store.event') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <!-- Title -->
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" name="title" required>
                    </div>
                    <!-- Description -->
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" id="description" name="description" required></textarea>
                    </div>
                    <!-- Date -->
                    <div class="form-group">
                        <label for="date_event">Date</label>
                        <input type="datetime-local" class="form-control" id="date" name="date" required>
                    </div>
                    <!-- Place -->
                    <div class="form-group">
                        <label for="place">Place</label>
                        <input type="text" class="form-control" id="place" name="address" required>
                    </div>
                    <!-- Price -->
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="number" class="form-control" id="price" name="price" required>
                    </div>
                    <!-- Number of Places -->
                    <div class="form-group">
                        <label for="nbr_place">Number of Places</label>
                        <input type="number" class="form-control" id="nbr_place" name="placeNumber" required>
                    </div>
                    <!-- Image -->
                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" class="form-control-file" id="image" name="image" required>
                    </div>
                    <div class="form-group">
                        <label for="category">Category</label>
                        <select class="form-control" id="category" name="category_id" required>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <!-- Status -->
                    <div class="form-group">
                        <label for="acceptType">acceptType</label>
                        <select class="form-control" id="acceptType" name="acceptType" required>
                            <option value="auto">auto</option>
                            <option value="manual">manual</option>
                        </select>
                    </div>
                    <!-- User ID (Automatically Set) -->
                    <input type="hidden" name="user_id" value="{{ Auth::id() }}">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add Event</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Add Event Modal -->

<!-- Update Event Modal -->


<!-- update Event Modal -->


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="{{ asset('js/style1.js') }}"></script>
<script>
$(document).ready(function() {
        // Add an event listener to the "New Event" button
        $('#openEventModalBtn').click(function() {
            $('#addEventModal').modal('show');
        });
    }); 
</script>

<script>
    $('.editEventBtn').click(function() {
        var event_id = $(this).data('id');
        $.get('/dashboard/organisateur/' + event_id + '/edit', function(data) {
            $('#updateEventModal').modal('show');
            $('#update_event_id').val(data.id);
            $('#update_title').val(data.title);
            $('#update_description').val(data.description);
            $('#update_date').val(data.date);
            $('#update_place').val(data.address);
            $('#update_price').val(data.price);
            $('#update_nbr_place').val(data.place_number);
            $('#update_category').val(data.category_id);
            $('#update_acceptType').val(data.accept_type);
        });
    });
</script>



</body>
</html>
