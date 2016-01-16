@extends('layouts.propertymaster')

@section('sidecontent')
        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <a href="#menu-toggle" class="btn btn-default visible-sm-inline visible-xs-inline" id="menu-toggle">
                        <span class="glyphicon glyphicon-list" aria-hidden="true"></span>
                    </a>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-lg-12">
                                <h2>基本信息</h2>
                                <p>我的</p>
                                <div class="property-owner btn-group btn-group-lg" role="group" aria-label="...">
                                    <div class="btn-group" role="group">
                                        <button type="button" class="btn btn-default">个人</button>
                                    </div>
                                    <div class="btn-group" role="group">
                                        <button type="button" class="btn btn-default">中介</button>
                                    </div>
                                    <div class="btn-group" role="group">
                                        <button type="button" class="btn btn-default">学生公寓</button>
                                    </div>
                                </div>
                                <div class="property-rent-type btn-group btn-group-justified" role="group" aria-label="...">
                                    <div class="btn-group" role="group">
                                        <button type="button" class="btn btn-default">整套出租</button>
                                    </div>
                                    <div class="btn-group" role="group">
                                        <button type="button" class="btn btn-default">找室友</button>
                                    </div>
                                    <div class="btn-group" role="group">
                                        <button type="button" class="btn btn-default">合租一室</button>
                                    </div>
                                </div>
                                <div class="property-type btn-group btn-group-justified" role="group" aria-label="...">
                                    <div class="btn-group" role="group">
                                        <button type="button" class="btn btn-default">公寓/楼房</button>
                                    </div>
                                    <div class="btn-group" role="group">
                                        <button type="button" class="btn btn-default">别墅/独立屋</button>
                                    </div>
                                </div>
                                <p>房屋标题</p>
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1">房屋标题</span>
                                    <input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1">
                                </div>
                                <p>户型结构</p>
                                <p>卧室数量</p>
                                <select>
                                    <option value="volvo">1</option>
                                    <option value="saab">2</option>
                                    <option value="opel">3</option>
                                    <option value="audi">4</option>
                                </select>
                                <p>卫生间数量</p>
                                <select>
                                    <option value="volvo">1</option>
                                    <option value="saab">2</option>
                                    <option value="opel">3</option>
                                    <option value="audi">4</option>
                                </select>
                                <div class="input-group">
                                    <div class="input-group-btn">
                                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">租金类型 <span class="caret"></span></button>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">周租金</a></li>
                                            <li><a href="#">月租金</a></li>
                                        </ul>
                                    </div><!-- /btn-group -->
                                    <input type="text" class="form-control" aria-label="...">
                                </div><!-- /input-group -->

                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1">定金</span>
                                    <input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <h2>入住</h2>
                                <p>可入住时间</p>
                                <p>最低入住期限</p>
                                <p>接受短租</p>
                            </div>
                            <div class="col-lg-12">
                                <h2>账单</h2>
                                <p>携带家具</p>
                                <p>网络</p>
                                <p>包餐</p>
                                <p>水电煤</p>
                            </div>
                            <div class="col-lg-12">
                                <h2>设施</h2>
                                <p>电视机</p>
                                <p>电视机</p>
                                <p>电视机</p>
                                <p>电视机</p>
                                <p>电视机</p>
                                <p>电视机</p>
                                <p>电视机</p>
                                <p>电视机</p>
                                <p>电视机</p>
                                <p>电视机</p>



                            </div>
                            <div class="col-lg-12">
                                <h2>周边</h2>
                                <p>近学校</p>
                                <p>火车</p>
                                <p>餐厅</p>
                                <p>巴士</p>
                                <p>电车</p>
                                <p>超市</p>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-4">
                        <div class="row">

                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->


@endsection
