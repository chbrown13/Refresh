<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
	<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
	<style type="text/css">
		h3
		{
			font-family: Century Gothic;
		}
		a
		{
			text-decoration: none;
			color: lightblue;
		}
		ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #1E90FF;
}

li {
    float: left;
}

li a, .dropbtn {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
    background-color: #D3D3D3;
}

li.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}
a
{
	font-size: 13px;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}



	</style>
</head>
<body>
	
<ul>
  <li><a href="../index.php">Home</a></li>
   
    <li class="dropdown">
    <a href="#" class="dropbtn">Elementary School</a>
    <div class="dropdown-content">
      <a href="#" id="elemMath">Math</a>
      <a href="#" id="elemScience">Science</a>
      <a href="#" id="elemHistory">History</a>
      <a href="#" id="elemEnglish">English </a>
    </div>
  </li>

   <li class="dropdown">
    <a href="#" class="dropbtn">Middle School</a>
    <div class="dropdown-content">
      <a href="#" id="middleMath">Math </a>
      <a href="#" id="middleScience">Science</a>
      <a href="#" id="middleHistory">History </a>
      <a href="#" id="middleEnglish">English </a>
    </div>
  </li>

  <li class="dropdown">
    <a href="#" class="dropbtn">HighSchool</a>
  <div class="dropdown-content">
      <a href="#" id="hsMath">Math </a>
      <a href="#" id="hsScience">Science</a>
      <a href="#" id="hsHistory">History </a>
      <a href="#" id="hsEnglish">English </a>
    </div>
  </li>
</ul>
	<script type="text/javascript">

	//Elementary School
	var elemMath = document.getElementById("elemMath");
	elemMath.addEventListener("click", elemMathQuiz, false);

	var elemScience = document.getElementById("elemScience");
	elemScience.addEventListener("click", elemScienceQuiz, false);

	var elemHistory = document.getElementById("elemHistory");
	elemHistory.addEventListener("click", elemHistoryQuiz, false);

	var elemEnglish = document.getElementById("elemEnglish");
	elemEnglish.addEventListener("click", elemEnglishQuiz, false);


	//middle School

	var middleEnglish = document.getElementById("middleEnglish");
	middleEnglish.addEventListener("click", middleEnglishQuiz, false);

	var middleHistory = document.getElementById("middleHistory");
	middleHistory.addEventListener("click", middleHistoryQuiz, false);

	var middleMath = document.getElementById("middleMath");
	middleMath.addEventListener("click", middleMathQuiz, false);

	var middleScience = document.getElementById("middleScience");
	middleScience.addEventListener("click", middleScienceQuiz, false);

	//HighSchool
		var math= document.getElementById("hsMath");
		math.addEventListener("click", hsMathQuiz, false);

		var science = document.getElementById("hsScience");
		science.addEventListener("click", hsScienceQuiz, false);

		var english = document.getElementById("hsEnglish");
		english.addEventListener("click", hsEnglishQuiz, false);


		var hsMath = {
			"math": [ { "question": "The x coordinate on the unit circle refers to  what trigonometry value", "answer": "cosine"},
			{"question" : "The y coordinate on the unit circle refers to  what trigonometry value", "answer": "sin"},
			{"question" : "What is the name of the theorem whose formula is a^2 +b^2 = c^2", "answer": "Pythagorean"},
			{"question": "A way to find the slope is known as rise over ______ ?", "answer": "run"},
			{"question": "The absolute value of -5, denoted |-5| is ____ ", "answer": "5"},
			{"question": "What is the line that touches a graph in one local point so that when you zoom in, the graph and the tangent line will eventually look the same", "answer": "tangent"},
			{"question":"sin / cos is equal to", "answer": "tan"},
			{"question": "1 / cos is equal to", "answer": "sec"},
			{"question": "What does sin^2 + cos^2 equal?", "answer": "1"},
			{"question": "The highest exponent in a polynomial equation is referred to as the highest what _____ ?", "answer": "degree"}]

		};

		var hsScience = {
			"science": [ { "question": "What is an educated guess for an experiment? ", "answer": "Hypothesis"},
			{"question" : "The ________ is the variable that is changed or controlled in a scientific experiment", "answer": "independent"},
			{"question" : "The ________ variable is the variable being tested in a scientific experiment", "answer": "dependent"},
			{"question": "What is the term that describes a steady state, maintain, internal condition", "answer": "homeostasis"},
			{"question": "Photosynthesis is the process that describes how _____ use the sun to make food", "answer": "plants"},
			{"question": "What is life's basic unit of structure and function that is made of organelles?", "answer": "cell"},
			{"question": "True or False, Protons have a positive charge", "answer": "True"},
			{"question" : "True or False, Neutrons have a negative charge" , "answer": ""},
			{"question": "What is the type of bond in which atoms share electrons between them? ", "answer": "Covalent"},
			{"question": "Proteins that increase the rate of a chemical reaction?", "answer" : "Enzymes"},
			{"question": "Carbohydrates,  lipids, proteins, and nucleic acids make up what compound?", "answer": "organic"},
			{"question": "Livings things that eat meat are called", "answer": "Carnivores"},
			{"question": "True or False, a decrease in food supply is a limiting factor", "answer": "True"},
			{"question": "The portion of earth that describes where living things are found is called the", "answer": "Biosphere"},
			{"question": "What number chromosome determines a humans sex?", "answer": "23"},
			{"question": "The physical characteristic of an organism is called the", "answer": "phenotype"}]

		};

		var hsEnglish = {
			"english": [ { "question": "A comparison of two  things that are similar", "answer": "analogy"},
			{"question" : "The leading character in a drama, movie or performance.", "answer": "protagonist"},
			{"question" : "A mistaken belief, especially one based on unsound judgement", "answer": "fallacy"},
			{"question": "Before or existing before a war", "answer": "antebellum"},
			{"question": "To travel the world, either by plane or ship is to", "answer": "circumnavigate"},
			{"question": "To grant freedom to, as from slavery or servitude", "answer": "enfranchise"},
			{"question":"When the sun crosses the plane of the earth's equator", "answer": ""},
			{"question": "Cleverly amusing in tone", "answer": "facetious"},
			{"question": "All of the same or similar kind or nature", "answer": "homogeneous"},
			{"question": "Incongruity between what might be expected and what occurs", "answer": "irony"},
			{"question": "Full of trivial conversation, talkative ", "answer": "loquacious"}, 
			{"question": "Enter into a combination with oxygen", "answer": "oxidize"},
			{"question": "To summarize breifly", "answer": "recapitulate"},
			{"question": "Something done or paid in expiation of a wrong doing", "answer": "reparation"},
			{"question": "An advocate of the extension of voting rights", "answer": "suffragist"},
			{"question": "Marked by extreme intensity of emotions or convictions", "answer": "vehement"},
			{"question": "To desist, go without, withdraw is to", "answer": "Abstain"},
			{"question": "Stubborn, willful", "answer": "headstrung"}]

		};

		var middle_school = {
		"math": [ 
			{"question": "What is the formula to calculate the slope of a line?", "answer": "y = mx + b"},
			{"question": "The population of New York is about twice that of Paris. Write the ratio of the population of New York to the population of Paris:\n A. 1:1\n B. 1:2\n C. 2:½ \n D. 2:1\n", "answer": "D"},
			{"question": "What is the least common multiple (LCM) of 8 and 12?", "answer": "24"},
			{"question": "Calculate 7 * (5 + 3):", "answer": "56"},
			{"question": "Which of the following is the definition of parallel lines?\n A. Two distinct coplanar lines that intersect at a 90°angle.\n B. Two distinct coplanar lines that do not intersect.\n C. Two rays with a common endpoint that point in opposite directions.\n D. Two rays sharing a common endpoint.", "answer": "B"},
            {"question": "What is the square root of 81?", "answer":"9"},
            {"question": "What is the greatest common factor of 96 and 40?", "answer": "8"},
            {"question": "According to the commutative property, a + b = ", "answer": "b + a"},
            {"question": "In a bag of small balls 1/4 are green, 1/8 are blue, 1/12 are yellow and the remaining 26 white. How many balls are blue?", "answer": "6"},
            {"question": "What is the hypotenuse of a right triangle with sides of 8 and 15?", "answer": "17"}
		],
		"history": [
			{"question": "True or False: During World War I the United States was a member of the Allied Powers.", "answer": "True"},
            {"question": "The Magna Carta was published by the king of what country?", "answer": "England"},
            {"question": "What year did the Civil War end?", "answer": "1961"},
            {"question": "Who was the president of the Confederate states during the U.S. Civil War?", "answer": "Jefferson Davis"},
            {"question": "True or False: The Bill of Rights consists of the first 5 amendments of the US Constitution.", "answer": "False (10)"},
            {"question": "Where is the executive branch of the US government located?", "answer": "The White House"},
            {"question": "How many members are there in the Senate?", "answer": "100"},
            {"question": "What organization ofﬁcially elects the US President and Vice President?", "answer": "Electoral College"},
            {"question": "What country was the Aztec empire located in?", "answer": "Mexico"},
            {"question": "In what city did democracy originate?", "answer": "Athens"}
		],
		"english": [
			{"question": "What is the indefinite pronoun in the following sentence: Amy is vegetarian and only eats vegetables, but Sarah will eat anything.", "answer": "anything"},
            {"question": "Fill in the Blank: A __ is a rhyming poem with 14 lines.", "answer": "sonnet"},
            {"question": "Which of the following means \"a feeling of annoyance\"?\n A. exasperation\n B. exuberance\n C. elation\n D. hopeful", "answer": "A"},
            {"question": "Henry was usually <b>taciturn</b>, he never really spoke much. What does taciturn mean?\n A. loud\n B. verbose\n C. quiet\n D. funny", "answer": "C"},
            {"question": "How many prepositions are in the following sentence: The plane flew across the country and landed in Seattle, where the group traveled around the city.", "answer": "3"},
            {"question": "Fill in the blank: He will be attending the party and is very __ about the celebration.\n A. excited\n B. sad\n C. patient\n D. indifferent", "answer": "A"},
            {"question": "I am normally not indolent, but it's Saturday morning and I had a busy week. What does indolent mean?\n A. hungry\n B. lazy\n C. stiff\n D. thoughtul", "answer": "B"},
            {"question": "Fill in the Blanks: The two types of drama are __ and __.\n A. joy, pain\n B. light, dark\n C. open, closed\n D. comedy, tragedy", "answer": "D"},
            {"question": "What type of poem does not follow any specific rules for rhyme scheme, syllable count, punctuation, etc.?", "answer": "free verse"},
            {"question": "True or False: Non-fiction is a genre of writing composed of non-factual text.", "answer": "False"}
		],
		"science": [
			{"question": "What is the name for the colored part of an eye?", "answer": "iris"},
            {"question": "Which is not one of the three types of rock?\n A. igneous\nB. sedimentary\nC. concave\nD. metamorphic", "answer": "C"},
            {"question": "What part of the cell is a thin layer that surrounds the cell, keeps it together, and controls the substances passing into and out of the cell?", "answer": "membrane"},
            {"question": "Fill in the Blank: Mammals are warm-blooded vertebrates with glands that produce __.", "answer": "milk"},
            {"question": "What pigment gives leaves their green color and absorbs light that is used in photosynthesis?", "answer": "chlorophyll"},
            {"question": "What is is a metric unit of force?", "answer": "newton"},
            {"question": "Fill in the Blank: An astronomical unit is equal to the distance between the __ and the __.\n A. Earth, moon\n B. moon, sun\n C. Earth core, crust\n D. sun, Earth", "answer": "D"},
            {"question": "What is the term to describe a seed with two seed leaves?", "answer": "dicotyledon"},
            {"question": "What biological kingdom refers to single-celled organisms with a nucleus?", "answer": "Protista"},
            {"question": "True of False: All living things use energy.", "answer": "True"}
		],
	};

	var elem_school = {
		"math": [ 
			{"question": "What is the sum of 9 and 6?", "answer": "15"},
			{"question": "What is the difference between 10 and 3?", "answer": "7"},
			{"question": "Six tens is the same as what number?", "answer": "60"},
			{"question": "Subtract 19-5-8:", "answer": "6"},
			{"question": "Add 12 and 6:", "answer": "18"},
            {"question": "What is 7,859 rounded to the hundreds place?", "answer": "7,800"},
            {"question": "What is the next number in the pattern: 3, 6, 9, 12, 15, __?", answer: "18"},
            {"question": "Joe has more toys that Jane and less toys than Bill. Mark has more toys than Bill. Who has the most toys?", "answer":"Mark"},
            {"question": "How many digits are in 1,428,893?", "answer": "7"},
            {"question": "What is the value of the Roman Numeral L?", "answer": "50"}
		],
		"history": [
			{"question": "Which war was fought between the north and the south regions of the United States?\n A. Civil War\n B. Mexican War\n C. Revolutionary War\n D. World War I", "answer": "A"},
            {"question": "Who was the first President of the United States? (First and Last Name)", "answer": "George Washington"},
            {"question": "In which country would you find the Eiffel Tower?", "answer": "France"},
            {"question": "Who was the first African-American Major League baseball player? (First and Last Name)", "answer": "Jackie Robinson"},
            {"question": "How many continents is the Earth divided into?", "answer": "7"},
            {"question": "How many states were in the original colonies of America?", "answer": "13"},
            {"question": "Fill in the Blank: The economic model of __ and __ describes the relationship between the cost and availability of goods.\n A. rise, fall\nB. supply, demand\nC. increase, decrease\n D. stop, go", "answer": "B"},
            {"question": "Fill in the Blank: Suffrage refers to the right to __.", "answer": "vote"},
            {"question": "If you flew from New York City to London, what ocean would you cross?", "answer": "Atlantic"},
            {"question": "What type of government is ruled by a king or queen?", "answer": "monarchy"}
		],
		"english": [
			{"question": "What is the contraction form of \"do\" and \"not\"?", "answer": "don't"},
            {"question": "Which of the following is a noun?\n A. quickly\n B. jumping\n C. and\n D. ball", "answer": "ball"},
            {"question": "What is the subject of the following sentence: My computer is really cool.", "answer": "computer"},
            {"question": "Which of the following is a proper noun?\n A. Caroline\n B. dog\n C. car\n D. school", "answer": "D"},
            {"question": "Laurie and her parents went out to dinner. They went to a restaurant down the street from their house. She had pizza, her dad had spaghetti, and her mom had a burrito. What did Laurie eat?", "answer": "pizza"},
            {"question": "What is the adjective in this sentence: Michael was very tall and ran quickly.", "answer": "tall"},
            {"question": "What is the subject in the following sentence: The students told their teacher they forgot to study for the test.", "answer": "students"},
            {"question": "Which of the following is a synonym of \"big\"?\n A. small\nB. cold\n C. huge\n D. top", "answer": "C"},
            {"question": "What is the adverb in the following sentence: He slept peacefully after a tiring day at work.", "answer": "peacefully"},
            {"question": "Which of the following is not an article?\n A. a\n B. and\n C. an\n D. the", "answer": "B"}
		],
		"science": [
			{"question": "What of the following is NOT a primary color?\n A. Blue\n B. Red\n C. Yellow\n D. White", "answer": "D"},
            {"question": "How many years in a century?", "answer": "100"},
            {"question": "Fill in the blank: The Earth has seasons because its __ is tilted as it revolves around the Sun.", "answer": "axis"},
            {"question": "What is the hard outer layer of the Earth called?", "answer": "crust"},
            {"question": "What is the movement of weathered materials on Earth by water, wind, or ice?", "answer": "erosion"},
            {"question": "What is the force that pulls objects towards each other?", "answer": "gravity"},
            {"question": "Fill in the Blank: A __ is a large body of still water.", "answer": "lake"},
            {"question": "Which of the following is not a state of matter?\nA. solid\nB. gas\nC. metal\nD. liquid", "answer": "C"},
            {"question": "Fill in the Blank: All living and nonliving things on the Earth make up the __.", "answer": "biosphere"},
            {"question": "What part of the cell contains DNA?", "answer": "nucleus"}  
		],
	};


		var i = 0;
		var max = hsMath.math.length;
		function hsMathQuiz()
		{
			for(var i = 0; i < max; i++)
			{
				var input = prompt(hsMath.math[i].question);
				if(input === hsMath.math[i].answer)
				{
					alert("CORRECT");
				}
				else
				{
					alert("INCORRECT the correct answer was " + hsMath.math[i].answer);
				}
			}
		}

		function hsScienceQuiz()
		{
           for(var i = 0; i < hsScience.science.length;i++)
           {
           	 var input = prompt(hsScience.science[i].question);
           	 if(input === hsScience.science[i].answer)
           	 {
           	 	alert("CORRECT");
           	 }
           	 else
           	 {
           	 	alert("INCORRECT the correct answer was " + hsScience.science[i].answer);
           	 }
           }
		}

		function hsEnglishQuiz()
		{
			for(var i = 0; i < hsEnglish.english.length; i++)
			{
				var input = prompt(hsEnglish.english[i].question);
				if(input === hsEnglish.english[i].answer)
				{
					alert("Correct");
				}
				else
				{
					alert("INCORRECT the correct answer was " + hsEnglish.english[i].answer);
				}
			}
		}

		function elemMathQuiz()
		{
			for(var i = 0; i < elem_school.math.length; i++)
			{
				var input = prompt(elem_school.math[i].question);
				if(input === elem_school.math[i].answer)
				{
					alert("Correct");
				}
				else
				{
					alert("Incorrect the " + elem_school.math[i].answer);
				}

			}
		}

		function elemScienceQuiz()
		{
			for(var i = 0; i < elem_school.science.length; i++)
			{
				var input = prompt(elem_school.science[i].question);
				if(input === elem_school.science[i].answer)
				{
					alert("Correct");
				}
				else
				{
					alert("Incorrect the " + elem_school.science[i].answer);
				}

			}
		}


		function elemHistoryQuiz()
		{
			for(var i = 0; i < elem_school.history.length; i++)
			{
				var input = prompt(elem_school.history[i].question);
				if(input === elem_school.history[i].answer)
				{
					alert("Correct");
				}
				else
				{
					alert("Incorrect the " + elem_school.history[i].answer);
				}

			}
		}


		function elemEnglishQuiz()
		{
			for(var i = 0; i < elem_school.english.length; i++)
			{
				var input = prompt(elem_school.english[i].question);
				if(input === elem_school.english[i].answer)
				{
					alert("Correct");
				}
				else
				{
					alert("Incorrect the asnwer is " + elem_school.english[i].answer);
				}

			}
		}

		function middleMathQuiz()
		{
			for(var i = 0; i < middle_school.math.length;i++)
			{
				var input = prompt(middle_school.math[i].question);
				if(input === middle_school.math[i].answer)
				{
					alert("Correct");
				}
				else
				{
					alert("Incorrect the answer is " + middle_school.math[i].answer);
				}
			}
		}

		function middleScienceQuiz()
		{
			for(var i = 0; i < middle_school.science.length;i++)
			{
				var input = prompt(middle_school.science[i].question);
				if(input === middle_school.science[i].answer)
				{
					alert("Correct");
				}
				else
				{
					alert("Incorrect the answer is " + middle_school.science[i].answer);
				}
			}
		}

		function middleEnglishQuiz()
		{
			for(var i = 0; i < middle_school.english.length;i++)
			{
				var input = prompt(middle_school.english[i].question);
				if(input === middle_school.english[i].answer)
				{
					alert("Correct");
				}
				else
				{
					alert("Incorrect the answer is " + middle_school.english[i].answer);
				}
			}
		}

		function middleHistoryQuiz()
		{
			for(var i = 0; i < middle_school.history.length; i++)
			{
				var input = prompt(middle_school.history[i].question);
				if(input === middle_school.history[i].answer)
				{
					alert("Correct");
				}
				else
				{
					alert("Incorrect the answer is " + middle_school.history[i].answer);
				}
			}
		}




		
	</script>
</body>
</html>
