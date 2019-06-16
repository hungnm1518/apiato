<template>
  <AppHeaderDropdown right no-caret>
    <template slot="header">
      <i class="icon-bell"></i><b-badge pill variant="danger">{{itemsCount}}</b-badge>
    </template>
    <template slot="dropdown">
      <b-dropdown-header tag="div" class="dropdown-menu-lg text-center"><strong>You have {{itemsCount}} notifications</strong></b-dropdown-header>
      <b-dropdown-item><i class="icon-user-follow text-success"></i> New user registered</b-dropdown-item>
      <b-dropdown-item><i class="icon-user-unfollow text-danger"></i> User deleted</b-dropdown-item>
      <b-dropdown-item><i class="icon-chart text-info"></i> Sales report is ready</b-dropdown-item>
      <b-dropdown-item><i class="icon-basket-loaded text-primary"></i> New client</b-dropdown-item>
      <b-dropdown-item><i class="icon-speedometer text-warning"></i> Server overloaded</b-dropdown-item>
      <b-dropdown-header tag="div" class="text-center"><strong>Server</strong></b-dropdown-header>
      <b-dropdown-item>
        <div class="text-uppercase mb-1">
          <small><b>CPU Usage</b></small>
        </div>
        <b-progress height={} class="progress-xs" variant="info" :value="25"/>
        <small class="text-muted">348 Processes. 1/4 Cores.</small>
      </b-dropdown-item>
      <b-dropdown-item>
        <div class="text-uppercase mb-1">
          <small><b>Memory Usage</b></small>
        </div>
        <b-progress height={} class="progress-xs" variant="warning" :value="70"/>
        <small class="text-muted">11444GB/16384MB</small>
      </b-dropdown-item>
      <b-dropdown-item>
        <div class="text-uppercase mb-1">
          <small><b>SSD 1 Usage</b></small>
        </div>
        <b-progress height={} class="progress-xs" variant="danger" :value="90"/>
        <small class="text-muted">243GB/256GB</small>
      </b-dropdown-item>
    </template>
  </AppHeaderDropdown>
</template>
<script>
import { HeaderDropdown as AppHeaderDropdown } from '@coreui/vue'
export default {
  name: 'DefaultHeaderDropdownNotif',
  components: {
    AppHeaderDropdown
  },
  data: () => {
    return { itemsCount: 5 }
  }
}
</script>
