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
<img width="1920" height="1080" alt="resgistration" src="https://github.com/user-attachments/assets/d46d1968-9036-43be-8af5-14bb8112ef9d" />

### Admin Login
<img width="1920" height="1080" alt="admin" src="https://github.com/user-attachments/assets/6f35798e-fbfb-485e-9999-301cedbf08bb" />

### Dashboard
<img width="1920" height="1080" alt="dashboard" src="https://github.com/user-attachments/assets/88477ced-76c2-411b-8b8e-0322a4f137f1" />

### QR Code & Pass
<img width="1920" height="1080" alt="event_pass" src="https://github.com/user-attachments/assets/a495a277-2d29-49a9-8348-bc43a5b5c436" />

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

## Google Cloud Architecture (Proposed)

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
