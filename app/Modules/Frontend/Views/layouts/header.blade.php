<header class="bg-yellow">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-3">
                <div class="logo-box">
                    <a href="{!!route('home')!!}"><img class="img-responsive" src="{!!asset('public/assets/frontend')!!}/images/logo.png" alt="Ila Edu"></a>
                </div>
            </div>
            <div class="col-xs-9">
                <div class="topmenu">
                    <nav class="navbar navbar-default navbar-right" role="navigation">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button> 
                            </div>
                            <div id="navbar" class="navbar-collapse collapse" aria-expanded="false" style="height: 1px;">
                                <ul class="nav navbar-nav">
                                    <li class="active"><a href="{!!route('home')!!}">TRANG CHỦ</a></li>
                                    <li class="dropdown">
                                        <a href="destination.html" class="dropdown-toggle" data-toggle="dropdown">QUỐC GIA <span class="caret"></span></a>
                                        @if($country)
                                        <ul class="dropdown-menu">
                                            @foreach($country as $item_country)
                                             <li><a href="{!!route('quocgia',$item_country->slug)!!}">{!!$item_country->name!!}</a></li>
                                            @endforeach
                                        </ul>
                                        @endif
                                    </li>
                                    <li><a href="{!!route('khuyenmai')!!}">KHUYẾN MÃI</a></li>
                                    <li><a href="{!!route('trainghiem')!!}">TRẢI NGHIỆM DU HỌC</a></li>
                                    <li><a href="{!!route('contact')!!}"><b>ĐĂNG KÝ</b></a></li>
                                </ul>
                            </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>