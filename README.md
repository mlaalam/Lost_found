🔍 Lost & Found — Digital Recovery Ecosystem

Lost & Found is a professional Full Stack web application designed for institutions to manage lost and found objects. This platform bridges a high-performance Laravel API with a dynamic React frontend, powered by Redux Toolkit for sophisticated state management.

---

📌 Main Features

👤 User Side

Secure Authentication: Seamless login/signup experience managed via Redux.

Smart Reporting: Report lost or found items with location and date tracking.

Global Search: Advanced filtering by item type and location for quick discovery.

Personal Dashboard: Users can track and update the status of their own reports.

---

🧑‍💼 Admin Side

Centralized Control: A dedicated dashboard for full system moderation.

Content Integrity: Tools to edit, resolve, or delete reports to maintain data accuracy.

Protected Routes: Administrative features secured by role-based access control.

---

🏗️ Technical Architecture

🔙 Backend (Laravel 10)

Laravel Sanctum: Secure session-based authentication using Stateful Cookies.

Role-Based Security: Middleware logic to differentiate between user and admin.

REST API: Structured endpoints optimized for high-speed data retrieval.

PHPUnit: Rigorous testing for authentication and object management logic.

---

🎨 Frontend (React & Redux Toolkit)

React 18 (Vite): A fast, component-based UI for a responsive user experience.

Redux Toolkit (RTK): * Global Store: Centralized management for user authentication status and item data.

Async Thunks: Handles all API communication with Laravel, managing loading and error states.

State Persistence: Ensures the user remains logged in across page refreshes using Sanctum sessions.

React Hook Form (useForm): Minimal re-renders and performant validation for declaration forms.

Testing Suite: Vitest and React Testing Library for component and integration testing.

TailwindCSS: Modern utility-first styling for a clean, professional look.

Axios: Interceptor-based API client configured for secure cookie handling.

---

🐳 Infrastructure & DevOps

Docker & Docker Compose: Orchestrates three containers: Laravel (PHP), React (Node), and MySQL (Database).

---

🗄️ Database

MySQL

 => Schema
 
    Users: id, name, email, password, role (user/admin).
    
    Items: id, title, description, type (lost/found), location, date, user_id.
    
---

📦 Project Deliverables

Complete Source Code (Laravel & React).

Docker Configuration (Dockerfile & docker-compose.yml).

Redux Store Structure (Slices for Auth and Items management).

Form Logic: Optimized submission flow using React Hook Form (useForm) with schema validation.

Migrations & Seeders to initialize testing data.

PHPUnit Test Suite for core functionalities.

Vitest and React Testing Library for component and state validation.

---

📦 Project Deliverables

Jira : https://laalammouad.atlassian.net/jira/software/c/projects/LF/boards/200/timeline?atlOrigin=eyJpIjoiNzU5N2YwMzkwNTNjNDExZWE4MzQ5MzYzYThkOTI4MmIiLCJwIjoiaiJ9

UML Complet : 

  class diagram : https://drive.google.com/file/d/1KaKd9n8Vnx3s9nH9hmnLyqri1Jazu-tc/view?usp=sharing

  use case diagram : https://drive.google.com/file/d/1_NGPCdkj3RfeM2u4RFmxGEL9NbI7_NK2/view?usp=sharing

Maquettes Figma : 
