<template>
  <div class="animated fadeIn">
    <grid-layout
      :layout="mqLayout"
      :col-num="mqCols"
      :is-draggable="true"
      :is-resizable="false"
      :is-mirrored="false"
      :vertical-compact="true"
      :margin="margin"
      :use-css-transforms="true"
      :row-height="rowHeight"
      :auto-size="true"
      ref="coreuiGridLayout"
      @layout-updated="layoutUpdatedEvent"
    >
      <grid-item v-for="item in mqLayout"
                 class="d-flex align-items-start"
                 :x="item.x"
                 :y="item.y"
                 :w="item.w"
                 :h="item.h"
                 :i="item.i"
                 :key="item.i"
                 dragAllowFrom=".card-header"
                 dragIgnoreFrom=".card-body"
                 :isDraggable="item.static ? false : true"
      >
        <resize-observer @notify="handleResize(item)"></resize-observer>
        <b-card no-body header-tag="header" :class="item.cardClass" :id="`coreui-dnd-card-no-${item.i}`" class="flex-fill">
          <div slot="header">
            {{`${item.cardHeader || 'Drag & Drop'} ${item.i}`}}
            <a href="https://coreui.io/pro/vue/" rel="noreferrer noopener" target="_blank" class="badge badge-danger ml-1">CoreUI Pro</a>
            <div class="card-header-actions" v-if="item.i==='0'">
              <small><b-link variant="link" @click="resetLayout">Reset Layouts</b-link></small>
            </div>
          </div>
          <b-card-body>
            {{item.cardBody || 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.'}}
          </b-card-body>
        </b-card>
      </grid-item>
    </grid-layout>
  </div>
</template>

<script>
import Vue from 'vue'
import VueMq from 'vue-mq'
import VueResize from 'vue-resize'
import * as VueGridLayout from 'vue-grid-layout'
import defaultLayouts from './_layouts'

const GridLayout = VueGridLayout.GridLayout;
const GridItem = VueGridLayout.GridItem;

const breakpoints = {
  xs: 575,
  sm: 767,
  md: 991,
  lg: 1199,
  xl: Infinity
}

const gridCols = {xs: 1, sm: 2, md: 3, lg: 3, xl: 3 }
const localStorageKey = 'CoreUI-Draggable-Layouts'

Vue.use(VueMq, { breakpoints })
Vue.use(VueResize)

export default {
  name: 'Draggable',
  components: {
    GridLayout,
    GridItem,
  },
  data: function () {
    return {
      layouts: JSON.parse(localStorage.getItem(localStorageKey) || JSON.stringify(defaultLayouts)),
      gridCols: gridCols,
      margin: [10, 10],
      rowHeight: 1
    }
  },
  mounted: function () {
    this.$nextTick(async function () {
      // Code that will run only after the
      // entire view has been re-rendered
      await this.updateLayout()
    })
  },
  computed: {
    mqCols() {
      const mq = this.$mq
      return this.gridCols[mq]
    },
    mqLayout() {
      const mq = this.$mq
      const layouts = this.layouts
      return layouts[mq]
    }
  },
  methods: {
    handleResize: async function(item) {
      const mq = this.$mq
      const layout = this.layouts[mq][item.i]
      if (layout) {
        const size = await this.getSize(item.i)
        layout.h = Math.round((size.height - this.rowHeight) / 10)
        this.updateLayout()
      }
    },
    async getSize(itemId) {
      let card = await document.getElementById(`coreui-dnd-card-no-${itemId}`)
      let height = parseInt(window.getComputedStyle(card).getPropertyValue('height'), 10)
      let width = parseInt(window.getComputedStyle(card).getPropertyValue('width'), 10)
      return { height, width }
    },
    layoutUpdatedEvent: function(/*newLayout*/){
      localStorage.setItem(localStorageKey, JSON.stringify(this.layouts))
    },
    resetLayout() {
      this.layouts = JSON.parse(JSON.stringify(defaultLayouts))
      localStorage.removeItem(localStorageKey)
      this.updateLayout()
    },
    updateLayout() {
      this.$refs.coreuiGridLayout.layoutUpdate()
    }
  }
}
</script>

<style>
.main {
  overflow: hidden;
}
.vue-grid-item.vue-grid-placeholder {
  background: gray!important;
  border: thin dashed!important;
}
@media screen and (-ms-high-contrast: active), (-ms-high-contrast: none) {
  .vue-grid-item .card.flex-fill {
    display: block;
  }
}
</style>

