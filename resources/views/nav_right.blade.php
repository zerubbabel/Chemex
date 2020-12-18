<ul class="nav navbar-nav">
    <li class="dropdown dropdown-notification nav-item">
        <a class="nav-link nav-link-label" href="#" data-toggle="dropdown" aria-expanded="true">
            <i class="ficon feather icon-help-circle"></i>
        </a>
        <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right shadow-200">
            <li class="scrollable-container media-list ps ps--active-y">
                <a class="media d-flex justify-content-between" href="https://gitee.com/celaraze/Chemex/issues"
                   target="_blank">
                    <div class="d-flex align-items-start">
                        <div class="media-left">
                        </div>
                        <div class="media-body">
                            <h6 class="primary media-heading">上报错误</h6>
                            <small class="notification-text">
                                当在使用过程中遇到了一些BUG或是错误问题，请务必告诉我。
                            </small>
                        </div>
                    </div>
                </a>
            </li>
            <li class="scrollable-container media-list ps ps--active-y">
                <a class="media d-flex justify-content-between" href="https://gitee.com/celaraze/Chemex/wikis"
                   target="_blank">
                    <div class="d-flex align-items-start">
                        <div class="media-left">
                        </div>
                        <div class="media-body">
                            <h6 class="primary media-heading">官方文档</h6>
                            <small class="notification-text">
                                在这里你能够找到针对使用过程的一些说明文档。
                            </small>
                        </div>
                    </div>
                </a>
            </li>
            <li class="scrollable-container media-list ps ps--active-y" style="max-height: none;">
                <a class="media d-flex justify-content-between">
                    <div class="d-flex align-items-start">
                        <div class="media-left">
                        </div>
                        <div class="media-body">
                            <h6 class="primary media-heading">微信群</h6>
                            <small class="notification-text">
                                如果你想和其他咖啡壶用户交流，可以添加以下二维码，如果提示二维码过期，请更新咖啡壶至最新版本即可。
                            </small>
                            <div class="mt-1">
                                <img src="/static/images/qrcode.jpg" style="width: 100%;">
                            </div>
                        </div>
                    </div>
                </a>
            </li>
        </ul>
    </li>
    <li class="dropdown dropdown-notification nav-item">
        <a class="nav-link nav-link-label" href="#" data-toggle="dropdown" aria-expanded="true">
            <i class="ficon feather icon-bell"></i>
            @if(count($notifications)>0)
                <span class="badge badge-pill badge-primary badge-up">
                {{count($notifications)}}
                </span>
            @endif
        </a>
        <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right shadow-200">
            <li class="dropdown-menu-header">
                <div class="dropdown-header m-0 p-2">
                    <h3 class="white">{{count($notifications)}}</h3>
                    <span class="grey darken-2">全部通知数量</span>
                </div>
            </li>
            @if(count($notifications)>0)
                <li class="scrollable-container media-list ps ps--active-y">
                    @foreach($notifications as $notification)
                        <a class="media d-flex justify-content-between"
                           href="{{route('notification.read',$notification['id'])}}">
                            <div class="d-flex align-items-start">
                                <div class="media-left">
                                </div>
                                <div class="media-body">
                                    <h6 class="primary media-heading">{{$notification['data']['title']}}</h6>
                                    <small class="notification-text">
                                        {{$notification['data']['content']}}
                                    </small>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </li>
                <li class="dropdown-menu-footer">
                    <a class="dropdown-item p-1 text-center" href="{{route('notification.read.all')}}">全部已读</a>
                </li>
            @endif
        </ul>
    </li>
</ul>