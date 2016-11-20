<?php include '../subjects.php'; ?>
<!DOCTYPE html>

<html>
<head>
<title>Refresh Hangman</title>
<script language="JavaScript">
    hangman = new Array("--------\n|      |\n|\n|\n|\n|\n=====",
"--------\n|      0\n|\n|\n|\n|\n=====",
"--------\n|      0\n|      |\n|\n|\n|\n=====",
"--------\n|      0\n|     \\|\n|\n|\n|\n=====",
"--------\n|      0\n|     \\|/\n|\n|\n|\n=====",
"--------\n|      0\n|     \\|/\n|      |\n|\n|\n=====",
"--------\n|      0\n|     \\|/\n|      |\n|     /\n|\n=====",
"--------\n|      0\n|     \\|/\n|      |\n|     / \\\n|\n=====",
"--------\n|       \n|     \\|/\n|      |\n|     / \\  0\n|\n=====","")
    words = new
    Array("computer","duke","hack","wolfpack", "sunday", "engineer", "cool");
    function startAgain() {
        guesses = 0
        max = hangman.length - 1
        guessed = " "
        len = words.length - 1
        answer = words[Math.round(len*Math.random())].toUpperCase()
        displayHangman()
        displayToGuess()
        displayGuessed()
    }
    function displayHangman() {
        document.game.status.value=hangman[guesses]
    }
    function displayToGuess() {
        pattern=""
        for(i=0;i<answer.length;++i) {
            if(guessed.indexOf(answer.charAt(i)) != -1)
                pattern += (answer.charAt(i)+" ")
            else pattern += "_ "
        }
        document.game.answer.value=pattern
    }
    function displayGuessed() {
        document.game.guessed.value=guessed
    }
    function badGuess(s) {
        if(answer.indexOf(s) == -1) return true
        return false
    }
    function winner() {
        for(i=0;i<answer.length;++i) {
            if(guessed.indexOf(answer.charAt(i)) == -1) return false
        }
        return true
    }
    function guess(s){
        guessed = s + guessed
        if(badGuess(s)) ++guesses
        displayHangman()
        displayToGuess()
        displayGuessed()
        if(guesses > max - 2){
            guesses = hangman.length
            displayHangman()
            alert("You're dead. The word you missed was "+answer+".")
            startAgain()
         }
         if(winner()) {
            alert("You won!")
            startAgain()
         }
    }
    </script>
</head>
<body>
    <h1>Hangman Word Game</h1>
    <form name="game">
    <pre>
    <textarea name="status" ROWS="7" COLS="16"></textarea>
    </pre><p>
    <input type="TEXT" name="answer"> Word<br>
    <input type="TEXT" name="guessed"> Guesses<br>
    <p>Enter your next guess.</p>
    <input type="BUTTON" value=" A " onclick="guess('A')">
    <input type="BUTTON" value=" B " onclick="guess('B')">
    <input type="BUTTON" value=" C " onclick="guess('C')">
    <input type="BUTTON" value=" D " onclick="guess('D')">
    <input type="BUTTON" value=" E " onclick="guess('E')">
    <input type="BUTTON" value=" F " onclick="guess('F')">
    <input type="BUTTON" value=" G " onclick="guess('G')">
    <input type="BUTTON" value=" H " onclick="guess('H')">
    <input type="BUTTON" value=" I " onclick="guess('I')">
    <input type="BUTTON" value=" J " onclick="guess('J')">
    <input type="BUTTON" value=" K " onclick="guess('K')">
    <input type="BUTTON" value=" L " onclick="guess('L')">
    <input type="BUTTON" value=" M " onclick="guess('M')">
    <input type="BUTTON" value=" N " onclick="guess('N')">
    <input type="BUTTON" value=" O " onclick="guess('O')">
    <input type="BUTTON" value=" P " onclick="guess('P')">
    <input type="BUTTON" value=" Q " onclick="guess('Q')">
    <input type="BUTTON" value=" R " onclick="guess('R')">
    <input type="BUTTON" value=" S " onclick="guess('S')">
    <input type="BUTTON" value=" T " onclick="guess('T')">
    <input type="BUTTON" value=" U " onclick="guess('U')">
    <input type="BUTTON" value=" V " onclick="guess('V')">
    <input type="BUTTON" value=" W " onclick="guess('W')">
    <input type="BUTTON" value=" X " onclick="guess('X')">
    <input type="BUTTON" value=" Y " onclick="guess('Y')">
    <input type="BUTTON" value=" Z " onclick="guess('Z')">
    <script language="JavaScript">
        startAgain()
    </script>
    </form>
</body>
</html>
           
       