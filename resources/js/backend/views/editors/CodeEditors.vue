<template>
  <div class="animated fadeIn">
    <b-card show-footer>
      <div slot="header">
        CodeMirror
        <a href="https://coreui.io/pro/vue/" rel="noreferrer noopener" target="_blank" class="badge badge-danger ml-1">CoreUI Pro</a>
        <div class="card-header-actions">
          <a href="https://github.com/surmon-china/vue-codemirror" rel="noreferrer noopener" target="_blank" class="card-header-action">
            <small class="text-muted">docs</small>
          </a>
        </div>
      </div>
      <codemirror ref="vueCm" v-model="code" :options="editorOption"></codemirror>
      <div slot="footer">
        <b-form inline>
          <!--<b-form-fieldset>-->
          <b-form-group>
            <b-form-select :plain="true" size="sm" name="selectedTheme" v-model="selectedTheme" @change.native="onThemeChange($event)">
              <option value="material">material</option>
              <option value="eclipse">eclipse</option>
            </b-form-select>
          </b-form-group>
          <b-form-group>
            <b-form-select :plain="true" size="sm" name="selectedMode" v-model="selectedMode" @change.native="onModeChange($event)">
              <option value="markdown">markdown</option>
              <option value="javascript">javascript</option>
              <option value="xml">html</option>
            </b-form-select>
          </b-form-group>
        <!--</b-form-fieldset>-->
        </b-form>
      </div>
  </b-card>
</div>
</template>

<script>
import Vue from 'vue'
import VueCodeMirror from 'vue-codemirror'
// require styles
import 'codemirror/lib/codemirror.css'
import 'codemirror/theme/material.css'
import 'codemirror/theme/eclipse.css'
import 'codemirror/mode/markdown/markdown'
import 'codemirror/mode/javascript/javascript'
import 'codemirror/mode/xml/xml'

import sampleCode from './_examples'

// global use
Vue.use(VueCodeMirror)

export default {
  name: 'code-editors',
  components: {
    VueCodeMirror
  },
  data () {
    return {
      code: sampleCode.xml,
      editorOption: {
        tabSize: 4,
        styleActiveLine: true,
        lineNumbers: true,
        lineWrapping: true,
        line: true,
        mode: 'xml',
        theme: 'eclipse',
        autofocus: true
      },
      selectedMode: 'xml',
      selectedTheme: 'eclipse'
    }
  },
  computed: {
    codemirror () {
      return this.$refs.vueCm.codemirror
    }
  },
  methods: {
    onThemeChange (e) {
      this.editorOption.theme = e.target.value
    },
    onModeChange (e) {
      this.editorOption.mode = e.target.value
      this.code = sampleCode[this.editorOption.mode]
    }
  },
  mounted () {
    if (this.codemirror.options.autofocus) {
      this.codemirror.setSize('100%', '50vh')
      this.codemirror.focus()
    }
    setTimeout(() => {
      this.code += '\n\n\t~haha~'
    }, 2000)
  }
}
</script>
