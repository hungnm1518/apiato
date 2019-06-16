<template>
  <div class="animated fadeIn">
    <b-card show-footer>
      <div slot="header">
        <i class="icon-info"></i> Toastr
        <a href="https://coreui.io/pro/vue/" rel="noreferrer noopener" target="_blank" class="badge badge-danger ml-1">CoreUI Pro</a>
        <div class="card-header-actions">
          <a href="https://github.com/se-panfilov/vue-notifications" rel="noreferrer noopener" target="_blank" class="card-header-action">
            <small class="text-muted">docs</small>
          </a>
        </div>
      </div>
      <b-button class="mr-1" type="button" variant="success" @click="showSuccessMsg()">Success</b-button>
      <b-button class="mr-1" type="button" variant="info" @click="showInfoMsg()">Info</b-button>
      <b-button class="mr-1" type="button" variant="warning" @click="showWarnMsg()">Warning</b-button>
      <b-button class="mr-1" type="button" variant="danger" @click="showErrorMsg()">Error</b-button>
    </b-card>
  </div>
</template>

<script>
import Vue from 'vue'
import VueNotifications from 'vue-notifications'
import miniToastr from 'mini-toastr'// https://github.com/se-panfilov/mini-toastr

const toastTypes = {
  success: 'success',
  error: 'error',
  info: 'info',
  warn: 'warn'
}

miniToastr.init({types: toastTypes})

function toast ({title, message, type, timeout, cb}) {
  return miniToastr[type](message, title, timeout, cb)
}

const options = {
  success: toast,
  error: toast,
  info: toast,
  warn: toast
}
//  VueNotifications.setPluginOptions(options)

Vue.use(VueNotifications, options)

export default {
  name: 'toastr',
  data () {
    return {}
  },
  notifications: {
    showSuccessMsg: {
      type: VueNotifications.types.success,
      title: 'Hello there',
      message: 'That\'s the success!'
    },
    showInfoMsg: {
      type: VueNotifications.types.info,
      title: 'Hey you',
      message: 'Here is some info for you'
    },
    showWarnMsg: {
      type: VueNotifications.types.warn,
      title: 'Wow, man',
      message: 'That\'s the kind of warning'
    },
    showErrorMsg: {
      type: VueNotifications.types.error,
      title: 'Wow-wow',
      message: 'That\'s the error'
    }
  }
}
</script>
