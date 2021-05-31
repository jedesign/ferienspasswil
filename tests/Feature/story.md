# Story-Tests

## the visitor
_HomeTest::can_view_home_page()_
- [x] The visitor can view the home page.
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

### register
_VisitorRegistersAsGuardianTest_
- [x] The visitor can access the registration page through the home page.
    - [x] The visitor can view the registration page.
        - [x] The registration page contains a livewire component.
- [x] The visitor can register as a guardian.
    - [x] The unverified guardian can view the verification page.
        - [x] The unverified guardian can resend the verification email.
    - [x] The unverified guardian can verify her/his email.
        - [x] The guardian can not verify her/his email again.
    
_GuardianRegisterFormTest / PasswordConfirmFormTest_
- [x] All form elements are working.

### login
_UserLogsInTest_
- [x] The visitor can access the login page through the home page.
    - [x] The visitor can view the login page.
        - [x] The login page contains a livewire component.

_LoginFormTest_
- [x] All form elements are working.

### reset password
_UserResetsPasswordTest_
- [x] The user can view the password request page.
- [x] The user enters a valid email address and gets an email for the password reset.
- [x] The user can view the password reset page with the valid token link.
- [x] The user (if it is a user) can reset password.

_PasswordRequestFormTest / PasswordResetFormTest_
- [x] All form elements are working.

### access protected pages
_UserHasToConfirmPasswordToAccessRouteTest_
- [x] The user has to confirm his/her password before visiting a protected page.
- [x] The user confirms her/his password and gets redirected.

### log out
_UserLogsOutTest::visitor_can_not_log_out_
- [x] The user can not log out.

### course page
- [x] The visitor navigates to the course shop.
    - [ ] The visitor sees a course overview with weather status at weather sensitive courses.
    - [ ] The visitor navigates to a course.
        - [ ] The visitor sees the course information.
        - [ ] The visitor sees the weather status at weather sensitive courses.

#### booking
- [ ] The visitor tries to book a course by clicking on the book-button.
- [ ] The visitor gets an explanations, how she/he needs to proceed.
    - [ ] The visitor is able to log in.
    - [ ] The visitor is able to redirect to the Register Page.
    - As soon as the visitor is logged in as a guardian, ...
        - [ ] she/he adds a booking to the shopping chart.
        - [ ] she/he adds another participant to the same booking.
        - [ ] she/he removes a participant from the same booking.
        - [ ] she/he removes a booking from the shopping chart.
    - The checkout is blocked because ...
        - [ ] one participant is assigned to several courses, which take place at overlapping times.
        - [ ] one participant's grade is not matching with the condition of a course.
    - [ ] The guardian checks out.
        - [ ] The guardian gets an email with all booked courses.
        - [ ] Also does the admin.

## the Guardian
_GuardianLogsInTest_
- [x] The guardian can log in.
    - [x] The guardian can view the dashboard.
    - [x] The guardian _can not_ visit the admin area.
    - [x] The guardian is redirected if already logged in.

### dashboard
- [ ] Now the guardian visits the dashboard.
    - [ ] The guardian sees her profile.
    - [x] The guardian sees some space for participants.
    - [ ] The guardian sees some space for participants' courses.
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
_GuardianManagesParticipantsTest_
- The guardian organizes participants data by ...
    - [x] creating.
      - _ParticipantCreateFormTest_
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

## the Employee
_EmployeeLogsInTest_
- [x] The employee can log in.
    - [x] The employee can view the admin area.
    - [x] The employee _can not_ visit the dashboard.
    - [x] The employee is redirected if already logged in.

### admin area
- Now the employee visits the admin area and ...
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

## system
- [ ] At the registration start, the admin gets notified by an email.
- [ ] At the registration end, the admin gets notified by an email.
- [ ] After the registration end, all guardians receive an email with an overview of all their bookings.
- [ ] The day before the course, the guardian receives an email notification with all important information.
