# apl-cms

Find out how to use the source code, configuration, example content and other processes from the APL CMS as a learning platform:

email me: bryce.benton@austintexas.gov , or find me on Mastodon: @bryceb @c.im

## Getting Started ##

The APL-CMS repository consists of a set of "recipes" that assembles and launches a functioning CMS web development environment configured and pre-populated with content similar to the Austin Public Library's website https://library.austintexas.gov

The recipes require a modern computer capable of running DDEV, a container based local development environment
* More about DDEV https://ddev.com/

To try a recipe, install DDEV if you haven't already, and clone the repository into your home directory so that it is at ~/apl-cms
* The recipes expect the repository to be at that location--alternatively, you could alter the recipe to look in a different location where you have cloned the apl-cms repo.

The recipes are scripts that are run from the command line interface, and the first parameter is whichever project name you choose, for example:

bash new-project-community_resource_hub.txt mydevsite1

In the above example, "bash" is the command that runs the script on the command line interface. 
The script's filename is "new-project-community_resource_hub.txt", and the new project development site is called "mydevsite1". 
* Typically, bash scripts have an ".sh" file extension, but we're using ".txt" since it doesn't really matter, and ".txt" might be more familiar to newcomers.

The script, or recipe as we've been calling it, will create a new directory at ~/mydevsite1, and then assemble the database, code and files for a basic Drupal content management system, and launch it with some content ready to go.

Good luck! Your feedback is welcome and appreciated. The idea is to help yourself and also the next person to arrive, to make things better for everyone, gradually :^) 
