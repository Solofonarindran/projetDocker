<aside class="page-sidebar">
    <div class="page-logo">
        <a href="#" class="page-logo-link press-scale-down d-flex align-items-center position-relative"
            data-toggle="modal" data-target="#modal-shortcut">
            <img src="/assets/img/logo.png" alt="SmartAdmin WebApp" aria-roledescription="logo" />
            <span class="page-logo-text mr-1">Scolarity Expert 1.0</span>
            <span class="position-absolute text-white opacity-50 small pos-top pos-right mr-2 mt-n2"></span>
            <i class="fal fa-angle-down d-inline-block ml-1 fs-lg color-primary-300"></i>
        </a>
    </div>
    <!-- BEGIN PRIMARY NAVIGATION -->
    <nav id="js-primary-nav" class="primary-nav" role="navigation">
        <div class="nav-filter">
            <div class="position-relative">
                <input type="text" id="nav_filter_input" placeholder="Filter menu" class="form-control"
                    tabindex="0"/>
                <a href="#" onclick="return false;" class="btn-primary btn-search-close js-waves-off"
                    data-action="toggle" data-class="list-filter-active" data-target=".page-sidebar">
                    <i class="fal fa-chevron-up"></i>
                </a>
            </div>
        </div>
        <div class="info-card">
            <img src="/assets/img/demo/avatars/avatar-admin.png" class="profile-image rounded-circle"
                alt="Dr. Codex Lantern" />
            <div class="info-card-text">
                <a href="#" class="d-flex align-items-center text-white">
                    <span class="text-truncate text-truncate-sm d-inline-block">
                        M. Directrice
                    </span>
                </a>
                <span class="d-inline-block text-truncate text-truncate-sm">SOAZARA Mbaraky</span>
            </div>
            <img src="/assets/img/card-backgrounds/cover-2-lg.png" class="cover" alt="cover" />
            <a href="#" onclick="return false;" class="pull-trigger-btn" data-action="toggle"
                data-class="list-filter-active" data-target=".page-sidebar" data-focus="nav_filter_input">
                <i class="fal fa-angle-down"></i>
            </a>
        </div>
        <ul id="js-nav-menu" class="nav-menu">
            <li>
                <a href="#" title="Dashboard" data-filter-tags="tableau bord">
                    <i class="fas fa-tachometer-alt"></i>
                    <span class="nav-link-text" data-i18n="nav.application_intel">Tableau de Bord</span>
                </a>
            </li>
            <li>
                <a href="#" title="Admin Classe" data-filter-tags="classe">
                    <i class="fa fa-graduation-cap"></i>
                    <span class="nav-link-text" data-i18n="nav.theme_settings">Gérance de Classe</span>
                </a>
            </li>

            <li class="nav-title">Groupe d'action</li>
            <li>
                <a href="#" title="Inscription" data-filter-tags="inscription">
                    <i class="fa fa-user-plus"></i>
                    <span class="nav-link-text" data-i18n="nav.ui_components">Gérance d'Inscription</span>
                </a>
                <ul>
                    <li>
                        <a href="#" title="Inscription" data-filter-tags="ui components alerts">
                            <span class="nav-link-text"
                                data-i18n="nav.ui_components_alerts">Inscription</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" title="Accordions" data-filter-tags="réinscription">
                            <span class="nav-link-text"
                                data-i18n="nav.ui_components_accordions">Réinscription</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#" title="Utilities" data-filter-tags="evaluation">
                    <i class="fa fa-clipboard"></i>
                    <span class="nav-link-text" data-i18n="nav.utilities">Evaluation</span>
                </a>
                <ul>
                    <li>
                        <a href="#" title="Programme" style="pointer-events:none"
                            data-filter-tags="programme scolaire">
                            <span class="nav-link-text" data-i18n="nav.utilities_color_pallet">Programme
                                Scolaire</span>
                        </a>
                    </li>

                    <li>
                        <a href="#" title="Gestion de note"
                            data-filter-tags="gestion de note">
                            <span class="nav-link-text" data-i18n="nav.utilities_spacing">Gestion des
                                Notes</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" title="Résultat"
                            data-filter-tags="résultats">
                            <span class="nav-link-text"
                                data-i18n="nav.utilities_typography">Résultats</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#" title="Financement" data-filter-tags="finance">
                    <i class="fa fa-chart-line"></i>
                    <span class="nav-link-text" data-i18n="nav.utilities">Gérance Financière</span>
                </a>
                <ul>
                    <li>
                        <a href="#" title="Ecolage"
                            data-filter-tags="ecolage frais scolaire">
                            <span class="nav-link-text" data-i18n="nav.utilities_color_pallet">Frais
                                Scolaire</span>
                        </a>
                    </li>

                    <li>
                        <a href="#" title="Salaire des Profs"
                            data-filter-tags="salariés payement">
                            <span class="nav-link-text" data-i18n="nav.utilities_spacing">Salariés</span>
                        </a>
                    </li>

                    <li>
                        <a href="utilities_spacing.html" title="Approvisionnement" style="pointer-events:none"
                            data-filter-tags="Dépense subvention">
                            <span class="nav-link-text" data-i18n="nav.utilities_spacing">Ecole</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-title">Paramètre</li>

            <li>
                <a href="#" title="Theme Settings" style="pointer-events:none" data-filter-tags="paramètre">
                    <i class="fa fa-cog"></i>
                    <span class="nav-link-text" data-i18n="nav.theme_settings">Paramètre de Compte</span>
                </a>
            </li>
        </ul>
        <div class="filter-message js-filter-message bg-success-600"></div>
    </nav>
    <!-- END PRIMARY NAVIGATION -->
    <!-- NAV FOOTER -->
    <div class="nav-footer shadow-top">
        <a href="#" onclick="return false;" data-action="toggle" data-class="nav-function-minify"
            class="hidden-md-down">
            <i class="ni ni-chevron-right"></i>
            <i class="ni ni-chevron-right"></i>
        </a>
        <ul class="list-table m-auto nav-footer-buttons">
            <li>
                <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top"
                    title="Make a call">
                    <i class="fal fa-phone">+261 34 7 500642</i>
                </a>
            </li>
        </ul>
    </div>
    <!-- END NAV FOOTER -->
</aside>
<!-- END Left Aside -->