# Phalcon Docker Nginx starter app
Docker image based on:
- Ubuntu 16.04 
- Phalcon 3
- PHP 7 
- Nginx + PHP FPM
- Supervisord
## Dependencies
Docker. For installation instructions check https://docs.docker.com/engine/installation/

## How to use the helper script
### Basic usage and demonstration
```bash
bash shell.bash local deploy
```
This will build the base image and run the container interactively.
Check http://localhost:8888

### Enter the container console
```bash
bash shell.bash local shell
```

### If you want do daemonize
```bash
bash shell.bash local deploy daemon
```
This will build the base image and run the container interactively.
Check http://localhost:8888