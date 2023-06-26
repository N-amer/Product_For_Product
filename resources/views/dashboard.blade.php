<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-3xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Overzicht') }}
            <button id="show-info" class="bg-blue-500 text-white py-2 px-4 rounded">Show Information</button>
            <div id="info" class="hidden bg-gray-100 p-4">
                <p>This is the information you want to show.</p>
            </div>
        </h2>
        <div class="flex justify-end">
            <a href="{{route('certificate')}}">
                <button class="rounded-full bg-green-400 py-1 px-2.5 text-slate-200">Download certificate</button>
            </a>
        </div>
    </x-slot>

    <div class="mx-auto sm:px-6 lg:px-8 flex flex-wrap justify-center gap-x-3 gap-y-1">
        <div class="grid grid-rows-2 grid-flow-col w-[49.5%] h-[14rem] my-2 pl-6 p-0.5 bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="flex flex-col items-center font-bold drop-shadow-md sm:rounded-lg m-3 m w-[80%] py-1 bg-slate-100 text-gray-900 dark:text-gray-100">
                <h1 class="font-serif mb-1 text-2xl opacity-60">Bomen</h1>
                <h2 class="text-xl font-bold">{{$doneted_tree->sum()}}</h2>
            </div>
            <div class="flex flex-col items-center font-bold drop-shadow-md sm:rounded-lg m-3 m w-[80%] py-1 bg-slate-100 text-gray-900 dark:text-gray-100">
                <h1 class="font-serif mb-1 text-2xl opacity-60">Water</h1>
                <h2 class="text-xl font-bold">345 l</h2>
            </div>
            <div class="flex flex-col items-center font-bold drop-shadow-md sm:rounded-lg m-3 m w-[80%] py-1 bg-slate-100 text-gray-900 dark:text-gray-100">
                <h1 class="font-serif mb-1 text-2xl opacity-60">Groene punten</h1>
                <h2 class="text-xl font-bold">{{$doneted_tree->sum() * 2}}</h2>
            </div>
            <div class="flex flex-col items-center font-bold drop-shadow-md sm:rounded-lg m-3 m w-[80%] py-1 bg-slate-100 text-gray-900 dark:text-gray-100">
                <h1 class="font-serif mb-1 text-2xl opacity-60">CO-2</h1>
                <h2 class="text-xl font-bold">34 ton</h2>
            </div>
            <div class="flex flex-col items-center font-bold drop-shadow-md sm:rounded-lg m-3 m w-[80%] py-1 bg-slate-100 text-gray-900 dark:text-gray-100">
                <h1 class="font-serif mb-1 text-2xl opacity-60">Geld bespaard</h1>
                <h2 class="text-xl font-bold">€345.00</h2>
            </div>
            <div class="flex flex-col items-center font-bold drop-shadow-md sm:rounded-lg m-3 m w-[80%] py-1 bg-slate-100 text-gray-900 dark:text-gray-100">
                <h1 class="font-serif mb-1 text-2xl opacity-60">Landen</h1>
                <h2 class="text-xl font-bold">34</h2>
            </div>
        </div>
        <div class="grid grid-rows-2 grid-flow-col w-[49.5%] h-[14rem] my-2 pl-2 p-1 bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            @foreach ($categories as $category)
            <button class="flex flex-col items-center font-bold sm:rounded-lg m-2 w-[80%] hover:bg-sky-700 py-1 bg-slate-500 text-gray-900 dark:text-gray-100">
                <h3 class="text-white mb-0.5">{{ucfirst( $category->name)}}</h3>
                <img class="w-14 h-14" src="{{asset('./img/darkmode/' .$category->name. '.png')}}" alt="Plastic">
            </button>

            @endforeach
            <!--
            <button class="flex flex-col items-center font-bold sm:rounded-lg m-2 w-[80%] hover:bg-sky-700 py-1 bg-slate-500 text-gray-900 dark:text-gray-100">
                <h3 class="text-white mb-0.5">Bonen</h3>
                <img class="w-14 h-14" src="{{asset('./img/darkmode/beans.png')}}" alt="Plastic">
            </button>
            <button class="flex flex-col items-center font-bold sm:rounded-lg m-2 w-[80%] hover:bg-sky-700 py-1 bg-slate-500 text-gray-900 dark:text-gray-100">
                <h3 class="text-white mb-0.5">Textiel</h3>
                <img class="w-14 h-14" src="{{asset('./img/darkmode/clothes.png')}}" alt="Plastic">
            </button>
            <button class="flex flex-col items-center font-bold sm:rounded-lg m-2 w-[80%] hover:bg-sky-700 py-1 bg-slate-500 text-gray-900 dark:text-gray-100">
                <h3 class="text-white mb-0.5">Elektronica</h3>
                <img class="w-14 h-14" src="{{asset('./img/darkmode/gadgets.png')}}" alt="Plastic">
            </button>
            <button class="flex flex-col items-center font-bold sm:rounded-lg m-2 w-[80%] hover:bg-sky-700 py-1 bg-slate-500 text-gray-900 dark:text-gray-100">
                <h3 class="text-white mb-0.5">Bekers</h3>
                <img class="w-14 h-14" src="{{asset('./img/darkmode/hot-drink.png')}}" alt="Plastic">
            </button>
            <button class="flex flex-col items-center font-bold sm:rounded-lg m-2 w-[80%] hover:bg-sky-700 py-1 bg-slate-500 text-gray-900 dark:text-gray-100">
                <h3 class="text-white mb-0.5">Restjes</h3>
                <img class="w-14 h-14" src="{{asset('./img/darkmode/leftovers.png')}}" alt="Plastic">
            </button>
            <button class="flex flex-col items-center font-bold sm:rounded-lg m-2 w-[80%] hover:bg-sky-700 py-1 bg-slate-500 text-gray-900 dark:text-gray-100">
                <h3 class="text-white mb-0.5">Papier</h3>
                <img class="w-14 h-14" src="{{asset('./img/darkmode/newspaper-folded.png')}}" alt="Plastic">
            </button>
            <button class="flex flex-col items-center font-bold sm:rounded-lg m-2 w-[80%] hover:bg-sky-700 py-1 bg-slate-500 text-gray-900 dark:text-gray-100">
                <h3 class="text-white mb-0.5">Handoekjes</h3>
                <img class="w-14 h-14" src="{{asset('./img/darkmode/paper-towel.png')}}" alt="Plastic">
            </button>
            <button class="flex flex-col items-center font-bold sm:rounded-lg m-2 w-[80%] hover:bg-sky-700 py-1 bg-slate-500 text-gray-900 dark:text-gray-100">
                <h3 class="text-white mb-0.5">Metaal</h3>
                <img class="w-14 h-14" src="{{asset('./img/darkmode/scrap.png')}}" alt="Plastic">
            </button>
            <button class="flex flex-col items-center font-bold sm:rounded-lg m-2 w-[80%] hover:bg-sky-700 py-1 bg-slate-500 text-gray-900 dark:text-gray-100">
                <h3 class="text-white mb-0.5">Glas</h3>
                <img class="w-14 h-14" src="{{asset('./img/darkmode/wine.png')}}" alt="Plastic">
            </button>
        -->
        </div>

        <div class=" grid grid-flow-col w-full h-full bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="flex flex-col items-center font-bold drop-shadow-md sm:rounded-lg m-3 py-1 bg-slate-200 text-gray-900 dark:text-gray-100">
                <h1 class="font-mono my-1 text-md">Besparingen</h1>
                <div class="p-5">
                    <canvas id="savingsChart" width="600" height="400"></canvas>
                </div>
            </div>
            <div class="flex flex-col items-center font-bold drop-shadow-md sm:rounded-lg m-3 py-1 bg-slate-200 text-gray-900 dark:text-gray-100">
                <h1 class="font-mono my-1 text-md">Community participation</h1>
                <div class="w-full p-5">
                    <canvas id="community-participation-chart" width="400" height="400"></canvas>
                </div>

            </div>
            <div class="flex flex-col items-center font-bold drop-shadow-md sm:rounded-lg m-3 py-1 bg-slate-200 text-gray-900 dark:text-gray-100">
                <h1 class="font-mono my-1 text-md">Saved Energy</h1>
                <div class="w-full p-5">
                    <canvas id="energySavingsChart" height="400"></canvas>
                </div>
            </div>
            <div class="w-1/2">

                <canvas id="savingsChart" width="800" height="400"></canvas>
            </div>
        </div>
    </div>
    <script>
        // chart data for all savings
        const savingsData = @json($savings);
        const saving_chart = document.getElementById('savingsChart').getContext('2d');

        const myChart = new Chart(saving_chart, {
            type: 'line',
            data: {
                labels: savingsData.map(s => s.date),
                datasets: [{
                        label: 'CO2',
                        data: savingsData.map(s => s.co2_savings),
                        backgroundColor: 'rgba(255, 99, 132, 0.2)',
                        borderColor: 'rgba(255, 99, 132, 1)',
                        borderWidth: 1
                    },
                    {
                        label: 'Water',
                        data: savingsData.map(s => s.water_savings),
                        backgroundColor: 'rgba(54, 162, 235, 0.2)',
                        borderColor: 'rgba(54, 162, 235, 1)',
                        borderWidth: 1
                    },
                    {
                        label: 'Energy',
                        data: savingsData.map(s => s.energy_savings),
                        backgroundColor: 'rgba(255, 206, 86, 0.2)',
                        borderColor: 'rgba(255, 206, 86, 1)',
                        borderWidth: 1
                    },
                    {
                        label: 'Trees',
                        data: savingsData.map(s => s.trees_savings),
                        backgroundColor: 'rgba(75, 192, 192, 0.2)',
                        borderColor: 'rgba(75, 192, 192, 1)',
                        borderWidth: 1
                    },
                    {
                        label: 'Raw Materials',
                        data: savingsData.map(s => s.raw_materials_savings),
                        backgroundColor: 'rgba(153, 102, 255, 0.2)',
                        borderColor: 'rgba(153, 102, 255, 1)',
                        borderWidth: 1
                    }
                ]
            },
            options: {
                scales: {
                    x: {
                        stacked: true
                    },
                    y: {
                        stacked: true
                    }
                }
            }
        });

        // community participation chart
        var ctx = document.getElementById('community-participation-chart').getContext('2d');
        var chart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: {
                    !!json_encode($labels) !!
                },
                datasets: [{
                    label: 'Community Participation',
                    data: {
                        !!json_encode($countData) !!
                    },
                    backgroundColor: 'rgba(0, 138, 108, 0.2)',
                    borderColor: 'rgba(0, 118, 128, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });

        // charts for energy save
        var savingEnergy = document.getElementById('energySavingsChart').getContext('2d');

        var savings = {
            !!json_encode($savings) !!
        };
        var energy = savings.map(function(item) {
            return item.energy_savings;
        });
        var months = savings.map(function(item) {
            return item.date;
        });

        var energyChart = new Chart(savingEnergy, {
            type: 'doughnut',
            data: {
                labels: months,
                datasets: [{
                    label: 'Total Savings in Energy',
                    data: energy,
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.6)',
                        'rgba(54, 162, 235, 0.6)',
                        'rgba(255, 206, 86, 0.6)',
                        'rgba(75, 192, 192, 0.6)',
                        'rgba(153, 102, 255, 0.6)',
                        'rgba(255, 159, 64, 0.6)'
                    ]
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false
            }
        });
    </script>
</x-app-layout>