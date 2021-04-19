# Story-Tests

## the visitor
- [ ] The visitor visits the homepage.
  - [ ] The visitor sees the weather information on the homepage.
  - [ ] The visitor sees some individual information on the homepage.
- [ ] The visitor sees the branding in the footer.

### gallery page
- [ ] The visitor visits the gallery page.
  - [ ] The visitor sees the images of the current year by course
  - [ ] The visitor sees an archive of images of the previous years by year and course

### team page
- [ ] The visitor visits the team page.
  - [ ] The visitor sees information about the team.

### FAQ page
- [ ] The visitor visits the FAQ page.
  - [ ] The visitor sees several questions and answers.

### contact page
- [ ] The visitor visits the contact page.
  - [ ] The visitor sees the contact information.
  - [ ] The visitor sees the contact form.
    - [ ] The visitor inserts her/his contact information and submits the form. 
    - [ ] The visitor gets a notification mail.
    - [ ] The admin gets a contact mail.

## the Guardian
- [ ] The to-be-guardian visits the homepage.

### register and log in
- [ ] The to-be-guardian registers for a guardian.
  - [ ] The to-be-guardian gets a mail notification for the account creation.
  - [ ] The new guardian needs to confirm his email address.
- [ ] After that, the guardian logs in.
  - [ ] If the guardian logs in the first time this year, her/he will be asked, if he/she wants to increase the participants grade by 1.

### dashboard
- [ ] Now the guardian visits the dashboard.
    - [ ] The guardian sees her profile.
  - [ ] The guardian sees some space for participants and their courses.
  - [ ] The guardian can navigate to cost overview.
  - [ ] The guardian can navigate to packing list.
  - [ ] The guardian can navigate to compact participant-and-course overview.
  - [ ] The guardian sees some customized information.

#### profile
- In her/his profile the guardian is able to edit ...
  - [ ] her/his Firstname and Lastname.
  - [ ] her/his postal address.
  - [ ] her/his email address.
  - [ ] her/his phone.
  - [ ] her/his password.
- [ ] Furthermore, the guardian is able to register for an SJA-state, if the wants to.

#### participants
- The guardian organizes participants data by ...
  - [ ] creating.
  - [ ] editing.
  - [ ] deleting.

#### courses
- [ ] The guardian views booked courses attached to the participants.
- [ ] The guardian is able to cancel booked courses.
  - [ ] The guardian gets an email, after he canceled a booked course.
  - [ ] Also does the admin.

#### overviews
- [ ] The guardian visits the cost overview.
  - [ ] The guardian prints the cost overview.
  - [ ] The guardian sees markers on already paid costs at the cost overview.
- [ ] The guardian visits the packing list.
  - [ ] The guardian prints the packing list.
  - [ ] The guardian sees only future courses at the packing list.
- [ ] The guardian visits the compact participant-and-course overview.
  - [ ] The guardian prints the compact participant-and-course overview.
    
#### customized information
- [ ] The guardian sees the state of all booked weather sensitive courses.

### farewell
- [ ] Finally, the guardian logs out.

## the booker
- [ ] The booker visits the homepage.
- [ ] The booker navigates to the course shop.
  - [ ] The booker sees a course overview with weather status at weather sensitive courses. 
  - [ ] The booker navigates to a course.
    - [ ] The booker sees the course information.
    - [ ] The booker sees the weather status at weather sensitive courses.

### booking 
- [ ] The booker tries to book a course by clicking on the book-button.
- [ ] The booker gets an explanations, how she/he needs to proceed.
  - [ ] The booker is able to log in.
  - [ ] The booker is able to redirect to the Register Page.
  - As soon as the booker is logged in as a guardian, ...
    - [ ] she/he adds a booking to the shopping chart.
    - [ ] she/he adds another participant to the same booking.
    - [ ] she/he removes a participant from the same booking.
    - [ ] she/he removes a booking from the shopping chart.
  - The checkout is blocked because ...
    - [ ] one participant is assigned to several courses, which take place at overlapping times.
    - [ ] one participant's grade is not matching with the condition of a course.
  - [ ] The booker checks out. 
    - [ ] The booker gets an email with all booked courses.
    - [ ] Also does the admin.

## the Employee
- [ ] The employee logs in.

### admin pannel
- Now the employee visits the admin panel and ...
  - [ ] sees his/her own profile.
  - [ ] can navigate to the guardians' profiles administration.
  - [ ] can navigate to the participants' data administration.
  - [ ] can navigate to the course administration.
  - [ ] can navigate to weather administration.
  - [ ] can navigate to the overview section.
  - [ ] can navigate to the general setting administration.

#### profile
- In her/his profile the employee is able to edit ...
  - [ ] her/his Firstname and Lastname.
  - [ ] her/his email address.
  - [ ] her/his phone.
  - [ ] her/his password.
  - [ ] her/his public transport subscription.

#### support
- For support purposes the employee is able to...
  - [ ] view all guardians.
  - [ ] edit the guardians' profiles.
  - [ ] view all participants.
  - [ ] edit the participants' data.
  - [ ] view all the bookings.
  - [ ] edit the bookings' data.
- [ ] The employee sees a duplicate-warning, if there are duplicated participants.
  - [ ] The employee can merge duplicates of participants.

#### courses
- Furthermore the employee manages courses by ...
  - [ ] creating one in draft mode.
  - [ ] publish one to published mode.
  - [ ] editing.
  - [ ] deleting.
  - [ ] review all actual courses on an overview.
  - [ ] review all past courses sort by years in an archive.

#### weather
- [ ] The employee views all courses, which are weather sensitive.
- There the employee can initiate ...
  - [ ] the cancellation of a weather sensitive course.
  - [ ] the approval of a weather sensitive course.

#### overviews
- The employee navigates to an overview for...
  - [ ] a selected course with all essential data.
    - [ ] The employee prints an overview for a selected course with all essential data.
  - [ ] all courses, which himself/herself is leading
  - [ ] all courses, which himself/herself is participating
  - [ ] all employees sorted by courses.
    - [ ] The employee prints an overview for all employees sorted by courses
  - [ ] all guardians by a selected year.
  - [ ] a selected guardian with her/his participants and their courses.
  - [ ] all participants by a selected year.
  - [ ] a selected participant with her/his courses and guardians.
  - [ ] all bookings by a selected year.
  - [ ] all cancellations by a selected year.

#### general settings
- [ ] The employee defines the general maximum of course, a participant is able to attend.
- The employee defines the time of ...
  - [ ] registration start.
  - [ ] registration end.

### farewell
- [ ] Finally, the employee logs out.

## system
- [ ] At the registration start, the admin gets notified by an email.
- [ ] At the registration end, the admin gets notified by an email.
- [ ] After the registration end, all guardians receive an email with an overview of all their bookings.
- [ ] The day before the course, the guardian receives an email notification with all important information.
