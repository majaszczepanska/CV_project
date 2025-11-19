👩‍💻 Maja Szczepańska - Web CV / Personal Portfolio

This repository hosts my personal portfolio and CV website, a simple, responsive single-page application built using core web technologies. It serves as a digital presentation of my education, technical skills, courses, professional qualifications, and personal interests.

✨ Key Features

    Bilingual Support: The site offers full navigation between  English (index.html) versions and Polish (index_pl.html).

    Responsive Design: Optimized for all devices, utilizing a Hamburger menu for clean navigation on mobile screens.

    One-Click Download: The "Download CV" button provides immediate access to my CV in PDF format (cv.pdf).

    Structured Content: The page is clearly segmented into the following sections for easy scanning:

        About Me (#about)

        Experience & Education (#experience)

        Interests & Skills (#interests_skills)

        Courses (#courses)

        Exams (#exams)

        Contact (#contact)

    Contact Form: Includes a simple HTML form for direct inquiries.

🚀 Technologies Used

This project is intentionally built with simplicity and core technologies to ensure fast loading and easy maintenance.

    HTML5: Provides the semantic structure and content layout.

    CSS3: Handles all styling, layout, and responsive breakpoints.

    JavaScript: Used for the interactive functionality of the mobile navigation bar (toggling the list when the burger icon is clicked).

    Font Awesome: Integrated for modern icons used across the skills and contact sections.

📂 Project Structure

The repository has a straightforward structure for static website hosting:

.
├── index.html           # Main English version of the CV
├── index_pl.html        # Polish version of the CV
├── style.css            # Stylesheet for both language versions
├── photo.png            # Profile picture
├── cv.pdf               # Downloadable CV file
├── contact.php          # Contact with author (requires online server to work)
└── README.md            # This documentation file

🛠️ Local Setup and Deployment

Since this project consists entirely of static HTML, CSS, and JavaScript files, it does not require a backend server or complex build tools to run.

    Clone the Repository:
    Bash

git clone 

Open in Browser: Navigate to the cloned directory and simply open the index.html file in your preferred web browser.
Bash

    cd your-cv-repo
    open index.html # (or equivalent command for your OS)


📧 Contact & Form Submission

The contact section allows users to directly reach me.

Form Functionality

The submission of the contact form is handled by a backend script written in PHP.

    Endpoint: The form data is sent to contact.php using the POST method.

    Purpose: The contact.php script is responsible for processing the input fields (First Name, Last Name, Email, and Message) and routing the data to my email address.

Note: For the contact form to work correctly in a production environment, the server hosting this project must have PHP support enabled and properly configured for sending emails (e.g., mail server settings).

Direct Contact Links

You can also reach me directly via the following channels:
Channel	Details
Email	maja.szczepanska06@gmail.com
GitHub	majaszczepanska
Facebook	Maja Szczepańska


This portfolio is a project by Maja Szczepańska.