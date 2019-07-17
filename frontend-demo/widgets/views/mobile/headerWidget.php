<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 5/15/2019
 * Time: 4:20 PM
 */
?>
    <div class="kt-head kt-transition kt-fixed">
        <div class="clearfix mb-box-head">
            <div class="float-left logo">
                <a href="/site/index" title="KIENTRUC.com" class="a-white">
                    <img alt="KIENTRUC.com" title="KIENTRUC.com" src="/images/logo icon.jpg"
                         class="img-fluid">
                </a>
            </div>
            <div class="float-right fr-search">
                <button type="button" class="btn"
                        onclick="javascript:modalMenu({close:'true',classAttr:'#js-menu-search'})"><i
                            class="fas fa-search"></i></button>
                <?php
                if ($id == 1) {
                    //chua dang nhap
                    ?>
                    <button type="button" class="btn"
                            onclick="javascript:modalMenu({close:'false',classAttr:'#js-menu-signup'})"><i
                                class="fas fa-search"></i></button>
                    <?php
                } else {
                    //da dang nhap
                    ?>
                    <button type="button" class="btn"
                            onclick="javascript:modalMenu({close:'false',classAttr:'#js-menu-login-kts'})"><i
                                class="fas fa-search"></i></button>
                    <button type="button" class="btn"
                            onclick="javascript:modalMenu({close:'false',classAttr:'#js-menu-login-user'})"><i
                                class="fas fa-search"></i></button>
                    <?php
                }
                ?>

            </div>
        </div>
        <div class="kt-line grey"></div>
    </div>

    <div style="min-height: 40px"></div>

    <div id="truotMenu"></div>

    <!-- MODAL MENU MAIN -->
    <div class="box-fixed js-box-fixed" data-close="true" onclick="javascript:modalCloseAll(this)"></div>

    <div data-js-check id="js-menu-search" class="head-fixed-search kt-transition">
        <div class="kt-search">
            <form action="/site/search" method="">
                <input type="text" class="kt-search_input" placeholder="Tìm kiếm"/>
                <button type="button" class="btn kt-search_button"><i class="fas fa-search"></i></button>
            </form>
        </div>
    </div>

    <div data-js-check id="js-menu-signup" class="head-fixed-menu kt-transition">
        <div class="fixed-menu-main">
            <button type="button" class="btn btn-close"
                    onclick="javascript:modalCloseMenu({classAttr:'#js-menu-signup'})">
                <i class="kt-icon grey size-16x16">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                         viewBox="0 0 12 12">
                        <defs>
                            <path d="M4.6 4.4V.8A.7.7 0 0 1 6 .8v3.6h3.6a.7.7 0 0 1 0 1.4H6v3.6a.7.7 0 1 1-1.4 0V5.8H1a.7.7 0 0 1 0-1.4h3.6z"
                                  id="b"/>
                            <filter x="-30%" y="-30%" width="160%" height="160%" filterUnits="objectBoundingBox" id="a">
                                <feOffset in="SourceAlpha" result="shadowOffsetOuter1"/>
                                <feGaussianBlur stdDeviation="1" in="shadowOffsetOuter1" result="shadowBlurOuter1"/>
                                <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.5 0"
                                               in="shadowBlurOuter1"/>
                            </filter>
                        </defs>
                        <g transform="rotate(45 4.5 6.5)" fill="none" fill-rule="evenodd">
                            <use fill="none" filter="url(#a)" xlink:href="#b"/>
                            <use fill="#000" xlink:href="#b"/>
                        </g>
                    </svg>
                </i>
            </button>
            <!-- PHAN CSS RIENG -->
            <div class="head-menu-main">
                <ul class="list-unstyled">
                    <li>
                        <a href="" title="">
                            <i class="kt-icon grey size-15x14">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15 14">
                                    <g fill-rule="evenodd">
                                        <path d="M14.4 6.2L8 .2a.7.7 0 0 0-1 0l-6.7 6c-.2.2-.3.6-.1.9 0 .2.3.4.7.4h1v6c0 .3.2.5.4.5H6c.2 0 .4-.2.4-.5V10h2.1v3.6c0 .3.2.5.4.5h3.6c.3 0 .5-.2.5-.5v-6h1c.3 0 .6-.2.7-.4.2-.3 0-.7-.2-.9zM12.8.9h-3l3.4 3V1.3c0-.2-.2-.4-.4-.4z"/>
                                    </g>
                                </svg>
                            </i>
                            <span>Trang chủ</span>
                        </a>
                    </li>
                    <li>
                        <a href="" title="">
                            <i class="kt-icon grey size-14x14">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14">
                                    <path d="M13.7 12l-3-3h-.1c.6-1 1-2 1-3.2a5.8 5.8 0 1 0-2.7 4.8l3.1 3a1.2 1.2 0 0 0 1.7-1.6zm-8-2.5a3.8 3.8 0 1 1 0-7.5 3.8 3.8 0 0 1 0 7.5z"
                                          fill="#474747" fill-rule="nonzero"/>
                                </svg>
                            </i>
                            <span>Tìm kiến trúc sư</span>
                        </a>
                    </li>
                    <li>
                        <a href="" title="">
                            <i class="kt-icon grey size-16x15">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 15">
                                    <path d="M12.9 3.8h2c.5 0 .9.4.9 1v6.9c0 1.6-1.3 2.9-2.9 2.9h-10A2.9 2.9 0 0 1 0 11.7V1.9C0 .9.9 0 1.9 0h9c1 0 1.9.9 1.9 1.9v2h.1zm-.1 7.1a.9.9 0 1 1-1.8 0v-9l-.1-.1h-9l-.1.1v9.8c0 .6.5 1.1 1.1 1.1h10c.6 0 1.1-.5 1.1-1.1v-6h-1.1-.1v5.2zM3.9 4.8a.9.9 0 1 1 0-1.8h5a.9.9 0 1 1 0 1.8h-5zm0 3a.9.9 0 1 1 0-1.8h5a.9.9 0 1 1 0 1.8h-5zm0 3a.9.9 0 1 1 0-1.8h5a.9.9 0 1 1 0 1.8h-5z"
                                          fill-rule="nonzero"/>
                                </svg>
                            </i>
                            <span>Hỏi chuyên gia</span>
                        </a>
                    </li>
                    <li>
                        <a href="" title="">
                            <i class="kt-icon grey size-16x15">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 15">
                                    <path d="M12.9 3.8h2c.5 0 .9.4.9 1v6.9c0 1.6-1.3 2.9-2.9 2.9h-10A2.9 2.9 0 0 1 0 11.7V1.9C0 .9.9 0 1.9 0h9c1 0 1.9.9 1.9 1.9v2h.1zm-.1 7.1a.9.9 0 1 1-1.8 0v-9l-.1-.1h-9l-.1.1v9.8c0 .6.5 1.1 1.1 1.1h10c.6 0 1.1-.5 1.1-1.1v-6h-1.1-.1v5.2zM3.9 4.8a.9.9 0 1 1 0-1.8h5a.9.9 0 1 1 0 1.8h-5zm0 3a.9.9 0 1 1 0-1.8h5a.9.9 0 1 1 0 1.8h-5zm0 3a.9.9 0 1 1 0-1.8h5a.9.9 0 1 1 0 1.8h-5z"
                                          fill-rule="nonzero"/>
                                </svg>
                            </i>
                            <span>Tạp chí</span>
                        </a>
                    </li>
                    <li>
                        <a href="" title="">
                            <i class="kt-icon grey size-16x14">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 13">
                                    <path d="M8 6c1.4 0 2.5-1.4 2.5-3v-.4C10.5 1.1 9.4 0 8 0S5.5 1.1 5.5 2.6v.5c0 1.5 1 3 2.5 3zm-5 .5c.4 0 1.5-.5 1.5-1.6v-.8c0-1-.8-1.6-1.5-1.6s-1.5.6-1.5 1.6V5C1.5 6 2.6 6.5 3 6.5zm9 2l-.1-.3c0-.2-.1-.4-.3-.5l-1-1-.6-.2c-.3 0-.5.2-1 .6l-.3.4S8.3 8 8 8c-.3 0-.7-.5-.7-.5L6.9 7c-.4-.4-.6-.6-1-.6l-.5.3c-.5.3-.8.6-1 .9a1.7 1.7 0 0 0-.4.8V11c0 .7.3 1 1 1h6c.7 0 1-.3 1-1V8.8v-.3zm1-2c.4 0 1.5-.5 1.5-1.6v-.8c0-1-.8-1.6-1.5-1.6s-1.5.6-1.5 1.6V5c0 1.1 1.1 1.6 1.5 1.6zM1 7.6C.2 8.1 0 9 0 9.6v1c0 .6.2 1 1 1h2v-3L2.5 8c-.5-.4-1-.6-1.4-.4zm2 1s0-.3 0 0zm12.9 1c0-.6-.2-1.5-1.2-2-.4-.2-.8 0-1.3.4l-.5.5v3h2c.7 0 1-.3 1-1v-1zm-3-1c0-.3 0 0 0 0z"
                                          fill-rule="evenodd"/>
                                </svg>
                            </i>
                            <span>Cộng đồng</span>
                        </a>
                    </li>
                </ul>
                <div class="head-menu-footer">
                    <a href="" title="">
                        <button type="button" class="btn access">
                            Đăng nhập
                        </button>
                    </a>
                    <a href="" title="">
                        <button type="button" class="btn access hover">
                            Đăng ký tài khoản
                        </button>
                    </a>
                    <div class="kt-footer">
                        <div class="company-footer">
                            <h5>© 2015-2019 KIENTRUC.com jsc.<br>
                                All right reserved</h5>
                        </div>
                        <div class="social">
                            <a href="" title="">
                                <button type="button" class="btn sface">
                                    <i class="fab fa-facebook-f"></i>
                                </button>
                            </a>
                            <a href="" title="">
                                <button type="button" class="btn sgoogle">
                                    <i class="fab fa-google"></i>
                                </button>
                            </a>
                            <a href="" title="">
                                <button type="button" class="btn stwitter">
                                    <i class="fab fa-twitter"></i>
                                </button>
                            </a>
                            <a href="" title="">
                                <button type="button" class="btn srss">
                                    <i class="fas fa-rss"></i>
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div data-js-check id="js-menu-login-kts" class="head-fixed-menu kt-transition">
        <div class="fixed-menu-main">
            <button type="button" class="btn btn-close"
                    onclick="javascript:modalCloseMenu({classAttr:'#js-menu-login-kts'})">
                <i class="kt-icon grey size-16x16">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                         viewBox="0 0 12 12">
                        <defs>
                            <path d="M4.6 4.4V.8A.7.7 0 0 1 6 .8v3.6h3.6a.7.7 0 0 1 0 1.4H6v3.6a.7.7 0 1 1-1.4 0V5.8H1a.7.7 0 0 1 0-1.4h3.6z"
                                  id="b"/>
                            <filter x="-30%" y="-30%" width="160%" height="160%" filterUnits="objectBoundingBox" id="a">
                                <feOffset in="SourceAlpha" result="shadowOffsetOuter1"/>
                                <feGaussianBlur stdDeviation="1" in="shadowOffsetOuter1" result="shadowBlurOuter1"/>
                                <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.5 0"
                                               in="shadowBlurOuter1"/>
                            </filter>
                        </defs>
                        <g transform="rotate(45 4.5 6.5)" fill="none" fill-rule="evenodd">
                            <use fill="none" filter="url(#a)" xlink:href="#b"/>
                            <use fill="#000" xlink:href="#b"/>
                        </g>
                    </svg>
                </i>
            </button>
            <!-- PHAN CSS RIENG -->
            <div class="head-menu-login-kts">
                <div class="kts-avatar">
                    <a href="" title="">
                        <img src="/images/avatar.png" alt="" class="img-fluid" />
                        <div class="information">
                            <b>Quang Hưng</b>
                            <p>
                                <i class="kt-icon grey size-10x12">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 10 12">
                                        <path d="M4.6 0A4.6 4.6 0 0 0 0 4.7c0 3.2 4 7 4.3 7.2h.6C5 11.7 9 7.9 9 4.7 9.1 2 7.1 0 4.6 0zm0 7C3.3 7 2.3 6 2.3 4.7c0-1.3 1-2.4 2.3-2.4 1.2 0 2.3 1 2.3 2.4C6.9 6 5.9 7 4.6 7z"
                                              fill-rule="nonzero"/>
                                    </svg>
                                </i>
                                <span>Hà Nội</span>
                            </p>
                            <p>
                                <i class="kt-icon grey size-11x11">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16">
                                        <path d="M1.075 10.11c.255.213.464.478.444.66a2.985 2.985 0 0 0-.019.329c0 1.643 1.296 2.976 2.894 2.976.197 0 .39-.02.576-.06.314-.065.684.061.906.308.528.585 1.28.952 2.118.952.884 0 1.676-.409 2.207-1.052a.846.846 0 0 1 .885-.267c.256.077.527.119.808.119 1.598 0 2.894-1.333 2.894-2.976 0-.184-.017-.364-.049-.538-.054-.294.09-.66.329-.89a3 3 0 0 0 .92-2.172c0-.935-.42-1.767-1.075-2.312-.255-.212-.464-.478-.444-.659.012-.108.019-.218.019-.33 0-1.643-1.296-2.975-2.894-2.975-.198 0-.39.02-.576.059a1.002 1.002 0 0 1-.907-.307A2.843 2.843 0 0 0 7.994.023c-.837 0-1.59.367-2.118.952a1.003 1.003 0 0 1-.906.307 2.83 2.83 0 0 0-.576-.06C2.796 1.223 1.5 2.556 1.5 4.2c0 .158.012.313.036.465.04.255-.14.57-.4.774A2.995 2.995 0 0 0 0 7.798c0 .935.42 1.768 1.075 2.313zm6.505-.008a.871.871 0 0 1-1.299 0L4.27 7.928a1.05 1.05 0 0 1 0-1.403.871.871 0 0 1 1.299 0L6.767 7.82a.22.22 0 0 0 .328 0l3.246-3.507a.871.871 0 0 1 1.3 0c.171.186.268.439.268.702 0 .263-.097.515-.269.701l-4.06 4.386z"
                                              fill-rule="nonzero"/>
                                    </svg>
                                </i>
                                <i class="kt-icon grey size-11x11">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16">
                                        <path d="M1.075 10.11c.255.213.464.478.444.66a2.985 2.985 0 0 0-.019.329c0 1.643 1.296 2.976 2.894 2.976.197 0 .39-.02.576-.06.314-.065.684.061.906.308.528.585 1.28.952 2.118.952.884 0 1.676-.409 2.207-1.052a.846.846 0 0 1 .885-.267c.256.077.527.119.808.119 1.598 0 2.894-1.333 2.894-2.976 0-.184-.017-.364-.049-.538-.054-.294.09-.66.329-.89a3 3 0 0 0 .92-2.172c0-.935-.42-1.767-1.075-2.312-.255-.212-.464-.478-.444-.659.012-.108.019-.218.019-.33 0-1.643-1.296-2.975-2.894-2.975-.198 0-.39.02-.576.059a1.002 1.002 0 0 1-.907-.307A2.843 2.843 0 0 0 7.994.023c-.837 0-1.59.367-2.118.952a1.003 1.003 0 0 1-.906.307 2.83 2.83 0 0 0-.576-.06C2.796 1.223 1.5 2.556 1.5 4.2c0 .158.012.313.036.465.04.255-.14.57-.4.774A2.995 2.995 0 0 0 0 7.798c0 .935.42 1.768 1.075 2.313zm6.505-.008a.871.871 0 0 1-1.299 0L4.27 7.928a1.05 1.05 0 0 1 0-1.403.871.871 0 0 1 1.299 0L6.767 7.82a.22.22 0 0 0 .328 0l3.246-3.507a.871.871 0 0 1 1.3 0c.171.186.268.439.268.702 0 .263-.097.515-.269.701l-4.06 4.386z"
                                              fill-rule="nonzero"/>
                                    </svg>
                                </i>
                                <i class="kt-icon grey size-11x11">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16">
                                        <path d="M1.075 10.11c.255.213.464.478.444.66a2.985 2.985 0 0 0-.019.329c0 1.643 1.296 2.976 2.894 2.976.197 0 .39-.02.576-.06.314-.065.684.061.906.308.528.585 1.28.952 2.118.952.884 0 1.676-.409 2.207-1.052a.846.846 0 0 1 .885-.267c.256.077.527.119.808.119 1.598 0 2.894-1.333 2.894-2.976 0-.184-.017-.364-.049-.538-.054-.294.09-.66.329-.89a3 3 0 0 0 .92-2.172c0-.935-.42-1.767-1.075-2.312-.255-.212-.464-.478-.444-.659.012-.108.019-.218.019-.33 0-1.643-1.296-2.975-2.894-2.975-.198 0-.39.02-.576.059a1.002 1.002 0 0 1-.907-.307A2.843 2.843 0 0 0 7.994.023c-.837 0-1.59.367-2.118.952a1.003 1.003 0 0 1-.906.307 2.83 2.83 0 0 0-.576-.06C2.796 1.223 1.5 2.556 1.5 4.2c0 .158.012.313.036.465.04.255-.14.57-.4.774A2.995 2.995 0 0 0 0 7.798c0 .935.42 1.768 1.075 2.313zm6.505-.008a.871.871 0 0 1-1.299 0L4.27 7.928a1.05 1.05 0 0 1 0-1.403.871.871 0 0 1 1.299 0L6.767 7.82a.22.22 0 0 0 .328 0l3.246-3.507a.871.871 0 0 1 1.3 0c.171.186.268.439.268.702 0 .263-.097.515-.269.701l-4.06 4.386z"
                                              fill-rule="nonzero"/>
                                    </svg>
                                </i>
                                <i class="kt-icon grey size-11x11">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16">
                                        <path d="M1.075 10.11c.255.213.464.478.444.66a2.985 2.985 0 0 0-.019.329c0 1.643 1.296 2.976 2.894 2.976.197 0 .39-.02.576-.06.314-.065.684.061.906.308.528.585 1.28.952 2.118.952.884 0 1.676-.409 2.207-1.052a.846.846 0 0 1 .885-.267c.256.077.527.119.808.119 1.598 0 2.894-1.333 2.894-2.976 0-.184-.017-.364-.049-.538-.054-.294.09-.66.329-.89a3 3 0 0 0 .92-2.172c0-.935-.42-1.767-1.075-2.312-.255-.212-.464-.478-.444-.659.012-.108.019-.218.019-.33 0-1.643-1.296-2.975-2.894-2.975-.198 0-.39.02-.576.059a1.002 1.002 0 0 1-.907-.307A2.843 2.843 0 0 0 7.994.023c-.837 0-1.59.367-2.118.952a1.003 1.003 0 0 1-.906.307 2.83 2.83 0 0 0-.576-.06C2.796 1.223 1.5 2.556 1.5 4.2c0 .158.012.313.036.465.04.255-.14.57-.4.774A2.995 2.995 0 0 0 0 7.798c0 .935.42 1.768 1.075 2.313zm6.505-.008a.871.871 0 0 1-1.299 0L4.27 7.928a1.05 1.05 0 0 1 0-1.403.871.871 0 0 1 1.299 0L6.767 7.82a.22.22 0 0 0 .328 0l3.246-3.507a.871.871 0 0 1 1.3 0c.171.186.268.439.268.702 0 .263-.097.515-.269.701l-4.06 4.386z"
                                              fill-rule="nonzero"/>
                                    </svg>
                                </i>
                                <i class="kt-icon grey size-11x11">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16">
                                        <path d="M1.075 10.11c.255.213.464.478.444.66a2.985 2.985 0 0 0-.019.329c0 1.643 1.296 2.976 2.894 2.976.197 0 .39-.02.576-.06.314-.065.684.061.906.308.528.585 1.28.952 2.118.952.884 0 1.676-.409 2.207-1.052a.846.846 0 0 1 .885-.267c.256.077.527.119.808.119 1.598 0 2.894-1.333 2.894-2.976 0-.184-.017-.364-.049-.538-.054-.294.09-.66.329-.89a3 3 0 0 0 .92-2.172c0-.935-.42-1.767-1.075-2.312-.255-.212-.464-.478-.444-.659.012-.108.019-.218.019-.33 0-1.643-1.296-2.975-2.894-2.975-.198 0-.39.02-.576.059a1.002 1.002 0 0 1-.907-.307A2.843 2.843 0 0 0 7.994.023c-.837 0-1.59.367-2.118.952a1.003 1.003 0 0 1-.906.307 2.83 2.83 0 0 0-.576-.06C2.796 1.223 1.5 2.556 1.5 4.2c0 .158.012.313.036.465.04.255-.14.57-.4.774A2.995 2.995 0 0 0 0 7.798c0 .935.42 1.768 1.075 2.313zm6.505-.008a.871.871 0 0 1-1.299 0L4.27 7.928a1.05 1.05 0 0 1 0-1.403.871.871 0 0 1 1.299 0L6.767 7.82a.22.22 0 0 0 .328 0l3.246-3.507a.871.871 0 0 1 1.3 0c.171.186.268.439.268.702 0 .263-.097.515-.269.701l-4.06 4.386z"
                                              fill-rule="nonzero"/>
                                    </svg>
                                </i>
                            </p>
                        </div>
                    </a>
                </div>
                <div class="kt-line kt-grey"></div>
                <div class="kts-follow">
                     <ul class="list-unstyled">
                         <li>
                             <b>688</b>
                             <span>KTS Yêu thích</span>
                         </li>
                         <li>
                             <b>351</b>
                             <span>Người theo dõi</span>
                         </li>
                     </ul>
                    <div class="clearfix"></div>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <a href="" title="">
                            <i class="kt-icon grey size-15x14">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 36 36">
                                    <path d="M18 0a18 18 0 1 0 0 36 18 18 0 0 0 0-36zm0 5.4a6 6 0 1 1 0 11.9 6 6 0 0 1 0-12zm0 25.9c-3.3 0-6.3-1.2-8.6-3.2-.6-.5-.9-1.2-.9-2a6 6 0 0 1 6-6h7a6 6 0 0 1 6 6c0 .8-.3 1.5-.9 2-2.3 2-5.3 3.2-8.6 3.2z"
                                          fill-rule="nonzero"/>
                                </svg>
                            </i>
                            <b>Trang cá nhân</b>
                        </a>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <a href="" title="">
                            <i class="kt-icon grey size-15x14">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15 14">
                                    <path d="M13.7 2.7h-3A1.7 1.7 0 0 0 8.5.3c-.5.3-1 .8-1.3 1.3-.3-.5-.8-1-1.3-1.3L5 .1a1.7 1.7 0 0 0-1.4 2.6h-3c-.3 0-.6.3-.6.6V6c0 .3.3.6.6.6h.1V12.9c0 .6.5 1.1 1 1.1h10.7c.6 0 1-.5 1-1V6.6h.2c.3 0 .6-.3.6-.6V3.3c0-.3-.3-.6-.6-.6zM9 1.3c.3-.1.7 0 .8.3.2.3 0 .6-.3.8a2 2 0 0 1-.8.1h-.5v-.2c.2-.4.5-.8.8-1zm-4.4.3a.6.6 0 0 1 .8-.3c.3.2.7.6.9 1l-.1.2h-.5a2 2 0 0 1-.8-.1.6.6 0 0 1-.3-.8zm2 11H2.3v-2.5h4.5v2.5zM2.3 9V6.7h4.5V9H2.2zm10 3.6H7.7v-2.5h4.5v2.5zm0-3.6H7.7V6.7h4.5V9z"
                                          fill-rule="nonzero"/>
                                </svg>
                            </i>
                            <b>Chiết khấu</b>
                        </a>
                        <span class="badge badge-pill badge-danger">15</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <a href="" title="">
                            <i class="kt-icon grey size-15x14">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14">
                                    <path d="M14 6.2c0-.2-.3-.3-.5-.3-.6 0-1.2-.4-1.5-1-.2-.6 0-1.3.4-1.7.2-.2.2-.4 0-.5a7 7 0 0 0-1-1.2.4.4 0 0 0-.6 0c-.4.5-1.1.7-1.7.5-.6-.3-1-.9-1-1.5 0-.3 0-.4-.3-.5H6.2C6 0 6 .2 6 .4c0 .7-.4 1.3-1 1.5-.5.3-1.3.1-1.7-.4a.4.4 0 0 0-.5 0 7 7 0 0 0-1.2 1.1v.5c.6.5.7 1.2.5 1.8-.3.6-.9 1-1.5 1-.3 0-.4 0-.5.3v1.6c0 .2.3.3.5.3.6 0 1.2.4 1.4 1 .3.6.1 1.3-.3 1.7-.2.1-.2.4 0 .5.2.4.6.8 1 1.1.2.2.4.2.5 0 .5-.5 1.2-.6 1.8-.4.6.3 1 .9 1 1.5 0 .2 0 .4.3.4a7 7 0 0 0 1.6 0c.2 0 .3-.2.3-.4 0-.6.4-1.2 1-1.4.5-.3 1.3-.1 1.7.3.1.2.4.2.5 0a7 7 0 0 0 1.1-1c.2-.2.2-.4 0-.6a1.5 1.5 0 0 1 1-2.7h.1c.2 0 .4 0 .4-.3.1-.5.1-1 0-1.6zM7 9.3a2.3 2.3 0 1 1 0-4.6 2.3 2.3 0 0 1 0 4.6z"
                                          fill-rule="evenodd"/>
                                </svg>
                            </i>
                            <b>Thông tin tài khoản</b>
                        </a>

                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <a href="" title="">
                            <i class="kt-icon grey size-15x14">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 15">
                                    <path d="M8.9 7.5a1 1 0 1 1-2.2 0V2A1 1 0 0 1 9 2v5.6zm6.2 0A7.3 7.3 0 1 1 2.6 2.4a1 1 0 0 1 1.5 0 1 1 0 0 1 0 1.5c-1 1-1.5 2.3-1.5 3.6A5.2 5.2 0 1 0 11.4 4a1 1 0 0 1 1.5-1.5 7.3 7.3 0 0 1 2.2 5.1z"
                                          fill-rule="nonzero"/>
                                </svg>
                            </i>
                            <b>Thoát</b>
                        </a>
                    </li>
                </ul>
                <div class="head-menu-footer">
                    <div class="kt-footer">
                        <div class="company-footer">
                            <h5>© 2015-2019 KIENTRUC.com jsc.<br>
                                All right reserved</h5>
                        </div>
                        <div class="social">
                            <a href="" title="">
                                <button type="button" class="btn sface">
                                    <i class="fab fa-facebook-f"></i>
                                </button>
                            </a>
                            <a href="" title="">
                                <button type="button" class="btn sgoogle">
                                    <i class="fab fa-google"></i>
                                </button>
                            </a>
                            <a href="" title="">
                                <button type="button" class="btn stwitter">
                                    <i class="fab fa-twitter"></i>
                                </button>
                            </a>
                            <a href="" title="">
                                <button type="button" class="btn srss">
                                    <i class="fas fa-rss"></i>
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div data-js-check id="js-menu-login-user" class="head-fixed-menu kt-transition">
        <div class="fixed-menu-main">
            <button type="button" class="btn btn-close"
                    onclick="javascript:modalCloseMenu({classAttr:'#js-menu-login-user'})">
                <i class="kt-icon grey size-16x16">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                         viewBox="0 0 12 12">
                        <defs>
                            <path d="M4.6 4.4V.8A.7.7 0 0 1 6 .8v3.6h3.6a.7.7 0 0 1 0 1.4H6v3.6a.7.7 0 1 1-1.4 0V5.8H1a.7.7 0 0 1 0-1.4h3.6z"
                                  id="b"/>
                            <filter x="-30%" y="-30%" width="160%" height="160%" filterUnits="objectBoundingBox" id="a">
                                <feOffset in="SourceAlpha" result="shadowOffsetOuter1"/>
                                <feGaussianBlur stdDeviation="1" in="shadowOffsetOuter1" result="shadowBlurOuter1"/>
                                <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.5 0"
                                               in="shadowBlurOuter1"/>
                            </filter>
                        </defs>
                        <g transform="rotate(45 4.5 6.5)" fill="none" fill-rule="evenodd">
                            <use fill="none" filter="url(#a)" xlink:href="#b"/>
                            <use fill="#000" xlink:href="#b"/>
                        </g>
                    </svg>
                </i>
            </button>
            <!-- PHAN CSS RIENG -->
            <div class="head-menu-login-kts">
                <div class="kts-avatar">
                    <a href="" title="">
                        <img src="/images/avatar.png" alt="" style="border-radius: 4px;" class="img-fluid" />
                        <div class="information">
                            <b>Nguyễn Huy Hoàng</b>
                            <p>
                                <i class="kt-icon grey size-10x12">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 10 12">
                                        <path d="M4.6 0A4.6 4.6 0 0 0 0 4.7c0 3.2 4 7 4.3 7.2h.6C5 11.7 9 7.9 9 4.7 9.1 2 7.1 0 4.6 0zm0 7C3.3 7 2.3 6 2.3 4.7c0-1.3 1-2.4 2.3-2.4 1.2 0 2.3 1 2.3 2.4C6.9 6 5.9 7 4.6 7z"
                                              fill-rule="nonzero"/>
                                    </svg>
                                </i>
                                <span>Hồ Chí Minh</span>
                            </p>
                        </div>
                    </a>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <a href="" title="">
                            <i class="kt-icon grey size-15x14">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 36 36">
                                    <path d="M18 0a18 18 0 1 0 0 36 18 18 0 0 0 0-36zm0 5.4a6 6 0 1 1 0 11.9 6 6 0 0 1 0-12zm0 25.9c-3.3 0-6.3-1.2-8.6-3.2-.6-.5-.9-1.2-.9-2a6 6 0 0 1 6-6h7a6 6 0 0 1 6 6c0 .8-.3 1.5-.9 2-2.3 2-5.3 3.2-8.6 3.2z"
                                          fill-rule="nonzero"/>
                                </svg>
                            </i>
                            <b>Trang cá nhân</b>
                        </a>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <a href="" title="">
                            <i class="kt-icon grey size-15x14">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15 14">
                                    <path d="M13.7 2.7h-3A1.7 1.7 0 0 0 8.5.3c-.5.3-1 .8-1.3 1.3-.3-.5-.8-1-1.3-1.3L5 .1a1.7 1.7 0 0 0-1.4 2.6h-3c-.3 0-.6.3-.6.6V6c0 .3.3.6.6.6h.1V12.9c0 .6.5 1.1 1 1.1h10.7c.6 0 1-.5 1-1V6.6h.2c.3 0 .6-.3.6-.6V3.3c0-.3-.3-.6-.6-.6zM9 1.3c.3-.1.7 0 .8.3.2.3 0 .6-.3.8a2 2 0 0 1-.8.1h-.5v-.2c.2-.4.5-.8.8-1zm-4.4.3a.6.6 0 0 1 .8-.3c.3.2.7.6.9 1l-.1.2h-.5a2 2 0 0 1-.8-.1.6.6 0 0 1-.3-.8zm2 11H2.3v-2.5h4.5v2.5zM2.3 9V6.7h4.5V9H2.2zm10 3.6H7.7v-2.5h4.5v2.5zm0-3.6H7.7V6.7h4.5V9z"
                                          fill-rule="nonzero"/>
                                </svg>
                            </i>
                            <b>Chiết khấu</b>
                        </a>
                        <span class="badge badge-pill badge-light">356</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <a href="" title="">
                            <i class="kt-icon grey size-15x14">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14">
                                    <path d="M14 6.2c0-.2-.3-.3-.5-.3-.6 0-1.2-.4-1.5-1-.2-.6 0-1.3.4-1.7.2-.2.2-.4 0-.5a7 7 0 0 0-1-1.2.4.4 0 0 0-.6 0c-.4.5-1.1.7-1.7.5-.6-.3-1-.9-1-1.5 0-.3 0-.4-.3-.5H6.2C6 0 6 .2 6 .4c0 .7-.4 1.3-1 1.5-.5.3-1.3.1-1.7-.4a.4.4 0 0 0-.5 0 7 7 0 0 0-1.2 1.1v.5c.6.5.7 1.2.5 1.8-.3.6-.9 1-1.5 1-.3 0-.4 0-.5.3v1.6c0 .2.3.3.5.3.6 0 1.2.4 1.4 1 .3.6.1 1.3-.3 1.7-.2.1-.2.4 0 .5.2.4.6.8 1 1.1.2.2.4.2.5 0 .5-.5 1.2-.6 1.8-.4.6.3 1 .9 1 1.5 0 .2 0 .4.3.4a7 7 0 0 0 1.6 0c.2 0 .3-.2.3-.4 0-.6.4-1.2 1-1.4.5-.3 1.3-.1 1.7.3.1.2.4.2.5 0a7 7 0 0 0 1.1-1c.2-.2.2-.4 0-.6a1.5 1.5 0 0 1 1-2.7h.1c.2 0 .4 0 .4-.3.1-.5.1-1 0-1.6zM7 9.3a2.3 2.3 0 1 1 0-4.6 2.3 2.3 0 0 1 0 4.6z"
                                          fill-rule="evenodd"/>
                                </svg>
                            </i>
                            <b>Thông tin tài khoản</b>
                        </a>

                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <a href="" title="">
                            <i class="kt-icon grey size-15x14">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 15">
                                    <path d="M8.9 7.5a1 1 0 1 1-2.2 0V2A1 1 0 0 1 9 2v5.6zm6.2 0A7.3 7.3 0 1 1 2.6 2.4a1 1 0 0 1 1.5 0 1 1 0 0 1 0 1.5c-1 1-1.5 2.3-1.5 3.6A5.2 5.2 0 1 0 11.4 4a1 1 0 0 1 1.5-1.5 7.3 7.3 0 0 1 2.2 5.1z"
                                          fill-rule="nonzero"/>
                                </svg>
                            </i>
                            <b>Thoát</b>
                        </a>
                    </li>
                </ul>
                <div class="head-menu-footer">
                    <div class="kt-footer">
                        <div class="company-footer">
                            <h5>© 2015-2019 KIENTRUC.com jsc.<br>
                                All right reserved</h5>
                        </div>
                        <div class="social">
                            <a href="" title="">
                                <button type="button" class="btn sface">
                                    <i class="fab fa-facebook-f"></i>
                                </button>
                            </a>
                            <a href="" title="">
                                <button type="button" class="btn sgoogle">
                                    <i class="fab fa-google"></i>
                                </button>
                            </a>
                            <a href="" title="">
                                <button type="button" class="btn stwitter">
                                    <i class="fab fa-twitter"></i>
                                </button>
                            </a>
                            <a href="" title="">
                                <button type="button" class="btn srss">
                                    <i class="fas fa-rss"></i>
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php if ($id == 2) { ?>
    <div class="fixed-menu-bottom">
        <ul class="list-unstyled">
            <li>
                <a href="" title="">
                    <button type="button" class="btn active">
                        <i class="kt-icon grey size-15x14">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15 14">
                                <g fill-rule="evenodd">
                                    <path d="M14.4 6.2L8 .2a.7.7 0 0 0-1 0l-6.7 6c-.2.2-.3.6-.1.9 0 .2.3.4.7.4h1v6c0 .3.2.5.4.5H6c.2 0 .4-.2.4-.5V10h2.1v3.6c0 .3.2.5.4.5h3.6c.3 0 .5-.2.5-.5v-6h1c.3 0 .6-.2.7-.4.2-.3 0-.7-.2-.9zM12.8.9h-3l3.4 3V1.3c0-.2-.2-.4-.4-.4z"/>
                                </g>
                            </svg>
                        </i>
                        <span>Trang chủ</span>
                    </button>
                </a>
            </li>
            <li>
                <a href="" title="">
                    <button type="button" class="btn">
                        <i class="kt-icon grey size-17x16">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17 17">
                                <g fill-rule="nonzero">
                                    <path d="M8.7 3a3 3 0 1 0-6.1.1 3 3 0 0 0 6.1 0zM13.8 15.1a5.1 5.1 0 0 1-6.9-1H.7a.7.7 0 0 1-.7-.8 5.7 5.7 0 0 1 6.8-5.5 5.1 5.1 0 0 1 8.3 6l1.4 1.4a.9.9 0 1 1-1.3 1.3L13.8 15zm-2.9-.6a3.7 3.7 0 1 0 0-7.4 3.7 3.7 0 0 0 0 7.4z"/>
                                </g>
                            </svg>
                        </i>
                        <span>Tìm kiếm</span>
                    </button>
                </a>
            </li>
            <li>
                <a href="" title="">
                    <button type="button" class="btn">
                        <b style="background-image: url(/images/avatar.png)">&nbsp;</b>
                    </button>
                </a>
            </li>
            <li>
                <a href="" title="">
                    <button type="button" class="btn">
                        <i class="kt-icon grey size-16x13">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 13">
                                <path d="M8 6c1.4 0 2.5-1.4 2.5-3v-.4C10.5 1.1 9.4 0 8 0S5.5 1.1 5.5 2.6v.5c0 1.5 1 3 2.5 3zm-5 .5c.4 0 1.5-.5 1.5-1.6v-.8c0-1-.8-1.6-1.5-1.6s-1.5.6-1.5 1.6V5C1.5 6 2.6 6.5 3 6.5zm9 2l-.1-.3c0-.2-.1-.4-.3-.5l-1-1-.6-.2c-.3 0-.5.2-1 .6l-.3.4S8.3 8 8 8c-.3 0-.7-.5-.7-.5L6.9 7c-.4-.4-.6-.6-1-.6l-.5.3c-.5.3-.8.6-1 .9a1.7 1.7 0 0 0-.4.8V11c0 .7.3 1 1 1h6c.7 0 1-.3 1-1V8.8v-.3zm1-2c.4 0 1.5-.5 1.5-1.6v-.8c0-1-.8-1.6-1.5-1.6s-1.5.6-1.5 1.6V5c0 1.1 1.1 1.6 1.5 1.6zM1 7.6C.2 8.1 0 9 0 9.6v1c0 .6.2 1 1 1h2v-3L2.5 8c-.5-.4-1-.6-1.4-.4zm2 1s0-.3 0 0zm12.9 1c0-.6-.2-1.5-1.2-2-.4-.2-.8 0-1.3.4l-.5.5v3h2c.7 0 1-.3 1-1v-1zm-3-1c0-.3 0 0 0 0z"
                                      fill-rule="evenodd"/>
                            </svg>
                        </i>
                        <span>Cộng đồng</span>
                    </button>
                </a>
            </li>
            <li>
                <a href="" title="">
                    <button type="button" class="btn">
                        <i class="kt-icon grey size-16x15">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 15">
                                <path d="M12.9 3.8h2c.5 0 .9.4.9 1v6.9c0 1.6-1.3 2.9-2.9 2.9h-10A2.9 2.9 0 0 1 0 11.7V1.9C0 .9.9 0 1.9 0h9c1 0 1.9.9 1.9 1.9v2h.1zm-.1 7.1a.9.9 0 1 1-1.8 0v-9l-.1-.1h-9l-.1.1v9.8c0 .6.5 1.1 1.1 1.1h10c.6 0 1.1-.5 1.1-1.1v-6h-1.1-.1v5.2zM3.9 4.8a.9.9 0 1 1 0-1.8h5a.9.9 0 1 1 0 1.8h-5zm0 3a.9.9 0 1 1 0-1.8h5a.9.9 0 1 1 0 1.8h-5zm0 3a.9.9 0 1 1 0-1.8h5a.9.9 0 1 1 0 1.8h-5z"
                                      fill-rule="nonzero"/>
                            </svg>
                        </i>
                        <span>Tạp chí</span>
                    </button>
                </a>
            </li>
        </ul>
    </div>
<?php } ?>

<?php
$this->registerCssFile("@web/css/mobile/menu-main.css", [
    'depends' => [\frontend\assets\AppAsset::className()],
]);
$this->registerJsFile("@web/js/mobile/mobile.js", [
    'depends' => [\frontend\assets\AppAsset::className()],
]);
?>