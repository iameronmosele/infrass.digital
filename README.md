

## Infraas Backend Application

### Setup
- This project uses laravel sail but if you have valet it would work
- Run composer update  to setup all the dependencies.
- Run `php artisan migrate` to setup the migrations 
- Run `php artisan db:seed` to prepopulate database with data.



## Tasks

1 Write a **command** that would loop through the database and bill all 10,000 users in 1 hour assuming it takes 1s for the **billUser** function to run and .5s for the email to be sent. 
    
- - Run `php artisan charge-account:process` this process for running the charges uses the system of cursor to manage memory and time frame to deploy the data.  Email are queued to also remove delays.

2. Suggest an approach to scale to 100,000 users in 4.5 hours. 
   - We would have two services one that collects the emails and dispatches to the email service via queue in the background.
    - we would break down the transfers in to chunks also and handle 1000 
    

3. Upload your code to  a private GitHub repository and add **the-fanan** as a collaborator


