# BC Laws Search Tool

This is a web-based Proof of Concept (PoC) application built using Laravel for the backend and React for the frontend. The tool allows users to search BC legislation documents and receive AI-generated summaries of the content.

#### Features

Legislation Search: Search documents from the BC Laws API by topic and jurisdiction.
AI-Powered Summarization: Summarizes retrieved documents using a connected LLM API.

#### Installation

Clone the repository:

Copy code

```bash
git clone https://github.com/rodolfoneto/bc-law-summary
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

-   The BC Laws API is publicly accessible and does not require authentication.
-   The LLM API used for document summarization supports basic REST integration.
-   The API response is in XML and is not "native" in Javascript.
-   CORS issues were encountered during development, and workarounds were implemented to ensure API calls function correctly.

### Future Improvements

-   Enhance the user interface for a better user experience.
-   Add filtering options to refine search results
-   Implement Unit Tests and Integration Tests.

### Deployment

Currently the project has CI/CD for hostinger via GitHubActions, just look at the .github/workflows/deploy.yml file
Each pull_request in main executes the deploy.

The application can be deployed on any cloud provider (e.g., Hostinger, AWS) using containerization (e.g., Docker).
