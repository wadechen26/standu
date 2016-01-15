@extends('layouts.app');

@section('content')
    <div id="wrapper">
        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="/">

                    </a>
                </li>
                <li>
                    <a href="#">出租基本信息</a>
                </li>
                <li>
                    <a href="#">出租额外信息</a>
                </li>
                <li>
                    <a href="#">条款</a>
                </li>
                <li>
                    <a href="#">联系方式&看房安排</a>
                </li>
                <li>
                    <a href="#">发布分享</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->
        @yield('sidecontent')
    </div>
@endsection