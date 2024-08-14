# php_micro_framework 🐘

In this project, I aim to use clean code principles to build a micro-framework.

## Table of Contents

1. [Introduction](#introduction)
2. [Setup](#setup)
3. [Usage](#usage)
4. [Commands](#commands)
5. [License](#license)
6. [Contact](#contact)

## Introduction

This micro-framework is designed to provide a simple, clean, and efficient foundation for building PHP applications. It adheres to clean code principles to ensure maintainability and readability.

## Setup

### Prerequisites

Ensure you have PHP installed on your machine. 

### Getting Started

1. **Clone the repository:**

    ```bash
    git clone https://github.com/yourusername/php_micro_framework.git
    ```

2. **Navigate into the project directory:**

    ```bash
    cd php_micro_framework
    ```

3. **Install dependencies:**

    If you have any dependencies, install them as needed. This may include Composer for PHP libraries or other tools.

4. **Set up environment variables:**

    Create a `.env` file in the root directory based on `.env.example` and configure your settings.

## Usage

### Create `index.php`

First, make sure to create the `index.php` file in the `public` directory. This file will serve as the entry point for your application.

### Running the Server

To start the built-in PHP server, run:

```bash
php -S localhost:8080 -t public
