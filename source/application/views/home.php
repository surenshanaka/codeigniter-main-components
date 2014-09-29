<style type="text/css" media="screen">
    a.nav-expander {
  background: none repeat scroll 0 0 #00ABF4;
  color: #FFFFFF;
  display: block;
  font-size: 15px;
  font-weight: 400;
  height: 50px;
  margin-left: 0;
  padding: 1em 1.6em 2em;
  position: absolute;
  left: 0;
  text-decoration: none;
  text-transform: uppercase;
  top: 0;
  transition: left 0.3s ease-in-out 0s;
  width: 130px;
  z-index: 12;

  transition: left 0.3s ease-in-out 0s;
  -webkit-transition: left 0.3s ease-in-out 0s;
  -moz-transition: left 0.3s ease-in-out 0s;
  -o-transition: left 0.3s ease-in-out 0s;

}

a.nav-expander:hover {
  cursor: pointer;
}

a.nav-expander.fixed {
  position: fixed;
}

.nav-expanded a.nav-expander.fixed {
    left: 20em;
}

nav {
  background: #2d2f33;
  display: block;
  height: 100%;
  overflow: auto;
  position: fixed;
  left: -20em;
  font-size: 15px;
  top: 0;
  width: 20em;
  z-index: 2000;

  transition: left 0.3s ease-in-out 0s;
  -webkit-transition: left 0.3s ease-in-out 0s;
  -moz-transition: left 0.3s ease-in-out 0s;
  -o-transition: left 0.3s ease-in-out 0s;

}
.nav-expanded nav {
  left: 0;
}

body.nav-expanded {
  margin-right: 0em;
  transition: right 0.4s ease-in-out 0s;
  -webkit-transition: right 0.4s ease-in-out 0s;
  -moz-transition: right 0.4s ease-in-out 0s;
  -o-transition: right 0.4s ease-in-out 0s;
}

#nav-close {
  font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
  font-weight: 300;
  font-size: 24px;
  padding-right: 10px;
}
.main-menu {
  padding-top: 12px;
}

.main-menu li {
  border-bottom: 1px solid #323949;
  margin-right: 20px;
  font-size: 18px;
  padding: 12px;
}

.main-menu li a {
  color: #6F7D8C;
  text-decoration: none;
}

.main-menu li a:hover {
  color: #FFFFFF;
  text-decoration: none;
}

.main-menu li .sub-nav {
  border-bottom: 0px;
  padding: 4px;
}

.main-menu a .caret {
    width: 0;
    height: 0;
    display: inline-block;
    vertical-align: top;
    border-top: 4px solid #4f5963;
    border-right: 4px solid transparent;
    border-right: 4px solid transparent;
    content: "";
    margin-top: 8px;
}

.main-menu a:hover .caret {
    border-top-color: #4f5963;
}

.main-menu li.open > a > .caret {
    border-top: none;
    border-bottom: 4px solid #4f5963;
    border-right: 4px solid transparent;
    border-right: 4px solid transparent;
}

.main-menu li.open > a:hover > .caret {
    border-bottom-color: #4f5963;
}

.icon:before {
  font-family: 'FontAwesome';
  font-style: normal;
  font-variant: normal;
  font-weight: normal;
  line-height: 1;
  text-transform: none;
  content: '\f105';
}

.main-menu li > a > span.icon {
  float: right;
  margin: 0.1em 1.7em -0.1em 0;
  opacity: 0;
  -webkit-transition: all 0.2s ease-in-out;
  -moz-transition: all 0.2s ease-in-out;
  -o-transition: all 0.2s ease-in-out;
  transition: all 0.2s ease-in-out;

}

.main-menu li > a:hover > span.icon {
  float: right;
  margin: 0.1em 0.8em -0.1em 0;
  opacity: 1;
}
.navbar-inverse{
    border-color: #00ABF4;
}

.navbar-inverse .navbar-nav > li > a{
    color: #fff;
}
</style>
   <!-- Navigation -->
    <!-- <div class="navbar navbar-custom navbar-fixed-top top-nav">
        <div class="navbar-header"><a class="navbar-brand" href="#">Brand</a>
          <a class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Link</a></li>
                <li><a href="#">Link</a></li>
                <li><a href="#">Link</a></li>
                <li>&nbsp;</li>
            </ul>
             <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Link</a></li>
            <li><a href="#">Link</a></li>
            <li><a href="#">Sign up</a></li>
            <li><a href="#">Login</a></li>
          </ul>
            <form class="navbar-form">
                <div class="form-group" style="display:inline;">
                    <div class="input-group">                       
                        <input type="text" class="form-control top-search" placeholder="What are searching for?">                        
                    </div>
                </div>
                <div class="form-group" style="display:inline;">
                  <div class="input-group">            
                    <input type="text" class="form-control top-search" placeholder="What are searching for?">                    
                  </div>
                </div>
            </form>
            <div>              
            </div>     
        </div>
    </div> -->
    <nav>
        <ul class="list-unstyled main-menu">
            <!--Include your navigation here-->
            <li class="text-left"><a href="#" id="nav-close">X</a></li>
            <li><a href="#">Menu One <span class="icon"></span></a></li>
            <li><a href="#">Menu Two <span class="icon"></span></a></li>
            <li><a href="#">Menu Three <span class="icon"></span></a></li>
            <li><a href="#">Dropdown</a>
              <ul class="list-unstyled">
                  <li class="sub-nav"><a href="#">Sub Menu One <span class="icon"></span></a></li>
                  <li class="sub-nav"><a href="#">Sub Menu Two <span class="icon"></span></a></li>
                  <li class="sub-nav"><a href="#">Sub Menu Three <span class="icon"></span></a></li>
                  <li class="sub-nav"><a href="#">Sub Menu Four <span class="icon"></span></a></li>
                  <li class="sub-nav"><a href="#">Sub Menu Five <span class="icon"></span></a></li>
              </ul>
            </li>
            <li><a href="#">Menu Four <span class="icon"></span></a></li>
            <li><a href="#">Menu Five <span class="icon"></span></a></li>
        </ul>
    </nav>

  <div class="navbar navbar-inverse navbar-fixed-top top-nav navbar-custom">      

    <!--Include your brand here-->
    <div class="navbar-header"><a class="navbar-brand" href="#">Brand</a>
          <a class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Link</a></li>
                <li><a href="#">Brand</a></li>
                <li><a href="#"></a></li>
                <li>&nbsp;</li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Link</a></li>
                <li><a href="#">Link</a></li>
                <li><a href="#">Sign up</a></li>
                <li><a href="#">Login</a></li>
            </ul>
            <form class="navbar-form">
                <div class="form-group" style="display:inline;">
                    <div class="input-group">                       
                        <input type="text" class="form-control top-search" placeholder="What are searching for?">                        
                    </div>
                </div>
                <div class="form-group" style="display:inline;">
                  <div class="input-group">            
                    <input type="text" class="form-control top-search" placeholder="What are searching for?">                    
                  </div>
                </div>
            </form>
            <div>              
            </div>     
        </div>
    <div class="navbar-header pull-left">
      <a id="nav-expander" class="nav-expander fixed">
        <i class="fa fa-bars fa-lg white"></i>
      </a>
    </div>
  </div>

    <!-- Image Background Page Header -->
    <!-- Note: The background image is set within the business-casual.css file. -->
         <!-- Responsive iFrame with map -->
    <section class="Flexible-container banner">
        <div class="view">
        <div contenteditable="true" class="jumbotron">
            <h1>Hello, world!</h1>
            <p>This is a template for a simple marketing or informational website. It includes a large callout called the hero unit and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
            <p><a href="#" class="btn btn-primary btn-large">Learn more</a></p>
        </div>
    </div>
        
    </section>

    <!-- Page Content -->
    <div class="container">

        <hr>

        <div class="row">
            <div class="col-sm-3 col-lg-3 col-md-3">
                <div class="thumbnail">
                    <img alt="" src="http://placehold.it/320x150">
                    <div class="caption">
                        <h4 class="pull-right">$24.99</h4>
                        <h4><a href="#">First Product</a>
                        </h4>
                        <p>See more snippets like this online store item at <a href="http://www.bootsnipp.com" target="_blank">Bootsnipp - http://bootsnipp.com</a>.</p>
                    </div>
                    <div class="ratings">
                        <p class="pull-right">15 reviews</p>
                        <p>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-sm-3 col-lg-3 col-md-3">
                <div class="thumbnail">
                    <img alt="" src="http://placehold.it/320x150">
                    <div class="caption">
                        <h4 class="pull-right">$64.99</h4>
                        <h4><a href="#">Second Product</a>
                        </h4>
                        <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                    <div class="ratings">
                        <p class="pull-right">12 reviews</p>
                        <p>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star-empty"></span>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-sm-3 col-lg-3 col-md-3">
                <div class="thumbnail">
                    <img alt="" src="http://placehold.it/320x150">
                    <div class="caption">
                        <h4 class="pull-right">$74.99</h4>
                        <h4><a href="#">Third Product</a>
                        </h4>
                        <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                    <div class="ratings">
                        <p class="pull-right">31 reviews</p>
                        <p>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star-empty"></span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 col-lg-3 col-md-3">
                <div class="thumbnail">
                    <img alt="" src="http://placehold.it/320x150">
                    <div class="caption">
                        <h4 class="pull-right">$74.99</h4>
                        <h4><a href="#">Third Product</a>
                        </h4>
                        <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                    <div class="ratings">
                        <p class="pull-right">31 reviews</p>
                        <p>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star-empty"></span>
                        </p>
                    </div>
                </div>
            </div>                      
        </div>
        <!-- /.row -->

        <hr>

        <div class="row">
            <div class="col-sm-4 col-lg-4 col-md-4">
                <div class="thumbnail">
                    <img alt="" src="http://placehold.it/320x150">
                    <div class="caption">
                        <h4 class="pull-right">$84.99</h4>
                        <h4><a href="#">Fourth Product</a>
                        </h4>
                        <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                    <div class="ratings">
                        <p class="pull-right">6 reviews</p>
                        <p>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star-empty"></span>
                            <span class="glyphicon glyphicon-star-empty"></span>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-sm-4 col-lg-4 col-md-4">
                <div class="thumbnail">
                    <img alt="" src="http://placehold.it/320x150">
                    <div class="caption">
                        <h4 class="pull-right">$94.99</h4>
                        <h4><a href="#">Fifth Product</a>
                        </h4>
                        <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                    <div class="ratings">
                        <p class="pull-right">18 reviews</p>
                        <p>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star-empty"></span>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-sm-4 col-lg-4 col-md-4">
                <div class="thumbnail">
                    <img alt="" src="http://placehold.it/320x150">
                    <div class="caption">
                        <h4 class="pull-right">$94.99</h4>
                        <h4><a href="#">Fifth Product</a>
                        </h4>
                        <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                    <div class="ratings">
                        <p class="pull-right">18 reviews</p>
                        <p>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star-empty"></span>
                        </p>
                    </div>
                </div>
            </div> 
        </div>
        <!-- /.row -->

        <hr>

         <div class="row">
            <div class="col-sm-3 col-lg-3 col-md-3">
                <div class="thumbnail">
                    <img alt="" src="http://placehold.it/320x150">
                    <div class="caption">
                        <h4 class="pull-right">$24.99</h4>
                        <h4><a href="#">First Product</a>
                        </h4>
                        <p>See more snippets like this online store item at <a href="http://www.bootsnipp.com" target="_blank">Bootsnipp - http://bootsnipp.com</a>.</p>
                    </div>
                    <div class="ratings">
                        <p class="pull-right">15 reviews</p>
                        <p>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-sm-3 col-lg-3 col-md-3">
                <div class="thumbnail">
                    <img alt="" src="http://placehold.it/320x150">
                    <div class="caption">
                        <h4 class="pull-right">$64.99</h4>
                        <h4><a href="#">Second Product</a>
                        </h4>
                        <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                    <div class="ratings">
                        <p class="pull-right">12 reviews</p>
                        <p>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star-empty"></span>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-sm-3 col-lg-3 col-md-3">
                <div class="thumbnail">
                    <img alt="" src="http://placehold.it/320x150">
                    <div class="caption">
                        <h4 class="pull-right">$74.99</h4>
                        <h4><a href="#">Third Product</a>
                        </h4>
                        <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                    <div class="ratings">
                        <p class="pull-right">31 reviews</p>
                        <p>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star-empty"></span>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-sm-3 col-lg-3 col-md-3">
                <div class="thumbnail">
                    <img alt="" src="http://placehold.it/320x150">
                    <div class="caption">
                        <h4 class="pull-right">$74.99</h4>
                        <h4><a href="#">Third Product</a>
                        </h4>
                        <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                    <div class="ratings">
                        <p class="pull-right">31 reviews</p>
                        <p>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star-empty"></span>
                        </p>
                    </div>
                </div>
            </div>                      
        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->
