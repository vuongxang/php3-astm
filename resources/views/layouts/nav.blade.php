<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top"
            ><img src="{{ asset('assets/img/navbar-logo.svg') }}" alt=""
        /></a>
        <button
            class="navbar-toggler navbar-toggler-right"
            type="button"
            data-toggle="collapse"
            data-target="#navbarResponsive"
            aria-controls="navbarResponsive"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
            Menu
            <i class="fas fa-bars ml-1"></i>
        </button>

        <form class="input-group mt-4" method="get" action="">
            @csrf
            <div class="form-outline">
                <input
                    id="search-input"
                    name="keyword"
                    type="search"
                    id="form1"
                    class="form-control"
                    value="@php
                        if(isset($keyword)) echo $keyword
                    @endphp"
                />
                <label class="form-label" for="form1">Search</label>
            </div>
            <button
                id="search-button"
                type="submit"
                class="btn btn-primary h-100"
            >
                <i class="fas fa-search"></i>
            </button>
        </form>

        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav text-uppercase ml-auto">
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="{{route('home')}}">Home</a
                    >
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="">News</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
