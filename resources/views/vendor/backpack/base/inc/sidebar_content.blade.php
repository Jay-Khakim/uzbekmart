<!-- This file is used to store sidebar items, starting with Backpack\Base 0.9.0 -->


<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>
<!-- Companies -->
<li class="nav-item nav-dropdown">
	<a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon la la-building"></i> For comapnies</a>
	<ul class="nav-dropdown-items">
	<li class='nav-item'><a class='nav-link' href='{{ backpack_url('category') }}'><i class='nav-icon la la-bars'></i> Categories</a></li>
    <li class='nav-item'><a class='nav-link' href='{{ backpack_url('subcategory') }}'><i class='nav-icon la la-bars'></i> Subcategories</a></li>
    <li class='nav-item'><a class='nav-link' href='{{ backpack_url('company') }}'><i class='nav-icon la la-building'></i> Companies</a></li>
    <li class='nav-item'><a class='nav-link' href='{{ backpack_url('product') }}'><i class='nav-icon la la-product-hunt'></i> Products</a></li>
	</ul>
</li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('banners') }}'><i class='nav-icon la la-images'></i> Banners</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('blog') }}'><i class='nav-icon la la-blog'></i> Blogs</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('buyrequest') }}'><i class='nav-icon la la-money-check-alt'></i> Buyrequests</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('tag') }}'><i class='nav-icon la la-tag'></i> Tags</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('investment') }}'><i class='nav-icon la la-money'></i> Investments</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('service') }}'><i class='nav-icon la la-user'></i> Services</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('message') }}'><i class='nav-icon la la-sms'></i> Messages</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('subscribe') }}'><i class='nav-icon la la-envelope'></i> Subscribes</a></li>


<li class="nav-item nav-dropdown">
	<a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon la la-users-cog"></i> For Admins</a>
	<ul class="nav-dropdown-items">
    <li class='nav-item'><a class='nav-link' href='{{ backpack_url('log') }}'><i class='nav-icon la la-terminal'></i> Logs</a></li>
    <li class='nav-item'><a class='nav-link' href='{{ backpack_url('backup') }}'><i class='nav-icon la la-hdd-o'></i> Backups</a></li>
	</ul>
</li>

<!-- Users, Roles, Permissions -->
<li class="nav-item nav-dropdown">
	<a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon la la-users"></i> Authentication</a>
	<ul class="nav-dropdown-items">
	  <li class="nav-item"><a class="nav-link" href="{{ backpack_url('user') }}"><i class="nav-icon la la-user"></i> <span>Users</span></a></li>
	  <li class="nav-item"><a class="nav-link" href="{{ backpack_url('role') }}"><i class="nav-icon la la-id-badge"></i> <span>Roles</span></a></li>
	  <li class="nav-item"><a class="nav-link" href="{{ backpack_url('permission') }}"><i class="nav-icon la la-key"></i> <span>Permissions</span></a></li>
	</ul>
</li>
{{-- <li class='nav-item'><a class='nav-link' href='{{ backpack_url('blog') }}'><i class='nav-icon la la-question'></i> Blogs</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('buyrequest') }}'><i class='nav-icon la la-question'></i> Buyrequests</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('category') }}'><i class='nav-icon la la-question'></i> Categories</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('company') }}'><i class='nav-icon la la-question'></i> Companies</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('investment') }}'><i class='nav-icon la la-question'></i> Investments</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('banners') }}'><i class='nav-icon la la-question'></i> Banners</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('product') }}'><i class='nav-icon la la-question'></i> Products</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('service') }}'><i class='nav-icon la la-question'></i> Services</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('subcategory') }}'><i class='nav-icon la la-question'></i> Subcategories</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('tag') }}'><i class='nav-icon la la-question'></i> Tags</a></li> --}}