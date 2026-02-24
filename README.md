# dream-tour-sri-lanka - Web-Based Tour Booking and Reservation System
## Project Overview
Dream Tour Sri Lanka is a web-based tour booking system developed using PHP and MySQL.
The system allows users to browse available tour packages, register and log in securely, and submit online reservations.

This project was developed as part of the SEN4002 Software Design and Development module and demonstrates practical implementation of the Software Development Life Cycle (SDLC), including coding, testing, evaluation, and maintenance planning.

## Project Objectives

- Provide an online platform for tour package booking
- Store customer reservation data securely
- Demonstrate database integration and backend development
- Apply SDLC best practices in implementation and testing

## Key Features

- User Registration and Login
- Tour Package Display
- Online Reservation Submission
- Database Storage of Booking Information
- Login Validation

## Technologies Used

Frontend - HTML, CSS, JavaScript
Backend - PHP
Database - MySQL
Server - XAMPP (Apache + MySQL)
Version Control - GitHub

## Database Structure
The system uses three relational tables:

### 1 users
Stores registered customer details.
- id(Primary Key)
- name
- email
- password

### 2 packages
Stores tour package details.
- id (Primary Key)
- package_name
- description
- price

### 3 reservations
Stores booking information.
- id (Primary key)
- User_id
- package_id
- booking_date

## Installation and Setup Guide

### Step 1: Install XAMPP
Download from:
https://www.apachefriends.org/

Start:
- Apache
- MySQL

### Step 2: Clone or Download Repository
Clone using:
git clone https://github.com/Liseni1/dream-tour-sri-lanka.git


### Step 3: Create Database
Open phpMyAdmin
http://localhost/phpmyadmin

Create a database and import the SQL tables for:

- users
- packages
- reservations

### Step 4: Run the Application

Open browser:
http://localhost/dreamtoursl

## Testing
The system was tested using:
- Functional Testing (Login, Reservation, Package Display)
- Form Validation Testing
- Database Insertion Testing
- Edge Case Testing (Empty fields, invalid login)

All major functionalities operate successfully.

## Security Features
- Input validation to prevent invalid submissions
- Session management for secure login control

## Future Improvements

- Online Payment Gateway Integration
- Admin Dashboard for managing bookings
- Mobile Responsive Design
- Booking Confirmation Emails
- Cloud Development

## SDLC Phases Applied
- Requirement Analysis
- System Design
- Implementation
- Testing
- Evaluation and Maintenance Planning

