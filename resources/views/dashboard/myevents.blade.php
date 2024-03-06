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
        <span class="text">Evento Dashboard</span>
    </a>
    <ul class="side-menu top">
        <li class="active">
            <a href="{{ route('dashboard.admin') }}">
                <i class='bx bxs-dashboard' ></i>
                <span class="text">Dashboard</span>
            </a>
        </li>
        <li>
            <a href="{{ route('myevents') }}">
                <i class='bx bxs-shopping-bag-alt' ></i>
                <span class="text">My Events</span>
            </a>
        </li>
        <li>
            <a href="#">
                <i class='bx bxs-doughnut-chart' ></i>
                <span class="text">Analytics</span>
            </a>
        </li>
        <li>
            <a href="#">
                <i class='bx bxs-message-dots' ></i>
                <span class="text">Message</span>
            </a>
        </li>
        <li>
            <a href="#">
                <i class='bx bxs-group' ></i>
                <span class="text">Team</span>
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
                <h1>Dashboard</h1>
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
                    <h3>Gestion Events</h3>
					<a href="#" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#addCategoryModal">New Event</a>
                </div>
                <div class="order">
                    <section style="background-color: #eee;">
                        <div class="container py-5">
                          <div class="row justify-content-center">

                            <!-- Card1 -->
                            <div class="col-md-8 col-lg-6 col-xl-4 p-2">
                              <div class="card" style="border-radius: 15px;">
                                <div class="bg-image hover-overlay ripple ripple-surface ripple-surface-light"
                                  data-mdb-ripple-color="light">
                                  <img src="{{ asset('images/myimages/news-image-1.jpg') }}" alt="fesival+celebration"
                                    style="border-top-left-radius: 15px; border-top-right-radius: 15px;" class="img-fluid"
                                    alt="category" />
                                  <a href="#!">
                                    <div class="mask"></div>
                                  </a>
                                </div>
                                <div class="card-body pb-0">
                                  <div class="d-flex justify-content-between">
                                    <div>
                                      <p><a href="#!" class="text-dark">Harmony Fest Melodia Harmony Festival</a></p>
                                      <p class="small text-muted">PARIS</p>
                                    </div>
                                    <div>
                                        <p class="small text-muted">Music Festival</p>
                                      <p class="small text-muted">20-22, 2024</p>
                                    </div>
                                  </div>
                                </div>
                                <hr class="my-0" />
                                <div class="card-body pb-0 d-fex">
                                    <div class="d-flex justify-content-between">
                                        <p><a style="color: red; font-size: 20px;">$75.00</a></p>
                                        <p><a style="color: green; font-size: 15px;">10,000</a></p>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <p><a style="color: rgb(0, 0, 0); font-size: 12px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fermentum justo sit amet tellus malesuada, at suscipit arcu placerat. Proin aliquam velit et augue convallis eleifend. Nulla facilisi. </a></p>
                                    </div>
                                </div>
                                <hr class="my-0" />
                                <div class="card-body">
                                  <div class="d-flex justify-content-between align-items-center pb-2 mb-1">
                                        <!-- Action buttons -->
                                        <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                        <a href="#" class="btn btn-danger btn-sm">Delete</a>
                                  </div>
                                </div>
                              </div>
                            </div> 
                            <!-- Card1 -->
                            <!-- Card1 -->
                            <div class="col-md-8 col-lg-6 col-xl-4 p-2">
                                <div class="card" style="border-radius: 15px;">
                                  <div class="bg-image hover-overlay ripple ripple-surface ripple-surface-light"
                                    data-mdb-ripple-color="light">
                                    <img src="{{ asset('images/myimages/news-image-1.jpg') }}" alt="fesival+celebration"
                                      style="border-top-left-radius: 15px; border-top-right-radius: 15px;" class="img-fluid"
                                      alt="category" />
                                    <a href="#!">
                                      <div class="mask"></div>
                                    </a>
                                  </div>
                                  <div class="card-body pb-0">
                                    <div class="d-flex justify-content-between">
                                      <div>
                                        <p><a href="#!" class="text-dark">Harmony Fest Melodia Harmony Festival</a></p>
                                        <p class="small text-muted">PARIS</p>
                                      </div>
                                      <div>
                                          <p class="small text-muted">Music Festival</p>
                                        <p class="small text-muted">20-22, 2024</p>
                                      </div>
                                    </div>
                                  </div>
                                  <hr class="my-0" />
                                  <div class="card-body pb-0 d-fex">
                                      <div class="d-flex justify-content-between">
                                          <p><a style="color: red; font-size: 20px;">$75.00</a></p>
                                          <p><a style="color: green; font-size: 15px;">10,000</a></p>
                                      </div>
                                      <div class="d-flex justify-content-between">
                                          <p><a style="color: rgb(0, 0, 0); font-size: 12px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fermentum justo sit amet tellus malesuada, at suscipit arcu placerat. Proin aliquam velit et augue convallis eleifend. Nulla facilisi. </a></p>
                                      </div>
                                  </div>
                                  <hr class="my-0" />
                                  <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center pb-2 mb-1">
                                          <!-- Action buttons -->
                                          <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                          <a href="#" class="btn btn-danger btn-sm">Delete</a>
                                    </div>
                                  </div>
                                </div>
                              </div> 
                              <!-- Card1 -->
                              <!-- Card1 -->
                            <div class="col-md-8 col-lg-6 col-xl-4 p-2">
                                <div class="card" style="border-radius: 15px;">
                                  <div class="bg-image hover-overlay ripple ripple-surface ripple-surface-light"
                                    data-mdb-ripple-color="light">
                                    <img src="{{ asset('images/myimages/news-image-1.jpg') }}" alt="fesival+celebration"
                                      style="border-top-left-radius: 15px; border-top-right-radius: 15px;" class="img-fluid"
                                      alt="category" />
                                    <a href="#!">
                                      <div class="mask"></div>
                                    </a>
                                  </div>
                                  <div class="card-body pb-0">
                                    <div class="d-flex justify-content-between">
                                      <div>
                                        <p><a href="#!" class="text-dark">Harmony Fest Melodia Harmony Festival</a></p>
                                        <p class="small text-muted">PARIS</p>
                                      </div>
                                      <div>
                                          <p class="small text-muted">Music Festival</p>
                                        <p class="small text-muted">20-22, 2024</p>
                                      </div>
                                    </div>
                                  </div>
                                  <hr class="my-0" />
                                  <div class="card-body pb-0 d-fex">
                                      <div class="d-flex justify-content-between">
                                          <p><a style="color: red; font-size: 20px;">$75.00</a></p>
                                          <p><a style="color: green; font-size: 15px;">10,000</a></p>
                                      </div>
                                      <div class="d-flex justify-content-between">
                                          <p><a style="color: rgb(0, 0, 0); font-size: 12px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fermentum justo sit amet tellus malesuada, at suscipit arcu placerat. Proin aliquam velit et augue convallis eleifend. Nulla facilisi. </a></p>
                                      </div>
                                  </div>
                                  <hr class="my-0" />
                                  <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center pb-2 mb-1">
                                          <!-- Action buttons -->
                                          <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                          <a href="#" class="btn btn-danger btn-sm">Delete</a>
                                    </div>
                                  </div>
                                </div>
                              </div> 
                              <!-- Card1 -->
                              <!-- Card1 -->
                            <div class="col-md-8 col-lg-6 col-xl-4 p-2">
                                <div class="card" style="border-radius: 15px;">
                                  <div class="bg-image hover-overlay ripple ripple-surface ripple-surface-light"
                                    data-mdb-ripple-color="light">
                                    <img src="{{ asset('images/myimages/news-image-1.jpg') }}" alt="fesival+celebration"
                                      style="border-top-left-radius: 15px; border-top-right-radius: 15px;" class="img-fluid"
                                      alt="category" />
                                    <a href="#!">
                                      <div class="mask"></div>
                                    </a>
                                  </div>
                                  <div class="card-body pb-0">
                                    <div class="d-flex justify-content-between">
                                      <div>
                                        <p><a href="#!" class="text-dark">Harmony Fest Melodia Harmony Festival</a></p>
                                        <p class="small text-muted">PARIS</p>
                                      </div>
                                      <div>
                                          <p class="small text-muted">Music Festival</p>
                                        <p class="small text-muted">20-22, 2024</p>
                                      </div>
                                    </div>
                                  </div>
                                  <hr class="my-0" />
                                  <div class="card-body pb-0 d-fex">
                                      <div class="d-flex justify-content-between">
                                          <p><a style="color: red; font-size: 20px;">$75.00</a></p>
                                          <p><a style="color: green; font-size: 15px;">10,000</a></p>
                                      </div>
                                      <div class="d-flex justify-content-between">
                                          <p><a style="color: rgb(0, 0, 0); font-size: 12px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fermentum justo sit amet tellus malesuada, at suscipit arcu placerat. Proin aliquam velit et augue convallis eleifend. Nulla facilisi. </a></p>
                                      </div>
                                  </div>
                                  <hr class="my-0" />
                                  <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center pb-2 mb-1">
                                          <!-- Action buttons -->
                                          <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                          <a href="#" class="btn btn-danger btn-sm">Delete</a>
                                    </div>
                                  </div>
                                </div>
                              </div> 
                              <!-- Card1 -->
                              <!-- Card1 -->
                            <div class="col-md-8 col-lg-6 col-xl-4 p-2">
                                <div class="card" style="border-radius: 15px;">
                                  <div class="bg-image hover-overlay ripple ripple-surface ripple-surface-light"
                                    data-mdb-ripple-color="light">
                                    <img src="{{ asset('images/myimages/news-image-1.jpg') }}" alt="fesival+celebration"
                                      style="border-top-left-radius: 15px; border-top-right-radius: 15px;" class="img-fluid"
                                      alt="category" />
                                    <a href="#!">
                                      <div class="mask"></div>
                                    </a>
                                  </div>
                                  <div class="card-body pb-0">
                                    <div class="d-flex justify-content-between">
                                      <div>
                                        <p><a href="#!" class="text-dark">Harmony Fest Melodia Harmony Festival</a></p>
                                        <p class="small text-muted">PARIS</p>
                                      </div>
                                      <div>
                                          <p class="small text-muted">Music Festival</p>
                                        <p class="small text-muted">20-22, 2024</p>
                                      </div>
                                    </div>
                                  </div>
                                  <hr class="my-0" />
                                  <div class="card-body pb-0 d-fex">
                                      <div class="d-flex justify-content-between">
                                          <p><a style="color: red; font-size: 20px;">$75.00</a></p>
                                          <p><a style="color: green; font-size: 15px;">10,000</a></p>
                                      </div>
                                      <div class="d-flex justify-content-between">
                                          <p><a style="color: rgb(0, 0, 0); font-size: 12px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fermentum justo sit amet tellus malesuada, at suscipit arcu placerat. Proin aliquam velit et augue convallis eleifend. Nulla facilisi. </a></p>
                                      </div>
                                  </div>
                                  <hr class="my-0" />
                                  <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center pb-2 mb-1">
                                          <!-- Action buttons -->
                                          <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                          <a href="#" class="btn btn-danger btn-sm">Delete</a>
                                    </div>
                                  </div>
                                </div>
                              </div> 
                              <!-- Card1 -->
                          </div>
                        </div>
                      </section>
                    </tbody>
                    </table>
                </div>
            </div>
        </div>     /// here
</section>
<!-- CONTENT -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="{{ asset('js/style1.js') }}"></script>
</body>
</html>
