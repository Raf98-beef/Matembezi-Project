@extends('layouts.black')
@section('content')
<link rel="stylesheet" href="assets/css/main.css" />
<header class="align-center" style="margin-top:100px">
    <p class="special">Clean and well serviced Car</p>
    <h2>Car Hire</h2>
</header>

<!-- One -->
<section id="one" class="wrapper style2">
    <div class="inner">
        <div class="grid-style">

            <div>
                <div class="box">
                    <div class="image fit">
                        <img src="images/mara.jpg" alt="" />
                    </div>
                    <div class="content">
                        <header class="align-center">
                            <p>3 Days & 2 Nights</p>
                            <h2>Maasai Mara National Reserve</h2>
                        </header>
                        <p>Maasai Mara National Reserve is one of Africa’s leading safari destinations with a mélange of Wildlife and bird species. It is one of the 8 wonders of the world and it’s the arena for the Olympic of wild animals; the great wildebeest migration.
                            Maasai Mara National reserve is perched peacefully in the Great Rift Valley about 6-hour drive from Nairobi. It makes up a marginal 0.01% of Africa’s total land surface, but it boasts more than 40% of Africa’s large mammals including the Big 5.</p>
                        <p><b>Ksh 15,000</b></p>
                        <footer class="align-center">
                            <a href="#" class="button alt">Book Now</a>
                        </footer>
                    </div>
                </div>
            </div>

            <div>
                <div class="box">
                    <div class="image fit">
                        <img src="images/p3.jpg" alt="" />
                    </div>
                    <div class="content">
                        <header class="align-center">
                            <p>2 Days & 1 Nights</p>
                            <h2>Amboseli Getaway</h2>
                        </header>
                        <p>Amboseli national park is Kenya’s second most popular game park, after Masai Mara, the Park is home to an abundance of wildlife, including buffalos, leopards, spotted hyenas, giraffes, antelopes and cheetahs.Over 300 bird species can also be spotted in the game park.Nature lovers can explore five different habitats here ranging from the dried-up bed of Lake Amboseli, wetlands with sulphur springs, the savannah and woodlands.  They can also visit the local Maasai community who live around the park and experience their authentic culture.</p>
                        <p><b>Ksh 11,500</b></p>
                        <footer class="align-center">
                            <a href="{{url('/payment')}}" class="button alt">Book Now</a>
                        </footer>
                    </div>
                </div>
            </div>

            <div>
                <div class="box">
                    <div class="image fit">
                        <img src="images/nak.jpg" alt="" />
                    </div>
                    <div class="content">
                        <header class="align-center">
                            <p>3 Days & 2 Nights</p>
                            <h2>Lake Nakuru National Park</h2>
                        </header>
                        <p>“A beautiful wildlife haven” on the floor of the Great Rift Valley, surrounded by wooded and bushy grassland, lies the beautiful Lake Nakuru National Park. Visitors can enjoy the wide ecological diversity and varied habitats that range from Lake Nakuru itself to the surrounding escarpment and picturesque ridges. Lake Nakuru National Park is ideal for bird watching, hiking,picnic and game drives.</p>
                        <p><b>Ksh 17,500</b></p>
                        <footer class="align-center">
                            <a href="#" class="button alt">Book Now</a>
                        </footer>
                    </div>
                </div>
            </div>

            <div>
                <div class="box">
                    <div class="image fit">
                        <img src="images/lon.jpg" alt="" />
                    </div>
                    <div class="content">
                        <header class="align-center">
                            <p>1 Days & 1 Nights</p>
                            <h2>Mount Longonot National Park</h2>
                        </header>
                        <p>Rising from the floor of the Great Rift Valley like a monolith is the extinct volcano of Mount Longonot. A unique feature is the thick forest that lies within the crater of the mountain. The crater rim also provides great scenic views across the beautiful Rift Valley all the way to Lake Naivasha. Major wildlife attractions at Mount Longonot include buffaloes, elands, lion, leopard, bushbucks.</p>
                        <p><b>Ksh 8,000</b></p>
                        <footer class="align-center">
                            <a href="#" class="button alt">Book Now</a>
                        </footer>
                    </div>
                </div>
            </div>

            <div>
                <div class="box">
                    <div class="image fit">
                        <img src="images/hel.jpg" alt="" />
                    </div>
                    <div class="content">
                        <header class="align-center">
                            <p>5 Days & 4 Nights</p>
                            <h2> Hells Gate National Park</h2>
                        </header>
                        <p>Named for the intense geothermal activity within its boundaries, the Hell's Gate National Park is a remarkable quarter of the Great Rift Valley. Spectacular scenery including the towering cliffs, water-gouged gorges, stark rock towers, scrub clad volcanoes and belching plumes of geothermal steam make it one of the most atmospheric Parks in Africa. </p>
                        <p><b>Ksh 20,500</b></p>
                        <footer class="align-center">
                            <a href="#" class="button alt">Book Now</a>
                        </footer>
                    </div>
                </div>
            </div>

            <div>
                <div class="box">
                    <div class="image fit">
                        <img src="images/mtkenya.jpg" alt="" />
                    </div>
                    <div class="content">
                        <header class="align-center">
                            <p>10 Days & 9 Nights</p>
                            <h2>Mount Kenya National Park</h2>
                        </header>
                        <p>Climbing to 5,199 meters, Mount Kenya is the second tallest mountain in Africa. The scenery surrounding this designated World Heritage Site is breath-taking. It is pristine wilderness with lakes, tarns, glaciers, dense forest, mineral springs and a selection of rare and endangered species of animals, high altitude adapted plains game and unique montane and alpine vegetation.</p>
                        <p><b>Ksh 35,000</b></p>
                        <footer class="align-center">
                            <a href="#" class="button alt">Book Now</a>
                        </footer>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection