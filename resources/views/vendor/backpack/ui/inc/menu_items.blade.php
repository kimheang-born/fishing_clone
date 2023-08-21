{{-- This file is used for menu items by any Backpack v6 theme --}}
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>

<x-backpack::menu-item title="Products" icon="la la-question" :link="backpack_url('product')" />
<x-backpack::menu-item title='Logs' icon='la la-terminal' :link="backpack_url('log')" />
<x-backpack::menu-item title='Settings' icon='la la-cog' :link="backpack_url('setting')" />