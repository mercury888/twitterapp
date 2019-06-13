# twitterapp-

Laravel Twitter API Documentation

Functionality Description:
Develop an API endpoint that returns data used to graph the number of tweets per hour for a
given user over a 48 hour period.

API Endpoint
 GET api/tweets/{screen_name}
 
 
Returns hourly tweets count for the tweets posted by the user indicated by the screen_name
for past 48 hours from now.

Path Parameters
screen_name: required

Resource URL (Test Server)
http://twitterapp.tp-team.com/api/tweets/{screen_name}


Example
Using svhsydney as a screen_name to test the API
http://twitterapp.tp-team.com/api/tweets/svhsydney



Response

Correct screen_name

Status: 200 OK
{  
   "from":"Mon, 10 Jun 2019 09:00:00 +0000",
   "to":"Wed, 12 Jun 2019 09:59:59 +0000",
   "by_hour":[  
      
     {  
         "time":"12\/06\/2019 09:00 AM - 12\/06\/2019 10:00 AM",
         "count":0
      },

      {  
         "time":"12\/06\/2019 08:00 AM - 12\/06\/2019 09:00 AM",
         "count":0
      },

      {  
         "time":"12\/06\/2019 07:00 AM - 12\/06\/2019 08:00 AM",
         "count":0
      },

      {  
         "time":"12\/06\/2019 06:00 AM - 12\/06\/2019 07:00 AM",
         "count":0
      },

      {  
         "time":"12\/06\/2019 05:00 AM - 12\/06\/2019 06:00 AM",
         "count":0
      },

      {  
         "time":"12\/06\/2019 04:00 AM - 12\/06\/2019 05:00 AM",
         "count":0
      },

      {  
         "time":"12\/06\/2019 03:00 AM - 12\/06\/2019 04:00 AM",
         "count":0
      },

      {  
         "time":"12\/06\/2019 02:00 AM - 12\/06\/2019 03:00 AM",
         "count":0
      },

      {  
         "time":"12\/06\/2019 01:00 AM - 12\/06\/2019 02:00 AM",
         "count":0
      },

      {  
         "time":"12\/06\/2019 12:00 AM - 12\/06\/2019 01:00 AM",
         "count":0
      },

      {  
         "time":"11\/06\/2019 11:00 PM - 12\/06\/2019 12:00 AM",
         "count":0
      },

      {  
         "time":"11\/06\/2019 10:00 PM - 11\/06\/2019 11:00 PM",
         "count":0
      },

      {  
         "time":"11\/06\/2019 09:00 PM - 11\/06\/2019 10:00 PM",
         "count":0
      },

      {  
         "time":"11\/06\/2019 08:00 PM - 11\/06\/2019 09:00 PM",
         "count":0
      },

      {  
         "time":"11\/06\/2019 07:00 PM - 11\/06\/2019 08:00 PM",
         "count":0
      },

      {  
         "time":"11\/06\/2019 06:00 PM - 11\/06\/2019 07:00 PM",
         "count":0
      },

      {  
         "time":"11\/06\/2019 05:00 PM - 11\/06\/2019 06:00 PM",
         "count":0
      },

      {  
         "time":"11\/06\/2019 04:00 PM - 11\/06\/2019 05:00 PM",
         "count":0
      },

      {  
         "time":"11\/06\/2019 03:00 PM - 11\/06\/2019 04:00 PM",
         "count":0
      },

      {  
         "time":"11\/06\/2019 02:00 PM - 11\/06\/2019 03:00 PM",
         "count":0
      },

      {  
         "time":"11\/06\/2019 01:00 PM - 11\/06\/2019 02:00 PM",
         "count":0
      },

      {  
         "time":"11\/06\/2019 12:00 PM - 11\/06\/2019 01:00 PM",
         "count":0
      },

      {  
         "time":"11\/06\/2019 11:00 AM - 11\/06\/2019 12:00 PM",
         "count":0
      },

      {  
         "time":"11\/06\/2019 10:00 AM - 11\/06\/2019 11:00 AM",
         "count":0
      },

      {  
         "time":"11\/06\/2019 09:00 AM - 11\/06\/2019 10:00 AM",
         "count":1
      },

      {  
         "time":"11\/06\/2019 08:00 AM - 11\/06\/2019 09:00 AM",
         "count":0
      },

      {  
         "time":"11\/06\/2019 07:00 AM - 11\/06\/2019 08:00 AM",
         "count":0
      },

      {  
         "time":"11\/06\/2019 06:00 AM - 11\/06\/2019 07:00 AM",
         "count":0
      },

      {  
         "time":"11\/06\/2019 05:00 AM - 11\/06\/2019 06:00 AM",
         "count":1
      },

      {  
         "time":"11\/06\/2019 04:00 AM - 11\/06\/2019 05:00 AM",
         "count":0
      },

      {  
         "time":"11\/06\/2019 03:00 AM - 11\/06\/2019 04:00 AM",
         "count":0
      },

      {  
         "time":"11\/06\/2019 02:00 AM - 11\/06\/2019 03:00 AM",
         "count":0
      },

      {  
         "time":"11\/06\/2019 01:00 AM - 11\/06\/2019 02:00 AM",
         "count":0
      },

      {  
         "time":"11\/06\/2019 12:00 AM - 11\/06\/2019 01:00 AM",
         "count":0
      },

      {  
         "time":"10\/06\/2019 11:00 PM - 11\/06\/2019 12:00 AM",
         "count":0
      },

      {  
         "time":"10\/06\/2019 10:00 PM - 10\/06\/2019 11:00 PM",
         "count":0
      },

      {  
         "time":"10\/06\/2019 09:00 PM - 10\/06\/2019 10:00 PM",
         "count":0
      },

      {  
         "time":"10\/06\/2019 08:00 PM - 10\/06\/2019 09:00 PM",
         "count":0
      },

      {  
         "time":"10\/06\/2019 07:00 PM - 10\/06\/2019 08:00 PM",
         "count":0
      },

      {  
         "time":"10\/06\/2019 06:00 PM - 10\/06\/2019 07:00 PM",
         "count":0
      },

      {  
         "time":"10\/06\/2019 05:00 PM - 10\/06\/2019 06:00 PM",
         "count":0
      },

      {  
         "time":"10\/06\/2019 04:00 PM - 10\/06\/2019 05:00 PM",
         "count":0
      },

      {  
         "time":"10\/06\/2019 03:00 PM - 10\/06\/2019 04:00 PM",
         "count":0
      },

      {  
         "time":"10\/06\/2019 02:00 PM - 10\/06\/2019 03:00 PM",
         "count":0
      },

      {  
         "time":"10\/06\/2019 01:00 PM - 10\/06\/2019 02:00 PM",
         "count":0
      },

      {  
         "time":"10\/06\/2019 12:00 PM - 10\/06\/2019 01:00 PM",
         "count":0
      },

      {  
         "time":"10\/06\/2019 11:00 AM - 10\/06\/2019 12:00 PM",
         "count":0
      },

      {  
         "time":"10\/06\/2019 10:00 AM - 10\/06\/2019 11:00 AM",
         "count":0
      },

      {  
         "time":"10\/06\/2019 09:00 AM - 10\/06\/2019 10:00 AM",
         "count":0
      }
   ]
}  
  
Where,  
  
from = time prior to 48 hours from now (starting of tweets count) 
to = current time (ending of tweets count)  
by_hour = list of time and count from now to past 48 hours  
time = time of tweets count (1 hour time span) 	  
count = total count of tweets during that hour specified in time  
  


  
Incorrect screen_name  
Status: 500 Internal Server Error  
  
RuntimeException (404) [50] User not found.  
  
  
  
  	  
 
 
Install on Server  
  
Follow these steps to install this laravel application on the server.  
  
Step 1: Grab a copy of files to be uploaded on the server (.zip or .tgz or .tar)  

Step 2: Upload and extract the files under the root directory of the hosting environment  

Step 3: Get the Twitter APP from here: https://developer.twitter.com/en/apps  

Step 4: Update below parameters according to the new Twitter APP in .env file of Laravel  

TWITTER_CONSUMER_KEY=  

TWITTER_CONSUMER_SECRET=  

TWITTER_ACCESS_TOKEN=  

TWITTER_ACCESS_TOKEN_SECRET=  

   
