<!--begin::Sidebar-->
<aside class="app-sidebar bg-body-blue-dark shadow" data-bs-theme="dark">
    <!--begin::Sidebar Brand-->
    <div class="sidebar-brand">
        <!--begin::Brand Link-->
        <a href="#" class="brand-link">
            <!--begin::Brand Image-->
            <img src="<?= base_url('front/assets/images/logo.png') ?>" alt="" class="brand-image shadow" />
        </a>
        <!--end::Brand Link-->
    </div>

    <?php
    $current_uri = uri_string(); // e.g., admin/slider, admin/blogs
    ?>

    <!--begin::Sidebar Wrapper-->
    <div class="sidebar-wrapper">
        <nav class="mt-2">
            <!--begin::Sidebar Menu-->
            <ul class="nav sidebar-menu flex-column position-relative" data-lte-toggle="treeview" role="navigation"
                aria-label="Main navigation" data-accordion="false" id="navigation">

                <li class="nav-item">
                    <a href="<?= base_url('admin/slider') ?>" class="nav-link <?= ($current_uri == 'admin/slider') ? 'active' : '' ?>">
                        <i class="bi bi-sliders"></i>
                        <p>Slider Management</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?= base_url('admin/it-cost-inquiries') ?>" class="nav-link <?= ($current_uri == 'admin/it-cost-inquiries') ? 'active' : '' ?>">
                        <i class="bi bi-wallet2"></i>
                        <p>Cost Management</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?= base_url('admin/content/list') ?>" class="nav-link <?= ($current_uri == 'admin/content/list') ? 'active' : '' ?>">
                        <i class="bi bi-file-earmark"></i>
                        <p>Page Content</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?= base_url('admin/career/listing') ?>" class="nav-link <?= ($current_uri == 'admin/career/listing') ? 'active' : '' ?>">
                        <i class="nav-icon bi bi-hand-thumbs-up-fill"></i>
                        <p>Job Application</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?= base_url('admin/contacts') ?>" class="nav-link <?= ($current_uri == 'admin/contacts') ? 'active' : '' ?>">
                        <i class="nav-icon bi bi-question-circle-fill"></i>
                        <p>Contact Us</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?= base_url('admin/seo') ?>" class="nav-link <?= ($current_uri == 'admin/seo') ? 'active' : '' ?>">
                        <i class="nav-icon bi bi-graph-up"></i>
                        <p>SEO Management</p>
                    </a>
                </li>

                <?php
                $isBlogCategory = ($current_uri == 'admin/categories');
                $isBlogList = ($current_uri == 'admin/blogs');
                $isBlogActive = $isBlogCategory || $isBlogList;
                ?>

                <li class="nav-item <?= $isBlogActive ? 'menu-open' : '' ?>">
                    <a href="#" class="nav-link <?= $isBlogActive ? 'active' : '' ?>">
                        <i class="nav-icon bi bi-grid"></i>
                        <p>
                            Blog Management
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('admin/categories') ?>" class="nav-link <?= $isBlogCategory ? 'active' : '' ?>">
                                <i class="nav-icon bi bi-dash"></i>
                                <p>Blog Category</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('admin/blogs') ?>" class="nav-link <?= $isBlogList ? 'active' : '' ?>">
                                <i class="nav-icon bi bi-dash"></i>
                                <p>Blog List</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item d-none">
                    <a href="<?= base_url('admin/logout') ?>" class="nav-link text-danger">
                        <i class="nav-icon fs-5 bi bi-power"></i>
                        <p>Log Out</p>
                    </a>
                </li>
            </ul>
            <!--end::Sidebar Menu-->
        </nav>
    </div>
    <!--end::Sidebar Wrapper-->

    <!--begin::Sidebar Footer-->
    <div class="sidebar-footer">
        <a href="<?= base_url('admin/logout') ?>"
            class="d-flex justify-content-center align-items-center fs-6 text-danger">
            <i class="nav-icon fs-5 bi bi-power me-2"></i>Log Out
        </a>
    </div>
    <!--end::Sidebar Footer-->
</aside>
<!--end::Sidebar-->
