## P3 Peer Review

+ Reviewer's name: Christian Powell
+ Reviwee's name: Mallory Rice
+ URL to Reviewe's P3 Github Repo URL: *https://github.com/cpowell1/project3*

## 1. Interface
Address as many of the following points as applicable:


+ I really like the idea of the reservation system for a movie ticket. The only thing I would recommend is centering the application so it stands out more. It made sense in how the form was supposed to work from my initial impression.
+ I would think putting a title of "Tickets" above the quantiy selection would be delineate and keep things consistent with the rest of the form layout. When I submitted the form to see the error messages, I thought it was a little confusiing with the error message displaying above then fields instead of right below. There was not an error message for the concessions section when I did not select a radio button. 
+ I think when the form is submitted correctly, the confirmation with the summary of information is presented well. 
+ Maybe if they choose another reservation, then the rest of the form could appear. This would make the confirmation stand out without any more unneeded information if they don't need to make another reservation.


## 2. Functional testing

When I submitted the information correctly, the submission form appeared and showed me what I had reserved. However, when I tried to test the errors, the data was not prefilled for me to see what fields I did get correct. It returned a blank form with an error message. It would be helpful if the error message appeared at the bottom to correct what was above the message. It would also be less overwhelming if it returned the forms with the prefilled data so that I only had to worry about fixing the blanks.



## 3. Code: Routes
You did great by keeping the controllers handling the code. Your routes make sense with the formInfo controller doing the processing and redirecting to the homepage. I think the lines 3-12 aren't necessary to keep in the route file. Otherwise, good use of your routes!

## 4. Code: Views
The views were setup correctly by using the master view and extending to the index view. The Blade syntax was used correctly for the "if" statements and variables in the view. 

## 5. Code: General
Address as many of the following points as applicable:

+ I noticed that you used a lot of coding to display a specific results if the user had selected an option. Instead of the many "if" statments, it may have been easier to combine those into one "if/else" statement. The statment could reference what the value of the $request variable was possibly?
+ Your ProjectLanding controller is set up well. According to the best practices, it maybe better to name the controllers LandingController next time. 
+ Otherwise, you have a great application.

## 6. Misc
n/a