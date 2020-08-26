<template>
  <div class="container">
    <h1>Dodaj pojazd</h1>
    <form @submit.prevent="submit_form">
      <br />Nazwa:
      <input type="text" v-model="fields.nazwa" class="form-control" />
      <div class="alert alert-danger" v-if="errors && errors.nazwa">{{ errors.nazwa[0] }}</div>
      <br />Nr rejestracyjny:
      <input type="text" v-model="fields.nr_rejestracyjny" class="form-control" />
      <div
        class="alert alert-danger"
        v-if="errors && errors.nr_rejestracyjny"
      >{{ errors.nr_rejestracyjny[0] }}</div>
      <br />ID ubezpieczenia:
      <select v-model="fields.id_ubezpieczenia" class="form-control">
        <option
          v-for="ubezpieczenie in ubezpieczenia"
          :value="ubezpieczenie.id"
          :key="ubezpieczenie.id"
        >{{ ubezpieczenie.nazwa }}</option>
      </select>
      <div
        class="alert alert-danger"
        v-if="errors && errors.id_ubezpieczenia"
      >{{ errors.id_ubezpieczenia[0] }}</div>
      <br />Ubezpieczenie od:
      <input type="date" v-model="fields.ubezpieczenie_od" class="form-control" />
      <div
        class="alert alert-danger"
        v-if="errors && errors.ubezpieczenie_od"
      >{{ errors.ubezpieczenie_od[0] }}</div>
      <br />Ubezpieczenie do:
      <input type="date" v-model="fields.ubezpieczenie_do" class="form-control" />
      <div
        class="alert alert-danger"
        v-if="errors && errors.ubezpieczenie_do"
      >{{ errors.ubezpieczenie_do[0] }}</div>
      <br />Umowa leasingu:
      <input type="text" v-model="fields.umowa_leasingu" class="form-control" />
      <div
        class="alert alert-danger"
        v-if="errors && errors.umowa_leasingu"
      >{{ errors.umowa_leasingu[0] }}</div>
      <br />Data badania technicznego:
      <input
        type="date"
        v-model="fields.data_badania_technicznego"
        class="form-control"
      />
      <div
        class="alert alert-danger"
        v-if="errors && errors.data_badania_technicznego"
      >{{ errors.data_badania_technicznego[0] }}</div>
      <br />ID użytkownika:
      <input type="text" v-model="fields.id_uzytkownika" class="form-control" />
      <div
        class="alert alert-danger"
        v-if="errors && errors.id_uzytkownika"
      >{{ errors.id_uzytkownika[0] }}</div>
      <br />Data czas dodania:
      <input type="date" v-model="fields.data_czas_dodania" class="form-control" />
      <div
        class="alert alert-danger"
        v-if="errors && errors.data_czas_dodania"
      >{{ errors.data_czas_dodania[0] }}</div>
      <br />Usunięte:
      <input type="text" v-model="fields.usuniete" class="form-control" />
      <div class="alert alert-danger" v-if="errors && errors.usuniete">{{ errors.usuniete[0] }}</div>
      <br />Typ pojazdu:
      <select v-model="fields.id_typu" class="form-control">
        <option
          v-for="typpojazdu in typypojazdow"
          :value="typpojazdu.id"
          :key="typpojazdu.id"
        >{{ typpojazdu.typ }}</option>
      </select>
      <div class="alert alert-danger" v-if="errors && errors.id_typu">{{ errors.id_typu[0] }}</div>

      <input
        type="submit"
        class="btn btn-primary"
        :value="form_submitting ? 'Trwa dodawanie' : 'Dodaj pojazd'"
        :disabled="form_submitting"
      />
    </form>
  </div>
</template>

<script>
export default {
  data() {
    return {
      typypojazdow: {},
      ubezpieczenia: {},
      fields: {
        nazwa: "",
        nr_rejestracyjny: "",
        id_ubezpieczenia: 1,
        nr_rejestracyjny: "",
        ubezpieczenie_id: "",
        ubezpieczenie_do: "",
        umowa_leasingu: "",
        data_badania_technicznego: "",
        id_uzytkownika: "",
        data_czas_dodania: "",
        usuniete: "",
        id_typu: 1,
      },
      errors: {},
      form_submitting: false,
    };
  },
  mounted() {
    axios.get("api/typypojazdow").then((response) => {
      this.typypojazdow = response.data.data;
    });
    axios.get("api/ubezpieczenia").then((response) => {
      this.ubezpieczenia = response.data.data;
    });
  },
  methods: {
    submit_form() {
      this.form_submitting = true;
      axios
        .post("api/pojazdy", this.fields)
        .then((response) => {
          this.$swal('Pojazd został dodany do bazy');
          this.form_submitting = false;
          this.$router.push('/');
        })
        .catch((error) => {
          this.$swal({icon: 'error', title: 'Wystąpił błąd'});
          if (error.response.status === 422) {
            this.errors = error.response.data.errors;
          }
          this.form_submitting = false;
        });
    },
  },
};
</script>