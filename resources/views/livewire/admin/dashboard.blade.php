@section('title', 'Admin Dashboard - ' . config('app.name', 'Shielabs'))
@livewire('components.sidebar')
<div class="relative z-10 mt-10 p-5">
    <div class="w-full">
        <div class="text-center grid grid-cols-3 gap-4 p-3">
            <div id="salesChart" class="col-span-1 shadow-lg h-auto p-3">
            </div>
            <div id="productsChart" class="col-span-1 shadow-lg h-auto p-3">
            </div>
            <div class="col-span-1 shadow-lg h-auto p-3">
                Users
            </div>
        </div>
    </div>
</div>

<script>
    Apex.dataLabels = {
        enabled: false
    }
    var randomizeArray = function(arg) {
        var array = arg.slice();
        var currentIndex = array.length,
            temporaryValue, randomIndex;

        while (0 !== currentIndex) {

            randomIndex = Math.floor(Math.random() * currentIndex);
            currentIndex -= 1;

            temporaryValue = array[currentIndex];
            array[currentIndex] = array[randomIndex];
            array[randomIndex] = temporaryValue;
        }

        return array;
    }
    var sampleData = [47, 45, 54, 38, 56, 24, 65, 31, 37, 39, 62, 51, 35, 41, 35, 27, 93, 53, 61, 27, 54, 43, 19, 46];

    var salesChartOptions = {
        series: [{
            name: "Sales",
            data: randomizeArray(sampleData)
        }],
        chart: {
            type: 'area',
            height: 350,
            zoom: {
                enabled: false
            },
            sparkline: {
                enabled: true
            },
        },
        dataLabels: {
            enabled: false
        },
        stroke: {
            curve: 'straight'
        },

        title: {
            text: 'Sales',
            align: 'center'
        },
        subtitle: {
            text: 'Monthly Sales',
            align: 'left'
        },
        labels: [...Array(24).keys()].map(n => `2018-09-0${n+1}`),
        xaxis: {
            type: "datetime",
            show: false
        },
        yaxis: {
            show: false
        },
        legend: {
            horizontalAlign: 'left'
        }
    };

    var salesChart = new ApexCharts(document.querySelector('#salesChart'), salesChartOptions).render();


    var sampleData2 = [47, 45, 54, 38, 56];
    var productsChartOptions = {
        series: [{
            name: "Quantity",
            data: randomizeArray(sampleData2)
        }],
        chart: {
            type: 'bar',
            height: 350,
            zoom: {
                enabled: false
            },
            sparkline: {
                enabled: true
            },
        },
        dataLabels: {
            enabled: false
        },
        stroke: {
            curve: 'straight'
        },

        title: {
            text: 'Products',
            align: 'center'
        },
        subtitle: {
            text: 'Quantity',
            align: 'left'
        },
        labels: ["Shoes", "Dress", "Pants", "Bags", "Shirts"],
        xaxis: {
            type: "category",
            show: false
        },
        yaxis: {
            show: false
        },
        legend: {
            horizontalAlign: 'left'
        }
    };

    var productsChart = new ApexCharts(document.querySelector('#productsChart'), productsChartOptions).render();


</script>
