<!DOCTYPE html>
<?php include_once("pages/places/01-parts/01-html_after_doctype.inc"); ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hawaii - TravelWave.us</title>
    <?php include_once("pages/places/01-parts/02-html_head_after_title.inc"); ?>
</head>

<body id="Hawaii">

<header class="header" id="header">
    <?php include_once("pages/places/01-parts/03-header.inc"); ?>
</header>


<div class="hero-title">
    <h3>Welcome to </h3>
    <h1> Hawaii! </h1>
</div>

<div class="wrapper">
    <div class="row hero-image">
        <div class="col col-8 ism-slider" data-play_type="loop" data-interval="5000" data-image_fx="zoompan"
             id="my-slider">

            <!-- The 'ol li img' code below re-sizes based on screen size, using PHP's mobiledetect solution. -->
            <ol>
                <li>
                    <img src="pages/places/hawaii/slides/slide01-<?= $size ?>.jpg" alt="Hawaii Photo 1">
                </li>
                <li>
                    <img src="pages/places/hawaii/slides/slide02-<?= $size ?>.jpg" alt="Hawaii Photo 2">
                </li>
                <li>
                    <img src="pages/places/hawaii/slides/slide03-<?= $size ?>.jpg" alt="Hawaii Photo 3">
                </li>
                <li>
                    <img src="pages/places/hawaii/slides/slide04-<?= $size ?>.jpg" alt="Hawaii Photo 4">
                </li>
                <li>
                    <img src="pages/places/hawaii/slides/slide05-<?= $size ?>.jpg" alt="Hawaii Photo 5">
                </li>
                <li>
                    <img src="pages/places/hawaii/slides/slide06-<?= $size ?>.jpg" alt="Hawaii Photo 6">
                </li>
            </ol>
        </div>
    </div>


    <div class="row sameHeights">
        <div class="col col-4">
            <article class="panel panel-plain" data-key="sameHeights">
                <h3>Pearl Harbor</h3>
                <p>

                    <!-- This demonstrates the use of Picturefill.min.js -->
                    <picture>
                        <!--[if IE 9]>
                        <video style="display: none;"><![endif]-->
                        <source srcset="pages/places/hawaii/img/pearlharbor-tablet.jpg"
                                media="(min-width: 480px) and (max-width: 767px)">
                        <source srcset="pages/places/hawaii/img/pearlharbor-mobile.jpg" media="(max-width: 479px)">
                        <!--[if IE 9]></video><![endif]-->
                        <img src="pages/places/hawaii/img/pearlharbor-desktop.jpg" alt="Pearl Harbor">
                    </picture>

                </p>
                <p>
                    Pearl Harbor, is the center of the tourist attraction on the Big Island of Oahu, Hawaii. Some
                    important memorial sites can be traveled by bus. It is recommended to get your tour tickets early
                    online. But tickets are also available on-site at the USS Arizona Memorial, which is the focal point
                    of the historic event in WWII. It is an excellent time to pay tribute tho those who served and
                    sacrificed their lives to defend the country.
                </p>

                <p>
                    Just around the corner is the Bowfin Submarine Museum and Park. I was privileged to visit Pearl
                    Harbor in 2015; it is like Deja Vu in the 1940's. The submarine is well preserved. You can imagine
                    how it is to be a Navy crew during those times. You will be provided with a recorded audio that
                    narrates about the parts of the submarine. Near the area the torpedoes are well preserved, giant USS
                    missiles is an excellent view.
                </p>

                <p>
                    Battleship USS Missouri was nicked named "Mighty Mo," which is located on the other side of the
                    island.
                    From USS Arizona Memorial you have to take a bus trip to reach this another historic site. It is
                    gigantic
                    battleship the last of it's kind. It can take around 30-40 mins to complete the tour. The tourist
                    guides are so informative, and you can ask some questions as well. The outside upper deck has a
                    large canon, where it's good to have your cameras ready.
                </p>

                <p>
                    USS Oklahoma Memorial, once you completed the tour at USS Missouri, it is just a few walks away to
                    checkout
                    and pays respect to this great ship. It is where 429 US Marines and sailors spent their lives after
                    a
                    The torpedo struck the ship. Just get your bookings early, and almost all the Memorial Sites opens
                    at around 9:00 AM.
                </p>


                <p>
                    <a href="" class="see-more"><img src="asset/img/extras/touch01.png" alt="Read More"><span
                                class="text">Read more...</span></a>
                </p>


            </article>
        </div>


        <div class="col col-4">
            <article class="panel panel-plain" data-key="sameHeights">
                <h3>Grand Wailea Hotel</h3>
                <p>
                    <img src="pages/places/hawaii/img/hawaii05.jpg" class="img-half-width"
                         alt="Grand Wailea Hotel">
                </p>
                <p>
                    The Grand Wailea Hotel, let your family experience fun, adventure, excitement and beautiful
                    memories.
                    It is elegant luxury hotel and resorts in the heart of the city. With amazing landscape and
                    exquisite garden that was trim with an artist's hand. There are pools all over its vicinity. There
                    find hotels in the ground floor and some are accessible and distributed across levels. It houses
                    variety of restaurants
                    for people from different cultures, or those who just want to experience exotic dishes.
                    The rooms are spacious with 40 inch UltraHD TV. Other amenities includes hot and cold shower, free
                    high-speed wifi, safety deposit box, microwave, refrigerator, quality sofas, pillows, and linens.
                    The clean and freshness in the environment can be easily felt within the room. The service staff is
                    friendly,
                    highly trained to provide and help you with your needs all day round. There are few restaurants in
                    the vicinity that are open 24 hours, to provide with the needs of your different lifestyle. This is
                    an ideal place to stay for those who are busy working on-the-go and grave-yard shift. The adult
                    pools are always kept clean and accessible thought-out the day.
                </p>
                <p>

                    There are many shopping malls, restaurants and stalls of many varieties just near the hotel.
                    Fast food restaurants are the most prominent in the area; these are open 24-hours. There are banks
                    and ATMs
                    such as Bank of America, Wells Fago, Citi, these are walking distance away from the hotel.
                    This provides for your financial needs in case of emergencies.
                    Public transportation is accessible thru subway, trams, and buses that you can quickly go to any
                    destinations.
                    Other famous landmarks such as museums and parks are also walking distance. The hotel also
                    provides
                    travel services to remote and exotic sites such as the volcanic parks that are famous for
                    tourist.
                </p>
                <p>
                    <a href="" class="see-more"><img src="asset/img/extras/touch01.png" alt="Read More"><span
                                class="text">Read more...</span></a>
                </p>
            </article>
        </div>
    </div>

    <div class="row sameHeights">
        <div class="col col-2">
            <article class="panel panel-plain" data-key="sameHeights2">
                <h3>Hula Dance</h3>
                <p>
                    <img src="pages/places/hawaii/img/hawaii01.jpg" class="img-half-width" alt="Hawaii">
                </p>
                <p>
                    Hula a Hawaiian traditional dance it is said that it's a ritual to please the gods, a mystique to
                    the people an ancient tribe. A luau is another festive to watch the hula and study about Hawaiian
                    and Polynesian culture. Hula is a culture and taught by a Kumu hula in a halau school. Hula
                    preserves the songs and tradition of the people. Authentic hula can be seen during festivals such as
                    Merrie
                    Monarch Festival that is held every March in the town of Hilo
                </p>
                <p>
                    This enchanting art form has become a cosmopolitan significative of Hawaiian culture and the fashion
                    of Hawaii's people. The popularity of hula has circulated to the U.S. principal, Japan and even
                    Europe. There are many sign and styles of hula. </p>

                <p>
                    <a href="" class="see-more"><img src="asset/img/extras/touch01.png" alt="Read More"><span
                                class="text">Read more...</span></a>
                </p>
            </article>
        </div>

        <div class="col col-2">
            <article class="panel panel-plain" data-key="sameHeights2">
                <h3>Iolani Palace</h3>
                <p>
                    <img src="pages/places/hawaii/img/hawaii02.jpg" class="img-full-width" alt="The Food">
                </p>
                <p>
                    When you visit Hawaii, you wouldn't want to miss seeing the beautiful Iolani Royal Palace. It was
                    the
                    Residence to the two last Kamehameha Monarchs. King Kalakaua constructed it in 1882, and the last is
                    Queen Liliuokalani, which is his sister. The monarchy ended in the late 1800's. The
                    architecture
                    is
                    Stunning every part of the building is a well crafted with an eye to detail. It is registered in
                    the National
                    Historic Landmarks of the United States. Some buses will bring you to the palace. Inside the castle,
                    you can see well-crafted artifacts dates back to the establishment of the dynasty.
                    It is believed that Kamehameha III did not sleep in the palace but built a hut made of grass just
                    adjunct but separate from it. The interiors do not have room for sleeping. It has throne hall, large
                    reception, and state dining room.
                </p>
                <p>
                    <a href="" class="see-more"><img src="asset/img/extras/touch01.png" alt="Read More"><span
                                class="text">Read more...</span></a>
                </p>

            </article>

        </div>

        <div class="col col-2">
            <article class="panel panel-plain" data-key="sameHeights2">
                <h3>Waikiki Beach</h3>
                <p>
                    <img src="pages/places/hawaii/img/hawaii03.jpg" class="img-full-width" alt="Featured Chef">
                </p>
                <p>

                    Waikiki Beach is one of the best in the world, with magnificent shoreline and landscape, the view is
                    breath-taking. Your Waikiki experience is not complete, without doing surfing. There are surfboards
                    for rent around the area. You can find distinct restaurants, from Japanese, Korean to the European
                    style,
                    and food from different cultures. There are also tattoo shops that are famous around the world.
                    There are modern hotels near the area.
                </p>

                <p>
                    The beach shoreline can get crowded on holidays. You can just relax under the sun or get tanned and
                    temporarily get away from busy life. Waikiki beach is just a walk away from famous and luxurious
                    hotels.
                    The water is so clean and colored blue reflecting that of the sky. The weather is summer all year
                    round,
                    but also frequently rains. Nightlife is great; you can just walk around or ride a tram. Local bars,
                    convenient stores are open late night.
                </p>
                <p>
                    <a href="" class="see-more"><img src="asset/img/extras/touch01.png" alt="Read More"><span
                                class="text">Read more...</span></a>
                </p>

            </article>
        </div>

        <div class="col col-2">
            <article class="panel panel-plain" data-key="sameHeights2">
                <h3>Surfing</h3>
                <p>
                    <img src="pages/places/hawaii/img/hawaii06.jpg" class="img-full-width" alt="Featured Chef">
                </p>
                <p>
                    Surfing is not an original tradition for the ancient Hawaiians. It was integrated into the Hawaiian
                    culture in the 1800s and considered as an art they called it sliding with the waves It was then introduced to
                    Australia in 1915 by The Hawaiian Duke Kahanamoku. He demonstrated the art on Manly Beach,
                    Australia. Many Americans from the mainland visit Hawaii for its waves and weather, especially on
                    Winter Season.
                </p>

                <p>
                    Surfing is now a formal sport, and people are competing from around the world, This is being Held
                    not only in Hawaii but other parts of the world. It became the trademark of Hawaii. The waves
                    attract millions of tourists from all different continents, in particular during the winters. It is
                    popular among teens that seek adventure and adrenaline. Local Hawaiians take this as an advantage,
                    and surfboarding also became a livelihood for most people in the Island.
                </p>
                <p>
                    <a href="" class="see-more"><img src="asset/img/extras/touch01.png" alt="Read More"><span
                                class="text">Read more...</span></a>
                </p>

            </article>
        </div>

    </div>

</div> <!-- end of container Wrapper -->


<footer class="footer">
    <?php include_once("pages/places/01-parts/04-footer.inc"); ?>
</footer>

</body>
</html>