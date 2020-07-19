<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <style>
        body{
            /* background-color: #FFC100; */
            min-height: 1000px;
        }
        .navbar{
            background-color: #FF8200;
        }
        .questbar{
            background-color: #FFEAAE;
        }

    </style>
    <title>View User Profile</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container py-1">
            <a class="navbar-brand" href="#"><strong>StayUnderFlow</strong></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Question</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Topics</a>
                </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Profile -->
    <div class="container mt-2 p-3">
        <div class="row">
            <div class="col-md-3 menu">
                <div class="sidemenu text-center pt-2">
                    <img src="{{asset('/dist/img/user.jpg')}}" alt="user" width="150px" class="img-fluid rounded-circle my-3 border border-warning shadow">
                    <ul class="list-group">
                        <li class="list-group-item btn-outline-primary">Question : <strong>12</strong></li>
                        <li class="list-group-item btn-outline-primary">Answer : <strong>9</strong></li>
                      </ul>
                </div>
            </div>
            <div class="col-md-7 content p-2">
                <h4 class="mt-5"><a href="" class="text-decoration-none"><strong>John Doe (@john_doe123)</strong></a></h4>
                <h5 class="my-3">Description :</h5>
                <p class="bg-warning p-3 rounded"><em>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad perspiciatis labore magni temporibus soluta. Atque itaque tempora repellendus rem quasi ipsam nesciunt perspiciatis. Velit dolores iusto magni voluptas repellat nulla. Nisi autem quos quis natus sed earum, consequuntur eos sit cupiditate saepe provident quibusdam facilis soluta iusto quasi optio commodi quaerat aperiam praesentium, unde dolorum? Et molestiae maxime quaerat consequuntur.</em></p>
            </div>
        </div>
    </div>
    <!-- endprofile -->

    <!-- Question -->
    <div class="question">
        <div class="questbar py-1 text-dark sticky-top rounded">
            <div class="container text-center">
                <h4>Question List</h4>
            </div>
        </div>
        <div class="container">
            <div class="quest-group px-2">
                <div class="quest-item bg-light my-5 p-4 shadow rounded">
                    <div class="quest-content">
                        <div class="row">
                            <div class="head-quest">
                                <img src="{{asset('/dist/img/user.jpg')}}" alt="user" class="rounded-circle mx-2 border border-warning" width="75px">
                            </div>
                            <div class="head-quest-content">
                                <h6 class="mt-3"><a href="" class="text-decoration-none"><strong>John Doe (@john_doe123)</strong></a></h6>
                                <small class="text-muted">Sunday, 19 July 2020</small>
                            </div>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem reprehenderit, cumque adipisci dolor ipsam, sint velit laboriosam officia neque blanditiis molestias. Harum, omnis. Dolores ad unde culpa harum tenetur?</p>
                    </div>
                    <div class="answer">
                        <h5>Answer :</h5>
                        <div class="answer-group pl-4">
                            <div class="answer-content p-3">
                                <div class="row">
                                    <div class="head-answer">
                                        <img src="{{asset('/dist/img/user.jpg')}}" alt="user" class="rounded-circle mx-2 border border-warning" width="65px">
                                    </div>
                                    <div class="head-answer-content">
                                        <h6 class="mt-3"><a href="" class="text-decoration-none"><strong>John Doe (@john_doe123)</strong></a></h6>
                                        <small class="text-muted">Sunday, 19 July 2020</small>
                                    </div>
                                </div>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem reprehenderit, cumque adipisci dolor ipsam, sint velit laboriosam officia neque blanditiis molestias.</p>
                            </div>
                            <hr>
                        </div>
                    </div>
                    <a href="" class="btn btn-warning">View More</a>
                </div>
                <div class="quest-item bg-light my-5 p-4 shadow rounded">
                    <div class="quest-content">
                        <div class="row">
                            <div class="head-quest">
                                <img src="{{asset('/dist/img/user.jpg')}}" alt="user" class="rounded-circle mx-2 border border-warning" width="75px">
                            </div>
                            <div class="head-quest-content">
                                <h6 class="mt-3"><a href="" class="text-decoration-none"><strong>John Doe (@john_doe123)</strong></a></h6>
                                <small class="text-muted">Sunday, 19 July 2020</small>
                            </div>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem reprehenderit, cumque adipisci dolor ipsam, sint velit laboriosam officia neque blanditiis molestias. Harum, omnis. Dolores ad unde culpa harum tenetur?</p>
                    </div>
                    <div class="answer">
                        <h5>Answer :</h5>
                        <div class="answer-group pl-4">
                            <div class="answer-content p-3">
                                <div class="row">
                                    <div class="head-answer">
                                        <img src="{{asset('/dist/img/user.jpg')}}" alt="user" class="rounded-circle mx-2 border border-warning" width="65px">
                                    </div>
                                    <div class="head-answer-content">
                                        <h6 class="mt-3"><a href="" class="text-decoration-none"><strong>John Doe (@john_doe123)</strong></a></h6>
                                        <small class="text-muted">Sunday, 19 July 2020</small>
                                    </div>
                                </div>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem reprehenderit, cumque adipisci dolor ipsam, sint velit laboriosam officia neque blanditiis molestias.</p>
                            </div>
                            <hr>
                        </div>
                    </div>
                    <a href="" class="btn btn-warning">View More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- endquestion -->
    
    <!-- footer -->
    <div class="footer bg-dark text-white">
        <div class="container text-center py-4">
            <span class="align-middle">Made with <i class="fas fa-heart text-danger"></i> by our team | Copyright &copy; 2020</span>
        </div>
    </div>
    <!-- endfooter -->
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.14.0/js/all.js" integrity="sha384-3Nqiqht3ZZEO8FKj7GR1upiI385J92VwWNLj+FqHxtLYxd9l+WYpeqSOrLh0T12c" crossorigin="anonymous"></script>
  </body>
</html>