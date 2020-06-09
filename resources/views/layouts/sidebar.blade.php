<div class="site-menubar side-menubar-dark">
    <div class="site-menubar-body side-menubar-dark">
        <div>
            <div>
                <ul class="site-menu" data-plugin="menu">
                  <li class="site-menu-category"></li>
                  <li class="site-menu-item {{request()->is('admin')? 'active':''}}">
                      <a class="animsition-link" href="{{ url('admin') }}">
                          <i class="site-menu-icon md-view-dashboard" aria-hidden="true"></i>
                          <span class="site-menu-title">Dashboard</span>
                      </a>
                  </li>
                  <li class="site-menu-item {{request()->is('admin/backups')? 'active':''}}">
                      <a class="animsition-link" href="{{ url('admin/backups') }}">
                          <i class="site-menu-icon md-cloud-circle" aria-hidden="true"></i>
                          <span class="site-menu-title">Backups</span>
                      </a>
                  </li>
                </ul>   
            </div>
        </div>
    </div>
    <div class="site-menubar-footer">
      <a href="{{ url('admin') }}" class="fold-show" data-placement="top" data-toggle="tooltip"
        data-original-title="Settings">
        <span class="icon md-view-dashboard" aria-hidden="true"></span>
      </a>
      <a href="{{ url('profile') }}" data-placement="top" data-toggle="tooltip" data-original-title="Profile">
        <span class="icon md-account" aria-hidden="true"></span>
      </a>
      <a href="javascript: void(0);" data-placement="top" data-toggle="tooltip" data-original-title="Logout"  onclick="event.preventDefault();document.getElementById('logout-form').submit();">
        <span class="icon md-power" aria-hidden="true"></span>
      </a>
    </div>
</div>    