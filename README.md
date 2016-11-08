# Phalcon Docker Nginx starter app
Docker image based on:
- Ubuntu 16.04 
- Phalcon 3
- PHP 7 
- Nginx + PHP FPM
- Supervisord

## Dependencies
Docker. For installation instructions check https://docs.docker.com/engine/installation/

## Configuration
- To change the mapped port look in shell.bash run function.
- Default mapped port is 8888. 
- Check /build directory for PHP and Nginx tweaking.

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
This will build the base image and run the container daemonized.
Check http://localhost:8888

### Stop the container
```bash
bash shell.bash local stop
```

###Start the container
```bash
bash shell.bash local start
```

## Plus: Remote deploy script
You can edit user@host configuration in shell.bash script and use the same syntax to do quick remote deploys. Make sure you SSH is in remote host authorized_keys file.

### Remote deploy example
```bash
bash shell.bash remote deploy daemon

### View remote logs
```bash
bash shell.bash remote logs
```
