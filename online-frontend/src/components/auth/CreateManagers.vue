<template>
    <div>
        <b-form-group id="input-group-1" label="Your First Name:" label-for="input-1">
        <b-form-input
          id="input-1"
          v-model="form.firstName"
          required
          placeholder="Enter First Name">
        </b-form-input>
      </b-form-group>

      <b-form-group id="input-group-2" label="Your Last Name:" label-for="input-2">
        <b-form-input
          id="input-2"
          v-model="form.lastName"
          required
          placeholder="Enter Last Name">
        </b-form-input>
      </b-form-group>

      <b-form-group id="input-group-3" label="Your Email:" label-for="input-3">
        <b-form-input
          id="input-3"
          v-model="form.email"
          required
          placeholder="Enter Email">
        </b-form-input>
      </b-form-group>

      <b-form-group id="input-group-4" label="Your Password:" label-for="input-4">
        <b-form-input
          id="input-4"
          v-model="form.password"
          type="password"
          required
          placeholder="Enter Password">
        </b-form-input>
      </b-form-group>

      <b-form-group id="input-group-5" label="Your Url;" label-for="input-5">
        <b-form-input
          id="input-5"
          v-model="form.url"
          required
          placeholder="Enter Url">
        </b-form-input>
      </b-form-group>

      
      <button type="submit" @click="submit">Submit</button>
      <button type="submit" @click="cancel">Cancel</button>
      <div class="error-container">
        <span>{{error}}</span>
      </div>
    </div>
</template>

<script>
import ManagerService from '../../services/managers.service';

    export default {
        data() {
            return {
                form: {
                    firstName: '',
                    lastName: '',
                    email: '',
                    password: '',
                    url: '',
                },
                error: '',
            }
        },

        methods: {
            submit() {
              this.error = '';
                /* eslint-disable no-console */
                ManagerService.createManager(this.form)
                .then(() => {
                    this.$router.push({ name: 'Managers' })
                })
                .catch((error) => {
                    this.error = this.extractErrorMessage(error);
                })
            },
            extractErrorMessage(error) {
              let errorMessage = '';
              Object.keys(error.errors).forEach(er => {
                errorMessage = errorMessage + ' ' + error.errors[er][0];
              })
              return errorMessage;
            },
            cancel() {
              this.$router.push({name: 'Managers'})
            }
        }
    }
</script>


<style lang="scss" scoped>

</style>