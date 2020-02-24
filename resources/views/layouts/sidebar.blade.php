<div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
        <img src="{{ asset('dist/img/'.auth()->user()->getLoggedInChurchLogo()) }}" alt="User Image" class="iimg-circle elevation-2" style="border-radius:100%; width:55px;height:60px;">
          {{--<img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">--}}
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ auth()->user()->name }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          @if(auth()->user()->church_id == 1)
          <li class="nav-item has-treeview menu-open" @if(\Request::route()->getName() == "home")class="active" @endif>
            <a href="/home" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Home
               </p>
               </a>
          </li>
          <li class="nav-item" @if(\Request::route()->getName() == "Groups")class="active" @endif>
            <a href="/groups" class="nav-link">
              <i class="nav-icon fa fa-book"></i>
              <p>
                Groups
                
              </p>
            </a>
          </li>
          @endif
          <li class="nav-item has-treeview" @if(\Request::route()->getName() == "Users")class="active" @endif>
            <a href="/user" class="nav-link">
              <i class="nav-icon fa fa-user"></i>
              <p>
                Users 
              </p>
            </a> 
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-phone"></i>
              <p>
                Contacts
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item" @if(\Request::route()->getName() == "")class="active" @endif>
                <a href="/contact-groups" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Contacts groups</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-envelope"></i>
              <p>
                Messages
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview" @if(\Request::route()->getName() == "")class="active" @endif>
              <li class="nav-item">
                <a href="/sent-quick-messages" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Quick Messages</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/display-sent-messages" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sent Messages</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/display-scheduled-messages" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Scheduled Messages</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/message-categories" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Message Categories</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/incoming-messages" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Incoming Messages</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/uncategorized-messages" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Uncategorized Messages</p>
                </a>
              </li>
              {{--
              <li class="nav-item">
                <a href="/deleted-messages" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Deleted Messages</p>
                </a>
              </li>
              --}}
              @if(auth()->user()->id == 1)
              <li class="nav-item">
                <a href="/contact-not-found-messages" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Wrong Contact Messages</p>
                </a>
              </li>
              @endif
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-credit-card"></i>
              <p>
                Payments
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/packages" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Packages</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/logs" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Logs</p>
                </a>
              </li> 
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="/roles-and-permision" class="nav-link">
              <i class="nav-icon fa fa-key"></i>
              <p>
                User Permissions
              </p>
            </a>
          </li> 
          <li class="nav-item has-treeview" @if(\Request::route()->getName() == "Change Password")class="active" @endif>
            <a href="/change-passwords" class="nav-link">
              <i class="nav-icon fa fa-lock"></i>
              <p>
                Change Password 
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>