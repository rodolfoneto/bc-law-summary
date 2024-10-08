# BC Laws Search Tool

This is a web-based Proof of Concept (PoC) application built using Laravel for the backend and React for the frontend. The tool allows users to search BC legislation documents and receive AI-generated summaries of the content.

#### Features

Legislation Search: Search documents from the BC Laws API by topic and jurisdiction.
AI-Powered Summarization: Summarizes retrieved documents using a connected LLM API.

#### Installation

Clone the repository:

Copy code

```bash
git clone https://github.com/yourusername/BC-Laws-Search.git
```

Navigate to the project directory:

Copy code

```bash
cd bc-law-summary
Install dependencies for Laravel

#Copy code
composer install

npm install
#Set up your environment variables (.env file) for Laravel.
#Usage
#Run the Laravel backend:

#Copy code
php artisan serve
#Run the React frontend:

#Copy code
npm start

```

Access the application in your browser at http://localhost:3000.

### Assumptions

The BC Laws API is publicly accessible and does not require authentication.
The LLM API used for document summarization supports basic REST integration.
Future Improvements

Enhance the user interface for a better user experience.
Implement authentication for secure access.
Add filtering options to refine search results.

### Deployment

The application can be deployed on any cloud provider (e.g., Hostinger, AWS) using containerization (e.g., Docker).
