<header class="page-header" role="banner">
    <!-- we need this logo when user switches to nav-function-top -->
    <div class="page-logo">
        <a href="#" class="page-logo-link press-scale-down d-flex align-items-center position-relative"
            data-toggle="modal" data-target="#modal-shortcut">
            <img src="/assets/img/logo.png" alt="SmartAdmin WebApp" aria-roledescription="logo" />
            <span class="page-logo-text mr-1">Scolarity WebApp</span>
            <span
                class="position-absolute text-white opacity-50 small pos-top pos-right mr-2 mt-n2"></span>
            <i class="fal fa-angle-down d-inline-block ml-1 fs-lg color-primary-300"></i>
        </a>
    </div>
    <!-- DOC: nav menu layout change shortcut -->
    <div class="hidden-md-down dropdown-icon-menu position-relative">
        <a href="#" class="header-btn btn js-waves-off" data-action="toggle"
            data-class="nav-function-hidden" title="Hide Navigation">
            <i class="ni ni-menu"></i>
        </a>
        <ul>
            <li>
                <a href="#" class="btn js-waves-off" data-action="toggle"
                    data-class="nav-function-minify" title="Minify Navigation">
                    <i class="ni ni-minify-nav"></i>
                </a>
            </li>
            <li>
                <a href="#" class="btn js-waves-off" data-action="toggle"
                    data-class="nav-function-fixed" title="Lock Navigation">
                    <i class="ni ni-lock-nav"></i>
                </a>
            </li>
        </ul>
    </div>
    <!-- DOC: mobile button appears during mobile width -->
    <div class="hidden-lg-up">
        <a href="#" class="header-btn btn press-scale-down" data-action="toggle"
            data-class="mobile-nav-on">
            <i class="ni ni-menu"></i>
        </a>
    </div>
    <div class="search">
        <form class="app-forms hidden-xs-down" role="search" action="page_search.html"
            autocomplete="off">
            <input type="text" id="search-field" placeholder="Tapez Recherche" class="form-control"
                tabindex="1" />
            <a href="#" onclick="return false;" class="btn-danger btn-search-close js-waves-off d-none"
                data-action="toggle" data-class="mobile-search-on">
                <i class="fal fa-times"></i>
            </a>
        </form>
    </div>
    <div class="ml-auto d-flex">
        <!-- activate app search icon (mobile) -->
        <div class="hidden-sm-up">
            <a href="#" class="header-icon" data-action="toggle" data-class="mobile-search-on"
                data-focus="search-field" title="Search">
                <i class="fal fa-search"></i>
            </a>
        </div>
        <!-- app settings -->
        <div class="hidden-md-down">
            <a href="#" class="header-icon" data-toggle="modal" data-target=".js-modal-settings">
                <i class="fal fa-cog"></i>
            </a>
        </div>

        <!-- app notification -->
        <div>
            <a href="#" class="header-icon" data-toggle="dropdown" title="You got 11 notifications">
                <i class="fal fa-bell"></i>
                <span class="badge badge-icon">1</span>
            </a>
            <div class="dropdown-menu dropdown-menu-animated dropdown-xl">
                <div
                    class="dropdown-header bg-trans-gradient d-flex justify-content-center align-items-center rounded-top mb-2">
                    <h4 class="m-0 text-center color-white">
                        1 New
                        <small class="mb-0 opacity-80">User Notifications</small>
                    </h4>
                </div>
                <ul class="nav nav-tabs nav-tabs-clean" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link px-4 fs-md js-waves-on fw-500" data-toggle="tab"
                            href="#tab-events" data-i18n="drpdwn.events">Events</a>
                    </li>
                </ul>
                <div class="tab-content tab-notification">
                    <div class="tab-pane active p-3 text-center">
                        <h5 class="mt-4 pt-4 fw-500">
                            <span class="d-block fa-3x pb-4 text-muted">
                                <i class="ni ni-arrow-up text-gradient opacity-70"></i>
                            </span>
                            Select a tab above to activate
                            <small class="mt-3 fs-b fw-400 text-muted">
                                This blank page message helps protect your privacy, or
                                you can show the first message here automatically
                                through
                                <a href="#">settings page</a>
                            </small>
                        </h5>
                    </div>

                    <div class="tab-pane" id="tab-events" role="tabpanel">
                        <div class="d-flex flex-column h-100">
                            <div class="h-auto">
                                <table
                                    class="table table-bordered table-calendar m-0 w-100 h-100 border-0">
                                    <tr>
                                        <th colspan="7" class="pt-3 pb-2 pl-3 pr-3 text-center">
                                            <div class="js-get-date h5 mb-2">
                                                [your date here]
                                            </div>
                                        </th>
                                    </tr>
                                    <tr class="text-center">
                                        <th>Sun</th>
                                        <th>Mon</th>
                                        <th>Tue</th>
                                        <th>Wed</th>
                                        <th>Thu</th>
                                        <th>Fri</th>
                                        <th>Sat</th>
                                    </tr>
                                    <tr>
                                        <td class="text-muted bg-faded">30</td>
                                        <td>1</td>
                                        <td>2</td>
                                        <td>3</td>
                                        <td>4</td>
                                        <td>5</td>
                                        <td>
                                            <i
                                                class="fal fa-birthday-cake mt-1 ml-1 position-absolute pos-left pos-top text-primary"></i>
                                            6
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>8</td>
                                        <td>9</td>
                                        <td class="bg-primary-300 pattern-0">10</td>
                                        <td>11</td>
                                        <td>12</td>
                                        <td>13</td>
                                    </tr>
                                    <tr>
                                        <td>14</td>
                                        <td>15</td>
                                        <td>16</td>
                                        <td>17</td>
                                        <td>18</td>
                                        <td>19</td>
                                        <td>20</td>
                                    </tr>
                                    <tr>
                                        <td>21</td>
                                        <td>22</td>
                                        <td>23</td>
                                        <td>24</td>
                                        <td>25</td>
                                        <td>26</td>
                                        <td>27</td>
                                    </tr>
                                    <tr>
                                        <td>28</td>
                                        <td>29</td>
                                        <td>30</td>
                                        <td>31</td>
                                        <td class="text-muted bg-faded">1</td>
                                        <td class="text-muted bg-faded">2</td>
                                        <td class="text-muted bg-faded">3</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="flex-1 custom-scroll">
                                <div class="p-2">
                                    <div class="d-flex align-items-center text-left mb-3">
                                        <div
                                            class="width-5 fw-300 text-primary l-h-n mr-1 align-self-start fs-xxl">
                                            15
                                        </div>
                                        <div class="flex-1">
                                            <div class="d-flex flex-column">
                                                <span class="l-h-n fs-md fw-500 opacity-70">
                                                    October 2020
                                                </span>
                                                <span class="l-h-n fs-nano fw-400 text-secondary">
                                                    Friday
                                                </span>
                                            </div>
                                            <div class="mt-3">
                                                <p>
                                                    <strong>2:30PM</strong> - Doctor's
                                                    appointment
                                                </p>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="py-2 px-3 bg-faded d-block rounded-bottom text-right border-faded border-bottom-0 border-right-0 border-left-0">
                    <a href="#" class="fs-xs fw-500 ml-auto">view all notifications</a>
                </div>
            </div>
        </div>
        <!-- app user menu -->
        <div>
            <a href="#" data-toggle="dropdown" title="drlantern@gotbootstrap.com"
                class="header-icon d-flex align-items-center justify-content-center ml-2">
                <img src="/assets/img/demo/avatars/avatar-admin.png" class="profile-image rounded-circle"
                    alt="Dr. Soazara Mbaraky" />
                <!-- you can also add username next to the avatar with the codes below:
                    <span class="ml-1 mr-1 text-truncate text-truncate-header hidden-xs-down">Me</span>
                    <i class="ni ni-chevron-down hidden-xs-down"></i> -->
            </a>
            <div class="dropdown-menu dropdown-menu-animated dropdown-lg">
                <div class="dropdown-header bg-trans-gradient d-flex flex-row py-4 rounded-top">
                    <div class="d-flex flex-row align-items-center mt-1 mb-1 color-white">
                        <span class="mr-2">
                            <img src="/assets/img/demo/avatars/avatar-admin.png"
                                class="rounded-circle profile-image" alt="Dr. Codex Lantern" />
                        </span>
                        <div class="info-card-text">
                            @if (Auth()->user())
                                <div class="fs-lg text-truncate text-truncate-lg">
                                    Dr. SOAZARA
                                </div>
                                <span
                                    class="text-truncate text-truncate-md opacity-80">{{Auth()->user()->email}}</span>
                                
                            @endif
                            
                        </div>
                    </div>
                </div>
                <div class="dropdown-divider m-0"></div>

                <a href="#" class="dropdown-item" data-toggle="modal" data-target=".js-modal-settings">
                    <span data-i18n="drpdwn.settings">Settings</span>
                </a>
                <div class="dropdown-divider m-0"></div>
                <a href="#" class="dropdown-item" data-action="app-fullscreen">
                    <span data-i18n="drpdwn.fullscreen">Fullscreen</span>
                    <i class="float-right text-muted fw-n">F11</i>
                </a>
                <a href="#" class="dropdown-item" data-action="app-print">
                    <span data-i18n="drpdwn.print">Print</span>
                    <i class="float-right text-muted fw-n">Ctrl + P</i>
                </a>

                <div class="dropdown-divider m-0"></div>
                <a class="dropdown-item fw-500 pt-3 pb-3" href="">
                    <span data-i18n="drpdwn.page-logout">Logout</span>
                    @if (Auth()->user())
                        <span class="float-right fw-n">&commat;{{Auth()->user()->email}}</span>
                    @endif
                    
                </a>
            </div>
        </div>
    </div>
</header>
