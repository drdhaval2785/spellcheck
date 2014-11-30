SanskritSpellCheck
==================

Let me document the method I have adopted to find the suspected wrong entries in #2. 
Code for checking is attached <a href="https://github.com/drdhaval2785/SanskritSpellCheck">here</a>. 
<a href="https://docs.google.com/document/d/1G4HoDz9nuj2GPeHQopNVSnDEGrnXtoAuXFugj4sQHZg/edit?usp=sharing">Google doc</a> for logic behind approach and instructions for dictionary /testers.
Video tutorial for code running - http://youtu.be/qLqYUZUGM6M
Video tutorial for noting issues on this correction forum - https://www.youtube.com/watch?v=rKZ_OsSHwsY

In short - the logic is as follows
1. We check the base dictionary for different Vowel and consonant patterns like VV, VCV, VCCV, VCCCV etc. (We presume that the base dictionary has correct entries - which need not be true).
2. We check the dictionary to be tested for different vowel and consonant patterns like 1 above.
3. If the pattern is not found in 1, but found in 2 - we note that in suspectfalse.html.
4. We check those entries from dictionary scans and verify.
5. If wrong word is detected, it is intimated to the webmaster <a href="https://github.com/sanskrit-lexicon/CORRECTIONS/issues">here</a>.

The latest version of the code is faultfinder3a.php (specific for finding errors from a headword list sanhw1.txt (https://github.com/drdhaval2785/SanskritSpellCheck/blob/master/sanhw1.txt) of dictionaries hosted at http://www.sanskrit-lexicon.uni-koeln.de/).
It is a commandline code which can be executed as shown below.
Step 1 - CD to the directory containing faultfinder3a.php
Step 2 - type php faultfinder3a.php MW sanhw1.txt AllvsMW.txt. (This will create a file having suspect wrong entries from sanhw1.php when compared to MW as base.) 
Step 3 - type php faultfinder3a-html.php AllvsMW.txt AllvsMW-new.html (This will render AllvsMW.txt in an HTML file with links to individual entries for checking online)
Step 4 - type php dictwisesorter.php AllvsMW-new.html dictwiseerrors1.html (This will sort AllvsMW-new.html dictionarywise.)

