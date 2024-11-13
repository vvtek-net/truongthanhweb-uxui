<!-- CSS -->
<link rel="stylesheet" href="../cdn-cgi/css/header.css">

<!-- Lấy URI hiện tại -->
<?php
$uri = $_SERVER['REQUEST_URI'];

// Loại bỏ query string (nếu có)
$cleanUri = strtok($uri, '?');

// Phân đoạn URI thành một mảng
$segments = explode('/', trim($cleanUri, '/'));

// Lấy phân đoạn cuối cùng
$lastSegment = array_pop($segments);

// Lấy phân đoạn ngay trước nó (nếu có)
$previousSegment = end($segments);
?>

<!-- start header -->
<header
    class="aux-elementor-header aux-overlay-header"
    id="site-elementor-header"
    itemscope="itemscope"
    itemtype="https://schema.org/WPHeader"
    data-sticky-height="80">
    <div class="aux-wrapper">
        <div class="aux-header aux-header-elements-wrapper">
            <div
                data-elementor-type="header"
                data-elementor-id="57"
                class="elementor elementor-57">
                <div class="elementor-inner">
                    <div class="elementor-section-wrap">
                        <section
                            data-export-id="208-57-369af1b"
                            class="elementor-section elementor-top-section elementor-element elementor-element-369af1b elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                            data-id="369af1b"
                            data-element_type="section">
                            <div class="elementor-container elementor-column-gap-no" style="<?php if ($previousSegment == 'portfolio') echo 'border-bottom: 1px solid #e5e5e5;' ?>">
                                <div class="elementor-row">
                                    <div
                                        class="aux-parallax-section elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-7c2d465"
                                        data-id="7c2d465"
                                        data-element_type="column">
                                        <div
                                            class="elementor-column-wrap elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div
                                                    class="elementor-element elementor-element-70c3d12 elementor-widget__width-auto elementor-widget-mobile__width-auto elementor-widget elementor-widget-aux_logo"
                                                    data-id="70c3d12"
                                                    data-element_type="widget"
                                                    data-widget_type="aux_logo.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="aux-widget-logo">
                                                            <a
                                                                class="aux-logo-anchor aux-has-logo"
                                                                title="Advertisement Agency &#8211; Phlox Elementor WordPress Theme"
                                                                href="../index.php">
                                                                <img
                                                                    width="176"
                                                                    height="46"
                                                                    src="../wp-content/uploads/sites/208/2020/06/logo-header.png"
                                                                    class="aux-attachment aux-featured-image attachment-176x46 aux-attachment-id-24"
                                                                    alt="logo header"
                                                                    data-ratio="3.83"
                                                                    data-original-w="176" />
                                                            </a>
                                                            <a
                                                                class="aux-logo-anchor aux-logo-sticky aux-logo-hidden aux-has-logo"
                                                                title="Advertisement Agency &#8211; Phlox Elementor WordPress Theme"
                                                                href="../index.php">
                                                                <img
                                                                    width="176"
                                                                    height="46"
                                                                    src="../wp-content/uploads/sites/208/2020/06/logo-footer.png"
                                                                    class="aux-attachment aux-featured-image attachment-176x46 aux-attachment-id-23"
                                                                    alt="logo footer"
                                                                    data-ratio="3.83"
                                                                    data-original-w="176" />
                                                            </a>
                                                            <section class="aux-logo-text">
                                                                <h3 class="site-title">
                                                                    <a
                                                                        href="index.php"
                                                                        title="Advertisement Agency &#8211; Phlox Elementor WordPress Theme ">Advertisement Agency - Phlox
                                                                        Elementor WordPress Theme
                                                                    </a>
                                                                </h3>
                                                                <p class="site-description">
                                                                    Just another Phlox Demos Sites site
                                                                </p>
                                                            </section>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="elementor-element elementor-element-2588e50 elementor-widget__width-auto elementor-widget-tablet__width-auto elementor-widget-mobile__width-auto elementor-widget elementor-widget-aux_menu_box"
                                                    data-id="2588e50"
                                                    data-element_type="widget"
                                                    data-widget_type="aux_menu_box.default">
                                                    <div class="elementor-widget-container">
                                                        <div
                                                            class="aux-elementor-header-menu aux-nav-menu-element aux-nav-menu-element-2588e50">
                                                            <div
                                                                class="aux-burger-box"
                                                                data-target-panel="overlay"
                                                                data-target-content=".elementor-element-2588e50 .aux-master-menu">
                                                                <div class="aux-burger aux-regular-small">
                                                                    <span class="mid-line"></span>
                                                                </div>
                                                            </div>
                                                            <!-- start master menu -->
                                                            <nav
                                                                id="master-menu-elementor-2588e50"
                                                                class="menu-header-menu-container">
                                                                <ul
                                                                    id="menu-header-menu"
                                                                    class="aux-master-menu aux-no-js aux-skin-classic aux-with-indicator aux-horizontal"
                                                                    data-type="horizontal"
                                                                    data-switch-type="toggle"
                                                                    data-switch-parent=".elementor-element-2588e50 .aux-fs-popup .aux-fs-menu"
                                                                    data-switch-width="800">
                                                                    <!-- start single menu -->
                                                                    <li
                                                                        id="menu-item-20"
                                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-20 aux-menu-depth-0 aux-menu-root-1 aux-menu-item">
                                                                        <a
                                                                            href=" ../index.php"
                                                                            class="aux-item-content">
                                                                            <span class="aux-menu-label">Trang Chủ</span>
                                                                        </a>
                                                                    </li>
                                                                    <!-- end single menu -->
                                                                    <!-- start single menu -->
                                                                    <li
                                                                        id="menu-item-19"
                                                                        class="menu-item menu-item-type-post_type menu-item-object-page  page_item page-item-11 current_page_item menu-item-19 aux-menu-depth-0 aux-menu-root-2 aux-menu-item
                                                                        <?php
                                                                        if ($previousSegment == 'about') echo ('current-menu-item') ?>">
                                                                        <a
                                                                            href="../about/index.php"
                                                                            class="aux-item-content">
                                                                            <span class="aux-menu-label">Giới Thiệu</span>
                                                                        </a>
                                                                    </li>
                                                                    <!-- end single menu -->
                                                                    <!-- start single menu -->
                                                                    <li
                                                                        id="menu-item-1231"
                                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1231 aux-menu-depth-0 aux-menu-root-4 aux-menu-item
                                                                        <?php
                                                                        if ($previousSegment == 'portfolio') echo ('current-menu-item') ?>">
                                                                        <a
                                                                            href="../portfolio/index.php"
                                                                            class="aux-item-content">
                                                                            <span class="aux-menu-label">Mẫu Website</span>
                                                                        </a>
                                                                    </li>
                                                                    <!-- end single menu -->
                                                                    <!-- start single menu -->
                                                                    <li
                                                                        id="menu-item-17"
                                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-17 aux-menu-depth-0 aux-menu-root-5 aux-menu-item
                                                                        <?php
                                                                        if ($previousSegment == 'contact') echo ('current-menu-item') ?>">
                                                                        <a
                                                                            href="../contact/index.php"
                                                                            class="aux-item-content">
                                                                            <span class="aux-menu-label">Liên Hệ</span>
                                                                        </a>
                                                                    </li>
                                                                    <!-- end single menu -->
                                                                </ul>
                                                            </nav>
                                                            <!-- end master menu -->
                                                            <section
                                                                class="aux-fs-popup aux-fs-menu-layout-center aux-indicator">
                                                                <div class="aux-panel-close">
                                                                    <div
                                                                        class="aux-close aux-cross-symbol aux-thick-medium"></div>
                                                                </div>
                                                                <div
                                                                    class="aux-fs-menu"
                                                                    data-menu-title=""></div>
                                                            </section>
                                                        </div>
                                                        <style>
                                                            @media only screen and (min-width: 801px) {
                                                                .elementor-element-2588e50 .aux-burger-box {
                                                                    display: none;
                                                                }
                                                            }
                                                        </style>
                                                    </div>
                                                </div>
                                                <div
                                                    class="elementor-element elementor-element-64dde4e elementor-widget__width-auto elementor-hidden-phone elementor-widget elementor-widget-aux_modern_button"
                                                    data-id="64dde4e"
                                                    data-element_type="widget"
                                                    data-widget_type="aux_modern_button.default">
                                                    <div class="elementor-widget-container">
                                                        <div
                                                            class="aux-modern-button-wrapper aux-modern-button-align-left">
                                                            <a
                                                                href="contact/index.php"
                                                                class="aux-modern-button aux-black aux-modern-button-md aux-modern-button-normal aux-modern-button-default aux-icon-">
                                                                <div class="aux-overlay"></div>
                                                                <div class="aux-icon"></div>
                                                                <div class="aux-text">
                                                                    <span class="aux-text-before">Đăng Ký Ngay</span>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
        <!-- end of header-elements -->
    </div>
    <!-- end of wrapper -->
</header>
<!-- end header -->