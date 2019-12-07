<div  class="containerMenu">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

        <a  href="\">
          <img src="\img\logo.png" alt="" class="navbar-brand" style="width:50px; border-radius:15%; padding: 2%;"   >
        </a>
        <a  href="cart">
            <img src="/img\icons8-shopaholic-50.png" alt="" class="navbar-brand" style="width:50px; border-radius:15%"  >
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
             @include('/partials/categoriesMenu')


              <div class=""style="width: fit-content;  padding: 3px; border-radius: .25rem; border-width: thin; border-color: white;border-style: solid;
                    display: flex;overflow: hidden; ">

                    <a class="navbar-brand" style="width: 60px; text-align:center; "  target="_blank" href="{{$log}}">{{$logTitle}}</a>
                    <a href="miPerfil" id="containerLogo" style="width:auto;display: -webkit-flex;">
                    <img href="miPerfil"; class=""  style="width:50px;border-radius:15%;"src="{{$avatar}}" alt="Yo"style=" ">
                    </a>
              </div>
                    <form class="center  form-inline my-2 my-lg-0" style="width:auto;">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search">
                    <button class="  btn-primary btn" type="submit"style=" width:100px">Search</button>
                    <!-- <button class=" btn btn-outline-success my-2 my-sm-0" type="submit"style=" width:100px">Search</button> -->
                    </form>
            </div>
          </nav>
    </div>
