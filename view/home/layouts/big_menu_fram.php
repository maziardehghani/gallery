<div class="orb-big-menu-frame">    <div class="orb-big-menu orb-big-menu-1">        <div class="orb-grid">            <div class="orb-g-30 orb-md-50 orb-sm-100">                <div class="orb-menu-frame orb-fs-menu">                    <nav>                        <                        <ul class="orb-menu">                            <li class="orb-has-children ">                                <a href="<?= URL ?>" data-no-swup>صفحه اصلی</a>                            </li>                            <li class="orb-has-children">                                <a href="<?= URL . '/aboutme' ?>" data-no-swup>درباره من</a>                            </li>                            <li class="orb-has-children">                                <a href="#" data-no-swup>نمونه کارها</a>                                <ul>                                    <?php foreach ($service_categories as $service_category) {?>                                        <li><a href="<?= URL . '/samplework/index/'.$service_category['id'] ?>"><?= $service_category['title'] ?></a></li>                                    <?php } ?>                                </ul>                            </li>                            <li class="orb-has-children">                                <a href="<?= URL . '/contact' ?>" data-no-swup>تماس</a>                            </li>                        </ul>                    </nav>                </div>            </div>            <div class="orb-g-70 orb-md-50 orb-sm-100">                <div class="rb-object-frame">                    <div class="orb-photo-frame orb-obj-1">                        <img src="<?= URL . "/public/home/img/photo/39.jpg" ?>" alt="عکس" />                    </div>                    <div class="orb-position-fix">                        <div class="orb-deco"></div>                        <div class="orb-photo-frame orb-obj-2">                            <img src="<?= URL . "/public/home/img/photo/40.jpg" ?>" alt="عکس" />                        </div>                    </div>                    <div class="orb-descr">                        <div class="orb-descr-title">                            <div>منو</div>                            <div class="orb-line"></div>                        </div>                        <p>منتظر اخبار و کارهای جدید در اینستاگرام باشید</p>                        <a href="<?= $option['instagram'] ?>" target="_blank" data-no-swup><img src="<?= URL . "/public/home/img/ui/instagram-2.svg" ?>" alt="اینستاگرام" /></a>                    </div>                </div>            </div>        </div>    </div></div>