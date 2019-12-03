<ul id="headerMenuLi" style="width:AUTO; border-radius:.25em;" class="navbar-nav mr-auto mt-2 mt-lg-0" style="">
  @foreach ($categories as $category )
    <li class="nav-item active">
    <a class="nav-link" href="/categoryList/{{$category->id}}"> {{$category->name}}</a>
    </li>
  @endforeach

</ul>
