# Pub/Sub Multiclient Sub
![coverage](https://img.shields.io/badge/Developed%20by-Oscar-orange)

Required repositories:
* https://github.com/OscarMalda/poc-pubsub-multiclient-pub
* (this) https://github.com/OscarMalda/poc-pubsub-multiclient-sub

Pub/Sub client written in PHP to connect to a GCP Pub/Sub Pull subscription.

## Getting Started 📖
Requirements:
* Web server LAMP.
* Service account with access to Pub/Sub in the GCP project.

## Deployment 🚀
This POC is designed to run locally.

Required packages manager via Composer
```
composer install
```

## Usage ✏️
Requesting page index causes a loop of Pulls to the Pub/Sub service.

## Authors 🐒
* @OscarMalda - https://www.oscarmalda.com