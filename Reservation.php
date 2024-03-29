
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Hotel Booking Section</title>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel&family=Macondo&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./CSS/home.css">
    <link rel="stylesheet" href="CSS/Reservation.css">



</head>

<body>

    <section>
        <nav id="navbar">
            <div id="logo">
                <img src="./img/Royal-Crown.png" class="img-logo" alt="Logo">
                <h3><a href="./index.php">Royal Crown</a></h3>

            </div>
            <div>
                <ul>
                    <li class="item"><a href="./index.php">Home</a></li>
                    <li class="item"><a href="./about.html">About us</a></li>
                    <li class="item"><a href="./Facilities.html">Facilities</a></li>
                    <li class="item"><a href="./Reservation.php">Reservation</a></li>
                    <li class="item"><a href="./photo-gallery.html">Photo gallery</a></li>
                    <li class="item"><a href="./contact.html">Contact us</a></li>
                </ul>

            </div>
        </nav>
    </section>


    <section class="img-reserve">
        <h1 class="head-reserve">Book Now</h1>
    </section>


    <section>
        <form id="form-reg"  method="POST" class="frm-back" action="./get-data.php">
        <!-- <form id="form-reg"  method="POST" class="frm-back" action="/get-data.php"> -->
            <div class="Register">
                <div class="row">
                    <div class="col">
                        <input type="text" name="firstname" class="form-control" placeholder="First name" aria-label="First name">
                    </div>
                    <div class="col">
                        <input type="text" name="lastname" class="form-control" placeholder="Last name" aria-label="Last name">
                    </div>
                </div><br>
                <div class="row">
                    <div class="col">
                        <input class="form-control" name="email" placeholder="E-mail"></input>
                    </div>
                    <div class="col">
                        <select name="rooms" class="form-control">
                            <option value="How Many Rooms?">How Many Rooms?</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-md-6">
                        <input class="form-control" name="mobilenumber" type="number" placeholder="Mobile Number"></input>
                    </div>
                    <div class="col">
                        <input type="number" name="person" placeholder="How Many Person?" class="form-control">
                    </div>
                </div>



                <div class="row">
                    <div class="col">
                        <span>Check In Date</span>
                        <input type="date" name="checkindate" class="form-control">
                    </div>
                    <div class="col">
                        <span>Check Out Date</span>
                        <input type="date" name="checkoutdate" class="form-control">
                    </div>
                </div><br>



                <div class="col-12">
                    <button type="submit" value="submit"  name="submit"  class="btn-book"> Book Now </button>
                </div>

            </div>
        </form>


    </section>


    <section>
        <div class="footer-dark">
            <footer>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-md-3 item">
                            <h3>Contact Us</h3>
                            <ul>
                                <li><a href="#">+91-9585945867</a></li>
                                <li><a href="#">+91-9585945868</a></li>
                                <li><a href="#">+91-9585945869</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-6 col-md-3 iteLast">
                            <h3>About Us</h3>

                            <ul>
                                <li><a href=" # ">All facilities</a></li>
                                <li><a href="# ">Near to station</a></li>
                                <li><a href="# ">Fast booking</a></li>
                            </ul>
                        </div>
                        <div class="col-md-6 item text ">
                            <h3>Our Location</h3>
                            <p>35-B, Shikarbadi Colony, Goverdhan Vilas, Sajjan Nagar, Near surat railway station, Surat (Gujarat) 395006</p>
                        </div>
                        <div class="icon ">
                            <a href="https://www.facebook.com/indraniwas2018/ "><img class="scale-with-grid " src="https://www.indraniwas.com/wp-content/uploads/2021/12/facebook.png " alt=" "></a>

                            <a href="https://www.instagram.com/indraniwas_udaipur/ "><img class="scale-with-grid " src="https://www.indraniwas.com/wp-content/uploads/2021/12/instagram.png " alt=" "></a>

                            <a href="https://www.tripadvisor.in/Hotel_Review-g297672-d16652537-Reviews-Indra_Niwas-Udaipur_Udaipur_District_Rajasthan.html "><img class="scale-with-grid " src="https://www.indraniwas.com/wp-content/uploads/2021/12/tripadvisor-logotype.png
                            " alt=" "></a>

                            <a href="https://www.youtube.com/channel/UCz42sZhpdxEwpqoJ8nh5SIg "><img class="scale-with-grid " src="https://www.indraniwas.com/wp-content/uploads/2021/12/youtube.png " alt=" "></a>
                        </div>
                    </div>
                    <p class="copyright "> © 2021 All Rights Reserved. Website Design Developed by Royal Crown owner&nbsp;
                    </p>
                </div>
            </footer>
        </div>
    </section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js "></script>
    <script src="./babanirala.js"></script>




    <script>
        // function myfunction() {
        //     alert("Your booking is Sucessfully Done! ");

            
        // }
    </script>


</body>

</html>