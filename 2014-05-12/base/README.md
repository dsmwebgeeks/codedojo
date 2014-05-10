# May 2014 Dojo: Building a Social Wall with APIs

The goal of this dojo is to become familiar with using APIs to extract information and iterate on a project using the Agile workflow. We'll be getting data from Twitter, Foursquare, and Instagram.

## Requirements

Be sure to have [NodeJS](http://nodejs.org/) installed on your machine.

If you want to work with [Sass](http://sass-lang.com/), be sure to have that and [Compass](http://compass-style.org/) installed, as well.

If you want to be able to watch for changes, have [Grunt](http://gruntjs.com/) installed.

## Setup

First, fork the Dojo repository and clone it to your local computer.

    $ git clone git@github.com:<YOUR USERNAME>/codedojo.git

On your local copy, go to the `2014-05-12` folder and copy `/base/` as your group's name.

    $ cp -rf ./base ./<YOUR GROUP NAME>

Now, you need to install dependencies:

    $ cd ./<YOUR GROUP NAME>
    $ npm install
    $ bower install

## API Keys

In order to access the three APIs, you'll need to register an application on each.

Since we don't want to share our tokens with each other, you need to create a file named `env.json`.

    $ touch env.json

### Twitter

Create an app and copy the keys.

* [Twitter Developer Center](https://apps.twitter.com/app/new)
* Create a new app called [YOUR GROUP] Social Wall
* Give it any ordinary website
* When the app is created, go to the API Keys tab.
* At the bottom of the window, click __Generate my Access Token__.

Now copy your API Key, API Secret, Access Token, and Access Token Secret into the `env.json` file like this:

    {
        "twitter_consumer_key": "REPLACE_THIS",
        "twitter_consumer_secret": "REPLACE_THIS",
        "twitter_access_token": "REPLACE_THIS",
        "twitter_access_token_secret": "REPLACE_THIS",
        ...
    }

### Foursquare

Create an app and copy the keys.

* [Foursquare Developer Center](https://developer.foursquare.com/)
* Create a new app called [YOUR GROUP] Social Wall

Now copy the Client ID and Client Secret at the end of the `env.json` file like this:

    {
        ...
        "foursquare_clientId" : "REPLACE_THIS",
        "foursquare_clientSecret" : "REPLACE_THIS",
    }

### Instagram

Create an app and copy the keys.

* [Instagram Developer Center](http://instagram.com/developer/)
* Click __Manage Clients__ and __Register a New Client__
* Create a new client called [YOUR GROUP] Social Wall
* Fill in any website/callback URLs as necessary

Now copy the Client ID and Client Secret at the end of the `env.json` file like this:

    {
        "instagram_client_id": "REPLACE_THIS",
        "instagram_client_secret": "REPLACE_THIS"
    }

## Get the Data

You now have your keys set. Data will be parsed through our Node application using three routes: `/tweets`, `/foursquare`, and `/instagram`.

To alter what each route does, edit the `routes/index.js` file.

Use each API's node module documentation to learn what you can do:

* [twit](http://github.com/ttezel/twit.git)
* [node-foursquare](https://github.com/clintandrewhall/node-foursquare)
* [instagram-node](https://github.com/teleportd/instagram-node)

## Show the Data

Each route above is hit with an AJAX call after the page has been loaded. The front-end script is `public/js/main.js`.

As you alter each route's particular query, you can play with and abstract the data inside the JS file.

## Style the Data

Work with the view file in `views/index.jade` (written in [Jade](http://jade-lang.com/)) and the CSS (either `public/css/style.css` or `public/style/scss`) to customize how your Social Wall looks.

## View your Wall

In a commmand line client, navigate to your group's folder and run:

    $ node app

Then, visit [http://localhost:3000](http://localhost:3000) in your browser to view the Social Wall.

## Sass/Watch for Changes

Optionally, you can have Sass/Compass compile your CSS and watch for changes to reload your browser window:

    $ grunt watch

