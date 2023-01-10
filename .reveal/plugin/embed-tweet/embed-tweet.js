const RevealEmbedTweet = window.RevealEmbedTweet || (function () {
    this.id = 'embed-twitter';

    this.init = function (reveal) {
        deck = reveal;
        processTweets(deck.getRevealElement());
    };

    let deck;

    function loadTwitterApi() {

        let twitterApi = window.twttr || null;

        return new Promise(function (resolve) {
            if (twitterApi) {
                resolve(twitterApi);
            } else {
                let firstScript = document.getElementsByTagName('script')[0];
                let twitterScript = document.createElement('script');
                twitterScript.src = 'https://platform.twitter.com/widgets.js';
                twitterScript.onload = function () {
                    twitterApi = window.twttr;
                    resolve(twitterApi);
                };
                firstScript.parentNode.insertBefore(twitterScript, firstScript);
            }
        });

    }

    function initTweets(scope) {

        const tweets = scope.querySelectorAll('.tweet');

        if (tweets.length === 0) {
            return;
        }

        loadTwitterApi().then(function (twitterApi) {
            for (let i = 0; i < tweets.length; ++i) {
                tweets[i].innerHTML = '<blockquote class="twitter-tweet" data-lang="en"><a href="' + tweets[i].getAttribute('data-src') + '">Tweet</a></blockquote>';
            }
            twitterApi.ready(
                function () {
                    twitterApi.widgets.load(scope);
                    twitterApi.events.bind(
                        'rendered',
                        function () {
                            layoutAndScaleTweets(tweets);
                            deck.layout();
                        }
                    );
                }
            );
        });

    }

    function layoutAndScaleTweets(tweets) {

        let size, scale, offsetTop;

        for (let i = 0; i < tweets.length; ++i) {
            size = tweets[i].getAttribute('data-size') || 1.0;
            scale = (1 / size) * 0.9;
            offsetTop = - 4.5 * Math.pow(size, 4);
            tweets[i].style.cssText = 'padding: 0 0 0 25%; margin-top: ' + offsetTop + '%; transform: scale(' + scale + ');';
        }

    }

    function processTweets(scope) {

        Reveal.addEventListener('ready', function () {
            if (deck.getPlugin('markdown')) {
                deck.getPlugin('markdown').init(deck).then(
                    function () {
                        initTweets(scope);
                    }
                );
            } else {
                initTweets(scope);
            }
        });

    }

    return this;
});



