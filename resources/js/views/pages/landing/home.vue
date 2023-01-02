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
            <v-btn class="mr-2">Buy</v-btn>
            <v-btn class="">Rent</v-btn>
          </div>
          <div class="filter">
            <div class="filter_header">
              <v-row class="align-end">
                <v-col sm="3">
                  <label for="">Location</label>
                  <v-select placeholder="City"></v-select>
                </v-col>
                <v-col sm="3">
                  <label for="">Area</label>
                  <input class="input" placeholder="Area"/>
                </v-col>
                <v-col sm="3">
                  <label for="">Property</label>
                  <v-select placeholder="Property Type"></v-select>
                </v-col>
                <v-col sm="2">
                  <label for="">Square Footage</label>
                  <input class="input" placeholder="i.e 2600"/>
                </v-col>
                <v-col sm="1">
                  <v-btn>Find</v-btn>
                </v-col>
              </v-row>
              <!-- <v-row class="mt-3">
                <v-col sm="6">
                  <label for="">Property</label>
                  <v-select placeholder="Property Type"></v-select>
                </v-col>
                <v-col sm="6">
                  <label for="">Square Footage</label>
                  <input class="input" placeholder="i.e 2600"/>
                </v-col>
              </v-row> -->
            </div>
            <div class="filter_footer mt-3">
              <div class="mr-2">
                <a href="">Change Currency</a>
              </div>
              <div class="mr-2">|</div>
              <div class="mr-2">
                <a href="">Change Area Unit</a>
              </div>
              <div class="mr-2">|</div>
              <div>
                <a href="">Reset Search</a>
              </div>
            </div>
          </div>
        </div>
      </VContainer>
    </section>
    <!--==========================================-->
    <section class="listing-property">
      <v-container>
        <!-- <div class="mb-5">
          <v-row>
            <v-col md="2">
              <label for="">Location</label>
              <v-select placeholder="Location"></v-select>
            </v-col>
            <v-col md="2">
              <label for="">Property Type</label>
              <v-select placeholder="Property Type"></v-select>
            </v-col>
            <v-col md="2">
              <label for="">Current Cash on Cash Return</label>
              <div class="range-input">
                <input type="range"/>
              </div>
            </v-col>
            <v-col md="2">
              <label for="">Current Projected IRR</label>
              <div class="range-input">
                <input type="range"/>
              </div>
            </v-col>
            <v-col md="4">
              
            </v-col>
          </v-row>
        </div> -->
        <div>
          <v-row>
            <v-col md="4">
              <div class="card-property">
                <div class="prop-header">
                  <img src="@images/img/11.png" alt="">
                  <div class="featured_tag"><span>Featured</span></div>
                </div>
                <div class="content">
                  <div>
                    <h2>1339 E 115th St</h2>
                    <p>Cleveland, OH 44106</p>
                  </div>
                  <div>
                    <span>8.8% IRR</span>
                    <h2>8.8% CoC</h2>
                  </div>
                </div>
                <div class="prop-footer">
                  <span>Available: 1,998 tokens at $50</span>
                </div>
              </div>
            </v-col>
            <v-col md="4">
              <div class="card-property">
                <div class="prop-header">
                  <img src="@images/img/22.png" alt="">
                  <div class="featured_tag"><span>Featured</span></div>
                </div>
                <div class="content">
                  <div>
                    <h2>1339 E 115th St</h2>
                    <p>Cleveland, OH 44106</p>
                  </div>
                  <div>
                    <span>8.8% IRR</span>
                    <h2>8.8% CoC</h2>
                  </div>
                </div>
                <div class="prop-footer">
                  <span>Available: 1,998 tokens at $50</span>
                </div>
              </div>
            </v-col>
            <v-col md="4">
              <div class="card-property">
                <div class="prop-header">
                  <img src="@images/img/33.png" alt="">
                  <div class="featured_tag"><span>Featured</span></div>
                </div>
                <div class="content">
                  <div>
                    <h2>1339 E 115th St</h2>
                    <p>Cleveland, OH 44106</p>
                  </div>
                  <div>
                    <span>8.8% IRR</span>
                    <h2>8.8% CoC</h2>
                  </div>
                </div>
                <div class="prop-footer">
                  <span>Available: 1,998 tokens at $50</span>
                </div>
              </div>
            </v-col>
            <v-col md="4">
              <div class="card-property">
                <div class="prop-header">
                  <img src="@images/img/44.png" alt="">
                  <!-- <div class="featured_tag"><span>Featured</span></div> -->
                </div>
                <div class="content">
                  <div>
                    <h2>1339 E 115th St</h2>
                    <p>Cleveland, OH 44106</p>
                  </div>
                  <div>
                    <span>8.8% IRR</span>
                    <h2>8.8% CoC</h2>
                  </div>
                </div>
                <div class="prop-footer">
                  <span>Available: 1,998 tokens at $50</span>
                </div>
              </div>
            </v-col>
            <v-col md="4">
              <div class="card-property">
                <div class="prop-header">
                  <img src="@images/img/55.png" alt="">
                  <!-- <div class="featured_tag"><span>Featured</span></div> -->
                </div>
                <div class="content">
                  <div>
                    <h2>1339 E 115th St</h2>
                    <p>Cleveland, OH 44106</p>
                  </div>
                  <div>
                    <span>8.8% IRR</span>
                    <h2>8.8% CoC</h2>
                  </div>
                </div>
                <div class="prop-footer">
                  <span>Available: 1,998 tokens at $50</span>
                </div>
              </div>
            </v-col>
            <v-col md="4">
              <div class="card-property">
                <div class="prop-header">
                  <img src="@images/img/11.png" alt="">
                  <div class="featured_tag"><span>Featured</span></div>
                </div>
                <div class="content">
                  <div>
                    <h2>1339 E 115th St</h2>
                    <p>Cleveland, OH 44106</p>
                  </div>
                  <div>
                    <span>8.8% IRR</span>
                    <h2>8.8% CoC</h2>
                  </div>
                </div>
                <div class="prop-footer">
                  <span>Available: 1,998 tokens at $50</span>
                </div>
              </div>
            </v-col>
          </v-row>
        </div>
      </v-container>
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
