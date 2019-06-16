<template>
  <AppHeaderDropdown right no-caret>
    <template slot="header">
      <i class="icon-envelope-letter"></i>
      <b-badge pill variant="info">{{itemsCount}}</b-badge>
    </template>
    <template slot="dropdown">
      <div class="dropdown-menu-lg">
        <b-dropdown-header tag="div" class="text-center"><strong>You have {{itemsCount}} messages</strong></b-dropdown-header>
        <b-dropdown-item>
          <div class="message">
            <div class="pt-3 mr-3 float-left">
              <div class="avatar">
                <img src="img/avatars/7.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                <span class="avatar-status bg-success"></span>
              </div>
            </div>
            <div>
              <small class="text-muted">John Doe</small>
              <small class="text-muted float-right mt-1">Just now</small>
            </div>
            <div class="text-truncate font-weight-bold"><span class="fa fa-exclamation text-danger"></span> Important message</div>
            <div class="small text-muted text-truncate">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</div>
          </div>
        </b-dropdown-item>
        <b-dropdown-item href="#">
          <div class="message">
            <div class="pt-3 mr-3 float-left">
              <div class="avatar">
                <img src="img/avatars/6.jpg" class="img-avatar" alt="admin@bootstrapmaster.com"/>
                <span class="avatar-status bg-warning"></span>
              </div>
            </div>
            <div>
              <small class="text-muted">Jane Doe</small>
              <small class="text-muted float-right mt-1">5 minutes ago</small>
            </div>
            <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
            <div class="small text-muted text-truncate">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</div>
          </div>
        </b-dropdown-item>
        <b-dropdown-item href="#">
          <div class="message">
            <div class="pt-3 mr-3 float-left">
              <div class="avatar">
                <img src="img/avatars/5.jpg" class="img-avatar" alt="admin@bootstrapmaster.com"/>
                <span class="avatar-status bg-danger"></span>
              </div>
            </div>
            <div>
              <small class="text-muted">Janet Doe</small>
              <small class="text-muted float-right mt-1">1:52 PM</small>
            </div>
            <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
            <div class="small text-muted text-truncate">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</div>
          </div>
        </b-dropdown-item>
        <b-dropdown-item href="#">
          <div class="message">
            <div class="pt-3 mr-3 float-left">
              <div class="avatar">
                <img src="img/avatars/4.jpg" class="img-avatar" alt="admin@bootstrapmaster.com"/>
                <span class="avatar-status bg-info"></span>
              </div>
            </div>
            <div>
              <small class="text-muted">Joe Doe</small>
              <small class="text-muted float-right mt-1">4:03 AM</small>
            </div>
            <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
            <div class="small text-muted text-truncate">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</div>
          </div>
        </b-dropdown-item>
        <b-dropdown-item href="#" class="text-center"><strong>View all messages</strong></b-dropdown-item>
      </div>
    </template>
  </AppHeaderDropdown>
</template>
<script>
import { HeaderDropdown as AppHeaderDropdown } from '@coreui/vue'
export default {
  name: 'DefaultHeaderDropdownMssgs',
  components: {
    AppHeaderDropdown
  },
  data: () => {
    return { itemsCount: 7 }
  }
}
</script>
