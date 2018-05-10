@extends('layouts.app1')

@section('content')
 <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="text-center display-3 text-primary">Welcome To DDU Student Union Official Page</h1>
          <p class="">
          <p class="lead">This page will be available for Dire Dawa Uninversity student to enhance the existing voting system to the better technology transferThis page will be available for Dire Dawa Uninversity student to enhance the existing voting system to the better technology transferThis page will be available for Dire Dawa Uninversity student to enhance the existing voting system to the better technology transferThis page will be available for Dire Dawa Uninversity student to enhance the existing voting system to the better technology transfer</p></p>

           <div id="app">
              <p>Quality:</p>
                <star-rating> name="quality"</star-rating>

                <p>Communication:</p>
                <star-rating :value="3" name="communication"></star-rating>

                <p>Professionalism:</p>
                <star-rating name="professionalism"></star-rating>
            </div>
        </div>

      </div>
    </div>
  </div>
@endsection
@section('script')
<script type="text/javascript">
   Vue.component('star-rating', {

  props: {
    'name': String,
    'value': null,
    'id': String,
    'disabled': Boolean,
    'required': Boolean
  },

  template: '<div class="star-rating">\
        <label class="star-rating__star" v-for="rating in ratings" \
        :class="{\'is-selected\': ((value >= rating) && value != null), \'is-disabled\': disabled}" \
        v-on:click="set(rating)" v-on:mouseover="star_over(rating)" v-on:mouseout="star_out">\
        <input class="star-rating star-rating__checkbox" type="radio" :value="rating" :name="name" \
        v-model="value" :disabled="disabled">★</label></div>',

  /*
   * Initial state of the component's data.
   */
  data: function() {
    return {
      temp_value: null,
      ratings: [1, 2, 3, 4, 5]
    };
  },

  methods: {
    /*
     * Behaviour of the stars on mouseover.
     */
    star_over: function(index) {
      var self = this;

      if (!this.disabled) {
        this.temp_value = this.value;
        return this.value = index;
      }

    },

    /*
     * Behaviour of the stars on mouseout.
     */
    star_out: function() {
      var self = this;

      if (!this.disabled) {
        return this.value = this.temp_value;
      }
    },

    /*
     * Set the rating of the score
     */
    set: function(value) {
      var self = this;

      if (!this.disabled) {
        // Make some call to a Laravel API using Vue.Resource
        
        this.temp_value = value;
        return this.value = value;
      }
    }
  }

});

new Vue({
  el: '#app'
});

 </script>
 @endsection