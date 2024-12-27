<template lang="">


<div class="flex flex-col">
  <div class="overflow-x-auto sm:mx-0.5 lg:mx-0.5">
    <div class="py-2 inline-block min-w-full">
      <div class="overflow-hidden">
        <table class="min-w-full rouned-lg">
          <thead class="bg-orange-100 border-b">
            <tr>
              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                #
              </th>
              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                NAMA UMKM
              </th>
              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                OWNER
              </th>
              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                KONTAK
              </th>
              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                KATEGORI
              </th>
              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                TANGGAL MASUK
              </th>
              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                TANGGAL MASUK
              </th>
              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                ACTION
              </th>
            </tr>
          </thead>
          <tbody>

            <tr v-for="a in umkms" :key="a.message"
            class="hover:bg-orange-100 transition duration-300 ease-in-out ">
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                {{a.jenis_kelamin_personal}}
              </td>
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                {{a.kode_pos_personal}}
              </td>
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                {{a.nama_personal}}
              </td>
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                {{a.no_telp_personal}}
              </td>
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                {{a.kode_pos_personal}}
              </td>
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                {{a.kode_pos_personal}}
              </td>
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                {{a.kode_pos_personal}}
              </td>
              <td class="flex gap-4 p-4">
                <a href="" type="button" class="rounded-lg p-1 px-4 bg-neutral-500">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 stroke-white">
  <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
</svg>

                </a>
                <a href="" type="button" class="rounded-lg p-1 px-4 bg-red-600">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 stroke-white">
  <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
</svg>

                </a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>


  <div class="flex justify-between">
    <a href="/umkm/daftar" type="button" class="rounded-lg p-2 px-4 bg-orange-600 text-white">Tambahkan</a>
    <a href="#" type="button" class="rounded-lg p-2 px-4 bg-orange-600 text-white">EXPORT TO SHEET</a>
  </div>

</template>
<script>
import axios from 'axios';

export default {
  data() {
    return {
      umkms: {},
    };
  },
  methods: {
    loadData() {
      axios.get('api/dashboard')
        .then(({ data }) => {
          this.umkms = data;
        })
        .catch(error => {
          console.error('Error fetching data:', error);

          // Handle the error here, for example, show an alert to the user
          // alert('Terjadi kesalahan saat memuat data. Silakan coba lagi nanti.');
        });
    },
  },
  created() {
    this.loadData();
  },
};
</script>
