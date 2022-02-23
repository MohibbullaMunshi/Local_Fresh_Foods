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
                api-key=""
                style="width: 100%; height: 500px"
                :center="center"
                :zoom="5"

                >
            <Marker
            :options="markerOptions"
            icon='https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png'

             />
            <Marker
            :options="markerOptions"
            icon='https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png'

             />

            </GoogleMap>
        </div>


        <!-- /End replace -->
      </div>
      <iframe src="https://my.atlistmaps.com/map/b54e381f-240b-428e-b2d7-bf4f5580cc6a?share=true" allow="geolocation" width="100%" height="400px" frameborder="0" scrolling="no" allowfullscreen></iframe>
      <div class="bg-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="max-w-2xl mx-auto py-16 sm:py-24 lg:py-32 lg:max-w-none">
        <h2 class="text-2xl font-extrabold text-gray-900">Collections</h2>

        <Link href="#">
        <div class="mt-6 space-y-12 lg:space-y-0 lg:grid lg:grid-cols-3 lg:gap-x-6">
          <div v-for="callout in callouts" :key="callout.name" class="group relative">
            <div class="relative w-full h-80 bg-white rounded-lg overflow-hidden group-hover:opacity-75 sm:aspect-w-2 sm:aspect-h-1 sm:h-64 lg:aspect-w-1 lg:aspect-h-1">
              <img :src="callout.imageSrc" :alt="callout.imageAlt" class="w-full h-full object-center object-cover" />
            </div>
            <h3 class="mt-6 text-sm text-gray-500">
              <a :href="callout.href">
                <span class="absolute inset-0" />
                {{ callout.name }}
              </a>
            </h3>
            <p class="text-base font-semibold text-gray-900">{{ callout.description }}</p>
          </div>
        </div>
        </Link>
      </div>
    </div>
  </div>
    </main>
 </app-layout>
</template>

<script>
import { defineComponent } from 'vue'
import { GoogleMap, Marker } from 'vue3-google-map'
import AppLayout from '../Layouts/AppLayout'
import { Link } from '@inertiajs/inertia-vue3'

const callouts = [
  {
    name: 'Desk and Office',
    description: 'Work from home accessories',
    imageSrc: 'https://tailwindui.com/img/ecommerce-images/home-page-02-edition-01.jpg',
    imageAlt: 'Desk with leather desk pad, walnut desk organizer, wireless keyboard and mouse, and porcelain mug.',
    href: '#',
  },
  {
    name: 'Self-Improvement',
    description: 'Journals and note-taking',
    imageSrc: 'https://tailwindui.com/img/ecommerce-images/home-page-02-edition-02.jpg',
    imageAlt: 'Wood table with porcelain mug, leather journal, brass pen, leather key ring, and a houseplant.',
    href: '#',
  },
  {
    name: 'Travel',
    description: 'Daily commute essentials',
    imageSrc: 'https://tailwindui.com/img/ecommerce-images/home-page-02-edition-03.jpg',
    imageAlt: 'Collection of four insulated travel bottles on wooden shelf.',
    href: '#',
  },
]

export default defineComponent({
  components: { GoogleMap, Marker, AppLayout, Link },

  setup() {
    const center = { lat: 50.520107, lng: -4.315472 }
    const markerOptions = { clickable: true, position: center, label: '', title: '' }

    return { center, markerOptions,callouts }
  },
})
</script>
