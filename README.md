<p align="center"><a href="#" target="_blank"><img src="docs/img/PFP_logo.png" width="400" alt="PFP Logo"></a></p>

## About our project

This project is a recycling dashboard project that displays important information about recycling in your community. The dashboard provides real-time data on recycling rates, waste reduction goals, and other key metrics. This dashboard is designed to help increase awareness about recycling and promote sustainable practices in your community.

## The design

You can check our project design on (https://www.figma.com/file/XYFykAX5Vq0oKxMx5BovYD/Deep-Dive-PFP?node-id=0%3A1)

## Features

* Real-time data on recycling rates and waste reduction goals
* Customizable dashboard that allows users to choose the data they want to display
* Interactive graphs and charts that provide insight into recycling trends
* Integration with social media platforms to encourage community engagement


## Technologies Used

* Laravel - Full-stack (back-end with front-end framework)
* Figma - Design utility
* Tailwind - CSS framework

## Languages

* HTML
* CSS
* JavaScript
* PHP

## Installation

To run this project locally, follow these steps;

Laravel Installation:
1. Clone this repository
2. In Git Bash, type `Composer update` after you installed the Composer for Laravel
3. Afterwards type `php artisan migrate:fresh --seed` to migrate the database
4. Type `php artisan serve` to run the project on your local server
5. Open [http://localhost:8000](http://localhost:8000) in your web browser to view the dashboard

*Iternal server error?*

Fix it by using these commands:

1. `cp .env.example .env`
2. `php artisan key:generate`

node.js Installation:
2. Install the necessary dependencies by running `npm install`
3. Run the development server with `npm run dev`
4. Open [http://localhost:3000](http://localhost:3000) in your web browser to view the dashboard

## Contributing

We welcome contributions from the community! If you'd like to contribute to this project, please see our [contributing guidelines](https://john-doe.com/contributing).

## License

This project is licensed under the [MIT License](https://john-doe.com/license).

## Contact

If you have any questions about this project, please contact us at [recycling@community.org](mailto:john-doe@gmail.com).

Project team:

* Omer Ulan Uluu
* Ayub Abdulkader Aliyi
* Billal Hammi
* Nooman Amer

<!-- installation
Cd root directory 

 npm install 
 npx vite build
 npm run dev
 

 -->