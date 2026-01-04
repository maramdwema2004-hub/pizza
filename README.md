# Pizza Project (Laravel) - Dockerized

## Description
A simple Laravel web application (Pizza menu) prepared for Docker deployment as part of OS Lab Assignment #2 (Docker & GitHub).

## Project Structure
- **backend/** : Laravel source code
- **docs/** : Technical notes
- **screenshots/** : Proof of running containers and app UI
- **Dockerfile** : PHP-FPM image for Laravel
- **docker-compose.yml** : Nginx + PHP services

## Requirements
- Docker Desktop
- Docker Compose

## How to Run (Docker)
1) Build and run containers:
```bash
docker compose up -d --build

### 2. Open the application in the browser

http://127.0.0.1:8000

## How to Stop the Project

docker compose down
