@extends('layouts.master')

@section('content')
        <div class="container" style="margin-top: 70px">
            <div class="row">
                <div class="col-md-12">

                    <div class="card">
                        <div class="card-body">
                            <h3>How can we help you?</h3>
                            <p>See our most frequently asked questions below or choose a category to find the help you need.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>





    <div class="container" style="margin-top:70px">
        <h3 class="text-center">Top frequently asked questions</h3>
        <div class="card">
            <div class="card-body">
        <div class="panel-group" id="accordion">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h5 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" class="text-dark" href="#collapse1">1. How can i resgister ? <i class="fas fa-angle-down"></i></a>
                    </h5>
                </div>
                <div id="collapse1" class="panel-collapse collapse in">
                    <div class="panel-body">  You can signup by clicking on the register of the navbar. On the register form input valid data and you can register to the website.</div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h5 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion"  class="text-dark"  href="#collapse2">2. How can i sing in ? <i class="fas fa-angle-down"></i></a>
                    </h5>
                </div>
                <div id="collapse2" class="panel-collapse collapse">
                    <div class="panel-body"></div>
                    You can sign in to the website by providing your email and password.
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h5 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion"  class="text-dark"  href="#collapse3">3. How can i order the games ? <i class="fas fa-angle-down"></i></a>
                    </h5>
                </div>
                <div id="collapse3" class="panel-collapse collapse">
                    <div class="panel-body"></div>
                    You can order the games by clicking on the view details on the game and you can also view reviews and add games to wishlist.</div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h5 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion"  class="text-dark"  href="#collapse4">4. How can i see posts ? <i class="fas fa-angle-down"></i></a>
                    </h5>
                </div>
                <div id="collapse4" class="panel-collapse collapse">
                    <div class="panel-body">
                        The posts can be viewed by clicking on the posts in the navigation bar and you can comment on the posts by clicking on the view posts button and also reply on the comment.
                    </div>
                  </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h5 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion"  class="text-dark"  href="#collapse5">5. How can i see my wishlists ? <i class="fas fa-angle-down"></i></a>
                    </h5>
                </div>
                <div id="collapse5" class="panel-collapse collapse">
                    <div class="panel-body">
                    You can check your accessories' and games' wishlist on your user account.
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h5 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion"  class="text-dark"  href="#collapse6">6. How can i see my ordered items ? <i class="fas fa-angle-down"></i></a>
                    </h5>
                </div>
                <div id="collapse6" class="panel-collapse collapse">
                    <div class="panel-body">
                        You can check your ordered items from the user account.
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h5 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion"  class="text-dark"  href="#collapse7">7. How can i edit my profile? <i class="fas fa-angle-down"></i></a>
                    </h5>
                </div>
                <div id="collapse7" class="panel-collapse collapse">
                    <div class="panel-body">
                       Profile can be edited by going to your user account and viewing your profile.
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h5 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion"  class="text-dark"  href="#collapse8">8. How can i review the game ? <i class="fas fa-angle-down"></i></a>
                    </h5>
                </div>
                <div id="collapse8" class="panel-collapse collapse">
                    <div class="panel-body">
                     You can review the game by clicking on the view details of the game. Write the review and rating of the game.
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h5 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion"  class="text-dark"  href="#collapse9">9. How can i comment the posts? <i class="fas fa-angle-down"></i></a>
                    </h5>
                </div>
                <div id="collapse9" class="panel-collapse collapse">
                    <div class="panel-body">
                    You can comment on the posts by viewing the posts and filling the comment box. And replies can be viewed by clicking on the view replies button.
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h5 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion"  class="text-dark"  href="#collapse10"> 10. How can i see the news? <i class="fas fa-angle-down"></i></a>
                    </h5>
                </div>
                <div id="collapse10" class="panel-collapse collapse">
                    <div class="panel-body">
                     You can go to the navigation bar, click on the news and check out the latest news about the games and accessories.
                    </div>
                </div>
            </div>
        </div>
    </div>
        </div>
    </div>

@endsection