
# Uploader

A web app where users can add upload an image upon registering.

## Features

- Login/register user functionality
- User can upload image as avatar upon registering
- Filepond integration for drag/drop uploading of image


## Tech Stack

**Front-end framework:** TailwindCSS

**Back-end framework:** Laravel

## Installation

First, install backend dependencies

```bash
  composer install
```
Generate an .env file and edit it with your own database details

```bash
  cp .env.example .env
```
Then generate keys

```bash
  php artisan key:generate
```
Install frontend dependencies 

```bash
  npm install && npm run dev
```

Run migration code to setup database schema

```bash
  php artisan migrate
```