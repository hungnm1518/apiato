<template>
  <div class="animated fadeIn">
    <b-row>
      <b-col sm="6">
        <b-card>
          <div slot="header">
            <strong>Masked Input</strong> <small class="ml-1">vue-text-mask</small>
            <a href="https://coreui.io/pro/vue/" rel="noreferrer noopener" target="_blank" class="badge badge-danger ml-1">CoreUI Pro</a>
            <div class="card-header-actions">
              <a href="https://github.com/text-mask/text-mask/tree/master/vue#readme" rel="noreferrer noopener" target="_blank" class="card-header-action">
                <small class="text-muted">docs</small>
              </a>
            </div>
          </div>
          <b-form-group label="Date input" description="ex. 99/99/9999">
            <b-input-group>
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class='fa fa-calendar'></i>
                </span>
              </div>
              <masked-input
                type="text"
                name="date"
                class="form-control"
                v-model="date"
                :mask="[/\d/, /\d/, '/', /\d/, /\d/, '/', /\d/, /\d/, /\d/, /\d/]"
                :guide="true"
                placeholderChar="_"
                :showMask="true"
                :keepCharPositions="true"
                :pipe="autoCorrectedDatePipe()">
              </masked-input>
            </b-input-group>
          </b-form-group>
          <b-form-group label="Phone Number" description="ex. (999) 999-9999">
            <b-input-group>
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class='fa fa-phone'></i>
                </span>
              </div>
              <masked-input
                type="tel"
                name="phone"
                class="form-control"
                v-model="phone"
                :mask="['(', /[1-9]/, /\d/, /\d/, ')', ' ', /\d/, /\d/, /\d/, '-', /\d/, /\d/, /\d/, /\d/]"
                :guide="true"
                placeholderChar="#">
              </masked-input>
            </b-input-group>
          </b-form-group>
          <b-form-group label="Taxpayer Identification Number" description="ex. 99-9999999">
            <b-input-group>
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class='fa fa-usd'></i>
                </span>
              </div>
              <masked-input
                type="text"
                name="taxid"
                class="form-control"
                v-model="taxid"
                :mask="[/\d/, /\d/, '-', /\d/, /\d/, /\d/, /\d/, /\d/, /\d/, /\d/]"
                :guide="true"
                placeholderChar="#">
              </masked-input>
            </b-input-group>
          </b-form-group>
          <b-form-group label="Social Security Number" description="ex. 999-99-9999">
            <b-input-group>
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class='fa fa-male'></i>
                </span>
              </div>
              <masked-input
                type="text"
                name="ssn"
                class="form-control"
                v-model="ssn"
                :mask="[/\d/, /\d/, /\d/, '-', /\d/, /\d/, '-', /\d/, /\d/, /\d/, /\d/]"
                :guide="true"
                placeholderChar="#">
              </masked-input>
            </b-input-group>
          </b-form-group>
          <b-form-group label="Eye Script" description="ex. ~9.99 ~9.99 999">
            <b-input-group>
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class='fa fa-asterisk'></i>
                </span>
              </div>
              <masked-input
                type="text"
                name="eye"
                class="form-control"
                v-model="eye"
                :mask="['~', /\d/, '.', /\d/, /\d/, ' ', '~', /\d/, '.', /\d/, /\d/, ' ', /\d/, /\d/, /\d/]"
                :guide="true"
                placeholderChar="#">
              </masked-input>
            </b-input-group>
          </b-form-group>
          <b-form-group label="Credit Card Number" description="ex. 9999 9999 9999 9999">
            <b-input-group>
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class='fa fa-credit-card'></i>
                </span>
              </div>
              <masked-input
                type="text"
                name="ccn"
                class="form-control"
                v-model="ccn"
                :mask="[/\d/, /\d/, /\d/, /\d/, ' ', /\d/, /\d/, /\d/, /\d/, ' ', /\d/, /\d/, /\d/, /\d/, ' ', /\d/, /\d/, /\d/, /\d/]"
                :guide="true"
                placeholderChar="#">
              </masked-input>
            </b-input-group>
          </b-form-group>
        </b-card>
      </b-col>
      <b-col sm="6">
        <b-card>
          <div slot="header">
            <strong>Multiselect</strong> <small class="ml-1">vue-multiselect</small>
            <a href="https://coreui.io/pro/vue/" rel="noreferrer noopener" target="_blank" class="badge badge-danger ml-1">CoreUI Pro</a>
            <div class="card-header-actions">
              <a href="https://vue-multiselect.js.org/#sub-getting-started" rel="noreferrer noopener" target="_blank" class="card-header-action">
                <small class="text-muted">docs</small>
              </a>
            </div>
          </div>
          <div>
            <multiselect v-model="multi" :options="options" :multiple="true" label="label" track-by="label"></multiselect>
          </div>
        </b-card>
        <b-card>
          <div slot="header">
            <strong>Select</strong> <small class="ml-1">vue-select</small>
            <a href="https://coreui.io/pro/vue/" rel="noreferrer noopener" target="_blank" class="badge badge-danger ml-1">CoreUI Pro</a>
            <div class="card-header-actions">
              <a href="https://sagalbot.github.io/vue-select/" rel="noreferrer noopener" target="_blank" class="card-header-action">
                <small class="text-muted">docs</small>
              </a>
            </div>
          </div>
          <div>
            <v-select v-model="selected" multiple :options="options" placeholder="Select option"></v-select>
          </div>
        </b-card>
        <b-card>
          <div slot="header">
            <strong>Date Picker</strong>
            <a href="https://coreui.io/pro/vue/" rel="noreferrer noopener" target="_blank" class="badge badge-danger ml-1">CoreUI Pro</a>
            <div class="card-header-actions">
              <a href="https://github.com/nathanreyes/v-calendar" rel="noreferrer noopener" target="_blank" class="card-header-action">
                <small class="text-muted">docs</small>
              </a>
            </div>
          </div>
          <div>
            <v-date-picker
              mode='range'
              v-model='selectedDate'
              is-double-paned
              is-inline
              show-caps>
            </v-date-picker>
          <p>
            start: {{ this.rangeStart }} <br/>
              end: {{ this.rangeEnd }}
          </p>
          </div>
        </b-card>
      </b-col>
    </b-row>
  </div>
</template>

<script>
import MaskedInput from 'vue-text-mask'
import createAutoCorrectedDatePipe from 'text-mask-addons/dist/createAutoCorrectedDatePipe'
import Multiselect from 'vue-multiselect'
import vSelect from 'vue-select'
import { setupCalendar, DatePicker } from 'v-calendar'
import 'v-calendar/lib/v-calendar.min.css'

setupCalendar({
  firstDayOfWeek: 2 // Monday
})

const options = [
  { value: 'AL', label: 'Alabama' },
  { value: 'AK', label: 'Alaska' },
  { value: 'AS', label: 'American Samoa', $isDisabled: true },
  { value: 'AZ', label: 'Arizona' },
  { value: 'AR', label: 'Arkansas' },
  { value: 'CA', label: 'California' },
  { value: 'CO', label: 'Colorado' },
  { value: 'CT', label: 'Connecticut' },
  { value: 'DE', label: 'Delaware' },
  { value: 'DC', label: 'District Of Columbia' },
  { value: 'FM', label: 'Federated States Of Micronesia' },
  { value: 'FL', label: 'Florida' },
  { value: 'GA', label: 'Georgia' },
  { value: 'GU', label: 'Guam' },
  { value: 'HI', label: 'Hawaii' },
  { value: 'ID', label: 'Idaho' },
  { value: 'IL', label: 'Illinois' },
  { value: 'IN', label: 'Indiana' },
  { value: 'IA', label: 'Iowa' },
  { value: 'KS', label: 'Kansas' },
  { value: 'KY', label: 'Kentucky' },
  { value: 'LA', label: 'Louisiana' },
  { value: 'ME', label: 'Maine' },
  { value: 'MH', label: 'Marshall Islands' },
  { value: 'MD', label: 'Maryland' },
  { value: 'MA', label: 'Massachusetts' },
  { value: 'MI', label: 'Michigan' },
  { value: 'MN', label: 'Minnesota' },
  { value: 'MS', label: 'Mississippi' },
  { value: 'MO', label: 'Missouri' },
  { value: 'MT', label: 'Montana' },
  { value: 'NE', label: 'Nebraska' },
  { value: 'NV', label: 'Nevada' },
  { value: 'NH', label: 'New Hampshire' },
  { value: 'NJ', label: 'New Jersey' },
  { value: 'NM', label: 'New Mexico' },
  { value: 'NY', label: 'New York' },
  { value: 'NC', label: 'North Carolina' },
  { value: 'ND', label: 'North Dakota' },
  { value: 'MP', label: 'Northern Mariana Islands' },
  { value: 'OH', label: 'Ohio' },
  { value: 'OK', label: 'Oklahoma' },
  { value: 'OR', label: 'Oregon' },
  { value: 'PW', label: 'Palau' },
  { value: 'PA', label: 'Pennsylvania' },
  { value: 'PR', label: 'Puerto Rico' },
  { value: 'RI', label: 'Rhode Island' },
  { value: 'SC', label: 'South Carolina' },
  { value: 'SD', label: 'South Dakota' },
  { value: 'TN', label: 'Tennessee' },
  { value: 'TX', label: 'Texas' },
  { value: 'UT', label: 'Utah' },
  { value: 'VT', label: 'Vermont' },
  { value: 'VI', label: 'Virgin Islands' },
  { value: 'VA', label: 'Virginia' },
  { value: 'WA', label: 'Washington' },
  { value: 'WV', label: 'West Virginia' },
  { value: 'WI', label: 'Wisconsin' },
  { value: 'WY', label: 'Wyoming' }
]

const today = new Date()

export default {
  name: 'advanced-forms',
  components: {
    MaskedInput,
    Multiselect,
    vSelect,
    'v-date-picker': DatePicker
  },
  data () {
    return {
      date: '',
      phone: '',
      taxid: '',
      ssn: '',
      eye: '',
      ccn: '',
      multi: null,
      selected: null,
      options: options,
      selectedDate: {
        start: new Date(today.getFullYear(), today.getMonth(), 7),
        end: new Date(today.getFullYear(), today.getMonth(), 11)
      }
    }
  },
  computed: {
    rangeStart: function () { return new Date(this.selectedDate.start).toLocaleDateString() },
    rangeEnd: function () { return new Date(this.selectedDate.end).toLocaleDateString() }
  },
  methods: {
    autoCorrectedDatePipe: () => { return createAutoCorrectedDatePipe('mm/dd/yyyy') }
  }
}
</script>

<style src="vue-multiselect/dist/vue-multiselect.min.css"></style>
