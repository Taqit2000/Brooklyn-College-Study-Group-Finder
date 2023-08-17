Project Title: Brooklyn College Study Group Finder


Project Overview: 
The Brooklyn College Study Group Finder is an innovative web development project designed to enhance the academic experience of students by facilitating the formation of study groups. The primary objective of this platform is to foster collaborative learning, encourage peer-to-peer support, and promote a deeper understanding of study topics among Brooklyn College students. By providing a user-friendly interface, the website aims to solve the challenges often faced by students when it comes to finding study partners and coordinating study sessions.The purpose of the Brooklyn College Study Group Finder is to create an online community where students can easily connect, collaborate, and engage in meaningful study sessions. The objectives of the project include: Facilitate Study Group Formation, Enhance Learning through Collaboration, Optimize Time Management, Foster Innovation and Critical Thinking, Promote Peer-to-Peer Support. The primary target audience for the Brooklyn College Study Group Finder includes current Brooklyn College students across various disciplines and academic levels. This platform aims to benefit both undergraduate and graduate students seeking collaborative learning opportunities. The website will offer a range of functionalities to meet the needs of its users, including:User Registration and Login, Course Enrollment, Course Timings and Room Availability, User Profiles. 


Project Timeline: 
Create a tentative timeline for your project's development. Divide the development process into phases or milestones and set achievable deadlines for each. This will help you track progress and ensure timely completion.Project Scope: Outline the scope of your project, including the key features and functionalities you intend to develop. Mention the technologies (HTML, CSS, JavaScript, PHP, MySQL) you will use to build the website. Also, specify any third-party libraries or frameworks you plan to incorporate.
Week 1: Defined  project objectives,  requirements ,finalized the list of key features and functionalities and then started to work on the website's front-end structure using HTML and CSS. Also, completed the user registration and login pages. 
Week2: Completed user registration and login functionality, developed the user profile page where students can add courses. Integrated JavaScript for time countdown and user interaction. Then set up the back-end server using PHP and started  working on the database integration using MySQL.
Week3: Completed writing PHP codes and joining front end to backend database. The user input in the HTML forms were verified and then inserted to the database. 


Project Architecture: 
The architecture will be organized into three main components: the Front-end, the Back-end, and the Database.
Front-end: The front-end component handles the user interface and user interactions. It is developed using HTML, CSS, and JavaScript.The front-end will include pages for user registration, login, course selection. Navigation between different pages will be facilitated using a navigation bar or menu.
Back-end: The back-end component manages data processing, and communication with the database. It is built using PHP to handle server-side operations. The back-end will handle user authentication, course and study group management. The sign in, adding courses, logging in and out will be dealt by  interacting  with the database by storing and retrieving data.
Database: The MySQL database will store user information, course information, study group details.  There will be 4 tables inside 1 database. The user information table will contain user biographical data and have an id that will be created randomly in the backend and stored in the table. Then the other tables are going to be for courses. The courses will have the user id, course names and timing. The database will be accessed and manipulated using SQL queries from the back-end.
So, a user can input from the front end and that will be stored in the database via backend while signup / adding courses. When it comes to login, the data will be retrieved from the database via backend and then the user will be notified in the front end. 
User Interface (UI) Design

Overall Design Concept:The background color of the body is set to a light gray (#D9D9D9), providing a neutral and clean background for the entire page.
Header: The header has a dark burgundy color (#7B2240) and a height of 85px.The header contains an image with an ID of "headerImage" which has some margins applied to adjust its positioning. The title in the header ("headerTitle") is centered with white font color and a Fantasy font family. The navigation bar ("navbar") has a light gray background (#F1F1F1) and links that change color on hover (#7B2240).
Navigation: The navigation links ("navbar a") are left-aligned, have a block display, and a black font color. On hover, the navigation links change background color to the header color (#7B2240) and the font color to white.
Main Body Content: The main content is organized using flexbox. The content is divided into two flex children ("flex-child"). The left child ("leftChild") has a width of 20%, a rounded border, and a background image. However, the actual image is commented out in your code. The right child ("rightChild") has a rounded border, a light gray background (#D9D9D9), and black text.
Form Styling: Form input elements have a width of 50%, padding, margin, and a border. When focused, the input elements change their background color to "indian red".
Buttons: The "SignUp" and "EnrollButton" buttons have a burgundy background (#7B2240), bold text, and a border radius of 20px. On hover, the button background color changes to a lighter shade (#C17985).
Footer: The footer has a burgundy background (#7B2240), white text color, and is centered. Font size is set to 15px and a Sans-serif font family is used.
Social Media Icon: There's a social media icon with an ID of "fa", aligned to the right and styled as a large icon. This was imported from the Font awesome website. 


Database Design
There is only 1 database. The name is “studyfinder”. There are 4 tables in this database. 
UserInfo table: This table takes firstname, lastname, email, password, phone no, gender from the front end and an id from backend is generated and placed here.


Functionality & Features
List the main functionalities and features that users will interact with on your website. For each feature, describe its purpose, how users will use it, and any additional technical details involved in its implementation. For eg: if you have a date displayed, explain why it is required in your website. What additional features does your website provide? Tip: Talk about JS features you have used here.
Navigation bar: The navigation bar provides the user the navigation to the whole website. They can go to know about the college and then the contacts page to see the contacts. In the home they will get all the functionality.
SingUp Form: This form helps the user to sign up. The user can sign up here by providing information like name, phone, password, gender. The user can also login if they already signed up. They will get an id once they sign up. Then that id can be used to add courses. The id is created in PHP by generating a random number and adding a string “SF” in the front.
Add course Form:The form allows the user to insert their id and password. Once inserted the id and password the enroll.php file takes the values and checks if the user is already in the database then the user is allowed to take the course. If not available then no id found is alerted.
Popular group div: In this div I have inserted the popular groups that are available and the room numbers and a countdown when the study will begin. This was accomplished in the home.js file via javascript. So, there are functions written for timing which calculates how much time is left for the study to start. The color also changes for the timer making it attractive to look for the users. There is an array of colors and every second the color changes according to the colors in the array.  
Technology Stack
Front end: HTML 5, CSS 3, javascript ES6
Backend: PHP  8.0.1, MAMP for windows, MySQL-5.7.24 . 
Challenges & Mitigation
It was initially tough to make a decision about the design because I had to think about what the user would find friendly. Besides, new ideas would come to mind every now and then but I had to come up with a concise design and features to implement in a short time. I discussed these with the professor and figured which things can be implemented within the given time.
References
https://www.w3schools.com/ , 


