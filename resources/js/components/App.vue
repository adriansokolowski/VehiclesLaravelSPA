<template>
  <div>
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="/">Pojazdy</a>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <router-link
                active-class="active-menu"
                exact
                :to="{ name: 'pojazdy.index' }"
                class="nav-link"
              >Lista pojazdów</router-link>
            </li>
            <li class="nav-item">
              <router-link
                active-class="active-menu"
                exact
                :to="{ name: 'pojazdy.create' }"
                class="nav-link"
              >Dodaj pojazd</router-link>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <main class="py-4">
        <router-view></router-view>
    </main>
  </div>
</template>