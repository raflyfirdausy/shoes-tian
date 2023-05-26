<aside class="left-sidebar">
    <div class="scroll-sidebar">
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <?php
                $role = $this->session->userdata(SESSION)["role"];
                if ($role == USER) {
                    $this->load->view("template/sidebar/sidebar_user");
                } else {
                    $this->load->view("template/sidebar/sidebar_superadmin");
                }
                ?>
            </ul>
        </nav>
    </div>
</aside>

<div class="page-wrapper">
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 align-self-center">
                <h4 class="page-title text-dark"><?= isset($page_title) ? $page_title : (isset($title) ? ucwords(strtolower($title)) : "")  ?></h4>
            </div>
        </div>
    </div>