<template>
  <div class="animated fadeIn">
    <b-card no-body>
      <b-card-header>
        <i class="icon-note"></i> Form Validation
        <a class="badge badge-danger" href="https://coreui.io/pro/vue/">CoreUI Pro</a>
        <div class="card-header-actions">
          <a class="card-header-action" href="https://github.com/monterail/vuelidate" target="_blank" rel="noreferrer noopener">
            <small class="text-muted">docs</small>
          </a>
        </div>
      </b-card-header>
      <b-card-body>
        <b-link href="https://monterail.github.io/vuelidate" target="_blank" rel="noreferrer noopener">Vuelidate</b-link> provides <cite>Simple, lightweight model-based validation for Vue.js</cite>
        <hr>
        <b-row>
          <b-col lg="6">
            <!--<h6>Simple Form</h6>-->
            <b-form v-on:submit.prevent="onSubmit" v-on:reset.prevent="onReset" novalidate>
              <b-form-group id="firstNameInputGroup1"
                            label="First Name"
                            label-for="firstname">
                <b-form-input id="firstName"
                              type="text"
                              v-model.lazy.trim="$v.form.firstName.$model"
                              :state="chkState('firstName')"
                              aria-describedby="input1LiveFeedback1"
                              placeholder="First Name"
                              autocomplete='given-name'
                              autofocus />
                <b-form-invalid-feedback id="input1LiveFeedback1">
                  This is a required field and must be at least 2 characters
                </b-form-invalid-feedback>
              </b-form-group>
              <b-form-group id="lastNameInputGroup2"
                            label="Last Name"
                            label-for="lastName">
                <b-form-input id="lastName"
                              type="text"
                              v-model.lazy.trim="$v.form.lastName.$model"
                              :state="chkState('lastName')"
                              aria-describedby="input1LiveFeedback2"
                              placeholder="Last Name"
                              autocomplete='family-name'/>
                <b-form-invalid-feedback id="input1LiveFeedback2">
                  This is a required field and must be at least 1 character
                </b-form-invalid-feedback>
              </b-form-group>
              <b-form-group id="userNameInputGroup3"
                            label="User Name"
                            label-for="userName">
                <b-form-input id="userName"
                              type="text"
                              v-model.trim="$v.form.userName.$model"
                              :state="chkState('userName')"
                              aria-describedby="input1LiveFeedback3"
                              placeholder="User Name"
                              autocomplete='username' />
                <b-form-invalid-feedback id="input1LiveFeedback3">
                  This is a required field and must be at least 5 characters
                </b-form-invalid-feedback>
              </b-form-group>
              <b-form-group id="emailInputGroup4"
                            label="Email"
                            label-for="email">
                <b-form-input id="email"
                              type="email"
                              v-model.trim="$v.form.email.$model"
                              :state="chkState('email')"
                              aria-describedby="input1LiveFeedback4"
                              placeholder="Email"
                              autocomplete='email' />
                <b-form-invalid-feedback id="input1LiveFeedback4">
                  This is a required field and must be valid e-mail address
                </b-form-invalid-feedback>
              </b-form-group>
              <b-row>
                <b-col md="6">
                  <b-form-group id="passInputGroup5"
                                label="Password"
                                label-for="password">
                    <b-form-input id="password"
                                  type="password"
                                  v-model.trim="$v.form.password.$model"
                                  :state="chkState('password')"
                                  aria-describedby="input1LiveFeedback5"
                                  placeholder="Password"
                                  autocomplete='new-password' />
                    <b-form-invalid-feedback id="input1LiveFeedback5">
                      Required password containing at least: number, uppercase and lowercase letter, 8 characters
                    </b-form-invalid-feedback>
                  </b-form-group>

                </b-col>
                <b-col md="6">
                  <b-form-group id="confPassInputGroup6"
                                label="Confirm password"
                                label-for="confirm_password">
                    <b-form-input id="confirm_password"
                                  type="password"
                                  v-model.trim="$v.form.confirmPassword.$model"
                                  :state="chkState('confirmPassword')"
                                  aria-describedby="input1LiveFeedback6"
                                  placeholder="Confirm password"
                                  autocomplete='new-password' />
                    <b-form-invalid-feedback id="input1LiveFeedback6">
                      Passwords must match
                    </b-form-invalid-feedback>
                  </b-form-group>

                </b-col>
              </b-row>
              <b-form-group :invalid-feedback="invCheck" :state="chkState('accept')">
                <b-form-checkbox id="accept"
                                 v-model="$v.form.accept.$model"
                                 :state="chkState('accept')"
                                 aria-describedby="input1LiveFeedback7">
                  <strong>I accept the terms of use</strong>
                </b-form-checkbox>
              </b-form-group>
              <b-button type="submit" variant="primary" :disabled="$v.form.$invalid || submitted">
                Submit
              </b-button>
              <b-button class="ml-1" type="submit" variant="success" :disabled="!$v.form.$invalid">
                Validate
              </b-button>
              <b-button class="ml-1" type="reset" variant="danger" :disabled="!isDirty">Reset</b-button>
            </b-form>
            <br/>
          </b-col>
          <b-col lg="6">
            <b-card :bg-variant="feedBack">
              <pre>{{formStr}}</pre>
            </b-card>
          </b-col>
        </b-row>
      </b-card-body>
    </b-card>
  </div>
</template>

<script>
import { validationMixin } from "vuelidate"
import { required, minLength, email, sameAs, helpers } from "vuelidate/lib/validators"

const mustAccept = value => {
  return Boolean(value)
}
const strongPass = helpers.regex('strongPass', /(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}/)


const formShape = {
  firstName: "",
  lastName: "",
  userName: "",
  email: "",
  password: "",
  confirmPassword: "",
  accept: false
}

export default {
  name: "ValidationForms",
  data() {
    return {
      form: Object.assign({}, formShape),
      feedBack: 'secondary',
      submitted: false
    }
  },
  computed: {
    formStr() { return JSON.stringify(this.form, null, 4) },
    isValid() { return !this.$v.form.$anyError },
    isDirty() { return this.$v.form.$anyDirty },
    invCheck() { return 'You must accept before submitting' },
  },
  mixins: [validationMixin],
  validations: {
    form: {
      firstName: {
        required,
        minLength: minLength(2)
      },
      lastName: {
        required,
        minLength: minLength(1)
      },
      userName: {
        required,
        minLength: minLength(5)
      },
      email: {
        required,
        email
      },
      password: {
        required,
        minLength: minLength(8),
        strongPass
      },
      confirmPassword: {
        required,
        sameAsPassword: sameAs("password")
      },
      accept: {
        required,
        mustAccept
      }
    }
  },
  methods: {
    onSubmit() {
      if (this.validate()) {
        this.$nextTick(() => {
          // submit
          // console.log('submit:', this.formStr)
          this.submitted = true
          this.feedBack = 'info'
        })
      }
    },
    onReset() {
      // Reset validation
      this.form = Object.assign({}, formShape)
      this.submitted = false
      this.$nextTick(() => {
        this.$v.$reset()
        this.feedBack = 'secondary'
      })
    },
    chkState(val) {
      const field = this.$v.form[val]
      return !field.$dirty || !field.$invalid
    },
    findFirstError(component = this) {
      if (component.state === false) {
        if (component.$refs.input) {
          component.$refs.input.focus()
          return true
        }
        if (component.$refs.check) {
          component.$refs.check.focus()
          return true
        }
      }
      let focused = false
      component.$children.some((child) => {
        focused = this.findFirstError(child)
        return focused
      })

      return focused
    },
    validate() {
      this.$v.$touch()
      this.$nextTick(() => this.findFirstError())
      return this.isValid
    }
  }
}
</script>

<style scoped>
.btn.disabled {
  cursor: auto;
}
</style>
