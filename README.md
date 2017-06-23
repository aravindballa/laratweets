# Lara Tweets

This is a twitter clone being built using Laravel, Redis(pubsub) and JS. It has a socket connection for the live updates too.

## To be built
- Socket connection with subscribe for live updates.

## How to run

Docker should be pre installed on your machine. I am using it for spinning up nginx server, mysql and redis.

- Go to laradock folder, run `docker-compose nginx mysql redis`
- Open `localhost` from your browser
- `exec` into workspace container to run artisan commands.