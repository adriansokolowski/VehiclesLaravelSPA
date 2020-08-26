<template>
  <div class="container">
    <table class="table table-sm table-striped">
      <thead>
        <tr>
          <td>#</td>
          <td>Nazwa</td>
          <td>nr_rejestracyjny</td>
          <td>id_ubezpieczenia</td>
          <td>ubezpieczenie_od</td>
          <td>ubezpieczenie_do</td>
          <td>umowa_leasingu</td>
          <td>data_badania_technicznego</td>
          <td>id_uzytkownika</td>
          <td>id_kto_dodal</td>
          <td>data_czas_dodania</td>
          <td>id_typu</td>
          <td></td>
        </tr>
      </thead>
      <tbody>
        <tr v-for="pojazd in pojazdy.data" :key="pojazd.id">
          <td>{{ pojazd.id }}</td>
          <td>{{ pojazd.nazwa }}</td>
          <td>{{ pojazd.nr_rejestracyjny }}</td>
          <td>{{ pojazd.id_ubezpieczenia }}</td>
          <td>{{ pojazd.ubezpieczenie_od }}</td>
          <td>{{ pojazd.ubezpieczenie_do }}</td>
          <td>{{ pojazd.umowa_leasingu }}</td>
          <td>{{ pojazd.data_badania_technicznego }}</td>
          <td>{{ pojazd.id_uzytkownika }}</td>
          <td>{{ pojazd.id_kto_dodal }}</td>
          <td>{{ pojazd.data_czas_dodania }}</td>
          <td>{{ pojazd.id_typu }}</td>
          <td>
            <router-link
              class="btn btn-info btn-sm"
              :to="{ name: 'pojazdy.edit', params: { id: pojazd.id } }"
            >Edytuj</router-link>
            <button @click="usun_pojazd(pojazd.id)" class="btn btn-danger btn-sm">Usuń</button>
          </td>
        </tr>
      </tbody>
    </table>
    <pagination :data="pojazdy" @pagination-change-page="getResults"></pagination>
  </div>
</template>

<script>
export default {
  data() {
    return {
      pojazdy: {},
    };
  },
  mounted() {
    this.getResults();
  },
  methods: {
    getResults(page = 1) {
      axios.get("/api/pojazdy?page=" + page).then((response) => {
        this.pojazdy = response.data;
      });
    },
    usun_pojazd(pojazd_id) {
      axios
        .delete("/api/pojazdy/" + pojazd_id)
        .then((response) => {
          this.$swal("Pojazd został usunięty");
          this.form_submitting = false;
          this.getResults();
        })
        .catch((error) => {
          this.$swal({ icon: "error", title: "Wystąpił błąd" });
        });
    },
  },
};
</script>