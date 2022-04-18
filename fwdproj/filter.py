from tweepy import Stream
from tweepy import OAuthHandler
from tweepy.streaming import StreamListener


#consumer key, consumer secret, access token, access secret.
ckey="Z2HiEk0yVWkTq3xVnugRSoo6I"
csecret="2dYrnVZ8Se84aPKoN87nFTorOU4YSqATPfJmmmmnYsHL2tQj2S"
atoken="776790428276236288-G1N6BP6qbOc3C9QINzW4axa3bOFCRib"
asecret="FB59oepaFK2hvB9erQsNNcXjAr1H08o7BIAFEFWL5foyi"

class listener(StreamListener):

    def on_data(self, data):
        print(data)
        return(True)

    def on_error(self, status):
        print (status)

auth = OAuthHandler(ckey, csecret)
auth.set_access_token(atoken, asecret)

twitterStream = Stream(auth, listener())
twitterStream.filter(track=["trump"])