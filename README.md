# API for Team Generator App

This API was created for the individual technical challenge of the DevelopMe fellowship. The API provides requests for a React Redux front-end, which can be found [here](https://stormy-crag-38510.herokuapp.com/). The GitHub repository for the front-end project is found [here](https://github.com/aejgardner/backend-api-five-aside). Full details of the project brief and implemented features can also be found in the readme file of the front-end repository.

The API was created using Laravel, with a Homestead database used in development. It is hosted on Heroku at the following address: https://afternoon-gorge-82119.herokuapp.com.

# API Setup

The API is based on two database tables. One table contains the data for players used to create, update, delete and generate teams with them. The other table contains the match id, team names and scores for football games. There are no relationships between the tables. Details of the API requests are below.

## General

All requests should:

* Use the basename ```https://afternoon-gorge-82119.herokuapp.com/api```
* Be sent using JSON and with the Accept: application/json header
* No authentication currently required

## Requests 

### POST /players

Will create a new player.

Request

* player_name, string (max 30)
* player_rating, integer 

### GET /players

Will return a list of players.

### DELETE /players

Will delete all players.

### PATCH players/{player}

Will update the player with the specified id.

### DELETE players/{player}

Will delete the player with the specified id.

### GET players/teams

Will return a list of players with a team number specified for each one (either 1 or 2).

### POST /previous-matches

Will create a new match.

Request

* team_one_name, string (max 50)
* team_one_score, integer 
* team_two_name, string (max 50)
* team_two_score, integer

### GET /previous-matches

Will return a list of all matches.

### DELETE /previous-matches

Will delete all matches.

## Installation

This API was created using Laravel. The virtual machine is configured from ScotchBox and the Vagrant Box uses Laravel's Homestead. Follow these steps to install the project:

* Cd into the directory where you would like the project to be saved
* Clone the GitHub repository
* cd into the folder created
* Run vendor/bin/homestead make
* Copy the .env.example file to a new .env file by running cp .env.example .env
* Change db name and password in the .env file
* Run vagrant up
* Run vagrant ssh
* cd code
* Generate artisan key: art key:generate
* Run database migration art migrate
* Any changes should be made in a feature branch, and then a pull request made to merge into master. This will require collaborator credentials for this repository.

To make changes to the production version, the user must have a Heroku account and be listed as a collaborator on Heroku. Changes are made to the project on the Heroku server by pushing the git repository to the Heroku server.

<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**

### Community Sponsors

<a href="https://op.gg"><img src="http://opgg-static.akamaized.net/icon/t.rectangle.png" width="150"></a>

- [UserInsights](https://userinsights.com)
- [Fragrantica](https://www.fragrantica.com)
- [SOFTonSOFA](https://softonsofa.com/)
- [User10](https://user10.com)
- [Soumettre.fr](https://soumettre.fr/)
- [CodeBrisk](https://codebrisk.com)
- [1Forge](https://1forge.com)
- [TECPRESSO](https://tecpresso.co.jp/)
- [Runtime Converter](http://runtimeconverter.com/)
- [WebL'Agence](https://weblagence.com/)
- [Invoice Ninja](https://www.invoiceninja.com)
- [iMi digital](https://www.imi-digital.de/)
- [Earthlink](https://www.earthlink.ro/)
- [Steadfast Collective](https://steadfastcollective.com/)
- [We Are The Robots Inc.](https://watr.mx/)
- [Understand.io](https://www.understand.io/)
- [Abdel Elrafa](https://abdelelrafa.com)
- [Hyper Host](https://hyper.host)
- [Appoly](https://www.appoly.co.uk)
- [云软科技](http://www.yunruan.ltd/)

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
