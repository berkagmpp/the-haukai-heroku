<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu | HAUKAI RESTAURANT</title>
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- custom css-->
    <link rel="stylesheet" href="css/custom.css">
</head>

<body>

    <?php
        include "header.html";
    ?>

    <!-- Main -->
    <main class="row">
        <!-- top img banner -->
        <div class="col-12 position-relative top-page-banner" role="banner" aria-label="The top page banner">
            <!-- responsive picture srcset for 415w, 900w, 1600w -->
            <picture>
                <source media="(min-width: 1600px)" srcset="img/menu_2200x1162.jpg">
                <source media="(min-width: 991px)" srcset="img/menu_900x475.jpg">
                <source media="(max-width: 576px)" srcset="img/menu_411x217.jpg">
                <img src="img/menu_411x217.jpg" alt="Menu background: Green mussels with red chilies">
            </picture>
            <div class="position-relative w-100 1z-index tb-head">
                <div class="m-auto top-banner-head">
                    <h1>MENU</h1>
                </div>
            </div>
        </div>
        <!-- page sub menu -->
        <div class="col-12 sub-menu-container">
            <ul class="nav justify-content-center p-4" role="navigation" aria-label="sub menu">
                <li class="nav-fs-5">
                <a class="nav-link link-dark" aria-current="page" href="#section-one">DINNER MENU</a>
                </li>
                <li class="nav-fs-5">
                <a class="nav-link link-dark" href="#section-two">BEVERAGES MENU</a>
                </li>
            </ul>
        </div>

        <!-- content -->
        <section class="col-12 bg-container" role="contentinfo" aria-label="Dinner and beverages menus">

            <!-- dinner menu -->
            <div class="container my-5 px-0 py-5 container-px-sm">
                <article class="row" id="section-one" aria-label="Dinner menu">
                    <div class="col-12 py-3 head-cover">
                        <h2 class="mb-0 heading-area">DINNER MENU</h2>
                    </div>
                    <div class="col-12 text-cover">
                        <div class="row">
                            <!-- dinner page 1 -->
                            <div class="col-12 p-2" aria-label="Dinner page 1 - Appetizers">
                                <div class="border border-2 p-3 m-0">
                                    <h2 class="my-5">APPETIZERS</h2>
                                    <div class="my-5">
                                        <p class="fs-5">REWENA BREAD<span class="text-danger">&nbsp;&nbsp;&nbsp;10</span> </p>
                                        <p class="fw-300" lang="mi">Traditional Māori bread.</p>
                                    </div>
                                    <div class="my-5">
                                        <p class="fs-5">PAUA FRITTER<span class="text-danger">&nbsp;&nbsp;&nbsp;16</span> </p>
                                        <p class="fw-300">Finely diced pieces of paua, served with a side salad and horopito dressing.</p>
                                    </div>
                                    <div class="my-5">
                                        <p class="fs-5">RAW FISH<span class="text-danger">&nbsp;&nbsp;&nbsp;20</span> </p>
                                        <p class="fw-300">Dried snapper fish marinated in coconut cream, served with tomatoes and spring onions.</p>
                                    </div>
                                    <div class="my-5">
                                        <p class="fs-5">POACHED SALMON<span class="text-danger">&nbsp;&nbsp;&nbsp;22</span> </p>
                                        <p class="fw-300">Salmon poached in an orange and pistachio glaze, served with rewena bread.</p>
                                    </div>
                                    <div class="my-5">
                                        <p class="fs-5">SEAFOOD BASKET<span class="text-danger">&nbsp;&nbsp;&nbsp;25</span> </p>
                                        <p class="fw-300">Crumbed mussels, salt and pepper squid, crumbed hoki bites and garlic prawns.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- dinner page 2 -->
                            <div class="col-12 p-2" aria-label="Dinner page 2 - Mains">
                                <div class="border border-2 p-3 m-0">
                                    <h2 class="my-5">MAINS</h2>
                                    <div class="my-5">
                                        <p class="fs-5">FISH OF THE DAY <span class="text-danger">&nbsp;&nbsp;&nbsp;25</span> </p>
                                        <p class="fw-300">Beer battered fish and kumara fries, served with a side salad and homemade tartare.</p>
                                    </div>
                                    <div class="my-5">
                                        <p class="fs-5">MUSSELS AND SCALLOPS <span class="text-danger">&nbsp;&nbsp;&nbsp;25</span> </p>
                                        <p class="fw-300">Steamed mussel &amp; scallop mousse, honey and soy broth.</p>
                                    </div>
                                    <div class="my-5">
                                        <p class="fs-5">SEAFOOD CHOWDER  <span class="text-danger">&nbsp;&nbsp;&nbsp;30</span> </p>
                                        <p class="fw-300">Creamy chowder filled with terakihi, prawn, hoki, scallops and mussels, served with flatbread.</p>
                                    </div>
                                    <div class="my-5">
                                        <p class="fs-5">PORK BELLY <span class="text-danger">&nbsp;&nbsp;&nbsp;30</span> </p>
                                        <p class="fw-300">Slow cooked pork belly served on a bed of apple slaw with roasted kumara, and crispy noodle.</p>
                                    </div>
                                    <div class="my-5">
                                        <p class="fs-5">LAMB STEAK <span class="text-danger">&nbsp;&nbsp;&nbsp;33</span> </p>
                                        <p class="fw-300">New Zealand Lamb coated in a kawakawa crumb, served with Dijon mustard glazed carrots, roasted 
                                            butternut squash and a mushroom Jus.</p>
                                    </div>
                                    <div class="my-5">
                                        <p class="fs-5">VENISON <span class="text-danger">&nbsp;&nbsp;&nbsp;33</span> </p>
                                        <p class="fw-300">Venison crusted with horopito, served with glazed plums, cabbage salad and red wine Jus.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- dinner page 3 -->
                            <div class="col-12 p-2" aria-label="Dinner page 3 - Desserts">
                                <div class="border border-2 p-3 m-0">
                                    <h2 class="my-5">DESSERTS</h2>
                                    <div class="my-5">
                                        <p class="fs-5" lang="mi">KĀPITI ICE CREAM <span class="text-danger">&nbsp;&nbsp;&nbsp;10</span> </p>
                                        <p class="fw-300">Check for daily specials.</p>
                                    </div>
                                    <div class="my-5">
                                        <p class="fs-5">STEAM PUDDING <span class="text-danger">&nbsp;&nbsp;&nbsp;12</span> </p>
                                        <p class="fw-300">Golden syrup flavoured steam pudding, served with vanilla ice cream.</p>
                                    </div>
                                    <div class="my-5">
                                        <p class="fs-5">MINI PAVLOVA <span class="text-danger">&nbsp;&nbsp;&nbsp;16</span> </p>
                                        <p class="fw-300">Mini Pavlova served with kawakawa and lemon infused cream and fresh fruit.</p>
                                    </div>
                                    <div class="my-5">
                                        <p class="fs-5">BANOFFEE PIE <span class="text-danger">&nbsp;&nbsp;&nbsp;16</span> </p>
                                        <p class="fw-300">Toffee, fresh bananas and fresh cream.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- dinner page picture -->
                            <div class="col-12 p-2 mb-3 text-center" aria-label="Dinner menu example">
                                <!-- responsive picture srcset for 900w, 1600w -->
                                <picture>
                                    <source media="(min-width: 577px)" srcset="img/menus_700x700.jpg">
                                    <source media="(max-width: 576px)" srcset="img/menus_400x400.jpg">
                                    <img src="img/menus_400x400.jpg" class="img-fluid"
                                        alt="Menu background: Green mussels with red chilies">
                                </picture>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- beverages menu -->
            <div class="container my-5 px-0 py-5 container-px-sm">
                <article class="row" id="section-one" aria-label="Beverages menu">
                    <div class="col-12 py-3 head-cover">
                        <h2 class="mb-0 heading-area">BEVERAGES MENU</h2>
                    </div>
                    <div class="col-12 text-cover">
                        <div class="row">
                            <!-- beverages page 1 -->
                            <div class="col-12 p-2" aria-label="Beverages page 1 - Wine">
                                <div class="border border-2 p-3 m-0">
                                    <h2 class="my-5">WINE</h2>
                                    <div class="row impo-margin">
                                        <table class="col-12 my-4"><tbody>
                                            <tr class="fs-5">
                                                <th><h4 class="fw-700">RED</h4></th>
                                                <th><p class="fw-500">B/G</p></th>
                                            </tr>
                                            <tr>
                                                <td><p>Terrace Edge Pinot Noir, 2012, Wairarapa</p></td>
                                                <td><p class="text-danger">53/13</p></td>
                                            </tr>
                                            <tr>
                                                <td><p>Altitude Pinot Noir, 2010, Marlborough</p></td>
                                                <td><p class="text-danger">64/15</p></td>
                                            </tr>
                                            <tr>
                                                <td><p>Greystone Pinot Noir, 2012, Wairarapa</p></td>
                                                <td><p class="text-danger">73/17</p></td>
                                            </tr>
                                            <tr>
                                                <td><p>Terrace Edge, Syrah, 2012 Wairarapa</p></td>
                                                <td><p class="text-danger">53/13</p></td>
                                            </tr>
                                            <tr>
                                                <td><p>Altitude Syrah, 2010 Marlborough</p></td>
                                                <td><p class="text-danger">64/15</p></td>
                                            </tr>
                                            <tr>
                                                <td><p>Greystone Syrah, 2012, Wairarapa</p></td>
                                                <td><p class="text-danger">73/17</p></td>
                                            </tr>
                                            <tr>
                                                <td><p>Altitude Pinot Noir, 2010, Marlborough</p></td>
                                                <td><p class="text-danger">64/15</p></td>
                                            </tr>
                                            <tr>
                                                <td><p>Pegasus Bay Pinot Noir, 2013, Waipara</p></td>
                                                <td><p class="text-danger">110</p></td>
                                            </tr>
                                        </tbody></table>
                                        <table class="col my-4"><tbody>
                                            <tr class="fs-5">
                                                <th><h4 class="fw-700">WHITE</h4></th>
                                                <th><p class="fw-500">B/G</p></th>
                                            </tr>
                                            <tr>
                                                <td><p>Spade Oak Pinot Gris, 2011, Gisborne</p></td>
                                                <td><p class="text-danger">40/10</p></td>
                                            </tr>
                                            <tr>
                                                <td><p>Maude Pinot Gris, 2017, Otago</p></td>
                                                <td><p class="text-danger">49.5/11</p></td>
                                            </tr>
                                            <tr>
                                                <td><p>Charles Wiffen Chardonnay, 2013, Otago</p></td>
                                                <td><p class="text-danger">48/11</p></td>
                                            </tr>
                                            <tr>
                                                <td><p>Amisfield, Riesling, 2016, Otago</p></td>
                                                <td><p class="text-danger">53/13</p></td>
                                            </tr>
                                            <tr>
                                                <td><p>Lamont Riesling, 2010, Otago</p></td>
                                                <td><p class="text-danger">57/13</p></td>
                                            </tr>
                                            <tr>
                                                <td><p>Elephant Hill Viognier, 2013, Hawkes Bay</p></td>
                                                <td><p class="text-danger">55/12</p></td>
                                            </tr>
                                            <tr>
                                                <td><p>Folium Sauvignon Blanc, 2011, Marlborough</p></td>
                                                <td><p class="text-danger">52/11</p></td>
                                            </tr>
                                            <tr>
                                                <td><p>Billecart-Salmon Brut Reserve, France</p></td>
                                                <td><p class="text-danger">120</p></td>
                                            </tr>   
                                        </tbody></table>
                                    </div>
                                </div>
                            </div>
                            <!-- beverages page 2 -->
                            <div class="col-12 p-2" aria-label="Beverages page 2 - Beer &amp; Cider &amp; Non-alcoholic">
                                <div class="border border-2 p-3 m-0">
                                    <h2 class="my-5">BEER &amp; CIDER <br>&amp; NON-ALCOHOLIC</h2>
                                    <div class="row impo-margin">
                                        <table class="col-12 my-4"><tbody>
                                            <tr class="fs-5">
                                                <th><h4 class="fw-700">BEER &amp; CIDER</h4></th>
                                                <th><p class="fw-500">B/G</p></th>
                                            </tr>
                                            <tr>
                                                <td><p>Garage project range </p></td>
                                                <td><p class="text-danger">11</p></td>
                                            </tr>
                                            <tr>
                                                <td><p>Tuatara range</p></td>
                                                <td><p class="text-danger">11</p></td>
                                            </tr>
                                            <tr>
                                                <td><p>Panhead range</p></td>
                                                <td><p class="text-danger">10</p></td>
                                            </tr>
                                            <tr>
                                                <td><p>Coopers Ale</p></td>
                                                <td><p class="text-danger">10</p></td>
                                            </tr>
                                            <tr>
                                                <td><p>Lamont Riesling, 2010, Otago</p></td>
                                                <td><p class="text-danger">57/13</p></td>
                                            </tr>
                                            <tr>
                                                <td><p>Heineken</p></td>
                                                <td><p class="text-danger">11</p></td>
                                            </tr>
                                            <tr>
                                                <td><p>Moa Cider</p></td>
                                                <td><p class="text-danger">10</p></td>
                                            </tr>
                                            <tr>
                                                <td><p>Crooked Cider</p></td>
                                                <td><p class="text-danger">10</p></td>
                                            </tr>   
                                        </tbody></table>
                                        <table class="col my-4"><tbody>
                                            <tr class="fs-5">
                                                <th><h4 class="fw-700">NON-ALCOHOLIC</h4></th>
                                                <th><p class="fw-500">B/G</p></th>
                                            </tr>
                                            <tr>
                                                <td><p>Mineral water</p></td>
                                                <td><p class="text-danger">4.00</p></td>
                                            </tr>
                                            <tr>
                                                <td><p>Soft drinks </p></td>
                                                <td><p class="text-danger">4.00</p></td>
                                            </tr>
                                            <tr>
                                                <td><p>Juice</p></td>
                                                <td><p class="text-danger">4.00</p></td>
                                            </tr>
                                            <tr>
                                                <td><p>Coffee</p></td>
                                                <td><p class="text-danger">4.50</p></td>
                                            </tr>
                                            <tr>
                                                <td><p>Tea</p></td>
                                                <td><p class="text-danger">3.50</p></td>
                                            </tr>  
        
                                        </tbody></table>
                                        <p class="my-4 fw-300">Please informs us of any food allergies as ingredients are not listed on this menu.<br>
                                            15% surcharge on public holidays.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- beverages page picture -->
                            <div class="col-12 p-2 mb-3 text-center" aria-label="Beverages menu example">
                                <!-- responsive picture srcset for 576w -->
                                <picture>
                                    <source media="(min-width: 577px)" srcset="img/menus_1062x700.jpg">
                                    <source media="(max-width: 576px)" srcset="img/menus_400x264.jpg">
                                    <img src="img/menus_700x700.jpg" class="img-fluid"
                                        alt="Menu background: Green mussels with red chilies">
                                </picture>
                            </div>
                            <!-- book a table button -->
                            <div class="col-12 pb-4 text-center" aria-label="Book a table button">
                                <a href="booking_buy.php" id="btn_book" 
                                    class="btn btn-outline-dark fs-5" role="button">BOOK A TABLE</a>
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
        </section>
        <!-- End content -->

    </main>
    <!-- End main -->

    <?php
        include "footer.php";
    ?>