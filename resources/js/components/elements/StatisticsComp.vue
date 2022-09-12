<template>
    <div class="d-flex justify-content-center">
        <Bar
        :chart-options="chartOptions"
        :chart-data="chartData"
        :chart-id="chartId"
        :dataset-id-key="datasetIdKey"
        :plugins="plugins"
        :css-classes="cssClasses"
        :styles="styles"
        :width="width"
        :height="height"
        />
    </div>
  </template>

  <script>
  import {apiUrlDatabase} from '../../data/apiConfig';
  import { Bar } from 'vue-chartjs/legacy'
  import { Chart as ChartJS, Title, Tooltip, Legend, BarElement, CategoryScale, LinearScale } from 'chart.js'

  ChartJS.register(Title, Tooltip, Legend, BarElement, CategoryScale, LinearScale)

  export default {
    name: 'StatisticsComp',
    components: { Bar },
    props: {
      chartId: {
        type: String,
        default: 'bar-chart'
      },
      datasetIdKey: {
        type: String,
        default: 'label'
      },
      width: {
        type: Number,
        default: 360
      },
      height: {
        type: Number,
        default: 250
      },
      cssClasses: {
        default: '',
        type: String
      },
      styles: {
        type: Object,
        default: () => {}
      },
      plugins: {
        type: Array,
        default: () => []
      },
      viewsArray: Array
    },
    data() {
      return {
        apiUrlDatabase,
        chartData: {
          labels: ['Media appartamenti', 'Questo appartamento'],
          datasets: [{
            label: 'Visualizzazioni',
            data: [],
            backgroundColor: [
                'rgba(54, 162, 235, 0.2)'
            ],
            borderColor: [
                'rgba(54, 162, 235, 1)'
            ],
            borderWidth: 1
          }]
        },
        chartOptions: {
          responsive: true
        },
        allApartmentsViews: 0
      }
    },

    methods:{
        getApartmentsViews(){
                axios.get(this.apiUrlDatabase)
                .then( res => {
                    this.allApartmentsViews = res.data;
                    // console.log(this.allApartmentsViews, 'Visualizzazioni del sito');
                });
            },
    },

    watch:{
        viewsArray(){

            console.log(this.allApartmentsViews, 'count appartamenti');
            this.viewsArray[0] = this.viewsArray[0] / this.allApartmentsViews;

            this.chartData.datasets[0].data = this.viewsArray;
            // console.log(this.chartData.datasets.data, 'cambiato valore mediani');
        }
    },

    mounted(){
        this.chartData.datasets[0].data = this.viewsArray;
        // console.log(this.chartData.datasets.data, 'valori mediani');
        this.getApartmentsViews();
    }
  }
  </script>


