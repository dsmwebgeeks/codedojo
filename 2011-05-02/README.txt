You can choose to use either base or cheater-mq as the foundation for your
project.

Base is the way we left our project after last meeting (with a little 
cleanup and consolidating).

Cheater-mq is a modification of base to already have a mobile version of the
homepage completed using "media queries" to create a mobile presentation
from the same HTML that is used for the desktop version of the site.

In this example, the method chosen is to make the mobile version of the site
the default and if the user has a desktop browser capable of processing
media queries then the mobile styles are overridden to make the site
compatible for the larger screen.

It is tested on iOS 4, Opera Mobile and Android 2.1+ simulators and an
Android 2.1 320x480 phone as well as the Chrome desktop browser.

