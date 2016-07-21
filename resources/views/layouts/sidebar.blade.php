@if(Cookie::get('user'))

    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">

                <li> <a href="{{route('posts.index')}}">Posts</a></li>

                <li>
                    <a href="{{route('posts.create')}}"><i class="fa fa-wrench fa-fw"></i>Create post</a>
                    <ul class="nav nav-second-level">

                        <?php $categories = \App\Category::all(); ?>

                        @foreach($categories as $category)

                            <li>
                                <a href="{{route('posts.show', $category->id)}}">{{$category->name}}</a>
                            </li>

                        @endforeach

                    </ul>
                    <!-- /.nav-second-level -->
                </li>

            </ul>

        </div>
        <!-- /.sidebar-collapse -->
    </div>

@endif