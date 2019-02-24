<nav class="navbar navbar-expand-lg navbar-dark fixed-top ">
    <div class="container-fluid" id="navDiv">
        <a class="navbar-brand" href="#" id="logo">
            {{ Html::image('img/logo.png', 'null', array('id' => 'logo')) }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Reservation</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Log in</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Backoffice</a>
                </li>
            </ul>
        </div>
    </div>
</nav>