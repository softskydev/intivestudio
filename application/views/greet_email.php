<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* Design */
        *,
        *::before,
        *::after {
            box-sizing: border-box;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            padding: 0 100px;
        }

        .main {
            max-width: 100%;
            margin: 0 auto;
        }

        .cards {
            display: flex;
            flex-wrap: wrap;
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .cards img {
            width: 100%;
            object-fit: cover;
        }

        .cards_item {
            display: flex;
            padding: 1rem;
        }

        @media (min-width: 40rem) {
            .cards_item {
                width: 50%;
            }
        }

        @media (min-width: 56rem) {
            .cards_item {
                width: 33.3333%;
            }
        }

        .card {
            background-color: white;
            border-radius: 0.25rem;
            display: flex;
            border: 1px solid #dbdbdb;
            flex-direction: column;
            overflow: hidden;
        }

        .card_content {
            padding: 2rem;
        }

        .card_content a {
            color: #009b72;
            text-decoration: none;
            font-weight: 700;
        }

        .card_title {
            font-weight: 700;
            text-transform: capitalize;
            margin: 0px;
        }

        .card_text {
            font-size: 0.875rem;
            line-height: 1.5;
            margin-bottom: 1.25rem;
            font-weight: 400;
        }

        #services ul {
            padding-inline-start: 0;
        }

        #services ul li {
            list-style: none;
            padding: 3px 0;
        }
    </style>
</head>

<body>
    <div style="background: #009b72;width: 100%;padding:30px">
        <center>
            <img src="https://intivestudio.com/asset/intive_white.png" alt="" style="width:100px">
        </center>
    </div>
    <br><br><br>
    <table width="100%">
        <tr>
            <td>
                Dear <?php echo $username ?>, <br><br>
                Hope this email finds you in good health and high spirits. <br><br>
                We realize that the new and transformative technologies that are supposed to take years have to happen
                in only a few months or less to adjust to the current situation.
                Digital transformation has been key in responding to the disruption of work and business ecosystems, and
                most businesses ramped up their efforts to meet this sudden change. <br><br>
                Therefore, we would like to be there for you! <br><br>
                Since technology is not becoming a choice anymore, but a fundamental business strategy that must be
                interwoven into every part of an organization. Agile IT services can enable better collaboration within
                and between organizations, more personalized ways of customer engagement, higher employee innovation and
                productivity, and more accurate insights from data, all of which help a business grow and give it a
                better chance of thriving for the future! <br><br>
                Yours Truly,
                <br><br>
                Intive Studio Team

            </td>
        </tr>
        <tr>
            <td>
                <center>
                    <button style="background:#009b72;padding:15px 60px;outline:none;border-radius:50px;border:none">
                        <a href="https://intivestudio.com" target="_blank" style="color:white;text-decoration:none">Check
                            Our Website</a>
                    </button>
                </center>
            </td>
        </tr>
        <tr>
            <td>
                <center>
                    <h2><b></b></h2>
                </center>
            </td>
        </tr>
        <tr>
            <td>
                <center>
                    <h3 style="color: #009b72;"><b>Our Service</b></h3>
                </center>
            </td>
        </tr>

        <tr>
            <td>
                <table width="100%" id="services">
                    <tr>
                        <td>

                            <ul>
                                <li>
                                    <h3 style="color: #009b72;"><b>Web Development</b></h3>
                                </li>
                                <li>Company Profile</li>
                                <li>Information System</li>
                                <li>Marketplace</li>
                                <li>and more</li>
                            </ul>
                        </td>
                        <td style="vertical-align: top;">

                            <ul>
                                <li>
                                    <h3 style="color: #009b72;"><b>Mobile Apps Development</b></h3>
                                </li>
                                <li>iOS</li>
                                <li>Android</li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>

                            <ul>
                                <li>
                                    <h3 style="color: #009b72;"><b>Internet of Things - IOT</b></h3>
                                </li>
                                <li>Smart Home</li>
                                <li>Smart Agriculture</li>
                                <li>Factory Automation</li>
                                <li>Tracking Assets</li>
                                <li>and more</li>
                            </ul>
                        </td>
                        <td>

                            <ul>
                                <li>
                                    <h3 style="color: #009b72;"><b>AR/VR</b></h3>
                                </li>
                                <li>Dedicated AR/VR Apps</li>
                                <li>Instagram Filter</li>
                                <li>Virtual Games/Event</li>
                                <li>Brand Activation Support</li>
                                <li>and many more</li>
                            </ul>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>

    <div class="main">
        <ul class="cards">
            <li class="cards_item">
                <div class="card">
                    <a href="">
                        <img src="https://intivestudio.com/assets/img/avian.png" alt="">
                    </a>
                </div>
            </li>
            <li class="cards_item">
                <div class="card">
                    <a href="">
                        <img src="https://intivestudio.com/assets/img/gv.png" alt="">
                    </a>
                </div>
            </li>
            <li class="cards_item">
                <div class="card">
                    <a href="">
                        <img src="https://intivestudio.com/assets/img/kukumu.png" alt="">
                    </a>
                </div>
            </li>
        </ul>
    </div>

    <br><br><br>
    <table width="100%">
        <tr>
            <td>
                <center>
                    <button style="background:#009b72;padding:15px 60px;outline:none;border-radius:50px;border:none">
                        <a href="https://wa.me/6282233173610" style="color:white;text-decoration:none">Contact Us</a>
                    </button>
                </center>
            </td>
        </tr>
    </table>


</body>

</html>