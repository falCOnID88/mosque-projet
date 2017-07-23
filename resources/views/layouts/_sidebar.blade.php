<header>
  <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-navbar-collapse-1">
                  <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
              </button>
              <a class="navbar-brand" href="{{ url('/') }}"><span class="brand slogan">Vamoussa Bamba</span></a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-navbar-collapse-1">

              <ul class="nav navbar-nav navbar-right">
                  <li>
                      <a href="{{ url('/help') }}">A propos</a>
                  </li>
                  <li>
                      <a href="{{ url('/flash') }}">Nouvelles</a>
                  </li>
                  <li>
                      <a href="{{ url('/flash') }}">Événenments</a>
                  </li>
                  <li>
                      <a href="{{ url('/flash') }}">Ressources</a>
                  </li>
                  <li>
                      <a href="{{ url('/flash') }}">Galeries</a>
                  </li>
                  <li class="active">
                    <a>Prière</a>
                  </li>
              </ul>
              <div class="collapse nav navbar-nav nav-collapse" id="search-bar">
                <form class="navbar-form navbar-right" role="search">
                    <div class="form-group">
                        <div class="input-group">
                            <input type="text" class="form-control input-lg" placeholder="Recherche">
                            <span class="input-group-btn">
                                <button type="submit" class="btn btn-primary btn-lg">
                                    <span class=" fa fa-search"></span>
                                </button>
                            </span>
                        </div>
                    </div>
                </form>
            </div>
          </div>
          <!-- /.navbar-collapse -->
      </div>
      <!-- /.container-fluid -->
  </nav>

</header>
