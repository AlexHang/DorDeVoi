# DorDeVoi
DorDeVoi.ro website php files
1.	Software Requirements:
    a.	Client Requested
      i.	Log in/Sign Up : Facebook or email
      ii.	Safe (encrypted messages)
      iii.	Direct messages
      iv.	Trust Persons
      v.	Public Messages
    b.	Completed
      i.	Log in/Sign Up : Facebook or email
      ii.	Safe (encrypted messages)
      iii.	Direct messages
      iv.	Trust Persons
      v.	Public Messages


2.	System Requirements:
    a.	PHP & MySQL hosting service
    b.	Server able to execute Cron Jobs
    c.	Server able to send emails (Direct with PHP or SMTP )
    d.	HTTPS protocol, for encrypted files

3.	Structure:
    a.	All files in the Public HTML folder can be accessed through a web browser, by opening DorDeVoi.ro/”file-name”
    b.	The “Facebook” folder contains the Facebook API required to log in using FB, and to post to the “Dor De Voi” FB Page
    c.	All Android/IOS apps back-end files are located in the public_html/Android folder
    d.	Each other folder contains the back-end php and front-end files for all the other pages
    e.	“checkDate.php” and “notificari_zilnic.php” should be executed every 24 hours
4.	Technologies Used:
    a.	Front-end:
      i.	Web
        1.	HTML
        2.	CSS
        3.	JS (JQuery)
        4.	Bootstrap
    ii.	Android
      1.	Java (Android Studio)
      2.	Materialize
      3.	HTML/CSS/JS
    b.	Back-end
      i.	PHP for both WEB and Android
     c.	Databases
      i.	SQL running on MariaDB
5.	How it works ?
    a.	All data is sent to the back-end using Post/Get forms, and AJAX
    b.	The back-end is sending an SQL Query to the Database
    c.	The Back-end sends a response to the front-end
    d.	The front-end displays the data
