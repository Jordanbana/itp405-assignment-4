# itp405-assignment-4


Twitter Clone with Laravel
In this assignment, you will create a minimalistic Twitter clone.

The Index Route
For the index route (/), display a form with a textarea at the top of the page. This textarea will allow a user to create a new tweet. When the form is submitted, store the tweet in the tweets table in the twitter-clone database. Redirect back to the index route with a flash message saying "Tweet successfully created!".

Next, add server side validation using Laravel's Validator class to ensure the tweet is required and it is no longer than 140 characters. If the user tries to create a tweet and it fails server side validation, show the validation error messages above the form.

Beneath the tweet form, display a list of tweets ordered by ID in descending order. This way the most recent tweets will be at the top of the list.

Next to each tweet, put an X icon. This will allow the user to delete a tweet. (Because everyone is sharing the same database and there is no authentication, you will be able to delete each other's tweets and see each other's tweets in the tweet feed). When a tweet has been deleted, show a flash message saying "Tweet successfully deleted!".

The /tweets/{id} Route
This route is responsible for showing a single tweet. In the tweet feed on the index route, create a link within each tweet that says "View" that links you to this individual tweet.

Styling
Please style this a little bit so it looks presentable. You are welcome to use Bootstrap.

Submission
To submit, push this code up to a repository named itp405-assignment-4 and email the repository URL to the TA and myself.
