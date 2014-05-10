// Store our functions and properties inside an organized object
var SOCIAL_WALL = {

    init: function() {
        console.log('We have initialized the wall.');

        this.feedContainers = $('.feeds');

        this.getFoursquare();
        this.getInstagram();
        this.getTweets();
    },

    addToWall: function(type, item) {
        var html,
            targetFeed = this.feedContainers.find('[data-feed=' + type + ']');

        html = '<div class="item item-' + type + '">' + item + '</div>';

        targetFeed.append(html);
    },

    doRequest: function(url, callback) {
        $.getJSON(url, function(response) {
            callback(response);
        });
    },

    getFoursquare: function() {
        this.doRequest('/foursquare', function(venue) {
            var foursquareText = '<strong>' + venue.hereNow.count + '</strong> here now.';
            this.addToWall('foursquare', foursquareText);
        }.bind(this));
    },

    getInstagram: function() {
        this.doRequest('/instagram', function(media) {
            // console.log(media);
            $.each(media, function(i, item) {
                var instagramPhoto = '<figure><img src="' + item.images.standard_resolution.url + '" alt="' + item.caption.text + '"><figcaption>' + item.caption.text + '</figcaption></figure>';

                this.addToWall('instagram', instagramPhoto);
            }.bind(this));
        }.bind(this));
    },

    getTweets: function() {
        this.doRequest('/tweets', function(tweets) {
            $.each(tweets, function(i, tweet) {
                // console.log(tweet);
                var tweetText = '@' + tweet.user.screen_name + ': ' + tweet.text;
                this.addToWall('twitter', tweetText);
            }.bind(this))
        }.bind(this));
    }
};

// Initialize our wall when the document has loaded.
$(document).ready(function() {
    SOCIAL_WALL.init();
});