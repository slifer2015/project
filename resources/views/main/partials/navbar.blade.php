<nav class="navbar navbar-default main-nav">
    <div class="container nav-container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">
                <img alt="Brand" src="images/logo.png">
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="{{route('home')}}">{{trans('main.menu.home')}}<span class="sr-only">(current)</span></a></li>
                <li><a href="{{route('about')}}">{{trans('main.menu.aboutUs')}}</a></li>
                <li><a href="{{route('link')}}">{{trans('main.menu.link')}}</a></li>
                <li><a href="">{{trans('main.menu.news')}}</a></li>

            </ul>
            <ul class="nav navbar-nav">
                <li><a href="{{route('contact')}}">{{trans('main.menu.contactUs')}}</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{trans('main.menu.service')}}<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">{{trans('main.menu.frit')}}</a></li>
                        <li><a href="#">{{trans('main.menu.requestQuota')}}</a></li>
                        <li><a href="#">{{trans('main.menu.transform')}}</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>