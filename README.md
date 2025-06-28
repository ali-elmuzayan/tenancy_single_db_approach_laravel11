markdown
# Laravel 11 Multi-Tenancy (Single Database)

[![Latest Version](https://img.shields.io/github/v/release/your-username/laravel11-multi-tenancy-single-db?style=flat-square)](https://github.com/your-username/laravel11-multi-tenancy-single-db/releases)
[![License](https://img.shields.io/github/license/your-username/laravel11-multi-tenancy-single-db?style=flat-square)](LICENSE.md)
[![Laravel Version](https://img.shields.io/badge/Laravel-11.x-orange?style=flat-square)](https://laravel.com)

A robust multi-tenancy solution for Laravel 11 applications using a single database with data isolation through tenant identifiers.

## Features

✅ **Single Database Architecture** - All tenants share one database with automatic data scoping  
🔑 **Tenant Identification** - Supports subdomain, route parameter, or header-based identification  
🛡️ **Data Isolation** - Automatic query scoping to ensure tenant data separation  
⚡ **Performance Optimized** - Minimal overhead compared to multi-database approaches  
🔧 **Tenant-Specific Configs** - Customize settings per tenant (e.g., themes, payment gateways)  
📦 **Out-of-the-Box Setup** - Includes migrations, models, middleware, and service classes  

## Installation

1. Clone the repository:
   ```bash
   git clone https://github.com/your-username/laravel11-multi-tenancy-single-db.git
   cd laravel11-multi-tenancy-single-db
