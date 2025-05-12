<!DOCTYPE html>
<html lang="en">
<head>
<style>
/* Popup container - can be anything you want */
.popup {
  position: relative;
  display: inline-block;
  cursor: pointer;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* The actual popup */
.popup .popuptext {
  visibility: hidden;
  width: 200px;
  background-color: #555;
  color: #fff;
  text-align: left;
  border-radius: 6px;
  padding: 8px 0;
  position: absolute;
  z-index: 1;
  bottom: 125%;
  left: 50%;
  margin-left: -80px;
}

/* Popup arrow */
.popup .popuptext::after {
  content: "";
  position: absolute;
  top: 100%;
  left: 50%;
  margin-left: -5px;
  border-width: 5px;
  border-style: solid;
  border-color: #555 transparent transparent transparent;
}

/* Toggle this class - hide and show the popup */
.popup .show {
  visibility: visible;
  -webkit-animation: fadeIn 1s;
  animation: fadeIn 1s;
}

/* Add animation (fade in the popup) */
@-webkit-keyframes fadeIn {
  from {opacity: 0;} 
  to {opacity: 1;}
}

@keyframes fadeIn {
  from {opacity: 0;}
  to {opacity:1 ;}
}
</style>
<script>
// When the user clicks on div, open the popup
function myFunction() {
  var popup = document.getElementById("myPopup");
  popup.classList.toggle("show");
}
</script>
<title>Air Pollution</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Landing Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
	
	<!-- animation css files -->
	<link rel="stylesheet" href="css/animation-aos.css">
	<link href='css/aos.css' rel='stylesheet prefetch' type="text/css" media="all" />
	<!-- //animation css files -->

	<!-- css files -->
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' /><!-- bootstrap css -->
    <link href="css/style.css" rel='stylesheet' type='text/css' /><!-- custom css -->
    <link href="css/fontawesome-all.css" rel="stylesheet"><!-- fontawesome css -->
	<!-- //css files -->
	
	<!-- google fonts -->
	<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
	<!-- //google fonts -->
	
</head>
<body>

<!-- header -->
<header class="index-banner">
    <!-- nav -->
    <nav class="main-header">
      <div id="brand" data-aos="zoom-in-up">
        <div id="logo">
          <img src="images/AirPollutionLogo.png" width="80" height="80">
          
        </div>
        <div id="word-mark">
          <h1>
            <a href="index.html">AIR POLLUTION</a>
          </h1>
        </div>
      </div>
      <div id="menu">
        <div id="menu-toggle">
          <div id="menu-icon">
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
          </div>
        </div>
        <ul class="text-center text-capitalize nav-agile" data-aos="zoom-in-up">
          <li>
            <a href="UserLogin.php">Login</a>
          </li>
          <li>
            <a href="UserRegister.php">Register</a>
          </li>
          <li>
            <a href="countrydisplay.php">Air Pollution on Countries</a>
          </li>
          <li>
            <a href="UserInformationUpdate.php">Profile</a>
          </li>
          <li>
            <a href="UserFeedback.php">Feedback</a>
          </li>
          <li>
            <a href="History.php">History</a>
          </li>
          <li>
            <a href="ViewQuestion.php">FAQ</a>
          </li>
          <li>
            <a href="Contact Us.php">Contact Us</a>
          </li>
          <li>
            <button type="button" class="btn w3ls-btn">
            <a href="StaffLogin.php">Staff</a>
            </button>
          </li>
        </ul>
      </div>
    </nav>
    <!-- //nav -->
	<!-- banner -->
	<div class="banner layer" id="home">
		<div class="container">
			<div class="row banner-text">
				<div class="slider-info col-lg-8">
					<div class="agileinfo-logo mt-5">
						<h2 data-aos="fade-down">
							<img src="images/AirPollutionLogo.png" width='100' height='100'><br> Modern problem of the global today -
						</h2>
					</div>
					<h3 class="txt-w3_agile" data-aos="fade-down">Bring the knowledge of air pollution to you </h3>
					<a class="btn mt-4 mr-2 text-capitalize" data-aos="fade-up" href="#" data-toggle="modal" data-target="#exampleModalCenter1" role="button">What is air pollution?</a>
					<a class="btn mt-4 text-capitalize" data-aos="fade-up" href="#" data-toggle="modal" data-target="#exampleModal" role="button">Watch the air pollution video<i class="fas fa-play-circle"></i></a>
				</div>
				<!-- <div class="col-lg-4 col-md-8 mt-lg-0 mt-5 banner-form" data-aos="fade-left">
					<h5><i class="fas mr-2 fa-laptop"></i> Register Now</h5>
					<form action="#" class="mt-4" method="post">
						<input class="form-control" type="text" name="Name" placeholder="Name" required="" />
						<input class="form-control" type="email" name="Email" placeholder="Email" required="" />
						<input class="form-control" type="text" name="Number" placeholder="Phone Number" required="" />
						<input class="form-control" type="password" name="Number" placeholder="Password" required="" />
						<input class="form-control text-capitalize" type="submit" value="Register Account">
					</form>
				</div>
			</div>
		</div>
	</div> -->
	<!-- //banner -->
</header>
<!-- //header -->

<!-- banner bottom -->
<section class="banner-bottom py-5">
	<div class="container py-md-3">
		<h4 class="text-center" data-aos="zoom-in">Air pollution a global health hazard</h4><br><br>
		<img src="images/AirPollution(4).jpg">
		<p>Polluted air is the poor quality kills people. Worldwide,bad outdoor air caused an estimated 4.2 million premature deaths in 2016,about 90 percent of them in low-and middle-income countries,according to the World Health Organization. Indoor smoke is an ongoing health threat to the 3 billion people who cook and heat their homes by burning biomass,kerosene,and coal.Air pollution has been linked to higher rates of cancer,heart disease,stroke,and respiratory diseases such as asthma. In the U.S nearly 134 million people - over 40 percent of the population - are at risk of disease and premature death because of air pollution,according to American Lung Association Estimates.</p>
		<img src="images/AirPollution(1).jpg" float='right' width='400'><img src="images/AirPollution(3).jpg" float='right' width="400" >
		<p>Air pollutants cause less-direct health effects when they contribute to climate change.Heat waves,extreme weather,food supply disruptions,and other effects related to increased greenhouse gases can have negative impacts on human health.The U.S Fourth National Climate Assessment releases in 2018 noted,for example,that a changing climate "could expose more people in North America to ticks that carry Lyme disease and mosquitoes that transmit viruses such as West Nile, chikungunya,dengue, and Zika".</p>
		
		<p></p>
	</div>
</section>
<!-- //banner bottom -->

<!-- why choose us -->
<section class="choose py-5" id="choose">
	<div class="container py-md-3">
		<h3 class="heading mb-5 text-center" data-aos="zoom-in">Causes of Air Pollution</h3>
		<div class="feature-grids row">
			<div class="col-lg-4 col-md-6" data-aos="fade-right">
				<div class="f1 icon1 p-4">
					<img src="images/Cause(1).jpg">
					<h3 class="my-3">Discharges from manufacturing industries and factories</h3>
					<p>The emissions from manufacturing industries are one of the major causes of air pollution.Harmful particulate matter and gases enter te atmosphere from this source.Major pollutants such as oxides of nitrogen and sulfur, carbon monoxide and carbon dioxide and other chemical wastes are deteriorating the quality of the air everywhere.</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-6" data-aos="fade-up">
				<div class="f1 icon2 p-4">
					<img src="images/Cause(2).jpg">
					<h3 class="my-3">Exhaust from vehicles</h3>
					<p>Pollution from automobiles is clearly visible in every city of the world.Vehicles run on fossil fuels such as petroleum and gasoline that emit soot and harmful gases such as CO and NOx which are among the major air pollutants in the environment.</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 mt-lg-0 mt-4" data-aos="fade-left">
				<div class="f1 icon3 p-4">
					<img src="images/Cause(3).png">
					<h3 class="my-3">Mining Activities</h3>
					<p>Mining involves different operations such as driling,extracting,blasting and transportation.Air pollution from mining is caused because of release of gases such as methane,carbon monoxide,sulfur dioxide etc. and other dust and particulate matter during various stages of mining.</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- //why choose us -->

<!-- quote -->
<section class="quote bg-light py-5">
	<div class="container py-md-3" data-aos="fade-up">
		<h4>Moreover, most of the pollutant of the air is caused because of the ignorance and negligence of humans but it is also true that time the air can be polluted by natural causes.</h4>
		<div class="start text-right mt-4" data-aos="flip-left">
			<!-- <a href="#contact" class="scroll">Get Started </a> -->

			<a class="popup" onclick="myFunction()">What are they?
			<span class="popuptext" id="myPopup">The natural factors causing air pollution are:
			<li>1.Forest Fires</li>
			<li>2.Wind erosion</li>
			<li>3.Radioactivity released from decay of rocks</li>
			<li>4.Volcanic eruptions</li>
			</span>
		</a>
		</div>
		<div class="clearfix"></div>
	</div>
</section>
<!-- //quote -->

<!-- process -->
<section class="process py-5" id="overview">
	<div class="container py-md-5">
		<div class="row process-grids">
			<div class="col-lg-6" data-aos="fade-right">
				<h4 class="mb-4">Environmental Impacts</h4>
				<p class="mb-3">Though many living things emit carbon dioxide when they breathe,the gas is widely considered to be a pollutant when associated with cars,planes,power plants,and other human activites that involve the burning of fossil fuels such as gasoline and natural gas.That's because carbon dioxide is the most common of the greenhouse gases,which trap heat in the atmosphere and contribute to climate change.Human have pumped enough carbon dioxide into the atmosphere over the past 150 years to raise its levels higher than they have been for hundreds of thousands of years.</p>
				<p>Other greenhouse gases include methane-which comes from such sources as landfills,the natural gas industry,and gas emitted by livestock-and chlorofluorocarbons(CFCs),which were used in refrigerants and aerosol propellants until they were banned in the late 1980s because of their deteriorating effect on Earth's ozone layer.</p>
				<a href="https://www.niehs.nih.gov/health/topics/agents/air-pollution/index.cfm" >More information about air pollution check at nation institute of enviromental</a><br>
			</div>
			<div class="col-md-6" data-aos="fade-left">
				<iframe width="500" height="500" src="https://youtube.com/embed/e6rglsLy1Ys?autoplay=1"></iframe>
			</div>

			
<!-- 			<div class="col-md-6 px-5 mt-5" data-aos="fade-right">
				<img src="images/b2.jpg" alt="" class="img-fluid"/>
			</div> -->
<!-- 			<div class="col-lg-6 mt-5" data-aos="fade-left">
				<h4 class="mb-4">Excepteur sint occaecat non lorem proident, sunt in culpa quis.</h4>
				<p class="mb-3">Morbi tincidunt nisi tortor, iaculis maximus eros vestibulum at. Ut pulvinar tortor non augue fringilla, fermentum consequat
				nisi rutrum. Orci varius natoque penatibus et magnis dis parturient montes, nascetur. Nullam luctus hendrerit sapien, sed dictum est.
				mattis egestas.</p>
				<p>Morbi tincidunt nisi tortor, iaculis maximus eros vestibulum at. Ut pulvinar tortor non augue fringilla, fermentum consequat
				nisi rutrum. Orci varius natoque penatibus et magnis dis parturient montes.</p>
			</div> -->
		</div>
	</div>
</section>
<!-- //process -->

<!--/pricing -->
<section class="pricing bg-light py-5" id="pricing">
	<div class="container py-lg-3">
		<div class="inner-sec">
			<h3 class="heading mb-5 text-center" data-aos="zoom-in">Air pollution from natural causes</h3>
			<img src="images/NaturalCause.jpg">
			<p>Another pollutant associated with climate change is sulfur dioxide,a component of smog.Sulfur dioxide and closely related chemicals are known primarily as a cause of acid rain.But they also reflect light when released in the atmosphere,which keeps sunlight out and creates a cooling effect.Volcanic eruptions can spew massive amounts of sulfur dioxide into the atmosphere,sometimes causing cooling that lasts for years.In fact,volcanoes used to be the main source of atmospheric sulfur dioxide;today,people are.</p>
				<p>Airborne particles,depending on their chemical makeup.can also have direct effects separate from climate change.They can change or deplete nutrients in soil and waterways,harm forests and crops,and damage cultural icons such as monuments and statues.</p>
			<a href="https://www.who.int/sustainable-development/cities/health-risks/air-pollution/en/">More information about air pollution check at W.H.O organization</a>
		</div>
	</div>
</section>
<!-- //pricing -->

<!-- faqs -->
<section class="faq-w3l py-5" id="faq">
	<div class="container py-lg-3">
	<h3 class="heading mb-5 text-center" data-aos="zoom-in">What can decrease air pollution and how to reduce it?</h3>
		<caption><h3><b>Fig.1-The air quality of California in 1990-2018</b></h3></caption><br><br>
		<img src="images/.gif"><br><br><br>
		
		<caption><h3><b>Fig.2-The emission surcharge standards in UK</b></h3></caption><br>
		<img src="images/APStandard.png">
		<p>Countries around the world are tackling various forms of air pollution.For example,China is making strides in cleaning up smog-choked skies from years of rapid industral expansion,partly by closing or canceling coal-fired power plants.In the U.S,California has been a leader in setting emission standards aimed at improving air quality, especially in places like famously hazy Los Angeles.And a variety of efforts aim to bring cleaner cooking options to places where hazardous cookstoves are prevalent.</p>
	<img src="images/APprevent(1).webp" width="400">
	<img src="images/APprevent(2).jpg" width="400">
	<img src="images/APprevent(3).jpg" width="300" height="200">
	<p>In any home,people can safeguard against indoor air pollution by increasing ventilation,testing for radon gas, using air purifiers,running kitchen and bathroom exhaust fans,and avoiding smoking. When working on home projects, look for paint and other products low in volatile organic compounds:organizations such as Green Seal, UL(GREENGUARD), and the U.S.Green Building Council can help.</p><br>
	<caption><h3><b>Fig.3-The ozone depletion in the arctic zone-by Montreal Protocol</b></h3></caption><br>
	<img src="images/MP.jpg">
	<p>To curb global warming,a variety of measures need to be taken,such as adding more renewable energy and replacing gasoline-fueled cars with zero-emissions vehicles such as electric ones.On a larger scale,governments at all levels are making commitments to limit emissions of carbon dioxide and other greenhouse gases.The Paris Agreement, retified on November 4,2016, is one effort to combat climate change on a global scale. And the Kigali Amendment seeks to further the progress made by the Montreal Protocol,banning heat-trapping hydrofluorocarbons(HFCs) in addition to CFCs.</p>
	<a href="https://www.nationalgeographic.com/environment/global-warming/pollution/">More information about air pollution check at National Geographic</a
	</div>
</section>
<!-- //faqs -->

<!-- testimonials -->
<section class="testimonials bg-light py-5" id="testimonials">
	<div class="container py-lg-3">
		<h3 class="heading mb-5 text-center" data-aos="zoom-in"> Honorable nature writer of the Twentieth Century</h3>
		<h3 class="heading mb-5 text-center" data-aos="zoom-in">Rachel Carson (1907-1964)</h3>
		<div class="row test-grids">
			<div class="col-md-4 col-sm-7 col-9" data-aos="zoom-in">
				<img src="images/Carson.jpg" alt="" class="img-fluid" /><br>
				<img src="images/Carson(2).jpg" alt="" class="img-fluid" />
				</div>
			<div class="col-md-8">
				<div class="callbacks_container">
					<ul class="rslides" id="slider3">
						<li data-aos="fade-down">
							<div class="testi-pos">
								<h4>The biography of Rachel Carson</h4>
								<p>""Perhaps the finest nature writer of the Twentieth Century, Rachel Carson (1907-1964) is remembered more today as the woman who challenged the notion that humans could obtain mastery over nature by chemicals,bombs and space travel than for her studies of ocean life. Her sensational book "Silent Spring" (1962) warned of the dangers to all natural systems from the misuse of chemical pesticides such as DDT, and questioned the scope and the direction of modern science, initiated the comtemporary environmental movement.""</p>
							</div>
							<div class="testi-agile">
							<p>Rachel Carson, writer, scientist, and ecologist, grew up simply in the rura river town of Springdale, Pennsylvania. Her mother bequeathed to her a life-long love of nature and the living world that Rachel expressed first as a writer and later as a student of marine biology. Carson graduated from Pennsylvania Colledge for Women (now Chatham University) in 1929, studied at the Woods Hole Marine Biological Laboratory, and recieved her MA in Zoology from John Hopkins University in 1932.</p><br><br><br>	</div>
						</li>
						<li data-aos="fade-down">
							<div class="testi-agile">
								<p>She was hired by the U.S Bureau of Fisheries to write radio scripts during the Depression and supplemented her income writing feature articles on natural history for the "Baltimore Sun". She began a fifteen-year career in the federal service as a scientist and editor in 1936 and rose to become Editor-in-Chief of all publications for the U.S Fish and Wildlife Service.</p>
							    <p>She wrote phamphlets on conservation and natural resources and edited scientific articles, but in her free time turned her government research into lyric prose, first as an article "Undersea"(1937,for the Atlantic Monthly), and then in a book, "Under the Sea-Wind"(1941). In 1952, she published her prize-winning study of the ocean, "The Sea Aroung Us", which was followed by "The Edge of the Sea" in 1955. These books constituted a biography of the ocean and made Carson famous as a naturalist and science writer for the public. Carson resigned from government service in 1952 to devote herself to her writing.</p><br><br><br>
							</div>
						</li>
						<li data-aos="fade-down">
							<div class="testi-agile">
								<p>She wrote several other articles designed to teach people about the wonder and beauty of the living world, including "Help Your Child to Wonder"(1956) and "Our Ever-Changing Shore"(1957), and planned another book on the ecology of life. Embedded within all of Carson's writing was the view that human beinfs were but on part of the nature distinguished primarily by their power to alter it, in some cases irreversibly.</p><br>
								<p>Distrubed by the profligate use of synthetic chemical pesticides after World War II, Carson reluctantly changed her focus in order to warm the public about the long-term effects of misusing pesticides. In "Silent Spring"(1962), she challenged the practices of agricultural scientists and the government and called for a change in the way humankind viewed the natural world.</p><br>
								<p>Carson was attacked by the chemical industry and some in government as an alarmist, but courageously spoke out to remind us that we are a vulnerable part of the natural world subject to the same damage as the rest of the ecosystem. Testifying before Congress in 1963, Carson called for new policies to protect human health and the environment. Rachel Carson died in 1964 after a long battle against breast cancer. Her witness for the beauty and integrity of life continues to inspire new generations to protect the living world and all its creatures.</p><br><br><br>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>