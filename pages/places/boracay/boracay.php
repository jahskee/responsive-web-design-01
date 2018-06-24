<!DOCTYPE html>
<?php include_once("pages/places/01-parts/01-html_after_doctype.inc"); ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Boracay - TravelWave.us</title>
    <?php include_once("pages/places/01-parts/02-html_head_after_title.inc"); ?>
</head>

<body id="Boracay">

<header class="header" id="header">
    <?php include_once("pages/places/01-parts/03-header.inc"); ?>
</header>


<div class="hero-title">
    <h3>Welcome to </h3>
    <h1> Boracay! </h1>
</div>

<div class="wrapper">
    <div class="row hero-image">

        <div class="col col-8 ism-slider" data-play_type="loop" data-interval="5000" data-image_fx="zoompan"
             id="my-slider">

            <!-- The 'ol li img' code below re-sizes based on screen size, using PHP's mobiledetect solution. -->
            <ol>
                <li>
                    <img src="pages/places/boracay/slides/slide01-<?= $size ?>.jpg" alt="Intramuros, Manila">
                </li>
                <li>
                    <img src="pages/places/boracay/slides/slide02-<?= $size ?>.jpg" alt="San Pedro Church">
                </li>
                <li>
                    <img src="pages/places/boracay/slides/slide03-<?= $size ?>.jpg" alt="Luneta Park">
                </li>
                <li>
                    <img src="pages/places/boracay/slides/slide04-<?= $size ?>.jpg" alt="Corregidor Island">
                </li>
                <li>
                    <img src="pages/places/boracay/slides/slide05-<?= $size ?>.jpg" alt="Panglao Island">
                </li>
                <li>
                    <img src="pages/places/boracay/slides/slide06-<?= $size ?>.jpg" alt="Pristine Beaches">
                </li>
            </ol>
        </div>
    </div>

    <div class="row sameHeights">
        <div class="col col-4">
            <article class="panel panel-plain" data-key="sameHeights">
                <h3>Hennan Regency Hotel</h3>
                <p>

                    <!-- This demonstrates the use of Picturefill.min.js -->
                    <picture>
                        <!--[if IE 9]>
                        <video style="display: none;"><![endif]-->
                        <source srcset="pages/places/boracay/img/regency-tablet.jpg"
                                media="(min-width: 480px) and (max-width: 767px)">
                        <source srcset="pages/places/boracay/img/regency-mobile.jpg" media="(max-width: 479px)">
                        <!--[if IE 9]></video><![endif]-->
                        <img src="pages/places/boracay/img/regency-desktop.jpg" alt="Regency">
                    </picture>

                </p>
                <p>
                    The Regency Hotel, Resort & Spa is a five-star resort with many options of rooms that fit the
                    guest's needs on a White Beach in the center of Station 2. It has excellent gym facilities and all
                    the amenities the guest would expect of an elegant luxury hotel with four restaurants and two
                    swimming pools, gym equipment is great. It also caters for business functions; the convention hall
                    is fully air-conditioned suitable for corporate meetings. It also has playground and pools for kids
                    with the 24-hour monitoring system. It is a pet-friendly hotel; there are facilities where guests
                    can leave their pets to play. The pet massage and spa is on the 3rd floor right to the lobby. The
                    room service staff are friendly and are well trained. The hotel rooms are spacious with 40 inch
                    UltraHD TV; the high-speed internet is available. The view from the veranda is amazing, that
                    overlooks the white sand beach.
                    Security cameras and personnel are available 24 hours. It assures guests the peace of mind and more
                    time planning for activities with the loved ones. The rooms have the modern touch and state of the
                    art facility with Asian-inspired interiors. Other room amenities are safety deposit box, free wifi,
                    minibar, hot and cold shower. There also spa treatment for couples, services includes facial,
                    massages, body scrubs and body wraps. The spa provides a spa tub and different therapies at the
                    guest's choice. The spa staffs are highly trained to guarrantee that excellent service will be
                    provided. A variety of treatment includes aromatherapy, acupuncture, Swedish massage, Thai massage
                    the guest can choose from those many options.
                </p>

                <p>
                    <a href="" class="see-more"><img src="asset/img/extras/touch01.png" alt="Read More"><span
                                class="text">Read more...</span></a>
                </p>


            </article>
        </div>


        <div class="col col-4">
            <article class="panel panel-plain" data-key="sameHeights">
                <h3>Shangri-La Hotel, Boracay</h3>
                <p>
                    <img src="pages/places/boracay/img/shangrila.jpg" class="img-half-width"
                         alt="Resorts World, Manila">
                </p>
                <p>
                    Book your next trip to Shangri-La's Boracay Resort and Spa If you are searching for a private heaven
                    getaway, then consider the charming and appealing Luxury Resort and Spa on one of the best beaches
                    in the world. You can appreciate the serenity on its shoreline if you want some unique ambiance.
                    Alternatively, travel to station 2 for more activities, food and meet people from different
                    cultures. Station 2 is situated at the north-western part of Boracay, is the blue waters appear to
                    associate with the enthralling blue sky. Imagine a great and relaxed stay in the great shoreline
                    front and nipa huts that have been designed with high quality and with care. Shangri-La's Boracay
                    Resort and Spa offers visitor their choice of many new and fully equipped function rooms, including
                    extravagance estates and suites. Every guest room has a spacious floor, pieces of furniture are well
                    arranged, and the veranda provides the clear view of the beautiful beach. Shangri-La's Boracay
                    Resort and Spa have various amenities for children – but those under 12 years of age are not
                    permitted in the swimming pool, wellbeing club, or wellness office without parental supervision.
                    This property gives complimentary roundtrip bus and shuttle services from Hotel to Caticlan Airport
                    and vice versa. Situated on the northwest tip of Boracay Island, the Luxury Hotel is best traveled
                    by a plane which is a 45-minute local flight from Manila to Caticlan. From Caticlan, Boracay Island
                    is 15 minutes away from the city of Caticlan. The Hotel have the variety of restaurants located on
                    different floors and lobbies for easy access. The Chinese restaurant is located in the 2nd-floor
                    lobby, and it is open until 11 p.m.
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
                <h3>Scuba Diving</h3>
                <p>
                    <img src="pages/places/boracay/img/scuba01.jpg" class="img-half-width" alt="Manila Bay">
                </p>
                <p>
                    Boracay's pristine beaches provide excellent sites and facilities for scuba diving. There are also
                    many scuba diving associations, the most notable is New Wave Divers. If you are not a veteran in
                    this activity, there are many resources, teams, and groups that can provide education from basic up
                    to advanced divers you will have a quick start and learn more from experience. For newbies, there
                    are formal diving classes offered by New Wave instructors, with a reasonable amount. They also
                    provide diving certifications and license. There are site wrecks that are home to different marine
                    mammals and sea creatures that you will be surprised to encounter. The marine life is enormous.
                    There many diving types of equipment for rent from around the town available on the island. For
                    those with advanced skills and wanted to have extreme adventure information about underwater diving
                    sites is also available in New Wave. It is nice to have someone to accompany you for the activity.
                    Also good news, there were no shark attacks or any accidents reported on the Island.
                </p>

                <p>
                    <a href="" class="see-more"><img src="asset/img/extras/touch01.png" alt="Read More"><span
                                class="text">Read more...</span></a>
                </p>


            </article>
        </div>

        <div class="col col-2">
            <article class="panel panel-plain" data-key="sameHeights2">
                <h3>Tattoos</h3>
                <p>
                    <img src="pages/places/boracay/img/tattoo02.jpg" class="img-full-width" alt="The Food">
                </p>
                <p>
                    Tattoo shops, is everywhere in Boracay. Some you can find on the sidewalks, or if you want the
                    safest and quality artwork, I recommend professional artist such as "Art Tattoo Shop." It is located
                    within the perimeter of Bamboo Beach Hotel & Resorts in Station 3. The designs are numerous to
                    choose from, the one that fits your personality. They do services such as sketch something from your
                    likes and imagination. The art works are mostly generated from a vector graphics software. Before
                    the inking begins, the sketch will show you a glimpse of the art work. Then you are ready to go.

                </p>
                <p>
                    If you're not a fan of permament ink, there's an alternative, that is Henna tattoo. There are a
                    bunch of artists
                    around the are. This is much cheaper than having permanent ink if you just want a temporary tattoo.
                    But just be aware, some hotels prohibits Henna because it leaves a permanent ink or damage in their
                    linens and pillows.
                    The hotel charge fines if such things happen.
                </p>
                <p>
                    <a href="" class="see-more"><img src="asset/img/extras/touch01.png" alt="Read More"><span
                                class="text">Read more...</span></a>
                </p>

            </article>

        </div>

        <div class="col col-2">
            <article class="panel panel-plain" data-key="sameHeights2">
                <h3>The Food</h3>
                <p>
                    <img src="pages/places/boracay/img/buffet01.jpg" class="img-full-width" alt="Featured Chef">
                </p>
                <p>
                    Boracay Island offers a wide variety of food; you can get raw and fresh sea foods from the well
                    known wet market. A variety of fish such as grouper, salmon, seashells, oysters, tilapia, big
                    lobsters, crabs much cheaper than those you get from restaurants. If you are too busy with beach
                    activities and don't want to miss the fun, there are ready-to-eat food around every corner. One of
                    my favorites is Andoks Chicken Restaurant. It is open 24 hours, so you do not have to worry about
                    what time you will get your dinner.
                </p>
                <p>
                    The best part and my favorite, most hotels serve buffet for lunch and dinner. You get the chance to
                    be with people lining up for food and have some chit-chat, good chance you will meet interesting
                    people; The prices are not that high for around $5. Most of these buffet business provides unlimited
                    fruit punch or sodas. Don't miss the "pork lechon," that is served for limited customers, those that
                    check-in early in the buffet.
                </p>
                <p>
                    <a href="" class="see-more"><img src="asset/img/extras/touch01.png" alt="Read More"><span
                                class="text">Read more...</span></a>
                </p>

            </article>
        </div>

        <div class="col col-2">
            <article class="panel panel-plain" data-key="sameHeights2">
                <h3>Club Paraw & Bar</h3>
                <p>
                    <img src="pages/places/boracay/img/beachparty01.jpg" class="img-full-width" alt="Featured Chef">
                </p>
                <p>
                    Clubbing is one of the best you can get in Boracay. The party starts at 8 PM up to 2 AM in the
                    morning. Bring your love ones get some beer relax and just dance. It's either you stay on your table
                    relax and watch the crowd, or you can dive into the dance floor. It's easy to order a beer or some
                    french fries. Before the party begins, it's also a good activity to watch the sunset at Conga Bar
                    and get a hot milk with gelatine is my favorite. Club Paraw offers unlimited beer at a fixed price.
                    They also serve affordable finger food such as grilled pork, tasty calamari squid. Just be sure to
                    get in before 9 pm to avail the best seat in the club. The club also invites famous DJs and
                    celebrities to put on a great party. Be sure to be nice to your waiter they are quick at completing
                    your orders. Tips are optional, and they don't expect much. You might get surprised when someone
                    approaches and asks for your name especially when you're alone in the bar. So, it is an excellent
                    opportunity to meet new people.

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