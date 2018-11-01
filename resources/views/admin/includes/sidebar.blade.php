<!--sidebar-menu-->
<div id="sidebar"><a href="{{ route('admin.dashboard') }}" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
  <ul>
    <li ><a href="{{ route('admin.dashboard') }}"><i class="icon icon-home"></i> <span>{{ 'Dashboard' }}</span></a> </li>
    <li @if(!empty($pages)) class="active"  @endif > <a href="/adm/static"><i class="icon icon-signal"></i> <span>Static</span></a> </li>
    <li @if(!empty($projects)) class="active"  @endif > <a href="/adm/projects"><i class="icon icon-wrench"></i> <span>Projects</span></a> </li>
  </ul>
</div>
<!--sidebar-menu-->