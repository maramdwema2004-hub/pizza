# Technical Notes

## Challenge
The main challenge in this project was configuring Docker to run a Laravel application using Nginx and PHP-FPM, especially understanding how containers communicate with each other.

## Solution
This was solved by using Docker Compose to define multiple services and by correctly configuring the Nginx default.conf file to forward PHP requests to the PHP-FPM container.

## What I Learned
I learned how Docker Compose helps manage multiple containers, how Nginx works with PHP-FPM, and how to run a Laravel project inside Docker containers.