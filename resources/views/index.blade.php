<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.css" rel="stylesheet" />
    <title>Product for Product</title>
</head>

<body class="m-0 p-0">
    <div class="flex">
        <nav class="w-full" style="background-color: #55E355;">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex items-center justify-between h-16">
                    <div class="flex-shrink-0">
                        <a href="index.html"><img class="h-30 w-64" src="{{asset('./site_img/PFP_logo.png')}}" alt="Logo"></a>
                    </div>
                    <div class="hidden md:block">
                        <div class="ml-10 flex items-baseline">
                            <a href=""
                                class="px-3 py-2 rounded-md text-sm font-medium text-dark hover:text-white focus:outline-none focus:text-black-300">About
                                us</a>
                            <a href="{{ url('/dashboard') }}"
                                class="px-3 py-2 rounded-md text-sm font-medium text-dark hover:text-white :text-gray-300 focus:outline-none focus:text-black-300">Dashboard</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <img src="{{asset('./site_img/PFP_banner.png')}}" alt="" style="width: 100%; height: 400px;">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-center py-4 ">
            <h1 class="text-2xl font-bold">Reus Reduce Recycle</h1>
        </div>
    </div>

    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <div class="bg-white rounded-lg shadow-lg p-4">
                <h2 class="text-lg font-semibold mb-2">Recycling feiten</h2>
                <p class="text-gray-600">
                    In 2020 recycleerde Nederland ongeveer 50% van het huishoudelijk afval,
                    wat een stijging was ten opzichte van de 49% die in 2019 werd gerecycled.
                    Het land streeft ernaar dit percentage in 2025 te verhogen tot 75%.
                    Nederland heeft een goed ingeburgerd afvalbeheersysteem met een sterke focus op recycling,
                    en het heeft een reeks beleidsmaatregelen en maatregelen om recycling aan te moedigen.
                </p>
            </div>

            <div class="bg-white rounded-lg shadow-lg p-4">
                <h2 class="text-lg font-semibold mb-2">Recycling Tip</h2>
                <p class="text-gray-600">
                    Voor je ondoordacht alles in je boodschappenmandje gooit, stel jezelf de vraag: kan ik dit product
                    ook onverpakt kopen?
                    Vooral op de groente- en fruitafdeling kun je diezelfde appels vaak ook gewoon los kopen in plaats
                    van netjes naast elkaar geplaatst in een plastic verpakking.
                    Neem ze los mee of in een herbruikbaar zakje dat je zelf meeneemt of tegenwoordig ook bij veel
                    supermarkten vindt. Kleine moeite, groot resultaat.
                </p>
            </div>

            <div class="bg-white rounded-lg shadow-lg p-4">
                <h2 class="text-lg font-semibold mb-2">Waar is Recyclen goed voor?</h2>
                <p class="text-gray-600">
                    Het bespaart energie, vermindert lucht- en waterverontreiniging,
                    vermindert broeikasgassen en spaart natuurlijke hulpbronnen.
                    Stanford heeft gerecycleerd, gecomposteerd en op een andere manier aangekocht,
                    waardoor 62% van het afval is verminderd en het storten met 35% is verminderd.
                </p>
            </div>
        </div>
    </div>
    <x-footer/>
</body>

</html>