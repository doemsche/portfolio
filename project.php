<?php
require('Smarty.class.php');
$smarty = new Smarty;

$smarty->assign("projects", array(
	//software visualization
	array("id" => 1,
		  "name" => "Software Visualization",
		  "subtitle" => "Visualization of <strong>Complexity</strong> by means of Software",
		  "date"=> "2008",
		  "author"=> "Dominik Schlaepfer",
		  "coffee" => "120 Cups",
		  "tags" =>  array("tag_1" => "programming", "tag_2" => "3d"),
		  "media" => array("pdf" => "Software Visualization.pdf", "movie" => "http://www.youtube.com/watch?v=gW_IMd5KqM4"),
		  "pics" => array(0,1),
		  "description" => "Aim of this project is the visualization of complex relations of items in big systems. 
		 		Software code and Software architecture as a very abstract and very complex metaphor, oppose a good example 
		  		to examine the benefits of visualization over pure code and alphanumerically written codes and metaphors. 
		  		The visualization in the project is about method-calls in software projects. The main idea is to visualize a 
		  		certain method-call and see what other methods are triggered by this call. The visualization takes part in a 3D-space, 
		  		which enables the user to look at the method-call tree from different perspectives. The different perspectives provide 
		  		different views and different conclusions to the method-call."
		 ),
	//interaction dynamics
	array("id" => 2,
		  "name" => "Interaction Dynamics",
		  "subtitle" => "Research new <strong>Interaction metaphors</strong>",
		  "date"=> "2007",
		  "author"=> "Dominik Schlaepfer",
		  "coffee" => "80 Cups",
		  "tags" =>  array("tag_1" => "programming", "tag_2" => "design"),
		  "media" => array("pdf" => "Interaction Dynamics.pdf", "movie" => "", "swf" => "Interaction Dynamics.swf"),
		  "pics" => array(0,1),
		  "description" => "Interaction Dynamics is about examining interaction models. The task was to establish Interaction models to
		   contradictory terms such as: big - small, many - few, inner - outer, visible - invisible."
		),
	//radio zhagdak
	array("id" => 3,
		  "name" => "ZagHdk Radio",
		  "subtitle" => "Interactive GPS <strong>Hearplay</strong>",
		  "date"=> "2010",
		  "author"=> "Dominik Schlaepfer, Lilian Kraus",
		  "coffee" => "Cups",
		  "tags" =>  array("tag_1" => "physical", "tag_2" => "programming"),
		  "media" => array("www" => "http://www.bwart.ch/radioZagHdaK/", "movie" => "http://www.youtube.com/watch?v=ltFjPXyVbr8", "swf" => ""),
		  "pics" => array(0,1),
		  "description" => "Core-concept: ZagHdaK Radio is an interactive GPS hear-play created at ZHdK in October 2009. 
		  The main concept is to have a real physical space (in our case Zürich) in which a user can move around randomly.
		  This physical reality is then overlayed by a second perception layer (in our case audio feedback) which is supposed
		  to guide the user around in the physical reality and provide him with different audio information depending on the
		  chosen way. ZagHdaK-Radio plays with contrasts between imagination and reality and extends awareness and perception. 
		  Concept realisation: As second perception layer the ZagHdaK-Radio concept features an imaginary setup of an unnamed 
		  city in the Middle East. This imaginary layer is invisibly mapped over the physical reality and represented by audio 
		  feedback. Certain predefined points on the reality layer trigger certain soundactions on the audio layer. Interactivity
		  is provided by the way we move around and by the way approaching the predefined points. When strolling around far from
		  the predefined points the user is provided with monotonous audio-heartbeat; when approaching a point, the heartbeat speeds
		  up and finally, depending on distance to that point, triggers different sounds. Every point is accessible by different
		  streets and depending on the route chosen, one approaches the point in another context (correspondingly different sound is
		  played on the audio-layer). The predefined points and the corresponding soundfiles are arranged in a way that individual
		  narratives emerge when moving around. ZagHdaK radio is partly political since it talks about problematic tendencies in
		  world politics but does not consider itself as a purely political project; ZagHdaK radio features different approaches of
		  everyday life in a middle eastern town. "
		),
	//vw the future car
	array("id" => 4,
		  "name" => "The Future Car",
		  "subtitle" => "How does the <strong>future car</strong> sound?",
		  "date"=> "2010",
		  "author"=> "Dominik Schlaepfer",
		  "coffee" => "100+ Cups",
		  "tags" =>  array("tag_1" => "sound", "tag_2" => "programming"),
		  "media" => array("pdf" => "", "movie" => "http://www.youtube.com/watch?v=wI6bHefuae0", "swf" => ""),
		  "pics" => array(0,1),
		  "description" => "This project is a cooperation project with Volkswagen. The topic is the future sound of cars. Volkswagen
		   provided and Audi G5 equipped with sensors. These sensors fed a Pure Data patch with data. The patch again interpreted this
		    data and forwarded it to a synthezizer which created the final audio outupt. The task was to set the process of boarding a 
		    car to sound. (Sensors were placed in the door (open and close), the seat (sit down) and the security belt (closing)). 
		    A research revealed, that the design of car shapes incline more and more organic features in future sketches. This project 
		    tries to apply this paradigm shift to the world of sounds. Three organic sound-skins were developped: liquid, bone and earthy."
		),	
	//gyg mobile
	array("id" => 5,
		  "name" => "GYG Mobile",
		  "subtitle" => "What do you want to do <strong>here and now</strong>?",
		  "date"=> "2011",
		  "author"=> "Dominik Schlaepfer",
		  "coffee" => "250 Cups",
		  "tags" =>  array("tag_1" => "programming", "tag_2" => ""),
		  "media" => array("pdf" => "", "movie" => "http://www.youtube.com/watch?v=eCB6MdMHMGU", "swf" => ""),
		  "pics" => array(0,1),
		  "description" => "GetYourGuide is a booking website for tours & activities. From sightseeing by bus to shark diving,
		   GetYourGuide offers the full spectrum of things to do for your next vacation or weekend adventure. In order to make
		   the range of activities available in a more spontaneous way and with location based suggestions, GetYourGuide provides
		   a basic version of the main website for Mobile usage. It is possible to get location based suggestions by the system or
		   just browsing around tours and activities. The booking process is fully integrated and a Ticket is saved on the Local 
		   Storage of the Smartphone. The site is available under www.getyourguide.com, supported platforms are iPhone and Android.
		   The Mobile Website is not a native smartphone application, but a web application (PHP &MySQL) optimized for smart phone
		   usage."
		),	
	//ipad media control
	array("id" => 6,
		  "name" => "iPad Media control",
		  "subtitle" => "<strong>Get rid of your remote controls!</strong>",
		  "date"=> "2012",
		  "author"=> "Dominik Schlaepfer",
		  "coffee" => "123 Cups",
		  "tags" =>  array("tag_1" => "programming", "tag_2" => ""),
		  "media" => array("pdf" => "", "movie" => "http://www.youtube.com/watch?v=n3ULKeY49Pg", "swf" => ""),
		  "pics" => array(0,1),
		  "description" => "..."
		),	
	//dynament
	array("id" => 7,
		  "name" => "Dynament",
		  "subtitle" => "The future of media and commenting",
		  "date"=> "2010",
		  "author"=> "Dominik Schlaepfer",
		  "coffee" => "200 Cups",
		  "tags" =>  array("tag_1" => "design", "tag_2" => "programming"),
		  "media" => array("pdf" => "Dynament.pdf", "movie" => "http://www.youtube.com/watch?v=tWNU4cw-MuM", "www" => "http://www.meta-vue.ch/BAdocu/"),
		  "pics" => array(0,1),
		  "description" => "Ever since the web has become participative there are huge amounts of comments to nearly any kind of
		   web content. Research shows that comments harbour underestimated information-carrier potential. Dynament is a concept which
		   focuses on different web user groups and their distinguished acquaintances in relation with comments. The video featured
		   in the media-section shows the concept video. Dynament helps the user to get more information out of comments. For further
		   information check this link, there is plenty of information available.
		   The project included the following steps: background research, user inquiry, concept, first prototype, evaluation, iterated 
		   prototype. "
		),	
	//Screen Typography
	array("id" => 8,
		  "name" => "Screen Typo",
		  "subtitle" => "A visionary <strong>synchronoptic</strong> program header for arte TV",
		  "date"=> "2008",
		  "author"=> "Dominik Schlaepfer",
		  "coffee" => "67 Cups",
		  "tags" =>  array("tag_1" => "programming", "tag_2" => "design"),
		  "media" => array("pdf" => "Screentypography.pdf", "movie" => "http://www.youtube.com/watch?v=24zym4BERBc", "swf" => ""),
		  "pics" => array(0,1),
		  "description" => "Screentypography features a synchronoptic program header for arte TV. The challenge is to present the TV-program and its contents
		  (pictures, program-information, meta-data) in a user friendly and easily accessible way. The project uses the wheel as a time metaphor and provides the user
		  with a micro and macro view to switch inbetween."
		),	
	//web clipper
	array("id" => 9,
		  "name" => "Web Clipper",
		  "subtitle" => "Memonic Webclipper Redesign",
		  "date"=> "2011",
		  "author"=> "Dominik Schlaepfer",
		  "coffee" => "20 Cups",
		  "tags" =>  array("tag_1" => "design", "tag_2" => ""),
		  "media" => array("pdf" => "", "movie" => "http://www.youtube.com/watch?v=B485EmPIvtM", "swf" => ""),
		  "pics" => array(0,1),
		  "description" => "The context of this project was an assessment-task for Memonic (Webclipping Software Company). My project focuses
		   on the concept of a horizontal and vertical alignment of the Webclipper-Toolbar. Depending on the content it is important for the 
		   user to have the choice where to align the toolbar so it does not interfere with the content."
		)	
	//end
	)
);

$smarty->assign("page_title","Project");
$smarty->assign("css_namespace","index");
$smarty->assign("image_path","_resources/img/");

$smarty->display('project.tpl');

?>