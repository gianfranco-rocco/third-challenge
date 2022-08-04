# Onboarding - Third Challenge

- [Introduction](#introduction)
- [Built With](#built-with)
- [Getting Started](#getting-started)
  - [Installation/Setup](#installationsetup)
  - [Running](#running)
- [Setting up 3rd-party Services](#setting-up-3rd-party-services)
## Introduction

The challenge the project was built on consists of a command line application that requests a movie name as a parameter to then be able to get information about it.

## Built With

- PHP 8.1

## Getting Started

Provide instructions on how to setup project locally. Example Installation/Setup and Running.

### Installation/Setup

Follow these steps to setup the development environment...

- Run `composer install`
- cd into `src`
- Run `cp AppSettings.php.example AppSettings.php`
- Set AppSettings.php's `OMDB_API_KEY` const with you OMDb API Key

### Running

- Initialize Docker
- cd into the project's root directory
- Run `docker compose up -d`
- Run `docker exec -ti php-app sh`
- Run `./application.php [movieName]`. In case of wanting to get the full plot add the `--fullPlot` flag

Disclaimer: In case of `permission denied` error when executing the `application.php` file run `chmod +x ./application.php` to make it executable.

## Setting up 3rd-party Services

- [OMDb API](http://www.omdbapi.com/): API service used for getting the movie information. Fill in [this](http://www.omdbapi.com/apikey.aspx?__EVENTTARGET=freeAcct&__EVENTARGUMENT=&__LASTFOCUS=&__VIEWSTATE=%2FwEPDwUKLTIwNDY4MTIzNQ9kFgYCAQ9kFggCAQ8QDxYCHgdDaGVja2VkZ2RkZGQCAw8QDxYCHwBoZGRkZAIFDxYCHgdWaXNpYmxlZ2QCBw8WAh8BaGQCAg8WAh8BaGQCAw8WAh8BaGQYAQUeX19Db250cm9sc1JlcXVpcmVQb3N0QmFja0tleV9fFgMFC3BhdHJlb25BY2N0BQhmcmVlQWNjdAUIZnJlZUFjY3TuO0RQYnwPluQ%2Bi0YJHNTcgo%2BfiAFuPZl7i5U8dCGtzA%3D%3D&__VIEWSTATEGENERATOR=5E550F58&__EVENTVALIDATION=%2FwEdAAV39P5KqwNGJgd%2F4UbyWCx3mSzhXfnlWWVdWIamVouVTzfZJuQDpLVS6HZFWq5fYpioiDjxFjSdCQfbG0SWduXFd8BcWGH1ot0k0SO7CfuulNNHYC5f864PBfygTYVt5wnDXNKUzugcOMyH4eryeeGG&at=freeAcct&Email=) form and then follow the [Installation/Setup](#setup) steps.
- [Docker](https://docs.docker.com/get-docker/): Download Docker Desktop and then follow the [Running](#running) steps.