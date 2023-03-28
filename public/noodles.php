

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Noodles</title>
    <link rel="shortcut icon" href="Noodles.jpg" type="image/x-icon">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="./mystyle.css">
</head>
<body class="text-gray-600 font-body-nunito">
    <div class="grid md:grid-cols-3">
        <div class="md:col-span-1 md:flex md:justify-end">
            <nav class="text-right">
                <div class="flex justify-between items-center">
                    <h1 class="font-bold uppercase border-b   border-gray-100 p-4 ">
                        <a href="/" class="hover:text-gray-700">STEGEOT KITCHEN</a>
                    </h1>
                    <div class="px-4 cursor-pointer md:hidden" id="burger">
                        <svg class="w-6" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                          </svg>
                    </div>
                </div>
                <ul class="text-sm mt-6 hidden md:block " id="menu">
                    <li class="py-1">
                        <a href="#" class="px-4 flex justify-end  ">
                            <span class="text-gray-700  ml-2  hover:underline">Home</span>
                            <svg class="w-5 " xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                              </svg>
                        </a>
                    </li>
                    <li class="py-1">
                        <a href="#" class="px-4 flex justify-end border-r-4 border-primary">
                            <span class="text-gray-700 font-bold ml-2 hover:underline ">Services</span>
                            <svg class="w-5 " xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                              </svg>
                        </a>
                    </li>
                    <li class="py-1">
                        <a href="#" class="px-4 flex justify-end border-r-4 border-white hover:underline">
                            <span>About</span>
                            <svg class="w-5 ml-2" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                              </svg>
                        </a>
                    </li>
                    <li class="py-1">
                        <a href="#" class="px-4 flex justify-end border-r-4 border-white hover:underline">
                            <span>Contact</span>
                            <svg class="w-5 ml-2" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                              </svg>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        <main class="px-16 py-6 bg-gray-100 md:col-span-2">

            <!-- <div class="flex justify-center md:justify-end">
                <a href="#" class="text-primary btn border-primary md:border-2 hover:bg-primary hover:text-white transition ease-in-out duration-1000">Log In</a>
                <a href="#" class="text-primary btn ml-2 border-primary  md:border-2 hover:bg-primary hover:text-white transition ease-in-out duration-1000 ">Sign Up</a>
            </div> -->
            <header>
                <h2 class="text-gray-700 text-5xl">Noodles</h2>
                <h2 class="text-2xl font-semibold"></h2>
            </header>
            <form action="https://formspree.io/f/mnqrkprn" method="post">
                <!-- <p>Tick Your Choice</p> -->
                <table >
                    <thead>
                        <td>Types</td>
                        <td>Content</td>
                        <td>&check;</td>
                    </thead>
                    <tbody >
                        <input class="form-control" type="" hidden name="Type">
                       <tr>
                        <td>Super Type</td>
                        <td>Noodles Only</td>
                        <td><input type="checkbox" name="Types"  value="Noodles Only" id=""></td>
                       </tr>
                       <tr>
                        <td>Superstar Type</td>
                        <td>Noodles + Egg</td>
                        <td><input type="checkbox"   name="Types"  value="Noodles+Egg" id=""></td>
                       </tr>
                      <tr>
                        <td>Classic Type</td>
                        <td>Noodles + Fish</td>
                        <td><input type="checkbox"  name="Types"  value="Noodles+Fish" id=""></td>
                       </tr>
                       <tr>
                        <td>VIP</td>
                        <td>Noodles + Meat/Chicken</td>
                        <td><input type="checkbox" name="Types"  value="Noodles+Meat" id=""></td>
                       </tr>
                       <tr>
                    </tbody>
                </table>
                <table>
                    <thead>
                        <td>General Sizes</td>
                        <td>Price</td>
                        <td>&check;</td>
                        <td>Quantity</td>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Tasty Size</td>
                            <td>#500</td>
                            <td><input type="checkbox"  name="Types"  value="Tasty Size" id=""></td>
                            <td>2<sup>1/2</sup> Spoons</td>
                        </tr>
                        <tr>
                            <td>Hungry Man Size</td>
                            <td>#800</td>
                            <td><input type="checkbox"   name="Types" value="Hungry man" id=""></td>
                            <td>3<sup>1/2</sup> Spoons</td>
                        </tr>
                        <tr>
                            <td>Belle Full Size</td>
                            <td>#1000</td>
                            <td><input type="checkbox" name="Types"  value="Belle Full" id=""></td>
                            <td>5<sup>1/2</sup> Spoons</td>
                        </tr>
                    </tbody>
                </table>

                <h3>Fish, Meat/Chicken and Egg Price</h3>
                <table>
                    <thead>
                        <td>Egg</td>
                        <td>Fish</td>
                        <td>Meat/Chicken</td>
                    </thead>
                    <tbody>
                        <td>#100</td>
                        <td>#300</td>
                        <td>#500</td>
                    </tbody>
                </table>
                <table>
                    <thead >
                        <td>Ginger</td>
                        <td>Garlic</td>
                        <td>Sauce</td>
                    </thead>
                    <tbody >
                        <td><input type="checkbox" name="Allerigies" value="Ginger" id=""></td>
                        <td><input type="checkbox" name="Allerigies" value="Garlic" id=""></td>
                        <td><input type="checkbox" name="Allerigies" value="Sauce" id=""></td>
                    </tbody>
                </table>

                <input type="submit" value="Place Order" name="Order">
            </form>
               
        </main>
    </div>
    <script src="index.js"></script>
</body>
</html>