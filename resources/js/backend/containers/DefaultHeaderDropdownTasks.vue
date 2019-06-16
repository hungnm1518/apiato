<template>
  <AppHeaderDropdown right no-caret>
    <template slot="header">
      <i class="icon-list"></i><b-badge pill variant="warning">{{itemsCount}}</b-badge>
    </template>
    <template slot="dropdown">
      <b-dropdown-header tag="div" class="dropdown-menu-lg text-center"><strong>You have {{itemsCount}} pending tasks</strong></b-dropdown-header>
      <b-dropdown-item>
        <div class="small mb-1">Upgrade NPM &amp; Bower <span class="float-right"><strong>0%</strong></span></div>
        <b-progress height={} class="progress-xs" variant="info" :value="0"/>
      </b-dropdown-item>
      <b-dropdown-item>
        <div class="small mb-1">ReactJS Version <span class="float-right"><strong>25%</strong></span></div>
        <b-progress height={} class="progress-xs" variant="danger" :value="25"/>
      </b-dropdown-item>
      <b-dropdown-item>
        <div class="small mb-1">VueJS Version <span class="float-right"><strong>50%</strong></span>
        </div>
        <b-progress height={} class="progress-xs" variant="warning" :value="50"/>
      </b-dropdown-item>
      <b-dropdown-item>
        <div class="small mb-1">Add new layouts <span class="float-right"><strong>75%</strong></span>
        </div>
        <b-progress height={} class="progress-xs" variant="info" :value="75"/>
      </b-dropdown-item>
      <b-dropdown-item>
        <div class="small mb-1">Angular 2 Cli Version <span class="float-right"><strong>100%</strong></span></div>
        <b-progress height={} class="progress-xs" variant="success" :value="100"/>
      </b-dropdown-item>
      <b-dropdown-item class="text-center"><strong>View all tasks</strong></b-dropdown-item>
    </template>
  </AppHeaderDropdown>
</template>
<script>
import { HeaderDropdown as AppHeaderDropdown } from '@coreui/vue'
export default {
  name: 'DefaultHeaderDropdownTasks',
  components: {
    AppHeaderDropdown
  },
  data: () => {
    return { itemsCount: 15 }
  }
}
</script>
