<template>
<nav class="navbar-vertical navbar">
    <div class="nav-scroller">
        <!-- Brand logo -->
        <a class="navbar-brand" href="../index.html">
            <img src="../assets/images/brand/logo/logo.svg" alt="" />
        </a>
        <!-- Navbar nav -->
        <ul class="navbar-nav flex-column" id="sideNavbar">
            <li class="nav-item">
                <router-link class="nav-link has-arrow " to="/admin/dashboard">
                    <i data-feather="home" class="nav-icon icon-xs me-2"></i>  Dashboard
                </router-link>

            </li>


         <!-- Nav item -->
         <li class="nav-item">
            <div class="navbar-heading">Layouts & Pages</div>
        </li>


             <!-- Nav item -->
             <li class="nav-item">
                <a class="nav-link has-arrow  collapsed " href="#!" data-bs-toggle="collapse" data-bs-target="#navPages" aria-expanded="false" aria-controls="navPages">
                    <i
                    data-feather="layers"

                    class="nav-icon icon-xs me-2">
                </i> Pages
                </a>

                <div id="navPages" class="collapse " data-bs-parent="#sideNavbar">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link " href="../pages/profile.html">
                                Profile
                </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link has-arrow   "  href="../pages/settings.html" >
                                Settings
                                </a>

                        </li>


                        <li class="nav-item">
                            <a class="nav-link " href="../pages/billing.html">
                                Billing
                </a>
                        </li>




                        <li class="nav-item">
                            <a class="nav-link " href="../pages/pricing.html">
                               Pricing
                </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="../pages/404-error.html">
                                404 Error
                </a>
                        </li>
                    </ul>
                </div>

                </li>


                        <!-- Nav item -->
                        <li class="nav-item">
                            <a class="nav-link has-arrow  collapsed " href="#!" data-bs-toggle="collapse" data-bs-target="#navAuthentication" aria-expanded="false" aria-controls="navAuthentication">
                                <i data-feather="lock" class="nav-icon icon-xs me-2">
                                </i> Authentication
                            </a>
                            <div id="navAuthentication" class="collapse " data-bs-parent="#sideNavbar">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link " href="../pages/sign-in.html"> Sign In</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link  " href="../pages/sign-up.html"> Sign Up</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="../pages/forget-password.html">
                                             Forget Password
                                </a>
                                    </li>

                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="../pages/layout.html">
                                <i
                                    data-feather="sidebar"

                                    class="nav-icon icon-xs me-2"
                                >
                                </i
                                      >
                                Layouts
                            </a>
                        </li>

                        <!-- Nav item -->
                        <li class="nav-item">
                            <div class="navbar-heading">UI Components</div>
                        </li>

                        <!-- Nav item -->
                        <li class="nav-item">
                            <a class="nav-link has-arrow  collapsed " href="#!" data-bs-toggle="collapse" data-bs-target="#navComponents" aria-expanded="false" aria-controls="navComponents">
                                <i data-feather="database" class="nav-icon icon-xs me-2" >
                            </i> Components
                            </a>
                            <div id="navComponents" class="collapse " data-bs-parent="#sideNavbar">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link " href="../components/accordions.html" aria-expanded="false">
                                              Accordions
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="../components/alerts.html" aria-expanded="false">
                                              Alerts
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="../components/badge.html" aria-expanded="false">
                                             Badge
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="../components/breadcrumb.html" aria-expanded="false">
                                            Breadcrumb
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="../components/button.html" aria-expanded="false">
                                             Button
                                        </a>
                                    </li>

                                <li class="nav-item">
                                    <a class="nav-link " href="../components/button-group.html" aria-expanded="false">
                                        Button group
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="../components/card.html" aria-expanded="false">
                                          Card
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="../components/carousel.html" aria-expanded="false">
                                         Carousel
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="../components/collapse.html" aria-expanded="false">
                                         Collapse
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="../components/dropdowns.html" aria-expanded="false">
                                         Dropdowns
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="../components/forms.html" aria-expanded="false">
                                         Forms
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="../components/input-group.html" aria-expanded="false">
                                         Input group
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="../components/list-group.html" aria-expanded="false">
                                         List group
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link " href="../components/modal.html" aria-expanded="false">
                                         Modal
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="../components/navs.html" aria-expanded="false">
                                        Navs
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="../components/navbar.html" aria-expanded="false">
                                         Navbar
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="../components/offcanvas.html" aria-expanded="false">
                                         Offcanvas
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="../components/pagination.html" aria-expanded="false">
                                         Pagination
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="../components/popovers.html" aria-expanded="false">
                                         Popovers
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="../components/progress.html" aria-expanded="false">
                                         Progress
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="../components/scrollspy.html" aria-expanded="false">
                                         Scrollspy
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="../components/spinners.html" aria-expanded="false">
                                         Spinners
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="../components/toasts.html" aria-expanded="false">
                                         Toasts
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="../components/tooltips.html" aria-expanded="false">
                                         Tooltips
                                    </a>
                                </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  active " href="../pages/tables.html">
                                <i


                                    class="nav-icon icon-xs me-2 bi bi-table"
                                >
                                </i
                                      >
                                Tables
                            </a>
                        </li>

                            <!-- Nav item -->
                            <li class="nav-item">
                                <a class="nav-link has-arrow  collapsed " href="#!" data-bs-toggle="collapse" data-bs-target="#navUtilities" aria-expanded="false" aria-controls="navUtilities">
                                    <i data-feather="database" class="nav-icon icon-xs me-2" >
                                </i> Utilities
                                </a>
                                <div id="navUtilities" class="collapse " data-bs-parent="#sideNavbar">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link " href="../components/typography.html" aria-expanded="false">
                                                  Typography
                                            </a>
                                        </li>
                                            <li class="nav-item">
                                                <a class="nav-link " href="../components/borders.html" aria-expanded="false">
                                                     Borders
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                              <a class="nav-link " href="../components/colors.html" aria-expanded="false">
                                                 Colors
                                              </a>
                                          </li>
                                          <li class="nav-item">
                                            <a class="nav-link " href="../components/shadows.html" aria-expanded="false">
                                                  Shadows
                                            </a>
                                        </li>
                                        </ul>
                                        </div>
                                        </li>
                                        <!-- Nav item -->
                        <li class="nav-item">
                            <a class="nav-link has-arrow  collapsed " href="#!" data-bs-toggle="collapse" data-bs-target="#navMenuLevel" aria-expanded="false" aria-controls="navMenuLevel">
                                <i
                                data-feather="corner-left-down"

                                class="nav-icon icon-xs me-2"
                            >
                            </i
                                      > Menu Level
                            </a>
                            <div id="navMenuLevel" class="collapse " data-bs-parent="#sideNavbar">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link has-arrow " href="#!" data-bs-toggle="collapse" data-bs-target="#navMenuLevelSecond" aria-expanded="false" aria-controls="navMenuLevelSecond">
                                    Two Level
                                </a>
                                        <div id="navMenuLevelSecond" class="collapse" data-bs-parent="#navMenuLevel">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a class="nav-link " href="#!">  NavItem 1</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link " href="#!">  NavItem 2</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link has-arrow  collapsed  " href="#!" data-bs-toggle="collapse" data-bs-target="#navMenuLevelThree" aria-expanded="false" aria-controls="navMenuLevelThree">
                                    Three Level
                                </a>
                                        <div id="navMenuLevelThree" class="collapse " data-bs-parent="#navMenuLevel">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a class="nav-link  collapsed " href="#!" data-bs-toggle="collapse" data-bs-target="#navMenuLevelThreeOne" aria-expanded="false" aria-controls="navMenuLevelThreeOne">
                                                         NavItem 1
                                            </a>
                                                    <div id="navMenuLevelThreeOne" class="collapse collapse " data-bs-parent="#navMenuLevelThree">
                                                        <ul class="nav flex-column">
                                                            <li class="nav-item">
                                                                <a class="nav-link " href="#!">
                                                                     NavChild Item 1
                                                        </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link " href="#!">  Nav Item 2</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>

                                         <!-- Nav item -->
                        <li class="nav-item">
                            <div class="navbar-heading">Documentation</div>
                        </li>

                        <!-- Nav item -->
                        <li class="nav-item">
                            <a class="nav-link has-arrow " href="../docs/index.html" >
                                <i data-feather="clipboard" class="nav-icon icon-xs me-2" >
                            </i>  Docs
                            </a>
                         </li>




                    </ul>

                </div>
</nav>
</template>
<script>

import feather from 'feather-icons'
import $ from 'jquery'
export default {
    mounted() {
        feather.replace();
        if ($(".nav-scroller").length) {
            $(".nav-scroller").slimScroll({
                height: "90%",
            });
        }
        // Menu toggle for admin dashboard

        if ($("#nav-toggle").length) {

            $("#nav-toggle").on("click", function(e) {
                console.log('toogle 1')
                e.preventDefault();
                $("#db-wrapper").toggleClass("toggled");
            });

        }
    },
}
</script>
