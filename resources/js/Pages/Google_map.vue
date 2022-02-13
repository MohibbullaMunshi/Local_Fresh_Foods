<template>
 <app-layout>
    <header class="bg-white shadow">
      <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold text-gray-900">RAY Bangladesh</h1>
      </div>
    </header>
    <main>
      <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
        <!-- Replace with your content -->
        <div class="flex flex-col">
            <GoogleMap
                api-key="AIzaSyBTV7hHcm0rQebOm5piUDK8ZQC4DE__Fss"
                style="width: 100%; height: 500px"
                :center="center"
                :zoom="5"
                >
            <Marker :options="markerOptions" />
            </GoogleMap>
        </div>


        <!-- /End replace -->
      </div>
    </main>
 </app-layout>
</template>

<script>
import { defineComponent } from 'vue'
import { GoogleMap, Marker } from 'vue3-google-map'
import AppLayout from '../Layouts/AppLayout'
import { Link } from '@inertiajs/inertia-vue3'

export default defineComponent({
  components: { GoogleMap, Marker, AppLayout, Link },

  setup() {
    const center = { lat: 50.520107, lng: -4.315472 }
    const markerOptions = { clickable: true, position: center, label: 'Local', title: 'Local Fresh Foods' }

    return { center, markerOptions }
  },
})
</script>
