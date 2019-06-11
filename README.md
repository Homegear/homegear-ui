# Shif - Smarthome Interface

## Requirements
### Server
    php 7+

### Client
    ECMAScript 6+ 2015+
    WebSocket
    ViewPort

## Build environment setup:
    apt install php-cli npm
    npm -g install babel-cli

## Build
    npm install
    php admin/admin.php genenerateExtensions
    babel script.js --out-file script.min.js

## Configure
### Settings
    to define individual settings create: /interfacedata.custom.php
