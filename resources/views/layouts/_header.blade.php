<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{route('category.index')}}">浮生物语</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="">关于我们 <span class="sr-only">(current)</span></a></li>
                <li><a href="">帮助</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">人物 <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">裟椤</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">敖炽</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">九厥</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">甲乙</a></li>
                    </ul>
                </li>
            </ul>
            <form class="navbar-form navbar-left">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="搜索">
                </div>
                <button type="submit" class="btn btn-default">搜索</button>
            </form>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">信息</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">连载周边 <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">正文</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">前传</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">七夜</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">浮珑</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>