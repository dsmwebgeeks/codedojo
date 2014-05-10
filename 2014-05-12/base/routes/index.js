var env = require('../env.json');
var twitter = require('twit');
var ig = require('instagram-node').instagram();

// Initialize our Twitter module
var twit = new twitter({
    consumer_key: env.twitter_consumer_key,
    consumer_secret: env.twitter_consumer_secret,
    access_token: env.twitter_access_token,
    access_token_secret: env.twitter_access_token_secret
});

// Initialize our Instagram module
ig.use({
    client_id: env.instagram_client_id,
    client_secret: env.instagram_client_secret
})

// Initialize our Foursquare  module
var foursquareConfig = {
  'secrets' : {
    'clientId' : env.foursquare_clientId,
    'clientSecret' : env.foursquare_clientSecret,
    'redirectUrl' : 'http://localhost:3000/callback'
  }
};

var foursquare = require('node-foursquare')(foursquareConfig);

exports.index = function(req, res){
  res.render('index', { title: 'Social Wall' });
};

exports.tweets = function(req, res) {
    // twit.get('statuses/user_timeline', { screen_name: 'SCREEN_NAME_HERE', count: 10 }, function(err, data, response) {
    //     res.json(data);
    // });
};

exports.instagram = function(req, res) {
    // ig.user_media_recent('USER_ID_HERE', function(err, medias, pagination, limit) {
    //     res.json(medias);
    // });
};

exports.foursquare = function(req, res) {
    // foursquare.Venues.getHereNow('VENUE_ID_HERE', null, null, function(error, data) {
    //     res.json(data);
    // });
};
