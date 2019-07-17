<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 5/28/2019
 * Time: 5:00 PM
 */
?>
<div class="kt-detail-bottom-right">
    <div class="clearfix title">
        <h4 class="float-left">Dự án khác</h4>
        <button type="button" class="btn float-right">
            <span>Xem tất cả</span>
            <i class="kt-icon green bo-tron size-6x10">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 6 10">
                    <path d="M3.754 5.015L.234 1.263a.75.75 0 0 1 0-1.013c.263-.28.69-.28.952 0L5.15 4.472c.14.149.203.347.194.543a.739.739 0 0 1-.194.543L1.186 9.78a.645.645 0 0 1-.952 0 .75.75 0 0 1 0-1.014l3.52-3.751z"
                          fill-rule="evenodd"/>
                </svg>
            </i>
        </button>
    </div>
    <div class="clearfix"></div>

    <?php
    for ($i = 0; $i < 2; $i++) {
        ?>
        <div class="kt-project-item">
            <div class="kt-flex-container kt-share-box hover kt-transition">
                <button type="button" class="btn" data-toggle="tooltip" title=""
                        data-original-title="Lưu lại">
                    <i class="far fa-bookmark"></i>
                </button>
                <button type="button" class="btn" data-toggle="tooltip" title=""
                        data-original-title="Yêu thích">
                    <i class="fas fa-heart"></i>
                </button>
            </div>
            <div class="item-image">
                <a href="/site/detail-project" title=""
                   data-modalajaxproject="true">
                    <img src="/images/anh-3-4.jpg" alt="" class="img-fluid">
                </a>
            </div>
            <div class="item-info">
                <h2>
                    <a href="/site/detail-project" title=""
                       data-modalajaxproject="true">
                        Chung cư Thạch Bàn
                    </a>
                </h2>
                <div class="view">
                    <div class="float-left">
                        <ul class="list-unstyled">
                            <li>
                                <i class="kt-icon middle grey size-17x12">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 14">
                                        <path d="M9.797.033C6.053.033 2.658 2.374.153 6.176a.99.99 0 0 0 0 1.058c2.505 3.807 5.9 6.148 9.644 6.148 3.743 0 7.138-2.341 9.643-6.143a.99.99 0 0 0 0-1.058C16.935 2.374 13.54.033 9.797.033zm.306 11.374A4.713 4.713 0 0 1 5.097 6.4 4.72 4.72 0 0 1 9.49 2.008a4.713 4.713 0 0 1 5.006 5.006c-.15 2.341-2.052 4.242-4.393 4.393zm-.142-2.171a2.532 2.532 0 0 1-2.693-2.694 2.547 2.547 0 0 1 2.368-2.368 2.532 2.532 0 0 1 2.694 2.694A2.547 2.547 0 0 1 9.96 9.236z"
                                              fill-rule="nonzero"></path>
                                    </svg>
                                </i>
                                <span>1,266</span>
                            </li>
                            <li><i class="fas fa-camera"></i> <span>5</span></li>
                            <li><i class="fas fa-heart"></i> <span>89</span></li>
                        </ul>
                    </div>
                    <div class="float-right">
                        <p class="kt-text-right">
                            <a href="" title="">
                                Chung cư
                            </a>
                        </p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
            <div style="min-height: 15px"></div>
        </div>
        <?php
    }
    ?>
</div>
