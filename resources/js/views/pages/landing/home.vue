<template>
  <div>
    <!--==========================================-->
    <header class="header">
      <VContainer>
        <div class="fut_header">
          <div class="fut_brand">
              <img src="@images/img/logo.png" />
          </div>
          <div class="fut_nav">
              <ul class="fut_navigation">
                <li class="nav-items">
                  <div class="nav-link">Home</div>
                </li>
                <li class="nav-items">
                  <div class="nav-link">About</div>
                </li>
                <li class="nav-items">
                  <div class="nav-link">List Property</div>
                </li>
                <li class="nav-items">
                  <div class="nav-link">Login</div>
                </li>
                <li class="nav-items">
                  <div class="nav-link auth-nav-btn">Signup</div>
                </li>
              </ul>
          </div>
        </div>
      </VContainer>
    </header>
    <!--==========================================-->
    <section class="fut_banner">
      <div class="overlay"></div>
      <VContainer>
        <div class="fut_filters">
          <div class="mb-5">
            <v-tabs>
              <v-tab title="Buy"></v-tab>
              <v-tab title="Rent"></v-tab>
              <!-- <v-tab></v-tab> -->
            </v-tabs>
          </div>
          <div class="filter">
            <v-row>
              <v-col sm="4">
                <v-select placeholder="City"></v-select>
              </v-col>
              <v-col sm="6">
                <input class="input" placeholder="Location"/>
              </v-col>
              <v-col sm="2">
                <v-btn>Search</v-btn>
              </v-col>
            </v-row>
          </div>
        </div>
      </VContainer>
    </section>
  </div>
</template>

<script>
import header from './components/header.vue'
export default {
  components:{
    header,
  }
}
</script>

<style>

</style>
