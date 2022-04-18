from tweepy import Stream
from tweepy import OAuthHandler
from tweepy.streaming import StreamListener
import mysql.connector
import time
import json

#        replace mysql.server with "localhost" if you are running via your own server!
#                        server       MySQL username	MySQL pass  Database name.
conn = mysql.connector.connect(user="root", password="", host="localhost", database="beproject")

c = conn.cursor()

#consumer key, consumer secret, access token, access secret.
ckey="Z2HiEk0yVWkTq3xVnugRSoo6I"
csecret="2dYrnVZ8Se84aPKoN87nFTorOU4YSqATPfJmmmmnYsHL2tQj2S"
atoken="776790428276236288-G1N6BP6qbOc3C9QINzW4axa3bOFCRib"
asecret="FB59oepaFK2hvB9erQsNNcXjAr1H08o7BIAFEFWL5foyi"

class listener(StreamListener):
    def on_data(self, data):
        all_data = json.loads(data)

        tweet = all_data["text"]

        username = all_data["user"]["screen_name"]

        c.execute("INSERT INTO twitterfeed (time, username, tweet) VALUES (%s,%s,%s)",
                  (time.time(), username, tweet))

        conn.commit()
        tweet = data.split(',"text":"')[1].split('","source')[0]

        #saveMe = tweet+'::'+sentimentRating+'\n'
        #output = open('output.csv','a')
        #output.write(saveMe)
        #output.close()

        print((username, tweet))

        return True

    def on_error(self, status):
        print (status)


auth = OAuthHandler(ckey, csecret)
auth.set_access_token(atoken, asecret)

twitterStream = Stream(auth, listener())
twitterStream.filter(track=["attitude"])
