<?php

use kv4nt\owlcarousel\OwlCarouselWidget;

?>
<div class="kt-user-left">
    <div class="kt-user-box-left">

        <span class="kt-icon-level">
            <i class="">i</i>
        </span>

        <div class="kt-user-info">
            <div class="avatar">
                <a href="" title="">
                    <img src="/images/avatar.png" alt="" class="img-responsive">
                </a>
            </div>
            <div class="fullname">
                <span>Kiến trúc sư</span>
                <b>Phạm ngọc dũng</b>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <p>
                    <i class="fas fa-map-marker-alt"></i> Thanh xuân, Hà nội
                </p>
            </div>
            <div class="clearfix"></div>
        </div>

        <div class="kt-user-follow">
            <div class="pull-left">
                <a href="" title="">
                    <button type="button" class="btn">
                        <i class="kt-icon white size-17x16">
                            <svg xmlns="http://www.w3.org/2000/svg">
                                <g fill-rule="nonzero">
                                    <path d="M.736 14.025H6.9a5.147 5.147 0 0 0 4.045 1.963 5.16 5.16 0 0 0 5.153-5.154 5.16 5.16 0 0 0-5.153-5.153 5.15 5.15 0 0 0-4.138 2.084A5.65 5.65 0 0 0 0 13.288c0 .407.33.737.736.737zm10.209-6.872a3.685 3.685 0 0 1 3.68 3.681 3.685 3.685 0 0 1-3.68 3.681 3.685 3.685 0 0 1-3.681-3.68 3.685 3.685 0 0 1 3.68-3.682zM5.644.012a3.083 3.083 0 0 0-3.08 3.08 3.083 3.083 0 0 0 3.08 3.08 3.083 3.083 0 0 0 3.08-3.08 3.083 3.083 0 0 0-3.08-3.08z"/>
                                    <path d="M9.472 11.57h.737v.737a.736.736 0 0 0 1.472 0v-.736h.736a.736.736 0 0 0 0-1.473h-.736v-.736a.736.736 0 0 0-1.472 0v.736h-.737a.736.736 0 0 0 0 1.473z"/>
                                </g>
                            </svg>
                        </i>
                        <span>Quan tâm</span>
                    </button>
                </a>
            </div>
            <div class="pull-right">
                <button type="button" class="btn kt-icon black size-15x14">
                    <svg xmlns="http://www.w3.org/2000/svg">
                        <path d="M14.552 11.067l-2.163-2.163c-.43-.43-1.144-.416-1.59.03L9.71 10.023l-.215-.12c-.688-.38-1.63-.903-2.62-1.895-.994-.994-1.517-1.937-1.9-2.625-.04-.073-.079-.144-.117-.21l.731-.73.36-.36c.446-.447.458-1.16.029-1.59L3.815.33c-.43-.43-1.143-.417-1.59.03l-.61.613.018.016c-.205.26-.376.562-.503.886-.117.309-.19.603-.223.898-.286 2.368.796 4.531 3.732 7.467 4.058 4.058 7.328 3.752 7.47 3.737.307-.037.601-.11.9-.227.322-.125.623-.296.883-.5l.014.012.617-.605c.446-.446.458-1.16.029-1.59z"
                              fill-rule="evenodd"/>
                    </svg>
                </button>
                <button type="button" class="btn">
                    <i class="fas fa-envelope"></i>
                </button>
                <button type="button" class="btn kt-icon black size-15x13">
                    <svg xmlns="http://www.w3.org/2000/svg">
                        <path d="M12.568 0H1.933C.933 0 0 .937 0 1.933v6.768c0 .996.932 1.933 1.933 1.933h.484v2.417l4.35-2.417h5.8c1.002 0 1.934-.937 1.934-1.933V1.933C14.501.937 13.569 0 12.568 0zM4 6.477a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"
                              fill-rule="evenodd"/>
                    </svg>
                </button>
            </div>
            <div class="clearfix"></div>
        </div>

        <div class="kt-user-view">
            <ul class="list-unstyled kt-flex-container flex-between">
                <li>
                    <b>2465</b>
                    <span>Dự án</span>
                </li>
                <li>
                    <b>2465</b>
                    <span>Tu van</span>
                </li>
                <li>
                    <b>2465</b>
                    <span>Nguoi quan tam</span>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>

        <div class="kt-line grey"></div>

        <div class="kt-user-thong-ke">
            <h3 class="kt-title-h3">Thống kê dữ liệu</h3>
            <div class="kt-user-slide">
                <?php
                OwlCarouselWidget::begin([
                    'container' => 'div',
                    'containerOptions' => [
                        'id' => 'container-id',
                        'class' => 'nonloop owl-carousel owl-theme'
                    ],
                    'pluginOptions' => [
                        'items' => 2,
                        'margin' => -40,
                        'dot' => true,
                        'nav' => false,
                        'responsive' => [
                            0 => [
                                'items' => 1,
                            ],
                            600 => [
                                'items' => 2,
                            ],
                            1000 => [
                                'items' => 2,
                            ],
                        ],
                    ]
                ]);
                ?>
                <div class="item-padding">
                    <div class="progress-pie-chart" data-percent="75">
                        <div class="ppc-progress">
                            <div class="ppc-progress-fill"></div>
                        </div>
                        <div class="ppc-percents">
                            <div class="pcc-percents-wrapper">
                                <span>%</span>
                            </div>
                        </div>
                    </div>
                    <h4>Loại công trình là Biệt Thự</h4>
                </div>
                <div class="item-padding">
                    <div class="progress-pie-chart" data-percent="63">
                        <div class="ppc-progress">
                            <div class="ppc-progress-fill"></div>
                        </div>
                        <div class="ppc-percents">
                            <div class="pcc-percents-wrapper">
                                <span>%</span>
                            </div>
                        </div>
                    </div>
                    <h4>Công trình tại Tp Hồ Chí Minh</h4>
                </div>
                <div class="item-padding">
                    <div class="progress-pie-chart" data-percent="58">
                        <div class="ppc-progress">
                            <div class="ppc-progress-fill"></div>
                        </div>
                        <div class="ppc-percents">
                            <div class="pcc-percents-wrapper">
                                <span>%</span>
                            </div>
                        </div>
                    </div>
                    <h4>Theo phong cách Hiện Đại</h4>
                </div>
                <div class="item-padding">
                    <div class="progress-pie-chart" data-percent="45">
                        <div class="ppc-progress">
                            <div class="ppc-progress-fill"></div>
                        </div>
                        <div class="ppc-percents">
                            <div class="pcc-percents-wrapper">
                                <span>%</span>
                            </div>
                        </div>
                    </div>
                    <h4>Theo tỉ lệ</h4>
                </div>
                <div class="item-padding">
                    <div class="progress-pie-chart" data-percent="82">
                        <div class="ppc-progress">
                            <div class="ppc-progress-fill"></div>
                        </div>
                        <div class="ppc-percents">
                            <div class="pcc-percents-wrapper">
                                <span>%</span>
                            </div>
                        </div>
                    </div>
                    <h4>Theo phần trăm</h4>
                </div>
                <?php
                OwlCarouselWidget::end();
                ?>
            </div>
        </div>

        <div class="kt-line grey"></div>

        <div class="kt-user-tags">
            <h3 class="kt-title-h3">Kỹ năng</h3>

            <a href="" title="">
                <button type="button" class="btn">
                    <span>Diễn họa 3D</span>
                </button>
            </a>
            <a href="" title="">
                <button type="button" class="btn">
                    <span>Diễn họa 3D</span>
                </button>
            </a>
            <a href="" title="">
                <button type="button" class="btn">
                    <span>Diễn họa 3D</span>
                </button>
            </a>
            <a href="" title="">
                <button type="button" class="btn">
                    <span>...</span>
                </button>
            </a>
        </div>

        <div class="kt-line grey"></div>

        <div class="kt-user-prize">
            <h3 class="kt-title-h3">Thành tích</h3>

            <!-- Nav tabs -->
            <ul class="nav navbar-nav navbar-right" role="tablist">
                <li role="presentation" class="active">
                    <a href="#home" aria-controls="home" role="tab" data-toggle="tab">Kinh
                        nghiệm</a>
                </li>
                <li role="presentation">
                    <a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Giải
                        thưởng</a>
                </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="home">
                    <div class="scroll-giai-thuong">
                        <ul class="list-unstyled">
                            <li>
                                <i class="kt-icon green size-16x16">
                                    <svg xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1.075 10.11c.255.213.464.478.444.66a2.985 2.985 0 0 0-.019.329c0 1.643 1.296 2.976 2.894 2.976.197 0 .39-.02.576-.06.314-.065.684.061.906.308.528.585 1.28.952 2.118.952.884 0 1.676-.409 2.207-1.052a.846.846 0 0 1 .885-.267c.256.077.527.119.808.119 1.598 0 2.894-1.333 2.894-2.976 0-.184-.017-.364-.049-.538-.054-.294.09-.66.329-.89a3 3 0 0 0 .92-2.172c0-.935-.42-1.767-1.075-2.312-.255-.212-.464-.478-.444-.659.012-.108.019-.218.019-.33 0-1.643-1.296-2.975-2.894-2.975-.198 0-.39.02-.576.059a1.002 1.002 0 0 1-.907-.307A2.843 2.843 0 0 0 7.994.023c-.837 0-1.59.367-2.118.952a1.003 1.003 0 0 1-.906.307 2.83 2.83 0 0 0-.576-.06C2.796 1.223 1.5 2.556 1.5 4.2c0 .158.012.313.036.465.04.255-.14.57-.4.774A2.995 2.995 0 0 0 0 7.798c0 .935.42 1.768 1.075 2.313zm6.505-.008a.871.871 0 0 1-1.299 0L4.27 7.928a1.05 1.05 0 0 1 0-1.403.871.871 0 0 1 1.299 0L6.767 7.82a.22.22 0 0 0 .328 0l3.246-3.507a.871.871 0 0 1 1.3 0c.171.186.268.439.268.702 0 .263-.097.515-.269.701l-4.06 4.386z"
                                              fill-rule="nonzero"/>
                                    </svg>
                                </i>
                                <div class="item-text">
                                    <span>2016 đến nay</span>
                                    <b>Kiến trúc sư tự do</b>
                                </div>
                            </li>
                            <li>
                                <i class="kt-icon green size-16x16">
                                    <svg xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1.075 10.11c.255.213.464.478.444.66a2.985 2.985 0 0 0-.019.329c0 1.643 1.296 2.976 2.894 2.976.197 0 .39-.02.576-.06.314-.065.684.061.906.308.528.585 1.28.952 2.118.952.884 0 1.676-.409 2.207-1.052a.846.846 0 0 1 .885-.267c.256.077.527.119.808.119 1.598 0 2.894-1.333 2.894-2.976 0-.184-.017-.364-.049-.538-.054-.294.09-.66.329-.89a3 3 0 0 0 .92-2.172c0-.935-.42-1.767-1.075-2.312-.255-.212-.464-.478-.444-.659.012-.108.019-.218.019-.33 0-1.643-1.296-2.975-2.894-2.975-.198 0-.39.02-.576.059a1.002 1.002 0 0 1-.907-.307A2.843 2.843 0 0 0 7.994.023c-.837 0-1.59.367-2.118.952a1.003 1.003 0 0 1-.906.307 2.83 2.83 0 0 0-.576-.06C2.796 1.223 1.5 2.556 1.5 4.2c0 .158.012.313.036.465.04.255-.14.57-.4.774A2.995 2.995 0 0 0 0 7.798c0 .935.42 1.768 1.075 2.313zm6.505-.008a.871.871 0 0 1-1.299 0L4.27 7.928a1.05 1.05 0 0 1 0-1.403.871.871 0 0 1 1.299 0L6.767 7.82a.22.22 0 0 0 .328 0l3.246-3.507a.871.871 0 0 1 1.3 0c.171.186.268.439.268.702 0 .263-.097.515-.269.701l-4.06 4.386z"
                                              fill-rule="nonzero"/>
                                    </svg>
                                </i>
                                <div class="item-text">
                                    <span>2016 đến nay</span>
                                    <b>Kiến trúc sư tự do</b>
                                </div>
                            </li>
                            <li>
                                <i class="kt-icon green size-16x16">
                                    <svg xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1.075 10.11c.255.213.464.478.444.66a2.985 2.985 0 0 0-.019.329c0 1.643 1.296 2.976 2.894 2.976.197 0 .39-.02.576-.06.314-.065.684.061.906.308.528.585 1.28.952 2.118.952.884 0 1.676-.409 2.207-1.052a.846.846 0 0 1 .885-.267c.256.077.527.119.808.119 1.598 0 2.894-1.333 2.894-2.976 0-.184-.017-.364-.049-.538-.054-.294.09-.66.329-.89a3 3 0 0 0 .92-2.172c0-.935-.42-1.767-1.075-2.312-.255-.212-.464-.478-.444-.659.012-.108.019-.218.019-.33 0-1.643-1.296-2.975-2.894-2.975-.198 0-.39.02-.576.059a1.002 1.002 0 0 1-.907-.307A2.843 2.843 0 0 0 7.994.023c-.837 0-1.59.367-2.118.952a1.003 1.003 0 0 1-.906.307 2.83 2.83 0 0 0-.576-.06C2.796 1.223 1.5 2.556 1.5 4.2c0 .158.012.313.036.465.04.255-.14.57-.4.774A2.995 2.995 0 0 0 0 7.798c0 .935.42 1.768 1.075 2.313zm6.505-.008a.871.871 0 0 1-1.299 0L4.27 7.928a1.05 1.05 0 0 1 0-1.403.871.871 0 0 1 1.299 0L6.767 7.82a.22.22 0 0 0 .328 0l3.246-3.507a.871.871 0 0 1 1.3 0c.171.186.268.439.268.702 0 .263-.097.515-.269.701l-4.06 4.386z"
                                              fill-rule="nonzero"/>
                                    </svg>
                                </i>
                                <div class="item-text">
                                    <span>2016 đến nay</span>
                                    <b>Kiến trúc sư tự do</b>
                                </div>
                            </li>
                            <li>
                                <i class="kt-icon green size-16x16">
                                    <svg xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1.075 10.11c.255.213.464.478.444.66a2.985 2.985 0 0 0-.019.329c0 1.643 1.296 2.976 2.894 2.976.197 0 .39-.02.576-.06.314-.065.684.061.906.308.528.585 1.28.952 2.118.952.884 0 1.676-.409 2.207-1.052a.846.846 0 0 1 .885-.267c.256.077.527.119.808.119 1.598 0 2.894-1.333 2.894-2.976 0-.184-.017-.364-.049-.538-.054-.294.09-.66.329-.89a3 3 0 0 0 .92-2.172c0-.935-.42-1.767-1.075-2.312-.255-.212-.464-.478-.444-.659.012-.108.019-.218.019-.33 0-1.643-1.296-2.975-2.894-2.975-.198 0-.39.02-.576.059a1.002 1.002 0 0 1-.907-.307A2.843 2.843 0 0 0 7.994.023c-.837 0-1.59.367-2.118.952a1.003 1.003 0 0 1-.906.307 2.83 2.83 0 0 0-.576-.06C2.796 1.223 1.5 2.556 1.5 4.2c0 .158.012.313.036.465.04.255-.14.57-.4.774A2.995 2.995 0 0 0 0 7.798c0 .935.42 1.768 1.075 2.313zm6.505-.008a.871.871 0 0 1-1.299 0L4.27 7.928a1.05 1.05 0 0 1 0-1.403.871.871 0 0 1 1.299 0L6.767 7.82a.22.22 0 0 0 .328 0l3.246-3.507a.871.871 0 0 1 1.3 0c.171.186.268.439.268.702 0 .263-.097.515-.269.701l-4.06 4.386z"
                                              fill-rule="nonzero"/>
                                    </svg>
                                </i>
                                <div class="item-text">
                                    <span>2016 đến nay</span>
                                    <b>Kiến trúc sư tự do</b>
                                </div>
                            </li>
                            <li>
                                <i class="kt-icon green size-16x16">
                                    <svg xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1.075 10.11c.255.213.464.478.444.66a2.985 2.985 0 0 0-.019.329c0 1.643 1.296 2.976 2.894 2.976.197 0 .39-.02.576-.06.314-.065.684.061.906.308.528.585 1.28.952 2.118.952.884 0 1.676-.409 2.207-1.052a.846.846 0 0 1 .885-.267c.256.077.527.119.808.119 1.598 0 2.894-1.333 2.894-2.976 0-.184-.017-.364-.049-.538-.054-.294.09-.66.329-.89a3 3 0 0 0 .92-2.172c0-.935-.42-1.767-1.075-2.312-.255-.212-.464-.478-.444-.659.012-.108.019-.218.019-.33 0-1.643-1.296-2.975-2.894-2.975-.198 0-.39.02-.576.059a1.002 1.002 0 0 1-.907-.307A2.843 2.843 0 0 0 7.994.023c-.837 0-1.59.367-2.118.952a1.003 1.003 0 0 1-.906.307 2.83 2.83 0 0 0-.576-.06C2.796 1.223 1.5 2.556 1.5 4.2c0 .158.012.313.036.465.04.255-.14.57-.4.774A2.995 2.995 0 0 0 0 7.798c0 .935.42 1.768 1.075 2.313zm6.505-.008a.871.871 0 0 1-1.299 0L4.27 7.928a1.05 1.05 0 0 1 0-1.403.871.871 0 0 1 1.299 0L6.767 7.82a.22.22 0 0 0 .328 0l3.246-3.507a.871.871 0 0 1 1.3 0c.171.186.268.439.268.702 0 .263-.097.515-.269.701l-4.06 4.386z"
                                              fill-rule="nonzero"/>
                                    </svg>
                                </i>
                                <div class="item-text">
                                    <span>2016 đến nay</span>
                                    <b>Kiến trúc sư tự do</b>
                                </div>
                            </li>
                            <li>
                                <i class="kt-icon green size-16x16">
                                    <svg xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1.075 10.11c.255.213.464.478.444.66a2.985 2.985 0 0 0-.019.329c0 1.643 1.296 2.976 2.894 2.976.197 0 .39-.02.576-.06.314-.065.684.061.906.308.528.585 1.28.952 2.118.952.884 0 1.676-.409 2.207-1.052a.846.846 0 0 1 .885-.267c.256.077.527.119.808.119 1.598 0 2.894-1.333 2.894-2.976 0-.184-.017-.364-.049-.538-.054-.294.09-.66.329-.89a3 3 0 0 0 .92-2.172c0-.935-.42-1.767-1.075-2.312-.255-.212-.464-.478-.444-.659.012-.108.019-.218.019-.33 0-1.643-1.296-2.975-2.894-2.975-.198 0-.39.02-.576.059a1.002 1.002 0 0 1-.907-.307A2.843 2.843 0 0 0 7.994.023c-.837 0-1.59.367-2.118.952a1.003 1.003 0 0 1-.906.307 2.83 2.83 0 0 0-.576-.06C2.796 1.223 1.5 2.556 1.5 4.2c0 .158.012.313.036.465.04.255-.14.57-.4.774A2.995 2.995 0 0 0 0 7.798c0 .935.42 1.768 1.075 2.313zm6.505-.008a.871.871 0 0 1-1.299 0L4.27 7.928a1.05 1.05 0 0 1 0-1.403.871.871 0 0 1 1.299 0L6.767 7.82a.22.22 0 0 0 .328 0l3.246-3.507a.871.871 0 0 1 1.3 0c.171.186.268.439.268.702 0 .263-.097.515-.269.701l-4.06 4.386z"
                                              fill-rule="nonzero"/>
                                    </svg>
                                </i>
                                <div class="item-text">
                                    <span>2016 đến nay</span>
                                    <b>Kiến trúc sư tự do</b>
                                </div>
                            </li>
                            <li>
                                <i class="kt-icon green size-16x16">
                                    <svg xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1.075 10.11c.255.213.464.478.444.66a2.985 2.985 0 0 0-.019.329c0 1.643 1.296 2.976 2.894 2.976.197 0 .39-.02.576-.06.314-.065.684.061.906.308.528.585 1.28.952 2.118.952.884 0 1.676-.409 2.207-1.052a.846.846 0 0 1 .885-.267c.256.077.527.119.808.119 1.598 0 2.894-1.333 2.894-2.976 0-.184-.017-.364-.049-.538-.054-.294.09-.66.329-.89a3 3 0 0 0 .92-2.172c0-.935-.42-1.767-1.075-2.312-.255-.212-.464-.478-.444-.659.012-.108.019-.218.019-.33 0-1.643-1.296-2.975-2.894-2.975-.198 0-.39.02-.576.059a1.002 1.002 0 0 1-.907-.307A2.843 2.843 0 0 0 7.994.023c-.837 0-1.59.367-2.118.952a1.003 1.003 0 0 1-.906.307 2.83 2.83 0 0 0-.576-.06C2.796 1.223 1.5 2.556 1.5 4.2c0 .158.012.313.036.465.04.255-.14.57-.4.774A2.995 2.995 0 0 0 0 7.798c0 .935.42 1.768 1.075 2.313zm6.505-.008a.871.871 0 0 1-1.299 0L4.27 7.928a1.05 1.05 0 0 1 0-1.403.871.871 0 0 1 1.299 0L6.767 7.82a.22.22 0 0 0 .328 0l3.246-3.507a.871.871 0 0 1 1.3 0c.171.186.268.439.268.702 0 .263-.097.515-.269.701l-4.06 4.386z"
                                              fill-rule="nonzero"/>
                                    </svg>
                                </i>
                                <div class="item-text">
                                    <span>2016 đến nay</span>
                                    <b>Kiến trúc sư tự do</b>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="profile">

                </div>
            </div>

        </div>

        <div class="kt-line grey"></div>

        <div class="kt-user-group">
            <h3 class="kt-title-h3">Nhóm thiết kế</h3>
            <ul class="list-unstyled">
                <li>
                    <a href="" title="">
                        <div class="icon-avatar">
                            <img src="/images/avatar.png" alt="" class="img-responsive">
                            <i class="fas fa-circle"></i>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="" title="">
                        <div class="icon-avatar">
                            <img src="/images/avatar.png" alt="" class="img-responsive">
                            <i class="fas fa-circle"></i>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="" title="">
                        <div class="icon-avatar">
                            <img src="/images/avatar.png" alt="" class="img-responsive">
                            <i class="fas fa-circle"></i>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="" title="">
                        <div class="icon-avatar">
                            <img src="/images/avatar.png" alt="" class="img-responsive">
                            <i class="fas fa-circle"></i>
                        </div>
                    </a>
                </li>
            </ul>
        </div>

        <div class="kt-line grey"></div>

        <div class="kt-user-price">
            <h3 class="kt-title-h3">Báo giá</h3>

            <!-- Nav tabs -->
            <ul class="nav navbar-nav navbar-right" role="tablist">
                <li role="presentation" class="active">
                    <a href="#home2" aria-controls="home2" role="tab" data-toggle="tab">Nội thất</a>
                </li>
                <li role="presentation">
                    <a href="#profile2" aria-controls="profile2" role="tab" data-toggle="tab">Ngoại
                        thất</a>
                </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="home2">
                    <ul class="list-unstyled">
                        <li>
                            <div class="pull-left">
                                Giá trị công trình
                            </div>
                            <div class="pull-right">
                                500tr - 1t
                            </div>
                            <div class="clearfix"></div>
                        </li>
                        <li>
                            <div class="pull-left">
                                Phí thiết kế tối thiểu
                            </div>
                            <div class="pull-right">
                                40tr
                            </div>
                            <div class="clearfix"></div>
                        </li>
                        <li>
                            <div class="pull-left">
                                Báo giá theo m2
                            </div>
                            <div class="pull-right">
                                500k/m2
                            </div>
                            <div class="clearfix"></div>
                        </li>
                    </ul>
                </div>
                <div role="tabpanel" class="tab-pane" id="profile2">

                </div>
            </div>

        </div>

    </div>
    <div class="clearfix"></div>

    <div class="kt-user-report">
        <div class="pull-left">
            <span>
                <i class="kt-icon black size-13x14">
                    <svg xmlns="http://www.w3.org/2000/svg"><path
                                d="M11.93 1.76a.433.433 0 0 0-.315-.133c-.06 0-.188.05-.382.148-.194.098-.4.207-.617.33a4.47 4.47 0 0 1-.772.329 2.641 2.641 0 0 1-.824.148 1.36 1.36 0 0 1-.617-.134 12.535 12.535 0 0 0-1.536-.617 4.69 4.69 0 0 0-1.403-.204c-.864 0-1.848.281-2.952.842a7.17 7.17 0 0 0-.497.266l-.104-.769c.236-.205.39-.505.39-.844a1.122 1.122 0 1 0-2.246 0c0 .405.216.756.537.954l1.516 11.118a.66.66 0 0 0 1.309-.178l-.61-4.468c1.106-.549 2.063-.826 2.867-.826.342 0 .675.05 1 .154.325.104.595.215.81.336.214.122.468.235.76.337.293.103.582.155.867.155.72 0 1.582-.272 2.587-.814.127-.066.219-.13.277-.193.06-.063.088-.153.088-.27v-5.35a.433.433 0 0 0-.132-.316z"
                                fill-rule="evenodd"/></svg>
                </i> Báo cáo tài khoản
            </span>
        </div>
        <div class="pull-right">
            <a href="" title="">
                <button type="button" class="btn"><i class="fas fa-globe"></i></button>
            </a>
            <a href="" title="">
                <button type="button" class="btn"><i class="fab fa-twitter"></i></button>
            </a>
            <a href="" title="">
                <button type="button" class="btn"><i class="fab fa-facebook-f"></i></button>
            </a>
            <a href="" title="">
                <button type="button" class="btn"><i class="fab fa-linkedin-in"></i></button>
            </a>
        </div>
    </div>
</div>