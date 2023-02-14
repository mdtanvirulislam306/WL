<div class="nk-sidebar nk-sidebar-fixed is-theme" id="sidebar">
          <div class="nk-sidebar-element nk-sidebar-head">
            <div class="nk-sidebar-brand">
              <a href="{{ route('home') }}" class="logo-link">
                <div class="logo-wrap">
                 <img src="{{asset('assets/images/logo.png')}}"/>
                </div>
              </a>
              <div class="nk-compact-toggle me-n1">
                <button class="btn btn-md btn-icon text-light btn-no-hover compact-toggle">
                  <em class="icon off ni ni-chevrons-left"></em>
                  <em class="icon on ni ni-chevrons-right"></em>
                </button>
              </div>
              <div class="nk-sidebar-toggle me-n1">
                <button class="btn btn-md btn-icon text-light btn-no-hover sidebar-toggle">
                  <em class="icon ni ni-arrow-left"></em>
                </button>
              </div>
            </div>
          </div>
          <div class="nk-sidebar-element nk-sidebar-body">
            <div class="nk-sidebar-content">
              <div class="nk-sidebar-menu" data-simplebar>
                <ul class="nk-menu">
                  <li class="nk-menu-item">
                    <a href="{{ route('home') }}" class="nk-menu-link">
                      <span class="nk-menu-icon">
                        <em class="icon ni ni-dashboard"></em>
                      </span>
                      <span class="nk-menu-text">Dashboard</span>
                    </a>
                  </li>
                  <!-- Service-->
                  <li class="nk-menu-item has-sub">
                    <a href="#" class="nk-menu-link nk-menu-toggle">
                      <span class="nk-menu-icon">
                        <em class="icon ni ni-list-round"></em>
                      </span>
                      <span class="nk-menu-text">Service</span>
                    </a>
                    <ul class="nk-menu-sub">
                      <li class="nk-menu-item">
                        <a href="{{route('it-sevice')}}" class="nk-menu-link">
                          <span class="nk-menu-text">IT Service</span>
                        </a>
                      </li>
                      <li class="nk-menu-item">
                        <a href="service.html" class="nk-menu-link">
                          <span class="nk-menu-text">ISP Service</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <!-- Order-->
                  <li class="nk-menu-item has-sub">
                    <a href="#" class="nk-menu-link nk-menu-toggle">
                      <span class="nk-menu-icon">
                        <em class="icon ni ni-bag"></em>
                      </span>
                      <span class="nk-menu-text">Order</span>
                    </a>
                    <ul class="nk-menu-sub">
                      <li class="nk-menu-item">
                        <a href="service.html" class="nk-menu-link">
                          <span class="nk-menu-text">IT Order</span>
                        </a>
                      </li>
                      <li class="nk-menu-item">
                        <a href="service.html" class="nk-menu-link">
                          <span class="nk-menu-text">ISP Order</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <!-- Customer Support -->
                  <li class="nk-menu-item has-sub">
                    <a href="#" class="nk-menu-link nk-menu-toggle">
                      <span class="nk-menu-icon">
                        <em class="icon ni ni-headphone"></em>
                      </span>
                      <span class="nk-menu-text">Customer Support</span>
                    </a>
                    <ul class="nk-menu-sub">
                      <li class="nk-menu-item">
                        <a href="service.html" class="nk-menu-link">
                          <span class="nk-menu-text">Customer List</span>
                        </a>
                      </li>
                      <li class="nk-menu-item">
                        <a href="service.html" class="nk-menu-link">
                          <span class="nk-menu-text">Customer Issue</span>
                        </a>
                      </li>
                      <li class="nk-menu-item">
                        <a href="service.html" class="nk-menu-link">
                          <span class="nk-menu-text">Chat with customer</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <!-- Marketing and Offer -->
                  <li class="nk-menu-item has-sub">
                    <a href="#" class="nk-menu-link nk-menu-toggle">
                      <span class="nk-menu-icon">
                        <em class="icon ni ni-offer"></em>
                      </span>
                      <span class="nk-menu-text">Marketing & Offer</span>
                    </a>
                    <ul class="nk-menu-sub">
                      <li class="nk-menu-item">
                        <a href="service.html" class="nk-menu-link">
                          <span class="nk-menu-text">Sms marketing</span>
                        </a>
                      </li>
                      <li class="nk-menu-item">
                        <a href="service.html" class="nk-menu-link">
                          <span class="nk-menu-text">Push Notification marketing</span>
                        </a>
                      </li>
                      <li class="nk-menu-item">
                        <a href="service.html" class="nk-menu-link">
                          <span class="nk-menu-text">Email Marketing</span>
                        </a>
                      </li>
                      <li class="nk-menu-item">
                        <a href="service.html" class="nk-menu-link">
                          <span class="nk-menu-text">Offer</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <!-- Report -->
                  <li class="nk-menu-item has-sub">
                    <a href="#" class="nk-menu-link nk-menu-toggle">
                      <span class="nk-menu-icon">
                        <em class="icon ni ni-growth"></em>
                      </span>
                      <span class="nk-menu-text">Report</span>
                    </a>
                    <ul class="nk-menu-sub">
                      <li class="nk-menu-item">
                        <a href="service.html" class="nk-menu-link">
                          <span class="nk-menu-text">Sale Report</span>
                        </a>
                      </li>
                      <li class="nk-menu-item">
                        <a href="service.html" class="nk-menu-link">
                          <span class="nk-menu-text">Service Wise Sale report</span>
                        </a>
                      </li>
                      <li class="nk-menu-item">
                        <a href="service.html" class="nk-menu-link">
                          <span class="nk-menu-text">Visitor report</span>
                        </a>
                      </li>
                      <li class="nk-menu-item">
                        <a href="service.html" class="nk-menu-link">
                          <span class="nk-menu-text">Due Report</span>
                        </a>
                      </li>
                      <li class="nk-menu-item">
                        <a href="service.html" class="nk-menu-link">
                          <span class="nk-menu-text">Issue Report</span>
                        </a>
                      </li>
                      <li class="nk-menu-item">
                        <a href="service.html" class="nk-menu-link">
                          <span class="nk-menu-text">Support Report</span>
                        </a>
                      </li>
                      <li class="nk-menu-item">
                        <a href="service.html" class="nk-menu-link">
                          <span class="nk-menu-text">Support Report</span>
                        </a>
                      </li>
                      <li class="nk-menu-item">
                        <a href="service.html" class="nk-menu-link">
                          <span class="nk-menu-text">User Access Report</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                   <!-- Blog System -->
                   <li class="nk-menu-item has-sub">
                    <a href="#" class="nk-menu-link nk-menu-toggle">
                      <span class="nk-menu-icon">
                        <em class="icon ni ni-globe"></em>
                      </span>
                      <span class="nk-menu-text">Blog System</span>
                    </a>
                    <ul class="nk-menu-sub">
                      <li class="nk-menu-item">
                        <a href="service.html" class="nk-menu-link">
                          <span class="nk-menu-text">Blog</span>
                        </a>
                      </li>
                      <li class="nk-menu-item">
                        <a href="service.html" class="nk-menu-link">
                          <span class="nk-menu-text">Categories</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <!-- User Management -->
                  <li class="nk-menu-item ">
                    <a href="#" class="nk-menu-link">
                      <span class="nk-menu-icon">
                        <em class="icon ni ni-users"></em>
                      </span>
                      <span class="nk-menu-text">User Management</span>
                    </a>
                  </li>
                  <!-- Role & Permission -->
                  <li class="nk-menu-item ">
                    <a href="#" class="nk-menu-link">
                      <span class="nk-menu-icon">
                        <em class="icon ni ni-account-setting-alt"></em>
                      </span>
                      <span class="nk-menu-text">Role & Permission</span>
                    </a>
                  </li>
                  <!-- Settings -->
                  <li class="nk-menu-item has-sub">
                    <a href="#" class="nk-menu-link nk-menu-toggle">
                      <span class="nk-menu-icon">
                        <em class="icon ni ni-setting"></em>
                      </span>
                      <span class="nk-menu-text">Settings</span>
                    </a>
                    <ul class="nk-menu-sub">
                        <li class="nk-menu-item">
                          <a href="service.html" class="nk-menu-link">
                            <span class="nk-menu-text">System Settings</span>
                          </a>
                        </li>
                        <li class="nk-menu-item">
                            <a href="service.html" class="nk-menu-link">
                              <span class="nk-menu-text">Website Settings</span>
                            </a>
                          </li>
                      </ul>
                  </li>
                  <!-- <li class="nk-menu-heading">
                    <h6 class="overline-title">Applications</h6>
                  </li> -->
                   <!-- Database backup -->
                   <li class="nk-menu-item ">
                    <a href="#" class="nk-menu-link">
                      <span class="nk-menu-icon">
                        <em class="icon ni ni-db"></em>
                      </span>
                      <span class="nk-menu-text">Database backup</span>
                    </a>
                  </li>
                  <!-- System backup -->
                  <li class="nk-menu-item ">
                    <a href="#" class="nk-menu-link">
                      <span class="nk-menu-icon">
                        <em class="icon ni ni-hard-drive"></em>
                      </span>
                      <span class="nk-menu-text">System backup</span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>