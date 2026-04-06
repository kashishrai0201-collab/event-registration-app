# Cloud-Based College Event Registration System

![Repo Size](https://img.shields.io/github/repo-size/kashishrai0201-collab/event-registration-app)
![Stars](https://img.shields.io/github/stars/kashishrai0201-collab/event-registration-app?style=social)
![Forks](https://img.shields.io/github/forks/kashishrai0201-collab/event-registration-app?style=social)
![License](https://img.shields.io/badge/license-Educational-blue)

## Live Demo

 **Project Link:**
 https://kashishrai.infinityfreeapp.com

## Project Overview

A **cloud-based event registration system** that allows students to register for college events easily.

The system generates a **QR-based event pass**, stores data in a database, and provides an **admin dashboard** for insights.

## Features

* Simple registration form
* Unique ID generation
* QR Code for each user
* Downloadable PDF pass
* Admin Dashboard
* Database storage
* Publicly accessible

## Screenshots

### Registration Page
<img width="1918" height="972" alt="resgistration" src="https://github.com/user-attachments/assets/acdc8c27-52ba-4148-8c0a-3069bd3e7a36" />

### Admin Login
<img width="1919" height="974" alt="admin" src="https://github.com/user-attachments/assets/e1bb0721-9823-453c-911e-5ca9ab7dc7a4" />

### Dashboard
<img width="1919" height="970" alt="dashboard" src="https://github.com/user-attachments/assets/5882c6c8-36ad-4c0b-821f-091cdd934051" />

### QR Code & Pass
<img width="752" height="520" alt="event_pass" src="https://github.com/user-attachments/assets/820277e0-6fc1-4bb6-8d85-dd6a35bc2012" />

## Tech Stack

**Frontend:**

* HTML
* Tailwind CSS
* JavaScript

**Backend:**

* PHP

**Database:**

* MySQL


##  Local Setup
Follow these steps to run locally...

##  Installation (Local Setup)

### 1. Clone Repo
(https://github.com/kashishrai0201-collab/event-registration-app.git)

### 2. Move to XAMPP

Place inside:
htdocs/

### 3. Start Server

* Apache 
* MySQL 

### 4. Create Database

```sql
CREATE TABLE registrations (
    id VARCHAR(10),
    name VARCHAR(100),
    event VARCHAR(100)
);
```
### 5. Run
```
(http://localhost/event-app/index.html)
```

## Google Cloud Architecture 

| Component        | Service              |
| ---------------- | -------------------- |
| Frontend Hosting | Google Cloud Storage |
| Backend API      | Cloud Functions      |
| Database         | Firestore            |
| Optional         | Cloud Run            |

## Key Learnings

* Full-stack development
* Cloud architecture design
* API integration
* QR & PDF generation

## Challenges

* Hosting issues
* DB connection errors
* Debugging fetch API

## Author

**Kashish Rai**     
**Aparna Pal**

## Support

If you like this project, give it a star on GitHub!
