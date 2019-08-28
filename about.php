<?php
include "./includes/global.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>About Daryl DeJean | Emerging Technology Associates</title>
    <?php include "./includes/head.php"; ?>
</head>
<body>

<header class="header-cont bootstrap-wrapper" id="top">
    <nav>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 menu" data-status="closed">
                    <ul>
                        <li><a href="/">Emerging Technology Associates</a></li>
                        <li><a href="/#what">What We Do</a></li>
                        <li><a href="/#how">How We Do It</a></li>
                        <li><a href="/#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>

<div class="banner full pic">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="line1 centered">DARYL DEJEAN</h1>
            </div>
            <div class="col-md-12 centered">
                <div class="quote-box">
                    <div class="line"></div>
                    <p>“AT TIMES WE ARE SO CLOSE TO SITUATIONS WE EITHER FAIL TO SEE THE SOLUTION OR WANT VALIDATION THAT WE ARE GOING ABOUT DEALING WITH IT CORRECTLY.”</p>
                    <p>- Daryl DeJean</p>
                    <div class="line"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<main>

    <div class="block-goal">
        <div class="container">
            <div class="block-cont">
                <p>Daryl DeJean founded Emerging Technologies Associates, Inc. in 2007 based upon his experiences. He draws upon these experiences to help provide his customers with a fresh perspective or validation of their approach to their situations.</p>

                <p>After graduating from the U.S. Coast  Guard Academy, Daryl was honored to serve as Commanding Officer and Leadership Mentor. During his time in the Coast Guard, Daryl continued to develop his leadership, team building, change management and communication skills. His experiences in the Coast Guard reinforced the importance of maintaining a disciplined, yet adaptable, approach to insure resiliency in times of need.</p>

                <p>As Director, Worklinks, Hilti North America, Daryl was responsible for managing the Company’s assets including all buildings. Daryl led cross functional teams responsible for large projects, building renovations and retrofits with the goal of improving the resource productivity and profitability of operations. He led the revolutionary cultural change across several functional areas of the company.</p>

                <p>At Emerging Technologies Associates, Inc., Daryl continues to identify, assess and develop implementation strategies incorporating emerging technologies in energy management, water management, waste management and human capital management to enhance resource productivity of his customers.</p>

                <p>Daryl has an executive MBA, MS in Management and a BS in Mathematical Sciences.</p>

                <div class="row">
                    <div class="col-12 col-sm-6 centered">
                        <img src="/img/CVElogo.jpg" class="img-fluid" alt="SDVOSB" />
                    </div>
                    <div class="col-12 col-sm-6 centered">
                        <img src="/img/energy-star-partner-1-logo-primary.jpg" class="img-fluid" alt="ENERGY STAR" />
                    </div>
                </div>

                <p>Emerging Technologies Associates, Inc. is a certified Service Disabled Veteran Owned Small Business  (SDVOSB) by the U.S. Department of Veterans Affairs, an ENERGY STAR Service Provider.</p>
            </div>
        </div>
    </div>

    <div id="contact" class="block-contact">
        <div class="container">
            <div class="block-cont">
                <div class="row">
                    <div class="col-12"><h2>CONTACT</h2></div>
                </div>
                <div class="block-address">
                    <div class="line"></div>
                    <div class="map">
                        <div class="address-cont">
                            <p>Emerging Technologies Associates, Inc</p>
                            <p>4152 Meridian St #105</p>
                            <p>Bellingham, WA 98226, USA</p>
                        </div>
                    </div>
                    <div class="line"></div>
                </div>
                <div class="block-form">

                    <form id="contact-form">
                        <div class="form-group">
                            <label for="InputName">Name</label>
                            <input type="text" class="form-control" id="InputName" aria-describedby="emailHelp" placeholder="Enter Name">
                        </div>
                        <div class="form-group">
                            <label for="InputEmail">Email</label>
                            <input type="email" class="form-control" id="InputEmail" aria-describedby="emailHelp" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="InputMessage">Message</label>
                            <textarea class="form-control" id="InputMessage" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-block btn-primary">Send</button>
                    </form>
                    <div class="msgSent">
                        <div class="alert alert-success" role="alert">
                            <h4 class="alert-heading">Message Sent</h4>
                            <p>We will get back to you as soon as we can.</p>
                            <p>We are looking forward to work with you.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="container">
            <div class="row block-cont">
                <div class="col-12 col-sm-6">
                    <h4>ABOUT ETA</h4>
                    <p>Emerging Technologies Associates, Inc. is a certified Service Disabled Veteran Owned Small Business  (SDVOSB) by the U.S. Department of Veterans Affairs, an ENERGY STAR Service Provider.</p>
                </div>
                <div class="col-12 col-sm-6">
                    <h4>USEFUL LINKS</h4>
                    <ul>
                        <li><a href="https://www.energystar.gov/buildings/facility-owners-and-managers/existing-buildings/learn-benefits">Energy Star | Learn the Benefits</a></li>
                        <li><a href="http://www.cpuc.ca.gov/uploadedFiles/CPUC_Public_Website/Content/About_Us/Organization/Divisions/Policy_and_Planning/PPDEnergyWaterNexus.pdf">Rethinking the Water Energy Nexus</a></li>
                        <li><a href="http://www.energy.ca.gov/title24/">Building Energy Efficiency Program</a></li>
                        <li><a href="http://www.va.gov/osdbu/verification/">Vets First Verification Program</a></li>
                    </ul>
                </div>
                <div class="col-12 copy">
                    <p><?=date("Y");?> - Copyright Emerging Technologies Associates, Inc.</p>
                </div>
            </div>
        </div>
    </footer>

</main>
<?php include "./includes/scripts.php"; ?>
<script type="text/javascript">
</script>
</body>
</html>