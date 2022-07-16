
<nav id="sidebar">
    <div class="sidebar-header">
        <h3 class="d-flex justify-content-center ">STICKER.pk</h3>
    </div>

    <ul class="list-unstyled components">
        <h4 class="d-flex justify-content-center" > Hello, {{ Auth::user()->name }}</h4>
        <br><br>

        <li>
            <a class="{{Request::is('categories') ? 'active_button':''}}" href="{{ url('categories')}}">Update/Delete Category</a>
            <a class="{{Request::is('add-categories') ? 'active_button':''}}" href="{{ url('add-categories')}}">Add Category</a>

            <a class="{{Request::is('products') ? 'active_button':''}}" href="{{ url('products')}}">Update/Delete Products</a>
            <a class="{{Request::is('add-products') ? 'active_button':''}}" href="{{ url('add-products')}}">Add Products</a>

        </li>
            </ul>

    <ul class="list-unstyled CTAs">
        <li>
           
            <a class="dropdown-item logout" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
        </li>
        {{-- <li>
            <a href="https://bootstrapious.com/p/bootstrap-sidebar" class="article">Back to article</a>
        </li> --}}
    </ul>
</nav>
