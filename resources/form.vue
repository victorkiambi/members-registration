<template>
  <v-container
    fill-height
    fluid
    grid-list-xl>
    <v-layout
      justify-center
      wrap
    >
      <v-flex
        xs12
        md8
      >
        <material-card
          color="green"
          title="Members"
          text="Create Member profile"
        >

          
          <v-form @submit.prevent="submit" >
            <v-container py-0>
              <v-layout wrap>
                <v-flex
                  xs12
                  md4
                >
                  <v-text-field
                      v-model.lazy="name" :error-messages="nameErrors"
                      :counter="10"
                      label="Name"
                      required
                      @input="$v.name.$touch()"
                      @blur="$v.name.$touch()"
                        />
                       

                </v-flex>
                <v-flex
                  xs12
                  md4
                >
                  <v-text-field
                    class="purple-input"
                    label="ID"
                    type="number"
                     v-model="id"
                  />
                </v-flex>
                <v-flex
                  xs12
                  md4
                >
                  <v-text-field
                    label="Contact"
                    class="purple-input"
                    type="number"
                     v-model="contact"/>
                    
                </v-flex>
                <v-flex
                  xs12
                  md6
                >
                  <v-text-field
                    label="Date of Birth"
                    class="purple-input"
                    type="date"
                    v-model="dob"/>
                </v-flex>
                <v-flex
                  xs12
                  md6
                >
                  <v-text-field
                    label="District"
                    class="purple-input"
                    v-model="district"/>
                </v-flex>
                <v-flex
                  xs12
                  md6
                >
                  <v-text-field
                    label="Guardian Name"
                    class="purple-input"
                    v-model="guardian"/>
                </v-flex>
                <v-flex
                  xs12
                  md6
                >
                  <v-text-field
                    label="Guardian Contact"
                    class="purple-input"
                    v-model="guardian_contact"/>
                </v-flex>
                <v-flex
                  xs12
                  md6
                >
                  <v-text-field
                    label="Full Member"
                    class="purple-input"
                    v-model="full_member"/>
                </v-flex>

                <v-flex
                  xs12
                  md6
                >
                  <v-text-field
                    label="Admitted"
                    class="purple-input"
                    v-model="admitted"/>
                </v-flex>
                <v-flex
                  xs12
                  md6
                >
                  <v-text-field
                    class="purple-input"
                    label="Commissioned"
                    v-model="commissioned"
                    />
                </v-flex>
                <!-- <v-flex xs12>
                  <v-textarea
                    class="purple-input"
                    label="About Me"
                    value="Lorem ipsum dolor sit amet, consectetur adipiscing elit."
                  />
                </v-flex> -->
                <v-flex
                  xs12
                  text-xs-right
                >
                  <v-btn 
                 type="submit"
                    class="mx-0 font-weight-light"
                    color="success" 
                  >
                    Add Member
                  </v-btn>
                </v-flex>
              </v-layout>
            </v-container>
          </v-form>
        </material-card>
      </v-flex>

    </v-layout>
  </v-container>
</template>

<script>
import Vuelidate from 'vuelidate'
import { required, minLength, email, sameAs } from "vuelidate/lib/validators";

export default {
  //  
  data: () => ({
//  errors: [],
    name: '',
    id: null,
    contact: null,
    dob: null,
    district: null,
    guardian: null,
    guardian_contact: null,
    full_member: null,
    admitted: null,
    commissioned: null,

  }),
    validations: {
    name: {
      required, 
      // minLength: minLength(4)
    },
    id: {
      required,
    }
  },
  computed: {
   nameErrors () {
        const errors = []
        if (!this.$v.name.$dirty) return errors
        // !this.$v.name.maxLength && errors.push('Name must be at most 10 characters long')
        !this.$v.name.required && errors.push('Name is required.')
        return errors
      }}
      ,
  methods: {
  submit() {
    console.log(name);
      }

      // Submit the object to an API of 
  
}
}
</script>
