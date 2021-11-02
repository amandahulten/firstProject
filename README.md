![A volleyball-team doing a center-spike and chearing.](https://media.giphy.com/media/ZauHdkNVXUXeaPpCnQ/giphy.gif)

# Volleyball-EM 2023

Did you know that Sweden's women's national team in volleyball qualified for EM this year for the first time in 38 years? Probably not. This website is therefore made with the purpose to get more people interested in female volleyball, so many more are prepared and exited for the next Volleyball-EM in 2023 (..since they made it all the way to quarter-finals(?!) this year, they are already qualified for EM 2023!!). The website offers you a countdown to EM 2023, a quick overview over the players and videos to learn more about volleyball, enjoy! 


Visit my website here: http://amandasportal.se/firstProject/index.php

# Installation

1. Download PHP through Homebrew using the command "brew install php".
2. Clone repo from GitHub.
3. Run PHP localhost from terminal (ex. PHP -S localhost:8000) from root folder.
4. You are good to go!

# Code Review

Code review written by [Nema Vinkeloe Uuskyla](https://github.com/patrosk).

1. `home.css:7 & 54` - You set your :root background color to black but then you've set the entire body's background-color to white; maybe you could have just set it to white from the start. Similarly, you could have set your font color to white, since your text elements are white everywhere except on one place.
2. `home.css:43-51` - The chosen font Poppins failed to load, prompting error messages in developer tools. The font is included in your css file, so it's probably an easy fix! - FIXED
3. `home.css:61-71 & 78-94` - You could have set an id or another class to elements that share the same styling, in order to avoid a long list of elements to be styled simultaneously. This would improve the readability of your css file.
4. `data.php:18` - The playersInfo array did not have to be multidimensional; instead, you could have made the name the value of the key 'name' in each item of the array. This would make it easier to access your data (one level less to navigate to).
5. `about.css:12` - The pictures stretch out when viewing on a large desktop; this could be solved by adding another media query or fixing the image (max-)width in pixels or rems. The about.css file is a little difficult to read due to the long definitions of elements (for example on line 35).
6. Your project is structured in a clear way with code that is easy to read - well done! 🙂

# Testers

Tested by the following people:

1. Alice Nyberg
2. Agnes Skönvall

