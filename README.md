# Sky Betting & Gaming Technical Test

## Introduction

Welcome to my web application to submit results from the provided html form into a JSON text file. 


## Choice of Technologies

Originally I was going to develop the application in C# following a .Net framework as this is a technology I am far more familiar with. However with the experience I have in PHP and the I was able to develop the application and follow a similar architectural layout as what I have knowledge in, in .net. I chose PHP as I feel it is more likely to be suitable for Skybet and I chose not to use a PHP framework to best demonstrate my skills and understanding of MVC. However this did lead to further challenges down the line. I have also utilised a Bootstrap framework to help with styling.


## Installation

All code required is in the folder. I do request that the document root of the project is in the public folder of the project. This was done for security to protect all code in the root folder. To start the app, navigate to the public folder within the project on CLI and $ php -S localhost:8080 to start with php's built in web server   . Head to http://localhost:8080 on browser.

## Security

To protect the application code the document root has been set to the public folder. HTML tags have been stripped from all data that is posted to the text file, so users cannot manipulate the front end.

## Testing
Unfortunately i did not get the opportunity to set up any Unit testing on the application. If i did i would look at using phpUnit. I believe following a framework would have made this easier to acheive. 