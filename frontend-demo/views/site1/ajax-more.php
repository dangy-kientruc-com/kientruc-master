<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 3/18/2019
 * Time: 9:14 AM
 */
?>
<div class="box-user-detail">
    <div class="td-01">
        <div class="pull-left">
            <h3>87 Dự án</h3>
        </div>
        <div class="pull-right">
            <button type="button" class="btn kt-icon black size-15x14">
                <svg xmlns="http://www.w3.org/2000/svg">
                    <path d="M14.552 11.067l-2.163-2.163c-.43-.43-1.144-.416-1.59.03L9.71 10.023l-.215-.12c-.688-.38-1.63-.903-2.62-1.895-.994-.994-1.517-1.937-1.9-2.625-.04-.073-.079-.144-.117-.21l.731-.73.36-.36c.446-.447.458-1.16.029-1.59L3.815.33c-.43-.43-1.143-.417-1.59.03l-.61.613.018.016c-.205.26-.376.562-.503.886-.117.309-.19.603-.223.898-.286 2.368.796 4.531 3.732 7.467 4.058 4.058 7.328 3.752 7.47 3.737.307-.037.601-.11.9-.227.322-.125.623-.296.883-.5l.014.012.617-.605c.446-.446.458-1.16.029-1.59z"
                          fill-rule="evenodd"></path>
                </svg>
            </button>
            <button type="button" class="btn">
                <i class="fas fa-envelope"></i>
            </button>
            <button type="button" class="btn kt-icon black size-15x13">
                <svg xmlns="http://www.w3.org/2000/svg">
                    <path d="M12.568 0H1.933C.933 0 0 .937 0 1.933v6.768c0 .996.932 1.933 1.933 1.933h.484v2.417l4.35-2.417h5.8c1.002 0 1.934-.937 1.934-1.933V1.933C14.501.937 13.569 0 12.568 0zM4 6.477a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"
                          fill-rule="evenodd"></path>
                </svg>
            </button>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="td-02">
        <div class="kt-flex-container flex-between">
            <div class="item">
                <a href="/site/detail-project" title="">
                    <img src="/images/anh-3-4.jpg" alt="" class="img-responsive">
                </a>
            </div>
            <div class="item">
                <a href="/site/detail-project" title="">
                    <img src="/images/anh-3-4.jpg" alt="" class="img-responsive">
                </a>
            </div>
            <div class="item">
                <a href="/site/detail-project" title="">
                    <img src="/images/anh-3-4.jpg" alt="" class="img-responsive">
                </a>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="td-03">
        <div class="pull-left">
            <div class="avatar">
                <img src="/images/avatar.png" alt="" class="img-responsive">
            </div>
            <div class="fullname">
                <b>Nguyễn Huy Hoàng</b>
                <span><i class="fas fa-map-marker-alt"></i> Hà nội</span>
            </div>
        </div>
        <div class="pull-right">
            <a href="" title="">
                <button type="button" class="btn">
                    <i class="far fa-bookmark"></i> Đang quan tâm
                </button>
            </a>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<style type="text/css">
    div.box-user-detail{
        padding: 5px 0;
    }
    div.box-user-detail div.td-01{}
    div.box-user-detail div.td-01 h3{
        color: #1B1B1B;
        font-size: 16px;
        font-weight: bold;
        line-height: 20px;
        margin: 7px 0;
    }
    div.box-user-detail div.td-01 button{
        height: 34px;
        width: 34px;
        padding: 0;
        display: inline-block;
        line-height: 38px;
        border-width: 0;
        border-radius: 20px;
        margin-right: 3px;
        background-color: #F3F3F3;
    }
    div.box-user-detail div.td-01 button i,
    div.box-user-detail div.td-01 button svg{
        opacity: 0.4;
    }
    div.box-user-detail div.td-02{
        margin: 0 -5px 10px -5px;
    }
    div.box-user-detail div.td-02 div.item{
        width: 130px;
        padding: 5px;
    }
    div.box-user-detail div.td-03{}
    div.box-user-detail div.td-03 div.avatar{
        height: 32px;
        width: 32px;
        opacity: 0.9;
        border-radius: 120px;
        float: left;
        overflow: hidden;
    }
    div.box-user-detail div.td-03 div.fullname{
        margin-left: 42px;
    }
    div.box-user-detail div.td-03 div.fullname b{
        display: block;
        height: 16px;
        color: #1B1B1B;
        font-size: 14px;
        font-weight: bold;
        line-height: 16px;
    }
    div.box-user-detail div.td-03 div.fullname span{
        display: block;
        opacity: 0.5;
        color: #1B1B1B;
        font-size: 12px;
        line-height: 22px;
    }
    div.box-user-detail div.td-03 button{
        border-radius: 17.5px;
        background-color: #F3F3F3;
        padding: 11px 15px;
        color: #248444;
        font-size: 12px;
        font-weight: 500;
        line-height: 14px;
    }
</style>
