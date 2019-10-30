[![Codacy Badge](https://api.codacy.com/project/badge/Grade/29ec5f8d9c464a8a95dd73b281686d3a)](https://www.codacy.com/app/pushpak1300/Secupass?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=pushpak1300/Secupass&amp;utm_campaign=Badge_Grade)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/pushpak1300/Secupass/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/pushpak1300/Secupass/?branch=master)
[![Build Status](https://scrutinizer-ci.com/g/pushpak1300/Secupass/badges/build.png?b=master)](https://scrutinizer-ci.com/g/pushpak1300/Secupass/build-status/master)
[![Code Intelligence Status](https://scrutinizer-ci.com/g/pushpak1300/Secupass/badges/code-intelligence.svg?b=master)](https://scrutinizer-ci.com/code-intelligence)

# Dreamspace:Project-of-database-reports



Table of Contents
-----------------

- [Problem Statement](#features)
- [Getting Started](#getting-started)
- [License](#license)


Getting Started
---------------

#### Cloning The Repository:

```bash
# Get the project
git clone https://github.com/pushpak1300/Dreamspace-Project-of-database-reports.git

# Change directory
cd Dreamspace-Project-of-database-reports

# Copy .env.example to .env
cp .env.example .env

# Generate application secure key (in .env file)
php artisan key:generate

# Create a database (with mysql or postgresql)
# And update .env file with database credentials
# DB_CONNECTION=mysql
# DB_HOST=127.0.0.1
# DB_DATABASE=laravelhackathon
# DB_USERNAME=root
# DB_PASSWORD=root

# Install Composer dependencies
composer install

# Run your migrations
php artisan migrate

php artisan serve
```

Problem Statement
--------
A website where students from all departments can upload for their projects, a report, a presentation, a link to a video working model of the project and github repository, tags for keyword categorization of the technologies they have used whether research paper was published(Y/N). Landing page should show 4 major clickable domains (i.e. Web Development, Machine Learning, DSA, IoT). Website should have option to sort the projects based on academic year, department and score assigned to the project by the professors. Website should also have a feature to search for projects based on keywords (eg.’ Machine Learning’ should show up all projects done in the domain by various students). Clicking on a project title should show options 


## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
